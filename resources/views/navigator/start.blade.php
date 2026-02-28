@extends('layouts.mainsite')

@section('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mind Rewire | Start Assessment</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/common-content/common-content.css') }}">

<style>
:root {
    --primary: #2f3fb1;
    --primary-soft: #eef1ff;
    --text-dark: #1f2937;
    --text-muted: #6b7280;
    --border-soft: #e5e7eb;
}

/* ── Layout container ── */
.assessment-container {
    max-width: 1200px;
    margin: 40px auto 80px;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 32px;
    box-sizing: border-box;
}

/* ── Card ── */
.card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
    box-sizing: border-box;
}

/* ── Badges ── */
.badges {
    display: grid;
    grid-template-columns: 1fr;
    gap: 14px;
    margin-bottom: 24px;
}

.badge {
    background: var(--primary-soft);
    border-radius: 14px;
    padding: 16px;
}

.badge h4 {
    margin: 0;
    font-size: 15px;
    color: var(--text-dark);
    line-height: 1.4;
}

.badge p {
    margin: 6px 0 0;
    font-size: 13px;
    color: var(--text-muted);
    line-height: 1.4;
}

/* ── Guidelines card ── */
.guidelines h3 {
    margin: 0 0 18px;
    color: var(--text-dark);
    font-size: 18px;
}

.guidelines ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.guidelines li {
    margin-bottom: 16px;
    color: var(--text-dark);
    font-size: 14px;
    line-height: 1.4;
}

.guidelines li span {
    display: block;
    margin-top: 4px;
    font-size: 13px;
    color: var(--text-muted);
}

/* ── Note text ── */
.note {
    font-size: 13px;
    color: var(--text-muted);
    margin-top: 16px;
    line-height: 1.5;
}

/* ── Form heading ── */
.card h2 {
    margin: 0 0 8px;
    font-size: 22px;
    color: var(--text-dark);
}

/* ── Form elements ── */
label {
    display: block;
    margin-top: 14px;
    margin-bottom: 6px;
    font-size: 13px;
    color: var(--text-muted);
}

select {
    width: 100%;
    padding: 14px;
    border-radius: 12px;
    border: 1px solid var(--border-soft);
    font-size: 14px;
    background: #fff;
    box-sizing: border-box;
    -webkit-appearance: none;
    appearance: none;
}

select:focus {
    outline: none;
    border-color: var(--primary);
}

textarea {
    width: 100%;
    height: 300px;
    padding: 18px;
    font-size: 15px;
    line-height: 1.8;
    border-radius: 14px;
    border: 1px solid var(--border-soft);
    background:
        repeating-linear-gradient(
            to bottom,
            #fafafa,
            #fafafa 27px,
            #f0f1f5 28px
        );
    resize: vertical; /* allow vertical resize, not horizontal */
    outline: none;
    box-sizing: border-box;
    min-height: 180px;
}

textarea:focus {
    background:
        repeating-linear-gradient(
            to bottom,
            #ffffff,
            #ffffff 27px,
            #e7e9f4 28px
        );
    border-color: var(--primary);
}

button[type="submit"] {
    width: 100%;
    margin-top: 22px;
    padding: 16px;
    border-radius: 14px;
    border: none;
    font-size: 16px;
    font-weight: 600;
    background: #c7c9cf;
    color: #ffffff;
    cursor: not-allowed;
    transition: all 0.2s ease;
    box-sizing: border-box;
    touch-action: manipulation; /* better tap response on mobile */
}

button[type="submit"].active {
    background: var(--primary);
    cursor: pointer;
}

button[type="submit"].active:hover {
    background: #2535a0;
    transform: translateY(-1px);
}

/* ==============================================
   RESPONSIVE BREAKPOINTS
   ============================================== */

/* ── Tablet: 768px – 991px ── */
@media (max-width: 991px) {
    .assessment-container {
        grid-template-columns: 1fr;
        gap: 24px;
        margin: 30px auto 60px;
    }

    /* On tablet, show badges in a row */
    .badges {
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
    }

    textarea {
        height: 220px;
    }
}

