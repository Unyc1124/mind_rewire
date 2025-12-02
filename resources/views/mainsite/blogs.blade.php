@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Mind Rewire Blog — Psychologist in Pune | Anxiety, Depression & Counselling Articles</title>
<meta name="description"
    content="Read articles from Mind Rewire — psychologists in Pune — on anxiety, depression, trauma recovery, child & teen counselling, and practical therapy tips. Evidence-based resources and lived-experience insights.">
<meta name="keywords"
    content="mental health blog Pune, anxiety articles, depression help, therapy tips Pune, counsellor blog, child counselling articles, trauma recovery blog">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@mindrewire" />
<meta name="twitter:creator" content="@mindrewire" />
<meta name="twitter:title" content="Mind Rewire Blog — Psychologist in Pune | Anxiety, Depression & Counselling Articles">
<meta name="twitter:description"
    content="Practical, evidence-based articles on anxiety, depression, trauma and counselling from Mind Rewire — psychologists in Pune with 15+ years clinical experience.">
<meta name="twitter:image" content="{{ url('assets/images/common-images/blogs-og.png') }}">

<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Mind Rewire Blog — Psychologist in Pune | Anxiety, Depression & Counselling Articles" />
<meta property="og:description"
    content="Practical, evidence-based articles on anxiety, depression, trauma and counselling from Mind Rewire — psychologists in Pune with 15+ years clinical experience." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/blogs/blogs.css') }}">
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
                    Ideas That Heal.
                    <span class="lightpink"> Stories That Stick.</span>
                </h2>
                <strong class="sub_heading white center">
                    Weekly Articles Designed To Make Emotional Wellness Understandable, Practical, And Part Of
                    Everyday Life.
                </strong>
                <p>
                    The Mind Rewire Journal Is A Curated Space Where Psychology Meets Real Life.<br>
                    From Anxiety Hacks To Parenting Dilemmas, From Trauma Awareness To Career Clarity—<br>
                    You’ll Find Reflections, Tools, And Breakthroughs You Can Actually Use.
                </p>
            </div>
        </div>
    </div>

    <div class="articale_wrap" id="articale_wrap">
        <div class="custom_container">
            <div class="common_patch patch1" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
            </div>
            <div class="common_patch patch2" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
            </div>
            <div data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">
                    Browse Articles
                    <span class="blue"> by Theme</span>
                </h2>
                <div class="animate_border center"></div>
            </div>
            <!-- customscroll add for scroll -->
            <div class="filter_row customscroll mb-0" data-aos="fade-up" data-aos-duration="1500">
                <ul class="d-none">
                    <li>Emotions & Self-Awareness</li>
                    <li class="active">Career & Stress</li>
                    <li>Therapy Insights</li>
                    <li>Parenting & Teen Psychology</li>
                    <li>Trauma & Recovery</li>
                </ul>
            </div>
            <div class="blogs_wrap" data-aos="fade-up" data-aos-duration="1500">
                <div class="blog">
                    <div class="topbox">
                        <a href="{{url('chai-for-loneliness-your-everyday-friend-for-anxiety-and-stress')}}"
                            class="imgbox">
                            <img src="{{ url('assets/images/blogs/img_chai_for_loneliness.png')}}" alt="image" />
                        </a>
                        <div class="textbox">
                            <h3>
                                Chai for Loneliness —Your Everyday Friend for Anxiety and Stress
                            </h3>
                            <ul>
                                <li>Anxiety</li>
                                <li>Depression</li>
                            </ul>
                            <p>
                                Your warm buddy for anxiety and stress.I made this little desi ritual for the hours
                                that feel too quiet. […]
                            </p>
                        </div>
                    </div>
                    <div class="btmrow">
                        <div class="blogby">
                            <img src="{{ url('assets/images/blogs/icon_user.svg')}}" alt="icon" />
                            <span>Sumedha Singh</span>
                        </div>
                        <div class="blogtime">
                            <img src="{{ url('assets/images/blogs/icon_clock.svg')}}" alt="icon" />
                            <span>15 Min Read</span>
                        </div>
                        <div class="btnrow">
                            <a href="{{url('chai-for-loneliness-your-everyday-friend-for-anxiety-and-stress')}}"
                                class="cta_btn animation_white_line animate_arrow bggreen">
                                Read More
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
                <div class="blog">
                    <div class="topbox">
                        <a href="{{ url('nervous-system-overreaction-explained') }}" class="imgbox">
                            <img src="{{ url('assets/images/blogs/img_blog1.png') }}" alt="image" />
                        </a>
                        <div class="textbox">
                            <h3>
                                Why You’re Not Overreacting - Your Nervous System Might Be!
                            </h3>
                            <ul>
                                <li>Anxiety</li>
                                <li>Depression</li>
                                <li>Schizophrenia</li>
                            </ul>
                            <p>
                                Ever been told you’re “too sensitive” or “overreacting”?
                                Maybe it was after a […]
                            </p>
                        </div>
                    </div>
                    <div class="btmrow">
                        <div class="blogby">
                            <img src="{{ url('assets/images/blogs/icon_user.svg') }}" alt="icon" />
                            <span>Sumedha Singh</span>
                        </div>
                        <div class="blogtime">
                            <img src="{{ url('assets/images/blogs/icon_clock.svg') }}" alt="icon" />
                            <span>15 Min Read</span>
                        </div>
                        <div class="btnrow">
                            <a href="{{ url('nervous-system-overreaction-explained') }}"
                                class="cta_btn animation_white_line animate_arrow bggreen">
                                Read More
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
                <div class="blog">
                    <div class="topbox">
                        <a href="{{ url('help-child-shutting-down') }}" class="imgbox">
                            <img src="{{ url('assets/images/blogs/img_blog2.png') }}" alt="image" />
                        </a>
                        <div class="textbox">
                            <h3>
                                How to Respond When Your Child Shuts Down
                            </h3>
                            <ul>
                                <li>Anxiety</li>
                                <li>Depression</li>
                            </ul>
                            <p>
                                It’s dinner time. You ask your child how school was.
                                Silence. A shrug. Maybe
                                […]
                            </p>
                        </div>
                    </div>
                    <div class="btmrow">
                        <div class="blogby">
                            <img src="{{ url('assets/images/blogs/icon_user.svg') }}" alt="icon" />
                            <span>Sumedha Singh</span>
                        </div>
                        <div class="blogtime">
                            <img src="{{ url('assets/images/blogs/icon_clock.svg') }}" alt="icon" />
                            <span>15 Min Read</span>
                        </div>
                        <div class="btnrow">
                            <a href="{{ url('help-child-shutting-down') }}"
                                class="cta_btn animation_white_line animate_arrow bggreen">
                                Read More
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
                <div class="blog">
                    <div class="topbox">
                        <a href="{{ url('chronic-fatigue-despite-sleep') }}" class="imgbox">
                            <img src="{{ url('assets/images/blogs/img_blog3.png') }}" alt="image" />
                        </a>
                        <div class="textbox">
                            <h3>
                                Why You’re Tired Even When You Sleep
                            </h3>
                            <ul>
                                <li>Depression</li>
                                <li>Schizophrenia</li>
                            </ul>
                            <p>
                                You’ve clocked your 7–8 hours. No late-night screen marathons. Maybe even chamomile
                                […]
                            </p>
                        </div>
                    </div>
                    <div class="btmrow">
                        <div class="blogby">
                            <img src="{{ url('assets/images/blogs/icon_user.svg') }}" alt="icon" />
                            <span>Sumedha Singh</span>
                        </div>
                        <div class="blogtime">
                            <img src="{{ url('assets/images/blogs/icon_clock.svg') }}" alt="icon" />
                            <span>15 Min Read</span>
                        </div>
                        <div class="btnrow">
                            <a href="{{ url('chronic-fatigue-despite-sleep') }}"
                                class="cta_btn animation_white_line animate_arrow bggreen">
                                Read More
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
                <div class="blog">
                    <div class="topbox">
                        <a href="{{ url('understanding-trauma-bonds') }}" class="imgbox">
                            <img src="{{ url('assets/images/blogs/img_blog4.png') }}" alt="image" />
                        </a>
                        <div class="textbox">
                            <h3>
                                Understanding Trauma Bonds (Without Judgment)
                            </h3>
                            <ul>
                                <li>Depression</li>
                                <li>Schizophrenia</li>
                            </ul>
                            <p>
                                Some connections feel magnetic—intense, emotional, even spiritual. And yet, they
                                […]
                            </p>
                        </div>
                    </div>
                    <div class="btmrow">
                        <div class="blogby">
                            <img src="{{ url('assets/images/blogs/icon_user.svg') }}" alt="icon" />
                            <span>Sumedha Singh</span>
                        </div>
                        <div class="blogtime">
                            <img src="{{ url('assets/images/blogs/icon_clock.svg') }}" alt="icon" />
                            <span>15 Min Read</span>
                        </div>
                        <div class="btnrow">
                            <a href="{{ url('understanding-trauma-bonds') }}"
                                class="cta_btn animation_white_line animate_arrow bggreen">
                                Read More
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
                <div class="blog">
                    <div class="topbox">
                        <a href="{{ url('first-therapy-session-guide') }}" class="imgbox">
                            <img src="{{ url('assets/images/blogs/img_blog5.png') }}" alt="image" />
                        </a>
                        <div class="textbox">
                            <h3>
                                What Actually Happens in Your First Therapy Session?
                            </h3>
                            <ul>
                                <li>Anxiety</li>
                                <li>Schizophrenia</li>
                            </ul>
                            <p>
                                The idea of starting therapy can feel overwhelming.
                                Will I have to share
                                […]
                            </p>
                        </div>
                    </div>
                    <div class="btmrow">
                        <div class="blogby">
                            <img src="{{ url('assets/images/blogs/icon_user.svg') }}" alt="icon" />
                            <span>Sumedha Singh</span>
                        </div>
                        <div class="blogtime">
                            <img src="{{ url('assets/images/blogs/icon_clock.svg') }}" alt="icon" />
                            <span>15 Min Read</span>
                        </div>
                        <div class="btnrow">
                            <a href="{{ url('first-therapy-session-guide') }}"
                                class="cta_btn animation_white_line animate_arrow bggreen">
                                Read More
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
        </div>
    </div>

    <div class="meetvoice" id="meetvoice">
        <div class="custom_container">
            <div class="two_column">
                <div class="textbox">
                    <div class="topbox" data-aos="fade-up" data-aos-duration="1500">
                        <h2 class="c_heading">
                            Meet the Voice <br>
                            <span class="blue"> Behind the Journal</span>
                        </h2>
                        <div class="animate_border"></div>
                    </div>
                    <h3 data-aos="fade-up" data-aos-duration="1500">Sumedha</h3>
                    <strong class="deg" data-aos="fade-up" data-aos-duration="1500">
                        Psychologist | Founder, Mind Rewire
                    </strong>
                    <p data-aos="fade-up" data-aos-duration="1500">
                        I don’t just write from textbooks—I write from lived experience. These reflections come from
                        years of therapy, HR work,
                        and walking through emotional fog myself. You’ll find honesty, science, and compassion in
                        every post.
                    </p>
                    <div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
                        <a href="{{ url('book-session') }}" class="cta_btn animation_white_line animate_arrow">
                            Read Sumedha’s Articles
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
                        <a href="{{ url('founders') }}" class="cta_btn animation_white_line animate_arrow border_btn">
                            Meet the Founders
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
                    <img src="{{ url('assets/images/blogs/img_sumedha.png') }}" alt="image" />
                </div>
            </div>
        </div>
    </div>

    <div class="latest_articles" id="latest_articles">
        <div class="custom_container">
            <div class="topbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading center">
                    <span class="blue">Latest </span>Articles
                </h2>
                <div class="animate_border center"></div>
            </div>
            <div class="blogs_wrap" data-aos="fade-up" data-aos-duration="1500">
                <div class="blog">
                    <div class="topbox">
                        <a href="{{url('chai-for-loneliness-your-everyday-friend-for-anxiety-and-stress')}}"
                            class="imgbox">
                            <img src="{{ url('assets/images/blogs/img_chai_for_loneliness.png')}}" alt="image" />
                        </a>
                        <div class="textbox">
                            <h3>
                                Chai for Loneliness —Your Everyday Friend for Anxiety and Stress
                            </h3>
                            <ul>
                                <li>Anxiety</li>
                                <li>Depression</li>
                            </ul>
                            <p>
                                Your warm buddy for anxiety and stress.I made this little desi ritual for the hours
                                that feel too quiet. […]
                            </p>
                        </div>
                    </div>
                    <div class="btmrow">
                        <div class="blogby">
                            <img src="{{ url('assets/images/blogs/icon_user.svg')}}" alt="icon" />
                            <span>Sumedha Singh</span>
                        </div>
                        <div class="blogtime">
                            <img src="{{ url('assets/images/blogs/icon_clock.svg')}}" alt="icon" />
                            <span>15 Min Read</span>
                        </div>
                        <div class="btnrow">
                            <a href="{{url('chai-for-loneliness-your-everyday-friend-for-anxiety-and-stress')}}"
                                class="cta_btn animation_white_line animate_arrow bggreen">
                                Read More
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
                <div class="blog">
                    <div class="topbox">
                        <a href="{{ url('nervous-system-overreaction-explained') }}" class="imgbox">
                            <img src="{{ url('assets/images/blogs/img_blog1.png') }}" alt="image" />
                        </a>
                        <div class="textbox">
                            <h3>
                                Why You’re Not Overreacting - Your Nervous System Might Be!
                            </h3>
                            <ul>
                                <li>Anxiety</li>
                                <li>Depression</li>
                                <li>Schizophrenia</li>
                            </ul>
                            <p>
                                Ever been told you’re “too sensitive” or “overreacting”?
                                Maybe it was after a […]
                            </p>
                        </div>
                    </div>
                    <div class="btmrow">
                        <div class="blogby">
                            <img src="{{ url('assets/images/blogs/icon_user.svg') }}" alt="icon" />
                            <span>Sumedha Singh</span>
                        </div>
                        <div class="blogtime">
                            <img src="{{ url('assets/images/blogs/icon_clock.svg') }}" alt="icon" />
                            <span>15 Min Read</span>
                        </div>
                        <div class="btnrow">
                            <a href="{{ url('nervous-system-overreaction-explained') }}"
                                class="cta_btn animation_white_line animate_arrow bggreen">
                                Read More
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
                <div class="blog">
                    <div class="topbox">
                        <a href="{{ url('help-child-shutting-down') }}" class="imgbox">
                            <img src="{{ url('assets/images/blogs/img_blog2.png') }}" alt="image" />
                        </a>
                        <div class="textbox">
                            <h3>
                                How to Respond When Your Child Shuts Down
                            </h3>
                            <ul>
                                <li>Anxiety</li>
                                <li>Depression</li>
                            </ul>
                            <p>
                                It’s dinner time. You ask your child how school was.
                                Silence. A shrug. Maybe
                                […]
                            </p>
                        </div>
                    </div>
                    <div class="btmrow">
                        <div class="blogby">
                            <img src="{{ url('assets/images/blogs/icon_user.svg') }}" alt="icon" />
                            <span>Sumedha Singh</span>
                        </div>
                        <div class="blogtime">
                            <img src="{{ url('assets/images/blogs/icon_clock.svg') }}" alt="icon" />
                            <span>15 Min Read</span>
                        </div>
                        <div class="btnrow">
                            <a href="{{ url('help-child-shutting-down') }}"
                                class="cta_btn animation_white_line animate_arrow bggreen">
                                Read More
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
        </div>
    </div>

    <div class="last_bluebox" id="last_bluebox">
        <div class="custom_container">
            <div class="common_textbox textbox full" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white center">Stay Updated With Psychology <br>
                    <span class="lightpink">That Makes Sense</span>
                </h2>
                <p>
                    Get Fresh Content On Parenting, Trauma, Clarity, And Emotional Tools -<br>
                    Delivered Weekly To Your Inbox.
                </p>
                <div class="formarea">
                    <form id="subscribe_form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 common_col">
                                <input type="text" class="input" placeholder="Enter Full Name" name="full_name" />
                                <div class="error_msg d-none"></div>
                            </div>
                            <div class="col-md-6 common_col">
                                <input type="email" class="input" placeholder="Enter Email Address" name="email" />
                                <div class="error_msg d-none"></div>
                            </div>

                            <div class="col-md-12 d-none" id="thankyou_msg">
                                <div class="thankyou_msg">
                                    <div class="text">
                                        <p>Thank you for contacting Mind Rewire.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="btnrow center">
                                    <button class="cta_btn animate_arrow animation_white_line bgpink" type="button"
                                        id="subscribe_btn">
                                        Subscribe to Mind Rewire Journal
                                        <span class="rgt_arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
                                                viewBox="0 0 16.336 7.913">
                                                <g id="Group_49586" data-name="Group 49586"
                                                    transform="translate(0 -132)">
                                                    <g id="Group_48855" data-name="Group 48855"
                                                        transform="translate(0 132)">
                                                        <path id="Path_127067" data-name="Path 127067"
                                                            d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
                                                            transform="translate(0 -132)" fill="#ffc224"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page_wrap End -->

@stop

@section('footer_script')

<script src="{{ version_url('assets/js/form.js') }}"></script>

<script>
    $('#subscribe_btn').on('click', function () {

        let formData = new FormData($('#subscribe_form')[0]);

        $.ajax({
            url: "{{ url('submit-journal-request') }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function () {
                disableSubmitButton("#subscribe_btn", 'disabled');
            },
            success: function (response) {
                if (response.status == 'success') {

                    $('#thankyou_msg').removeClass('d-none');
                    $('#subscribe_form')[0].reset()

                } else {
                    disableSubmitButton("#subscribe_btn", 'enabled');
                }
            },
            error: function (xhr, status, error) {

                disableSubmitButton("#subscribe_btn", 'enabled');

                var response = JSON.parse(xhr.responseText);

                // Iterate over the errors and display them
                if (response.errors) {

                    $.each(response.errors, function (field, messages) {

                        var inputField = $('input[name="' + field +
                            '"], textarea[name="' + field + '"]');

                        inputField.focus();

                        messages.forEach(function (message) {

                            showError(inputField, message);
                        });
                    });
                }
            }
        });

    });
</script>

@stop