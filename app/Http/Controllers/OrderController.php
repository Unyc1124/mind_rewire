<?php

namespace App\Http\Controllers;

// use App\Models\Order;
// use App\Models\OrderItem;
// use Illuminate\Http\Request;
// use Illuminate\Support\Str;

// class OrderController extends Controller
// {
//     public function checkout()
//     {
//         $cart = session('cart');

//         if (!$cart || count($cart) === 0) {
//             return redirect('/products')->with('error', 'Cart is empty');
//         }

//         return view('checkout.index', compact('cart'));
//     }

//     // public function placeOrder(Request $request)
//     // {
//     //     $cart = session('cart');

//     //     if (!$cart || count($cart) === 0) {
//     //         return redirect('/products');
//     //     }

//     //     $subtotal = collect($cart)->sum(fn ($item) => $item['price'] * $item['quantity']);

//     //     $order = Order::create([
//     //         'order_number' => 'MR-' . strtoupper(Str::random(8)),
//     //         'subtotal' => $subtotal,
//     //         'tax' => 0,
//     //         'shipping' => 0,
//     //         'total_amount' => $subtotal,
//     //         'payment_method' => 'razorpay',
//     //         'payment_status' => 'pending',
//     //         'status' => 'pending',

//     //         'customer_name' => $request->name,
//     //         'customer_email' => $request->email,
//     //         'customer_phone' => $request->phone,
//     //         'shipping_address' => $request->address,
//     //     ]);

//     //     foreach ($cart as $item) {
//     //         OrderItem::create([
//     //             'order_id' => $order->id,
//     //             'product_id' => $item['product_id'],
//     //             'product_name' => $item['name'],
//     //             'price' => $item['price'],
//     //             'quantity' => $item['quantity'],
//     //             'total' => $item['price'] * $item['quantity'],
//     //         ]);
//     //     }

//     //     // Clear cart
//     //     session()->forget('cart');

//     //     return redirect()->route('order.success', $order->id);
//     // }
//     public function placeOrder(Request $request)
// {
//     // 1. Validate input (MANDATORY)
//     $request->validate([
//         'name' => 'required|string|max:255',
//         'email' => 'required|email',
//         'phone' => 'required|string|max:20',
//         'address' => 'required|string',
//     ]);

//     // 2. Get cart
//     $cart = session('cart');

//     if (!$cart || count($cart) === 0) {
//         return redirect('/products');
//     }

//     // 3. Calculate subtotal
//     $subtotal = collect($cart)->sum(function ($item) {
//         return $item['price'] * $item['quantity'];
//     });

//     DB::beginTransaction();

//     try {
//         // 4. Create order
//         $order = Order::create([
//             'order_number' => 'MR-' . strtoupper(Str::random(8)),
//             'subtotal' => $subtotal,
//             'tax' => 0,
//             'shipping' => 0,
//             'total_amount' => $subtotal,

//             'payment_method' => 'razorpay',
//             'payment_status' => 'pending',
//             'status' => 'pending',

//             'customer_name' => $request->name,
//             'customer_email' => $request->email,
//             'customer_phone' => $request->phone,
//             'shipping_address' => $request->address,
//         ]);

//         // 5. Create order items
//         foreach ($cart as $item) {
//             OrderItem::create([
//                 'order_id' => $order->id,
//                 'product_id' => $item['product_id'],
//                 'product_name' => $item['name'],
//                 'price' => $item['price'],
//                 'quantity' => $item['quantity'],
//                 'total' => $item['price'] * $item['quantity'],
//             ]);
//         }

//         // 6. Clear cart
//         session()->forget('cart');

//         DB::commit();

//         // 7. Redirect to payment step (NEXT)
//         return redirect()->route('order.success', $order->id);

//     } catch (\Exception $e) {
//         DB::rollBack();
//         return back()->with('error', 'Order failed. Please try again.');
//     }
// }

