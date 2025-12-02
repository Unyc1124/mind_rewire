@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Therapy & Mental Health Solutions | Mind Rewire — Psychologist in Pune</title>
<meta name="description"
    content="Therapy, counselling, school programs, corporate wellness and psychological assessments from Mind Rewire — psychologists in Pune with 15+ years clinical experience. Evidence-based, trauma-informed care for children, teens and adults.">
<meta name="keywords"
    content="therapy Pune, counselling Pune, psychological assessments Pune, corporate wellness Pune, school mental health Pune, trauma therapy Pune">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@mindrewire" />
<meta name="twitter:creator" content="@mindrewire" />
<meta name="twitter:title" content="Therapy & Mental Health Solutions | Mind Rewire — Psychologist in Pune">
<meta name="twitter:description"
    content="Therapy, counselling, school programs and assessments from Mind Rewire — psychologists in Pune with 15+ years experience.">
<meta name="twitter:image" content="{{ url('assets/images/common-images/solutions-og.png') }}">

<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Therapy & Mental Health Solutions | Mind Rewire — Psychologist in Pune" />
<meta property="og:description"
    content="Therapy, counselling, school programs and assessments from Mind Rewire — psychologists in Pune with 15+ years experience." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/solutions/solutions.css') }}">
@stop

@section('content')

