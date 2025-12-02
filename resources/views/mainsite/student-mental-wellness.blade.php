@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Student Mental Wellness in Pune | Child & Teen Counselling — Mind Rewire</title>
<meta name="description"
    content="Child and teen counselling in Pune: play therapy, teen coaching, exam stress support and parent-child alignment. Delivered by psychologists with 15+ years clinical experience supporting students and schools.">
<meta name="keywords"
    content="child counselling Pune, teen counselling Pune, play therapy Pune, student mental health Pune, exam stress counselling Pune, school counselling Pune">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@mindrewire" />
<meta name="twitter:creator" content="@mindrewire" />
<meta name="twitter:title" content="Student Mental Wellness in Pune | Child & Teen Counselling — Mind Rewire">
<meta name="twitter:description"
    content="Child and teen counselling in Pune: play therapy, teen coaching and exam stress support from psychologists with 15+ years experience.">
<meta name="twitter:image" content="{{ url('assets/images/common-images/student-og.png') }}">

<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Student Mental Wellness in Pune | Child & Teen Counselling — Mind Rewire" />
<meta property="og:description"
    content="Child and teen counselling in Pune: play therapy, teen coaching and exam stress support from psychologists with 15+ years experience." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/student-wellness/student-wellness.css') }}">
@stop

@section('content')

