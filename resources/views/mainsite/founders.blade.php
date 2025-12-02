@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Founders — Sumedha & Anand | Mind Rewire (Psychologists in Pune)</title>
<meta name="description"
    content="Meet Sumedha (Psychologist) and Anand—founders of Mind Rewire. Learn about their clinical expertise, trauma-informed approaches, and 15+ years delivering therapy, counselling and wellness programs from Pune, India.">
<meta name="keywords"
    content="founders Mind Rewire, Sumedha psychologist Pune, Anand co-founder, mental health founders India, psychologist founders Pune">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@mindrewire" />
<meta name="twitter:creator" content="@mindrewire" />
<meta name="twitter:title" content="Founders — Sumedha & Anand | Mind Rewire (Psychologists in Pune)">
<meta name="twitter:description"
    content="Meet Sumedha and Anand: clinical psychologist-led founders delivering trauma-informed therapy and mental wellness programs from Pune with 15+ years experience.">
<meta name="twitter:image" content="{{ url('assets/images/common-images/founders-og.png') }}">

<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Founders — Sumedha & Anand | Mind Rewire (Psychologists in Pune)" />
<meta property="og:description"
    content="Meet Sumedha and Anand: clinical psychologist-led founders delivering trauma-informed therapy and mental wellness programs from Pune with 15+ years experience." />
@stop


@section('css')

<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/founders/founders.css') }}">
@stop

