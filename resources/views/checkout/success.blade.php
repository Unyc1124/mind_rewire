@extends('layouts.mainsite')

@section('title')
<title>Order Successful | Mind Rewire</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
@stop

@section('content')

<div class="page_wrap page-wrapper">

    <div class="content_area pt-5 pb-5">
        <div class="custom_container">

            <!-- SUCCESS CARD -->
            <div class="mw-success-card">

                <div class="mw-success-icon">✓</div>

                <h2>Payment Successful!</h2>
                <p class="mw-success-subtext">
                    Thank you for your purchase.
                </p>

                <div class="mw-order-id">
                    Order ID: {{ $order->order_number ?? ('MR-' . $order->id) }}
                </div>

                <a href="{{ url('/') }}" class="mw-primary-btn mw-success-btn">
                    Return to Home
                </a>

            </div>

        </div>
    </div>

</div>

@endsection
