@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Book a Therapy or Counselling Session | Psychologist in Pune — Mind Rewire</title>
    <meta name="description"
        content="Book a therapy or counselling session with Mind Rewire — psychologists in Pune offering anxiety, depression, trauma, child & teen counselling. 15+ years clinical experience, online and in-person slots available.">
    <meta name="keywords"
        content="book therapy Pune, psychologist Pune booking, counselling appointment Pune, online therapy India, child counselling booking, anxiety therapy Pune">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@mindrewire" />
    <meta name="twitter:creator" content="@mindrewire" />
    <meta name="twitter:title" content="Book a Therapy or Counselling Session | Mind Rewire">
    <meta name="twitter:description"
        content="Book 1:1 therapy with experienced psychologists in Pune — anxiety, trauma, child & teen counselling. 15+ years clinical experience.">
    <meta name="twitter:image" content="{{ url('assets/images/common-images/book-og-image.png') }}">

    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Book a Therapy or Counselling Session | Mind Rewire" />
    <meta property="og:description"
        content="Book 1:1 therapy with experienced psychologists in Pune — anxiety, trauma, child & teen counselling. 15+ years clinical experience." />
@stop

@section('css')
    <link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ version_url('assets/css/book-session/book-session.css') }}">
@stop

@section('content')

    <!-- page_wrap Start -->
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
                        Your First Step
                        <span class="lightpink"> Toward Clarity Starts Here</span>
                    </h2>
                    <strong class="sub_heading white center">
                        Book Your Session In Minutes. Choose Your Service, Match With The Right Expert,<br> And Get
                        Started—Confidentially And
                        Comfortably.
                    </strong>
                    <p>
                        Whether You’re Seeking Therapy, Career Guidance, Parenting Support, Or Emotional Coaching - <br>
                        This
                        Page Helps You Get
                        Started. No Paperwork. No Confusion. Just Clarity.
                    </p>
                </div>
            </div>
        </div>

        <div class="details_wrap" id="details_wrap">
            <div class="custom_container">
                <div class="session_type" data-aos="fade-up" data-aos-duration="1500">
                    <div class="owl-carousel session_carousel">

                        @foreach ($therapy_pricing as $key => $value)
                            @php
                                if ($key == 0) {
                                    $first_id = $value->hashed_id;
                                }
                            @endphp

                            <div class="item @if ($key == 0) active @endif"
                                onclick="selectPlan('{{ $value->hashed_id }}')">
                                <div class="icon">
                                    <img src="{{ url($value->therapy_image) }}" alt="icon" />
                                </div>

                                @if ($value->therapy_slug == 'individual_therapy')
                                    <h3>Individual <span class="blue">Therapy</span></h3>
                                @elseif($value->therapy_slug == 'student_teen_therapy')
                                    <h3>Student/Teen <span class="blue">Therapy</span></h3>
                                @elseif($value->therapy_slug == 'parent_child_therapy')
                                    <h3>Parent-Child <span class="blue">Session</span></h3>
                                @elseif($value->therapy_slug == 'career_counselling')
                                    <h3>Career <span class="blue">Counselling</span></h3>
                                @elseif($value->therapy_slug == 'trauma_recovery_session')
                                    <h3>Trauma <span class="blue">Recovery Session</span></h3>
                                @elseif($value->therapy_slug == 'corporate_wellness_consultation')
                                    <h3>Corporate <span class="blue">Wellness Consultation</span></h3>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="doctor_details">
                    <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ url('assets/images/book-session/img_sumedha_singh.png') }}" alt="Sumedha Singh — Psychologist, Founder of Mind Rewire" />
                    </div>
                    <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                        <div class="b_row">
                            <h3>Sumedha Singh</h3>
                            <strong class="deg">
                                Psychologist | Founder, Mind Rewire | TedX Speaker
                            </strong>
                            <span class="exp">15+ Years Of Experience</span>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="{{ url('assets/images/common-images/icon_location.svg') }}"
                                            alt="icon" />
                                    </div>
                                    Pune
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ url('assets/images/common-images/icon_languages.svg') }}"
                                            alt="icon" />
                                    </div>
                                    English, Hindi, Marathi
                                </li>
                            </ul>
                        </div>
                        <div class="b_row">
                            <strong class="btext">Expertise</strong>
                            <ul class="boxtype">
                                <li>Emotional Healing</li>
                                <li>Trauma Recovery</li>
                                <li>Mental Resilience</li>
                                <li>Inner Strength</li>
                                <li>Healing Support</li>
                                <li>Psychological Wellness</li>
                            </ul>
                        </div>
                        <div class="b_row">
                            <strong class="btext">Available Via</strong>
                            <span class="gtext mb-3">Video | Voice | In Person</span>
                            <strong class="btext">Next Availability</strong>
                            <span class="gtext">Today, 02:00 PM</span>
                        </div>
                        <div class="b_row">
                            {{-- <strong class="btext mb-4">Starts : ₹ 1000/ 50 min</strong> --}}
                            <a class="cta_btn animation_white_line animate_arrow border_btn"
                                id="book_consulting" style="cursor: pointer;">
                                Book Now
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
                </div>
                <div class="addtype" data-aos="fade-up" data-aos-duration="1500">
                    <div class="lbox">
                        <h3>Need Help Choosing? We’ve Got You!</h3>
                        <p>You Can Connect With Our Team And They Will Assist You In Finding A Therapist.</p>
                    </div>
                    <div class="rbox">
                        <a href="https://wa.me/917758023819" target="_blank"
                            class="cta_btn animation_white_line animate_arrow bgpink">
                            <img src="{{ url('assets/images/common-images/icon_whatsapp.png') }}" alt="icon" />
                            Chat with us on WhatsApp
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

        <div class="last_bluebox" id="last_bluebox">
            <div class="custom_container">
                <div class="common_textbox textbox full" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading white center">You’ve Taken the First Step. <br>
                        <span class="lightpink">Now Let’s Take the Next—Together.</span>
                    </h2>
                    <p>
                        Whether It’s A Child’s Confusion, A Professional’s Burnout, Or A Parent’s <br> Doubt—Our
                        Assessments
                        Bring Emotional Clarity
                        That Makes Planning <br> Easier, Faster, And Smarter.
                    </p>
                    <div class="btnrow center">
                        <a href="{{ url('booking') }}" class="cta_btn animate_arrow animation_white_line bgpink">
                            Book My Session
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
                        <a href="{{ url('contact-us') }}"
                            class="cta_btn animate_arrow animation_white_line border_white">
                            Talk to an Expert First
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
            </div>
            <div class="common_patch" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/common-images/patch_pink.svg') }}" alt="image" />
            </div>
        </div>
    </div>
    <!-- page_wrap End -->

@stop

@section('footer_script')
    <script src="{{ version_url('assets/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {

            // commoncarousel js Start
            function commoncarouseljs(selector, itemsToShow, margin, responsiveSettings, autoplay = false,
                autoplaySpeed = 3000, loop = false) {
                $(selector).each(function() {
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
                    owl.on('initialized.owl.carousel changed.owl.carousel', function(event) {
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

            // session_carousel js Start
            commoncarouseljs('.session_carousel', 5, 5, {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1200: {
                    items: 4
                },
            }, true, 5000, false); // autoplay/loop


            $(".session_carousel .item").on("click", function() {
                $(this).closest(".session_carousel").find(".item").removeClass("active");
                $(this).addClass("active");
            });
            // session_carousel js End

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
            $(document).on("click", ".faqtab_nav a", function() {
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

        let selected_plan = '{{ $first_id }}';

        function selectPlan(id) {
            selected_plan = id;
        }

        $('#book_consulting').on('click', function() {
            window.location.href = "{{ url('booking') }}" + `/${selected_plan}`;
        });
    </script>
@stop
