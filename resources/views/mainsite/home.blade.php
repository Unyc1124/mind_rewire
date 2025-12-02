@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Mind Rewire – Psychologist in Pune | Trauma-Informed Therapy & Counselling</title>
<meta name="description"
    content="Mind Rewire is a psychology clinic and online practice in Pune offering trauma-informed therapy, anxiety & depression counselling, child and teen counselling, and corporate mental wellness — led by experienced psychologists with 15+ years of clinical expertise in Pune, India.">
<meta name="keywords"
    content="psychologist in Pune, psychologist Pune, therapist Pune, counsellor Pune, anxiety therapy Pune, depression counselling Pune, child counselling Pune, teen counselling Pune, trauma therapy Pune, online psychologist India">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@mindrewire" />
<meta name="twitter:creator" content="@mindrewire" />
<meta name="twitter:title" content="Mind Rewire – Psychologist in Pune | Trauma-Informed Therapy & Counselling">
<meta name="twitter:description"
    content="Compassionate, evidence-based therapy in Pune: anxiety, stress, trauma, child & teen counselling and corporate mental wellness. 15+ years clinical experience.">
<meta name="twitter:image" content="{{ url('assets/images/common-images/home-og-image.png') }}">

<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="website" />
<meta property="og:title"
    content="Mind Rewire – Psychologist in Pune | Trauma-Informed Therapy & Counselling" />
<meta property="og:description"
    content="Compassionate, evidence-based therapy in Pune: anxiety, stress, trauma, child & teen counselling and corporate mental wellness. 15+ years clinical experience." />
@stop


@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/home-page/home-page.css') }}">
@stop

@section('content')