/* ── Mobile: max 767px ── */
@media (max-width: 767px) {
    .assessment-container {
        grid-template-columns: 1fr;   /* ← THIS was the main break */
        gap: 20px;
        margin: 20px auto 50px;
        padding: 0 14px;
    }

    /* Badges stack in single column on small phones */
    .badges {
        grid-template-columns: 1fr;
        gap: 10px;
        margin-bottom: 16px;
    }

    .badge {
        padding: 14px;
        border-radius: 12px;
    }

    .badge h4 {
        font-size: 14px;
    }

    .badge p {
        font-size: 12px;
    }

    /* Card */
    .card {
        padding: 20px 18px;
        border-radius: 14px;
    }

    /* Guidelines */
    .guidelines h3 {
        font-size: 16px;
        margin-bottom: 14px;
    }

    .guidelines li {
        font-size: 13px;
        margin-bottom: 12px;
    }

    /* Form heading */
    .card h2 {
        font-size: 18px;
    }

    /* Select */
    select {
        padding: 12px;
        font-size: 14px;
        border-radius: 10px;
    }

    /* Textarea — no fixed height on mobile */
    textarea {
        height: auto;
        min-height: 160px;
        font-size: 14px;
        padding: 14px;
        border-radius: 12px;
        line-height: 1.7;
    }

    /* Char count note */
    .note {
        font-size: 12px;
        margin-top: 10px;
    }

    /* Submit button — full width, large tap target */
    button[type="submit"] {
        margin-top: 16px;
        padding: 16px;
        font-size: 15px;
        border-radius: 12px;
        min-height: 52px; /* good tap target */
    }

    label {
        font-size: 13px;
        margin-top: 12px;
    }
}

/* ── Extra small: max 400px ── */
@media (max-width: 400px) {
    .assessment-container {
        padding: 0 12px;
        margin: 16px auto 40px;
    }

    .card {
        padding: 16px 14px;
    }

    .card h2 {
        font-size: 16px;
    }

    textarea {
        min-height: 140px;
        font-size: 13px;
    }

    button[type="submit"] {
        font-size: 14px;
        padding: 14px;
    }
}
</style>
@endsection

@section('content')

{{-- Renamed from .container to .assessment-container
     to avoid collision with Bootstrap's .container class --}}
<div class="assessment-container">

    {{-- LEFT SIDE --}}
    <div>

        <div class="badges">
            <div class="badge">
                <h4>🔒 100% Confidential</h4>
                <p>Your responses remain private and secure</p>
            </div>

            <div class="badge">
                <h4>⏱ Quick Assessment</h4>
                <p>Complete in just a few minutes</p>
            </div>

            <div class="badge">
                <h4>🧠 AI-Powered Analysis</h4>
                <p>Guided by evidence-based patterns</p>
            </div>
        </div>

        <div class="card guidelines">
            <h3>Assessment Guidelines</h3>

            <ul>
                <li>
                    <strong>Be Honest</strong>
                    <span>Share your genuine feelings and experiences</span>
                </li>
                <li>
                    <strong>Provide Details</strong>
                    <span>More context helps us guide you better</span>
                </li>
                <li>
                    <strong>Take Your Time</strong>
                    <span>There's no rush — reflect carefully</span>
                </li>
                <li>
                    <strong>Recent Experiences</strong>
                    <span>Focus on the last 2–4 weeks</span>
                </li>
            </ul>

            <div class="note">
                <strong>Important:</strong> This is not a medical diagnosis.
                If you feel unsafe or overwhelmed, seek professional help.
            </div>
        </div>
    </div>

    {{-- RIGHT SIDE --}}
    <div class="card">
        <h2>Start Your Assessment</h2>

        <p class="note">
            Describe your emotions, thoughts, sleep patterns, energy levels,
            or any challenges you're facing.
        </p>

        <form method="POST" action="/navigator/analyze">
            @csrf

            <label for="age_group">Age Group</label>
            <select name="age_group" id="age_group" required>
                <option value="">Select your age group</option>
                <option value="child">Child (12 or below)</option>
                <option value="teen">Teen (13–17)</option>
                <option value="adult" selected>Adult (18–59)</option>
                <option value="senior">Senior (60+)</option>
            </select>

            <label for="assessmentText">Your experience</label>
            <textarea
                name="text"
                id="assessmentText"
                placeholder="Over the past few weeks, I've been feeling overwhelmed with work. My sleep has been disrupted and I often feel anxious..."
                required></textarea>

            <div class="note">
                <span id="charCount">0</span> characters • Minimum 50 recommended
            </div>

            <button type="submit" id="submitBtn">
                Analyze Assessment
            </button>
        </form>
    </div>

</div>

<script>
const textarea = document.getElementById('assessmentText');
const btn      = document.getElementById('submitBtn');
const count    = document.getElementById('charCount');

btn.disabled = true;

textarea.addEventListener('input', () => {
    const len = textarea.value.length;
    count.innerText = len;

    if (len >= 50) {
        btn.classList.add('active');
        btn.disabled = false;
    } else {
        btn.classList.remove('active');
        btn.disabled = true;
    }
});
</script>

@endsection