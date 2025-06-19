$(document).ready(function() {
	page.init();

});

const page = {
	init: function(){
		this.initDatatable();
		this.initFormValidation();
		$('#add_shift').on('click', function() {
			$("#changePassModalLabel").html("Add Shift")
			$("#shift_name").val('');
			$("#mode").val('Add');
			$("#shift_id").val('');
			$("#shift_start_time").val('');
			$("#shift_end_time").val('');
		    $('#addShift').modal('show');
		});
		$('.edit_shift').on('click', function() {

			var data = $(this).attr("data-val");
			data = JSON.parse(atob(data));
			$("#changePassModalLabel").html("Update Shift")
			$("#mode").val('Update');
			$("#shift_id").val(data.shift_id);
			$("#shift_name").val(data.shift_name);
			$("#shift_start_time").val(data.shift_start_time);
			$("#shift_end_time").val(data.shift_end_time);
		    $('#addShift').modal('show');
		});
	},
	initDatatable: function(){
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
		      emptyTable: '<div class="p-3 no-data-found-block"><img class="p-2" src="public/assets/no_data_found_new.png" height="150" width="150"><br> No shift data found..!</div>',
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
	},
	initFormValidation: function(){
		$.validator.addMethod("timeGreaterThan", function(value, element, params) {
	        var startTime = $('#shift_start_time').val();
	        var endTime = $('#shift_end_time').val();
	        
	        // Compare times (assuming format HH:mm)
	        var start = new Date("1970-01-01 " + startTime);
	        var end = new Date("1970-01-01 " + endTime);
	        
	        return start < end;
	    }, 'End time must be greater than Start time');
		$("#add_part_form").validate({
        rules: {
            shift_name: {
                required: true,
            },
            shift_start_time: {
                required: true,
            },
            shift_end_time: {
                required: true,
                // timeGreaterThan: true
            },
            
        },
        messages: {
	        shift_name: {
	            required: "Please enter shift name.",
	        },
	        shift_start_time: {
	            required: "Please select shift start time.",
	        },
	        shift_end_time: {
	            required: "Please select shift end time.",
	            // timeGreaterThan: "Shift end time must be greater than shift start time."
	        },
	    },

	    errorPlacement: function (error, element) {
	        error.insertAfter(element);
	    },
	    submitHandler: function (form) {
	           var formData = new FormData(form);
	            $.ajax({
	                type: "POST",
	                url: "user/add_shift",
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
	                            window.location.reload();
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
	}
}


