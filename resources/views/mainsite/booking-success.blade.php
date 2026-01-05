@extends('layouts.mainsite')

@section('title')
<title>Booking Confirmed | Mind Rewire</title>
@endsection

@section('content')
<div class="page_wrap">
    <div class="content_area pt-5">
        <div class="custom_container text-center">

            <h1 class="mb-3">🎉 Booking Confirmed!</h1>
            <p class="mb-4">
                Thank you <strong>{{ $billing->full_name }}</strong>  
                for booking your therapy session with Mind Rewire.
            </p>

            <div class="mw-success-card mt-4">
                <p><strong>Therapy:</strong> {{ $billing->therapyCategory->therapy_name }}</p>
                <p><strong>Date:</strong> {{ $billing->bookedTimeSlots->booking_date_for_user }}</p>
                <p><strong>Time:</strong> {{ $billing->bookedTimeSlots->booking_time }}</p>
                <p><strong>Mode:</strong> {{ ucfirst($billing->bookedTimeSlots->therapy_mode) }}</p>
                <p><strong>Email:</strong> {{ $billing->email }}</p>
            </div>

            <p class="mt-4">
                A confirmation email has been sent to you.  
                If you have any questions, feel free to contact us.
            </p>

            <a href="{{ url('/') }}" class="mw-primary-btn mt-3">
                Back to Home
            </a>

        </div>
    </div>
</div>
@endsection
