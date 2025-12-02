@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>UNTANGLE — Emotional Wellness Card Decks | Mind Rewire (Pune)</title>
<meta name="description"
    content="UNTANGLE card decks are a guided emotional wellness tool by Mind Rewire (Pune). Use themed prompts for trauma, stress, fear and personal growth — suitable for individuals, therapists and groups.">
<meta name="keywords"
    content="UNTANGLE card deck, emotional wellness cards Pune, therapy card decks, trauma reflection cards, stress management tools">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@mindrewire" />
<meta name="twitter:creator" content="@mindrewire" />
<meta name="twitter:title" content="UNTANGLE — Emotional Wellness Card Decks | Mind Rewire (Pune)">
<meta name="twitter:description"
    content="UNTANGLE card decks are a guided emotional wellness tool by Mind Rewire (Pune). Use themed prompts for trauma, stress, fear and personal growth.">
<meta name="twitter:image" content="{{ url('assets/images/common-images/untangle-og.png') }}">

<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="UNTANGLE — Emotional Wellness Card Decks | Mind Rewire (Pune)" />
<meta property="og:description"
    content="UNTANGLE card decks are a guided emotional wellness tool by Mind Rewire (Pune). Use themed prompts for trauma, stress, fear and personal growth." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/untangle/untangle.css') }}">
@stop

@section('content')

