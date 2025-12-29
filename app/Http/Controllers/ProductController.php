<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    // Featured product (1 product only)
    $featuredProduct = Product::where('is_active', true)
                              ->where('is_featured', true)
                              ->first();

    // All other active products (excluding featured)
    $products = Product::where('is_active', true)
                       ->where(function ($query) {
                           $query->where('is_featured', false)
                                 ->orWhereNull('is_featured');
                       })
                       ->get();

    return view('products.index', compact('featuredProduct', 'products'));
}

public function show($slug)
{
    $product = Product::where('slug', $slug)
        ->where('is_active', true)
        ->firstOrFail();

    return view('products.show', compact('product'));
}


}
