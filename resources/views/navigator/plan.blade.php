@extends('layouts.mainsite')

@section('title')
<title>Mind Rewire | Your 7-Day Plan</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/common-content/common-content.css') }}">
@endsection

@section('content')

<style>
/* ===============================
   PLAN PAGE – ALL IN ONE CSS
================================ */

.navigator-plan {
    max-width: 1100px;
    margin: 40px auto;
    padding: 0 20px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
}

.plan-header {
    text-align: center;
    margin-bottom: 36px;
}

.plan-header h1 {
    font-size: 32px;
    font-weight: 600;
    margin-bottom: 8px;
}

.plan-header p {
    font-size: 15px;
    color: #6b7280;
}

/* ===== Grid Layout ===== */

.plan-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 22px;
}

/* ===== Plan Card ===== */

.plan-card {
    background: #ffffff;
    border-radius: 18px;
    padding: 22px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.06);
    display: flex;
    flex-direction: column;
    gap: 18px;
}

/* ===== Header Row ===== */

.plan-card-header {
    display: flex;
    gap: 12px;
    align-items: center;
}

/* Day Number Badge (Light Box) */
.day-number {
    min-width: 56px;
    height: 56px;
    background: #FBE7A1;
    color: #3730a3;
    font-weight: 600;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    flex-shrink: 0;
}

/* Day + Date Badge (Blue Box) */
.day-badge {
    flex: 1;
    background: #4f46e5;
    color: #ffffff;
    border-radius: 14px;
    padding: 12px 14px;
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.day-badge .day-name {
    font-size: 15px;
    font-weight: 600;
}

.day-badge .day-date {
    font-size: 13px;
    opacity: 0.9;
}

/* ===== Content ===== */

.plan-content p {
    margin: 0;
    font-size: 15.5px;
    font-weight: 500;
    line-height: 1.7;
    color: #111827;
}

/* ===== Note ===== */

.plan-note {
    background: #f9fafb;
    border-left: 4px solid #4f46e5;
    padding: 18px;
    border-radius: 12px;
    font-size: 14px;
    color: #374151;
    margin-top: 40px;
}

/* ===== Actions ===== */

.plan-actions {
    display: flex;
    justify-content: center;
    gap: 16px;
    margin-top: 36px;
    flex-wrap: wrap;
}

.primary-btn {
    background: #4f46e5;
    color: #ffffff;
    padding: 16px 38px;          /* BIGGER */
    border-radius: 999px;
    text-decoration: none;
    font-weight: 600;
    font-size: 15px;
    transition: all 0.25s ease;
}

.primary-btn:hover {
    background: #3730a3;
    transform: translateY(-2px);
}

.secondary-btn {
    background: #FBE7A1;
    color: #111827;
    padding: 16px 38px;          /* BIGGER */
    border-radius: 999px;
    text-decoration: none;
    font-weight: 600;
    font-size: 15px;
    transition: all 0.25s ease;
}

.secondary-btn:hover {
    background: #FBE7A1.;
    transform: translateY(-2px);
}

@media (max-width: 768px) {

    /* Global container */
    .navigator-results,
    .navigator-plan {
        padding: 0 14px;
    }

    /* Headers */
    .results-header h1,
    .plan-header h1 {
        font-size: 26px;
    }

    /* Result & plan cards */
    .result-card,
    .plan-card {
        padding: 18px;
    }

    /* Focus tags wrap nicely */
    .focus-tags {
        justify-content: flex-start;
    }

    /* CTA buttons stack */
    .results-actions,
    .plan-actions {
        flex-direction: column;
        align-items: stretch;
        gap: 14px;
    }

    .primary-btn,
    .secondary-btn {
        width: 100%;
        text-align: center;
    }

    /* Swiper arrows move slightly inside */
    .swiper-button-prev {
        left: 6px;
    }

    .swiper-button-next {
        right: 6px;
    }
}

@media (max-width: 480px) {

    /* Titles smaller */
    .results-header h1,
    .plan-header h1 {
        font-size: 24px;
    }

    /* Product cards become vertical */
    .product-card {
        flex-direction: column;
        align-items: flex-start;
    }

    .product-card img {
        width: 100%;
        height: 140px;
    }

    /* Plan grid becomes single column */
    .plan-grid {
        grid-template-columns: 1fr;
    }

    /* Day badges stack nicely */
    .plan-card-header {
        flex-direction: column;
        align-items: stretch;
    }

    .day-number,
    .day-badge {
        width: 100%;
    }
}


</style>

@php
    $result = session('navigator_result');
    $startDate = \Carbon\Carbon::today();
@endphp

<div class="navigator-plan">

    {{-- HEADER --}}
    <div class="plan-header">
        <h1>Your 7-Day Support Plan</h1>
        <p>
            These are gentle, supportive steps. Progress matters more than perfection.
        </p>
    </div>

    {{-- PLAN GRID --}}
    <div class="plan-grid">
        @foreach($result['plan_week'] as $index => $step)
            @php
                $date = $startDate->copy()->addDays($index);
            @endphp

            <div class="plan-card">

                {{-- HEADER ROW --}}
                <div class="plan-card-header">
                    <div class="day-number">
                        Day {{ $index + 1 }}
                    </div>

                    <div class="day-badge">
                        <span class="day-name">{{ $date->format('l') }}</span>
                        <span class="day-date">{{ $date->format('d M Y') }}</span>
                    </div>
                </div>

                {{-- CONTENT --}}
                <div class="plan-content">
                    <p>{{ $step }}</p>
                </div>

            </div>
        @endforeach
    </div>

    {{-- NOTE --}}
    <div class="plan-note">
        This plan is not a treatment program.  
        If any day feels overwhelming, it’s okay to pause, repeat a previous step,
        or seek support from a trusted person or professional.
    </div>

    {{-- ACTIONS --}}
    <div class="plan-actions">
        <a href="{{ url('/navigator/start') }}" class="primary-btn">
            Start a new assessment
        </a>
        <a href="{{ url('/contact-us') }}" class="secondary-btn">
            Get safety support
        </a>
    </div>

</div>

@endsection
