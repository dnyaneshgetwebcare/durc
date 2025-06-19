<?php
/* Smarty version 4.3.2, created on 2024-07-12 17:50:56
  from '/var/www/html/extra_work/qr_products/application/views/templates/user_listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66911fa8bc5342_35754994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74be9642b36cd094c3718236b10d88123759d864' => 
    array (
      0 => '/var/www/html/extra_work/qr_products/application/views/templates/user_listing.tpl',
      1 => 1720786698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66911fa8bc5342_35754994 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Users Listing</li>
      </ol>
    </nav>
    <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->

    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-3 listing-top-btn">
      <a class="btn btn-seconday" type="button" href="add-update-user" title="Add user"><span> Add user</span></a>
    </div>
    <!-- Responsive Table -->
    <div class="card p-2">
      <div class="table-responsive text-nowrap">
        <table class="table table-hover" id="listing" style="width: 100%;">
          <thead>
            <tr class="text-nowrap">

              <th>Name</th>
              <th>Email</th>
              <th>User Type</th>

              <th class="text-center">Action</th>

            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_details']->value, 'users');
$_smarty_tpl->tpl_vars['users']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['users']->value) {
$_smarty_tpl->tpl_vars['users']->do_else = false;
?>
            <tr>

              <td><?php echo $_smarty_tpl->tpl_vars['users']->value['name'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['users']->value['email'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['users']->value['type'];?>
</td>

              <td class="text-center">
                <a  href="add-update-user?id=<?php echo $_smarty_tpl->tpl_vars['users']->value['id'];?>
" class="edit_users me-2 text-secondary" data-id='<?php echo $_smarty_tpl->tpl_vars['users']->value['id'];?>
'  >
                  <i class="ti ti-edit" title="Edit" style="position: relative;top: 5px;"></i></a>
                  <!-- <button type="button" class="btn btn-model change-password-btn"  data-bs-target="#changePassModal" data-id='<?php echo $_smarty_tpl->tpl_vars['users']->value['id'];?>
'>
                  <i class="ti ti-lock" title="Change Password"></i>
                </button> -->

                <button type="button" class="btn btn-model change-password-btn" data-id="<?php echo $_smarty_tpl->tpl_vars['users']->value['id'];?>
">
                  <i class="ti ti-lock" title="Change Password"></i>
                </button>

              </td>




            </td>
          </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          <!-- Modal start -->
          <div class="modal fade change-password-model" id="changePassModal" tabindex="-1" aria-labelledby="changePassModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="changePassModalLabel">Change Password</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="change_pass_form" action="javascript:void(0)" method="POST">
                    <input type="hidden" class="form-control" id="user_id" name="user_id" value=""/>
                    <label for="password" class="text-start">New Password <span class="required">*</span> </label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="*********"/>
                      <i class="ti ti-eye-off change-password-icon" id="passwordIconHide"></i>
                      <i class="ti ti-eye change-password-icon" id="passwordIconShow"></i>
                    </div>
                    <p class="error" id="password_error"></p>

                    <label for="confirm_password" class="text-start">Confirm Password <span class="required">*</span> </label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="*********" />
                      <i class="ti ti-eye-off change-password-icon" id="confirmPasswordIconHide"></i>
                      <i class="ti ti-eye change-password-icon" id="confirmPasswordIconShow"></i>
                    </div>
                    <p class="error" id="confirm_password_error"></p>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="change_password" form="change_pass_form">Save changes</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal end -->

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
 src="public/js/user_listing.js"><?php echo '</script'; ?>
>

<?php }
}
