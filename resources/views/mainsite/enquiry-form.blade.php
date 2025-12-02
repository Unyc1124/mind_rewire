@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Connect with Mind Rewire | Therapy & Wellness Enquiry — Psychologists in Pune</title>
    <meta name="description"
        content="Contact Mind Rewire (Pune) to enquire about therapy, coaching or corporate wellness. Our psychologists have 15+ years clinical experience offering online and in-person support.">
    <meta name="keywords"
        content="contact psychologist Pune, therapy enquiry Pune, counselling enquiry India, book consultation Pune, Mind Rewire enquiry">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@mindrewire" />
    <meta name="twitter:creator" content="@mindrewire" />
    <meta name="twitter:title" content="Connect with Mind Rewire | Therapy & Wellness Enquiry — Psychologists in Pune">
    <meta name="twitter:description"
        content="Contact Mind Rewire (Pune) to enquire about therapy, coaching or corporate wellness. Online and in-person sessions available with 15+ years clinical experience.">
    <meta name="twitter:image" content="{{ url('assets/images/common-images/contact-og-image.png') }}">

    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Connect with Mind Rewire | Therapy & Wellness Enquiry — Psychologists in Pune" />
    <meta property="og:description"
        content="Contact Mind Rewire (Pune) to enquire about therapy, coaching or corporate wellness. Online and in-person sessions available with 15+ years clinical experience." />
@stop

@section('css')
    <link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ version_url('assets/css/enquiry-form/enquiry-form.css') }}">
@stop

