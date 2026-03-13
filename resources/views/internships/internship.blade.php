@extends('layouts.mainsite')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Mind Rewire | Internship</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/common-content/common-content.css') }}">

<style>

/* =================================
   INTERNSHIP PAGE
================================= */

.internship-page {
    /* wrapper */
}

/* =================================
   HERO
================================= */

.top_banner {
    min-height: 420px;
    display: flex;
    align-items: center;
    text-align: center;
    position: relative;
}

.top_banner .textbox {
    max-width: 800px;
    margin: 0 auto;
}

.top_banner p {
    color: #fff;
    font-size: 18px;
    opacity: 0.9;
}

/* =================================
   VISION & MISSION
================================= */

.vision-mission-section {
    padding: 120px 0;
    background: #f7f9fc;
}

.vm-wrapper {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 70px;
}

.vm-card {
    background: #fff;
    padding: 45px;
    border-radius: 14px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.06);
}

.vm-title {
    font-size: 30px;
    font-weight: 600;
    color: #1d3d91;
    margin-bottom: 20px;
}

.vm-desc {
    font-size: 16px;
    color: #555;
    margin-bottom: 25px;
    line-height: 1.7;
}

.vm-list {
    list-style: none;
    padding: 0;
}

.vm-list li {
    position: relative;
    padding-left: 32px;
    margin-bottom: 14px;
    line-height: 1.7;
}

.vm-list li:before {
    content: "✔";
    position: absolute;
    left: 0;
    color: #6fb24d;
    font-weight: bold;
}

/* =================================
   INTERNSHIP LEVELS
================================= */

.internship-levels {
    padding: 100px 0 80px;
    background: #f7f9fc;
}

.section-title {
    font-size: 36px;
    font-weight: 600;
    color: #1d3d91;
    margin-bottom: 60px;
}

.levels-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}

.level-card {
    background: #fff;
    padding: 40px;
    border-radius: 14px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.05);
    transition: all .3s ease;
}

.level-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(0,0,0,0.08);
}

.level-card h3 {
    font-size: 24px;
    color: #1d3d91;
    margin-bottom: 5px;
}

.level-sub {
    display: block;
    font-size: 14px;
    color: #777;
    margin-bottom: 25px;
}

.level-card ul {
    list-style: none;
    padding: 0;
}

.level-card li {
    margin-bottom: 14px;
    line-height: 1.6;
}

.level-card strong {
    color: #1d3d91;
}

/* =================================
   TABLE NOTE
================================= */

.table-note {
    margin-top: 10px;
    font-size: 13px;
    color: #0c0909;
}

/* =================================
   CTA BUTTONS
================================= */

.internship-cta {
    text-align: center;
    margin-top: 40px;
}

.cta-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 15px;
}

.cta-btn {
    padding: 14px 34px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 500;
    text-decoration: none;
    transition: all .25s ease;
    display: inline-block;
}

.cta-btn.primary {
    background: #1d3d91;
    color: #fff;
    box-shadow: 0 6px 18px rgba(29,61,145,0.25);
}

.cta-btn.primary:hover {
    background: #163173;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(29,61,145,0.35);
}

.cta-btn.secondary {
    border: 2px solid #1d3d91;
    color: #1d3d91;
    background: #fff;
}

.cta-btn.secondary:hover {
    background: #1d3d91;
    color: #fff;
    transform: translateY(-2px);
}

.cta-text {
    font-size: 16px;
    color: #444;
    margin-top: 10px;
}

/* =================================
   DISCOUNT PACKAGES
================================= */

.discount-packages {
    padding: 100px 0;
    background: #f7f9fc;
}

.discount-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-top: 50px;
}

.discount-card {
    background: #fff;
    padding: 35px;
    border-radius: 14px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
    transition: all .3s ease;
}

.discount-card p {
    color: #333;
    font-size: 16px;
    margin-bottom: 10px;
}

.discount-card strong {
    color: #4b7b2b;
}

.discount-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0,0,0,0.08);
}

.discount-icon {
    font-size: 26px;
    margin-bottom: 12px;
}

.price {
    margin-top: 10px;
    font-size: 18px;
}

.price .old {
    text-decoration: line-through;
    color: #d33;
    margin-right: 8px;
}

.price .new {
    color: #4b7b2b;
    font-weight: 600;
}

/* ===============================
   COORDINATOR SECTION
=============================== */

.internship-coordinators {
    padding: 110px 0;
    background: #f7f9fc;
    text-align: center;
}

.coordinator-grid {
    display: flex;
    justify-content: center;
    margin-top: 60px;
}

.coordinator-card {
    max-width: 320px;
}

.coordinator-image {
    width: 200px;
    height: 200px;
    margin: 0 auto 25px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    transition: all .3s ease;
}

.coordinator-image:hover {
    transform: scale(1.05);
}

.coordinator-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.coordinator-name {
    font-size: 22px;
    color: #6a8d3a;
    font-weight: 600;
    margin-bottom: 8px;
}

.coordinator-info {
    font-size: 15px;
    color: #333;
    font-weight: 500;
}

/* ===============================
   INTERNSHIP OFFER SECTION
=============================== */

.internship-offer {
    padding: 110px 0;
    background: #fff;
}

.offer-wrapper {
    display: grid;
    grid-template-columns: 1.1fr 1fr;
    gap: 70px;
    align-items: center;
}

.offer-title {
    font-size: 34px;
    color: #1d3d91;
    font-weight: 600;
    margin-bottom: 20px;
    line-height: 1.3;
}

.offer-desc {
    font-size: 16px;
    color: #444;
    margin-bottom: 25px;
    line-height: 1.7;
}

.offer-list {
    list-style: none;
    padding: 0;
    margin-bottom: 20px;
}

.offer-list li {
    position: relative;
    padding-left: 34px;
    margin-bottom: 14px;
    font-size: 16px;
    line-height: 1.6;
}

.offer-list li::before {
    content: "✔";
    position: absolute;
    left: 0;
    top: 0;
    color: #6a8d3a;
    font-weight: 600;
}

.offer-note {
    font-size: 14px;
    color: #666;
    margin-top: 10px;
}

.offer-image img {
    width: 100%;
    border-radius: 14px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

/* ===============================
   INTERNSHIP LEVEL DETAILS
=============================== */

.internship-level-details {
    padding: 110px 0;
    background: #f7f9fc;
}

.level-details-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 60px;
    margin-top: 60px;
}

.level-detail {
    max-width: 360px;
}

.level-intro {
    font-size: 17px;
    line-height: 1.6;
    font-weight: 500;
    margin-bottom: 20px;
    color: #333;
}

.level-intro span {
    color: #6a8d3a;
    font-weight: 700;
}

.level-checklist {
    list-style: none;
    padding: 0;
    margin: 0;
}

.level-checklist li {
    position: relative;
    padding-left: 32px;
    margin-bottom: 12px;
    font-size: 15px;
    line-height: 1.6;
    color: #444;
}

.level-checklist li::before {
    content: "✅";
    position: absolute;
    left: 0;
    top: 0;
}

.level-note {
    margin-top: 45px;
    text-align: center;
    font-size: 15px;
    color: #555;
}

/* ===============================
   INTERNSHIP BENEFITS
=============================== */

.internship-benefits {
    padding: 110px 0;
    background: #fff;
}

.benefits-wrapper {
    display: grid;
    grid-template-columns: 1.1fr 1fr;
    gap: 70px;
    align-items: center;
}

.benefits-title {
    font-size: 34px;
    font-weight: 600;
    color: #1d3d91;
    line-height: 1.3;
    margin-bottom: 20px;
}

.benefits-desc {
    font-size: 16px;
    color: #444;
    margin-bottom: 25px;
    line-height: 1.7;
}

.benefits-list {
    list-style: none;
    padding: 0;
}

.benefits-list li {
    position: relative;
    padding-left: 32px;
    margin-bottom: 14px;
    font-size: 16px;
    line-height: 1.6;
}

