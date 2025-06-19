<?php
/* Smarty version 4.3.2, created on 2024-06-30 17:20:11
  from 'C:\xampp\htdocs\qr_products\application\views\templates\job_stiker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_668177ab911a61_05635635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da823b7082efa3ab64b89e96045a1a00a7cf45a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qr_products\\application\\views\\templates\\job_stiker.tpl',
      1 => 1719760721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_668177ab911a61_05635635 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content wrapper -->
<div class="content-wrapper">
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
				     <img src="http://localhost/extra_work/qr_products/public/assets/img/qr-code.png">
				   </div>
				   <div class="timiline-item-rt">
				      <h2>QR Code Printing: Choosing the Right Part </h2>
				      <div class="scan-enter-box">
				         <select class="part-number" id="part-number" style="width: 28%;">
				         	<option value=""></option>
				         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['part_data']->value, 'part');
$_smarty_tpl->tpl_vars['part']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['part']->value) {
$_smarty_tpl->tpl_vars['part']->do_else = false;
?>
						  <option value="<?php echo $_smarty_tpl->tpl_vars['part']->value['part_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['part']->value['part_name'];?>
</option>
						 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
				      </div>
				       <a class="btn btn-primary mt-4" title="Submit" id="get_transaction" hijacked="yes">
				         <span>Print</span>
				         </a>
				   </div>
				</div>
		   </div>
		</div>
    </div>
    <!--/ Responsive Table -->
  </div>
  <!-- / Content -->



  <div class="content-backdrop fade"></div>
</div>
<style type="text/css">
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
<?php echo '<script'; ?>
 src="public/js/job_striker.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
