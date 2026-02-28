@extends('layouts.mainsite')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Checkout | Mind Rewire</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<style>

/* ── Layout ── */
.checkout-wrapper {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 40px;
    margin-top: 40px;
    margin-bottom: 60px;
}

.checkout-box {
    background: #fff;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    box-sizing: border-box;
}

.checkout-box h3 {
    margin: 0 0 24px;
    font-size: 20px;
    color: #1D3D91;
}

/* ── Form groups ── */
.form-group {
    margin-bottom: 20px;
    position: relative;
}

.form-group label {
    font-weight: 600;
    font-size: 13px;
    display: block;
    margin-bottom: 7px;
    color: #374151;
    letter-spacing: 0.3px;
}

.required-star { color: #e11d48; margin-left: 2px; }

/* ── Input base ── */
.form-group input[type="text"],
.form-group input[type="email"],
.form-group textarea {
    width: 100%;
    padding: 11px 14px 11px 42px;
    border-radius: 10px;
    border: 1.5px solid #e5e7eb;
    font-size: 14px;
    color: #111827;
    background: #fafafa;
    box-sizing: border-box;
    transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
    outline: none;
}

.form-group textarea {
    padding-left: 14px; /* no icon */
    resize: vertical;
    min-height: 110px;
    line-height: 1.6;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #1D3D91;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(29,61,145,0.08);
}

/* States */
.form-group input.is-error,
.form-group textarea.is-error {
    border-color: #e11d48 !important;
    box-shadow: 0 0 0 3px rgba(225,29,72,0.08) !important;
}
.form-group input.is-ok,
.form-group textarea.is-ok {
    border-color: #16a34a !important;
    box-shadow: 0 0 0 3px rgba(22,163,74,0.08) !important;
}

/* ── Icon inside input ── */
.input-wrap {
    position: relative;
}
.input-wrap .ico {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 15px;
    pointer-events: none;
}

/* ── Validation messages ── */
.vmsg {
    font-size: 12px;
    margin-top: 5px;
    display: none;
    align-items: center;
    gap: 4px;
    line-height: 1.4;
}
.vmsg.show   { display: flex; }
.vmsg.err    { color: #e11d48; }
.vmsg.ok     { color: #16a34a; }

/* ============================================
   PHONE FIELD
   ============================================ */
.phone-row {
    display: flex;
    border: 1.5px solid #e5e7eb;
    border-radius: 10px;
    overflow: visible;          /* dropdown needs to escape */
    background: #fafafa;
    transition: border-color 0.2s, box-shadow 0.2s;
    position: relative;
}

.phone-row:focus-within {
    border-color: #1D3D91;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(29,61,145,0.08);
}

.phone-row.is-error {
    border-color: #e11d48 !important;
    box-shadow: 0 0 0 3px rgba(225,29,72,0.08) !important;
}
.phone-row.is-ok {
    border-color: #16a34a !important;
    box-shadow: 0 0 0 3px rgba(22,163,74,0.08) !important;
}

/* Trigger button */
.cc-btn {
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 0 12px;
    border-right: 1.5px solid #e5e7eb;
    background: #f0f4ff;
    cursor: pointer;
    user-select: none;
    flex-shrink: 0;
    min-width: 86px;
    border-radius: 8px 0 0 8px;
    transition: background 0.15s;
    white-space: nowrap;
}
.cc-btn:hover { background: #e4eaff; }

.cc-flag  { font-size: 20px; line-height: 1; }
.cc-code  { font-size: 13px; font-weight: 600; color: #1D3D91; }
.cc-arrow { font-size: 9px; color: #6b7280; transition: transform 0.2s; margin-left: 2px; }
.cc-btn.open .cc-arrow { transform: rotate(180deg); }

/* Phone number input */
.ph-input {
    flex: 1;
    border: none !important;
    border-radius: 0 8px 8px 0 !important;
    background: transparent !important;
    box-shadow: none !important;
    padding: 11px 14px !important;
    font-size: 14px;
    outline: none;
    min-width: 0;
    color: #111827;
}

/* ── Country Dropdown ── */
.cc-dropdown {
    position: absolute;
    top: calc(100% + 6px);
    left: 0;
    width: 300px;
    max-height: 270px;
    background: #fff;
    border: 1.5px solid #e5e7eb;
    border-radius: 12px;
    box-shadow: 0 16px 40px rgba(0,0,0,0.13);
    z-index: 9999;
    display: none;
    flex-direction: column;
    overflow: hidden;
}
.cc-dropdown.open { display: flex; }

.cc-search {
    padding: 10px 12px;
    border-bottom: 1px solid #f3f4f6;
    flex-shrink: 0;
}
.cc-search input {
    width: 100%;
    padding: 8px 12px;
    border: 1.5px solid #e5e7eb;
    border-radius: 8px;
    font-size: 13px;
    background: #f9fafb;
    box-sizing: border-box;
    outline: none;
}
.cc-search input:focus { border-color: #1D3D91; }

.cc-list {
    overflow-y: auto;
    flex: 1;
    padding: 4px 0;
}

.cc-opt {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 9px 14px;
    cursor: pointer;
    font-size: 13px;
    color: #374151;
    transition: background 0.12s;
}
.cc-opt:hover, .cc-opt.sel { background: #f0f4ff; color: #1D3D91; }
.cc-opt .o-flag { font-size: 18px; }
.cc-opt .o-name { flex: 1; }
.cc-opt .o-code { font-weight: 600; color: #1D3D91; font-size: 12px; }

/* ── Order summary ── */
.order-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 12px;
    font-size: 14px;
    color: #374151;
}
.order-row span:first-child { flex: 1; word-break: break-word; }
.order-row span:last-child  { white-space: nowrap; font-weight: 600; color: #1D3D91; }
.order-total { font-weight: 700; font-size: 18px; color: #1D3D91; margin-top: 4px; }

/* ── Pay button ── */
.pay-btn {
    width: 100%;
    margin-top: 24px;
    min-height: 52px;
    font-size: 15px;
    touch-action: manipulation;
}

.mt-5 { margin-top: 40px !important; }

/* ==============================================
   RESPONSIVE
   ============================================== */
@media (max-width: 991px) {
    .checkout-wrapper { grid-template-columns: 1fr 1fr; gap: 24px; }
}

@media (max-width: 767px) {
    .checkout-wrapper {
        grid-template-columns: 1fr;
        gap: 20px;
        margin-top: 24px;
        margin-bottom: 40px;
    }
    .checkout-box   { padding: 20px 18px; border-radius: 14px; }
    .checkout-box h3 { font-size: 17px; margin-bottom: 16px; }
    .form-group     { margin-bottom: 16px; }

    /* iOS anti-zoom — must be 16px */
    .form-group input[type="text"],
    .form-group input[type="email"],
    .ph-input { font-size: 16px !important; }

    .form-group textarea { font-size: 16px; }

    .cc-dropdown { width: 260px; }
    .order-total { font-size: 16px; }
    h2.mt-5 { font-size: 22px; margin-top: 24px !important; }
}

@media (max-width: 400px) {
    .checkout-box   { padding: 16px 14px; }
    .cc-dropdown    { width: calc(100vw - 44px); }
}
</style>
@endsection

@section('content')
<div class="custom_container">

    <h2 class="mt-5">Checkout</h2>

    <div class="checkout-wrapper">

        <!-- ===== LEFT: CUSTOMER DETAILS ===== -->
        <div class="checkout-box">
            <h3>Customer Details</h3>

            <form id="checkoutForm" novalidate>
                @csrf

                <!-- Hidden: assembled phone for backend -->
                <input type="hidden" name="customer_phone_code" id="dialCodeHidden" value="+91">
                <input type="hidden" name="customer_phone"      id="fullPhoneHidden">

                <!-- Full Name -->
                <div class="form-group">
                    <label>Full Name <span class="required-star">*</span></label>
                    <div class="input-wrap">
                        <span class="ico">👤</span>
                        <input type="text" id="f_name" name="customer_name"
                               placeholder="John Doe" autocomplete="name" required>
                    </div>
                    <div class="vmsg err" id="e_name">⚠ Min 3 characters, letters only</div>
                    <div class="vmsg ok"  id="s_name">✓ Looks good!</div>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label>Email Address <span class="required-star">*</span></label>
                    <div class="input-wrap">
                        <span class="ico">✉️</span>
                        <input type="email" id="f_email" name="customer_email"
                               placeholder="you@example.com" autocomplete="email" required>
                    </div>
                    <div class="vmsg err" id="e_email">⚠ Enter a valid email — e.g. name@domain.com</div>
                    <div class="vmsg ok"  id="s_email">✓ Valid email!</div>
                </div>

                <!-- Phone -->
                <div class="form-group">
                    <label>Phone Number <span class="required-star">*</span></label>

                    <div class="phone-row" id="phoneRow">
                        <!-- Country code trigger -->
                        <div class="cc-btn" id="ccBtn">
                            <span class="cc-flag" id="ccFlag">🇮🇳</span>
                            <span class="cc-code" id="ccCode">+91</span>
                            <span class="cc-arrow">▼</span>
                        </div>

                        <!-- Dropdown portal -->
                        <div class="cc-dropdown" id="ccDrop">
                            <div class="cc-search">
                                <input type="text" id="ccSearch" placeholder="Search country or code…">
                            </div>
                            <div class="cc-list" id="ccList"></div>
                        </div>

                        <!-- Number -->
                        <input type="tel" id="f_phone" class="ph-input"
                               placeholder="98765 43210"
                               autocomplete="tel-national"
                               maxlength="15">
                    </div>
                    <div class="vmsg err" id="e_phone">⚠ Enter 7–15 digits (no spaces needed)</div>
                    <div class="vmsg ok"  id="s_phone">✓ Valid number!</div>
                </div>

                <!-- Shipping Address -->
                <div class="form-group">
                    <label>Shipping Address <span class="required-star">*</span></label>
                    <textarea id="f_addr" name="shipping_address" rows="4"
                              placeholder="Flat / House No., Street, City, State, PIN Code"
                              autocomplete="street-address" required></textarea>
                    <div class="vmsg err" id="e_addr">⚠ Please enter at least 20 characters</div>
                    <div class="vmsg ok"  id="s_addr">✓ Address noted!</div>
                </div>

                <button type="submit" class="mw-primary-btn pay-btn">
                    Proceed to Payment
                </button>
            </form>
        </div>

        <!-- ===== RIGHT: ORDER SUMMARY ===== -->
        <div class="checkout-box">
            <h3>Order Summary</h3>

            @foreach($products as $product)
                <div class="order-row">
                    <span>{{ $product->name }} × {{ $selected[$product->id] }}</span>
                    <span>₹{{ number_format($product->price * $selected[$product->id], 0) }}</span>
                </div>
            @endforeach

            <hr>

            <div class="order-row order-total">
                <span>Total</span>
                <span>₹{{ number_format($subtotal, 0) }}</span>
            </div>
        </div>

    </div>
</div>

<script>
/* ==============================================
   COUNTRY DATA
   ============================================== */
const COUNTRIES = [
    { name:"India",          code:"+91",  flag:"🇮🇳" },
    { name:"United States",  code:"+1",   flag:"🇺🇸" },
    { name:"United Kingdom", code:"+44",  flag:"🇬🇧" },
    { name:"Australia",      code:"+61",  flag:"🇦🇺" },
    { name:"Canada",         code:"+1",   flag:"🇨🇦" },
    { name:"UAE",            code:"+971", flag:"🇦🇪" },
    { name:"Saudi Arabia",   code:"+966", flag:"🇸🇦" },
    { name:"Singapore",      code:"+65",  flag:"🇸🇬" },
    { name:"Germany",        code:"+49",  flag:"🇩🇪" },
    { name:"France",         code:"+33",  flag:"🇫🇷" },
    { name:"Japan",          code:"+81",  flag:"🇯🇵" },
    { name:"China",          code:"+86",  flag:"🇨🇳" },
    { name:"Brazil",         code:"+55",  flag:"🇧🇷" },
    { name:"Mexico",         code:"+52",  flag:"🇲🇽" },
    { name:"South Africa",   code:"+27",  flag:"🇿🇦" },
    { name:"Nigeria",        code:"+234", flag:"🇳🇬" },
    { name:"Pakistan",       code:"+92",  flag:"🇵🇰" },
    { name:"Bangladesh",     code:"+880", flag:"🇧🇩" },
    { name:"Sri Lanka",      code:"+94",  flag:"🇱🇰" },
    { name:"Nepal",          code:"+977", flag:"🇳🇵" },
    { name:"New Zealand",    code:"+64",  flag:"🇳🇿" },
    { name:"Italy",          code:"+39",  flag:"🇮🇹" },
    { name:"Spain",          code:"+34",  flag:"🇪🇸" },
    { name:"Netherlands",    code:"+31",  flag:"🇳🇱" },
    { name:"Switzerland",    code:"+41",  flag:"🇨🇭" },
    { name:"Sweden",         code:"+46",  flag:"🇸🇪" },
    { name:"Norway",         code:"+47",  flag:"🇳🇴" },
    { name:"Denmark",        code:"+45",  flag:"🇩🇰" },
    { name:"Russia",         code:"+7",   flag:"🇷🇺" },
    { name:"Turkey",         code:"+90",  flag:"🇹🇷" },
    { name:"Indonesia",      code:"+62",  flag:"🇮🇩" },
    { name:"Malaysia",       code:"+60",  flag:"🇲🇾" },
    { name:"Thailand",       code:"+66",  flag:"🇹🇭" },
    { name:"Philippines",    code:"+63",  flag:"🇵🇭" },
    { name:"Vietnam",        code:"+84",  flag:"🇻🇳" },
    { name:"South Korea",    code:"+82",  flag:"🇰🇷" },
    { name:"Hong Kong",      code:"+852", flag:"🇭🇰" },
    { name:"Israel",         code:"+972", flag:"🇮🇱" },
    { name:"Kenya",          code:"+254", flag:"🇰🇪" },
    { name:"Egypt",          code:"+20",  flag:"🇪🇬" },
];

/* ==============================================
   COUNTRY DROPDOWN
   ============================================== */
let activeCc = COUNTRIES[0];

function renderList(q = "") {
    const list = document.getElementById("ccList");
    const res  = COUNTRIES.filter(c =>
        c.name.toLowerCase().includes(q.toLowerCase()) || c.code.includes(q)
    );
    list.innerHTML = res.map(c => `
        <div class="cc-opt ${c.name===activeCc.name ? 'sel':''}"
             data-code="${c.code}" data-flag="${c.flag}" data-name="${c.name}">
            <span class="o-flag">${c.flag}</span>
            <span class="o-name">${c.name}</span>
            <span class="o-code">${c.code}</span>
        </div>`).join("");

    list.querySelectorAll(".cc-opt").forEach(el =>
        el.addEventListener("click", () => {
            activeCc = { name: el.dataset.name, code: el.dataset.code, flag: el.dataset.flag };
            document.getElementById("ccFlag").textContent       = activeCc.flag;
            document.getElementById("ccCode").textContent       = activeCc.code;
            document.getElementById("dialCodeHidden").value     = activeCc.code;
            closeDD();
            document.getElementById("f_phone").focus();
            validatePhone();
        })
    );
}

function openDD() {
    document.getElementById("ccDrop").classList.add("open");
    document.getElementById("ccBtn").classList.add("open");
    document.getElementById("ccSearch").value = "";
    renderList();
    setTimeout(() => document.getElementById("ccSearch").focus(), 50);
}

function closeDD() {
    document.getElementById("ccDrop").classList.remove("open");
    document.getElementById("ccBtn").classList.remove("open");
}

document.getElementById("ccBtn").addEventListener("click", e => {
    e.stopPropagation();
    document.getElementById("ccDrop").classList.contains("open") ? closeDD() : openDD();
});

document.getElementById("ccSearch").addEventListener("input", function() { renderList(this.value); });

document.addEventListener("click", e => {
    if (!document.getElementById("phoneRow").contains(e.target)) closeDD();
});

renderList();

/* ==============================================
   VALIDATION
   ============================================== */
function setState(el, state) {   // state: 'err' | 'ok' | ''
    el.classList.remove("is-error","is-ok");
    if (state === "err") el.classList.add("is-error");
    if (state === "ok")  el.classList.add("is-ok");
}

function showMsg(errId, okId, show) {  // show: 'err' | 'ok' | ''
    document.getElementById(errId).classList.toggle("show", show === "err");
    document.getElementById(okId).classList.toggle("show",  show === "ok");
}

/* Name */
function validateName() {
    const el  = document.getElementById("f_name");
    const val = el.value.trim();
    if (!val) { setState(el,""); showMsg("e_name","s_name",""); return false; }
    const ok  = val.length >= 3 && /^[a-zA-Z\s'.'-]+$/.test(val);
    setState(el, ok?"ok":"err"); showMsg("e_name","s_name", ok?"ok":"err");
    return ok;
}

/* Email */
function validateEmail() {
    const el  = document.getElementById("f_email");
    const val = el.value.trim();
    if (!val) { setState(el,""); showMsg("e_email","s_email",""); return false; }
    const ok  = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(val);
    setState(el, ok?"ok":"err"); showMsg("e_email","s_email", ok?"ok":"err");
    return ok;
}

/* Phone */
function validatePhone() {
    const el    = document.getElementById("f_phone");
    const row   = document.getElementById("phoneRow");
    const digs  = el.value.replace(/\D/g,"");
    if (!el.value) {
        row.classList.remove("is-error","is-ok");
        showMsg("e_phone","s_phone","");
        return false;
    }
    const ok = digs.length >= 7 && digs.length <= 15;
    row.classList.toggle("is-error", !ok);
    row.classList.toggle("is-ok",    ok);
    showMsg("e_phone","s_phone", ok?"ok":"err");
    if (ok) document.getElementById("fullPhoneHidden").value = activeCc.code + digs;
    return ok;
}

/* Address */
function validateAddr() {
    const el  = document.getElementById("f_addr");
    const val = el.value.trim();
    if (!val) { setState(el,""); showMsg("e_addr","s_addr",""); return false; }
    const ok  = val.length >= 20;
    setState(el, ok?"ok":"err"); showMsg("e_addr","s_addr", ok?"ok":"err");
    return ok;
}

/* Live validation on blur + re-validate on input after first touch */
[
    ["f_name",  validateName],
    ["f_email", validateEmail],
    ["f_addr",  validateAddr],
].forEach(([id, fn]) => {
    const el = document.getElementById(id);
    let touched = false;
    el.addEventListener("blur",  () => { touched = true; fn(); });
    el.addEventListener("input", () => { if (touched) fn(); });
});

document.getElementById("f_phone").addEventListener("input", function() {
    this.value = this.value.replace(/[^0-9\s\-]/g,"");
    validatePhone();
});
document.getElementById("f_phone").addEventListener("blur", validatePhone);

/* ==============================================
   RAZORPAY + SUBMIT
   ============================================== */
(function loadRazorpay() {
    if (typeof Razorpay === "undefined") {
        const s = document.createElement("script");
        s.src = "https://checkout.razorpay.com/v1/checkout.js";
        s.onload = initCheckout;
        document.body.appendChild(s);
    } else {
        initCheckout();
    }
})();

function initCheckout() {
    document.getElementById("checkoutForm").addEventListener("submit", function(e) {
        e.preventDefault();

        const allOk = validateName() & validateEmail() & validatePhone() & validateAddr();

        if (!allOk) {
            const first = document.querySelector(".is-error, .phone-row.is-error");
            if (first) first.scrollIntoView({ behavior:"smooth", block:"center" });
            return;
        }

        fetch("{{ route('checkout.create') }}", {
            method: "POST",
            headers: { "X-CSRF-TOKEN":"{{ csrf_token() }}", "Accept":"application/json" },
            body: new FormData(this)
        })
        .then(r => r.json())
        .then(data => {
            const rzp = new Razorpay({
                key:         data.key,
                amount:      data.amount,
                currency:    "INR",
                name:        "Mind Rewire",
                description: "Order Payment",
                order_id:    data.order_id,
                prefill:     { name: data.name, email: data.email, contact: data.contact },
                handler: function(resp) {
                    fetch("{{ route('checkout.payment.success') }}", {
                        method: "POST",
                        headers: { "X-CSRF-TOKEN":"{{ csrf_token() }}", "Content-Type":"application/json" },
                        body: JSON.stringify({
                            razorpay_payment_id: resp.razorpay_payment_id,
                            razorpay_order_id:   resp.razorpay_order_id,
                            razorpay_signature:  resp.razorpay_signature
                        })
                    })
                    .then(r => r.json())
                    .then(d => {
                        if (d.redirect) window.location.href = d.redirect;
                        else alert("Payment saved but redirect missing");
                    })
                    .catch(err => { console.error("SAVE ERROR", err); alert("Payment ok but server error"); });
                }
            });
            rzp.open();
        })
        .catch(err => { alert("Payment failed. Check console."); console.error(err); });
    });
}
</script>

@endsection