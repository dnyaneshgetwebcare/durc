<?php
/* Smarty version 4.3.2, created on 2024-06-30 16:40:09
  from 'C:\xampp\htdocs\qr_products\application\views\templates\add_update_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66816e493317c8_57626157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '640876f68a116dfa7671d198574c47ee96ad4388' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qr_products\\application\\views\\templates\\add_update_user.tpl',
      1 => 1719750913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66816e493317c8_57626157 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php if (!empty($_smarty_tpl->tpl_vars['user']->value['id'])) {?>Update users<?php } else { ?>Add users<?php }?></li>
      </ol>
    </nav>

    <!-- Basic Layout -->
    <div class="row">

      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><?php if (!empty($_smarty_tpl->tpl_vars['user']->value['id'])) {?>Update User<?php } else { ?>Add User<?php }?></h5>
          </div>
          <div class="card-body">
            <form class="row g-3" id="add_updated_user" method="post" action="javascript:void(0)">

              <div class="col-md-6">
                <label for="name" class="form-label">Name <span class="requied">*</span> </label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php if (!empty($_smarty_tpl->tpl_vars['user']->value['id'])) {
echo $_smarty_tpl->tpl_vars['user']->value['name'];
}?>" />
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email <span class="requied">*</span>  </label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if (!empty($_smarty_tpl->tpl_vars['user']->value['id'])) {
echo $_smarty_tpl->tpl_vars['user']->value['email'];
}?>" />
              </div>
              <?php if (empty($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
              <div class="col-md-6">
                <label for="password" class="form-label">password <span class="requied">*</span> </label>
                <input type="password" class="form-control" id="password" placeholder="********" name="password"   />
                <i class="ti ti-eye password-icon" id="passwordIconHide"></i>
                <i class="ti ti-eye-off password-icon" id="passwordIconShow"></i>
              </div>
            <?php }?>
              <div class="col-md-6">
                <label for="type" class="form-label">User Type <span class="requied">*</span> </label>
                <select class="form-select" aria-label="Default select example" name="type">
                  <option value="">Select User type</option>
                  <option value="Admin" <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == 'Admin') {?>selected<?php }?>>Admin</option>
                  <option value="Job Striker Print Man" <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == 'Job Striker Print Man') {?>selected<?php }?>>Job Striker Print Man</option>
                  <option value="Packing Slip Print Man" <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == 'Packing Slip Print Man') {?>selected<?php }?>>Packing Slip Print Man</option>

                </select></div>

                <div class="text-center">
                  <?php if (!empty($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
                  <input type="text" name="mode" value="update" style="display: none;">
                  <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" style="display: none;">
                  <?php } else { ?>
                  <input type="text" name="mode" value="add" style="display: none;">
                  <?php }?>
                  <button type="submit" class="btn btn btn-primary mt-3  mx-auto"  mode="<?php if (empty($_smarty_tpl->tpl_vars['user']->value['id'])) {?>add<?php } else { ?>update<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['user']->value['id'])) {?>Submit<?php } else { ?>Updated<?php }?></button>
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
 src="public/js/add_update_user.js"><?php echo '</script'; ?>
>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
