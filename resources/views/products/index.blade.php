@php use Illuminate\Support\Str; @endphp

@extends('layouts.mainsite')

@section('title')
<title>Products | Mind Rewire</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/common-content/common-content.css') }}">
@stop

@section('content')

<div class="page_wrap page-wrapper">

    <!-- =========================
         TOP BANNER
    ========================== -->
    <!-- <div class="top_banner"> -->
        <div class="top_banner"
     style="background:
        linear-gradient(rgba(29,61,145,0.75), rgba(29,61,145,0.75)),
        url('{{ asset('storage/products/product_page_bg.png') }}')
        center center / cover no-repeat;">


        <div class="common_patch patch1">
            <img src="{{ url('assets/images/common-images/patch_pink.svg') }}" alt="icon">
        </div>
        <div class="common_patch patch2">
            <img src="{{ url('assets/images/common-images/patch_pink.svg') }}" alt="icon">
        </div>

        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white center">
                    <span class="lightpink">Our Products</span>
                </h2>
                <p class="mt-3">
                    Thoughtfully curated wellness products to support emotional clarity and mental well-being.
                </p>
            </div>
        </div>
    </div>

    <!-- =========================
         FEATURED PRODUCT (DB)
    ========================== -->
    @if($featuredProduct)
    <div class="content_area">
        <div class="custom_container">

            <div class="mw-featured-wrapper">
                <div class="mw-featured-card">

                    <!-- Image -->
                    <div class="mw-featured-image">
                        <span class="mw-featured-badge">✨ Featured</span>
                        <img
                            src="{{ asset('storage/' . $featuredProduct->image) }}"
                            alt="{{ $featuredProduct->name }}">
                    </div>

                    <!-- Content -->
                    <div class="mw-featured-content">
                        <span class="mw-category-pill">
                            {{ $featuredProduct->tag ?? 'Signature Collection' }}
                        </span>

                        <h3>{{ $featuredProduct->name }}</h3>

                        <p>
                            {{ Str::limit($featuredProduct->description, 200) }}
                        </p>

                        <div class="mw-featured-footer">
                            <span class="mw-price">₹{{ number_format($featuredProduct->price, 0) }}</span>
                            <a href="{{ url('products/' . $featuredProduct->slug) }}"
                               class="mw-primary-btn">
                                Explore Product
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    @endif

    <!-- =========================
         PRODUCT GRID (ALL PRODUCTS)
    ========================== -->
    <div class="content_area">
        <div class="custom_container">

            <!-- <h3 class="mw-section-title text-center">
                Explore Our Collection
            </h3>
            <p class="mw-section-subtitle text-center">
                Wellness products designed to support your daily mental health rituals
            </p> -->
            <div class="mw-collection-header">
    <div>
        <h3 class="mw-section-title">Explore Our Collection</h3>
        <p class="mw-section-subtitle">
            Wellness products designed to support your daily mental health rituals
        </p>
    </div>

    <button
        id="placeOrderBtn"
        class="mw-primary-btn"
        disabled
        onclick="window.location.href='{{ route('checkout.details') }}'">
        Place Order (0)
    </button>
</div>


            <div class="row mt-5">

                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 mb-5">

                    <div class="mw-product-card">

                        <div class="mw-product-image">
                            <span class="mw-badge">
                                {{ $product->tag ?? 'Wellness' }}
                            </span>

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}">
                        </div>

                        <div class="mw-product-body">
                            <h5>{{ $product->name }}</h5>

                            <p>
                                {{ Str::limit($product->description, 90) }}
                            </p>

                            <div class="mw-product-footer">
                                <span class="mw-price">
                                    ₹{{ number_format($product->price, 0) }}
                                </span>

                                <!-- <a href="{{ url('products/' . $product->slug) }}"
                                   class="mw-btn">
                                    View
                                </a>
                                <button class="mw-wishlist-btn" title="Add to wishlist">♡</button> -->
                              
                                    <div class="mw-actions-wrapper">
                                        <div class="mw-actions">
                                            <a href="{{ url('products/' . $product->slug) }}" class="mw-btn">View</a>
                                            <!-- <button class="mw-wishlist-btn">♡</button> -->
                                             <div class="mw-qty-selector"
     data-product-id="{{ $product->id }}"
     data-price="{{ $product->price }}">

    <button class="qty-btn minus">−</button>
    <span class="qty-count">0</span>
    <button class="qty-btn plus">+</button>

</div>

                                              
                                        </div>
                                    </div>


                            </div>
                        </div>

                    </div>

                </div>
                @endforeach

            </div> 
           


        </div>
    </div>

</div>

<script>
let totalSelected = 0;

document.querySelectorAll('.mw-qty-selector').forEach(selector => {
    const minus = selector.querySelector('.minus');
    const plus = selector.querySelector('.plus');
    const countEl = selector.querySelector('.qty-count');

    let count = 0;
    const productId = selector.dataset.productId;

    function updateUI(newCount) {
        count = Math.max(0, newCount);
        countEl.innerText = count;

        fetch("{{ route('product.select') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                product_id: productId,
                quantity: count
            })
        })
        .then(res => res.json())
        .then(data => {
            const btn = document.getElementById('placeOrderBtn');
            btn.innerText = `Place Order (${data.count})`;
            btn.disabled = data.count === 0;
        });
    }

    plus.addEventListener('click', () => updateUI(count + 1));
    minus.addEventListener('click', () => updateUI(count - 1));
});
</script>

@endsection

