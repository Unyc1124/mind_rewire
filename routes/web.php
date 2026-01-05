<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\MainSiteController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;


// test-mail
use App\Mail\OrderInvoiceMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Order;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['variable_replace']], function () {

    /* ---------------- MAIN PAGES ---------------- */
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

    Route::get('career-counselling', [MainSiteController::class, 'careerCounselling']);
    Route::get('school-programs', [MainSiteController::class, 'schoolPrograms']);
    Route::get('student-mental-wellness', [MainSiteController::class, 'studentMentalWellness']);
    Route::get('corporate-wellness', [MainSiteController::class, 'corporateWellness']);
    Route::get('trauma-rewiring', [MainSiteController::class, 'traumaRewiring']);
    Route::get('individual-therapy-coach', [MainSiteController::class, 'individualTherapyCoach']);
    Route::get('untangle', [MainSiteController::class, 'untangle']);
    Route::get('help', [MainSiteController::class, 'help']);

    /* ---------------- BOOKING ---------------- */
    Route::get('booking/{plan}', [MainSiteController::class, 'booking'])
        ->name('booking.plan');

    Route::get('plans-pricing', [MainSiteController::class, 'plansPricing']);
    Route::get('enquiry-form', [MainSiteController::class, 'enquiryForm']);

    /* ---------------- LEGAL / POLICY ---------------- */
    Route::get('terms-of-service', [MainSiteController::class, 'termsOfService']);
    Route::get('privacy-policy', [MainSiteController::class, 'privacyPolicy']);
    Route::get('data-protection', [MainSiteController::class, 'dataProtection']);
    Route::get('refund-policy', [MainSiteController::class, 'refundPolicy']);
    Route::get('cookies-policy', [MainSiteController::class, 'cookiesPolicy']);
    Route::get('compliance-statement', [MainSiteController::class, 'complianceStatement']);

    /* ---------------- BLOG DETAIL PAGES ---------------- */
    Route::get('nervous-system-overreaction-explained', [MainSiteController::class, 'nervousSystemOverreactionExplained']);
    Route::get('help-child-shutting-down', [MainSiteController::class, 'helpChildShuttingDown']);
    Route::get('chronic-fatigue-despite-sleep', [MainSiteController::class, 'chronicFatigueDespiteSleep']);
    Route::get('understanding-trauma-bonds', [MainSiteController::class, 'understandingTraumaBonds']);
    Route::get('first-therapy-session-guide', [MainSiteController::class, 'firstTherapySessionGuide']);
    Route::get('chai-for-loneliness-your-everyday-friend-for-anxiety-and-stress', [MainSiteController::class, 'chaiForLoneliness']);

    /* ---------------- PRODUCTS ---------------- */
    Route::get('products', [ProductController::class, 'index']);
    Route::get('products/{slug}', [ProductController::class, 'show']);

    /* ---------------- CART ---------------- */
    Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('cart/clear', [CartController::class, 'clear'])->name('cart.clear');

    /* ---------------- CHECKOUT ---------------- */
    Route::get('checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('place-order', [OrderController::class, 'placeOrder'])->name('place.order');

    /* ---------------- PAYMENT (CART + BUY NOW) ---------------- */
    Route::get('checkout/payment/{order}', [OrderController::class, 'payment'])
        ->name('checkout.payment');

    Route::post('checkout/payment-success', [OrderController::class, 'paymentSuccess'])
        ->name('checkout.payment.success');

    Route::post('checkout/payment-failed', [OrderController::class, 'paymentFailed'])
        ->name('checkout.payment.failed');

    Route::post('buy-now', [OrderController::class, 'buyNow'])->name('buy.now');
    Route::post('buy-now/pay', [OrderController::class, 'buyNowPay'])->name('buy.now.pay');

    /* ---------------- RAZORPAY (SESSION / PLAN FLOW) ---------------- */
    Route::post('submit-booking', [PaymentController::class, 'submitBooking']);
    Route::post('get-state', [PaymentController::class, 'getStateList']);

    Route::post('razorpay/success', [PaymentController::class, 'paymentSuccess']);
    Route::post('razorpay/failed', [PaymentController::class, 'paymentFailed']);

    /* ---------------- FORMS ---------------- */
    Route::post('submit-enquiry', [MainSiteController::class, 'submitEnquiry']);
    Route::post('submit-journal-request', [MainSiteController::class, 'submitJournalRequest']);

    /* ---------------- SITEMAP ---------------- */
    Route::get('sitemap.xml', [SiteMapController::class, 'index']);
    Route::get('sitemap/basic.xml', [SiteMapController::class, 'basic']);
});

/* ---------------- ORDER SUCCESS ---------------- */
Route::get('order-success/{id}', [OrderController::class, 'success'])
    ->name('order.success');

/* ---------------- DEBUG ---------------- */
Route::get('test-cart', function () {
    dd(session('cart'));
});

/* ---------------- TEST MAIL ---------------- */
Route::get('test-mail', function () {
    $order = Order::latest()->first();
    Mail::to('yourgmail@gmail.com')->send(new OrderInvoiceMail($order));
    return 'Mail sent';
});

Route::get('/test-mail', function () {
    $order = \App\Models\Order::latest()->first();

    Mail::to('team.mindrewire@gmail.com')
        ->send(new \App\Mail\OrderInvoiceMail($order));

    Mail::to('team.mindrewire@gmail.com')
        ->send(new \App\Mail\AdminOrderNotificationMail($order));

    return 'Mail sent';
});

// Route::get('/booking-success/{billing}', [PaymentController::class, 'bookingSuccessPage'])
//     ->name('booking.success');
Route::get('/booking-success/{id}', function ($id) {
    $booking = \App\Models\Billing::with('bookedTimeSlots','therapyCategory')
        ->findOrFail($id);

    return view('mainsite.booking-success', compact('booking'));
});



/* ---------------- AUTH ---------------- */
Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

