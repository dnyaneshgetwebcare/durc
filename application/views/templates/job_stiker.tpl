
<!-- Content wrapper -->
<div class="content-wrapper job-stiker">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Job Stricker</li>
      </ol>
    </nav>
    <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->


    <!-- Responsive Table -->
    <div class="card p-2">
      <div class="side-box-rockeye">
		   <h3 class="">Job Stricker</h3>
		   <div class="tgdp-box">
		      <div class="activities-log-list text-center mt-5" id="activitiesLogAppendData">
				   <div class="timiline-item-lt">
				      <!--?xml version="1.0" encoding="iso-8859-1"?-->
				      <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
				     <img src="{{base_url()}}public/assets/img/qr-code.png">
				   </div>
				   <div class="timiline-item-rt">
				      <h2>QR Code Printing: Choosing the Right Part </h2>
				      <div class="scan-enter-box">
				         <select class="part-number" id="part-number" style="width: 28%;">
				         	<option value=""></option>
				         {foreach from=$part_data item=part}
						  <option value="{$part['part_id']}">{$part['part_name']}</option>
						 {/foreach}
						</select>
				      </div>
				       <a class="btn btn-primary mt-4" title="Submit" id="get_job_stiker" hijacked="yes">
				         <span>Print</span>
				         </a>
				   </div>
				</div>
		   </div>
		</div>
		<div class="short-cut-key m-2">
		   	<span>Shortcut key for print :</span> <em>Alt+P</em>
		   </div>
    </div>
    <!--/ Responsive Table -->
  </div>
  <!-- / Content -->



  <div class="content-backdrop fade"></div>
</div>
<style type="text/css">
.short-cut-key span{
	    font-size: 17px;
    font-weight: 600;
    color: #000;
}
.short-cut-key em{
	    font-style: normal;
    font-size: 17px;
    font-weight: 900;
    color: green;
}
.select2-container--default .select2-selection--single {
	height: 38px;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    text-align: start;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 35px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 6px;
}
</style>
<script src="public/js/job_striker.js"></script>

