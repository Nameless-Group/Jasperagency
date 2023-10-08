/*==============================================================*/
// Klev Contact Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });


    function submitForm() {
        // Initiate Variables With Form Content
        var formData = new FormData($("#contactForm")[0]);

        $.ajax({
            type: "POST",
            url: '/home/contact-us',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            contentType: false,
            processData: false,
            success: function (res, textStatus, xhr) {
                if (xhr.status === 204) {
                    formSuccess();
                } else {
                    formError();
                    submitMSG(false, res.message);
                }
            },
            error: function (res) {
                formError();
                submitMSG(false, res.message);
            }
        });
    }

    function formSuccess() {
        $("#contactForm")[0].reset();
        toastr.success('We received your message successfully');
    }

    function formError() {
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h4 text-left tada animated text-success";
        } else {
            var msgClasses = "h4 text-left text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict
