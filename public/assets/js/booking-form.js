$(".timeslot_box").on("click", function () {
    $("#preview_time_slot").text($(".timeslot_box").data("value"));
});

disableSubmitButton("#proceed_to_pay", "disabled");

$("#agree").on("change", function () {
    if ($(this).is(":checked")) {
        disableSubmitButton("#proceed_to_pay", "enabled");
    } else {
        disableSubmitButton("#proceed_to_pay", "disabled");
    }
});

$("#proceed_to_pay").on("click", function () {
    let isValid = true;
    // Agreement Checkbox
    let agree = $("#agree");
    if (!agree.is(":checked")) {
        agree
            .closest(".agree")
            .find(".error_msg")
            .removeClass("d-none")
            .find("p")
            .text("You must agree to the terms.");
        isValid = false;
    } else {
        agree.closest(".agree").find(".error_msg").addClass("d-none");
    }

    $('.common_col').find(".error_msg").addClass("d-none");

    if (isValid) {
        let formData = new FormData($("#billing_details_form")[0]);
        $.ajax({
            url: "/submit-booking",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function () {
                disableSubmitButton("#proceed_to_pay", "disabled");
            },
            success: function (response) {
                if (response.status == "success") {
                    let options = {
                        key: response.key,
                        amount: response.amount,
                        currency: "INR",
                        name: response.name,
                        order_id: response.order_id,
                        prefill: {
                            name: response.name,
                            email: response.email,
                            contact: response.contact,
                        },
                        handler: function (paymentResponse) {
                            $.ajax({
                                url: "/razorpay/success",
                                method: "POST",
                                headers: {
                                    "X-CSRF-TOKEN": $(
                                        'meta[name="csrf-token"]'
                                    ).attr("content"),
                                },
                                data: paymentResponse,
                                success: function (msg) {
                                    showSwalToast(
                                        "success",
                                        "✅ Payment Successful"
                                    );
                                    $("#billing_details_form")[0].reset();

                                    window.location.reload();
                                },
                                error: function (xhr, status, error) {
                                    window.location.reload();
                                },
                            });
                        },
                        modal: {
                            ondismiss: function () {
                                $.ajax({
                                    url: "/razorpay/failed",
                                    method: "POST",
                                    headers: {
                                        "X-CSRF-TOKEN": $(
                                            'meta[name="csrf-token"]'
                                        ).attr("content"),
                                    },
                                    data: {
                                        order_id: response.order_id,
                                        payment_status: "cancelled",
                                    },
                                    // success: function () {
                                    //     $("#billing_details_form")[0].reset();
                                    //     window.location.reload();
                                    // },
                                    // error: function (xhr, status, error) {
                                    //     window.location.reload();
                                    // },
                                    success: function (msg) {
    showSwalToast("success", "✅ Payment Successful");
    $("#billing_details_form")[0].reset();

    // ✅ REDIRECT TO SUCCESS PAGE
    window.location.href = "/booking-success/" + msg.billing_id;
},

                                });

                                // User closed Razorpay payment popup manually
                                showSwalToast(
                                    "error",
                                    "❌ Payment popup closed by user"
                                );

                                $("#billing_details_form")[0].reset(); // Reset form
                            },
                        },
                    };

                    var rzp = new Razorpay(options);
                    // ❌ Catch errors like invalid key/order
                    rzp.on("payment.failed", function (response) {
                        $.ajax({
                            url: "/razorpay/failed",
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": $(
                                    'meta[name="csrf-token"]'
                                ).attr("content"),
                            },
                            data: {
                                order_id: response.order_id,
                                payment_status: "failed",
                            },

                            success: function () {
                                $("#billing_details_form")[0].reset();
                                window.location.reload();
                                // window.location.href = "/booking-success/" + response.billing_id;

                            },
                            error: function (xhr, status, error) {
                                window.location.reload();
                            },
                        });

                        showSwalToast(
                            "error",
                            "Payment Failed: " + response.error.description
                        );
                        $("#billing_details_form")[0].reset();
                    });

                    rzp.open();
                } else {
                    disableSubmitButton("#proceed_to_pay", "enabled");
                    showSwalToast("error", response.message);
                }
            },

            error: function (xhr, status, error) {
                disableSubmitButton("#proceed_to_pay", "enabled");

                var response = JSON.parse(xhr.responseText);

                // Iterate over the errors and display them
                if (response.errors) {
                    $.each(response.errors, function (field, messages) {
                        var inputField = $(
                            'input[name="' +
                                field +
                                '"], textarea[name="' +
                                field +
                                '"]'
                        );

                        if (field == "selected_date") {
                            showSwalToast(
                                "error",
                                "Please Select Booking Date"
                            );
                        } else if (field == "selected_slot") {
                            showSwalToast("error", "Please Choose Time Slot");
                        }

                        inputField.focus();

                        messages.forEach(function (message) {
                            showError(inputField, message);
                        });
                    });
                }
            },
        });
    }
});

$("#country_dd .menu .item").on("click", function () {
    getStateList($(this).data("value"));
});

function getStateList(country_id) {
    $.ajax({
        url: "/get-state",
        type: "POST",
        data: {
            country_id: country_id,
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            let attribute = "#state_dd .menu .select_scrollarea";
            var option = "";
            // var select_option = '<option value=" ">Select</option>';

            $.each(response.data, function (key, item) {
                option += `<div class="item" data-value="${item.id}">${item.name}</div>`;
            });

            $(attribute).html(option);
        },
        error: function (xhr, status, error) {
            //
        },
    });
}
