@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Why You’re Not Overreacting — Nervous System, Trauma & Healing</title>
<meta name="description"
    content="Explore how the nervous system stores trauma and why emotional reactions can feel overwhelming. Evidence-based, body-informed strategies from Mind Rewire psychologists to regulate stress and heal.">
<meta name="keywords"
    content="nervous system trauma, somatic therapy, vagus nerve, trauma response, regulate anxiety, nervous system healing, Mind Rewire article">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@mindrewire" />
<meta name="twitter:creator" content="@mindrewire" />
<meta name="twitter:title" content="Why You’re Not Overreacting — Nervous System, Trauma & Healing">
<meta name="twitter:description"
    content="Understand how trauma shapes the nervous system and learn practical regulation techniques from Mind Rewire psychologists.">
<meta name="twitter:image" content="{{ url('assets/images/common-images/nervous-system-og.png') }}">

<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Why You’re Not Overreacting — Nervous System, Trauma & Healing" />
<meta property="og:description"
    content="Understand how trauma shapes the nervous system and learn practical regulation techniques from Mind Rewire psychologists." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/blog-details/blog-details.css') }}">
@stop

@section('content')

<!-- page_wrap Start -->
<div class="page_wrap">
    <div class="top_banner" style="background-image: url('{{ url("assets/images/blogs/img_blog1.png")}}');">
        <div class="common_patch patch1">
            <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="icon">
        </div>
        <div class="common_patch patch2">
            <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="icon">
        </div>
        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white center">
                    Why You’re Not Overreacting -
                    <span class="lightpink"> Your Nervous System Might Be</span>
                </h2>
            </div>
        </div>
    </div>

    <div class="common_sections section1" id="section1">
        <div class="custom_container">
            <div class="details_row" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="c_heading">You’re Not Too Much. You’re Wired for Protection.</h3>
                <div class="animate_border"></div>
                <p>
                    Ever been told you’re “too sensitive” or “overreacting”?<br>
                    Maybe it was after a small disagreement, a delayed text, or a critical comment. You tried to
                    brush it off, but your body wouldn’t let you.
                </p>
                <p>
                    Tight chest. Racing thoughts. A wave of emotion that felt disproportionate — even confusing.
                </p>
                <p>
                    Here’s what we want you to know at Mind Rewire:<br>
                    You’re not overreacting. Your nervous system is responding — often from a place of past pain,
                    not present logic.
                </p>
            </div>
            <div class="details_row" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="c_heading">Emotional Reactions Aren’t Always About Now</h3>
                <div class="animate_border"></div>
                <p>
                    At Mind Rewire, we see this daily in therapy:<br>
                    People reacting not just to the event, but to the meaning their body has
                    attached to it.
                </p>
                <ul>
                    <li>That ignored message might echo past rejection.</li>
                    <li>That loud tone might resurface childhood fear.</li>
                    <li>That missed boundary might trigger old helplessness.</li>
                </ul>
                <p>
                    Trauma and chronic stress don’t just live in memory. <br>
                    They live in your nervous system — in how
                    your body interprets
                    safety, threat, and worth.
                </p>
            </div>
            <div class="common_patch patch1" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="image" />
            </div>
        </div>
    </div>

    <div class="common_sections bluepatch" id="section2">
        <div class="custom_container">
            <div class="details_row" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="c_heading">Meet Your Nervous System: Your Inner Alarm System</h3>
                <div class="animate_border"></div>
                <p>
                    Your nervous system constantly scans for danger.<br>
                    When triggered, it responds using:
                </p>
                <ul>
                    <li>Fight: Anger, control, frustration </li>
                    <li>Flight: Overworking, anxiety, escape</li>
                    <li>Freeze: Numbness, shutdown, brain fog</li>
                    <li>Fawn: People-pleasing, over-apologizing, shrinking</li>
                </ul>
                <p>
                    These are not overreactions. They are survival intelligence — especially common in those healing
                    from trauma, burnout,
                    or chronic emotional invalidation.
                </p>
            </div>
            <div class="details_row" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="c_heading">You Can’t Logic Your Way Out of a Dysregulated Body</h3>
                <div class="animate_border"></div>
                <p>That’s why at Mind Rewire, we use trauma-informed tools that speak to your body, not just your
                    thoughts:</p>
                <ul>
                    <li>Somatic therapy & breathwork to calm overwhelm </li>
                    <li>CBT & NLP to shift internal narratives</li>
                    <li>Vagus nerve activation to restore a sense of safety</li>
                    <li>UNTANGLE to gently unpack patterns through self-reflection</li>
                </ul>
            </div>
            <div class="details_row" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="c_heading">So What Can You Do When You Feel “Too Much”?</h3>
                <div class="animate_border"></div>
                <p>At Mind Rewire, our clients learn that healing isn’t about shrinking their emotions — but about
                    creating space to
                    understand them.</p>
                <ul>
                    <li>Pause and ask: “Is this reaction familiar?” </li>
                    <li>Validate your body: “I feel unsafe right now, and that’s okay.”</li>
                    <li>Regulate before you explain: Breathe, ground, or move.</li>
                    <li>Seek support, not suppression: You’re allowed to not do this alone.</li>
                </ul>
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