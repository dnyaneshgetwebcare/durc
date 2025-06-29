$( document ).ready(function() {
    page.init();
    // alert("ok")
});
var table = '';
const page = {
    init: function(){
        this.dataTable();
        let that = this;
        $(document).on("click",".download-qr",function(){
            var pdfUrl = $(this).attr("data-url");
            var box_slip_id = $(this).attr("data-val");
            // that.initialisePDFPrint(pdfUrl);
            that.initiateSwalAlert(box_slip_id,pdfUrl);
            
        });
    },
    dataTable: function(){

        var data = {};
        table = new DataTable("#box_slip_master", {
            dom: "Bfrtilp",
            orderCellsTop: true,
            fixedHeader: true,
            lengthMenu: page_length_arr,
            // "sDom":is_top_searching_enable,
            columns: column_details,
            processing: false,
            serverSide: is_serverSide,
            sordering: true,
            searching: is_searching_enable,
            ordering: is_ordering,
            bSort: true,
            orderMulti: false,
            pagingType: "full_numbers",
            scrollCollapse: true,
            scrollX: true,
            scrollY: true,
            paging: is_paging_enable,
            fixedHeader: false,
            info: true,
            autoWidth: true,
            lengthChange: true,
             order: sorting_column,
            fixedColumns: {
                leftColumns: 2,
                // end: 1
            },
            ajax: {
                data: {'search':data},    
                url: "striker/get_box_slip_data",
                type: "POST",
            },
            columnDefs: [{ sortable: false, targets: 7 }],
            bScrollCollapse: true,
            language: {
                loadingRecords: "&nbsp;",
                processing: '<div class="spinner"></div>',
                emptyTable: '<div class="p-3 no-data-found-block"><img class="p-2" src="public/assets/no_data_found_new.png" height="150" width="150"><br> No box slip data found..!</div>',
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
    },
    initiateSwalAlert:function(box_slip_id='',pdfUrl=''){
        let that = this;
        Swal.fire({
          title: "Submit reason",
          text: "Submit your reason for reprinting the job striker",
          input: "text",
          inputAttributes: {
            required: 'required',
          },
          showCancelButton: true,
          confirmButtonText: "Save",
          showLoaderOnConfirm: true,
          allowOutsideClick: () => !Swal.isLoading(),
          inputValidator: (value) => {
                return new Promise((resolve) => {
                  if (value != '') {
                    resolve()
                  } else {
                    resolve('Please enter reprinting reason.')
                  }
                })
          }
        }).then((result) => {
          if (result.isConfirmed) {
            const reason = result.value;
            let params_obj = {};
            params_obj.box_slip_id = box_slip_id;
            params_obj.reason = reason;
            params_obj.pdfurl = pdfUrl;
            $.ajax({
                    url: 'striker/reprint_box_slip_data',
                    method: 'POST',
                    data:params_obj,
                    success: function(data) {
                        let result  = JSON.parse(data);
                        if(result.success == 1){
                            that.initialisePDFPrint(pdfUrl);
                        }else{
                            toastr.error(result.message);
                        }
                    },
                    error: function(error) {
                        console.error("Error:", error);
                    }
            });
          }
        });
    }
    
}

