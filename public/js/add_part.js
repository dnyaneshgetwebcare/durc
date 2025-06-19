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
    $("#customer_name").select2({
        placeholder: "Select Customer",
    })
    $("#add_part_form").validate({
        rules: {
            part_name: {
                required: true,
            },
            customer_name: {
                required: true,
            },
            customer_part_name:{
                required:true
            },
            customer_part_number: {
                required: true,
            },
            box_packing_qty: {
                required: true,
            },
            vendor_initial: {
                required: true,
            },
            gcs_rev_date: {
                required: true,
            },
            stroke_travel: {
                required: true,
            },
            eel_extended: {
                required: true,
            },
            eel_retracted: {
                required: true,
            },
            llc_extension: {
                required: true,
            },
            maximum_rated_load: {
                required: true,
            },
            // customer_logo: {
            //     required: function(element) {
            //         var mode = $('#mode').val();
            //         var required = true;
            //         if(mode == 'update'){
            //             required =false;
            //         }
            //     // Add custom logic to check if the value is not blank
            //         return required;
            //     }
            // },
        },
        messages: {
        part_name: {
            required: "Please enter part name.",
        },
        customer_name: {
            required: "Please enter customer name.",
        },
        customer_part_name:{
            required: "Please enter customer part name.",
        },
        customer_part_number: {
            required: "Please enter customer part number.",
        },
        box_packing_qty: {
            required: "Please enter box packing quantity.",
        },
        vendor_initial: {
            required: "Please enter vendor initial.",
        },
        gcs_rev_date: {
            required: "Please enter GCS revision date.",
        },
        stroke_travel: {
            required: "Please enter stroke travel.",
        },
        eel_extended: {
            required: "Please enter EEL extended value.",
        },
        eel_retracted: {
            required: "Please enter EEL retracted value.",
        },
        llc_extension: {
            required: "Please enter LLC extension.",
        },
        maximum_rated_load: {
            required: "Please enter maximum rated load.",
        },
        // customer_logo: {
        //     required: "Please upload customer logo.",
        // },
    },

        errorPlacement: function (error, element) {
            if(element.prop('tagName') == 'SELECT'){
                    $(element).parents(".col-md-6").find(".select2-container").after(error)
                }else{
                    error.insertAfter(element); 
                }
        },
        submitHandler: function (form) {
           var formData = new FormData(form);

            $.ajax({
                type: "POST",
                url: "part/add_update_part_action",
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
                            window.location.href = "part-listing";
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
