<?php
/* Smarty version 4.3.2, created on 2024-07-12 20:24:40
  from '/var/www/html/extra_work/qr_products/application/views/templates/box_slip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_669143b0382298_78503618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9264841bdfab7820dcc41f6d3c8bd90826fc039f' => 
    array (
      0 => '/var/www/html/extra_work/qr_products/application/views/templates/box_slip.tpl',
      1 => 1720796077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669143b0382298_78503618 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <?php echo '<script'; ?>
 src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"><?php echo '</script'; ?>
> -->
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
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shift_data']->value, 'shift');
$_smarty_tpl->tpl_vars['shift']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shift']->value) {
$_smarty_tpl->tpl_vars['shift']->do_else = false;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['shift']->value['shift_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['shift']->value['shift_name'] == $_smarty_tpl->tpl_vars['shift_name']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['shift']->value['shift_name'];?>
</option>
                     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
              </div>

          </div>
		   
           
		   <div class="tgdp-box">
		      <div class="activities-log-list text-center mt-5" id="activitiesLogAppendData">
		      	<div class="row">
		      		<div class="col-6 scanner-div">
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
                    <div class="col-6 ">
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
                                         <em class="scann-part-count" id="scann_part_count" data-value='<?php ob_start();
echo $_smarty_tpl->tpl_vars['job_count']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
'><?php ob_start();
echo $_smarty_tpl->tpl_vars['job_count']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</em><em>/</em><em class="total-qty" data-value='<?php ob_start();
echo $_smarty_tpl->tpl_vars['job_packing_qty']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
' id="part_total_qty"><?php ob_start();
echo $_smarty_tpl->tpl_vars['job_packing_qty']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</em>
                                     </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <a class="product-count-box box-div <?php ob_start();
if ($_smarty_tpl->tpl_vars['print_opt']->value != 'Yes') {
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
disabled<?php ob_start();
}
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" href="javascript:void(0)" title="Print Slip" id="print_slip" data-id-val='<?php ob_start();
echo $_smarty_tpl->tpl_vars['box_slip_user_data_id']->value;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
'>
                                        <span >
                                            <img src="http://localhost/extra_work/qr_products/public/img/printer_icon.png" width="70" height="70">
                                        </span>
                                    </a>  
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 part-details ms-4">
                          
                          <div class="col-8 me-2 "<?php if ($_smarty_tpl->tpl_vars['part_name']->value == '') {?>style='display:none;'<?php }?> id="part_name_box">
                            <div class="m-3">
                                <label><span class="part-name-title w-100 d-block">Part Name</span><p class="mb-0"><?php echo $_smarty_tpl->tpl_vars['part_name']->value;?>
</p></label>
                            </div>
                            
                          </div>
                          <div class="col-4 " <?php if ($_smarty_tpl->tpl_vars['print_opt']->value == 'No') {?>style='display:none;'<?php }?> id="print_count_box_div">
                            <div class="m-3">
                                <label>
                                  <span class="part-name-title w-100 d-block mb-2">Print</span>
                                  <em class="scann-part-count" id="print_count_box"><?php echo $_smarty_tpl->tpl_vars['print_count']->value;?>
</em><em>/</em><em class="total-qty"><?php echo $_smarty_tpl->tpl_vars['total_print']->value;?>
</em>
                                </label>
                            </div>
                          </div>
                        </div>
                        <div class="row part-count-main">
                            <div class="progress-bar-div col-">
                                <section>
                                    <div class="pie" data-pie="{ &quot;speed&quot;: 30, &quot;percent&quot;: <?php ob_start();
echo $_smarty_tpl->tpl_vars['job_percentage']->value;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
, &quot;colorSlice&quot;: &quot;#ff8c69&quot;, &quot;colorCircle&quot;: &quot;#f1f1f1&quot;, &quot;round&quot;: true }" data-pie-index="13">
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
<?php echo '<script'; ?>
 src="public/js/plugin/circularProgressBar/circularProgressBar.min.js"><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/gh/tomik23/circular-progress-bar@latest/docs/circularProgressBar.min.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/scanner_min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var job_percentage = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['job_percentage']->value);
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/box_striker_slip.js"><?php echo '</script'; ?>
>


<?php }
}
