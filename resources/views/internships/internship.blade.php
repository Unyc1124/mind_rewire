@extends('layouts.mainsite')

@section('title')
<title>Mind Rewire | Stories</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/common-content/common-content.css') }}">
@endsection

@section('content')

<div class="internship-page">
<!-- =========================
     INTERNSHIP TOP BANNER
========================== -->
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
                <span class="lightpink">Clinical Psychology Internship</span>
            </h2>

            <p class="mt-3">
                Structured clinical exposure integrating therapeutic depth,
                ethical practice, and modern psychological frameworks.
            </p>

            <div class="mt-4 banner_buttons">
                <a href="#" class="primary_btn">Apply Now</a>
                <a href="#" class="secondary_btn">Download Brochure</a>
            </div>

        </div>
    </div>

</div>
</div>

@endsection