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
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\NavigatorController;
use App\Http\Controllers\ProductSelectionController;

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

/* ---------------- CHECKOUT (CheckoutController) ---------------- */
Route::prefix('checkout')->group(function () {
    Route::get('/details', [CheckoutController::class, 'details'])
        ->name('checkout.details');

    Route::post('/place-order', [CheckoutController::class, 'placeOrder'])
        ->name('checkout.placeOrder');

    Route::post('/create', [CheckoutController::class, 'createRazorpayOrder'])
        ->name('checkout.create');

    Route::get('/payment/{order}', [CheckoutController::class, 'payment'])
        ->name('checkout.payment');

    Route::post('/payment/success', [CheckoutController::class, 'paymentSuccess'])
        ->name('checkout.payment.success');

    Route::get('/success/{order}', [CheckoutController::class, 'success'])
        ->name('checkout.success');
});

/* ---------------- PRODUCT SELECTION (session-based) ---------------- */
Route::post('/select-product', [ProductSelectionController::class, 'update'])
    ->name('product.select');

Route::get('/checkout-selected', [ProductSelectionController::class, 'checkout'])
    ->name('checkout.selected');

/* ---------------- ORDER SUCCESS ---------------- */
Route::get('/order-success/{order}', [CheckoutController::class, 'success'])
    ->name('order.success');

/* ---------------- BOOKING SUCCESS ---------------- */
Route::get('/booking-success/{id}', function ($id) {
    $booking = \App\Models\Billing::with('bookedTimeSlots', 'therapyCategory')
        ->findOrFail($id);

    return view('mainsite.booking-success', compact('booking'));
});

/* ---------------- NAVIGATOR ---------------- */
Route::get('/navigator/stories', function () {
    return view('navigator.stories');
});

Route::prefix('navigator')->group(function () {
    Route::get('/start', [NavigatorController::class, 'start']);
    Route::post('/analyze', [NavigatorController::class, 'analyze']);
    Route::get('/results', [NavigatorController::class, 'results']);
    Route::get('/plan', [NavigatorController::class, 'plan']);
    Route::view('/safety', 'navigator.safety');
});

/* ---------------- DEBUG (remove in production) ---------------- */
Route::get('test-cart', function () {
    dd(session('cart'));
});

Route::get('/test-mail', function () {
    $order = \App\Models\Order::latest()->first();

    Mail::to('team.mindrewire@gmail.com')
        ->send(new \App\Mail\OrderInvoiceMail($order));

    Mail::to('team.mindrewire@gmail.com')
        ->send(new \App\Mail\AdminOrderNotificationMail($order));

    return 'Mail sent';
});

Route::get('/internship', function () {
    return view('internships.internship');
})->name('internship');

/* ---------------- AUTH ---------------- */
Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');