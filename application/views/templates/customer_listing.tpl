
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Customer Listing</li>
      </ol>
    </nav>
    <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->

    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-3 listing-top-btn">
      <a class="btn btn-seconday" type="button" href="add-customer" title="Add user"><span> Add Customer</span></a>
    </div>
    <!-- Responsive Table -->
    <div class="card p-2">
      <div class="table-responsive text-nowrap">
        <table class="table table-hover" id="listing" style="width: 100%;">
          <thead>
            <tr class="text-nowrap">
             <th>Customer Logo</th>
              <th>Customer Name</th>
              <th>Job Stricker Label</th>
              <th>Job Stricker Suffix</th>
              <th class="text-center">Action</th>

            </tr>
          </thead>
          <tbody>
            {foreach from=$customer_details item=customer}
            <tr>
              <td><img src="public/uploads/parts/{$customer['customer_logo']}" width="80" height="80"> </td>
              <td>{$customer['customer_name']}</td>
              <td>{$customer['job_stricker_label']}</td>
              <td>{$customer['job_stricker_suffix']}</td>
              <td class="text-center">
                <a  href="update-customer?id={$customer.customer_id}" class="edit_users me-2 text-secondary" data-id='{$users.id}'  >
                  <i class="ti ti-edit" title="Edit" style="position: relative;top: 5px;"></i>
              </a>

              </td>




            </td>
          </tr>
          {/foreach}

         
        </tbody>

      </table>
    </div>
  </div>
  <!--/ Responsive Table -->
</div>
<!-- / Content -->



<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
<link rel="stylesheet" type="text/css" href="public/css/data_table/datatable.css">
<script >
	$(document).ready(function() {
	  $('#listing').DataTable({
	    scrollCollapse: true,
	    scrollX: true,
	    scrollY: true,
	    dom: "frtilp",
      lengthMenu : [[10, 50, 100, 200], [10, 50, 100, 200]],
	    columnDefs: [{ sortable: false, targets: 4 }],
      bScrollCollapse: true,
            language: {
                loadingRecords: "&nbsp;",
                processing: '<div class="spinner"></div>',
                emptyTable: '<div class="p-3 no-data-found-block"><img class="p-2" src="public/assets/no_data_found_new.png" height="150" width="150"><br> No customer data found..!</div>',
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
	});

</script>

