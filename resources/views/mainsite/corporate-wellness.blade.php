@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Corporate Mental Wellness Programs | Mind Rewire — Psychologist in Pune</title>
<meta name="description"
    content="Corporate mental wellness programs in Pune and online: employee counselling, burnout recovery, leadership coaching and EQ training. Delivered by psychologists with 15+ years clinical experience to improve retention, performance and workplace wellbeing.">
<meta name="keywords"
    content="corporate wellness Pune, workplace mental health Pune, employee counselling Pune, burnout recovery Pune, leadership coaching Pune, EQ training Pune, corporate mental wellness India">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@mindrewire" />
<meta name="twitter:creator" content="@mindrewire" />
<meta name="twitter:title" content="Corporate Mental Wellness Programs | Mind Rewire — Psychologist in Pune">
<meta name="twitter:description"
    content="Employee counselling, leadership coaching and burnout recovery programs by Mind Rewire — psychologists in Pune with 15+ years clinical experience.">
<meta name="twitter:image" content="{{ url('assets/images/common-images/corporate-og.png') }}">

<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Corporate Mental Wellness Programs | Mind Rewire — Psychologist in Pune" />
<meta property="og:description"
    content="Employee counselling, leadership coaching and burnout recovery programs by Mind Rewire — psychologists in Pune with 15+ years clinical experience." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/corporate-wellness/corporate-wellness.css') }}">
@stop

@section('content')

