@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Refund & Cancellation Policy | Mind Rewire</title>
<meta name="description"
    content="Mind Rewire refund and cancellation policy for therapy sessions and product orders. Clear, fair terms for missed sessions, rescheduling and product returns — designed to protect clients and practitioners.">
<meta name="keywords"
    content="refund policy therapy, cancellation policy Mind Rewire, missed session refund, session reschedule terms, UNTANGLE product refund">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@mindrewire" />
<meta name="twitter:creator" content="@mindrewire" />
<meta name="twitter:title" content="Refund & Cancellation Policy | Mind Rewire">
<meta name="twitter:description"
    content="Mind Rewire refund and cancellation policy for therapy sessions and product orders. Clear, fair terms for missed sessions, rescheduling and product returns.">
<meta name="twitter:image" content="{{ url('assets/images/common-images/refund-og.png') }}">

<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Refund & Cancellation Policy | Mind Rewire" />
<meta property="og:description"
    content="Mind Rewire refund and cancellation policy for therapy sessions and product orders. Clear, fair terms for missed sessions, rescheduling and product returns." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/common-content/common-content.css') }}">
@stop

@section('content')

<!-- page_wrap Start -->
<div class="page_wrap">

    <div class="top_banner">
        <div class="common_patch patch1">
            <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="icon">
        </div>
        <div class="common_patch patch2">
            <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="icon">
        </div>
        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white center">
                    <span class="lightpink">Refund Policy</span>
                </h2>
            </div>
        </div>
    </div>

    <div class="pagetab" data-aos="fade-up" data-aos-duration="1500">
        <div class="custom_container">
            <ul>
                <li><a href="{{url('terms-of-service')}}">TERMS OF SERVICE</a></li>
                <li><a href="{{url('privacy-policy')}}">PRIVACY POLICY</a></li>
                <li><a href="{{url('data-protection')}}">DATA PROTECTION</a></li>
                <li><a href="{{url('refund-policy')}}" class="active">REFUND POLICY</a></li>
                <li><a href="{{url('cookies-policy')}}">COOKIES POLICY</a></li>
                <li><a href="{{url('compliance-statement')}}">COMPLIANCE STATEMENT</a></li>
            </ul>
        </div>
    </div>
    <div class="content_area">
        <div class="custom_container">
            <div class="top_fullrow" data-aos="fade-up" data-aos-duration="1500">
                <p><strong>Effective Date : Insert date</strong></p>
                <p><strong>Last Updated : Insert date</strong></p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <p>
                    At <b>Mind Rewire</b>, we believe in offering support that’s both reliable and fair. Our refund
                    and cancellation policy is
                    designed to respect your time and ours—while maintaining the integrity of therapeutic
                    commitments and product quality.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Therapy & Coaching Sessions</h3>
                <h4>Cancellations & Rescheduling</h4>
                <ul>
                    <li>You may reschedule or cancel a booked session at least 24 hours in advance to avoid any
                        charges.</li>
                    <li>Cancellations made within 24 hours of the session time will not be eligible for a refund.
                    </li>
                </ul>
                <h4>Missed Appointments / No-Shows</h4>
                <ul>
                    <li>
                        Missed sessions without prior notice are non-refundable and considered as completed
                        sessions.
                    </li>
                </ul>
                <h4>Refund Eligibility</h4>
                <p>Refunds will only be considered if:</p>
                <ul>
                    <li>There is a payment error or duplicate transaction</li>
                    <li>A session is cancelled by Mind Rewire due to unavoidable reasons</li>
                    <li>You have prepaid for multiple sessions and wish to discontinue before starting them</li>
                </ul>
                <p>
                    To request a refund, please email bookings@mind-rewire.com with your transaction details and
                    reason for request.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>UNTANGLE Purchases</h3>
                <h4>Physical Products</h4>
                <p>
                    We do not offer refunds for opened, used, or undamaged UNTANGLE card decks.
                    Refunds or replacements will be issued only for:
                </p>
                <ul>
                    <li>Incorrect products received</li>
                    <li>Products damaged during delivery</li>
                </ul>
                <p>
                    To claim, notify us within 3 working days of receiving the item. Include your order number and
                    photos of the damage.<br>
                    Product Support: <b>untangle@mind-rewire.com</b>
                </p>
                <h4>Digital Tools or Downloads</h4>
                <p>
                    All purchases of digital materials (e.g., PDFs, worksheets, toolkits) are final and
                    non-refundable once downloaded or
                    accessed.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Workshops & Events</h3>
                <ul>
                    <li>
                        For paid events or workshops, cancellations made 48 hours in advance may be refunded or
                        transferred to a future date.
                    </li>
                    <li>
                        No-shows or last-minute dropouts are non-refundable due to limited capacity and preparation
                        requirements.
                    </li>
                </ul>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Processing Time</h3>
                <p>
                    Once a refund is approved, please allow 5–7 business days for the amount to reflect in your
                    original payment method.
                    Processing times may vary by bank or payment gateway.
                </p>
            </div>
            <div class="fullrow" data-aos="fade-up" data-aos-duration="1500">
                <h3>Contact for Support</h3>
                <p>
                    For all refund, rescheduling, or payment concerns, please reach out to:
                </p>
                <p>
                    <b>Email: </b>support@mind-rewire.com<br>
                    <b>Email: </b>bookings@mind-rewire.com - (for sessions) <br>
                    <b>Email: </b>untangle@mind-rewire.com - (for product-related queries)
                </p>
                <p>
                    We aim to respond within 1–2 working days.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- page_wrap End -->

@stop

@section('footer_script')
<script>

</script>
@stop