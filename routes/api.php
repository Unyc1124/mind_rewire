<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Models\StoryCard;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('razorpay-webhook', [PaymentController::class, 'razorpayWebhook']);


/*
|--------------------------------------------------------------------------
| Mind Rewire Navigator - Story Cards API
|--------------------------------------------------------------------------
*/

Route::get('/story-cards', function () {
    return response()->json(
        \App\Models\StoryCard::where('is_active', true)->get()
    );
});

