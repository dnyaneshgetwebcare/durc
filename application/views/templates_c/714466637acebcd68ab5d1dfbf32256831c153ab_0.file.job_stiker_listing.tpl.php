<?php
/* Smarty version 4.3.2, created on 2025-06-19 11:52:01
  from 'C:\xampp_8_1\htdocs\duroshox_live\application\views\templates\job_stiker_listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6853ddc1948d62_65590431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '714466637acebcd68ab5d1dfbf32256831c153ab' => 
    array (
      0 => 'C:\\xampp_8_1\\htdocs\\duroshox_live\\application\\views\\templates\\job_stiker_listing.tpl',
      1 => 1737651352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6853ddc1948d62_65590431 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content wrapper -->
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
	              <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

	              <th><b>Search <?php ob_start();
echo $_smarty_tpl->tpl_vars['val']->value['title'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</b></th>
	              <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

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
<?php echo '<script'; ?>
>
    var column_details =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['data']->value);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
;
    var page_length_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['page_length_arr']->value);
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
;
    var is_searching_enable = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_searching_enable']->value);
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
;
    var is_top_searching_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_top_searching_enable']->value);
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
;
    var is_paging_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_paging_enable']->value);
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
;
    var is_serverSide =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_serverSide']->value);
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
;
    var no_data_message =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['no_data_message']->value);
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
;
    var is_ordering =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_ordering']->value);
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
;
    var sorting_column = <?php ob_start();
echo $_smarty_tpl->tpl_vars['sorting_column']->value;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
;
    var api_name =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['api_name']->value);
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
;
    var base_url = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/job_striker_listing.js"><?php echo '</script'; ?>
>

<?php }
}