@section('content')
<div class="page_wrap">
    <div class="top_banner">
        <div class="common_patch patch1">
            <img src="{{ url('assets/images/common-images/patch_pink.svg') }}" alt="icon">
        </div>
        <div class="common_patch patch2">
            <img src="{{ url('assets/images/common-images/patch_pink.svg') }}" alt="icon">
        </div>
        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white center">
                    Two Minds. One Mission.
                    <span class="lightpink"> Mental Wellness That Works.</span>
                </h2>
                <strong class="sub_heading white center">
                    From Therapy Rooms To Boardrooms, Our Founders Built Mind Rewire With One Shared Belief :<br>
                    Healing Must Be Intelligent,
                    Accessible, And Deeply Human.
                </strong>
                <p>
                    Sumedha Brings Lived Empathy And Clinical Expertise. Anand Brings Systems Intelligence And Ai
                    Vision. Together, <br> They’ve
                    Created A Platform That Rewires Minds And Reimagines Mental Health For Every Individual.
                </p>
                <div class="btnrow center">
                    <a href="{{url('solutions')}}" class="cta_btn animate_arrow animation_white_line bgpink">
                        Explore Our Services
                        <span class="rgt_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7" viewBox="0 0 16.336 7.913">
                                <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                    <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                        <path id="Path_127067" data-name="Path 127067"
                                            d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                            transform="translate(0 -132)" fill="#ffc224"></path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <a href="{{url('book-session')}}" class="cta_btn animate_arrow animation_white_line border_white">
                        Book a Session
                        <span class="rgt_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7" viewBox="0 0 16.336 7.913">
                                <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                    <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                        <path id="Path_127067" data-name="Path 127067"
                                            d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                            transform="translate(0 -132)" fill="#ffc224"></path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section1" id="section1">
        <div class="common_fullrow">
            <div class="custom_container align-items-start">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">Meet
                        <span class="blue"> Sumedha</span>
                    </h2>
                    <strong class="deg">
                        Psychologist | Founder, Mind Rewire | TedX Speaker
                    </strong>
                    <div class="animate_border"></div>
                    <p>
                        Sumedha’s journey didn’t start in a therapist’s chair—it started in an engineering college.
                        After earning her B.Tech,
                        she pursued an MBA in HR and spent years working closely with high-performance teams across
                        India. But behind every
                        polished CV, she saw stress, emotional disconnection, and silent trauma.
                    </p>
                    <p>
                        So she made a bold decision: to switch from building careers to healing minds.
                    </p>
                    <p>
                        <strong>She earned her M.A. in Psychology and trained in:</strong>
                    </p>
                    <ul class="with_bullet pt-0">
                        <li>Cognitive Behavioral Therapy (CBT)</li>
                        <li>Rational Emotive Behavior Therapy (REBT)</li>
                        <li>Neuro-Linguistic Programming (NLP)</li>
                        <li>Applied Behavior Analysis (ABA)</li>
                        <li>Somatic & Trauma Recovery Methods</li>
                    </ul>
                    <strong class="sub_heading blue">What Makes Her Different?</strong>
                    <p>
                        Sumedha doesn’t use jargon. She doesn’t label people. She listens
                        deeply, helps you feel safe,
                        and creates a custom path for healing—one that honors your life, your pace, and your
                        strength.
                    </p>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/founders/img_sumedha.png') }}" alt="image" />
                    <div class="quote">
                        I’ve Walked Through Anxiety, Burnout, And Self-Doubt. That’s Why I Don’t Just Treat
                        Symptoms. I Hold Space For Truth.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section2" id="section2">
        <div class="custom_container">
            <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">A Therapist Who Bridges
                    <span class="blue">Science & Self</span>
                </h2>
                <div class="animate_border center"></div>
                <strong class="sub_heading center">
                    Four Practice Pillars Grid :
                </strong>
            </div>
            <div class="boxwrap">
                <ul>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <a>
                            <div class="imgbox">
                                <img src="{{ url('assets/images/founders/img_therapist1.png') }}" alt="image" />
                            </div>
                            <div class="textbox">
                                <h3>Neuro-Based Rewiring</h3>
                                <p>
                                    Helping you change emotional patterns at the brain level.
                                </p>
                            </div>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <a>
                            <div class="imgbox">
                                <img src="{{ url('assets/images/founders/img_therapist2.png') }}" alt="image" />
                            </div>
                            <div class="textbox">
                                <h3>Real-Life Empathy</h3>
                                <p>
                                    She’s not just trained—she’s lived the trauma and found ways to heal it.
                                </p>
                            </div>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <a>
                            <div class="imgbox">
                                <img src="{{ url('assets/images/founders/img_therapist3.png') }}" alt="image" />
                            </div>
                            <div class="textbox">
                                <h3>Precision, Not Preaching</h3>
                                <p>
                                    No one-size-fits-all advice. Just what fits you.
                                </p>
                            </div>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <a>
                            <div class="imgbox">
                                <img src="{{ url('assets/images/founders/img_therapist4.png') }}" alt="image" />
                            </div>
                            <div class="textbox">
                                <h3>Holistic + Modern</h3>
                                <p>
                                    Mind-body tools, trauma literacy, and performance psychology—all in one space.
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="btnrow center" data-aos="fade-up" data-aos-duration="1500">
                    <a href="{{url('book-session')}}" class="cta_btn animation_white_line animate_arrow">
                        Book a Session with Sumedha
                        <span class="rgt_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7" viewBox="0 0 16.336 7.913">
                                <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                    <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                        <path id="Path_127067" data-name="Path 127067"
                                            d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                            transform="translate(0 -132)" fill="#ffc224" />
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="common_patch patch1" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="image" />
            </div>
            <div class="common_patch patch2" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="image" />
            </div>
        </div>
    </div>

    <div class="section3" id="section3">
        <div class="common_fullrow">
            <div class="custom_container align-items-start">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">Meet
                        <span class="blue"> Anand Singh</span>
                    </h2>
                    <strong class="deg">
                        Co-Founder | Technologist | Systems Thinker
                    </strong>
                    <div class="animate_border"></div>
                    <p>
                        While Sumedha builds emotional clarity, Anand builds the systems that carry it.
                    </p>
                    <p>
                        Anand is a senior director at a global management consulting firm, advising Fortune 500
                        companies on AI, strategy, and
                        digital transformation. His background in engineering and cognitive systems gives Mind
                        Rewire its unique ability to
                        scale therapy using tech—with empathy at its center.
                    </p>
                    <p>
                        He doesn’t conduct therapy, but his fingerprint is on every framework—from how sessions are
                        delivered to how AI matches
                        the right therapist to the right client.
                    </p>
                    <p>
                        <strong>Focus Areas:</strong>
                    </p>
                    <ul class="with_bullet pt-0">
                        <li>Generative & Agentic AI in wellness</li>
                        <li>Emotional UX design</li>
                        <li>Behavioral data modeling</li>
                        <li>Workflow systems for scalable care</li>
                    </ul>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('book-session')}}" class="cta_btn animation_white_line animate_arrow">
                            Book a Session with Anand
                            <span class="rgt_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                    viewBox="0 0 16.336 7.913">
                                    <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                        <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                            <path id="Path_127067" data-name="Path 127067"
                                                d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                                transform="translate(0 -132)" fill="#ffc224" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/founders/img_anand_singh.jpeg') }}" alt="image" />
                    <div class="quote">
                        Healing the human system is the most vital architecture of all.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fullwrap1">
        <div class="section4" id="section4">
            <div class="custom_container">
                <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading center">Empathy Meets Engineering.
                        <span class="blue"> Psychology Meets Precision. </span>
                    </h2>
                    <div class="animate_border center"></div>
                </div>
                <div class="whitebox_wrap">
                    <div class="whitebox">
                        <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                            <div class="toptext">
                                <h3 class="blue">Sumedha</h3>
                                <div class="animate_border"></div>
                            </div>
                            <ul class="with_bullet">
                                <li>
                                    Trauma-informed, emotionally tuned therapist
                                </li>
                                <li>
                                    One-on-one care, group sessions, emotional insight
                                </li>
                                <li>
                                    Focused on what people feel
                                </li>
                                <li>
                                    Builds from pain & healing
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="whitebox">
                        <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                            <div class="toptext">
                                <h3 class="blue">Anand Singh</h3>
                                <div class="animate_border"></div>
                            </div>
                            <ul class="with_bullet">
                                <li>
                                    Systems architect & tech strategist
                                </li>
                                <li>
                                    Infrastructure, automation, accessibility
                                </li>
                                <li>
                                    Focused on how systems respond
                                </li>
                                <li>
                                    Builds for scale & sustainability
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="circle_logo">
                        <img src="{{ url('assets/images/common-images/logo_mind_sm.png') }}" alt="image" />
                    </div>
                    <div class="common_patch patch1" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
                    </div>
                    <div class="common_patch patch2" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
                    </div>
                </div>
                <div class="btmtext" data-aos="fade-up" data-aos-duration="1500">
                    <p>
                        Together, They Created A Platform That Feels Deeply Human - Even When Powered By Smart
                        Tools.
                    </p>
                </div>
            </div>
        </div>

        <div class="section5" id="section5">
            <div class="common_fullrow">
                <div class="custom_container align-items-start">
                    <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                        <h2 class="c_heading">A World Where Mental Health Is Proactive,
                            <span class="blue"> Not Just Reactive</span>
                        </h2>
                        <div class="animate_border"></div>
                        <p>
                            <strong>They Envision A Future Where :</strong>
                        </p>
                        <ul class="with_bullet pt-0">
                            <li>
                                Psychology is part of daily growth—not emergency care
                            </li>
                            <li>
                                Schools, homes, and workplaces speak the language of emotional safety
                            </li>
                            <li>
                                People don’t have to break to get help
                            </li>
                        </ul>
                        <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                            <a href="{{url('about-us')}}" class="cta_btn animation_white_line animate_arrow">
                                See Our Philosophy
                                <span class="rgt_arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                        viewBox="0 0 16.336 7.913">
                                        <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                            <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                                <path id="Path_127067" data-name="Path 127067"
                                                    d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                                    transform="translate(0 -132)" fill="#ffc224" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                            <a href="{{url('enquiry-form')}}"
                                class="cta_btn animation_white_line animate_arrow border_btn">
                                Start Your Journey
                                <span class="rgt_arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                        viewBox="0 0 16.336 7.913">
                                        <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                            <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                                <path id="Path_127067" data-name="Path 127067"
                                                    d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                                    transform="translate(0 -132)" fill="#ffc224" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                        <div class="withpatch">
                            <img src="{{ url('assets/images/founders/img_mental_health.png') }}" alt="image" />
                            <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                                <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="last_bluebox" id="last_bluebox">
        <div class="common_fullrow">
            <div class="custom_container reverse">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading white">Your Mind Deserves Experts <br>
                        <span class="lightpink">Who Understand Its Layers</span>
                    </h2>
                    <p>
                        Whether You’re A Student, Parent, Professional, Or Team—Mind Rewire Is Built By People Who
                        Know The Journey, And Who’ve
                        Created A Better Way Forward.
                    </p>
                    <div class="btnrow">
                        <a href="{{url('solutions')}}" class="cta_btn animate_arrow animation_white_line bgpink">
                            Explore Services
                            <span class="rgt_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                    viewBox="0 0 16.336 7.913">
                                    <g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
                                        <g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
                                            <path id="Path_127067" data-name="Path 127067"
                                                d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                                transform="translate(0 -132)" fill="#ffc224"></path>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/founders/img_last_bluebox.png') }}" alt="image" />
                </div>
            </div>
        </div>
        <div class="common_patch" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{ url('assets/images/common-images/patch_pink.svg') }}" alt="image" />
        </div>
    </div>
</div>

@stop

@section('footer_script')

@stop