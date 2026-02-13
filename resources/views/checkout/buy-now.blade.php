@extends('layouts.mainsite')

@section('title')
<title>Checkout | Mind Rewire</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
@stop

@section('content')

<div class="page_wrap page-wrapper">

    <div class="content_area pt-5 pb-5">
        <div class="custom_container">

            <div class="mw-checkout-card">

                <h2 class="mw-checkout-title">Checkout</h2>

                <form method="POST" action="{{ route('buy.now.pay') }}">
                    @csrf

                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    <!-- Quantity -->
                    <!-- <label>Quantity</label>
                    <input type="number"
                           name="quantity"
                           value="1"
                           min="1"
                           required
                           class="mw-input"
                           id="quantity-input"
                           data-price="{{ $product->price }}"> -->

                    <!-- Customer Info -->
                    <!-- <label>Full Name</label>
                    <input type="text" name="name" required class="mw-input">

                    <label>Email</label>
                    <input type="email" name="email" required class="mw-input">

                    <label>Phone</label>
                    <input type="text" name="phone" required class="mw-input">

                    <label>Shipping Address</label>
                    <textarea name="address" rows="3" required class="mw-input"></textarea>
 -->

 <!-- Quantity (NO asterisk) -->
<label>Quantity</label>
<input type="number"
       name="quantity"
       value="1"
       min="1"
       class="mw-input"
       id="quantity-input"
       data-price="{{ $product->price }}">

<!-- Customer Info -->
<label>
    Full Name <span class="mw-required">*</span>
</label>
<input type="text" name="name" required class="mw-input">

<label>
    Email <span class="mw-required">*</span>
</label>
<input type="email" name="email" required class="mw-input">

<label>
    Phone <span class="mw-required">*</span>
</label>
<input type="text" name="phone" required class="mw-input">

<label>
    Shipping Address <span class="mw-required">*</span>
</label>
<textarea name="address" rows="3" required class="mw-input"></textarea>

                    <!-- ORDER SUMMARY -->
                    <!-- <div class="mw-order-summary">

                        <div class="mw-order-left">
                            <strong>{{ $product->name }}</strong>

                            <p>
                                ₹{{ number_format($product->price, 0) }} ×
                                <span id="summary-qty">1</span>
                            </p>

                            <p class="mw-order-total">
                                Total: ₹<span id="summary-total">
                                    {{ number_format($product->price, 0) }}
                                </span>
                            </p>
                        </div> -->
                        <!-- ORDER SUMMARY -->
<div class="mw-order-summary">

    <div class="mw-order-left">
        <strong>{{ $product->name }}</strong>

        <p class="mw-order-qty">
            Quantity: <span id="summary-qty">1</span>
        </p>

        <!-- <p class="mw-order-total">
            Total: ₹<span id="summary-total">
                {{ number_format($product->price, 0) }}
            </span>
        </p> -->
        <div class="mw-order-total">
    Total: ₹<span id="summary-total">699</span>
</div>

    </div>

    <div class="mw-order-image">
        <img src="{{ asset('storage/' . $product->image) }}"
             alt="{{ $product->name }}">
    </div>

</div>


                        <!-- <div class="mw-order-image">
                            <img src="{{ asset('storage/' . $product->image) }}"
                                 alt="{{ $product->name }}">
                        </div>

                    </div> -->

                    <button type="submit" class="mw-primary-btn mw-full-btn">
                        Proceed to Pay
                    </button>

                </form>

            </div>

        </div>
    </div>

</div>

{{-- Quantity → Total JS --}}
<script>
const qtyInput = document.getElementById('quantity-input');
const qtyText = document.getElementById('summary-qty');
const totalText = document.getElementById('summary-total');
const price = parseInt(qtyInput.dataset.price);

qtyInput.addEventListener('input', () => {
    const qty = Math.max(1, parseInt(qtyInput.value || 1));
    qtyText.innerText = qty;
    totalText.innerText = price * qty;
});
</script>

@endsection
