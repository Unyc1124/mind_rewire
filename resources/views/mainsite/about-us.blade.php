@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>About Mind Rewire – Founded by Experts. Designed for You.</title>
<meta name="description"
    content="Discover the story behind Mind Rewire—a modern psychology brand blending neuroscience, lived empathy, and trauma-informed therapy. Meet the founders who turned personal experience into a movement for mental clarity and emotional freedom.">
<meta name="keywords"
    content="about Mind Rewire, Sumedha psychologist founder, trauma therapy India, psychology meets tech, origin of mental wellness platform, Mind Rewire mission, emotional clarity approach">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@skybridge" />
<meta name="twitter:creator" content="@skybridge" />
<meta name="twitter:title" content="About Mind Rewire – Founded by Experts. Designed for You.">
<meta name="twitter:description"
    content="Discover the story behind Mind Rewire—a modern psychology brand blending neuroscience, lived empathy, and trauma-informed therapy. Meet the founders who turned personal experience into a movement for mental clarity and emotional freedom.">
<meta name="twitter:image" content="{{ url('favicon.png') }}">

<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="About Mind Rewire – Founded by Experts. Designed for You." />
<meta property="og:description"
    content="Discover the story behind Mind Rewire—a modern psychology brand blending neuroscience, lived empathy, and trauma-informed therapy. Meet the founders who turned personal experience into a movement for mental clarity and emotional freedom." />
@stop


@section('css')

<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/about-us/about-us.css') }}">
@stop

@section('content')


