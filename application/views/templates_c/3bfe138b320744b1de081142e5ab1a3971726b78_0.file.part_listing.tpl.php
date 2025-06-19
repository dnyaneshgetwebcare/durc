<?php
/* Smarty version 4.3.2, created on 2024-06-30 16:19:40
  from 'C:\xampp\htdocs\qr_products\application\views\templates\part_listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6681697c533041_56279451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bfe138b320744b1de081142e5ab1a3971726b78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qr_products\\application\\views\\templates\\part_listing.tpl',
      1 => 1719750913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6681697c533041_56279451 (Smarty_Internal_Template $_smarty_tpl) {
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
            <tr class="text-nowrap">
              <th>Customer Logo</th>
              <th>part Name</th>
              <th>Customer Name</th>
              <th>Customer Part Number</th>
              <th>Box Packing Qty</th>
              <th>Vendor Initial</th>
              <th>GCS rev Date</th>
              <th>Stroke Travel</th>
              <th>EEL Extended</th>
              <th>EEL Retracted</th>
              <th>LLC Extension</th>
              <th>Maximum Rated Load</th>
              <th class="text-center">Action</th>

            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['part_data']->value, 'parts');
$_smarty_tpl->tpl_vars['parts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['parts']->value) {
$_smarty_tpl->tpl_vars['parts']->do_else = false;
?>
            <tr>
              <td>
                <img src="public/uploads/parts/<?php echo $_smarty_tpl->tpl_vars['parts']->value['customer_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['parts']->value['customer_logo'];?>
" width="150" height="50">
              </td>
              <td><?php echo $_smarty_tpl->tpl_vars['parts']->value['part_name'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['parts']->value['customer_name'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['parts']->value['customer_part_number'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['parts']->value['box_packing_qty'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['parts']->value['vendor_initial'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['parts']->value['gcs_rev_date'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['parts']->value['stroke_travel'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['parts']->value['eel_extended'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['parts']->value['eel_retracted'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['parts']->value['llc_extension'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['parts']->value['maximum_rated_load'];?>
</td>
              <td class="text-center">
              <a  href="add-update-part?id=<?php echo $_smarty_tpl->tpl_vars['parts']->value['part_id'];?>
" class="edit_parts me-2 text-secondary" data-id='<?php echo $_smarty_tpl->tpl_vars['parts']->value['part_id'];?>
'  >
                <i class="ti ti-edit" title="Edit"></i>
              </td>



              </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



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
<?php echo '<script'; ?>
 src="public/js/listing.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
