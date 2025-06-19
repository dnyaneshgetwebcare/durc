$(document).ready(function () {
    $("#passwordIconShow").hide();
      $("#confirmPasswordIconShow").hide();

    $("#passwordIconHide").click(function () {
        showPassword("#passwordIconHide", "#password", "#passwordIconShow");
    });

    $("#passwordIconShow").click(function () {
        hidePassword("#passwordIconShow", "#password", "#passwordIconHide");
    });

    // $("#confirmPasswordIconHide").click(function () {
    //     showPassword("#confirmPasswordIconHide", "#confirm_password", "#confirmPasswordIconShow");
    // });
    //
    // $("#confirmPasswordIconShow").click(function () {
    //     hidePassword("#confirmPasswordIconShow", "#confirm_password", "#confirmPasswordIconHide");
    // });

    $("#add_updated_user").validate({
        rules: {
            name: {
                required: true,

            },
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 8,
            },
            type:{
              required: true,

            },
        },
        messages: {
            name: {
                required: "Please enter name.",

            },
            email: {
                required: "Please enter email.",
                email: "Please enter a valid email address.",
            },
            password: {
                required: "Please enter password.",
                minlength: "Password must be at least 8 characters long.",
            },
            type:{
              required: "Please select user type.",

            },
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        submitHandler: function (form) {
          var formData = new FormData(form);

            $.ajax({
                type: "POST",
                url: "user/add_update_user_action",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    var responseObject = JSON.parse(response);
                    var msg = responseObject.message;
                    var success = responseObject.success;

                    if (success == 1) {
                        toastr.success(msg);

                        setTimeout(function(){
                            window.location.href = "user-listing";
                        },1000);

                    } else {
                        toastr.error(msg);
                    }
                },
                error: function (error) {
                    console.error("Error:", error);
                },
            });
        },
    });
});

function showPassword(hidePasswordIcon, passwordAttributeId, showPasswordIcon) {
    $(passwordAttributeId).attr("type", "text");
    $(hidePasswordIcon).hide();
    $(showPasswordIcon).show();
}

function hidePassword(hidePasswordIcon, passwordAttributeId, showPasswordIcon) {
    $(passwordAttributeId).attr("type", "password");
    $(hidePasswordIcon).hide();
    $(showPasswordIcon).show();
}
