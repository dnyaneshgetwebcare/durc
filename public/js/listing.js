

$( document ).ready(function() {
    page.init();
});
var table = '';
const page = {
    init: function(){
        this.dataTable();
        let that = this;
    },
    dataTable: function(){

        var data = {};
        table = new DataTable("#listing", {
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
            ajax: {
                data: {'search':data},    
                url: "part/part_listing",
                type: "POST",
            },
            columnDefs: [{ sortable: false, targets: 13}],
            bScrollCollapse: true,
            language: {
                loadingRecords: "&nbsp;",
                processing: '<div class="spinner"></div>',
                emptyTable: '<div class="p-3 no-data-found-block"><img class="p-2" src="public/assets/no_data_found_new.png" height="150" width="150"><br> No parts slip data found..!</div>',
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
    
    
}

