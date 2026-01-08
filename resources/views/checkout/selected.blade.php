@extends('layouts.mainsite')

@section('title', 'Checkout')

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<style>
.checkout-wrapper {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 40px;
    margin-top: 40px;
}

.checkout-card {
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.05);
}

.product-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 16px;
}

.product-info {
    display: flex;
    gap: 12px;
    align-items: center;
}

.product-info img {
    width: 60px;
    height: auto;
    border-radius: 8px;
}

.summary-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 12px;
}

.summary-total {
    font-size: 18px;
    font-weight: 600;
}
</style>
@stop


@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
@stop
@section('content')
<div class="custom_container">

    <h2 class="mt-4">Checkout</h2>

    <div class="checkout-wrapper">

        {{-- LEFT: PRODUCTS --}}
        <div class="checkout-card">
            <h4>Selected Products</h4>

            @php $subtotal = 0; @endphp

            @foreach($products as $product)
                @php
                    $qty = $selected[$product->id];
                    $lineTotal = $product->price * $qty;
                    $subtotal += $lineTotal;
                @endphp

                <div class="product-row">
                    <div class="product-info">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="">
                        <div>
                            <strong>{{ $product->name }}</strong><br>
                            <small>Qty: {{ $qty }}</small>
                        </div>
                    </div>

                    <strong>₹{{ number_format($lineTotal, 0) }}</strong>
                </div>
            @endforeach
        </div>

        {{-- RIGHT: SUMMARY --}}
        <div class="checkout-card">
            <h4>Order Summary</h4>

            <div class="summary-row">
                <span>Subtotal</span>
                <span>₹{{ number_format($subtotal, 0) }}</span>
            </div>

            <div class="summary-row">
                <span>Tax</span>
                <span>₹0</span>
            </div>

            <hr>

            <div class="summary-row summary-total">
                <span>Total</span>
                <span>₹{{ number_format($subtotal, 0) }}</span>
            </div>

            <a href="{{ route('checkout.payment') }}"
               class="mw-primary-btn mt-4"
               style="width:100%; text-align:center;">
                Proceed to Payment
            </a>
        </div>

    </div>

</div>
@endsection
