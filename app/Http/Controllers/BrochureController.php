<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrochureDownload;
use App\Mail\BrochureMail;
use App\Mail\BrochureAdminMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class BrochureController extends Controller
{
    public function download(Request $request)
    {
        try {

            $request->validate([
                'name'  => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|string|max:20'
            ]);

            // Save to DB
            $lead = BrochureDownload::create([
                'name'  => $request->name,
                'email' => $request->email,
                'phone' => $request->phone
            ]);

            // Send brochure PDF to user
            Mail::to($request->email)->send(new BrochureMail($lead));

            // Notify admin
            Mail::to(config('mail.admin_email'))->send(new BrochureAdminMail($lead));

            return response()->json(['success' => true]);

        } catch (\Exception $e) {
            Log::error('Brochure Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}