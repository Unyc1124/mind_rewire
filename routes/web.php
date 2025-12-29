<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\MainSiteController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

//test-mail
use App\Mail\OrderInvoiceMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Order;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['variable_replace']], function () {

    /* ---------------- PAGES ---------------- */
    Route::get('/', [MainSiteController::class, 'index']);
    Route::get('about-us', [MainSiteController::class, 'aboutUs']);
    Route::get('founders', [MainSiteController::class, 'founders']);
    Route::get('assessments', [MainSiteController::class, 'assessments']);
    Route::get('success-stories', [MainSiteController::class, 'successStories']);
    Route::get('careers', [MainSiteController::class, 'careers']);
    Route::get('solutions', [MainSiteController::class, 'solutions']);
    Route::get('book-session', [MainSiteController::class, 'bookSession']);
    Route::get('blogs', [MainSiteController::class, 'blogs']);
    Route::get('contact-us', [MainSiteController::class, 'contactUs']);

    /* ---------------- PRODUCTS ---------------- */
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/{slug}', [ProductController::class, 'show']);

    /* ---------------- CART ---------------- */
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

    /* ---------------- CHECKOUT (CART FLOW) ---------------- */
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');

    /* ---------------- PAYMENT (PRODUCT + CART) ---------------- */
    Route::get('/checkout/payment/{order}', [OrderController::class, 'payment'])
        ->name('checkout.payment');

    Route::post('/checkout/payment-success', [OrderController::class, 'paymentSuccess'])
        ->name('checkout.payment.success');

    Route::post('/checkout/payment-failed', [OrderController::class, 'paymentFailed'])
        ->name('checkout.payment.failed');

    /* ---------------- BUY NOW FLOW ---------------- */
    Route::post('/buy-now', [OrderController::class, 'buyNow'])
        ->name('buy.now');

    Route::post('/buy-now/pay', [OrderController::class, 'buyNowPay'])
        ->name('buy.now.pay');
});

/* ---------------- SUCCESS PAGE ---------------- */
Route::get('/order-success/{id}', [OrderController::class, 'success'])
    ->name('order.success');

/* ---------------- DEBUG ONLY ---------------- */
Route::get('/test-cart', function () {
    dd(session('cart'));

    Route::get('/checkout/payment/{order}', [OrderController::class, 'payment'])
    ->name('checkout.payment');

});
//test-mail route
Route::get('/test-mail', function () {
    $order = Order::latest()->first();
    Mail::to('yourgmail@gmail.com')->send(new OrderInvoiceMail($order));
    return 'Mail sent';
});

/* ---------------- AUTH ---------------- */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');