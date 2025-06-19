$(document).ready(function () {
	box_slip.init();
});
var circle = '';
// circle.animationTo({index: 1, percent: '37'});
const box_slip = {
	init: function(){
		this.initiateQrcode();
		this.initiateProgressBar();
		this.initScannBarcodeGun();
		let that = this;
		$("#print_slip").on("click",function(){	
			var part_scann_count = parseInt($("#scann_part_count").attr('data-value'));
			var total_parts = parseInt($("#part_total_qty").attr('data-value'));
			console.log(part_scann_count,total_parts)
			if(!$(this).hasClass('disabled') && part_scann_count == total_parts){
				var box_slip_id = $(this).attr("data-id-val");
				let params_obj = {};
		        params_obj.box_slip_id = box_slip_id;
				$.ajax({
					url: 'striker/box_scann_slip_print',
				    method: 'POST',
				    data:params_obj,
				    success: function(data) {
					    let result  = JSON.parse(data);
					    if(result.success == 1){
					    	// console.log(result.pdf_url);
					    	$("#print_count_box").html(result.print_count)
					    	var pdfUrl = result.pdf_url;
							that.initiatePrint(pdfUrl,result.reload_page);
							// location.reload();
					    }else{
					    	toastr.error(result.message);
					    }
				        //    $('.address-block').append(result['html']);
				        //    $('#acc_type_'+index).select2()
				        //    that.addRules(index);
				    },
				    error: function(error) {
				    	console.error("Error:", error);
				    }
			    });
			}
		});
		$("#shift_name").on("change",function(){
			var shift_name = $(this).val();
			$(".shift-box label").html(shift_name);
		})
		$("#shift_name").select2()
		$("#shift_name").trigger("change")
	},
	initiateQrcode: function(){
		var html5QrCodeScanner = new Html5QrcodeScanner("reader", {
                fps: 10,
                qrbox: 250,
            });
		html5QrCodeScanner.render(this.onScanSuccess,this.onScanError);
	},
	onScanSuccess: function(qrCodeMessage){
		let params_obj = {};
		var shift_name = $("#shift_name").val();
        params_obj.qr_data = qrCodeMessage;
        params_obj.shift_name = shift_name;
		$.ajax({
			url: 'striker/scann_part',
		    method: 'POST',
		    data:params_obj,
		    success: function(data) {
			    let result  = JSON.parse(data);
			    if(result.success == 1){
			    	$("#scann_part_count").html(result.job_count);
			    	$("#scann_part_count").attr("data-value",result.job_count);
			    	$("#part_total_qty").html(result.job_packing_qty);
			    	$("#part_total_qty").attr("data-value",result.job_packing_qty);
			    	circle.animationTo({index: 1, percent: result.job_percentage});

			    	if(result.part_name !=''){
			    		$("#part_name_box p").html(result.part_name);
			    		$("#part_name_box").show();
			    	}
			    	if(result.print_enable == 'Yes'){
			    		$("#print_slip").attr("data-id-val",result.box_slip_user_details_id);
			    		$("#print_slip").removeClass("disabled");
			    		$("#print_count_box_div").show();
			    	}else{
						toastr.success(result.message);
			    		$("#print_slip").addClass("disabled");
			    	}
			    }else{
			    	toastr.error(result.message);
			    }
			    
		        //    $('.address-block').append(result['html']);
		        //    $('#acc_type_'+index).select2()
		        //    that.addRules(index);
		    },
		    error: function(error) {
		    	console.error("Error:", error);
		    }
	    });
	},
	onScanError: function(){
	},
	initiateProgressBar: function(){
		const pie = document.querySelectorAll(".pie");
		const elements = [].slice.call(document.querySelectorAll(".pie"));
 		circle = new CircularProgressBar("pie");
 		if ("IntersectionObserver" in window) {
	    const config = {
	      root: null,
	      rootMargin: "0px",
	      threshold: 0.75 };
	    const ovserver = new IntersectionObserver((entries, observer) => {
	      entries.forEach(entry => {
	        if (entry.isIntersecting && entry.intersectionRatio > 0.75) {
	          circle.initial(entry.target);
	          observer.unobserve(entry.target);
	        }
	      });
	    }, config);

	    elements.map(item => {
	      ovserver.observe(item);
	    });
	  } else {
	    elements.map(element => {
	      circle.initial(element);
	    });
	  }
	},
	initiatePrint:function(pdfUrl='',reload_page ='No'){
		if(pdfUrl != '' ){
                // Create a hidden iframe dynamically
                var iframe = document.createElement('iframe');
                iframe.style.display = 'none';  // Hide the iframe
                iframe.src = pdfUrl;
                document.body.appendChild(iframe);
                // Wait for the PDF document to load in the iframe
                iframe.onload = function() {
                    // Function to print the document
                    function printPDF() {
                        if (iframe.contentWindow) {
                            iframe.contentWindow.focus();
                            iframe.contentWindow.print();
                        } else {
                            // For older browsers
                            iframe.focus();
                            iframe.contentWindow.print();
                        }
                        if(reload_page == 'Yes'){
	                        const infanticide = () => {
						      location.reload();
						    }
					    	window.addEventListener('mousemove', infanticide);
				    	}
                    }
                    printPDF();
                };

            // if(reload_page == 'Yes'){
            // 	location.reload();
            // }
        }else{
        	// var win = window.open(pdfUrl, '_blank');
			// win.onload = function() {
			//     win.focus();
			//     win.print();
			//     location.reload();
			//     // // Close the window/tab after printing
			//     // setTimeout(function() {
			//     //     win.close();
			//     // }, 1000); // Adjust the delay as needed (1 second in this example)
			// };
			// location.reload();
        }
	},
	initScannBarcodeGun: function(){
		let that = this;
		$(document).scannerDetection({
		  timeBeforeScanTest: 200, // wait for the next character for upto 200ms
		  avgTimeByChar: 100, // it's not a barcode if a character takes longer than 100ms
		  onComplete: function (barcode, qty) {
		    console.log(barcode);
		    that.onScanSuccess(barcode)
		  } // main callback function 
		});
	}
}