@extends('layouts.mainsite')


@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
@stop
@section('content')

<div class="page_wrap page-wrapper">
    <div class="content_area">
        <div class="custom_container text-center">

            <h2>Processing Payment…</h2>
            <p>Please do not refresh</p>

        </div>
    </div>
</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
var options = {
    "key": "{{ config('services.razorpay.key') }}",
    "amount": "{{ $order->total_amount * 100 }}",
    "currency": "INR",
    "name": "Mind Rewire",
    "description": "Order #{{ $order->order_number }}",
    "order_id": "{{ $razorpayOrder['id'] }}",

    "handler": function (response){
        fetch("{{ route('checkout.payment.success') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify(response)
        }).then(() => {
            window.location.href = "{{ route('order.success', $order->id) }}";
        });
    },

    "modal": {
        "ondismiss": function () {
            fetch("{{ route('checkout.payment.failed') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    razorpay_order_id: "{{ $razorpayOrder['id'] }}"
                })
            });
        }
    },

    "prefill": {
        "name": "{{ $order->customer_name }}",
        "email": "{{ $order->customer_email }}",
        "contact": "{{ $order->customer_phone }}"
    }
};

var rzp = new Razorpay(options);
rzp.open();

</script>

@endsection
