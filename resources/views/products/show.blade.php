@extends('layouts.mainsite')

@section('title')
<title>{{ $product->name }} | Mind Rewire</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/common-content/common-content.css') }}">
@stop

@section('content')

<div class="page_wrap page-wrapper">

    <!-- =========================
        BREADCRUMB
    ========================== -->
    <div class="content_area pt-4">
        <div class="custom_container">
            <!-- <p class="mw-breadcrumb">
                <a href="{{ url('/') }}">Home</a> →
                <a href="{{ url('/products') }}">Products</a> →
                <span>{{ $product->name }}</span>
            </p> -->
            <p class="mw-breadcrumb"
   style="display:flex; align-items:center; gap:8px; font-size:14px; color:#1D3D91;">

    <!-- Home -->
    <a href="{{ url('/') }}"
       style="display:flex; align-items:center; gap:4px; color:#1D3D91; text-decoration:none;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 9l9-7 9 7"></path>
            <path d="M9 22V12h6v10"></path>
        </svg>
        Home
    </a>

    <!-- Divider -->
    <span style="color:#A0B3E0;">›</span>

    <!-- Products -->
    <a href="{{ url('/products') }}"
       style="display:flex; align-items:center; gap:4px; color:#1D3D91; text-decoration:none;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2h12l3 7H3l3-7z"></path>
            <path d="M3 9v13h18V9"></path>
        </svg>
        Products
    </a>

    <!-- Divider -->
    <span style="color:#A0B3E0;">›</span>

    <!-- Current -->
    <span style="color:#666;">
        {{ $product->name }}
    </span>

</p>

        </div>
    </div>

    <!-- =========================
        PRODUCT DETAILS + ABOUT (SIDE BY SIDE)
    ========================== -->
    <div class="content_area">
        <div class="custom_container">

            <div class="mw-product-detail">
                <div class="row align-items-start">

                    <!-- LEFT: PRODUCT IMAGE -->
                    <div class="col-lg-5 mb-4">
                        <div class="mw-product-detail-image">
                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                class="img-fluid">
                        </div>
                    </div>

                    <!-- RIGHT: PRODUCT INFO -->
                    <div class="col-lg-7">

                        @if($product->is_featured)
                            <span class="mw-featured-badge">✨ Featured</span>
                        @endif

                        <h1 class="mw-product-title mt-2">
                            {{ $product->name }}
                        </h1>

                        <p class="mw-product-short-desc">
                            {{ Str::limit($product->description, 160) }}
                        </p>

                        <div class="mw-product-price">
                            ₹{{ number_format($product->price, 0) }}
                        </div>

                        <!-- ACTION BUTTONS -->
                        <div class="mw-product-actions mt-4">
                            <!-- <button class="mw-primary-btn">Add to Cart</button> -->
                            <!-- <form method="POST" action="{{ route('cart.add') }}">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">

    <button type="submit" class="mw-primary-btn">
        Add to Cart 
        test
    </button>
</form> -->

                            <!-- <button class="mw-secondary-btn">Buy Now</button> -->
                             <form method="POST" action="{{ route('buy.now') }}">
    @csrf

    <input type="hidden" name="product_id" value="{{ $product->id }}">

    

    <button type="submit" class="mw-primary-btn">
        Buy Now
    </button>
</form>



                            <button class="mw-wishlist-btn" title="Add to wishlist">♡</button>
                             
                        </div>

                        <!-- TRUST POINTS -->
                        <ul class="mw-product-trust mt-4">
                            <li>✔ 100% Natural Essential Oils</li>
                            <li>✔ Vegan & Cruelty-Free</li>
                            <li>✔ Therapist Designed</li>
                            <li>✔ Easy Roll-On Application</li>
                        </ul>

                        <!-- ABOUT PRODUCT (INLINE – NO SCROLL) -->
                        <div class="mw-about-inline mt-5">
                            <h3 class="mw-about-title">About this product</h3>
                            <p class="mw-about-desc">
                                {{ $product->description }}
                            </p>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