<!-- page_wrap Start -->
<div class="page_wrap">

    <div class="top_banner">
        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white">
                    Tailored Mental Health Solutions
                    <span class="lightpink"> for Every Mind, Every Stage</span>
                </h2>
                <strong class="sub_heading white">
                    Explore Our Full Range Of Therapeutic Services And Emotional Support Programs - Custom-Built To
                    Meet The Needs Of
                    Students, Parents, Professionals, And Organizations.
                </strong>
                <p>
                    From Daily Stress To Deep-Rooted Trauma, We Meet You Where You Are—And Walk With You Toward
                    Emotional Clarity. Each
                    Solution Is Built With Care, Grounded In Science, And Delivered With Human Connection.
                </p>
                <div class="btnrow">
                    <a href="{{url('book-session')}}" class="cta_btn animate_arrow animation_white_line bgpink">
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
                    <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="icon">
                </div>
            </div>
            <div class="imgbox abs_img" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/solutions/img_top_banner.png')}}" alt="image" />
            </div>
        </div>
    </div>

    <div class="section1">
        <div class="common_fullrow mb-5" id="section1">
            <div class="custom_container">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">Therapy &
                        <span class="blue">Coaching</span>
                    </h2>
                    <p>
                        <strong class="blue">Navigate Emotions. Build Clarity. Reconnect With Self.</strong>
                    </p>
                    <div class="animate_border"></div>
                    <p>
                        Our 1:1 therapy sessions blend CBT, NLP, trauma-informed care, and somatic tools. Designed
                        for adults and professionals
                        navigating anxiety, burnout, relationships, or personal growth.
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('individual-therapy-coach')}}"
                            class="cta_btn animation_white_line animate_arrow">
                            Explore Therapy & Coaching
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
                    <div class="withpatch">
                        <img src="{{ url('assets/images/solutions/img_coaching.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="common_fullrow" id="section2">
            <div class="custom_container reverse">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">Career
                        <span class="blue">Counselling</span>
                    </h2>
                    <p>
                        <strong class="blue">Clarity Is The First Career Move.</strong>
                    </p>
                    <div class="animate_border"></div>
                    <p>
                        Psychometric assessments, personality profiling, and roadmap guidance for students,
                        graduates, and career switchers—so
                        every step aligns with who you truly are.
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('career-counselling')}}" class="cta_btn animation_white_line animate_arrow">
                            Explore Career Counselling
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
                    <div class="withpatch">
                        <img src="{{ url('assets/images/solutions/img_counselling.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section2">
        <div class="common_fullrow" id="section3">
            <div class="custom_container pt-0">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">Student
                        <span class="blue">Wellness</span>
                    </h2>
                    <p>
                        <strong class="blue">Equip Young Minds For Emotional Strength.</strong>
                    </p>
                    <div class="animate_border"></div>
                    <p>
                        Play therapy, focus support, exam anxiety coaching, and parent-child alignment programs for
                        children, teens, and school
                        ecosystems.
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('student-mental-wellness')}}" class="cta_btn animation_white_line animate_arrow">
                            Explore Student Wellness
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
                    <div class="withpatch">
                        <img src="{{ url('assets/images/solutions/img_student_wellness.png')}}" alt="image" />
                    </div>
                </div>
            </div>
        </div>
        <div class="common_fullrow" id="section4">
            <div class="custom_container reverse">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">Trauma
                        <span class="blue">Rewiring</span>
                    </h2>
                    <p>
                        <strong class="blue">What Happened To You Matters—But It Doesn’t Have To Define
                            You.</strong>
                    </p>
                    <div class="animate_border"></div>
                    <p>
                        We specialize in somatic healing, vagus nerve work, EMDR-informed methods, and nervous
                        system resets to help you reclaim
                        safety and emotional control.
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('trauma-rewiring')}}" class="cta_btn animation_white_line animate_arrow">
                            Explore Trauma Rewiring
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
                    <div class="withpatch">
                        <img src="{{ url('assets/images/solutions/img_trauma_rewiring.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="common_fullrow" id="section5">
            <div class="custom_container">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">Corporate
                        <span class="blue">Wellness</span>
                    </h2>
                    <p>
                        <strong class="blue">Because Your People Are Your Performance.</strong>
                    </p>
                    <div class="animate_border"></div>
                    <p>
                        Customized mental health programs, resilience coaching, and emotional intelligence training
                        for leaders, teams, and HR
                        managers.
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('corporate-wellness')}}" class="cta_btn animation_white_line animate_arrow">
                            Explore Corporate Wellness
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
                    <div class="withpatch">
                        <img src="{{ url('assets/images/solutions/img_corporate_wellness.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="common_fullrow" id="section6">
            <div class="custom_container reverse">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">School
                        <span class="blue">Programs</span>
                    </h2>
                    <p>
                        <strong class="blue">Emotionally Strong Schools Build Empowered Futures.</strong>
                    </p>
                    <div class="animate_border"></div>
                    <p>
                        Student counselling pods, teacher training, emotional literacy events, and climate audits
                        designed to support the entire
                        educational ecosystem.
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('school-programs')}}" class="cta_btn animation_white_line animate_arrow">
                            Explore School Programs
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
                    <div class="withpatch">
                        <img src="{{ url('assets/images/solutions/img_school_programs.png')}}" alt="image" />
                    </div>
                </div>
            </div>
        </div>
        <div class="common_fullrow" id="section7">
            <div class="custom_container">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">
                        <span class="blue">Assessments</span>
                    </h2>
                    <p>
                        <strong class="blue">Insight Is The Foundation Of Every Breakthrough.</strong>
                    </p>
                    <div class="animate_border"></div>
                    <p>
                        We offer cognitive, emotional, personality, and behavioral profiling tools for children,
                        adults, and
                        professionals—backed by expert interpretation and action plans.
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('assessments')}}" class="cta_btn animation_white_line animate_arrow">
                            Explore Assessments
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
                    <div class="withpatch">
                        <img src="{{ url('assets/images/solutions/img_assessments.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btmpatch">
            <img src="{{ url('assets/images/common_circle_left.png')}}" alt="image" />
        </div>
    </div>

    <div class="section3" id="section8">
        <div class="common_fullrow">
            <div class="custom_container align-items-start reverse">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading mb-0">UNTANGLE
                        <span class="blue"></span>
                    </h2>
                    <p>
                        <strong class="blue">Playful Self-Awareness Meets Powerful Emotional
                            Reflection.</strong>
                    </p>
                    <div class="animate_border"></div>
                    <p>
                        UNTANGLE is a deck-based wellness game that helps individuals, teams, and therapy
                        clients explore fear, trauma, stress,
                        and hidden personas through reflective cards. Each deck targets a different emotional
                        theme and can be used solo, in
                        groups, or in sessions. Created by therapists. Loved by real humans.
                    </p>
                    <p><strong>Deck Themes :</strong></p>
                    <ul class="with_bullet pt-0">
                        <li>
                            <strong>Fear</strong> (The What-If Deck)
                        </li>
                        <li>
                            <strong>Trauma</strong> (Oops, My Past!)
                        </li>
                        <li>
                            <strong>Stress</strong> (Ctrl+Alt+Del)
                        </li>
                        <li>
                            <strong>Persona</strong> (The Mask Deck)
                        </li>
                    </ul>
                    <p>
                        <strong>Ideal For :</strong><br>
                        Teens | Adults | Therapists | Coaches | Hr Teams | Educators | Self-Healers
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('untangle')}}" class="cta_btn animation_white_line animate_arrow">
                            Explore UNTANGLE
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
                    <div class="withpatch">
                        <img src="{{ url('assets/images/solutions/img_untangle.png')}}" alt="image" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="last_bluebox" id="last_bluebox">
        <div class="common_fullrow">
            <div class="custom_container">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading white">Let’s Help You Choose <br>
                        <span class="lightpink">What Fits Best</span>
                    </h2>
                    <p>
                        If You’re Unsure Where To Begin, Our Intake Team Can Guide You Toward The Right Service
                        Based On Your Life Stage,
                        Emotional Concerns, And Goals.
                    </p>
                    <div class="btnrow">
                        <a href="{{url('contact-us')}}" class="cta_btn animate_arrow animation_white_line bgpink">
                            Talk to Our Experts
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
                    <img src="{{ url('assets/images/solutions/img_last_bluebox.png')}}" alt="image" />
                </div>
            </div>
        </div>
        <div class="common_patch" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="image" />
        </div>
    </div>

</div>
<!-- page_wrap End -->

@stop

@section('footer_script')
<script>

</script>
@stop