<div class="page_wrap">
    <div class="top_banner">
        <div class="custom_container align-items-center">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white">
                    Rewire Your Mind. <br>
                    <span class="lightpink"> Restore Your Self.</span>
                </h2>
                <strong class="sub_heading white">
                    Tailored Therapy And Coaching For Trauma, Anxiety, Stress, Career Confusion, And Emotional
                    Growth—Designed For
                    Individuals, Children & Teens, Parents, And Professionals.
                </strong>
                <p>
                    Mind Rewire Is Your Safe Space To Transform Emotional Overwhelm Into Clarity. Backed By
                    Neuroscience And Empathy, We
                    Help You Become The Best Version Of Your True Self—Without Changing Who You Are.
                </p>
                <div class="btnrow">
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
                <div class="common_patch">
                    <img src="{{ url('assets/images/common-images/patch_pink.svg') }}" alt="icon">
                </div>
            </div>
            <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/home/img_top_banner.png') }}" alt="Mind Rewire — Psychologist in Pune hero image" />
            </div>
        </div>
    </div>

    <div class="section1" id="section1">
        <div class="common_fullrow">
            <div class="custom_container align-items-start">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">Where Psychology Meets Precision.
                        <span class="blue">And Healing Meets You.</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        Mind Rewire is a modern mental wellness platform created by a Psychologist and a
                        systems strategist—blending
                        trauma-informed therapy with science-backed emotional rewiring. We don’t offer “fixes.” We
                        co-create your healing
                        journey, helping you move from emotional clutter to inner clarity.
                    </p>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/home/img_precision.png') }}" alt="Evidence-based therapy and counselling in Pune" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_container">
            <div class="number_wrap">
                <ul>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <div class="number">
                            <strong class="counter">15</strong>+
                        </div>
                        <p>Years Of Psychological Expertise</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <div class="number">
                            <strong class="counter">6000</strong>+
                        </div>
                        <p>Sessions Delivered</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <div class="number">
                            <strong class="counter">93</strong>%
                        </div>
                        <p>Clients Report Emotional Breakthroughs</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <div class="number">
                            <strong class="counter">1</strong> Vision
                        </div>
                        <p>To Rewire, Redesign & Recreate</p>
                    </li>
                </ul>
            </div>
            <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                <a href="{{url('founders')}}" class="cta_btn animation_white_line animate_arrow">
                    Meet the Founders
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
                <a href="{{url('about-us')}}" class="cta_btn animation_white_line animate_arrow border_btn">
                    Our Philosophy
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
    </div>

    <div class="section2" id="section2">
        <div class="custom_container">
            <div class="common_patch patch1" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
            </div>
            <div class="common_patch patch2" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
            </div>
            <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">What We Help
                    <span class="blue">You With</span>
                </h2>
                <div class="animate_border center"></div>
                <p>
                    From student stress to professional burnout—we create custom-fit mental health pathways for
                    every
                    age and stage.
                </p>
            </div>
            <div class="commonbox_wrap">
                <a class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="roundicon">
                        <img src="{{ url('assets/images/header/icon_therapy.png') }}" alt="image" />
                    </div>
                    <div class="topbox">
                        <h3>Individual Therapy & <span class="blue">Trauma Rewiring</span></h3>
                        <ul>
                            <li>CBT, EDMR, Somatic Therapy, IFS, PE Therapy, Trauma Informed CBT (TF-CBT), NLP & ReBT
                            </li>
                            <li>For anxiety, trauma, emotional overwhelm, and stuck patterns</li>
                        </ul>
                    </div>
                </a>
                <a class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="roundicon">
                        <img src="{{ url('assets/images/header/icon_career_counselling.png') }}" alt="image" />
                    </div>
                    <div class="topbox">
                        <h3>Career <span class="blue">Counselling</span></h3>
                        <ul>
                            <li>Psychometric tests + AI-powered roadmap</li>
                            <li>For students, early professionals & career switchers</li>
                        </ul>
                    </div>
                </a>
                <a class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="roundicon">
                        <img src="{{ url('assets/images/header/icon_students.png') }}" alt="image" />
                    </div>
                    <div class="topbox">
                        <h3>Student & Teen <span class="blue">Mental Health</span></h3>
                        <ul>
                            <li>Play therapy, exam anxiety, attention issues</li>
                            <li>Parent-child alignment programs</li>
                        </ul>
                    </div>
                </a>
                <a class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="roundicon">
                        <img src="{{ url('assets/images/header/icon_corporate_wellness.png') }}" alt="image" />
                    </div>
                    <div class="topbox">
                        <h3>Corporate Wellness <span class="blue">Programs</span></h3>
                        <ul>
                            <li>Leadership EQ coaching, burnout solutions, HR workshops</li>
                            <li>Tailored for modern workplaces</li>
                        </ul>
                    </div>
                </a>
                <a class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="roundicon">
                        <img src="{{ url('assets/images/header/icon_wellness_programs.png') }}" alt="image" />
                    </div>
                    <div class="topbox">
                        <h3>School Collaboration <span class="blue">Programs</span></h3>
                        <ul>
                            <li>Therapy pods, emotional climate audits, teacher support</li>
                            <li>Crisis Response (Grief, Bullying, Trauma)</li>
                        </ul>
                    </div>
                </a>
                <a class="commonbox nobg" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/home/img_man.png') }}" alt="Client working with a psychologist at Mind Rewire, Pune" />
                </a>
            </div>
            <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                <a href="{{url('solutions')}}" class="cta_btn animation_white_line animate_arrow">
                    View All Solutions
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
    </div>

    <div class="fullwrap1">
        <div class="section3" id="section3">
            <div class="common_fullrow">
                <div class="custom_container align-items-start reverse">
                    <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                        <h2 class="c_heading">We’re Not Just Therapists. <br>
                            <span class="blue">We’re Rewiring Engineers of the Mind.</span>
                        </h2>
                        <div class="animate_border"></div>
                        <ul class="with_bullet">
                            <li>Neuro-psychology backed methods</li>
                            <li>Empathy-driven, non-judgmental care</li>
                            <li>Tech-powered delivery with human connection</li>
                            <li>Custom-fit solutions for your life—not textbook theory</li>
                            <li>Trusted by students, parents, professionals & institutions</li>
                        </ul>
                    </div>
                    <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/home/img_rewiring_engineers.png') }}" alt="image" />
                    </div>
                </div>
            </div>
            <div class="quote" data-aos="fade-up" data-aos-duration="1500">
                <div class="custom_container">
                    <div class="bluebox">
                        “You’re not imperfect. You’re just boldly different.” <span>– Sumedha</span>
                    </div>
                    <div class="common_patch" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
                    </div>
                </div>
            </div>
            <div class="btnrow center" data-aos="fade-up" data-aos-duration="1500">
                <a href="{{url('success-stories')}}" class="cta_btn animation_white_line animate_arrow">
                    See Our Results
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
                <a href="{{url('about-us')}}" class="cta_btn animation_white_line animate_arrow border_btn">
                    How It Works
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
        <div class="patch_rgt">
            <img src="{{ url('assets/images/home/patch_1.png') }}" alt="image" />
        </div>
        <div class="section4" id="section4">
            <div class="custom_container">
                <div data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">
                        <span class="blue">Support for</span> Every Role You Play
                    </h2>
                    <div class="animate_border"></div>
                    <strong class="sub_heading">
                        Sectors We Serve :
                    </strong>
                </div>
                <div class="common_wrap">
                    <div class="common" data-aos="fade-up" data-aos-duration="1500">
                        <div class="text">
                            <h3>Students & <br><span class="blue">Teens</span></h3>
                        </div>
                        <div class="icon">
                            <img src="{{ url('assets/images/common-images/img_students.png') }}" alt="image"
                                class="zoomInOut" />
                        </div>
                    </div>
                    <div class="common" data-aos="fade-up" data-aos-duration="1500">
                        <div class="text">
                            <h3>Parents & <br><span class="blue">Families</span></h3>
                        </div>
                        <div class="icon">
                            <img src="{{ url('assets/images/common-images/img_parents.png') }}" alt="image"
                                class="zoomInOut" />
                        </div>
                    </div>
                    <div class="common" data-aos="fade-up" data-aos-duration="1500">
                        <div class="text">
                            <h3>Professionals & <br><span class="blue">Entrepreneurs</span></h3>
                        </div>
                        <div class="icon">
                            <img src="{{ url('assets/images/common-images/img_professionals.png') }}" alt="image"
                                class="zoomInOut" />
                        </div>
                    </div>
                    <div class="common noborder rgt_mrgn" data-aos="fade-up" data-aos-duration="1500">
                        <p>
                            Whether you’re navigating identity, burnout, parenting challenges, career confusion, or
                            school stress—we’re here to help
                            you reconnect with clarity, confidence, and calm.
                        </p>
                    </div>
                    <div class="common" data-aos="fade-up" data-aos-duration="1500">
                        <div class="text">
                            <h3>HR & Corporate <br><span class="blue">Teams</span></h3>
                        </div>
                        <div class="icon">
                            <img src="{{ url('assets/images/common-images/img_teams.png') }}" alt="image"
                                class="zoomInOut" />
                        </div>
                    </div>
                    <div class="common" data-aos="fade-up" data-aos-duration="1500">
                        <div class="text">
                            <h3>Schools & <br><span class="blue">Educators</span></h3>
                        </div>
                        <div class="icon">
                            <img src="{{ url('assets/images/common-images/img_educators.png') }}" alt="image"
                                class="zoomInOut" />
                        </div>
                    </div>
                    <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
                    </div>
                </div>
                <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                    <a href="{{url('solutions')}}" class="cta_btn animation_white_line animate_arrow">
                        Find My Fit
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
                    <a href="{{url('contact-us')}}" class="cta_btn animation_white_line animate_arrow border_btn">
                        Talk to an Expert
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
        </div>
    </div>

    <div class="testimonials" id="testimonials">
        <div class="custom_container">
            <div class="leftcol" data-aos="fade-up" data-aos-duration="1500">
                <div class="centerdiv">
                    <h2 class="c_heading white">
                        What Change <br>Looks Like
                    </h2>
                    <div class="animate_border pinkwhite"></div>
                </div>
                <div class="common_patch" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/common-images/patch_pink.svg') }}" alt="icon">
                </div>
            </div>
            <div class="rgtcol" data-aos="fade-up" data-aos-duration="1500">
                <div class="success_stories">
                    <div class="owl-carousel testimonials_carousel">
                        <div class="item">
                            <div class="contentbox">
                                <div class="imgbox">
                                    <img src="{{ url('assets/images/common-images/img_user_placeholder.png') }}"
                                        alt="image" />
                                </div>
                                <div class="textbox">
                                    <h3>From Panic to Peace :</h3>
                                    <p>
                                        “I couldn’t speak in class. Now I lead discussions.”
                                        There was a time when just the thought of
                                        speaking in class filled me with dread. My heart would race, palms would
                                        sweat, and words would vanish the moment I was
                                        called upon. I watched classmates engage confidently while I shrank further
                                        into silence, fearing judgment and
                                        rejection. Every class presentation felt like a mountain I couldn’t climb.
                                    </p>
                                    <p>
                                        But over time, I realized that avoiding
                                        participation only worsened my anxiety.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="contentbox">
                                <div class="imgbox">
                                    <img src="{{ url('assets/images/common-images/img_user_placeholder.png') }}"
                                        alt="image" />
                                </div>
                                <div class="textbox">
                                    <h3>From Panic to Peace :</h3>
                                    <p>
                                        “I couldn’t speak in class. Now I lead discussions.”
                                        There was a time when just the thought of
                                        speaking in class filled me with dread. My heart would race, palms would
                                        sweat, and words would vanish the moment I was
                                        called upon. I watched classmates engage confidently while I shrank further
                                        into silence, fearing judgment and
                                        rejection. Every class presentation felt like a mountain I couldn’t climb.
                                    </p>
                                    <p>
                                        But over time, I realized that avoiding
                                        participation only worsened my anxiety.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="real_stories" id="real_stories">
        <div class="custom_container">
            <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">Real Stories,
                    <span class="blue">Real Transformations</span>
                </h2>
                <div class="animate_border center"></div>
                <p>
                    Watch how lives have been changed through subconscious healing, emotional release, and mind
                    rewiring. These are the
                    journeys of those who chose to break free and thrive.
                </p>
            </div>
            <div class="video_wrap">
                <div class="lftcol" data-aos="fade-up" data-aos-duration="1500">
                    <div class="videobox" data-bs-toggle="modal" data-bs-target="#video_modal1">
                        <img src="{{ url('assets/images/home/img_video_big.png') }}" alt="image" />
                        <span class="playbtn">
                            <img src="{{ url('assets/images/home/icon_playbtn.svg') }}" alt="image" />
                        </span>
                    </div>
                </div>
                <div class="rgtcol" data-aos="fade-up" data-aos-duration="1500">
                    <div class="videobox" data-bs-toggle="modal" data-bs-target="#video_modal2">
                        <img src="{{ url('assets/images/home/img_video1.png') }}" alt="image" />
                        <span class="playbtn">
                            <img src="{{ url('assets/images/home/icon_playbtn.svg') }}" alt="image" />
                        </span>
                    </div>
                    <div class="videobox" data-bs-toggle="modal" data-bs-target="#video_modal3">
                        <img src="{{ url('assets/images/home/img_video2.png') }}" alt="image" />
                        <span class="playbtn">
                            <img src="{{ url('assets/images/home/icon_playbtn.svg') }}" alt="image" />
                        </span>
                    </div>
                    <div class="videobox" data-bs-toggle="modal" data-bs-target="#video_modal4">
                        <img src="{{ url('assets/images/home/img_video3.png') }}" alt="image" />
                        <span class="playbtn">
                            <img src="{{ url('assets/images/home/icon_playbtn.svg') }}" alt="image" />
                        </span>
                    </div>
                    <div class="videobox" data-bs-toggle="modal" data-bs-target="#video_modal5">
                        <img src="{{ url('assets/images/home/img_video4.png') }}" alt="image" />
                        <span class="playbtn">
                            <img src="{{ url('assets/images/home/icon_playbtn.svg') }}" alt="image" />
                        </span>
                    </div>
                </div>
                <div class="common_patch patch1" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
                </div>
            </div>
            <div class="number_wrap">
                <ul>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <div class="number">
                            <strong class="counter">92</strong>%
                        </div>
                        <p>Clients Report Positive Emotional Change</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <div class="number">
                            <strong class="counter">86</strong>%
                        </div>
                        <p>Parents See Improved Child Behavior In 4-6 Sessions</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <div class="number">
                            <strong class="counter">95</strong>%
                        </div>
                        <p>Professionals Feel More Emotionally Equipped At Work</p>
                    </li>
                </ul>
            </div>
            <div class="btnrow center" data-aos="fade-up" data-aos-duration="1500">
                <a href="{{url('success-stories')}}" class="cta_btn animation_white_line animate_arrow">
                    Read More Stories
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
                <a href="{{url('contact-us')}}" class="cta_btn d-none animation_white_line animate_arrow border_btn">
                    Start My Journey
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
            <div class="common_patch patch2" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
            </div>
        </div>
    </div>

    <div class="clients" id="clients">
        <div class="custom_container">
            <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">Client
                    <span class="blue">Collaborations</span>
                </h2>
                <div class="animate_border center"></div>
            </div>
            <div class="marquee_slider" data-aos="fade-up" data-aos-duration="1500">
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients1.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients2.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients3.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients4.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients5.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients6.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients7.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients8.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients1.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients2.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients3.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients4.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients5.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients6.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients7.png') }}" alt="logo" />
                </div>
                <div class="imgbox">
                    <img src="{{ url('assets/images/home/clients/clients8.png') }}" alt="logo" />
                </div>
            </div>
        </div>
    </div>

    <div class="events" id="events">
        <div class="custom_container">
            <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">Events & <span class="blue">Features</span>
                </h2>
                <div class="animate_border center"></div>
            </div>
            <div class="events_gallery">
                <div class="lftcol">
                    <div class="sm_image" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/home/img_events_sm1.png') }}" alt="logo" />
                    </div>
                    <div class="sm_image" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/home/img_events_sm2.png') }}" alt="logo" />
                    </div>
                    <div class="big_image" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/home/img_events_big1.png') }}" alt="logo" />
                    </div>
                </div>
                <div class="rgtcol">
                    <div class="big_image" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/home/img_events_big2.png') }}" alt="logo" />
                    </div>
                    <div class="sm_image" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/home/img_events_sm3.png') }}" alt="logo" />
                    </div>
                    <div class="sm_image" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/home/img_events_sm4.png') }}" alt="logo" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section5" id="section5">
        <div class="common_fullrow">
            <div class="custom_container align-items-start">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">You’re Not Alone.
                        <span class="blue">You’re Just at the Start of Something Powerful.</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        Take the first step to reconnect with yourself - without judgment, pressure, or shame.
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('book-session')}}" class="cta_btn animation_white_line animate_arrow">
                            Book a Session
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
                        <a href="{{url('book-session')}}" class="cta_btn animation_white_line animate_arrow border_btn">
                            Speak to a Therapist
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
                    <img src="{{ url('assets/images/home/img_powerful.png') }}" alt="image" />
                </div>
            </div>
        </div>
    </div>

    <div class="faq_section" id="faq">
        <div class="custom_container">
            <div data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading">
                    <span class="blue">Frequently Asked </span>Questions
                </h2>
                <div class="animate_border"></div>
            </div>
            <div class="faqtab">
                <div class="faqtab_nav" data-aos="fade-up" data-aos-duration="1500">
                    <div class="customscroll">
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link active" data-target="tab_a">
                                    <h3>Q1.</h3>
                                    <p>
                                        What services does Mind Rewire offer?
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-target="tab_b">
                                    <h3>Q2.</h3>
                                    <p>
                                        What makes Mind Rewire’s therapy approach different?
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-target="tab_c">
                                    <h3>Q3.</h3>
                                    <p>
                                        Who can benefit from Mind Rewire services?
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-target="tab_d">
                                    <h3>Q4.</h3>
                                    <p>
                                        How do UNTANGLE cards support emotional wellness?
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-target="tab_e">
                                    <h3>Q5.</h3>
                                    <p>
                                        Are sessions conducted online or offline?
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-target="tab_f">
                                    <h3>Q6.</h3>
                                    <p>
                                        What can I expect in my first session?
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-target="tab_g">
                                    <h3>Q7.</h3>
                                    <p>
                                        What age groups does Mind Rewire work with?
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-target="tab_h">
                                    <h3>Q8.</h3>
                                    <p>
                                        Do you offer career counselling for professionals, not just students?
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-target="tab_i">
                                    <h3>Q9.</h3>
                                    <p>
                                        Can you support organizations with mental wellness initiatives?
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-target="tab_j">
                                    <h3>Q10.</h3>
                                    <p>
                                        How can I book a session or explore a product?
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="faqtab_content" data-aos="fade-up" data-aos-duration="1500">
                    <div class="tab-pane active" id="tab_a">
                        <h3>Q1. What services does Mind Rewire offer?</h3>
                        <div class="animate_border"></div>
                        <p>
                            Mind Rewire offers therapy and coaching, career counselling, student and school wellness
                            programs, trauma recovery
                            support, and customized corporate wellness services. We also provide emotional wellness
                            tools like the UNTANGLE card
                            decks to help individuals and teams engage in guided self-reflection and mental clarity.
                        </p>
                    </div>
                    <div class="tab-pane d-none" id="tab_b">
                        <h3></h3>
                        <div class="animate_border"></div>
                        <p>
                            We go beyond surface-level symptom relief. Our sessions combine CBT, NLP, REBT, somatic
                            work, and real-life integration
                            to help you rewire outdated emotional patterns. Mind Rewire isn’t just about coping—it’s
                            about upgrading your internal
                            system to think, feel, and respond differently under pressure.
                        </p>
                    </div>
                    <div class="tab-pane d-none" id="tab_c">
                        <h3></h3>
                        <div class="animate_border"></div>
                        <p>
                            Our solutions are designed for individuals facing burnout, anxiety, overthinking, career
                            confusion, or emotional
                            disconnection. We also work with students, parents, schools, HR teams, and organizations
                            looking to build emotionally
                            healthy environments.
                        </p>
                    </div>
                    <div class="tab-pane d-none" id="tab_d">
                        <h3></h3>
                        <div class="animate_border"></div>
                        <p>
                            UNTANGLE is a self-reflection tool disguised as a card-based game. Each themed deck
                            (fear, trauma, stress, persona)
                            contains 60 prompts designed to help you understand emotional patterns, challenge old
                            narratives, and build deeper
                            self-awareness—alone, in groups, or in sessions.
                        </p>
                    </div>
                    <div class="tab-pane d-none" id="tab_e">
                        <h3></h3>
                        <div class="animate_border"></div>
                        <p>
                            Mind Rewire sessions are available both online (via secure video platforms) and offline
                            (in select locations). You can
                            choose the format that works best for you during the booking process.
                        </p>
                    </div>
                    <div class="tab-pane d-none" id="tab_f">
                        <h3></h3>
                        <div class="animate_border"></div>
                        <p>
                            Your first session includes an intake conversation, discussion of your goals, and the
                            beginning of awareness mapping.
                            There’s no pressure to disclose everything at once. We move at your pace—building
                            safety, clarity, and direction from
                            session one.
                        </p>
                    </div>
                    <div class="tab-pane d-none" id="tab_g">
                        <h3></h3>
                        <div class="animate_border"></div>
                        <p>
                            We work with teens, young adults, working professionals, and parents. Our student
                            wellness programs include EQ coaching,
                            play therapy, and parent-child alignment sessions. Age-appropriate formats are used for
                            each individual or group.
                        </p>
                    </div>
                    <div class="tab-pane d-none" id="tab_h">
                        <h3></h3>
                        <div class="animate_border"></div>
                        <p>
                            Yes. Our career counselling services support professionals in career shifts, burnout
                            recovery, decision paralysis, or
                            rediscovering purpose. We combine psychometric tools, coaching models, and emotional
                            clarity frameworks to offer
                            practical, human-centric direction.
                        </p>
                    </div>
                    <div class="tab-pane d-none" id="tab_i">
                        <h3></h3>
                        <div class="animate_border"></div>
                        <p>
                            Absolutely. We design customized corporate wellness programs that include burnout
                            recovery, emotional leadership, 1:1
                            sessions, and workshops—free from jargon, rooted in results. We also consult with HR
                            teams to build cultures that are
                            resilient, not just productive.
                        </p>
                    </div>
                    <div class="tab-pane d-none" id="tab_j">
                        <h3></h3>
                        <div class="animate_border"></div>
                        <p>
                            Visit our Contact or Book a Session page to schedule a discovery call or confirm a
                            session. For UNTANGLE and other
                            self-help tools, head to the Solutions section or reach out to us directly at
                            <b>connect@mind-rewire.com</b>. Our team will
                            guide you step by step.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- video_modal Start -->
    <div aria-labelledby="myModalLabel" class="modal fade video_modal" id="video_modal1" role="dialog" tabindex="-1"
        aria-modal="true">
        <button class="close" aria-label="Close" data-bs-dismiss="modal" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14.7 14.7">
                <path id="Path_119830" data-name="Path 119830"
                    d="M111.482,109.75l5.259-5.259a1.225,1.225,0,1,0-1.732-1.732l-5.259,5.259-5.259-5.259a1.225,1.225,0,1,0-1.732,1.732l5.259,5.259-5.259,5.259a1.225,1.225,0,1,0,1.732,1.732l5.259-5.259,5.259,5.259a1.225,1.225,0,0,0,1.732-1.732Z"
                    transform="translate(-102.4 -102.4)" fill="#ffffff" />
            </svg>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <video width="100%" loop autoplay controls muted>
                    <source src="{{ url('assets/images/videos/video1.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div aria-labelledby="myModalLabel" class="modal fade video_modal" id="video_modal2" role="dialog" tabindex="-1"
        aria-modal="true">
        <button class="close" aria-label="Close" data-bs-dismiss="modal" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14.7 14.7">
                <path id="Path_119830" data-name="Path 119830"
                    d="M111.482,109.75l5.259-5.259a1.225,1.225,0,1,0-1.732-1.732l-5.259,5.259-5.259-5.259a1.225,1.225,0,1,0-1.732,1.732l5.259,5.259-5.259,5.259a1.225,1.225,0,1,0,1.732,1.732l5.259-5.259,5.259,5.259a1.225,1.225,0,0,0,1.732-1.732Z"
                    transform="translate(-102.4 -102.4)" fill="#ffffff" />
            </svg>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <video width="100%" loop autoplay controls muted>
                    <source src="{{ url('assets/images/videos/video2.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div aria-labelledby="myModalLabel" class="modal fade video_modal" id="video_modal3" role="dialog" tabindex="-1"
        aria-modal="true">
        <button class="close" aria-label="Close" data-bs-dismiss="modal" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14.7 14.7">
                <path id="Path_119830" data-name="Path 119830"
                    d="M111.482,109.75l5.259-5.259a1.225,1.225,0,1,0-1.732-1.732l-5.259,5.259-5.259-5.259a1.225,1.225,0,1,0-1.732,1.732l5.259,5.259-5.259,5.259a1.225,1.225,0,1,0,1.732,1.732l5.259-5.259,5.259,5.259a1.225,1.225,0,0,0,1.732-1.732Z"
                    transform="translate(-102.4 -102.4)" fill="#ffffff" />
            </svg>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <video width="100%" loop autoplay controls muted>
                    <source src="{{ url('assets/images/videos/video3.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div aria-labelledby="myModalLabel" class="modal fade video_modal" id="video_modal4" role="dialog" tabindex="-1"
        aria-modal="true">
        <button class="close" aria-label="Close" data-bs-dismiss="modal" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14.7 14.7">
                <path id="Path_119830" data-name="Path 119830"
                    d="M111.482,109.75l5.259-5.259a1.225,1.225,0,1,0-1.732-1.732l-5.259,5.259-5.259-5.259a1.225,1.225,0,1,0-1.732,1.732l5.259,5.259-5.259,5.259a1.225,1.225,0,1,0,1.732,1.732l5.259-5.259,5.259,5.259a1.225,1.225,0,0,0,1.732-1.732Z"
                    transform="translate(-102.4 -102.4)" fill="#ffffff" />
            </svg>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <video width="100%" loop autoplay controls muted>
                    <source src="{{ url('assets/images/videos/video4.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div aria-labelledby="myModalLabel" class="modal fade video_modal" id="video_modal5" role="dialog" tabindex="-1"
        aria-modal="true">
        <button class="close" aria-label="Close" data-bs-dismiss="modal" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14.7 14.7">
                <path id="Path_119830" data-name="Path 119830"
                    d="M111.482,109.75l5.259-5.259a1.225,1.225,0,1,0-1.732-1.732l-5.259,5.259-5.259-5.259a1.225,1.225,0,1,0-1.732,1.732l5.259,5.259-5.259,5.259a1.225,1.225,0,1,0,1.732,1.732l5.259-5.259,5.259,5.259a1.225,1.225,0,0,0,1.732-1.732Z"
                    transform="translate(-102.4 -102.4)" fill="#ffffff" />
            </svg>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <video width="100%" loop autoplay controls muted>
                    <source src="{{ url('assets/images/videos/video5.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <!-- <div class="modal-backdrop fade show"></div> -->
    <!-- video_modal End -->

