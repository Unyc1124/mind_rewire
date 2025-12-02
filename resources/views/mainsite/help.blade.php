@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Self Help & Support | Mind Rewire — Psychologists in Pune</title>
<meta name="description"
    content="Self-help guides, FAQs and session prep from Mind Rewire — psychologists in Pune with 15+ years clinical experience. Practical tools for anxiety, stress, trauma recovery and family support.">
<meta name="keywords"
    content="self help mental health Pune, therapy FAQs Pune, anxiety coping tools Pune, session prep mental health, Mind Rewire support, trauma recovery tips, student support Pune">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@mindrewire" />
<meta name="twitter:creator" content="@mindrewire" />
<meta name="twitter:title" content="Self Help & Support | Mind Rewire — Psychologists in Pune">
<meta name="twitter:description"
    content="Practical self-help resources and answers from Mind Rewire — psychologists in Pune with 15+ years clinical experience.">
<meta name="twitter:image" content="{{ url('assets/images/common-images/help-og.png') }}">

<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Self Help & Support | Mind Rewire — Psychologists in Pune" />
<meta property="og:description"
    content="Practical self-help resources and answers from Mind Rewire — psychologists in Pune with 15+ years clinical experience." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/help/help.css') }}">
@stop

@section('content')

<!-- page_wrap Start -->
<div class="page_wrap">
    <div class="top_banner">
        <div class="common_patch patch1">
            <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="icon">
        </div>
        <div class="common_patch patch2">
            <img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="icon">
        </div>
        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white center">
                    Navigate <span class="lightpink"> Mind Rewire </span>With Ease
                </h2>
                <strong class="sub_heading white center">
                    Get The Emotional Clarity You Need—No Waiting, No Jargon
                </strong>
            </div>
        </div>
    </div>

    <div class="section1" id="section1">
        <div class="common_fullrow">
            <div class="custom_container">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">Your Clarity Companion: <br>
                        <span class="blue">Real Answers for Real Emotions</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        At Mind Rewire, we believe emotional clarity shouldn’t be confusing. That’s why this Self
                        Help page exists—not as a
                        substitute for therapy, but as your personal clarity companion. Whether you’re unsure how to
                        begin a session, curious
                        about the difference between CBT and NLP, or wondering how to use your UNTANGLE deck, this
                        is your go-to guide. No
                        complicated forms. No psychology-speak. Just honest answers, grounded in real-life therapy,
                        real stress, and real
                        people.
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{url('solutions')}}" class="cta_btn animation_white_line animate_arrow">
                            Explore Our Services
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
                        <a href="{{url('book-session')}}" class="cta_btn animation_white_line animate_arrow border_btn">
                            Book a Session
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
                        <img src="{{ url('assets/images/help/img_real_emotions.png')}}" alt="image" />
                        <div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                        </div>
                    </div>
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
</div>
<!-- page_wrap End -->

@stop

@section('footer_script')
<script>
    $(document).ready(function () {
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

</script>
@stop