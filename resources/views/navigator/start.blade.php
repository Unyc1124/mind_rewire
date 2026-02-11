@extends('layouts.mainsite')

@section('title')
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

.container {
    max-width: 1200px;
    margin: 40px auto 80px;
    display: grid;
    grid-template-columns: 1fr 1fr; /* ✅ 50–50 */
    gap: 32px;
}

/* ---------- CARD ---------- */
.card {
    background: #ffffff;
    border-radius: 16px;
    padding: 28px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.06);
}

/* ---------- BADGES ---------- */
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
}

.badge p {
    margin-top: 6px;
    font-size: 13px;
    color: var(--text-muted);
}

/* ---------- GUIDELINES ---------- */
.guidelines h3 {
    margin-bottom: 18px;
    color: var(--text-dark);
}

.guidelines ul {
    list-style: none;
    padding: 0;
}

.guidelines li {
    margin-bottom: 16px;
    color: var(--text-dark);
}

.guidelines li span {
    display: block;
    margin-top: 4px;
    font-size: 13px;
    color: var(--text-muted);
}

.note {
    font-size: 13px;
    color: var(--text-muted);
    margin-top: 16px;
    line-height: 1.5;
}

/* ---------- FORM ---------- */
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
    resize: none;
    outline: none;
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

button {
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
}

button.active {
    background: var(--primary);
    cursor: pointer;
}

@media (max-width: 768px) {

    .navigator-start {
        padding: 0 14px;
    }

    .navigator-start h1 {
        font-size: 26px;
        text-align: center;
    }

    .navigator-start p {
        font-size: 14px;
        text-align: center;
    }

    .assessment-form {
        padding: 20px;
    }

    textarea {
        font-size: 14px;
        min-height: 120px;
    }

    select {
        font-size: 14px;
    }

    button[type="submit"] {
        width: 100%;
        padding: 16px;
        font-size: 15px;
    }
}

</style>
@endsection

@section('content')

<div class="container">

    {{-- LEFT SIDE (50%) --}}
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
                    <span>There’s no rush — reflect carefully</span>
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

    {{-- RIGHT SIDE (50%) --}}
    <div class="card">
        <h2>Start Your Assessment</h2>

        <p class="note">
            Describe your emotions, thoughts, sleep patterns, energy levels,
            or any challenges you’re facing.
        </p>

        {{-- 🔗 CONNECTED TO BACKEND RAG --}}
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
                placeholder="Over the past few weeks, I’ve been feeling overwhelmed with work. My sleep has been disrupted and I often feel anxious..."
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
const btn = document.getElementById('submitBtn');
const count = document.getElementById('charCount');

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
