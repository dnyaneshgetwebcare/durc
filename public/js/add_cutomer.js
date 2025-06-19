$(document).ready(function () {
    $('#customer_logo').change(function() {
      const fileInput = this;
      if (fileInput.files && fileInput.files[0]) {
          const reader = new FileReader();

          reader.onload = function(e) {
              $('#company_logo_img').attr('src', e.target.result);
              $('#company_logo_img').show()
          };
          reader.readAsDataURL(fileInput.files[0]);
      }
    });
    $("#add_part_form").validate({
        rules: {
            customer_name: {
                required: true,
            },
            job_stricker_label: {
                required: true,
            },
            job_stricker_suffix: {
                required: true,
            },
            customer_logo: {
                required: function(element) {
                    var mode = $('#mode').val();
                    var required = true;
                    if(mode == 'update'){
                        required =false;
                    }
                // Add custom logic to check if the value is not blank
                    return required;
                }
            },
        },
        messages: {
        customer_name: {
            required: "Please enter customer name.",
        },
        job_stricker_label: {
            required: "Please enter job stricker label.",
        },
        job_stricker_suffix: {
            required: "Please enter job stricker suffix.",
        },
        customer_logo: {
            required: "Please upload customer logo.",
        },
    },

        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        submitHandler: function (form) {
           var formData = new FormData(form);

            $.ajax({
                type: "POST",
                url: "part/add_update_customer_action",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    var responseObject = JSON.parse(response);
                    var msg = responseObject.message;
                    var success = responseObject.success;

                    if (success == 1) {
                        var url = "";
                        toastr.success(msg);
                        setTimeout(function(){
                            window.location.href = "customer-listing";
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