<!-- page_wrap Start -->
<div class="page_wrap">

    <div class="top_banner">
        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white">
                    Mental Wellness Isn’t a Perk. <br>
                    <span class="lightpink"> It’s Performance Infrastructure.</span>
                </h2>
                <strong class="sub_heading white">
                    Empowering Hr Leaders, Teams, And Employees To Work With More Resilience, Emotional Clarity, And
                    Long-Term
                    Sustainability.
                </strong>
                <p>
                    High-Performance Teams Break When Emotions Go Unmanaged. At Mind Rewire, We Help You Build
                    Emotionally Intelligent
                    Workplaces— Where Productivity Doesn’t Cost People Their Peace.
                </p>
                <div class="btnrow">
                    <a href="{{url('book-session')}}" class="cta_btn animate_arrow animation_white_line bgpink">
                        Bring This to Our Workplace
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
                    <a href="{{url('help')}}" class="cta_btn animate_arrow animation_white_line border_white">
                        Explore Team Solutions
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
            <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/corporate-wellness/img_top_banner.png')}}" alt="image" />
            </div>
        </div>
    </div>

    <div class="section1" id="section1">
        <div class="common_fullrow">
            <div class="custom_container">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">What Most Workplace <br>
                        <span class="blue">Wellness Programs Miss</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        <strong>Sound Familiar?</strong>
                    </p>
                    <ul class="with_bullet pt-0">
                        <li>“Our team is burning out—but no one says it out loud.”</li>
                        <li>“We tried sessions, but nothing stuck.”</li>
                        <li>“Managers can’t handle emotional dynamics.”</li>
                        <li>“Everyone’s working hard. But no one feels okay.”</li>
                        <li>“Mental health is a checkbox in policy—not in practice.”</li>
                    </ul>
                    <p>
                        <strong>We Partner With :</strong>
                    </p>
                    <ul class="with_bullet pt-0">
                        <li>HR teams, People & Culture leaders, founders, and CXOs</li>
                        <li>Organizations across tech, finance, healthcare, education, and startups</li>
                        <li>Businesses ready to move beyond wellness tokens to lasting culture shifts</li>
                    </ul>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/corporate-wellness/img_wellness_programs.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section2" id="section2">
        <div class="custom_container">
            <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">Solutions That Fit Your Team -
                    <span class="blue">Not Just a Template</span>
                </h2>
                <div class="animate_border center"></div>
            </div>
            <div class="boxwrap">
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/corporate-wellness/img_solutions1.png')}}" alt="image">
                    <div class="overlay customscroll">
                        <h3>Employee Counselling <br>Pods (1:1 Therapy)</h3>
                        <div class="hovertext">
                            <ul>
                                <li>Confidential therapy sessions for team members</li>
                                <li>Covers stress, anxiety, trauma, grief, burnout, imposter syndrome</li>
                                <li>Online or hybrid options with pre/post intake</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/corporate-wellness/img_solutions2.png')}}" alt="image">
                    <div class="overlay customscroll">
                        <h3>Burnout Prevention & <br>Recovery</h3>
                        <div class="hovertext">
                            <ul>
                                <li>Custom tracks for high-stress teams</li>
                                <li>Teaches emotion management, boundary setting, nervous system tools</li>
                                <li>Ideal for startup and leadership teams</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/corporate-wellness/img_solutions3.png')}}" alt="image">
                    <div class="overlay customscroll">
                        <h3>Leadership Coaching <br>(Trauma-Informed)</h3>
                        <div class="hovertext">
                            <ul>
                                <li>Coaching for managers to respond to conflict, stress, and emotions with EQ</li>
                                <li>Non-clinical, strategy-aligned, real-world emotional tools</li>
                                <li>Includes manager toolkits + self-awareness profiling</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/corporate-wellness/img_solutions4.png')}}" alt="image">
                    <div class="overlay customscroll">
                        <h3>Workshops & Group <br>Training</h3>
                        <div class="hovertext">
                            <ul>
                                <li>Topics: Emotional literacy at work, EQ & resilience, mental wellness for hybrid
                                    teams</li>
                                <li>Interactive, science-backed, jargon-free delivery</li>
                                <li>60–90 minute formats or series-based models</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="image">
                </div>
            </div>
            <div class="btnrow center center" data-aos="fade-up" data-aos-duration="1500">
                <a href="{{url('contact-us')}}" class="cta_btn animation_white_line animate_arrow">
                    Request a Corporate Brief
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

    <div class="section3" id="section3">
        <div class="common_fullrow">
            <div class="custom_container">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">Not Just Wellness Days. <br>
                        <span class="blue">Real Shifts.</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        <strong>Organizational Benefits Observed :</strong>
                    </p>
                    <ul class="with_bullet pt-0">
                        <li>Lowered emotional absenteeism</li>
                        <li>Reduced passive conflict and burnout loops</li>
                        <li>Higher team engagement and empathy</li>
                        <li>More emotionally capable managers</li>
                        <li>Employees reporting clarity, not just compliance</li>
                    </ul>
                    <p>
                        <strong>Bonus Option :</strong>
                    </p>
                    <p>
                        Anonymous Team Pulse Check-Ins And Emotional Climate Scans Before And After Rollout
                    </p>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/corporate-wellness/img_real_shifts.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section4" id="section4">
        <div class="common_fullrow">
            <div class="custom_container reverse">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">What We Deliver Is Soft. <br>
                        <span class="blue">But Its Effects Are Not.</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        <strong>Business Benefits :</strong>
                    </p>
                    <ul class="with_bullet pt-0">
                        <li>
                            <strong>Reduced Attrition:</strong> Employees feel heard and supported
                        </li>
                        <li>
                            <strong>Improved Productivity:</strong> Emotional regulation → better focus
                        </li>
                        <li>
                            <strong>Stronger Culture:</strong> Trust, openness, resilience become team habits
                        </li>
                        <li>
                            <strong>Leadership Shift:</strong> Managers evolve from task-pushers to people-holders
                        </li>
                    </ul>
                    <p>
                        <strong>Optional Add-Ons :</strong>
                    </p>
                    <ul class="with_bullet pt-0">
                        <li>Quarterly emotional health reports</li>
                        <li>Session usage analytics (anonymous)</li>
                        <li>HR debriefs + renewal planning</li>
                    </ul>
                    <div class="quote">
                        Emotional culture is what drives team longevity. Not just perks or pressure.
                    </div>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/corporate-wellness/img_effects.png')}}" alt="image" />
                </div>
            </div>
        </div>
    </div>

    <div class="last_bluebox" id="last_bluebox">
        <div class="custom_container">
            <div class="common_textbox textbox full" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white center">Your People Aren’t Robots. <br>
                    <span class="lightpink">Your Wellness Strategy Shouldn’t Be Either.</span>
                </h2>
                <p>
                    Bring In Real Support For Your Team—Where Therapy Meets Workplace Intelligence, <br> And
                    Emotional Safety Powers Performance.
                </p>
                <div class="btnrow center">
                    <a href="{{url('book-session')}}" class="cta_btn animate_arrow animation_white_line bgpink">
                        Bring This to Our Workplace
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