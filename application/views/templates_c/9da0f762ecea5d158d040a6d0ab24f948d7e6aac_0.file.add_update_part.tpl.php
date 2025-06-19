<?php
/* Smarty version 4.3.2, created on 2024-07-12 20:02:00
  from '/var/www/html/extra_work/qr_products/application/views/templates/add_update_part.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66913e6025fa65_59561833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9da0f762ecea5d158d040a6d0ab24f948d7e6aac' => 
    array (
      0 => '/var/www/html/extra_work/qr_products/application/views/templates/add_update_part.tpl',
      1 => 1720788504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66913e6025fa65_59561833 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {?>Update Parts<?php } else { ?>Add Parts<?php }?></li>
      </ol>
    </nav>

<!-- Basic Layout -->
<div class="row">

  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {?>Update Parts<?php } else { ?>Add Parts<?php }?></h5>
      </div>
      <div class="card-body">
        <form class="row g-3" id="add_part_form" method="post" action="javascript:void(0)" enctype="multipart/form-data">
          <div class="col-md-6">
            <label for="part_name" class="form-label">part Name <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="part_name" placeholder="Enter part Name" name="part_name" value="<?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {
echo $_smarty_tpl->tpl_vars['part']->value['part_name'];
}?>" />
          </div>
          <div class="col-md-6">
            <label for="customer_name" class="form-label">Customer Name <span class="requied">*</span>  </label>

            <select class="form-control" id="customer_name" style="width: 100%;" name="customer_name">
                 <option value=""></option>
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_details']->value, 'customer');
$_smarty_tpl->tpl_vars['customer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customer']->value) {
$_smarty_tpl->tpl_vars['customer']->do_else = false;
?>

                  <option value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['customer_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['part']->value['customer_id'] == $_smarty_tpl->tpl_vars['customer']->value['customer_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['customer']->value['customer_name'];?>
</option>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          </div>
          <div class="col-md-6">
            <label for="customer_part_name" class="form-label">Customer Part Name <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="customer_part_name" placeholder="Enter Customer Part Name" name="customer_part_name" value="<?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {
echo $_smarty_tpl->tpl_vars['part']->value['customer_part_name'];
}?>" />
          </div>
          <div class="col-md-6">
            <label for="customer_part_number" class="form-label">Customer Part Number <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="customer_part_number" placeholder="Enter Customer Part Number" name="customer_part_number" value="<?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {
echo $_smarty_tpl->tpl_vars['part']->value['customer_part_number'];
}?>" />
          </div>
          <div class="col-md-6">
            <label for="box_packing_qty" class="form-label">Box Packing Qty <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="box_packing_qty" placeholder="Enter Box Packing Qty" name="box_packing_qty" value="<?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {
echo $_smarty_tpl->tpl_vars['part']->value['box_packing_qty'];
}?>" />
          </div>
          <div class="col-md-6">
            <label for="vendor_initial" class="form-label">Vendor Initial <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="vendor_initial" placeholder="Enter Vendor Initial" name="vendor_initial" value="<?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {
echo $_smarty_tpl->tpl_vars['part']->value['vendor_initial'];
}?>" />
          </div>
          <div class="col-md-6">
            <label for="gcs_rev_date" class="form-label">GCS Rev. Date <span class="requied">*</span> </label>
            <input type="date" class="form-control" id="gcs_rev_date" placeholder="Enter GCS Rev. Date" name="gcs_rev_date" value="<?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {
echo $_smarty_tpl->tpl_vars['part']->value['gcs_rev_date'];
}?>" />
          </div>
          <div class="col-md-6">
            <label for="stroke_travel" class="form-label">Stroke Travel <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="stroke_travel" placeholder="Enter Stroke Travel" name="stroke_travel" value="<?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {
echo $_smarty_tpl->tpl_vars['part']->value['stroke_travel'];
}?>" />
          </div>
          <div class="col-md-6">
            <label for="eel_extended" class="form-label">Eyelet to Eyelet Length Fully Extended <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="eel_extended" placeholder="Enter Eyelet to Eyelet Length Fully Extended " name="eel_extended" value="<?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {
echo $_smarty_tpl->tpl_vars['part']->value['eel_extended'];
}?>" />
          </div>
          <div class="col-md-6">
            <label for="eel_retracted" class="form-label">Eyelet to Eyelet Length Fully Retracted <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="eel_retracted" placeholder="Enter Eyelet to Eyelet Length Fully Retracted" name="eel_retracted" value="<?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {
echo $_smarty_tpl->tpl_vars['part']->value['eel_retracted'];
}?>" />
          </div>
          <div class="col-md-6">
            <label for="llc_extension" class="form-label">Lateral Load Capacity at Full Extension <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="llc_extension" placeholder="Enter Lateral Load Capacity at Full Extension" name="llc_extension" value="<?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {
echo $_smarty_tpl->tpl_vars['part']->value['llc_extension'];
}?>" />
          </div>
          <div class="col-md-6">
            <label for="maximum_rated_load" class="form-label">Maximum Rated Load <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="maximum_rated_load" placeholder="Enter Maximum Rated Load" name="maximum_rated_load" value="<?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {
echo $_smarty_tpl->tpl_vars['part']->value['maximum_rated_load'];
}?>" />
          </div>
          <!-- <div class="col-md-6">
            <label for="customer_logo" class="form-label">Customer Logo <span class="requied">*</span> </label>
            <?php ob_start();
if ($_smarty_tpl->tpl_vars['mode']->value == 'Add') {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

              <input type="file" class="form-control" id="customer_logo" name="customer_logo" />
            <?php ob_start();
} else {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

              <input type="file" class="form-control" id="customer_logo" name="customer_logo" />
              <input type="hidden" class="form-control" id="customer_logo_old" name="customer_logo_old" value="<?php echo $_smarty_tpl->tpl_vars['part']->value['customer_logo'];?>
" />
            <?php ob_start();
}
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

            <img src="public/uploads/parts/<?php echo $_smarty_tpl->tpl_vars['part']->value['customer_logo'];?>
" id="company_logo_img" <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'Add') {?>style='display:none'<?php }?> width="100" height="80" class="mt-3">
          </div> -->
          <div class="text-center">
            <!-- <button type="submit" class="btn btn btn-primary mt-3  mx-auto" name="Submit" >Submit</button> -->
            <?php if (!empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {?>
               <input type="text" name="mode" value="update" id="mode" style="display: none;">
                <input type="text" name="part_id" value="<?php echo $_smarty_tpl->tpl_vars['part']->value['part_id'];?>
" style="display: none;">
           <?php } else { ?>
              <input type="text" name="mode" value="add" id="mode" style="display: none;">
           <?php }?>
            <!-- <button type="submit" class="btn btn btn-primary mt-3  mx-auto" name="<?php if (empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {?>addBtn<?php } else { ?>updateBtn<?php }?>" mode="<?php if (empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {?>add<?php } else { ?>update<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {?>Submit<?php } else { ?>Updated<?php }?></button> -->
            <button type="submit" class="btn btn btn-primary mt-3  mx-auto"  mode="<?php if (empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {?>add<?php } else { ?>update<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {?>Submit<?php } else { ?>Updated<?php }?></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- / Content -->


<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
<?php echo '<script'; ?>
 src="public/js/add_part.js"><?php echo '</script'; ?>
>

<?php }
}
