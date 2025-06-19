<?php
/* Smarty version 4.3.2, created on 2024-06-30 16:40:06
  from 'C:\xampp\htdocs\qr_products\application\views\templates\user_listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66816e461b0b41_39625990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a77ce92c2f37f3e61bff9e8f56053acaa265ea3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qr_products\\application\\views\\templates\\user_listing.tpl',
      1 => 1719750913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66816e461b0b41_39625990 (Smarty_Internal_Template $_smarty_tpl) {
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
