$(document).ready(function () {
	striker.init();
});

const striker = {
	init: function(){
		this.initiPlugin();
		this.initiPrint();
	},
	initiPlugin: function(){
		$("#part-number").select2({
			placeholder: "Select Part",
		});
		$("#part-number").focus()
	},
	initiPrint:function(){
		let that = this;
		$(document).keydown(function(event) {
			var part_id = $("#part-number").val();
		    if (event.altKey && event.key === 'p') {
		        if(part_id > 0){
		        	that.generatePrint(part_id);
		        }else{
		        	 toastr.error("Please select part.");
		        }
		    }
		});
		$("#get_job_stiker").on("click",function(){
			var part_id = $("#part-number").val();
			if(part_id > 0){
		       	that.generatePrint(part_id);
		    }else{
		        toastr.error("Please select part.");
		    }
		})
	},
	generatePrint:function(part_id = ''){
		let that =this;
		if(part_id > 0){
			let params_obj = {'part_id':part_id };
			$.ajax({
	            url: 'striker/generate_job_striker',
	            method: 'POST',
	            data:params_obj,
	            success: function(data) {
	                let result  = JSON.parse(data);
	                if(result.success == 1){
	                	toastr.success("success.");
	                	that.initialisePDFPrint(result.pdf_url)
	                }
	                // $('.address-block').append(result['html']);
	                // $('#acc_type_'+index).select2()
	                // that.addRules(index);
	            },
	            error: function(error) {
	            	console.error("Error:", error);
	            }
        	});
		}else{
		    toastr.error("Please select part.");
		}
		
	},
	initialisePDFPrint: function(pdfUrl){
        if(pdfUrl != ''){
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
                    }
                    // Print the document
                    printPDF();

                    // // Remove the iframe from the DOM after printing
                    // setTimeout(function() {
                    //     document.body.removeChild(iframe);
                    // }, 1000); // Adjust the delay as needed (1 second in this example)
                };
            }
    }
}