<!-- page_wrap Start -->
<div class="page_wrap">
    <div class="top_banner">
        <div class="custom_container">
            <div class="textbox" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white">
                    <span class="lightpink"> UNTANGLE : Emotional Clarity </span><br>in a Deck of Cards
                </h2>
                <strong class="sub_heading white">
                    A Playful, Thought-Provoking Way To Explore Fear, Trauma, Stress, And The Masks We Wear.
                </strong>
                <p>
                    Untangle Is A Card-Based Solution Created By Therapists At Mind Rewire To Help Individuals,
                    Families, And Professionals
                    Explore Their Inner World — Solo Or Together. No Therapy Voice. No Rules. Just Real Reflection
                    In Your Hands.
                </p>
                <div class="btnrow">
                    <a href="#section2" class="cta_btn animate_arrow animation_white_line bgpink">
                        Explore Decks
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
                        Bring UNTANGLE to My Group
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
                <img src="{{ url('assets/images/untangle/img_top_banner.png')}}" alt="image" />
            </div>
        </div>
    </div>

    <div class="section1" id="section1">
        <div class="common_fullrow">
            <div class="custom_container align-items-start">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">
                        What Is
                        <span class="blue">UNTANGLE?</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        It’s Not Just A Game. It’s A Mirror. A Companion. A Moment Of Insight. UNTANGLE Is A
                        Deck-Based Emotional Wellness Tool
                        Designed To Help People :
                    </p>
                    <ul class="with_bullet">
                        <li>Name their emotions</li>
                        <li>Unpack hidden patterns</li>
                        <li>Deepen self-awareness</li>
                        <li>Open up difficult conversations — gently</li>
                    </ul>
                    <p>
                        Each Deck Covers One Powerful Emotional Theme. You Can Use It Solo, With Friends, Or Even In
                        A Professional Therapy Or
                        Workshop Setting.
                    </p>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/untangle/img_untangle.png')}}" alt="image" />
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
                <h2 class="c_heading">
                    Four Decks. Four Parts of You. <br> <span class="blue"> Choose Where to Begin.</span>
                </h2>
                <div class="animate_border"></div>
            </div>
            <div class="boxwrap">
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <a>
                        <div class="imgbox">
                            <img src="{{ url('assets/images/untangle/img_choose1.png')}}" alt="image" />
                        </div>
                        <div class="textbox">
                            <h3>The What-If Deck (Fear)</h3>
                            <p>Helps Explore Anxiety, Spiraling Thoughts, And Overthinking Habits.</p>
                        </div>
                    </a>
                </div>
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <a>
                        <div class="imgbox">
                            <img src="{{ url('assets/images/untangle/img_choose2.png')}}" alt="image" />
                        </div>
                        <div class="textbox">
                            <h3>Oops, My Past! (Trauma)</h3>
                            <p>Uncovers Hidden Wounds, Survival Patterns, And Unprocessed History.</p>
                        </div>
                    </a>
                </div>
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <a>
                        <div class="imgbox">
                            <img src="{{ url('assets/images/untangle/img_choose3.png')}}" alt="image" />
                        </div>
                        <div class="textbox">
                            <h3>Ctrl+Alt+Del (Stress)</h3>
                            <p>Targets Burnout, Emotional Fatigue, And Performance Pressure.</p>
                        </div>
                    </a>
                </div>
                <div class="commonbox" data-aos="fade-up" data-aos-duration="1500">
                    <a>
                        <div class="imgbox">
                            <img src="{{ url('assets/images/untangle/img_choose4.png')}}" alt="image" />
                        </div>
                        <div class="textbox">
                            <h3>The Mask Deck (Persona)</h3>
                            <p>Reveals The Emotional Roles You Play — And What’s Behind Them.</p>
                        </div>
                    </a>
                </div>
                <div class="common_patch patch1" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
                </div>
            </div>
            <div class="key_results" data-aos="fade-up" data-aos-duration="1500">
                <strong class="btext">Each Deck Includes :</strong>
                <div class="common_textbox">
                    <ul class="with_bullet">
                        <li>Character Cards</li>
                        <li>Quickfire Questions</li>
                        <li>Action And Wild Cards</li>
                        <li>Tracker To Spot Patterns</li>
                        <li>Connect Cards To Guide Cross-Deck Reflection</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section3" id="section3">
        <div class="common_fullrow">
            <div class="custom_container align-items-start pb-0">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">
                        A Tool for Anyone Who <br>
                        <span class="blue">Feels, Thinks, or Overthinks</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p><strong>Perfect For :</strong></p>
                    <ul class="with_bullet">
                        <li>Individuals on a healing or growth journey</li>
                        <li>Families or friends ready to connect deeper</li>
                        <li>Therapists, coaches, or educators</li>
                        <li>HR teams running mental wellness initiatives</li>
                        <li>Anyone who avoids vulnerability — but craves it</li>
                    </ul>
                    <p>
                        Whether You’re 16 Or 60, In Therapy Or Just Emotionally Curious - UNTANGLE Meets You Where
                        You Are.
                    </p>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/untangle/img_overthinks.png')}}" alt="image" />
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="common_accordion section4" id="section4">
        <div class="common_fullrow">
            <div class="custom_container pb-0 align-items-start reverse">
                <div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="c_heading">
                        Simple to Use. <br>
                        <span class="blue">Hard to Forget.</span>
                    </h2>
                    <div class="animate_border"></div>
                    <p>
                        <strong>Modes Of Play :</strong>
                    </p>
                    <div class="accordion_wrap">
                        <div class="accordion_new">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                    viewBox="0 0 18.859 16.665">
                                    <g id="Group_50415" data-name="Group 50415" transform="translate(-0.001 -0.001)">
                                        <path id="Path_132384" data-name="Path 132384"
                                            d="M17.872,9.98A.365.365,0,0,0,17.9,9.9a1.665,1.665,0,0,0-.566-1.744A1.777,1.777,0,0,0,16.125,6.88a2.19,2.19,0,0,0-.7-1.5,3.25,3.25,0,0,0-2.124-.7h-.015a2.033,2.033,0,0,0-2.139-.713,8.413,8.413,0,0,0-1.087-.293.37.37,0,1,0-.143.725A7.742,7.742,0,0,1,11,4.7a.368.368,0,0,0,.208.012c.012,0,1.233-.28,1.5.473a.371.371,0,0,0,.384.244,2.747,2.747,0,0,1,1.839.5,1.4,1.4,0,0,1,.436.831,1.894,1.894,0,0,0-1.682,1,.37.37,0,1,0,.66.334,1.327,1.327,0,0,1,1.342-.589c.137.045.947.334.915.829a.37.37,0,0,0,.2.353.868.868,0,0,1,.246.229.931.931,0,0,1,.146.744l-.025.033a1.664,1.664,0,0,0-1.555,1.492.37.37,0,0,0,.327.408l.041,0a.37.37,0,0,0,.367-.329.939.939,0,0,1,.906-.838c1.62,1.188.477,3.96.4,4.138a1.876,1.876,0,0,1-1.536,1.2A5.435,5.435,0,0,0,13.9,14.741a.37.37,0,1,0-.172.719,4.808,4.808,0,0,1,1.884.849,1.381,1.381,0,0,1-.041.3c-.263,1.045-1.677,1.593-3.153,1.221a3.806,3.806,0,0,1-.7-.252.37.37,0,0,0-.527.3,5.013,5.013,0,0,0,.061,1.376l-.971.161c-.041-.147-.083-.319-.128-.506A7.407,7.407,0,0,0,8.7,15.651a14.3,14.3,0,0,1,2.2-.367.37.37,0,0,0-.06-.737,15.708,15.708,0,0,0-2.93.546,8.141,8.141,0,0,1-1.671.07c-1.6-.241-2.05-1.209-1.946-1.967a.37.37,0,0,0-.454-.41l-.268.066a3.432,3.432,0,0,1-2.162-.817,1.2,1.2,0,0,1-.267-.983.37.37,0,0,0-.195-.372.466.466,0,0,1-.2-.263.834.834,0,0,1,.208-.6.37.37,0,0,0,.048-.345,2.145,2.145,0,0,1,.036-1.447,1.6,1.6,0,0,1,.987-.8.366.366,0,0,0,.249-.318,1.136,1.136,0,0,1,.389-.728,1.248,1.248,0,0,1,1.012-.134.37.37,0,0,0,.438-.3c0-.008.167-.778,1.61-.8a1.817,1.817,0,0,1,.343,1.787.37.37,0,1,0,.659.336,1.906,1.906,0,0,0,.207-.778,1.222,1.222,0,0,1,.758-.1.623.623,0,0,1,.379.358.37.37,0,0,0,.665-.324A1.357,1.357,0,0,0,7.9,5.473a1.786,1.786,0,0,0-1.065.056A3.318,3.318,0,0,0,6.458,4.7a4.831,4.831,0,0,1,.7-.24.37.37,0,1,0-.188-.715A5.065,5.065,0,0,0,5.806,4.2,2.32,2.32,0,0,0,3.511,5.276a1.8,1.8,0,0,0-1.3.319,1.8,1.8,0,0,0-.633,1.012,2.233,2.233,0,0,0-1.209,1.1A2.774,2.774,0,0,0,.255,9.537,1.374,1.374,0,0,0,.03,10.586a1.152,1.152,0,0,0,.361.6,1.887,1.887,0,0,0,.458,1.335,4.172,4.172,0,0,0,2.7,1.074c.081,1.031.866,2.049,2.6,2.3l.017,0c.015,0,.207.02.53.02a9.831,9.831,0,0,0,1.176-.074,6.193,6.193,0,0,1,1.569,3.238,6.663,6.663,0,0,0,.254.889.37.37,0,0,0,.342.23.364.364,0,0,0,.061-.005l1.673-.278a.37.37,0,0,0,.294-.468,3.88,3.88,0,0,1-.148-1c.108.036.219.068.33.1a4.093,4.093,0,0,0,2.543-.137,2.42,2.42,0,0,0,1.507-1.621,2.126,2.126,0,0,0,.053-.3A2.636,2.636,0,0,0,18.317,14.9l.01-.02a7.094,7.094,0,0,0,.5-1.935A3.265,3.265,0,0,0,17.872,9.98Zm0,0"
                                            transform="translate(0 -3.536)" fill="#6abf9e"></path>
                                        <path id="Path_132385" data-name="Path 132385"
                                            d="M229.711,134.016a2.861,2.861,0,0,0,.453,1.031,2.5,2.5,0,0,0,.313.363c-.066.38-.647.588-.661.592a.37.37,0,0,0,.238.7,1.858,1.858,0,0,0,1.058-.864,2.522,2.522,0,0,0,1.05.214h.08a.37.37,0,0,0-.009-.74h-.009a1.761,1.761,0,0,1-1.785-1.431.37.37,0,0,0-.727.134Zm0,0"
                                            transform="translate(-221.109 -128.658)" fill="#6abf9e"></path>
                                        <path id="Path_132386" data-name="Path 132386"
                                            d="M320.515,143.687a2.338,2.338,0,0,0,.063-2.519,2.764,2.764,0,0,0-.861-.867.37.37,0,0,0-.376.637,2.031,2.031,0,0,1,.619.638,1.643,1.643,0,0,1-.087,1.744.37.37,0,1,0,.642.367Zm0,0"
                                            transform="translate(-307.405 -135.083)" fill="#6abf9e"></path>
                                        <path id="Path_132387" data-name="Path 132387"
                                            d="M389.514,229.187a.37.37,0,1,0-.43-.6,1.226,1.226,0,0,1-.975.288,1.2,1.2,0,0,1-.683-.554.37.37,0,0,0-.655.344,2.007,2.007,0,0,0,.975.871,1.719,1.719,0,0,0,.481,1.81.37.37,0,1,0,.474-.567,1.066,1.066,0,0,1-.213-1.155A2.25,2.25,0,0,0,389.514,229.187Zm0,0"
                                            transform="translate(-372.484 -219.718)" fill="#6abf9e"></path>
                                        <path id="Path_132388" data-name="Path 132388"
                                            d="M91.094,184.111a.37.37,0,0,0-.734.093,1.185,1.185,0,0,1-.568,1.045,2.3,2.3,0,0,0-1.287-.176.37.37,0,0,0,.127.729,1.392,1.392,0,0,1,1,.223,1.127,1.127,0,0,1,.306.919.37.37,0,0,0,.361.378h.009a.37.37,0,0,0,.369-.361,2,2,0,0,0-.315-1.222A1.817,1.817,0,0,0,91.094,184.111Zm0,0"
                                            transform="translate(-84.951 -177.017)" fill="#6abf9e"></path>
                                        <path id="Path_132389" data-name="Path 132389"
                                            d="M48.531,106.593a.827.827,0,0,1-.178.26,1.191,1.191,0,0,1-.462.283.37.37,0,0,0,.2.713,1.928,1.928,0,0,0,.846-.535,1.41,1.41,0,0,0,.855.279,1.7,1.7,0,0,0,.271-.022,2.152,2.152,0,0,0,.767-.287.37.37,0,1,0-.4-.621,1.461,1.461,0,0,1-.482.178.7.7,0,0,1-.65-.19,2.04,2.04,0,0,0-.032-1.061.37.37,0,1,0-.714.194,1.211,1.211,0,0,1-.008.792Zm0,0"
                                            transform="translate(-45.865 -101.438)" fill="#6abf9e"></path>
                                        <path id="Path_132390" data-name="Path 132390"
                                            d="M264.3,48.585a1.928,1.928,0,0,0-1.373-.171.37.37,0,0,0,.2.713,1.172,1.172,0,0,1,.8.094,1,1,0,0,1,.429.672.37.37,0,0,0,.36.285.375.375,0,0,0,.085-.01.37.37,0,0,0,.275-.445A1.708,1.708,0,0,0,264.3,48.585Zm0,0"
                                            transform="translate(-252.978 -46.575)" fill="#6abf9e"></path>
                                        <path id="Path_132391" data-name="Path 132391"
                                            d="M209.136,239.007a1.338,1.338,0,0,1-1.131.721,1.9,1.9,0,0,1-.722-.109.37.37,0,0,0-.281.684,2.565,2.565,0,0,0,.915.167l.093,0a2.059,2.059,0,0,0,1.765-1.089.37.37,0,0,0-.639-.372Zm0,0"
                                            transform="translate(-199.156 -230.026)" fill="#6abf9e"></path>
                                        <path id="Path_132392" data-name="Path 132392"
                                            d="M325.905,298.405a.37.37,0,1,0-.055.475A.372.372,0,0,0,325.905,298.405Zm0,0"
                                            transform="translate(-313.248 -287.255)" fill="#6abf9e"></path>
                                        <path id="Path_132393" data-name="Path 132393"
                                            d="M221.471.511a.369.369,0,0,0,.691-.023.37.37,0,1,0-.691.023Zm0,0"
                                            transform="translate(-213.286 0)" fill="#6abf9e"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>Solo Mode</h3>
                                <div class="slidetext">
                                    <p>
                                        Pick a card. Reflect. Use the tracker. Feel seen.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion_new">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="19"
                                    viewBox="0 0 17.829 19.814">
                                    <g id="Page-1" transform="translate(-0.054 0.015)">
                                        <g id="_036---Brain-Wired" data-name="036---Brain-Wired"
                                            transform="translate(0.054 -0.015)">
                                            <path id="Shape"
                                                d="M15.568,2.958C12.967.911,10.725.536,6.687,1.468A6.2,6.2,0,0,0,3.455,3.052a6.273,6.273,0,0,0-1.321,2.16,8.773,8.773,0,0,0-.3,1.08l-.026.114a4.475,4.475,0,0,1-.292.774,1.986,1.986,0,0,0-.271.99,1.261,1.261,0,0,0,.48.736c.161.148.268.253.269.348a.6.6,0,0,1-.064.153,1.044,1.044,0,0,0-.113.3,2.01,2.01,0,0,1-.465,1.073c-1.037,1.117-1.333,1.5-1.3,1.9a.957.957,0,0,0,.481.65,2.4,2.4,0,0,0,.344.2c.142.073.38.194.4.281a.565.565,0,0,1-.037.332c-.049.1-.1.193-.143.271-.129.228-.323.572-.018.829.071.063.193.159.3.244a.827.827,0,0,0-.106.478.471.471,0,0,0,.194.321,2.444,2.444,0,0,0,.231.143c.193.111.269.162.295.264a.7.7,0,0,1-.028.37,1.874,1.874,0,0,0,.053,1.178,1.219,1.219,0,0,0,1.436.873,26.758,26.758,0,0,0,2.778-.833,3.449,3.449,0,0,1,1.2,1.84.994.994,0,0,0,.938.675h6.658a.99.99,0,0,0,.886-1.432,9.054,9.054,0,0,1-.759-2.9,5.594,5.594,0,0,1,.429-2.9,7.208,7.208,0,0,1,.873-1.384A5.7,5.7,0,0,0,17.881,8.6a9.916,9.916,0,0,0-.344-2.8,5.474,5.474,0,0,0-1.968-2.84Zm.365,8.835a7.813,7.813,0,0,0-.947,1.513,6.256,6.256,0,0,0-.481,3.242,9.68,9.68,0,0,0,.825,3.117.33.33,0,0,1-.3.473H8.377a.334.334,0,0,1-.314-.228,4.87,4.87,0,0,0-1.084-1.882l.247-.087c.244-.086.429-.151.52-.18,1.412-.444,2.119-1.09,2.1-1.912a.321.321,0,0,0-.338-.322.33.33,0,0,0-.323.338c.008.34-.269.837-1.638,1.267-.1.03-.287.1-.54.186-.237.083-.528.186-.85.3h0a27.335,27.335,0,0,1-2.828.856.582.582,0,0,1-.678-.443,1.217,1.217,0,0,1-.033-.809,1.328,1.328,0,0,0,.025-.684,1.091,1.091,0,0,0-.607-.676l-.071-.041a1.2,1.2,0,0,1,.126-.205.33.33,0,0,0-.063-.468c-.079-.059-.267-.2-.4-.309.017-.031.036-.066.053-.1.051-.089.109-.193.165-.311a1.225,1.225,0,0,0,.089-.738c-.077-.405-.462-.6-.744-.746a1.971,1.971,0,0,1-.25-.141,1.779,1.779,0,0,1-.218-.179,6.684,6.684,0,0,1,1.123-1.4,2.644,2.644,0,0,0,.632-1.413.834.834,0,0,1,.05-.111.976.976,0,0,0,.135-.459,1.153,1.153,0,0,0-.484-.829C2.04,8.3,1.914,8.181,1.9,8.079A2.132,2.132,0,0,1,2.12,7.45a5.016,5.016,0,0,0,.33-.894l.027-.115a8.267,8.267,0,0,1,.275-1A5.624,5.624,0,0,1,3.933,3.506a5.526,5.526,0,0,1,2.9-1.4c4.308-.993,6.183-.318,8.327,1.368a4.766,4.766,0,0,1,1.741,2.5,9.249,9.249,0,0,1,.319,2.615,5.012,5.012,0,0,1-1.288,3.2Z"
                                                transform="translate(-0.054 -0.985)" fill="#1c3495"></path>
                                            <path id="Shape-2" data-name="Shape"
                                                d="M19.914,9.176a1.377,1.377,0,1,0-.329-.591,4.043,4.043,0,0,0-.978,1.267,3.251,3.251,0,0,0-.684-.393,2.914,2.914,0,0,1-.1-1.868c.022,0,.044.007.066.007a1.331,1.331,0,1,0-.7-.2,4.361,4.361,0,0,0-.066,1.767q-.421-.132-.924-.247c-.3-.068-.593-.126-.864-.176a2.1,2.1,0,0,1-.606-.9,1.324,1.324,0,1,0-.665.073,2.984,2.984,0,0,0,.281.665c-.653-.1-1.269-.165-1.765-.212a1.326,1.326,0,1,0-.055.658c.7.066,1.651.178,2.6.35l.053.01a4.665,4.665,0,0,0-.878.92,1.3,1.3,0,0,0-.37-.06,1.326,1.326,0,1,0,.943.4A3.411,3.411,0,0,1,15.9,9.688a1.747,1.747,0,0,1,.244-.109A9.211,9.211,0,0,1,17.517,10l.031.016.006,0,.005,0a2.339,2.339,0,0,1,.757.453.643.643,0,0,1,.1.136c.152.256.119.635-.106,1.2-.122.309-.284.631-.454.972-.582,1.162-1.242,2.48-.178,3.335,1.242.993,1.286,4.424,1.2,5.661a.33.33,0,0,0,.306.353h.023a.33.33,0,0,0,.33-.307c.014-.2.323-4.811-1.443-6.224-.6-.483-.251-1.312.355-2.522.147-.294.294-.594.418-.888a.965.965,0,0,1,.918.264,1.342,1.342,0,1,0,.514-.429,1.874,1.874,0,0,0-1.192-.528,1.71,1.71,0,0,0-.044-1.054,3.591,3.591,0,0,1,.848-1.26ZM20.861,7.6a.66.66,0,1,1-.66.66A.66.66,0,0,1,20.861,7.6ZM17.889,5.617a.66.66,0,1,1-.66.66A.66.66,0,0,1,17.889,5.617Zm-4.292.99a.66.66,0,1,1,.66.66A.66.66,0,0,1,13.6,6.608ZM11.286,9.249a.66.66,0,1,1,.66-.66A.66.66,0,0,1,11.286,9.249Zm2.641,2.971a.66.66,0,1,1,.66-.66A.66.66,0,0,1,13.927,12.22Zm7.594.99a.66.66,0,1,1-.66-.66A.66.66,0,0,1,21.521,13.211Z"
                                                transform="translate(-6.682 -3.631)" fill="#1c3495"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>Group Mode</h3>
                                <div class="slidetext">
                                    <p>
                                        Read aloud. React. Laugh, pause, open up.<br>
                                        Use Wild and Connect Cards to guide deeper connections.
                                    </p>
                                </div>
                            </div>
                        </div>
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
                                                        transform="translate(-111.174 -19.252)" fill="#1c3495">
                                                    </path>
                                                    <path id="Path_132433" data-name="Path 132433"
                                                        d="M170.982,132.583a1.023,1.023,0,0,0-.752,1.719l.041.043a.35.35,0,0,0,.495-.5l-.024-.025a.314.314,0,0,1-.058-.345.32.32,0,0,1,.3-.2.35.35,0,1,0,0-.7Z"
                                                        transform="translate(-164.002 -128.613)" fill="#1c3495">
                                                    </path>
                                                    <path id="Path_132434" data-name="Path 132434"
                                                        d="M303.288,133.85a.35.35,0,1,0,.495.5l.041-.043a1.023,1.023,0,0,0-.752-1.719.35.35,0,0,0,0,.7.32.32,0,0,1,.3.2.314.314,0,0,1-.058.344Z"
                                                        transform="translate(-292.118 -128.614)" fill="#1c3495">
                                                    </path>
                                                    <path id="Path_132435" data-name="Path 132435"
                                                        d="M5.838,85.133,3.4,82.727V80.136a1.063,1.063,0,0,0-1.061-1.061H2.3a1.054,1.054,0,0,0-.178.021v-.259a1.07,1.07,0,0,0-1.011-1.08,1.131,1.131,0,0,0-.821.3.873.873,0,0,0-.281.633c0,.826-.005,4.675-.008,5.88,0,.028,0,.057,0,.085a3.211,3.211,0,0,0,1.044,2.287l.017.015,2.731,2.2v2.781a.35.35,0,0,0,.35.35H6.605a.35.35,0,0,0,.35-.35V87.8A3.772,3.772,0,0,0,5.838,85.133ZM2.319,79.776h.015a.361.361,0,0,1,.361.361v2.191a1.127,1.127,0,0,0-.575.056V79.846A.357.357,0,0,1,2.319,79.776ZM6.255,91.592H4.493v-2.6a.35.35,0,0,0-.13-.273L1.51,86.42A2.506,2.506,0,0,1,.7,84.643q0-.035,0-.07c0-1.205.008-5.055.008-5.882a.177.177,0,0,1,.064-.127.431.431,0,0,1,.3-.108.376.376,0,0,1,.343.381v4.305a1.137,1.137,0,0,0,.282,1.1l2.467,2.581a.35.35,0,0,0,.506-.484L2.207,83.757l0,0a.434.434,0,0,1,0-.6l.046-.042a.432.432,0,0,1,.576.037l0,0,2.521,2.484A3.068,3.068,0,0,1,6.255,87.8v3.788Z"
                                                        transform="translate(0 -75.707)" fill="#1c3495"></path>
                                                    <path id="Path_132436" data-name="Path 132436"
                                                        d="M320.369,78.692a.873.873,0,0,0-.281-.633,1.131,1.131,0,0,0-.821-.3,1.07,1.07,0,0,0-1.011,1.08V79.1a1.053,1.053,0,0,0-.177-.021h-.037a1.063,1.063,0,0,0-1.061,1.061v2.591l-2.442,2.406a3.772,3.772,0,0,0-1.118,2.671v4.139a.35.35,0,0,0,.35.35h2.462a.35.35,0,0,0,.35-.35V89.161l2.731-2.2.017-.015a3.21,3.21,0,0,0,1.044-2.287q0-.042,0-.085C320.374,83.367,320.369,79.518,320.369,78.692Zm-2.328,1.083h.017a.356.356,0,0,1,.2.07v2.537a1.127,1.127,0,0,0-.575-.056V80.136A.361.361,0,0,1,318.041,79.775Zm1.636,4.868a2.506,2.506,0,0,1-.809,1.777l-2.853,2.3a.35.35,0,0,0-.13.273v2.6h-1.762V87.8a3.068,3.068,0,0,1,.909-2.172l2.521-2.484,0,0a.432.432,0,0,1,.576-.037l.046.042a.434.434,0,0,1,0,.6l0,0-1.244,1.294a.35.35,0,1,0,.505.486l1.243-1.293a1.137,1.137,0,0,0,.283-1.1V78.838a.375.375,0,0,1,.343-.381.431.431,0,0,1,.3.108.177.177,0,0,1,.064.127c0,.826.005,4.677.008,5.882C319.677,84.6,319.677,84.62,319.677,84.643Z"
                                                        transform="translate(-302.444 -75.707)" fill="#1c3495">
                                                    </path>
                                                    <path id="Path_132437" data-name="Path 132437"
                                                        d="M379.988,315.922a.35.35,0,1,0-.124.422A.353.353,0,0,0,379.988,315.922Z"
                                                        transform="translate(-366.028 -305.322)" fill="#1c3495">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="textbox">
                                <h3>Therapist/Facilitator Mode</h3>
                                <div class="slidetext">
                                    <p>
                                        Use in sessions, group therapy, or workshops to break ice and open space.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quote">
                        It’s Like Therapy - But Without The Awkward Couch.
                    </div>
                </div>
                <div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="withpatch">
                        <img src="{{ url('assets/images/untangle/img_accordion.png')}}" alt="image" />
                        <div class="common_patch lftpatch" data-aos="fade-up" data-aos-duration="1500">
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
                <h2 class="c_heading white center">Ready to UNTANGLE <br>
                    <span class="lightpink">What You’ve Been Carrying?</span>
                </h2>
                <p>
                    Whether You’re A Coach, Educator, Team Leader, Or Someone On <br> A Personal Healing Journey,
                    UNTANGLE Gives You Tools To
                    Surface What’s Been Silent.
                </p>
                <div class="btnrow center">
                    <a href="{{url('book-session')}}" class="cta_btn animate_arrow animation_white_line bgpink">
                        Bring UNTANGLE to My Team
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
                    <a href="{{url('enquiry-form')}}" class="cta_btn animate_arrow animation_white_line border_white">
                        Request a Demo or Workshop
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
    // accordion js start
    $('.accordion_wrap').find(".accordion_new:first").addClass('active').find(".slidetext").show();
    $(".accordion_new").click(function () {
        $(this).addClass("active");
        $(this).siblings(".accordion_new").removeClass("active");

        $(this).find(".slidetext").slideDown();
        $(this).siblings(".accordion_new").find(".slidetext").slideUp();
    });
    // accordion js end
</script>
@stop