@extends('layouts.mainsite')

@section('title')
<title>Mind Rewire | Your Results</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/common-content/common-content.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
@endsection

@section('content')

<style>

/* ===============================
   PAGE LAYOUT
================================ */

.navigator-results {
    max-width: 1100px;
    margin: 40px auto;
    padding: 0 20px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
}

.results-header {
    text-align: center;
    margin-bottom: 36px;
}

.results-header h1 {
    font-size: 32px;
    font-weight: 600;
}

.disclaimer {
    font-size: 14px;
    color: #6b7280;
}

/* ===============================
   RESULT CARDS
================================ */

.result-card {
    background: #ffffff;
    border-radius: 14px;
    padding: 22px;
    margin-bottom: 22px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.06);
}

.result-card.highlight {
    background: #f8f9ff;
    border-left: 5px solid #4f46e5;
}

.result-card h3 {
    font-size: 18px;
    margin-bottom: 14px;
}

/* ===============================
   STRUCTURED SUMMARY GRID
================================ */

.summary-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px;
    margin-top: 10px;
}

.summary-box {
    background: #ffffff;
    border-radius: 12px;
    padding: 18px;
    box-shadow: 0 4px 14px rgba(0,0,0,0.05);
    border: 1px solid #eef2f7;   /* soft neutral border */
}

.summary-box h4 {
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #111827;
}

.summary-box ul {
    padding-left: 18px;
    margin: 0;
}

.summary-box li {
    font-size: 14px;
    line-height: 1.6;
    color: #374151;
    margin-bottom: 6px;
}

.summary-box p {
    font-size: 14px;
    line-height: 1.6;
    color: #374151;
}

/* ===============================
   FOCUS TAGS
================================ */

.focus-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.focus-tag {
    background: #eef2ff;
    color: #3730a3;
    padding: 6px 14px;
    border-radius: 999px;
    font-size: 13px;
}

/* ===============================
   PRODUCT CAROUSEL
================================ */

.recommendedSwiper {
    padding: 0 56px;
}

.product-card {
    background: #ffffff;
    border-radius: 14px;
    box-shadow: 0 6px 16px rgba(0,0,0,0.06);
    padding: 14px;
    display: flex;
    gap: 12px;
    align-items: center;
}

.product-card img {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 10px;
}

.product-info h4 {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 4px;
}

.product-info p {
    font-size: 12px;
    color: #6b7280;
    margin-bottom: 10px;
}

.view-btn {
    display: inline-block;
    background: #4f46e5;
    color: #fff;
    padding: 8px 18px;
    border-radius: 999px;
    font-size: 13px;
    text-decoration: none;
}

.view-btn:hover {
    background: #3730a3;
}

/* ===============================
   CTA BUTTONS
================================ */

.results-actions {
    display: flex;
    justify-content: center;
    gap: 16px;
    margin: 40px 0;
    flex-wrap: wrap;
}

.primary-btn {
    background: #4f46e5;
    color: #fff;
    padding: 14px 28px;
    border-radius: 999px;
    text-decoration: none;
    font-weight: 500;
}

.secondary-btn {
    background: #FBE7A1;
    color: #111827;
    padding: 14px 28px;
    border-radius: 999px;
    text-decoration: none;
    font-weight: 500;
}

/* ===============================
   MOBILE
================================ */

@media (max-width: 768px) {
    .summary-grid {
        grid-template-columns: 1fr;
    }
}

</style>

{{-- ===============================
   SUMMARY PARSER (CLINICAL PROMPT)
================================ --}}
@php

$summary = $result['summary'] ?? '';

function cleanText($text) {
    $text = preg_replace('/[#*]/', '', $text);
    $text = preg_replace('/\n+/', "\n", $text);
    return trim($text);
}

function getSection($text, $start, $end = null) {

    if ($end) {
        $pattern = "/{$start}(.*?)(?={$end})/s";
    } else {
        $pattern = "/{$start}(.*)/s";
    }

    preg_match($pattern, $text, $matches);

    return cleanText($matches[1] ?? '');
}

/* === MATCHES YOUR CLINICAL PROMPT === */

$meaning = getSection(
    $summary,
    "Clinical Understanding",
    "Underlying Mechanisms"
);

$why = getSection(
    $summary,
    "Underlying Mechanisms",
    "Evidence-Based Self-Care Step"
);

$today = getSection(
    $summary,
    "Evidence-Based Self-Care Step",
    "Professional Consultation Indicators"
);

$help = getSection(
    $summary,
    "Professional Consultation Indicators"
);

@endphp


<div class="navigator-results">

    {{-- HEADER --}}
    <div class="results-header">
        <h1>Your Results</h1>
        <p class="disclaimer">
            This is a supportive screening summary, not a medical diagnosis.
        </p>
    </div>

    {{-- SUMMARY --}}
    <div class="result-card highlight">

        <h3>What we noticed</h3>

        <div class="summary-grid">

            {{-- Clinical Understanding --}}
            <div class="summary-box">
                <h4>Clinical Understanding</h4>

                @if($meaning)
                    <ul>
                        @foreach(explode("\n", $meaning) as $line)
                            @if(trim($line))
                                <li>{{ str_replace(['•','-','*'], '', $line) }}</li>
                            @endif
                        @endforeach
                    </ul>
                @else
                    <p>We’re reflecting on patterns from what you shared.</p>
                @endif
            </div>

            {{-- Mechanisms --}}
            <div class="summary-box">
                <h4>Underlying Mechanisms</h4>

                @if($why)
                    <ul>
                        @foreach(explode("\n", $why) as $line)
                            @if(trim($line))
                                <li>{{ str_replace(['•','-','*'], '', $line) }}</li>
                            @endif
                        @endforeach
                    </ul>
                @else
                    <p>Emotional and physiological responses may be interacting.</p>
                @endif
            </div>

            {{-- Self-care --}}
            <div class="summary-box">
                <h4>Evidence-Based Self-Care Step</h4>
                <p>
                    {{ $today ?: 'Try one grounding or relaxation step today.' }}
                </p>
            </div>

            {{-- Help --}}
            <div class="summary-box">
                <h4>Professional Consultation Indicators</h4>
                <p>
                    {{ $help ?: 'If patterns persist or intensify, professional support can help.' }}
                </p>
            </div>

        </div>
    </div>


    {{-- FOCUS AREAS --}}
    <div class="result-card">
        <h3>Key focus areas</h3>
        <div class="focus-tags">
            @foreach($result['focus_areas'] as $area)
                <span class="focus-tag">{{ $area }}</span>
            @endforeach
        </div>
    </div>


    {{-- PRODUCTS --}}
    @if($products->count())
    <div class="result-card">
        <h3>Recommended products to support you</h3>

        <div class="swiper recommendedSwiper">
            <div class="swiper-wrapper">

                @foreach($products as $product)
                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="{{ asset('storage/'.$product->image) }}">

                        <div class="product-info">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ \Illuminate\Support\Str::limit($product->description, 70) }}</p>

                            <a href="{{ url('/product/'.$product->slug) }}" class="view-btn">
                                View
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>
    @endif


    {{-- CTA --}}
    <div class="results-actions">
        <a href="{{ url('/book-session') }}" class="primary-btn">
            Book a 1-to-1 Session
        </a>

        <a href="{{ url('/navigator/plan') }}" class="secondary-btn">
            View detailed 7-day plan
        </a>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
new Swiper(".recommendedSwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 2600,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: { slidesPerView: 1.1 },
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
    }
});
</script>

@endsection
