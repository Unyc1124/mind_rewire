<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Add product to cart
    // public function add(Request $request)
    // {
    //     $product = Product::where('id', $request->product_id)
    //                       ->where('is_active', true)
    //                       ->firstOrFail();

    //     $cart = session()->get('cart', []);

    //     if (isset($cart[$product->id])) {
    //         $cart[$product->id]['qty'] += 1;
    //     } else {
    //         $cart[$product->id] = [
    //             'id'    => $product->id,
    //             'name'  => $product->name,
    //             'price' => $product->price,
    //             'image' => $product->image,
    //             'qty'   => 1
    //         ];
    //     }

    //     session()->put('cart', $cart);

    //     return response()->json([
    //         'success' => true,
    //         'cart_count' => array_sum(array_column($cart, 'qty'))
    //     ]);
    // }
    public function add(Request $request)
{
    $product = Product::findOrFail($request->product_id);

    $cart = session()->get('cart', []);

    if (isset($cart[$product->id])) {
        $cart[$product->id]['quantity'] += 1;
    } else {
        $cart[$product->id] = [
            'product_id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1, // ✅ REQUIRED
            'image' => $product->image,
        ];
    }

    session()->put('cart', $cart);

    return back()->with('success', 'Product added to cart');
}


    // View cart
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    // Remove item
    public function remove($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);

        return redirect()->back();
    }

    // Clear cart
    public function clear()
    {
        session()->forget('cart');
        return redirect()->back();
    }
}