</div>

@stop

@section('footer_script')
<!-- counter js Start -->
<script src="{{ version_url('assets/js/owl.carousel.js') }}"></script>

<script>
    $(document).ready(function () {

        // commoncarousel js Start
        function commoncarouseljs(selector, itemsToShow, margin, responsiveSettings, autoplay = false,
            autoplaySpeed = 3000, loop = false) {
            $(selector).each(function () {
                var owl = $(this).owlCarousel({
                    items: itemsToShow,
                    nav: true,
                    loop: loop,
                    autoplay: autoplay,
                    autoplayTimeout: autoplaySpeed,
                    autoplayHoverPause: false,
                    margin: margin,
                    responsive: responsiveSettings
                });

                // Check if the carousel needs navigation
                owl.on('initialized.owl.carousel changed.owl.carousel', function (event) {
                    var totalItems = event.item.count;
                    var itemsVisible = event.page.size;

                    if (totalItems > itemsVisible) {
                        $(this).find('.owl-nav').show();
                    } else {
                        $(this).find('.owl-nav').hide();
                    }
                });
            });
        }
        // commoncarousel js End

        // testimonials_carousel Start
        commoncarouseljs('.testimonials_carousel', 2, 2, {
            0: {
                items: 1
            },
            700: {
                items: 1
            },
            992: {
                items: 1
            },
        }, true, 5000, true); // autoplay/loop
        // testimonials_carousel End

        // Faq js Start
        $(document).on("click", ".faqtab_nav a", function () {
            var targetDiv = $(this).data('target');
            var htext = $(this).find("h3").text();
            var ptext = $(this).find("p").text();
            $(".faqtab_content .tab-pane").addClass("d-none");
            $('#' + targetDiv).removeClass("d-none");
            $(".faqtab_nav a").removeClass("active");
            $(this).addClass("active");
            $('#' + targetDiv).find("h3").text(htext + ptext);
        });
        // Faq js End

    });

    // video_modal js Start
    document.addEventListener('DOMContentLoaded', function () {
        // Sabhi modals ke liye loop
        const videoModals = document.querySelectorAll('.video_modal');

        videoModals.forEach(function (modal) {
            const video = modal.querySelector('video');

            // Modal open hone par video play kare
            modal.addEventListener('shown.bs.modal', function () {
                if (video) {
                    video.play();
                    video.muted = false; // Remove muted
                }
            });

            // Modal band hone par video pause ho jaye
            modal.addEventListener('hidden.bs.modal', function () {
                if (video) {
                    video.pause();
                    video.currentTime = 0; // Reset to start
                    video.muted = true; // Optional: Mute again when closing
                }
            });
        });
    });
    // video_modal js End

    AOS.init();