@section('content')

    <!-- page_wrap Start -->
    <div class="page_wrap">
        <div class="top_banner">
            <div class="custom_container" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="c_heading white center">
                    Connect with <br>
                    <span class="bluelight">Mind Rewire - Your Path to<br> Inner Peace</span>
                </h2>
            </div>
        </div>

        <div class="enquiry_form">
            <div class="custom_container">
                <div class="rightbox" data-aos="fade-up" data-aos-duration="1500">
                    <div class="whitebox">
                        <form id="enquiry_form">
                            @csrf
                            <div class="formarea">
                                <h3 class="c_heading">Mind Rewire <span class="blue">Enquiry Centre</span></h3>
                                <div class="animate_border"></div>
                                <div class="row">
                                    <div class="col-md-6 common_col">
                                        <!-- add error class for error -->
                                        <div class="new_inputlabel">
                                            <div class="label">
                                                <div class="relative">
                                                    First Name
                                                </div>
                                            </div>
                                            <input type="text" class="input" placeholder="Enter First Name, eg. John"
                                                name="first_name" />
                                        </div>
                                        <span class="error_msg d-none">
                                        </span>
                                    </div>
                                    <div class="col-md-6 common_col">
                                        <div class="new_inputlabel">
                                            <div class="label">
                                                <div class="relative">
                                                    Last Name
                                                </div>
                                            </div>
                                            <input type="text" class="input" placeholder="Enter Last Name, eg. Doe"
                                                name="last_name" />
                                        </div>
                                        <span class="error_msg d-none">
                                        </span>
                                    </div>
                                    <div class="col-md-6 common_col">
                                        <div class="new_inputlabel">
                                            <div class="label">
                                                <div class="relative">Email Address
                                                </div>
                                            </div>
                                            <input type="email" class="input" name="email"
                                                placeholder="Enter Email, eg. johndoe@gmail.com" />
                                        </div>
                                        <span class="error_msg d-none">
                                        </span>
                                    </div>
                                    <div class="col-md-6 common_col">
                                        <div class="two_column">
                                            <div class="td1">
                                                <div class="new_inputlabel">
                                                    <div
                                                        class="ui search selection dropdown dropdownmenu input_none with_icon">
                                                        <input type="hidden" name="phone_dial_code"
                                                            value="{{ $current_country->dial_code }}">
                                                        <div class="text default">
                                                        </div>
                                                        <div class="menu with_searchbox mw_180">
                                                            <div class="selectsearch_wrap">
                                                                <div class="search_area">
                                                                    <input type="text" placeholder="Search"
                                                                        class="input graytext filter-input" />
                                                                </div>
                                                            </div>
                                                            <div class="select_scrollarea filterfrom customscroll">
                                                                @foreach ($countries as $country)
                                                                    <div class="item"
                                                                        data-value="{{ $country->dial_code }}">
                                                                        <div class="icon">
                                                                            <i
                                                                                class="{{ strtolower($country->code) }} flag"></i>
                                                                        </div>
                                                                        {{ $country->dial_code }}
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="td2">
                                                <div class="new_inputlabel">
                                                    <div class="label">
                                                        <div class="relative">Phone #
                                                        </div>
                                                    </div>
                                                    <input type="number" class="input" name="phone"
                                                        placeholder="Enter Phone, eg. 98765432" />
                                                </div>
                                            </div>
                                        </div>
                                        <span class="error_msg d-none">
                                        </span>
                                    </div>
                                    <div class="col-md-6 common_col">
                                        <div class="new_inputlabel">
                                            <div class="label">
                                                <div class="relative">
                                                    Therapy Requested
                                                </div>
                                            </div>
                                            <div class="ui search selection dropdown dropdownmenu input_none">
                                                <input type="hidden" name="therapy_requested">
                                                <div class="text default">
                                                    Select Therapy, eg. Career Counselling
                                                </div>
                                                <div class="menu with_searchbox mw_180">
                                                    <div class="selectsearch_wrap">
                                                        <div class="search_area">
                                                            <input type="text" placeholder="Search"
                                                                class="input graytext filter-input" />
                                                        </div>
                                                    </div>
                                                    <div class="select_scrollarea filterfrom customscroll">
                                                        <div class="item" data-value="Career Counselling">Career
                                                            Counselling
                                                        </div>
                                                        <div class="item" data-value="School Wellness Programs">School
                                                            Wellness Programs</div>
                                                        <div class="item" data-value="Children, Teen & Students">
                                                            Children,
                                                            Teen & Students</div>
                                                        <div class="item" data-value="Corporate Wellness">Corporate
                                                            Wellness
                                                        </div>
                                                        <div class="item" data-value="Trauma Rewiring">Trauma Rewiring
                                                        </div>
                                                        <div class="item" data-value="Individual Therapy & Coaching">
                                                            Individual Therapy & Coaching</div>
                                                        <div class="item" data-value="Untangle">Untangle</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="error_msg d-none">
                                        </span>
                                    </div>
                                    <div class="col-md-6 common_col">
                                        <div class="new_inputlabel">
                                            <div class="label">
                                                <div class="relative">
                                                    Enquiry Type
                                                </div>
                                            </div>
                                            <div class="ui search selection dropdown dropdownmenu input_none">
                                                <input type="hidden" name="enquiry_type">
                                                <div class="text default">
                                                    Select Enquiry Type, eg. Submit a CV
                                                </div>
                                                <div class="menu with_searchbox mw_180">
                                                    <div class="selectsearch_wrap d-none">
                                                        <div class="search_area">
                                                            <input type="text" placeholder="Search"
                                                                class="input graytext filter-input" />
                                                        </div>
                                                    </div>
                                                    <div class="select_scrollarea filterfrom customscroll">
                                                        <div class="item" data-value="Schedule a Consultation">
                                                            Schedule a Consultation
                                                        </div>
                                                        <div class="item" data-value="Submit a CV">Submit a CV</div>
                                                        <div class="item" data-value="Partner with Us">Partner with Us
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="error_msg d-none">
                                        </span>
                                    </div>
                                    <div class="col-md-12 common_col">
                                        <div class="new_inputlabel">
                                            <div class="label">
                                                <div class="relative">
                                                    Brief Description
                                                </div>
                                            </div>
                                            <textarea class="textarea text_autoheight" name="brief_description"
                                                placeholder="Please share a short brief about your enquiry…"></textarea>
                                        </div>
                                        <span class="error_msg d-none">
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="agree">
                                            <div class="form-group">
                                                <input type="checkbox" id="agree">
                                                <label for="agree"></label>
                                            </div>
                                            <p>
                                                I agree to the <a href="{{ url('terms-of-service') }}" target="_blank">
                                                    Terms &
                                                    Conditions</a> and <a href="{{ url('privacy-policy') }}"
                                                    target="_blank">Privacy
                                                    Policy</a>.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="btnrow">
                                            <div class="add_attachment">
                                                <strong class="htext">Attach Related Files</strong>
                                                <div class="custom_choose">
                                                    <input type="file" class="fileInput" id="fileInput"
                                                        name="attachment" accept=".pdf,.doc,.docx,image/*" />
                                                    <label for="fileInput" class="custom-button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                            height="15" viewBox="0 0 15.849 15">
                                                            <g id="Group_50233" data-name="Group 50233"
                                                                transform="translate(-0.001 -13.707)">
                                                                <g id="Group_50232" data-name="Group 50232"
                                                                    transform="translate(0.001 13.707)">
                                                                    <path id="Path_132352" data-name="Path 132352"
                                                                        d="M14.365,15.188a5.072,5.072,0,0,0-7.165,0L1.059,21.33a3.619,3.619,0,0,0,5.118,5.118l5.63-5.63a2.171,2.171,0,1,0-3.071-3.071L5.054,21.428a.724.724,0,1,0,1.024,1.024l3.682-3.681a.724.724,0,1,1,1.024,1.023l-5.63,5.63a2.171,2.171,0,0,1-3.071-3.071l6.142-6.141a3.619,3.619,0,1,1,5.118,5.118L7.2,27.471a.724.724,0,0,0,1.024,1.024l6.141-6.142a5.066,5.066,0,0,0,0-7.165Z"
                                                                        transform="translate(-0.001 -13.707)"
                                                                        fill="#b3212c" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <strong>Choose Files</strong>
                                                    </label>
                                                    <div class="file-list" id="fileList">
                                                        <div class="file-name" class="fileName"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" id="submit_details_btn"
                                                class="cta_btn animate_arrow animation_white_line bggreen">
                                                Submit Details
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
                                    <div class="col-md-12 d-none" id="thankyou_msg">
                                        <div class="thankyou_msg">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16.062 16.062">
                                                    <g data-name="Group 49607" transform="translate(-101 -343)">
                                                        <circle id="Ellipse_1" data-name="Ellipse 1" cx="5"
                                                            cy="5" r="5" transform="translate(104 345.686)"
                                                            fill="#fff"></circle>
                                                        <path id="Path_120932" data-name="Path 120932"
                                                            d="M9.347,1.318A8.031,8.031,0,1,1,1.316,9.349,8.032,8.032,0,0,1,9.347,1.318ZM7.679,11.957,5.713,9.989A.86.86,0,1,1,6.93,8.772L8.316,10.16l3.448-3.448a.86.86,0,1,1,1.217,1.217L8.923,11.986a.862.862,0,0,1-1.217,0l-.027-.029Z"
                                                            transform="translate(99.684 341.683)" fill="#4EB96F"
                                                            fill-rule="evenodd">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="text">
                                                <h3>Thank you for contacting Mind Rewire.</h3>
                                                <p>Our team in {city} has received your enquiry. One of our experts
                                                    will review your request and get back to you
                                                    shortly with the required assistance.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="common_patch lftpatch">
                            <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
                        </div>
                        <div class="common_patch rgtpatch">
                            <img src="{{ url('assets/images/common-images/common_patch.svg') }}" alt="icon">
                        </div>
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
        // File upload JS Start
        let selectedFile = null; // Hold only one file

        $('.fileInput').on('change', function() {
            const file = this.files[0]; // Get the first file only

            if (!file) return; // If no file selected

            selectedFile = file; // Set the selected file
            updateFileList(); // Show in UI
        });

        function updateFileList() {
            const fileList = $('#fileList');
            fileList.empty(); // Clear existing list

            if (selectedFile) {
                const fileItem = $(`
                    <div class="file-item">
                        <span class="icon_attachment">
                            <img src="{{ url('assets/images/common-images/icon_attachment.svg') }}" alt="attachment" />
                        </span>
                        <span class="file-name">${selectedFile.name}</span>
                        <span class="icon_delete">
                            <img src="{{ url('assets/images/common-images/icon_delete_round.svg') }}" alt="delete" />
                        </span>
                    </div>
                `);

                // Delete button handler
                fileItem.find('.icon_delete').on('click', function() {
                    selectedFile = null; // Clear selected file
                    updateFileList(); // Refresh UI
                    // Reset input to allow re-selecting same file
                    $('.fileInput').val('');
                });

                fileList.append(fileItem);
            }
        }
        // File upload JS End
    </script>

    <script>
        disableSubmitButton("#submit_details_btn", 'disabled');

        $('#agree').on('change', function() {
            if ($(this).is(':checked')) {
                disableSubmitButton("#submit_details_btn", 'enabled');
            } else {
                disableSubmitButton("#submit_details_btn", 'disabled');
            }
        });

        $('#submit_details_btn').on('click', function() {

            let isValid;
            // Agreement Checkbox
            let agree = $('#agree');
            if (!agree.is(':checked')) {
                agree.closest('.agree').find('.error_msg').removeClass('d-none').find('p').text(
                    'You must agree to the terms.');
                isValid = false;
            } else {
                agree.closest('.agree').find('.error_msg').addClass('d-none');
            }

            isValid = true;

            if (isValid) {

                let formData = new FormData($('#enquiry_form')[0]);

                $.ajax({
                    url: "{{ url('submit-enquiry') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        disableSubmitButton("#submit_details_btn", 'disabled');
                    },
                    success: function(response) {
                        if (response.status == 'success') {

                            $('#thankyou_msg').removeClass('d-none');
                            $('#enquiry_form')[0].reset()
                        } else {

                            disableSubmitButton("#submit_details_btn", 'enabled');

                            $('#thankyou_msg').addClass('d-none');

                            showError('#' + response.field, response.message);
                        }
                    },
                    error: function(xhr, status, error) {

                        disableSubmitButton("#submit_details_btn", 'enabled');

                        var response = JSON.parse(xhr.responseText);

                        // Iterate over the errors and display them
                        if (response.errors) {

                            $.each(response.errors, function(field, messages) {

                                var inputField = $('input[name="' + field +
                                    '"], textarea[name="' + field + '"]');

                                inputField.focus();

                                messages.forEach(function(message) {

                                    showError(inputField, message);
                                });
                            });
                        }
                    }
                });
            }
        });
    </script>
@stop
