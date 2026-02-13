@extends('layouts.mainsite')

@section('title')
<title>Checkout | Mind Rewire</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
@stop

@section('content')

<div class="page_wrap page-wrapper">

    <div class="content_area">
        <div class="custom_container">

            <h2 class="mb-4">Checkout</h2>

            {{-- CART SUMMARY --}}
            <div class="mb-5">
                <h4>Your Cart</h4>

                <ul>
                    @foreach($cart as $item)
                        <li>
                            {{ $item['quantity'] ?? 1 }}
 × {{ $item['quantity'] }}
                            — ₹ {{ ($item['price'] ?? 0) * ($item['quantity'] ?? 1) }}

                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- CHECKOUT FORM --}}
            <form method="POST" action="/place-order">
                @csrf

                <div class="mb-3">
                    <input type="text" name="name" class="form-control"
                           placeholder="Full Name" required>
                </div>

                <div class="mb-3">
                    <input type="email" name="email" class="form-control"
                           placeholder="Email" required>
                </div>

                <div class="mb-3">
                    <input type="text" name="phone" class="form-control"
                           placeholder="Phone" required>
                </div>

                <div class="mb-3">
                    <textarea name="address" class="form-control"
                              placeholder="Shipping Address" required></textarea>
                </div>

                <button type="submit" class="mw-primary-btn">
                    Place Order
                </button>
            </form>

        </div>
    </div>

</div>

@endsection
