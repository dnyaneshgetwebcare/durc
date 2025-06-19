$(document).ready(function() {
  $('#listing').DataTable({
    scrollCollapse: true,
    lengthMenu : [[10, 50, 100, 200], [10, 50, 100, 200]],
    scrollX: true,
    scrollY: true,
    dom: "frtilp",
    bScrollCollapse: true,
    language: {
      loadingRecords: "&nbsp;",
      processing: '<div class="spinner"></div>',
      emptyTable: '<div class="p-3 no-data-found-block"><img class="p-2" src="public/assets/no_data_found_new.png" height="150" width="150"><br> No user data found..!</div>',
      paginate: {
          first: "<<",
          last: ">>",
          next: ">",
          previous: "<",
    },
  },
  });
  $('.dataTables_length').find('label').contents().filter(function() {
    return this.nodeType === 3; // Filter out text nodes
  }).remove();
  $(".dataTables_length select").select2({
    minimumResultsForSearch: Infinity
  });
  $("#passwordIconShow").hide();
  $("#confirmPasswordIconShow").hide();

  $("#passwordIconHide").click(function () {
    showPassword("#passwordIconHide", "#password", "#passwordIconShow");
  });

  $("#passwordIconShow").click(function () {
    hidePassword("#passwordIconShow", "#password", "#passwordIconHide");
  });

  $("#confirmPasswordIconHide").click(function () {
    showPassword("#confirmPasswordIconHide", "#confirm_password", "#confirmPasswordIconShow");
  });

  $("#confirmPasswordIconShow").click(function () {
    hidePassword("#confirmPasswordIconShow", "#confirm_password", "#confirmPasswordIconHide");
  });


  $('.change-password-btn').on('click', function() {
    var userId = $(this).data('id');
    $("#user_id").val(userId);
    $("#password").val()
    $("#confirm_password").val()
    $('#changePassModal').modal('show');
  });



  $("#change_password").on("click", function () {
    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();
    if (password == "") {
        toastr.warning("Please enter password.");
      } else if (password.length < 8) {
        toastr.warning("Password must be at least 8 characters long.");
      } else if (confirm_password == "") {
        toastr.warning("Please enter confirm password.");
      } else if (password !== confirm_password) {
        toastr.warning("Confirm password must match the new password.");
      } else {
      var formData = {
        id: $("#user_id").val(),
        password: $("#password").val()
      };
      $.ajax({
        type: "POST",
        url: "user/change_pass_action",
        data: formData,
        success: function(response) {
          var responseObject = JSON.parse(response);
          var msg = responseObject.message;
          var success = responseObject.success;

          if (success == 1) {
            toastr.success(msg);
            setTimeout(function() {
              $('.change-password-model').modal('hide');
            }, 1000);
          } else {
            toastr.error(msg);
          }
        },
        error: function(error) {
          console.error("Error:", error);
        }
      });

    }
  });


  // $("#change_pass_form").validate({
  //         rules: {
  //           password: {
  //             required: true,
  //             minlength: 8
  //           },
  //           confirm_password: {
  //             required: true,
  //             equalTo: "#password"
  //           }
  //         },
  //         messages: {
  //           password: {
  //             required: "Please enter your password.",
  //             minlength: "Password must be at least 8 characters long."
  //           },
  //           confirm_password: {
  //             required: "Please enter your confirm password.",
  //             equalTo: "Passwords do not match"
  //           }
  //         },
  //         errorPlacement: function(error, element) {
  //           var errorId = element.attr("id") + "_error";
  //           error.appendTo("#" + errorId);
  //         },
  //         submitHandler: function(form) {
  //           var formData = {
  //             id: $("#user_id").val(),
  //             password: $("#password").val()
  //           };
  //
  //           $.ajax({
  //             type: "POST",
  //             url: "user/change_pass_action",
  //             data: formData,
  //             success: function(response) {
  //               var responseObject = JSON.parse(response);
  //               var msg = responseObject.message;
  //               var success = responseObject.success;
  //
  //               if (success == 1) {
  //                 toastr.success(msg);
  //                 setTimeout(function() {
  //                   $('.change-password-model').modal('hide');
  //                 }, 1000);
  //               } else {
  //                 toastr.error(msg);
  //               }
  //             },
  //             error: function(error) {
  //               console.error("Error:", error);
  //             }
  //           });
  //         }
  //       });


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