//     public function success($id)
//     {
//         $order = Order::with('items')->findOrFail($id);
//         return view('checkout.success', compact('order'));
//     }
// }
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderInvoiceMail;



class OrderController extends Controller
{
    public function checkout()
    {
        $cart = session('cart');

        if (!$cart || count($cart) === 0) {
            return redirect('/products')->with('error', 'Cart is empty');
        }

        return view('checkout.index', compact('cart'));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        $cart = session('cart');

        if (!$cart || count($cart) === 0) {
            return redirect('/products');
        }

        $subtotal = collect($cart)->sum(function ($item) {
            return ($item['price'] ?? 0) * ($item['quantity'] ?? 1);
        });

        DB::beginTransaction();

        try {
            $order = Order::create([
                'order_number' => 'MR-' . strtoupper(Str::random(8)),
                'subtotal' => $subtotal,
                'tax' => 0,
                'shipping' => 0,
                'total_amount' => $subtotal,
                'payment_method' => 'razorpay',
                'payment_status' => 'pending',
                'status' => 'pending',
                'customer_name' => $request->name,
                'customer_email' => $request->email,
                'customer_phone' => $request->phone,
                'shipping_address' => $request->address,
            ]);

            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item['product_id'],
                    'product_name' => $item['name'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'total' => $item['price'] * $item['quantity'],
                ]);
            }

            session()->forget('cart');
            DB::commit();

            // return redirect()->route('order.success', $order->id);
            // return redirect()->route('checkout.payment', $order->id);
            return view('checkout.payment', compact('order', 'razorpayOrder'));



        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Order failed', ['error' => $e->getMessage()]);
            return back()->with('error', 'Order failed. Please try again.');
        }
    }

    
/**
 * Payment page for an order
 *
 * 1. If already paid, do not allow payment again
 * 2. Create Razorpay order only once
 *
 * @param Order $order
 * @return \Illuminate\Contracts\View\View
 */

// public function paymentSuccess(Request $request)
// {
//     $order = Order::where('razorpay_order_id', $request->razorpay_order_id)->firstOrFail();

//     $order->update([
//         'razorpay_payment_id' => $request->razorpay_payment_id,
//         'payment_status' => 'paid',
//         'status' => 'confirmed',
//     ]);

//     return redirect()->route('order.success', $order->id);
// }

public function paymentSuccess(Request $request)
{
    $order = Order::where('razorpay_order_id', $request->razorpay_order_id)
        ->with('items')
        ->firstOrFail();

    $order->update([
        'razorpay_payment_id' => $request->razorpay_payment_id,
        'payment_status' => 'paid',
        'status' => 'confirmed',
    ]);

    // ✅ SEND INVOICE EMAIL
    Mail::to($order->customer_email)
        ->send(new OrderInvoiceMail($order));

    return redirect()->route('order.success', $order->id);
}
public function paymentFailed(Request $request)
{
    $order = Order::where('razorpay_order_id', $request->razorpay_order_id)->first();

    if ($order) {
        $order->update([
            'payment_status' => 'failed',
            'status' => 'failed',
        ]);
    }

    return redirect('/checkout')->with('error', 'Payment failed. Try again.');
}

// public function payment(Order $order)
// {
//     // 1. If already paid, do not allow payment again
//     if ($order->payment_status === 'paid') {
//         return redirect()->route('order.success', $order->id);
//     }

//     // 2. Create Razorpay order only once
//     if (!$order->razorpay_order_id) {

//         $api = new Api(
//             config('services.razorpay.key'),
//             config('services.razorpay.secret')
//         );

//         $razorpayOrder = $api->order->create([
//             'receipt'  => $order->order_number,
//             'amount'   => $order->total_amount * 100, // in paise
//             'currency' => 'INR',
//         ]);

//         // 3. Save Razorpay order ID
//         $order->update([
//             'razorpay_order_id' => $razorpayOrder['id'],
//         ]);
//     }