.benefits-list li::before {
    content: "✔";
    position: absolute;
    left: 0;
    top: 0;
    color: #6a8d3a;
    font-weight: 600;
}

.benefits-image img {
    width: 100%;
    border-radius: 14px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

/* =================================
   BROCHURE MODAL
================================= */

.brochure-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(10, 20, 40, 0.65);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    z-index: 9999;
    align-items: center;
    justify-content: center;
    padding: 16px;
}

.brochure-overlay.active {
    display: flex;
}

@keyframes overlayIn {
    from { opacity: 0; }
    to   { opacity: 1; }
}

.brochure-modal-box {
    background: #fff;
    border-radius: 16px;
    width: 100%;
    max-width: 440px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 24px 60px rgba(0,0,0,0.25);
    animation: boxIn 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
}

@keyframes boxIn {
    from { transform: translateY(30px) scale(0.96); opacity: 0; }
    to   { transform: translateY(0) scale(1); opacity: 1; }
}

.brochure-close {
    position: absolute;
    top: 14px;
    right: 14px;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: none;
    background: rgba(255,255,255,0.25);
    color: #fff;
    font-size: 20px;
    line-height: 1;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s, transform 0.2s;
    z-index: 2;
}

.brochure-close:hover {
    background: rgba(255,255,255,0.4);
    transform: rotate(90deg);
}

