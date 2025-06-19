$(document).ready(function () {
  $('#company_logo').change(function() {
      const fileInput = this;
      if (fileInput.files && fileInput.files[0]) {
          const reader = new FileReader();

          reader.onload = function(e) {
              $('#company_logo_old').attr('src', e.target.result);
          };
          reader.readAsDataURL(fileInput.files[0]);
      }
  });
  $("#config_setting_form").submit(function(e){
      var flag = 0;
      $(".config-card input.config-val").each(function( index ) {
          var value = $( this ).val();
          if(value == '' || value == undefined){
            flag = 1;
            $(this).addClass("error")
          }

      });
      if(flag == 0){
            e.preventDefault(); // Prevent form submission
            // Serialize form data
            // var formData = $(this).serialize();
            var formData = new FormData($('#config_setting_form')[0]);
            $.ajax({
                type: "POST",
                url: "user/update_config_setting_action",
                data: formData,
                 processData: false, // Important: Don't process the data
            contentType: false, // Important: Set contentType to false
                success: function (response) {
                    var responseObject = JSON.parse(response);
                    var msg = responseObject.message;
                    var success = responseObject.success;

                    if (success == 1) {
                        var url = "";
                        toastr.success(msg);
                        setTimeout(function(){
                            window.location.href = "config-setting";
                        },1000);

                    } else {
                        toastr.error(msg);
                    }
                },
                error: function (error) {
                    console.error("Error:", error);
                },
            });
          }
         
          console.log(flag);
   });
  
    // $("#config_setting_form").validate({
    //     rules: {
    //         document_number: {
    //             required: true,
    //         },
    //         reference_number: {
    //             required: true,
    //         },
    //         company_logo: {
    //             // required: true,
    //         },
    //         },
    //         messages: {
    //         document_number: {
    //             required: "Please enter document number.",
    //         },
    //         reference_number: {
    //             required: "Please enter reference number.",
    //         },
    //         company_logo: {
    //             // required: "Please upload company logo.",
    //         },
    //     },

    //     errorPlacement: function (error, element) {
    //         error.insertAfter(element);
    //     },
    //     submitHandler: function (form) {
    //        var formData = new FormData(form);
           // $.ajax({
           //      type: "POST",
           //      url: "user/update_config_setting_action",
           //      data: formData,
           //      processData: false,
           //      contentType: false,
           //      success: function (response) {
           //          var responseObject = JSON.parse(response);
           //          var msg = responseObject.message;
           //          var success = responseObject.success;

           //          if (success == 1) {
           //              var url = "";
           //              toastr.success(msg);
           //              setTimeout(function(){
           //                  window.location.href = "part-listing";
           //              },1000);

           //          } else {
           //              toastr.error(msg);
           //          }
           //      },
           //      error: function (error) {
           //          console.error("Error:", error);
           //      },
           //  });
    //     },
    // });
});
