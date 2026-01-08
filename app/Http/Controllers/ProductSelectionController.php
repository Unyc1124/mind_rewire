<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductSelectionController extends Controller
{
    public function update(Request $request)
    {
        $productId = $request->product_id;
        $qty = max(0, (int) $request->quantity);

        $selected = session()->get('selected_products', []);

        if ($qty === 0) {
            unset($selected[$productId]);
        } else {
            $selected[$productId] = $qty;
        }

        session()->put('selected_products', $selected);

        return response()->json([
            'count' => array_sum($selected)
        ]);
    }

    public function checkout()
    {
        $selected = session('selected_products', []);

        if (empty($selected)) {
            return redirect('/products')->with('error', 'No products selected');
        }

        $products = Product::whereIn('id', array_keys($selected))->get();

        return view('checkout.selected', compact('products', 'selected'));
    }



}
