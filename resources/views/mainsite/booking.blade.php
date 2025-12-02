@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Book Your Session | Mind Rewire — Psychologists in Pune</title>
    <meta name="description"
        content="Book therapy, counselling or coaching with Mind Rewire (Pune). Online & in-person sessions available with psychologists holding 15+ years clinical experience. Quick, secure booking for anxiety, trauma, child & teen counselling.">
    <meta name="keywords"
        content="book therapy Pune, counselling booking Pune, book psychologist Pune, online therapy India, Mind Rewire booking, child counselling booking">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@mindrewire" />
    <meta name="twitter:creator" content="@mindrewire" />
    <meta name="twitter:title" content="Book Your Session | Mind Rewire — Psychologists in Pune">
    <meta name="twitter:description"
        content="Book therapy, counselling or coaching with Mind Rewire (Pune). Online & in-person sessions available with psychologists holding 15+ years clinical experience.">
    <meta name="twitter:image" content="{{ url('assets/images/common-images/booking-og.png') }}">

    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Book Your Session | Mind Rewire — Psychologists in Pune" />
    <meta property="og:description"
        content="Book therapy, counselling or coaching with Mind Rewire (Pune). Online & in-person sessions available with psychologists holding 15+ years clinical experience." />
@stop

@section('css')
    <link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ version_url('assets/css/booking/booking.css') }}">
@stop

@section('content')

    <!-- page_wrap Start -->
    <div class="page_wrap">
        <div class="custom_container">
            <div class="backrow">
                <a href="{{ url('book-session') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20.262 12.512">
                        <g id="Group_27921" data-name="Group 27921" transform="translate(0 0)">
                            <g id="Group_27441" data-name="Group 27441" transform="translate(0 0)">
                                <path id="Path_109299" data-name="Path 109299"
                                    d="M.232,137.542h0l4.136-5.247a.678.678,0,0,1,1.119,0,1.214,1.214,0,0,1,0,1.427l-2.777,3.523H19.471a1.039,1.039,0,0,1,0,2.018H2.709l2.777,3.523a1.214,1.214,0,0,1,0,1.427.678.678,0,0,1-1.119,0L.233,138.971h0A1.215,1.215,0,0,1,.232,137.542Z"
                                    transform="translate(0 -132)" fill="#1c3495" />
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="booking_wrap">
                <div class="lftcol">
                    <div class="docinfo">
                        <div class="imgbox">
                            <img src="{{ url('assets/images/booking/img_sumedha.png') }}" alt="image" />
                        </div>
                        <div class="textbox">
                            <strong class="sertype">
                                {{ $plan_details->therapy_name }}
                            </strong>
                            <span class="deg">Therapy Session With :</span>
                            <strong class="name">Sumedha Singh</strong>
                        </div>
                    </div>

                    @livewire('booking', ['plan_details' => $plan_details])
                </div>

                <div class="rgtcol">
                    <div class="bluebox">
                        <div class="fullrow pb-4">
                            <div class="td1">
                                <span class="btext">Therapy Session Sumedha Singh</span>
                                <div class="mtype">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="21"
                                            viewBox="0 0 30.268 21.862">
                                            <path id="video"
                                                d="M30.3,7.013a2.093,2.093,0,0,0-2.232.255l-3.6,2.883V9.533A4.758,4.758,0,0,0,19.19,4.259H6.533A4.758,4.758,0,0,0,1.259,9.533V20.784a4.758,4.758,0,0,0,5.274,5.274H19.19a4.758,4.758,0,0,0,5.274-5.274v-.617l3.6,2.883a2.09,2.09,0,0,0,1.314.464,2.131,2.131,0,0,0,.918-.21,2.1,2.1,0,0,0,1.2-1.9V8.916a2.1,2.1,0,0,0-1.2-1.9ZM22.355,20.784c0,2.218-.946,3.164-3.164,3.164H6.533c-2.218,0-3.164-.946-3.164-3.164V9.533c0-2.218.946-3.164,3.164-3.164H19.19c2.218,0,3.164.946,3.164,3.164Zm7.032.619-4.922-3.938V12.852l4.922-3.938Z"
                                                transform="translate(-1.227 -4.227)" fill="#6bbf9e"></path>
                                        </svg>
                                    </div>
                                    Video Call
                                </div>
                                <span class="stext">
                                    <span id="preview_date">
                                        Tuesday, 15 July 2025
                                    </span>
                                    <br>
                                    <span id="preview_time_slot">
                                        {{-- 10:30 AM --}}
                                    </span>
                                </span>
                            </div>
                            <div class="td2">
                                <span class="btext">
                                    {{ $plan_details->currency }}
                                    {{ $plan_details->price }}
                                </span>
                            </div>
                        </div>
                        <div class="fullrow d-none">
                            <div class="td1">
                                <span class="stext">GST (18%)</span>
                            </div>
                            <div class="td2">
                                <span class="stext">₹ 306</span>
                            </div>
                        </div>
                        <div class="fullrow">
                            <div class="td1">
                                <span class="btext">Total Amount</span>
                            </div>
                            <div class="td2">
                                <span class="btext">
                                    {{ $plan_details->currency }}
                                    {{ $plan_details->price }}
                                </span>
                            </div>
                        </div>
                        <div class="fullrow lastrow">
                            <div class="agree">
                                <label class="custom_checkbox">
                                    <input type="checkbox" id="agree">
                                    <span class="checkmark"></span>
                                    I agree to the
                                    <a href="{{ url('terms-of-service') }}">
                                        Terms & Conditions
                                    </a>
                                </label>
                            </div>
                            <a href="#" class="cta_btn animation_white_line animate_arrow" id="proceed_to_pay">
                                Proceed to Pay
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
                            <div class="poweredby">
                                Powered by : <img src="{{ url('assets/images/booking/img_razorpay.png') }}"
                                    alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_wrap End -->

@stop

@section('footer_script')
    <script src="{{ version_url('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ version_url('assets/js/form.js') }}"></script>
    <script src="{{ version_url('assets/js/booking-form.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

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

            // date_carousel js Start
            commoncarouseljs('.date_carousel', 2, 2, {
                0: {
                    items: 3
                },
                500: {
                    items: 4
                },
                1100: {
                    items: 5
                },
            }, false, 5000, false); // autoplay/loop

            $(".date_carousel .item").click(function() {
                $(this).closest(".date_carousel").find(".item").removeClass("active");
                $(this).addClass("active");
            });

            $(".selecttime .cbox").click(function() {
                $(this).closest(".selecttime").find(".cbox").removeClass("active");
                $(this).addClass("active");
            });
            // date_carousel js Start


        });
    </script>

    <!-- datepicker js start -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: "d-m-yy", // "d MM yy",d-m-yy" DD, dd MM yy
                onSelect: function(dateText) {
                    //console.log("Selected date: " + dateText);
                    $("#formattedDate").text(dateText); // Put it inside the div
                    $("#formattedDate").closest(".selected_date").removeClass("d-none");

                    window.location.href = '?date=' + dateText;
                    // alert(dateText)
                }
            });
        });

        getStateList($('input[name="country"]').val());
    </script>
    <!-- datepicker js end -->
@stop