//     return view('checkout.payment', [
//         'order' => $order,
//         'razorpayOrderId' => $order->razorpay_order_id,
//         'razorpayKey' => config('services.razorpay.key'),
//     ]);
// }

public function payment(Order $order)
{
    // If already paid, redirect
    if ($order->payment_status === 'paid') {
        return redirect()->route('order.success', $order->id);
    }

    $api = new \Razorpay\Api\Api(
        config('services.razorpay.key'),
        config('services.razorpay.secret')
    );

    // Create Razorpay order ONLY if not created before
    if (!$order->razorpay_order_id) {
        $razorpayOrder = $api->order->create([
            'receipt'  => $order->order_number,
            'amount'   => $order->total_amount * 100, // paise
            'currency' => 'INR',
        ]);

        $order->update([
            'razorpay_order_id' => $razorpayOrder['id'],
        ]);
    } else {
        // If already created earlier
        $razorpayOrder = [
            'id' => $order->razorpay_order_id
        ];
    }

    return view('checkout.payment', compact('order', 'razorpayOrder'));
}


//     public function buyNow(Request $request)
// {
//     $request->validate([
//         'product_id' => 'required|exists:products,id',
//         'quantity' => 'required|integer|min:1',
//     ]);

//     $product = \App\Models\Product::findOrFail($request->product_id);

//     return view('checkout.buy-now', [
//         'product' => $product,
//         'quantity' => $request->quantity,
//     ]);
// }

public function buyNow(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
    ]);

    $product = \App\Models\Product::findOrFail($request->product_id);

    return view('checkout.buy-now', compact('product'));
}






// public function buyNowPay(Request $request)
// {
//     $request->validate([
//         'product_id' => 'required|exists:products,id',
//         'quantity' => 'required|integer|min:1',
//         'name' => 'required',
//         'email' => 'required|email',
//         'phone' => 'required',
//         'address' => 'required',
//     ]);

//     $product = \App\Models\Product::findOrFail($request->product_id);
//     $total = $product->price * $request->quantity;

//     $order = Order::create([
//         'order_number' => 'MR-' . strtoupper(Str::random(8)),
//         'subtotal' => $total,
//         'tax' => 0,
//         'shipping' => 0,
//         'total_amount' => $total,

//         'payment_method' => 'razorpay',
//         'payment_status' => 'pending',
//         'status' => 'pending',

//         'customer_name' => $request->name,
//         'customer_email' => $request->email,
//         'customer_phone' => $request->phone,
//         'shipping_address' => $request->address,
//     ]);

//     OrderItem::create([
//         'order_id' => $order->id,
//         'product_id' => $product->id,
//         'product_name' => $product->name,
//         'price' => $product->price,
//         'quantity' => $request->quantity,
//         'total' => $total,
//     ]);

//     // Razorpay creation (same as earlier)
//     // redirect to payment page
// }

public function buyNowPay(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1',
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',
    ]);

    $product = \App\Models\Product::findOrFail($request->product_id);
    $total = $product->price * $request->quantity;

    $order = Order::create([
        'order_number' => 'MR-' . strtoupper(Str::random(8)),
        'subtotal' => $total,
        'tax' => 0,
        'shipping' => 0,
        'total_amount' => $total,

        'payment_method' => 'razorpay',
        'payment_status' => 'pending',
        'status' => 'pending',

        'customer_name' => $request->name,
        'customer_email' => $request->email,
        'customer_phone' => $request->phone,
        'shipping_address' => $request->address,
    ]);

    OrderItem::create([
        'order_id' => $order->id,
        'product_id' => $product->id,
        'product_name' => $product->name,
        'price' => $product->price,
        'quantity' => $request->quantity,
        'total' => $total,
    ]);

    // Redirect to Razorpay page
    return redirect()->route('checkout.payment', $order->id);
}


    public function success($id)
    {
        $order = Order::with('items')->findOrFail($id);
        return view('checkout.success', compact('order'));
    }
}