<!-- page_wrap Start -->
<div class="page_wrap">
    <div class="top_banner">
        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white">
                    Strong Minds
                    <span class="lightpink"> Start Young</span>
                </h2>
                <strong class="sub_heading white">
                    Empowering Children And Teens To Regulate Emotions, Build Focus, And Grow Confidence Through
                    Therapy That Speaks Their
                    Language.
                </strong>
                <p>
                    Today’s Kids Carry More Emotional Pressure Than Ever Before—Academic Expectations, Social
                    Comparison, Digital Overload,
                    And Identity Confusion. We Help Them Process All Of It, Gently And Effectively.
                </p>
                <div class="btnrow">
                    <a href="{{url('help')}}" class="cta_btn animate_arrow animation_white_line bgpink">
                        Help My Child
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
                    <a href="{{url('contact-us')}}" class="cta_btn animate_arrow animation_white_line border_white">
                        Talk to a Therapist
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
                <img src="{{ url('assets/images/student-wellness/img_top_banner.png')}}" alt="Student mental wellness — counselling and play therapy in Pune" />
            </div>
        </div>
    </div>

    <div class="section1" id="section1">
        <div class="common_fullrow">
            <div class="custom_container align-items-start">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">
                        Emotional Tools That Build Resilience,
                        <span class="blue"> Not Just Performance</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        <strong>For Ages :</strong> 10 To 24<br>
                        <strong>Available Formats :</strong> Online | In-Person | School Collaborations
                    </p>
                    <p><strong>Support Areas :</strong></p>
                    <ul class="with_bullet">
                        <li>Exam anxiety, school avoidance, perfectionism</li>
                        <li>Focus issues, impulsivity, attention challenges</li>
                        <li>Social anxiety, peer pressure, body image</li>
                        <li>Repeating behavioral outbursts or emotional shutdown</li>
                        <li>Emotional dysregulation from trauma or transition</li>
                        <li>Identity, self-worth, or comparison-driven stress</li>
                    </ul>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/student-wellness/img_build_resilience.png')}}" alt="image" />
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
                <h2 class="c_heading center">
                    Core <span class="blue">Services</span>
                </h2>
                <div class="animate_border center"></div>
            </div>
            <div class="boxwrap">
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <a>
                        <div class="imgbox">
                            <img src="{{ url('assets/images/student-wellness/img_core_service1.png')}}" alt="image" />
                        </div>
                        <div class="textbox">
                            <h3>Play Therapy (Children)</h3>
                            <p>Emotional Literacy Through Action And Symbol</p>
                        </div>
                    </a>
                </div>
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <a>
                        <div class="imgbox">
                            <img src="{{ url('assets/images/student-wellness/img_core_service2.png')}}" alt="image" />
                        </div>
                        <div class="textbox">
                            <h3>EQ Coaching (Teens)</h3>
                            <p>Helping Teens Name, Feel, And Guide Their Emotions</p>
                        </div>
                    </a>
                </div>
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <a>
                        <div class="imgbox">
                            <img src="{{ url('assets/images/student-wellness/img_core_service3.png')}}" alt="image" />
                        </div>
                        <div class="textbox">
                            <h3>Focus & Study Skill Coaching</h3>
                            <p>Not Just What To Study, But How To Feel Safe Doing It</p>
                        </div>
                    </a>
                </div>
                <div class="common_patch patch1" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                </div>
                <div class="common_patch patch2" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                </div>
            </div>
        </div>
    </div>

    <div class="section3" id="section3">
        <div class="common_fullrow">
            <div class="custom_container align-items-start">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">
                        We Don’t Just Work With the Child.
                        <span class="blue"> We Work With the Circle Around Them.</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        Often, The Gap Isn’t In The Child—It’s In The Disconnect Between The Child’s Emotions And
                        How They’re Received. That’s
                        Why We Involve Parents (With Consent) In A Safe, Non-Blaming Framework.
                    </p>
                    <p><strong>We Help Parents :</strong></p>
                    <ul class="with_bullet pt-0">
                        <li>Understand what their child is emotionally communicating</li>
                        <li>Respond without overreaction or shutdown</li>
                        <li>Repair emotional breaks through presence, not pressure</li>
                        <li>Set compassionate boundaries that empower growth</li>
                    </ul>
                    <p>
                        <strong>Bonus Add-On:</strong><br>
                        Joint parent-child sessions available upon request.
                    </p>
                    <div class="quote">
                        Children Don’t Need Perfect Parents. They Need Present Ones Who Try To Understand.
                    </div>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/student-wellness/img_circle_around.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="common_accordion section4" id="section4">
        <div class="common_fullrow">
            <div class="custom_container pb-0 reverse">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">
                        Therapy That Meets <br>
                        <span class="blue">Them at Their Level</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        <strong>Methods We Use :</strong>
                    </p>
                    <div class="accordion_wrap">
                        <div class="accordion_new">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                    viewBox="0 0 17.934 16.585">
                                    <g id="Group_50616" data-name="Group 50616" transform="translate(0 -19.252)">
                                        <g id="Group_50618" data-name="Group 50618" transform="translate(0 19.252)">
                                            <g id="Group_50617" data-name="Group 50617">
                                                <g id="Group_50616-2" data-name="Group 50616">
                                                    <path id="Path_132432" data-name="Path 132432"
                                                        d="M122.487,27.8a1.6,1.6,0,0,0,1.63-1.723,1.979,1.979,0,0,0-.013-.229,2.026,2.026,0,0,0,.968-1.909,2.026,2.026,0,0,0-.968-1.908,1.979,1.979,0,0,0,.013-.229,1.6,1.6,0,0,0-1.63-1.723,1.6,1.6,0,0,0-1.411-.826,1.165,1.165,0,0,0-.869.32q-.035.035-.067.073-.032-.038-.067-.073a1.165,1.165,0,0,0-.869-.32,1.6,1.6,0,0,0-1.411.826,1.6,1.6,0,0,0-1.63,1.723,1.986,1.986,0,0,0,.013.229,2.026,2.026,0,0,0-.968,1.909,2.026,2.026,0,0,0,.968,1.908,1.979,1.979,0,0,0-.013.229,1.6,1.6,0,0,0,1.63,1.723,1.6,1.6,0,0,0,1.411.826h.024a1.157,1.157,0,0,0,.845-.32q.035-.035.067-.073.032.038.067.073a1.157,1.157,0,0,0,.845.32h.024A1.6,1.6,0,0,0,122.487,27.8Zm-2.7-.791a1.155,1.155,0,0,1-.209.8.488.488,0,0,1-.367.118.9.9,0,0,1-.818-.487.561.561,0,0,1,.215-.222.555.555,0,0,1,.424-.056.35.35,0,0,0,.182-.677,1.263,1.263,0,0,0-1.433.613.9.9,0,0,1-.92-1.021,1.277,1.277,0,0,1,.023-.241.493.493,0,0,0-.238-.521,1.348,1.348,0,0,1-.74-1.376,1.347,1.347,0,0,1,.74-1.376.494.494,0,0,0,.238-.521,1.274,1.274,0,0,1-.023-.24.923.923,0,0,1,1.056-1.026h.035a.4.4,0,0,1,.229.47.35.35,0,1,0,.677.18,1.1,1.1,0,0,0-.369-1.137.927.927,0,0,1,.723-.335.488.488,0,0,1,.367.118,1.155,1.155,0,0,1,.209.8Zm2.307-.376a.35.35,0,0,0-.677-.18,1.1,1.1,0,0,0,.369,1.137.927.927,0,0,1-.723.335.486.486,0,0,1-.367-.118,1.155,1.155,0,0,1-.209-.8V20.869a1.155,1.155,0,0,1,.209-.8.488.488,0,0,1,.367-.118.9.9,0,0,1,.818.487.561.561,0,0,1-.215.222.555.555,0,0,1-.424.056.35.35,0,1,0-.182.677,1.265,1.265,0,0,0,.328.044,1.266,1.266,0,0,0,1.1-.657.9.9,0,0,1,.92,1.021,1.277,1.277,0,0,1-.023.241.493.493,0,0,0,.238.521,1.348,1.348,0,0,1,.74,1.376,1.347,1.347,0,0,1-.74,1.376.494.494,0,0,0-.238.521,1.274,1.274,0,0,1,.023.24A.923.923,0,0,1,122.36,27.1h-.035A.4.4,0,0,1,122.1,26.632Z"
                                                        transform="translate(-111.174 -19.252)" fill="#6bbf9e" />
                                                    <path id="Path_132433" data-name="Path 132433"
                                                        d="M170.982,132.583a1.023,1.023,0,0,0-.752,1.719l.041.043a.35.35,0,0,0,.495-.5l-.024-.025a.314.314,0,0,1-.058-.345.32.32,0,0,1,.3-.2.35.35,0,1,0,0-.7Z"
                                                        transform="translate(-164.002 -128.613)" fill="#6bbf9e" />
                                                    <path id="Path_132434" data-name="Path 132434"
                                                        d="M303.288,133.85a.35.35,0,1,0,.495.5l.041-.043a1.023,1.023,0,0,0-.752-1.719.35.35,0,0,0,0,.7.32.32,0,0,1,.3.2.314.314,0,0,1-.058.344Z"
                                                        transform="translate(-292.118 -128.614)" fill="#6bbf9e" />
                                                    <path id="Path_132435" data-name="Path 132435"
                                                        d="M5.838,85.133,3.4,82.727V80.136a1.063,1.063,0,0,0-1.061-1.061H2.3a1.054,1.054,0,0,0-.178.021v-.259a1.07,1.07,0,0,0-1.011-1.08,1.131,1.131,0,0,0-.821.3.873.873,0,0,0-.281.633c0,.826-.005,4.675-.008,5.88,0,.028,0,.057,0,.085a3.211,3.211,0,0,0,1.044,2.287l.017.015,2.731,2.2v2.781a.35.35,0,0,0,.35.35H6.605a.35.35,0,0,0,.35-.35V87.8A3.772,3.772,0,0,0,5.838,85.133ZM2.319,79.776h.015a.361.361,0,0,1,.361.361v2.191a1.127,1.127,0,0,0-.575.056V79.846A.357.357,0,0,1,2.319,79.776ZM6.255,91.592H4.493v-2.6a.35.35,0,0,0-.13-.273L1.51,86.42A2.506,2.506,0,0,1,.7,84.643q0-.035,0-.07c0-1.205.008-5.055.008-5.882a.177.177,0,0,1,.064-.127.431.431,0,0,1,.3-.108.376.376,0,0,1,.343.381v4.305a1.137,1.137,0,0,0,.282,1.1l2.467,2.581a.35.35,0,0,0,.506-.484L2.207,83.757l0,0a.434.434,0,0,1,0-.6l.046-.042a.432.432,0,0,1,.576.037l0,0,2.521,2.484A3.068,3.068,0,0,1,6.255,87.8v3.788Z"
                                                        transform="translate(0 -75.707)" fill="#6bbf9e" />
                                                    <path id="Path_132436" data-name="Path 132436"
                                                        d="M320.369,78.692a.873.873,0,0,0-.281-.633,1.131,1.131,0,0,0-.821-.3,1.07,1.07,0,0,0-1.011,1.08V79.1a1.053,1.053,0,0,0-.177-.021h-.037a1.063,1.063,0,0,0-1.061,1.061v2.591l-2.442,2.406a3.772,3.772,0,0,0-1.118,2.671v4.139a.35.35,0,0,0,.35.35h2.462a.35.35,0,0,0,.35-.35V89.161l2.731-2.2.017-.015a3.21,3.21,0,0,0,1.044-2.287q0-.042,0-.085C320.374,83.367,320.369,79.518,320.369,78.692Zm-2.328,1.083h.017a.356.356,0,0,1,.2.07v2.537a1.127,1.127,0,0,0-.575-.056V80.136A.361.361,0,0,1,318.041,79.775Zm1.636,4.868a2.506,2.506,0,0,1-.809,1.777l-2.853,2.3a.35.35,0,0,0-.13.273v2.6h-1.762V87.8a3.068,3.068,0,0,1,.909-2.172l2.521-2.484,0,0a.432.432,0,0,1,.576-.037l.046.042a.434.434,0,0,1,0,.6l0,0-1.244,1.294a.35.35,0,1,0,.505.486l1.243-1.293a1.137,1.137,0,0,0,.283-1.1V78.838a.375.375,0,0,1,.343-.381.431.431,0,0,1,.3.108.177.177,0,0,1,.064.127c0,.826.005,4.677.008,5.882C319.677,84.6,319.677,84.62,319.677,84.643Z"
                                                        transform="translate(-302.444 -75.707)" fill="#6bbf9e" />
                                                    <path id="Path_132437" data-name="Path 132437"
                                                        d="M379.988,315.922a.35.35,0,1,0-.124.422A.353.353,0,0,0,379.988,315.922Z"
                                                        transform="translate(-366.028 -305.322)" fill="#6bbf9e" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>Play Therapy</h3>
                                <div class="slidetext">
                                    <p>
                                        For children who express best through imagination and metaphor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion_new">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                    viewBox="0 0 17.562 18.488">
                                    <g id="outline" transform="translate(-23.993 -15.967)">
                                        <path id="Path_132438" data-name="Path 132438"
                                            d="M142.383,259.9a.308.308,0,0,0-.413.138l-.041.082a.946.946,0,0,1-1.693,0l-.041-.082a.308.308,0,1,0-.551.276l.041.082a1.562,1.562,0,0,0,2.8,0l.041-.082A.308.308,0,0,0,142.383,259.9Z"
                                            transform="translate(-111.166 -234.509)" fill="#1c3495" />
                                        <path id="Path_132439" data-name="Path 132439"
                                            d="M86.687,22.846a1.547,1.547,0,0,0-.56-.712.314.314,0,0,0-.014-.033,3.681,3.681,0,0,0-2.286-1.929,2.449,2.449,0,0,1,1.2-1,.924.924,0,1,0-.056-.634,3.065,3.065,0,0,0-1.782,1.513,3.678,3.678,0,0,0-3.668,2l-.116-.6.725-.681a.308.308,0,0,0-.172-.53l-.334-.042V18.7a1.078,1.078,0,0,0-.385-2.085h-.012a1.232,1.232,0,0,0-2.134,0h-.012a1.078,1.078,0,0,0-.154,2.146v1.419l-.347.044a.308.308,0,0,0-.172.53l.725.68-.187.977a.308.308,0,0,0,.451.328l.871-.479.871.479a.306.306,0,0,0,.1.034,3.659,3.659,0,0,0-.106.621H73.984a.308.308,0,0,0-.3.264l-.124.851-1.5,2.1a.308.308,0,0,0,.045.409l1.13,1.011v4.3a.308.308,0,0,0,.274.306l2.5.278v1.265a.308.308,0,0,0,.308.308h6.778a.308.308,0,0,0,.308-.308V31.447l.374-1.471a15,15,0,0,0,.429-4.73h2.3a1.207,1.207,0,0,0,.18-2.4Zm-7.678-4.07v1.332l-.036,0-.423-.9a.308.308,0,0,0-.558,0l-.423.9-.024,0V18.776ZM76.622,17.7a.463.463,0,0,1,.462-.462h.207a.308.308,0,0,0,.29-.205.616.616,0,0,1,1.161,0,.308.308,0,0,0,.29.205h.207a.462.462,0,1,1,0,.924H77.084A.463.463,0,0,1,76.622,17.7Zm2.241,3.408a.308.308,0,0,0-.092.282l.1.5-.446-.245a.308.308,0,0,0-.3,0l-.446.245.1-.5a.308.308,0,0,0-.092-.282l-.371-.348.5-.064a.308.308,0,0,0,.24-.175l.216-.46.216.46a.308.308,0,0,0,.24.175l.5.064Zm7-2.638a.308.308,0,1,1-.308.308A.308.308,0,0,1,85.865,18.468ZM82.8,20.644a3.038,3.038,0,0,1,2.442,1.213,1.529,1.529,0,0,0-.657.15,2.464,2.464,0,0,0-4.23,1.39h-.6A3.066,3.066,0,0,1,82.8,20.644Zm.166,2.754h-.7a.615.615,0,0,1,.867-.21,1.215,1.215,0,0,0-.167.21Zm.841-.551q-.053.008-.1.021a1.232,1.232,0,0,0-2.1.531h-.629a1.848,1.848,0,0,1,3.112-1.016,1.535,1.535,0,0,0-.283.465Zm-.633,6.978-.384,1.508a.309.309,0,0,0-.01.076v2.465H76.622V32.641a.308.308,0,0,0-.274-.306l-2.5-.278V29.639h.625a1.621,1.621,0,0,0,1.154-.478.308.308,0,1,0-.436-.436,1.009,1.009,0,0,1-.718.3h-.625V27.89a.308.308,0,0,0-.1-.23l-1.027-.919,1.38-1.932a.308.308,0,0,0,.054-.135l.1-.661h8.534c0,.009,0,.017,0,.026a1.209,1.209,0,0,0,.8,1.135A14.385,14.385,0,0,1,83.177,29.825Zm3.33-5.194H83.99a.591.591,0,1,1,0-1.181h.053a.308.308,0,0,0,.3-.244.924.924,0,0,1,1.808,0,.308.308,0,0,0,.3.244h.053a.591.591,0,1,1,0,1.181Z"
                                            transform="translate(-46.158 -0.035)" fill="#1c3495" />
                                        <path id="Path_132440" data-name="Path 132440"
                                            d="M304.308,19.357a.308.308,0,0,0,.308-.308V19a1.782,1.782,0,0,1,.392-1.119,1.079,1.079,0,1,0-.35-.535A2.4,2.4,0,0,0,304,19v.053A.308.308,0,0,0,304.308,19.357Zm1.386-2.773a.462.462,0,1,1-.462.462A.462.462,0,0,1,305.694,16.584Z"
                                            transform="translate(-269.223 0)" fill="#1c3495" />
                                        <path id="Path_132441" data-name="Path 132441"
                                            d="M112.922,73.862a.918.918,0,0,0,.375-.08,2.678,2.678,0,0,1,.549,1.62.308.308,0,1,0,.616,0,3.3,3.3,0,0,0-.711-2.04l-.006-.007a.924.924,0,1,0-.824.506Zm0-1.232a.308.308,0,1,1-.308.308A.308.308,0,0,1,112.922,72.629Z"
                                            transform="translate(-84.616 -53.888)" fill="#1c3495" />
                                        <path id="Path_132442" data-name="Path 132442"
                                            d="M58.139,137.366a1.557,1.557,0,0,1,1.011.668.308.308,0,0,0,.513-.342,2.172,2.172,0,0,0-1.548-.952,1.078,1.078,0,1,0,.024.627Zm-1.505-.273a.462.462,0,1,1,.462.462.462.462,0,0,1-.462-.462Z"
                                            transform="translate(-30.792 -115.425)" fill="#1c3495" />
                                        <path id="Path_132443" data-name="Path 132443"
                                            d="M25.839,91.694a.308.308,0,0,0-.27-.342,2.833,2.833,0,0,0-1.383.182.308.308,0,1,0,.229.572,2.216,2.216,0,0,1,1.082-.143.308.308,0,0,0,.343-.269Z"
                                            transform="translate(0 -72.463)" fill="#1c3495" />
                                        <path id="Path_132444" data-name="Path 132444"
                                            d="M87.055,104.556a2.21,2.21,0,0,1,.254.218l.059.059a.308.308,0,1,0,.436-.436l-.059-.059a2.834,2.834,0,0,0-.325-.279.308.308,0,1,0-.365.5Z"
                                            transform="translate(-60.513 -84.643)" fill="#1c3495" />
                                    </g>
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>Art, Movement & Story Tools</h3>
                                <div class="slidetext">
                                    <p>
                                        To access deeper emotions beyond words
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion_new">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 18.913 18.125">
                                    <path id="Path_132445" data-name="Path 132445"
                                        d="M4.233,18.617a1.007,1.007,0,0,1-.98-1.229l1.217-5.36L.344,8.409A1.006,1.006,0,0,1,.914,6.65l5.46-.5L8.532,1.1a1.005,1.005,0,0,1,1.849,0L12.54,6.155,18,6.65a1.006,1.006,0,0,1,.571,1.759l-4.126,3.618,1.217,5.36a1,1,0,0,1-1.5,1.086L9.457,15.659,4.749,18.474A1.007,1.007,0,0,1,4.233,18.617Zm5.223-4.17a1.008,1.008,0,0,1,.515.143l4.443,2.657-1.148-5.059a1,1,0,0,1,.318-.98l3.9-3.417-5.155-.468a1,1,0,0,1-.835-.609L9.457,1.948,7.42,6.716a1,1,0,0,1-.833.607l-5.156.468,3.9,3.417a1,1,0,0,1,.318.98L4.5,17.247,8.941,14.59A1.007,1.007,0,0,1,9.457,14.447Zm-3.125-8.2v0Zm6.248,0v0Zm0,0"
                                        transform="translate(0 -0.492)" fill="#1c3495" />
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>CBT & REBT (age-adapted)</h3>
                                <div class="slidetext">
                                    <p>
                                        For cognitive shifts around anxiety and fear
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion_new">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20.323 20.323">
                                    <g id="Group_50619" data-name="Group 50619" transform="translate(0)">
                                        <path id="Path_132446" data-name="Path 132446"
                                            d="M14.54,11.716A2.54,2.54,0,0,1,12,9.175V8.54a2.54,2.54,0,1,1,5.081,0v.635A2.54,2.54,0,0,1,14.54,11.716Zm0-4.446a1.27,1.27,0,0,0-1.27,1.27v.635a1.27,1.27,0,1,0,2.54,0V8.54A1.27,1.27,0,0,0,14.54,7.27Z"
                                            transform="translate(-4.379 -2.189)" fill="#1c3495" />
                                        <path id="Path_132447" data-name="Path 132447"
                                            d="M17.256,21.081a.635.635,0,0,1-.635-.635v-2.54a.635.635,0,0,0-.635-.635H10.905a.635.635,0,0,0-.635.635v2.54a.635.635,0,1,1-1.27,0v-2.54A1.905,1.905,0,0,1,10.905,16h5.081a1.905,1.905,0,0,1,1.905,1.905v2.54A.635.635,0,0,1,17.256,21.081Z"
                                            transform="translate(-3.284 -5.839)" fill="#1c3495" />
                                        <path id="Path_132448" data-name="Path 132448"
                                            d="M11.613,29.51a10.2,10.2,0,0,1-7.452-3.253.635.635,0,1,1,.931-.863,8.924,8.924,0,0,0,6.521,2.846,8.812,8.812,0,0,0,5.335-1.778.635.635,0,1,1,.762,1.016,10.078,10.078,0,0,1-6.1,2.032Z"
                                            transform="translate(-1.452 -9.187)" fill="#1c3495" />
                                        <path id="Path_132449" data-name="Path 132449"
                                            d="M27.635,20.526a.635.635,0,0,1-.508-1.016,8.809,8.809,0,0,0,1.778-5.335,8.9,8.9,0,0,0-.318-2.371.635.635,0,1,1,1.224-.339,10.18,10.18,0,0,1,.363,2.71,10.074,10.074,0,0,1-2.032,6.1A.635.635,0,0,1,27.635,20.526Z"
                                            transform="translate(-9.852 -4.014)" fill="#1c3495" />
                                        <path id="Path_132450" data-name="Path 132450"
                                            d="M19.337,4.319a.635.635,0,0,1-.466-.2A8.924,8.924,0,0,0,12.351,1.27,8.809,8.809,0,0,0,7.016,3.048a.635.635,0,0,1-.762-1.016A10.074,10.074,0,0,1,12.351,0,10.2,10.2,0,0,1,19.8,3.253a.635.635,0,0,1-.466,1.066Z"
                                            transform="translate(-2.189 0)" fill="#1c3495" />
                                        <path id="Path_132451" data-name="Path 132451"
                                            d="M.977,15.526a.635.635,0,0,1-.612-.466A10.18,10.18,0,0,1,0,12.351a10.078,10.078,0,0,1,2.032-6.1.635.635,0,1,1,1.016.762,8.911,8.911,0,0,0-1.461,7.706.635.635,0,0,1-.445.782.657.657,0,0,1-.166.023Z"
                                            transform="translate(0 -2.189)" fill="#1c3495" />
                                        <path id="Path_132452" data-name="Path 132452"
                                            d="M25.175,4.811h-2.54a.635.635,0,1,1,0-1.27H24.54V1.635a.635.635,0,0,1,1.27,0v2.54A.635.635,0,0,1,25.175,4.811Z"
                                            transform="translate(-8.028 -0.365)" fill="#1c3495" />
                                        <path id="Path_132453" data-name="Path 132453"
                                            d="M4.635,28.811A.635.635,0,0,1,4,28.175v-2.54A.635.635,0,0,1,4.635,25h2.54a.635.635,0,0,1,0,1.27H5.27v1.905A.635.635,0,0,1,4.635,28.811Z"
                                            transform="translate(-1.46 -9.123)" fill="#1c3495" />
                                    </g>
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>Behavioral Analysis (ABA)</h3>
                                <div class="slidetext">
                                    <p>
                                        For younger children with focus or impulse issues
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion_new">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                    viewBox="0 0 17.829 17.829">
                                    <g id="Group_50414" data-name="Group 50414" transform="translate(-2 -2)">
                                        <path id="Path_132290" data-name="Path 132290"
                                            d="M4.377,2A2.377,2.377,0,0,0,2,4.377V7.943A2.377,2.377,0,0,0,4.377,10.32H7.943A2.377,2.377,0,0,0,10.32,7.943V4.377A2.377,2.377,0,0,0,7.943,2ZM3.189,4.377A1.189,1.189,0,0,1,4.377,3.189H7.943A1.189,1.189,0,0,1,9.132,4.377V7.943A1.189,1.189,0,0,1,7.943,9.132H4.377A1.189,1.189,0,0,1,3.189,7.943Z"
                                            fill="#213f6c" fill-rule="evenodd" />
                                        <path id="Path_132291" data-name="Path 132291"
                                            d="M36.377,34A2.377,2.377,0,0,0,34,36.377v3.566a2.377,2.377,0,0,0,2.377,2.377h3.566a2.377,2.377,0,0,0,2.377-2.377V36.377A2.377,2.377,0,0,0,39.943,34Zm-1.189,2.377a1.189,1.189,0,0,1,1.189-1.189h3.566a1.189,1.189,0,0,1,1.189,1.189v3.566a1.189,1.189,0,0,1-1.189,1.189H36.377a1.189,1.189,0,0,1-1.189-1.189Z"
                                            transform="translate(-22.491 -22.491)" fill="#213f6c" fill-rule="evenodd" />
                                        <path id="Path_132292" data-name="Path 132292"
                                            d="M36,14.594A.594.594,0,0,1,36.594,14h.594a2.378,2.378,0,0,1,2.366,2.143l.186-.186a.594.594,0,0,1,.84.84l-1.189,1.189a.594.594,0,0,1-.84,0L37.363,16.8a.594.594,0,0,1,.84-.84l.141.141a1.189,1.189,0,0,0-1.156-.91h-.594A.594.594,0,0,1,36,14.594Z"
                                            transform="translate(-23.897 -8.434)" fill="#213f6c" />
                                        <path id="Path_132293" data-name="Path 132293"
                                            d="M16.16,40.16a.594.594,0,0,0,0-1.189h-.594a1.189,1.189,0,0,1-1.156-.91l.141.141a.594.594,0,1,0,.84-.84L14.2,36.174a.594.594,0,0,0-.84,0l-1.189,1.189a.594.594,0,1,0,.84.84l.186-.186a2.378,2.378,0,0,0,2.366,2.143Z"
                                            transform="translate(-7.028 -23.897)" fill="#213f6c" />
                                    </g>
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>Somatic Regulation & Breathwork</h3>
                                <div class="slidetext">
                                    <p>
                                        For calming nervous systems in teens
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion_new">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                    viewBox="0 0 16.116 17.769">
                                    <g id="Icon" transform="translate(-2.25 -1.25)">
                                        <path id="Path_132454" data-name="Path 132454"
                                            d="M18.366,4.349v11.57a3.1,3.1,0,0,1-3.1,3.1H5.349a3.1,3.1,0,0,1-3.1-3.1V4.349a3.1,3.1,0,0,1,3.1-3.1h9.917A3.1,3.1,0,0,1,18.366,4.349Zm-1.24,0a1.859,1.859,0,0,0-1.859-1.86H5.349A1.859,1.859,0,0,0,3.49,4.349v11.57a1.859,1.859,0,0,0,1.859,1.859h9.917a1.859,1.859,0,0,0,1.859-1.859Z"
                                            fill="#1c3495" fill-rule="evenodd" />
                                        <path id="Path_132455" data-name="Path 132455"
                                            d="M11,5.25a.62.62,0,0,1,0,1.24H6.87a.62.62,0,0,1,0-1.24Z"
                                            transform="translate(-0.694 -0.694)" fill="#1c3495" fill-rule="evenodd" />
                                        <path id="Path_132456" data-name="Path 132456"
                                            d="M15.134,9.25a.62.62,0,0,1,0,1.24H6.87a.62.62,0,0,1,0-1.24Z"
                                            transform="translate(-0.694 -1.388)" fill="#1c3495" fill-rule="evenodd" />
                                        <path id="Path_132457" data-name="Path 132457"
                                            d="M15.134,13.25a.62.62,0,0,1,0,1.24H6.87a.62.62,0,0,1,0-1.24Z"
                                            transform="translate(-0.694 -2.083)" fill="#1c3495" fill-rule="evenodd" />
                                        <path id="Path_132458" data-name="Path 132458"
                                            d="M15.134,17.25a.62.62,0,0,1,0,1.24H6.87a.62.62,0,1,1,0-1.24Z"
                                            transform="translate(-0.694 -2.777)" fill="#1c3495" fill-rule="evenodd" />
                                    </g>
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>Teen Journaling + Emotional Tracking</h3>
                                <div class="slidetext">
                                    <p>
                                        As homework between sessions
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        All Sessions Are Gentle, Paced With Trust, And Co-Designed With The Child’s Emotional
                        Capacity.
                    </p>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/student-wellness/img_girl.png')}}" alt="Child counselling at Mind Rewire, Pune" />
                </div>
            </div>
        </div>
    </div>

    <div class="section5" id="section5">
        <div class="common_fullrow">
            <div class="custom_container">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">From Shutdown to Self-Expression : <br>
                        <span class="blue"> A Case Snapshot</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        <strong>Age :</strong> 9 Years<br>
                        <strong>Concern :</strong> Frequent Tantrums, Inability To Explain Emotions, School
                        Refusal<br>
                        <strong>Plan :</strong> Play Therapy + Parental
                        Alignment Sessions

                    </p>
                    <p><strong>Outcome (After 6 Sessions) :</strong></p>
                    <ul class="with_bullet pt-0">
                        <li>70% reduction in meltdowns</li>
                        <li>Expressed feelings using “emotion cards”</li>
                        <li>Independently used calming tools when upset</li>
                        <li>Started enjoying school again</li>
                    </ul>
                    <p><strong>Parent Feedback :</strong></p>
                    <div class="quote">
                        We Stopped Trying To ‘Fix’ Him. Mind Rewire Helped Us Actually Understand Him. That Changed
                        Everything.
                    </div>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/student-wellness/img_snapshot.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="last_bluebox" id="last_bluebox">
        <div class="custom_container">
            <div class="common_textbox textbox full" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white center">If Your Child Is Struggling, <br>
                    <span class="lightpink">You Don’t Have to Figure It Out Alone</span>
                </h2>
                <p>
                    Whether Your Teen Is Withdrawing Or Your Child Is Acting Out—We Can Help You Decode <br> What’s
                    Underneath And Build Real
                    Emotional Growth, Together.
                </p>
                <div class="btnrow center">
                    <a href="{{url('help')}}" class="cta_btn animate_arrow animation_white_line bgpink">
                        Help My Child
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
                        Book a Discovery Session
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
    $(document).ready(function () {
        // accordion js start
        $('.accordion_wrap').find(".accordion_new:first").addClass('active').find(".slidetext").show();
        $(".accordion_new").click(function () {
            $(this).addClass("active");
            $(this).siblings(".accordion_new").removeClass("active");

            $(this).find(".slidetext").slideDown();
            $(this).siblings(".accordion_new").find(".slidetext").slideUp();
        });
        // accordion js end
    });
</script>
@stop