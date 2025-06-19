<!-- <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script> -->

  <script src="//rawgit.com/kabachello/jQuery-Scanner-Detection/master/jquery.scannerdetection.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/box_striker_slip.css">
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Box</a></li>
        <li class="breadcrumb-item active" aria-current="page">Box Sticker</li>
      </ol>
    </nav>
    <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->


    <!-- Responsive Table -->
    <div class="card p-2">
      <div class="side-box-rockeye">
          <div class="title row">
             <div class="col-10">
                 <h3 class="">
                Box Slip
              </h3>
             </div>
              <div class="col-2"> 
                  <select class="form-control" id="shift_name" style="width: 100%;" name="shift_name">
                     {foreach from=$shift_data item=shift}
                      <option value="{$shift['shift_name']}" {if $shift['shift_name'] eq $shift_name}selected{/if}>{$shift['shift_name']}</option>
                     {/foreach}
                </select>
              </div>

          </div>
		   
           
		   <div class="tgdp-box">
		      <div class="activities-log-list text-center mt-5" id="activitiesLogAppendData">
		      	<div class="row">
		      		<div class="col-6 scanner-div hide">
		      			<div id="reader" class="m-auto" style="position: relative; padding: 0px; ">
	                    <div id="reader__dashboard" style="width: 100%;">
	                        <div id="reader__dashboard_section" style="width: 100%; padding: 10px 0px; text-align: left;">
	                            <div>
	                                <div id="reader__dashboard_section_csr" style="display: none; text-align: center;">
	                                    <span style="margin-right: 10px;">
	                                        <select id="reader__camera_selection" style="display: none;">
	                                            <option value="77b5e435f35c7c8fcb3395c063e23a2215a97ca04fe385c5c2c8e784276b0c47">HP TrueVision HD (04f2:b56c)</option>
	                                        </select>
	                                    </span>
	                                    <span><button style="opacity: 1; display: inline-block;">Start Scanning</button><button disabled="" style="display: none;">Stop Scanning</button></span>
	                                </div>
	                                <div id="reader__dashboard_section_fsr" style="text-align: center; display: block;"><input id="reader__filescan_input" accept="image/*" type="file" style="width: 200px;" /><span> Select Image</span></div>
	                            </div>
	                            <div style="text-align: center;"><a id="reader__dashboard_section_swaplink" href="#scan-using-file" style="text-decoration: underline; display: inline-block;">Scan using camera directly</a></div>
	                        </div>
	                    </div>
	                </div>
		      		</div>
                    <div class="col-12 ">
                        <div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="shift-box box-div">
                                        <span>Shift Name</span>
                                        <label>1st</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="product-count-box box-div" >
                                        <span>Scann Part</span>
                                        <label>
                                         <em class="scann-part-count" id="scann_part_count" data-value='{{$job_count}}'>{{$job_count}}</em><em>/</em><em class="total-qty" data-value='{{$job_packing_qty}}' id="part_total_qty">{{$job_packing_qty}}</em>
                                     </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <a class="product-count-box box-div {{if $print_opt neq 'Yes'}}disabled{{/if}}" href="javascript:void(0)" title="Print Slip" id="print_slip" data-id-val='{{$box_slip_user_data_id}}'>
                                        <span >
                                            <img src="public/img/printer_icon.png" width="70" height="70">
                                        </span>
                                    </a>  
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 part-details ms-4">
                          
                          <div class="col-8 me-2 "{if $part_name eq ''}style='display:none;'{/if} id="part_name_box">
                            <div class="m-3">
                                <label><span class="part-name-title w-100 d-block">Part Name</span><p class="mb-0">{$part_name}</p></label>
                            </div>
                            
                          </div>
                          <div class="col-4 " {if $print_opt eq 'No'}style='display:none;'{/if} id="print_count_box_div">
                            <div class="m-3">
                                <label>
                                  <span class="part-name-title w-100 d-block mb-2">Print</span>
                                  <em class="scann-part-count" id="print_count_box">{$print_count}</em><em>/</em><em class="total-qty">{$total_print}</em>
                                </label>
                            </div>
                          </div>
                        </div>
                        <div class="row part-count-main">
                            <div class="progress-bar-div col-">
                                <section >
                                    <div class="pie" data-pie="{ &quot;speed&quot;: 30, &quot;percent&quot;: {{$job_percentage}}, &quot;colorSlice&quot;: &quot;#ff8c69&quot;, &quot;colorCircle&quot;: &quot;#f1f1f1&quot;, &quot;round&quot;: true }" data-pie-index="18" >
                                    </div>
                                </section>
                            </div>
                        </div>
                        
                        
                    </div>
		      	</div>
				    
				   
				</div>
		   </div>
		</div>
		<div class="short-cut-key m-2">
		   
		   </div>
    </div>
    <!--/ Responsive Table -->
  </div>
  <!-- / Content -->



  <div class="content-backdrop fade"></div>
</div>
<style type="text/css">
	.scanner-div {
		    border-right: 3px solid #95badf !important;
	}
  .part-details .col-8{
    min-height: 53px;
    background: #f5f7f9;
    border-radius: 10px;
    width: 70%;
    display: inline-block;
    text-align: center;
    font-family: 'GilroySemibold';
  }
  .part-details .col-4{
        min-height: 53px;
    background: #f5f7f9;
    border-radius: 10px;
    width: 28%;
    display: inline-block;
    text-align: center;
    font-family: 'GilroySemibold';
  }
  .part-details .part-name-title{
    letter-spacing: 0.8px;
    color: #1B252F;
    font-size: 17px;
    font-weight: 600;
  }
  .part-details label em {
    font-style: normal;
    font-size: 20px;
  }
  .part-details label em.scann-part-count {
    color: #3dd93d;
    font-size: 20px;
  }
  .part-details label em.total-qty {
    color: #72bdd7;
    font-size: 20px;
  }
  .hide {
    display: none !important;
  }
</style>
<script src="public/js/plugin/circularProgressBar/circularProgressBar.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/gh/tomik23/circular-progress-bar@latest/docs/circularProgressBar.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
<script src="public/js/scanner_min.js"></script>
<script type="text/javascript">
    var job_percentage = {{$job_percentage|@json_encode}}
</script>
<script src="public/js/box_striker_slip.js"></script>


