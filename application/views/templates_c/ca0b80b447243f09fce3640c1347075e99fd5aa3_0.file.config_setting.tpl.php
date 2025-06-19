<?php
/* Smarty version 4.3.2, created on 2024-07-11 23:12:29
  from '/var/www/html/extra_work/qr_products/application/views/templates/config_setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66901985b20f09_11571115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca0b80b447243f09fce3640c1347075e99fd5aa3' => 
    array (
      0 => '/var/www/html/extra_work/qr_products/application/views/templates/config_setting.tpl',
      1 => 1720549075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66901985b20f09_11571115 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Config Setting</li>
      </ol>
    </nav>

    <!-- Basic Layout -->
    <div class="row">

      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Update Config Setting</h5>
          </div>
          <div class="card-body mt-5">
            <form class="row g-3" id="config_setting_form" method="post" action="javascript:void(0)" enctype="multipart/form-data" >
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config_setting']->value, 'config');
$_smarty_tpl->tpl_vars['config']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['config']->value) {
$_smarty_tpl->tpl_vars['config']->do_else = false;
?>
              <div class="mb-3 row card config-card">
                <label for="document_number" class="col-sm-7 col-form-label fs-28"><?php echo $_smarty_tpl->tpl_vars['config']->value['title'];?>
<br>
                  <span class="config-subtitle"><?php echo $_smarty_tpl->tpl_vars['config']->value['description'];?>
</span>
                </label>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['type'] == 'input') {?>
                  <div class="col-sm-4">
                    <input type="text" class="form-control mt-4 config-val" name="<?php echo $_smarty_tpl->tpl_vars['config']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['value'];?>
">
                  </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['config']->value['type'] == 'file') {?>
                  <div class="col-sm-4">
                    <input type="file" id="company_logo" class="form-control mt-4"  name="<?php echo $_smarty_tpl->tpl_vars['config']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['value'];?>
">
                  <input type="hidden" class="form-control mt-4"  name="<?php echo $_smarty_tpl->tpl_vars['config']->value['name'];?>
_old" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['value'];?>
" >
                  <div class="m-2">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['company_logo_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['value'];?>
" width="80" height="80" id="company_logo_old">
                  </div>
                  </div>
                <?php }?>
                <hr>
                
              </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <div class="text-center">
                  <button type="submit" class="btn btn btn-primary mt-3  mx-auto" name="Submit" >Submit</button>
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
  <style type="text/css">
    input.error{
          border-color: red;
    }
  </style>
  <!-- Content wrapper -->
  <?php echo '<script'; ?>
 src="public/js/config_setting.js"><?php echo '</script'; ?>
>
  
<?php }
}