</script>

<!-- marquee_slider js Start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>
<script>
    let marqueeSlider = document.querySelector('.marquee_slider');
    let mainTicker = new Flickity('.marquee_slider', {
        accessibility: true,
        resize: true,
        wrapAround: true,
        prevNextButtons: false,
        pageDots: false,
        percentPosition: true,
        setGallerySize: true,
    });

    mainTicker.x = 0;
    play();

    function play() {
        mainTicker.x -= 1.5;
        mainTicker.settle(mainTicker.x);
        requestId = window.requestAnimationFrame(play);
    }

    function pause() {
        if (requestId) {
            window.cancelAnimationFrame(requestId) // Cancel the animation
            requestId = undefined; // Reset the requestId for the next animation.
        }
    }

    marqueeSlider.addEventListener('mouseenter', () => pause()); // Pause on hover/focus
    marqueeSlider.addEventListener('mouseleave', () => play()); // Unpause on mouse out / defocus
</script>
<!-- marquee_slider js End -->

<script src="{{ version_url('assets/js/waypoints.min.js') }}"></script>
<script src="{{ version_url('assets/js/jquery.counterup.min.js') }}"></script>

<script>
    $(document).ready(function ($) {
        $(".counter").counterUp({
            delay: 40,
            time: 1000
        });
    });
</script>
@stop