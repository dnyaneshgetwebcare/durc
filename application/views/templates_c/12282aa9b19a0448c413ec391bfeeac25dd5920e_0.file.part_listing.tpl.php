<?php
/* Smarty version 4.3.2, created on 2024-07-18 21:01:01
  from 'C:\xampp\htdocs\duroshox\application\views\templates\part_listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6699666d972896_13155132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12282aa9b19a0448c413ec391bfeeac25dd5920e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\duroshox\\application\\views\\templates\\part_listing.tpl',
      1 => 1721328813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699666d972896_13155132 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content wrapper -->
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
                <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>

                <th><b>Search <?php ob_start();
echo $_smarty_tpl->tpl_vars['val']->value['title'];
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
</b></th>
                <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>

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
<?php echo '<script'; ?>
>
    var column_details =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['data']->value);
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
;
    var page_length_arr = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['page_length_arr']->value);
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
;
    var is_searching_enable = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_searching_enable']->value);
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
;
    var is_top_searching_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_top_searching_enable']->value);
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
;
    var is_paging_enable =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_paging_enable']->value);
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
;
    var is_serverSide =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_serverSide']->value);
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
;
    var no_data_message =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['no_data_message']->value);
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
;
    var is_ordering =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['is_ordering']->value);
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
;
    var sorting_column = <?php ob_start();
echo $_smarty_tpl->tpl_vars['sorting_column']->value;
$_prefixVariable27 = ob_get_clean();
echo $_prefixVariable27;?>
;
    var api_name =  <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['api_name']->value);
$_prefixVariable28 = ob_get_clean();
echo $_prefixVariable28;?>
;
    var base_url = <?php ob_start();
echo json_encode($_smarty_tpl->tpl_vars['base_url']->value);
$_prefixVariable29 = ob_get_clean();
echo $_prefixVariable29;?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/listing.js"><?php echo '</script'; ?>
>

<?php }
}