.brochure-header {
    background: linear-gradient(135deg, #1D3D91 0%, #142b6b 100%);
    padding: 28px 28px 24px;
    color: #fff;
    text-align: center;
}

.brochure-icon {
    width: 56px;
    height: 56px;
    background: rgba(255,255,255,0.18);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 14px;
    color: #fff;
}

.brochure-header h3 {
    font-size: 1.4rem;
    font-weight: 700;
    margin: 0 0 6px;
    color: #fff;
}

.brochure-header p {
    font-size: 0.88rem;
    margin: 0;
    opacity: 0.85;
    color: #fff;
}

.brochure-body {
    padding: 24px 28px 28px;
}

.field-group {
    margin-bottom: 18px;
}

.field-group label {
    display: block;
    font-size: 0.82rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 6px;
    letter-spacing: 0.02em;
}

.req { color: #e53e3e; }

.input-wrap {
    position: relative;
}

.field-icon {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    width: 16px;
    height: 16px;
    stroke: #999;
    pointer-events: none;
    transition: stroke 0.2s;
}

.input-wrap input {
    width: 100%;
    padding: 11px 14px 11px 38px;
    border: 1.5px solid #ddd;
    border-radius: 8px;
    font-size: 0.92rem;
    color: #222;
    background: #fafafa;
    transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
    outline: none;
    box-sizing: border-box;
}

.input-wrap input:focus {
    border-color: #1D3D91;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(29, 61, 145, 0.12);
}

.input-wrap:focus-within .field-icon {
    stroke: #1D3D91;
}

.input-wrap input.is-invalid {
    border-color: #e53e3e;
    background: #fff5f5;
}

.input-wrap input.is-invalid:focus {
    box-shadow: 0 0 0 3px rgba(229, 62, 62, 0.12);
}

.field-error {
    display: block;
    font-size: 0.78rem;
    color: #e53e3e;
    margin-top: 5px;
    min-height: 16px;
}

.global-error {
    background: #fff5f5;
    border: 1px solid #fed7d7;
    color: #c53030;
    border-radius: 8px;
    padding: 10px 14px;
    font-size: 0.85rem;
    margin-bottom: 16px;
}

.brochure-submit {
    width: 100%;
    padding: 13px;
    background: linear-gradient(135deg, #1D3D91 0%, #142b6b 100%);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 0.95rem;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: opacity 0.2s, transform 0.15s;
    margin-top: 4px;
    letter-spacing: 0.02em;
}

.brochure-submit:hover:not(:disabled) {
    opacity: 0.9;
    transform: translateY(-1px);
}

.brochure-submit:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none;
}

.spin {
    animation: rotate 0.8s linear infinite;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to   { transform: rotate(360deg); }
}

.brochure-success {
    padding: 40px 28px 36px;
    text-align: center;
    animation: fadeUp 0.4s ease;
}

@keyframes fadeUp {
    from { opacity: 0; transform: translateY(16px); }
    to   { opacity: 1; transform: translateY(0); }
}

.success-icon {
    width: 72px;
    height: 72px;
    margin: 0 auto 20px;
}

.success-icon svg {
    width: 100%;
    height: 100%;
}

.success-circle {
    stroke-dasharray: 157;
    stroke-dashoffset: 157;
    animation: drawCircle 0.5s ease forwards 0.1s;
}

.success-check {
    stroke-dasharray: 40;
    stroke-dashoffset: 40;
    animation: drawCheck 0.4s ease forwards 0.5s;
}

@keyframes drawCircle {
    to { stroke-dashoffset: 0; }
}

@keyframes drawCheck {
    to { stroke-dashoffset: 0; }
}

.brochure-success h4 {
    font-size: 1.25rem;
    font-weight: 700;
    color: #142b6b;
    margin: 0 0 10px;
}

.brochure-success p {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.6;
    margin: 0 0 24px;
}

.brochure-done {
    padding: 11px 36px;
    background: #1D3D91;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 0.92rem;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.2s, transform 0.15s;
}

.brochure-done:hover {
    background: #142b6b;
    transform: translateY(-1px);
}

/* =================================
   RESPONSIVE
================================= */

@media (max-width: 992px) {
    .vm-wrapper          { grid-template-columns: 1fr; gap: 40px; }
    .levels-grid         { grid-template-columns: 1fr; }
    .discount-grid       { grid-template-columns: 1fr; }
    .level-details-grid  { grid-template-columns: 1fr; gap: 40px; }
    .level-detail        { max-width: 100%; }
    .benefits-wrapper    { grid-template-columns: 1fr; gap: 40px; }
    .benefits-image      { order: -1; }
    .cta-buttons         { flex-direction: column; align-items: center; }
}

@media (max-width: 768px) {
    .vision-mission-section { padding: 70px 0; }
    .offer-wrapper    { grid-template-columns: 1fr; gap: 30px; }
    .offer-title      { font-size: 26px; }
    .offer-desc       { font-size: 15px; }
    .offer-list li    { font-size: 15px; }
    .offer-image      { text-align: center; }
    .offer-image img  { max-width: 320px; border-radius: 12px; }
}

@media (max-width: 480px) {
    .brochure-header  { padding: 22px 20px 18px; }
    .brochure-body    { padding: 20px 20px 24px; }
    .brochure-success { padding: 32px 20px 28px; }
}

</style>
@endsection


@section('content')

<div class="internship-page">

<!-- =========================
     HERO SECTION
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

        </div>

    </div>

</div>


<!-- =========================
     VISION & MISSION
========================== -->

<section class="vision-mission-section">
    <div class="custom_container">
        <div class="vm-wrapper">

            <div class="vm-card">
                <h3 class="vm-title">Vision</h3>
                <p class="vm-desc">The vision of this clinical psychology internship is to create an environment that:</p>
                <ul class="vm-list">
                    <li>Provides aspiring <b>mental health professionals</b> the nurturance and guidance in ethical clinical practices</li>
                    <li>Inspires professional as well as personal growth of the individual</li>
                    <li>Promotes inclusivity, participation, and education</li>
                </ul>
            </div>

            <div class="vm-card">
                <h3 class="vm-title">Mission</h3>
                <p class="vm-desc">This internship for clinical psychology students aims to empower the future of mental health by:</p>
                <ul class="vm-list">
                    <li>Creating competent, ethical, and socially conscious future mental health professionals</li>
                    <li>Creating a theoretical as well as practical understanding of clinical practice</li>
                    <li>Providing mentorship from licensed and experienced clinical psychologists</li>
                </ul>
            </div>

        </div>
    </div>
</section>


<!-- =========================
     INTERNSHIP LEVELS
========================== -->

<section class="internship-levels">
    <div class="custom_container">

        <h2 class="section-title text-center">Internship Program Levels</h2>

        <div class="levels-grid">

            <div class="level-card">
                <h3>Level One</h3>
                <span class="level-sub">(Junior Internship)</span>
                <ul>
                    <li><strong>Duration:</strong> 2 months</li>
                    <li><strong>Frequency:</strong> 4 days a week, 4 hours/day</li>
                    <li><strong>Fees:</strong> INR 7499/-</li>
                    <li><strong>Eligibility:</strong> Currently pursuing / finished Masters in Clinical Psychology, must appear for screening interview</li>
                    <li><strong>Key Learnings:</strong> Case history intake, report writing, diagnosis creation, administration of rating scales and IQ tests</li>
                    <li><strong>Max Seats:</strong> 8</li>
                    <li><strong>Min Seats:</strong> 4</li>
                </ul>
            </div>

            <div class="level-card">
                <h3>Level Two</h3>
                <span class="level-sub">(Senior Internship)</span>
                <ul>
                    <li><strong>Duration:</strong> 2 months</li>
                    <li><strong>Frequency:</strong> 4 days a week, 4 hours/day</li>
                    <li><strong>Fees:</strong> INR 7499/-</li>
                    <li><strong>Eligibility:</strong> Currently pursuing / finished Masters in Clinical Psychology and has passed Level One in the internal assessment</li>
                    <li><strong>Key Learnings:</strong> Psychometric assessments (personality, developmental, neuropsychology), administration, scoring and reporting</li>
                    <li><strong>Max Seats:</strong> 8</li>
                    <li><strong>Min Seats:</strong> 4</li>
                </ul>
            </div>

            <div class="level-card">
                <h3>Level Three</h3>
                <span class="level-sub">(Apprenticeship)</span>
                <ul>
                    <li><strong>Duration:</strong> 2 months</li>
                    <li><strong>Frequency:</strong> 5 days a week, 5 hours/day</li>
                    <li><strong>Fees:</strong> INR 7499/-</li>
                    <li><strong>Eligibility:</strong> Completed Masters in Clinical Psychology and passed Level Two in the internal assessment</li>
                    <li><strong>Key Learnings:</strong> Basic counselling skills, psychoeducation, parent counselling and crisis intervention</li>
                    <li><strong>Max Seats:</strong> 8</li>
                    <li><strong>Min Seats:</strong> 4</li>
                </ul>
            </div>

        </div>

        <p class="table-note">*Advance payment is mandatory.</p>
        <p class="table-note">*Eligible candidates will receive an email from the internship coordinators to set up a date and time for a screening interview.</p>
        <p class="table-note">*If selected for the internship, candidates will receive a confirmation email along with the payment details and further instructions.</p>

    </div>
</section>


<!-- =========================
     CTA SECTION
========================== -->

<div class="internship-cta">
    <div class="cta-buttons">
        <a href="https://forms.gle/kutdx7J5BpMr15gr8" target="_blank" class="cta-btn primary">Apply Now</a>
        <a href="javascript:void(0)" id="downloadBrochureBtn" class="cta-btn secondary">Download Brochure</a>
    </div>
    <p class="cta-text">Learn more about how we shape <strong>Psychologists in the Making</strong> through our hands-on internship program.</p>
</div>


<!-- =========================
     DISCOUNTS / PACKAGES
========================== -->

<section class="discount-packages">
    <div class="custom_container">

        <h2 class="section-title text-center">Discounts / Packages</h2>

        <div class="discount-grid">

            <div class="discount-card">
                <div class="discount-icon">🎁</div>
                <p>Minimum <strong>10% off</strong> for a group of four people</p>
            </div>

            <div class="discount-card">
                <div class="discount-icon">🎁</div>
                <p>Package of L1 + L2 + L3</p>
                <div class="price">
                    <span class="old">INR 22,499</span>
                    <span class="new">INR 20,499/-</span>
                </div>
            </div>

            <div class="discount-card">
                <div class="discount-icon">🎁</div>
                <p>Package of L1 + L2</p>
                <div class="price">
                    <span class="old">INR 14,999</span>
                    <span class="new">INR 12,999/-</span>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- =========================
     CO-ORDINATOR
========================== -->

<section class="internship-coordinators">
    <div class="custom_container">

        <h2 class="section-title text-center">Co-ordinator</h2>

        <div class="coordinator-grid">
            <div class="coordinator-card">
                <div class="coordinator-image">
                    <img src="{{ asset('assets/images/coordinators/sumedhamam.png') }}" alt="Dr Sumedha Singh">
                </div>
                <h3 class="coordinator-name">Dr. Sumedha Singh</h3>
                <p class="coordinator-info">Psychologist | Founder, Mind Rewire | TedX Speaker</p>
            </div>
        </div>

    </div>
</section>


<!-- =========================
     WHAT INTERNSHIP OFFERS
========================== -->

<section class="internship-offer">
    <div class="custom_container">
        <div class="offer-wrapper">

            <div class="offer-content">
                <h2 class="offer-title">What does the Mind-Rewire Clinical Psychology Internship in Pune offer?</h2>
                <p class="offer-desc">Widely recognized as the best internship for psychology students in India, our program is divided into three levels which provide hands-on opportunities in</p>
                <ul class="offer-list">
                    <li>Ethical case history, mental status examination, and diagnostic skills</li>
                    <li>Training in administration, scoring, and reports of psychometric assessments</li>
                    <li>Training in basic counselling skills, psychoeducational, and crisis intervention</li>
                </ul>
                <p class="offer-note">*Consent from the client will be taken beforehand</p>
            </div>

            <div class="offer-image">
                <img src="{{ asset('assets/images/coordinators/class.png') }}" alt="Internship Training">
            </div>

        </div>
    </div>
</section>


<!-- =========================
     INTERNSHIP LEVEL DETAILS
========================== -->

<section class="internship-level-details">
    <div class="custom_container">

        <h2 class="section-title text-center">Internship Levels</h2>

        <div class="level-details-grid">

            <div class="level-detail">
                <p class="level-intro">The aim of <span>Level I</span> (Junior Internship) is to equip the intern with</p>
                <ul class="level-checklist">
                    <li>Case history taking skills</li>
                    <li>An understanding of the clinical features of disorders</li>
                    <li>Case history report writing</li>
                    <li>Formulating diagnoses</li>
                    <li>Administering/scoring rating scales/IQ tests</li>
                </ul>
            </div>

            <div class="level-detail">
                <p class="level-intro">The aim of <span>Level II</span> (Senior Internship) is to equip the intern with the skills to administer, score and report</p>
                <ul class="level-checklist">
                    <li>Personality tests</li>
                    <li>Projective tests</li>
                    <li><strong>Neuropsychological tests</strong></li>
                </ul>
            </div>

            <div class="level-detail">
                <p class="level-intro">The aim of <span>Level III</span> (Apprenticeship) is to equip the intern with</p>
                <ul class="level-checklist">
                    <li>Basic counselling skills</li>
                    <li>Skills in psychoeducating clients regarding mental health concerns</li>
                    <li>Crisis intervention</li>
                </ul>
            </div>

        </div>

        <p class="level-note">*A letter of experience will be provided at the end of each level.</p>

    </div>
</section>


<!-- =========================
     INTERNSHIP BENEFITS
========================== -->

<section class="internship-benefits">
    <div class="custom_container">
        <div class="benefits-wrapper">

            <div class="benefits-content">
                <h2 class="benefits-title">How do I benefit from interning at Mind Rewire?</h2>
                <p class="benefits-desc">Here are all the benefits you can expect by enrolling in the finest clinical psychology internship in India</p>
                <ul class="benefits-list">
                    <li>A letter of clinical experience for further job/academic opportunities</li>
                    <li>Guidance and mentorship from licensed (RCI) <strong>clinical psychologists</strong></li>
                    <li>Ethical and holistic approach to practical training in the clinical skills required in mental health</li>
                    <li>Access to academic and clinical reading material for various entrance exams</li>
                    <li>Participation in group discussions, case presentations, and lecture</li>
                </ul>
            </div>

            <div class="benefits-image">
                <img src="{{ asset('assets/images/coordinators/cabin.png') }}" alt="Internship Benefits">
            </div>

        </div>
    </div>
</section>

</div>{{-- end .internship-page --}}


<!-- =========================
     BROCHURE MODAL
========================== -->

<div class="brochure-overlay" id="brochureOverlay" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="brochureModalTitle">

    <div class="brochure-modal-box" id="brochureBox">

        <button class="brochure-close" id="brochureClose" aria-label="Close modal">&times;</button>

        <div class="brochure-header">
            <div class="brochure-icon">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                    <line x1="12" y1="18" x2="12" y2="12"/>
                    <line x1="9" y1="15" x2="15" y2="15"/>
                </svg>
            </div>
            <h3 id="brochureModalTitle">Download Brochure</h3>
            <p>Get the complete internship guide sent to your inbox</p>
        </div>

        <div class="brochure-body" id="brochureFormState">
            <form id="brochureForm" novalidate>
                @csrf

                <div class="field-group">
                    <label for="b_name">Full Name <span class="req">*</span></label>
                    <div class="input-wrap">
                        <svg class="field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <input type="text" id="b_name" name="name" placeholder="Enter your full name" autocomplete="name">
                    </div>
                    <span class="field-error" id="err_name"></span>
                </div>

                <div class="field-group">
                    <label for="b_email">Email Address <span class="req">*</span></label>
                    <div class="input-wrap">
                        <svg class="field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <input type="email" id="b_email" name="email" placeholder="Enter your email address" autocomplete="email">
                    </div>
                    <span class="field-error" id="err_email"></span>
                </div>

                <div class="field-group">
                    <label for="b_phone">Phone Number <span class="req">*</span></label>
                    <div class="input-wrap">
                        <svg class="field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.62 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.16 6.16l.97-.97a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <input type="tel" id="b_phone" name="phone" placeholder="Enter your phone number" autocomplete="tel">
                    </div>
                    <span class="field-error" id="err_phone"></span>
                </div>

                <div class="global-error" id="globalError" style="display:none;"></div>

                <button type="submit" class="brochure-submit" id="brochureSubmit">
                    <span class="btn-text">Send Me the Brochure</span>
                    <span class="btn-loader" style="display:none;">
                        <svg class="spin" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
                        Sending...
                    </span>
                </button>

            </form>
        </div>

        <div class="brochure-success" id="brochureSuccess" style="display:none;">
            <div class="success-icon">
                <svg viewBox="0 0 52 52" fill="none">
                    <circle class="success-circle" cx="26" cy="26" r="25" stroke="#1D3D91" stroke-width="2"/>
                    <path class="success-check" d="M14 26l8 8 16-16" stroke="#1D3D91" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h4>You're all set!</h4>
            <p>The Mind Rewire Internship Brochure has been sent to your email. Please check your inbox (and spam, just in case).</p>
            <button class="brochure-done" id="brochureDone">Done</button>
        </div>

    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const overlay      = document.getElementById("brochureOverlay");
    const openBtn      = document.getElementById("downloadBrochureBtn");
    const closeBtn     = document.getElementById("brochureClose");
    const doneBtn      = document.getElementById("brochureDone");
    const form         = document.getElementById("brochureForm");
    const submitBtn    = document.getElementById("brochureSubmit");
    const formState    = document.getElementById("brochureFormState");
    const successState = document.getElementById("brochureSuccess");
    const globalError  = document.getElementById("globalError");

    // ── Open ──
    openBtn.addEventListener("click", function () {
        overlay.classList.add("active");
        overlay.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
        setTimeout(() => document.getElementById("b_name").focus(), 300);
    });

    // ── Close ──
    function closeModal() {
        overlay.classList.remove("active");
        overlay.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
    }

    function resetModal() {
        form.reset();
        clearErrors();
        globalError.style.display      = "none";
        formState.style.display        = "block";
        successState.style.display     = "none";
        submitBtn.disabled             = false;
        document.querySelector(".btn-text").style.display   = "inline";
        document.querySelector(".btn-loader").style.display = "none";
    }

    closeBtn.addEventListener("click", function () { closeModal(); setTimeout(resetModal, 300); });
    doneBtn.addEventListener("click",  function () { closeModal(); setTimeout(resetModal, 300); });

    overlay.addEventListener("click", function (e) {
        if (e.target === overlay) { closeModal(); setTimeout(resetModal, 300); }
    });

    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && overlay.classList.contains("active")) {
            closeModal(); setTimeout(resetModal, 300);
        }
    });

    // ── Validation ──
    function clearErrors() {
        document.querySelectorAll(".field-error").forEach(el => el.textContent = "");
        document.querySelectorAll(".input-wrap input").forEach(el => el.classList.remove("is-invalid"));
    }

    function showError(fieldId, errId, message) {
        document.getElementById(fieldId).classList.add("is-invalid");
        document.getElementById(errId).textContent = message;
    }

    function validateForm() {
        clearErrors();
        let valid = true;
        const name  = document.getElementById("b_name").value.trim();
        const email = document.getElementById("b_email").value.trim();
        const phone = document.getElementById("b_phone").value.trim();

        if (!name || name.length < 2) { showError("b_name", "err_name", "Please enter your full name."); valid = false; }
        if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { showError("b_email", "err_email", "Please enter a valid email address."); valid = false; }
        if (!phone || !/^[\d\s\+\-\(\)]{7,15}$/.test(phone)) { showError("b_phone", "err_phone", "Please enter a valid phone number."); valid = false; }

        return valid;
    }

    // Blur validation
    document.getElementById("b_name").addEventListener("blur", function () {
        const v = this.value.trim();
        if (!v || v.length < 2) showError("b_name", "err_name", "Please enter your full name.");
        else { this.classList.remove("is-invalid"); document.getElementById("err_name").textContent = ""; }
    });

    document.getElementById("b_email").addEventListener("blur", function () {
        const v = this.value.trim();
        if (!v || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v)) showError("b_email", "err_email", "Please enter a valid email address.");
        else { this.classList.remove("is-invalid"); document.getElementById("err_email").textContent = ""; }
    });

    document.getElementById("b_phone").addEventListener("blur", function () {
        const v = this.value.trim();
        if (!v || !/^[\d\s\+\-\(\)]{7,15}$/.test(v)) showError("b_phone", "err_phone", "Please enter a valid phone number.");
        else { this.classList.remove("is-invalid"); document.getElementById("err_phone").textContent = ""; }
    });

    // ── Submit ──
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        if (!validateForm()) return;

        submitBtn.disabled = true;
        document.querySelector(".btn-text").style.display   = "none";
        document.querySelector(".btn-loader").style.display = "flex";
        globalError.style.display = "none";

        fetch("{{ url('/download-brochure') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Accept": "application/json"
            },
            body: new FormData(form)
        })
        .then(function (res) {
            if (res.status === 422) {
                return res.json().then(function (data) {
                    const errors = data.errors || {};
                    if (errors.name)  showError("b_name",  "err_name",  errors.name[0]);
                    if (errors.email) showError("b_email", "err_email", errors.email[0]);
                    if (errors.phone) showError("b_phone", "err_phone", errors.phone[0]);
                    submitBtn.disabled = false;
                    document.querySelector(".btn-text").style.display   = "inline";
                    document.querySelector(".btn-loader").style.display = "none";
                    throw new Error("validation");
                });
            }
            if (!res.ok) throw new Error("server");
            return res.json();
        })
        .then(function (data) {
            if (data.success) {
                formState.style.display    = "none";
                successState.style.display = "block";
            } else {
                throw new Error("unknown");
            }
        })
        .catch(function (err) {
            if (err.message === "validation") return;
            globalError.textContent   = "Something went wrong. Please try again or contact us directly.";
            globalError.style.display = "block";
            submitBtn.disabled = false;
            document.querySelector(".btn-text").style.display   = "inline";
            document.querySelector(".btn-loader").style.display = "none";
        });
    });

});
</script>

@endsection