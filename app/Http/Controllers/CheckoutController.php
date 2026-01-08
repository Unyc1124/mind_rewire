<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Str;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderInvoiceMail;
use App\Mail\AdminOrderNotificationMail;

class CheckoutController extends Controller
{
    /**
     * STEP 1
     * Show selected products summary
     * URL: /checkout-selected
     */
    public function selected()
    {
        $selected = session('selected_products', []);

        if (empty($selected)) {
            return redirect('/products')->with('error', 'No products selected');
        }

        $products = Product::whereIn('id', array_keys($selected))->get();

        $subtotal = 0;
        foreach ($products as $product) {
            $subtotal += $product->price * $selected[$product->id];
        }

        return view('checkout.selected', compact('products', 'selected', 'subtotal'));
    }

    /**
     * STEP 2
     * Checkout customer details form
     * URL: /checkout/details
     */
    public function details()
    {
        $selected = session('selected_products', []);

        if (empty($selected)) {
            return redirect('/products');
        }

        $products = Product::whereIn('id', array_keys($selected))->get();

        $subtotal = 0;
        foreach ($products as $product) {
            $subtotal += $product->price * $selected[$product->id];
        }

        return view('checkout.details', compact('products', 'selected', 'subtotal'));
    }

    /**
     * STEP 3
     * Create Order + Order Items + Razorpay Order (AJAX)
     * URL: POST /checkout/create
     */
    public function createRazorpayOrder(Request $request)
    {
        $request->validate([
            'customer_name'    => 'required|max:255',
            'customer_email'   => 'required|email',
            'customer_phone'   => 'required',
            'shipping_address' => 'required',
        ]);

        $selected = session('selected_products');

        if (!$selected || count($selected) === 0) {
            return response()->json(['error' => 'Cart is empty'], 400);
        }

        $products = Product::whereIn('id', array_keys($selected))->get();

        $subtotal = 0;
        foreach ($products as $product) {
            $subtotal += $product->price * $selected[$product->id];
        }

        /* ===============================
           CREATE ORDER (DB)
        =============================== */
        $order = Order::create([
            'order_number'     => 'MR-' . strtoupper(Str::random(8)),
            'subtotal'         => $subtotal,
            'tax'              => 0,
            'shipping'         => 0,
            'total_amount'     => $subtotal,
            'payment_method'   => 'razorpay',
            'payment_status'   => 'pending',
            'status'           => 'pending',
            'customer_name'    => $request->customer_name,
            'customer_email'   => $request->customer_email,
            'customer_phone'   => $request->customer_phone,
            'shipping_address' => $request->shipping_address,
        ]);

        /* ===============================
           CREATE ORDER ITEMS
        =============================== */
        foreach ($products as $product) {
            OrderItem::create([
                'order_id'     => $order->id,
                'product_id'   => $product->id,
                'product_name' => $product->name,
                'price'        => $product->price,
                'quantity'     => $selected[$product->id],
                'total'        => $product->price * $selected[$product->id],
            ]);
        }

        /* ===============================
           CREATE RAZORPAY ORDER
        =============================== */
        $api = new Api(
            config('services.razorpay.key'),
            config('services.razorpay.secret')
        );

        $razorpayOrder = $api->order->create([
            'receipt'  => $order->order_number,
            'amount'   => $subtotal * 100, // paise
            'currency' => 'INR',
        ]);

        $order->update([
            'razorpay_order_id' => $razorpayOrder['id']
        ]);

        return response()->json([
            'key'      => config('services.razorpay.key'),
            'amount'   => $subtotal * 100,
            'order_id' => $razorpayOrder['id'],
            'name'     => $order->customer_name,
            'email'    => $order->customer_email,
            'contact'  => $order->customer_phone,
        ]);
    }

    /**
     * STEP 4
     * Razorpay payment success callback (AJAX)
     * URL: POST /checkout/payment/success
     */
    // public function paymentSuccess(Request $request)
    // {
    //     $order = Order::where('razorpay_order_id', $request->razorpay_order_id)
    //         ->firstOrFail();

    //     $order->update([
    //         'razorpay_payment_id' => $request->razorpay_payment_id,
    //         'razorpay_signature'  => $request->razorpay_signature,
    //         'payment_status'      => 'paid',
    //         'status'              => 'confirmed',
    //     ]);

    //     session()->forget(['selected_products', 'current_order_id']);

    //     return response()->json([
    //         'redirect' => route('checkout.success', $order->id)
    //     ]);
    // }

//     public function paymentSuccess(Request $request)
// {
//     $order = Order::where('razorpay_order_id', $request->razorpay_order_id)->firstOrFail();

//     $order->update([
//         'razorpay_payment_id' => $request->razorpay_payment_id,
//         'payment_status' => 'paid',
//         'status' => 'completed'
//     ]);

//     session()->forget(['selected_products', 'current_order_id']);

//     return response()->json([
//         'redirect' => route('checkout.success', $order->id)
//     ]);
// }

public function paymentSuccess(Request $request)
{
    $request->validate([
        'razorpay_payment_id' => 'required',
        'razorpay_order_id'   => 'required',
        'razorpay_signature'  => 'required',
    ]);

    $order = Order::where('razorpay_order_id', $request->razorpay_order_id)
        ->firstOrFail();

    $order->update([
        'razorpay_payment_id' => $request->razorpay_payment_id,
        'razorpay_signature'  => $request->razorpay_signature,
        'payment_status'      => 'paid',
        'status'              => 'completed',
    ]);

    
    /* =========================
       SEND EMAILS
    ========================= */

    // 1️⃣ Customer Invoice
    Mail::to($order->customer_email)
        ->send(new OrderInvoiceMail($order));

    // 2️⃣ Admin Notification
    Mail::to(config('mail.admin_email'))
        ->send(new AdminOrderNotificationMail($order));

    // Clear session
    session()->forget(['selected_products', 'current_order_id']);

    return response()->json([
        'redirect' => route('checkout.success', $order->id)
    ]);

    
}



    /**
     * STEP 5
     * Order success page
     * URL: /checkout/success/{order}
     */
    public function success(Order $order)
    {
        return view('checkout.success', compact('order'));
    }
}
