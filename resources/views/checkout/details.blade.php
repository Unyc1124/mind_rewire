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

.checkout-box {
    background: #fff;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.checkout-box h3 {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 18px;
}

.form-group label {
    font-weight: 500;
    display: block;
    margin-bottom: 6px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px 14px;
    border-radius: 8px;
    border: 1px solid #ddd;
}

.order-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 12px;
}

.order-total {
    font-weight: 700;
    font-size: 18px;
}

.pay-btn {
    width: 100%;
    margin-top: 20px;
}
</style>
@endsection

@section('content')
<div class="custom_container">

    <h2 class="mt-5">Checkout</h2>

    <div class="checkout-wrapper">

        <!-- LEFT: CUSTOMER DETAILS -->
        <div class="checkout-box">
            <h3>Customer Details</h3>

            <form id="checkoutForm">
            @csrf

                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="customer_name" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="customer_email" required>
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="customer_phone" required>
                </div>

                <div class="form-group">
                    <label>Shipping Address</label>
                    <textarea name="shipping_address" rows="4" required></textarea>
                </div>

                <button type="submit" class="mw-primary-btn pay-btn">
                    Proceed to Payment
                </button>
            </form>
        </div>

        <!-- RIGHT: ORDER SUMMARY -->
        <div class="checkout-box">
            <h3>Order Summary</h3>

            @foreach($products as $product)
                <div class="order-row">
                    <span>
                        {{ $product->name }} × {{ $selected[$product->id] }}
                    </span>
                    <span>
                        ₹{{ $product->price * $selected[$product->id] }}
                    </span>
                </div>
            @endforeach

            <hr>

            <div class="order-row order-total">
                <span>Total</span>
                <span>₹{{ $subtotal }}</span>
            </div>
        </div>

    </div>
</div>
<script>
(function loadRazorpay() {
    if (typeof Razorpay === "undefined") {
        let script = document.createElement("script");
        script.src = "https://checkout.razorpay.com/v1/checkout.js";
        script.onload = initCheckout;
        document.body.appendChild(script);
    } else {
        initCheckout();
    }
})();

function initCheckout() {
    document.getElementById('checkoutForm').addEventListener('submit', function(e) {
        e.preventDefault();

        fetch("{{ route('checkout.create') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Accept": "application/json"
            },
            body: new FormData(this)
        })
        .then(res => res.json())
        .then(data => {

            let options = {
                key: data.key,
                amount: data.amount,
                currency: "INR",
                name: "Mind Rewire",
                description: "Order Payment",
                order_id: data.order_id,
                prefill: {
                    name: data.name,
                    email: data.email,
                    contact: data.contact
                },
                handler: function (response) {

    fetch("{{ route('checkout.payment.success') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            razorpay_payment_id: response.razorpay_payment_id,
            razorpay_order_id: response.razorpay_order_id,
            razorpay_signature: response.razorpay_signature
        })
    })
    .then(res => res.json())
    .then(data => {
        if (data.redirect) {
            window.location.href = data.redirect;
        } else {
            alert("Payment saved but redirect missing");
        }
    })
    .catch(err => {
        console.error("PAYMENT SAVE ERROR", err);
        alert("Payment successful but server error");
    });
}

            };

            let rzp = new Razorpay(options);
            rzp.open();
        })
        .catch(err => {
            alert("Payment failed. Check console.");
            console.error(err);
        });
    });
}
</script>

@endsection
