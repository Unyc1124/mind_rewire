<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class NavigatorController extends Controller
{
    public function start()
    {
        return view('navigator.start');
    }

    public function analyze(Request $request)
    {
        $response = Http::timeout(60)->post('http://127.0.0.1:8000/navigator
', [
            'text' => $request->text,
            'age_group' => $request->age_group
        ]);

        if (!$response->successful()) {
            return back()->with('error', 'Unable to analyze right now.');
        }

        session([
            'navigator_result' => $response->json()
        ]);

        return redirect('/navigator/results');
    }

    public function results()
    {
        $result = session('navigator_result');

        if (!$result) {
            return redirect('/navigator/start');
        }

        // -----------------------------------
        // 🔹 PRODUCT RECOMMENDATION LOGIC
        // -----------------------------------

        $keywordMap = [
            'Anxiety & worry' => ['calm', 'stress', 'anxiety', 'grounded', 'breath'],
            'Sleep patterns'  => ['sleep', 'ritual', 'relax', 'night'],
            'Stress levels'   => ['stress', 'reset', 'tension'],
            'Low mood'        => ['mood', 'uplift', 'confidence', 'energy'],
        ];

        $keywords = [];

        foreach ($result['focus_areas'] as $area) {
            if (isset($keywordMap[$area])) {
                $keywords = array_merge($keywords, $keywordMap[$area]);
            }
        }

        $keywords = array_unique($keywords);

        $products = Product::where('is_active', 1)
            ->where(function ($q) use ($keywords) {
                foreach ($keywords as $word) {
                    $q->orWhere('name', 'LIKE', "%{$word}%")
                      ->orWhere('description', 'LIKE', "%{$word}%");
                }
            })
            ->limit(8)
            ->get();

        return view('navigator.results', [
            'result' => $result,
            'products' => $products
        ]);
    }

    public function plan()
    {
        $result = session('navigator_result');

        if (!$result) {
            return redirect('/navigator/start');
        }

        return view('navigator.plan', [
            'result' => $result
        ]);
    }
}
