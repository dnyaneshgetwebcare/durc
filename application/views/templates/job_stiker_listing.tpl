<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Job</a></li>
        <li class="breadcrumb-item active" aria-current="page">Job Stricker</li>
      </ol>
    </nav>
    <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->
    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-3 listing-top-btn">
      <div><input type="text" name="reason" placeholder="Filter Search" class="form-control serarch-filter-input me-0" id="serarch-filter-input" fdprocessedid="bxkoib"></div>
   </div>

    <!-- Responsive Table -->
    <div class="card p-2">
      <div class="table-responsive text-nowrap">
        <table width="100%" id="job_striker_master">
	      <thead>
	          <tr>
	              {{foreach from=$data key=key item=val}}
	              <th><b>Search {{$val['title']}}</b></th>
	              {{/foreach}}
	          </tr>
	      </thead>
	      <tbody></tbody>
	  </table>
      </div>
    </div>
    <!--/ Responsive Table -->
  </div>
  <!-- / Content -->



  <div class="content-backdrop fade"></div>
</div>
<style type="text/css">
	.download-qr .ti-printer{
		font-size: 35px;
	    color: #ffffff;
	    border: 0px solid #d87e7e;
	    border-radius: 50%;
	    padding: 4px;
	    background: #72bdd7;
	}
	.download-qr {
		cursor: pointer;
	}
	.download-qr .ti-square{
		position: relative;
	    color: white;
	    right: 18px;
	    background: white;
	}
	.download-qr .ti-download{
		position: relative;
	    right: 31px;
	    top: -1px;
	}
</style>
<!-- Content wrapper -->
<script>
    var column_details =  {{$data|json_encode}};
    var page_length_arr = {{$page_length_arr|json_encode}};
    var is_searching_enable = {{$is_searching_enable|json_encode}};
    var is_top_searching_enable =  {{$is_top_searching_enable|json_encode}};
    var is_paging_enable =  {{$is_paging_enable|json_encode}};
    var is_serverSide =  {{$is_serverSide|json_encode}};
    var no_data_message =  {{$no_data_message|json_encode}};
    var is_ordering =  {{$is_ordering|json_encode}};
    var sorting_column = {{$sorting_column}};
    var api_name =  {{$api_name|json_encode}};
    var base_url = {{$base_url|json_encode}};
</script>
<script src="public/js/job_striker_listing.js"></script>

