<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Parts Listing</li>
      </ol>
    </nav>
    <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->

    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-3 listing-top-btn">
      <a class="btn btn-seconday" type="button" href="add-update-part" title="Add Part"><span>Add Part</span></a>
    </div>
    <!-- Responsive Table -->
    <div class="card p-2">
      <div class="table-responsive text-nowrap">
        <table class="table table-hover" id="listing">
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
<!-- Content wrapper -->
<link rel="stylesheet" type="text/css" href="public/css/data_table/datatable.css">
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
<script src="public/js/listing.js"></script>