<div class="page_wrap">
    <div class="top_banner">
        <div class="custom_container align-items-center">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white">
                    Where Healing Is Designed, <br>
                    <span class="lightpink"> Not Just Delivered.</span>
                </h2>
                <strong class="sub_heading white">
                    Founded By A Psychologist And A Systems Strategist, Mind Rewire Exists To Transform How
                    We Experience
                    Therapy—From Reactive Coping To Conscious Rewiring.
                </strong>
                <p>
                    We Don’t Believe In Fixing What’s Not Broken. We Believe In Empowering You To Own Your Emotions,
                    Your Evolution, And
                    Your Emotional Freedom—Using Both Science And Soul.
                </p>
                <div class="btnrow">
                    <a href="{{url('founders')}}" class="cta_btn animate_arrow animation_white_line bgpink">
                        Meet Our Founders
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
                <img src="{{ url('assets/images/about-us/img_top_banner.png') }}" alt="image" />
            </div>
        </div>
    </div>

    <div class="section1" id="section1">
        <div class="common_fullrow">
            <div class="custom_container align-items-start">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">Born From Burnout. <br>
                        <span class="blue">Built For Breakthroughs.</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        Mind Rewire was founded by <strong>Sumedha</strong>, a former HR leader turned psychologist,
                        and <strong>Anand
                            Singh</strong>,
                        a technologist building
                        systems for Fortune 500 firms.
                    </p>
                    <p>
                        They came from opposite worlds psychology and corporate systems—but met at the same
                        insight:<br>
                        <strong>Mental health isn’t a soft subject. It’s the core system we all run on.</strong>
                    </p>
                    <p>
                        That’s why Mind Rewire combines human empathy with psychological precision.<br>
                        So healing becomes accessible, repeatable, and personal.
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('founders')}}" class="cta_btn animation_white_line animate_arrow">
                            Read the Full Story
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
                        <img src="{{ url('assets/images/about-us/img_breakthroughs.png') }}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section2" id="section2">
        <div class="custom_container">
            <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">We Don’t Fix.
                    <span class="blue">We Rewire. Together.</span>
                </h2>
                <div class="animate_border center"></div>
                <strong class="sub_heading center">
                    Life doesn’t need a new you - it needs a more empowered you.
                </strong>
            </div>
            <div class="boxwrap">
                <ul>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <a>
                            <div class="imgbox">
                                <img src="{{ url('assets/images/about-us/img_together1.png') }}" alt="image" />
                            </div>
                            <div class="textbox">
                                <h3>Rewiring Over Coping</h3>
                                <p>
                                    We go deeper than surface-level symptom relief. Our goal is long-term pattern
                                    change.
                                </p>
                            </div>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <a>
                            <div class="imgbox">
                                <img src="{{ url('assets/images/about-us/img_together2.png') }}" alt="image" />
                            </div>
                            <div class="textbox">
                                <h3>Control Over Compliance</h3>
                                <p>
                                    No forced affirmations or rigid steps. Just emotional control that grows with
                                    you.
                                </p>
                            </div>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <a>
                            <div class="imgbox">
                                <img src="{{ url('assets/images/about-us/img_together3.png') }}" alt="image" />
                            </div>
                            <div class="textbox">
                                <h3>Neuro Meets Narrative</h3>
                                <p>
                                    We combine brain science with story healing—so your past doesn’t block your
                                    future.
                                </p>
                            </div>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <a>
                            <div class="imgbox">
                                <img src="{{ url('assets/images/about-us/img_together4.png') }}" alt="image" />
                            </div>
                            <div class="textbox">
                                <h3>Systems Thinking + Soul Work</h3>
                                <p>
                                    From strategy decks to therapy rooms—we use the tools of both worlds to guide
                                    transformation.
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="btnrow center" data-aos="fade-up" data-aos-duration="1500">
                    <a href="{{url('assessments')}}" class="cta_btn animation_white_line animate_arrow">
                        Explore Our Methodology
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
                    <a href="{{url('success-stories')}}" class="cta_btn animation_white_line animate_arrow border_btn">
                        Client Transformation Stories
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
        <div class="custom_container">
            <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">Mind Rewire vs.
                    <span class="blue">“Traditional Therapy”</span>
                </h2>
                <div class="animate_border center"></div>
            </div>
            <div class="common_wrap">
                <div class="common" data-aos="fade-up" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ url('assets/images/about-us/icon_neuro_based.svg') }}" alt="icon" />
                    </div>
                    <h3>Neuro-Based Healing</h3>
                    <p>Vagus Nerve, Somatic Tools</p>
                </div>
                <div class="common" data-aos="fade-up" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ url('assets/images/about-us/icon_safe_space.svg') }}" alt="icon" />
                    </div>
                    <h3>Emotionally Safe Space</h3>
                    <p>No Labels. Just Listening.</p>
                </div>
                <div class="common" data-aos="fade-up" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ url('assets/images/about-us/icon_al_informed.svg') }}" alt="icon" />
                    </div>
                    <h3>AI-Informed Access</h3>
                    <p>Smart Forms + Digital Flow</p>
                </div>
                <div class="common" data-aos="fade-up" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ url('assets/images/about-us/icon_custom_tailored.svg') }}" alt="icon" />
                    </div>
                    <h3>Custom-Tailored for You</h3>
                    <p>Every Plan Is Built Around You</p>
                </div>
            </div>
            <strong class="b_text" data-aos="fade-up" data-aos-duration="1500">Most Therapy Tries To Fit You Into
                The Model.
                <span class="blue"> We Build The Model Around You.</span>
            </strong>
        </div>
    </div>

    <div class="section4" id="section4">
        <div class="custom_container">
            <div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">
                    <span class="blue">Meet the Minds Behind </span> Mind Rewire
                </h2>
                <div class="animate_border center"></div>
            </div>
            <div class="whitebox_wrap">
                <div class="whitebox">
                    <div class="absicon" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/about-us/img_sumedha.png') }}" alt="icon" />
                    </div>
                    <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                        <div class="toptext">
                            <h3>Sumedha</h3>
                            <strong class="deg">Psychologist | Founder, Mind Rewire | TedX Speaker</strong>
                            <span class="field">Engineer → HR Leader → Psychologist</span>
                            <div class="animate_border"></div>
                            <p>
                                “I’ve walked through trauma myself. I became the therapist I wish I had when I needed
                                one.”
                            </p>
                        </div>
                        <ul class="with_bullet">
                            <li>
                                Certified in CBT, REBT, ABA, NLP
                            </li>
                            <li>
                                15+ Years Of Clinical & Corporate Mental Health Experience
                            </li>
                            <li>
                                Works With Children, Teens, Adults, Women, And Professionals
                            </li>
                        </ul>
                        <a href="{{url('founders/#section1')}}"
                            class="cta_btn animation_white_line animate_arrow border_btn">
                            View Full Bio
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
                <div class="whitebox">
                    <div class="absicon" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/about-us/img_anand_singh.png') }}" alt="icon" />
                    </div>
                    <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                        <div class="toptext">
                            <h3>Anand Singh</h3>
                            <strong class="deg">Co-Founder & Systems Strategist</strong>
                            <span class="field">Tech Consultant To Fortune 500 Brands.</span>
                            <div class="animate_border"></div>
                            <p>
                                “We don’t just talk about healing. We design it, like any great system should be.”
                            </p>
                        </div>
                        <ul class="with_bullet">
                            <li>
                                Expert In Generative & Agentic AI
                            </li>
                            <li>
                                Architect Of Mind Rewire’s Scalability + Digital
                                Wellness Experience
                            </li>
                            <li>
                                Focused On
                                Access, Scale, And Intelligence In Mental Health
                            </li>
                        </ul>
                        <a href="{{url('founders/#section3')}}"
                            class="cta_btn animation_white_line animate_arrow border_btn">
                            View Full Bio
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
        </div>
    </div>

    <div class="section5" id="section5">
        <div class="common_fullrow">
            <div class="custom_container align-items-start">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">More Than a Brand. <br>
                        <span class="blue">A Revolution in Mental Clarity.</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        We envision a world where psychology isn’t crisis care—it’s daily fuel.
                    </p>
                    <ul class="with_bullet">
                        <li>
                            <strong>Empathy First –</strong> We listen before we label.
                        </li>
                        <li>
                            <strong>Precision Therapy –</strong> Everything we do is based on data, not guesswork.
                        </li>
                        <li>
                            <strong>Growth, Not Guilt –</strong> We evolve with your pace and your voice.
                        </li>
                        <li>
                            <strong>Tools That Work –</strong> From neuroscience to narrative therapy, every tool is
                            proven and personal.
                        </li>
                        <li>
                            <strong>Tech with a Heart –</strong> AI helps us reach, but humans do the healing.
                        </li>
                    </ul>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/about-us/img_revolution.png') }}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
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
                    <h2 class="c_heading white">This Is More Than About Us. <br>
                        <span class="lightpink">It’s Also About You.</span>
                    </h2>
                    <p>
                        Because Your Mental Wellness Deserves More Than Good Intentions. It Deserves A Roadmap, A
                        Guide, And A Place Where
                        Healing Is Designed Just For You.
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
                        <a href="{{url('book-session')}}"
                            class="cta_btn animate_arrow animation_white_line border_white">
                            Start Your Session
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
                    <img src="{{ url('assets/images/about-us/img_last_bluebox.png') }}" alt="image" />
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