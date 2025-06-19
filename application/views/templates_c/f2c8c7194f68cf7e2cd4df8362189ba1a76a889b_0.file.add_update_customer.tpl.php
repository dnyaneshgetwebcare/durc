<?php
/* Smarty version 4.3.2, created on 2024-07-11 23:12:36
  from '/var/www/html/extra_work/qr_products/application/views/templates/add_update_customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6690198c4822d8_69813932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2c8c7194f68cf7e2cd4df8362189ba1a76a889b' => 
    array (
      0 => '/var/www/html/extra_work/qr_products/application/views/templates/add_update_customer.tpl',
      1 => 1720719320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6690198c4822d8_69813932 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php if (!empty($_smarty_tpl->tpl_vars['part']->value['customer_id'])) {?>Update Customer<?php } else { ?>Add Customer<?php }?></li>
      </ol>
    </nav>

<!-- Basic Layout -->
<div class="row">

  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><?php if (!empty($_smarty_tpl->tpl_vars['part']->value['customer_id'])) {?>Update Customer<?php } else { ?>Add Customer<?php }?></h5>
      </div>
      <div class="card-body">
        <form class="row g-3" id="add_part_form" method="post" action="javascript:void(0)" enctype="multipart/form-data">
          <div class="col-md-6">
            <label for="customer_name" class="form-label">Customer Name <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="customer_name" placeholder="Enter Part Name" name="customer_name" value="<?php if (!empty($_smarty_tpl->tpl_vars['part']->value['customer_id'])) {
echo $_smarty_tpl->tpl_vars['part']->value['customer_name'];
}?>" />
          </div>
          <div class="col-md-6">
            <label for="job_stricker_label" class="form-label">Job Stricker Label <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="job_stricker_label" placeholder="Enter Job Stricker Label" name="job_stricker_label" value="<?php echo $_smarty_tpl->tpl_vars['part']->value['job_stricker_label'];?>
" />
          </div>
          <div class="col-md-6">
            <label for="job_stricker_suffix" class="form-label">Job Stricker Suffix <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="job_stricker_suffix" placeholder="Enter Job Stricker Suffix" name="job_stricker_suffix" value="<?php echo $_smarty_tpl->tpl_vars['part']->value['job_stricker_suffix'];?>
" />
          </div>
          
          <div class="col-md-6">
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
          </div>
          <div class="text-center">
            <!-- <button type="submit" class="btn btn btn-primary mt-3  mx-auto" name="Submit" >Submit</button> -->
            <?php if (!empty($_smarty_tpl->tpl_vars['part']->value['customer_id'])) {?>
               <input type="text" name="mode" value="update" id="mode" style="display: none;">
                <input type="text" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['part']->value['customer_id'];?>
" style="display: none;">
           <?php } else { ?>
              <input type="text" name="mode" value="add" id="mode" style="display: none;">
           <?php }?>
            <!-- <button type="submit" class="btn btn btn-primary mt-3  mx-auto" name="<?php if (empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {?>addBtn<?php } else { ?>updateBtn<?php }?>" mode="<?php if (empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {?>add<?php } else { ?>update<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['part']->value['part_id'])) {?>Submit<?php } else { ?>Updated<?php }?></button> -->
            <button type="submit" class="btn btn btn-primary mt-3  mx-auto"  mode="<?php if (empty($_smarty_tpl->tpl_vars['part']->value['customer_id'])) {?>add<?php } else { ?>update<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['part']->value['customer_id'])) {?>Submit<?php } else { ?>Updated<?php }?></button>
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
 src="public/js/add_cutomer.js"><?php echo '</script'; ?>
>

<?php }
}
