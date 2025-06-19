<?php
/* Smarty version 4.3.2, created on 2024-07-15 11:43:30
  from '/var/www/html/extra_work/duroshox/application/views/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6694be0a9b5ab0_70521414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a40e0900802180204301996c72d2e064e48f9c' => 
    array (
      0 => '/var/www/html/extra_work/duroshox/application/views/templates/login.tpl',
      1 => 1720779572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6694be0a9b5ab0_70521414 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Duroshox Login</title>
  
  <link rel="shortcut icon" type="image/png" href="public/img/favicon.png">
 <link rel="stylesheet" href="public/assets/vendor/css/core.css" class="template-customizer-core-css" />
 <style type="text/css">
    .bg-body {
      background-color: #fff !important;
    }
    body{
      font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    }
    h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
      margin-top: 0;
          margin-bottom: .5rem;
      font-weight: 500;
      line-height: 1.1;
      color: #212529;
  }
  .form-control {
      border-color: #d8dbe0 !important;
  }
  form .error:not(li):not(input) {
    color: #ff3e1d;
     font-size: 1rem !important; 
    margin-top: .25rem;
}
  </style>
  <!-- tabler icon -->
  <link rel="stylesheet" href="public/css/plugin/tabler_css/tabler_icons.css" />
   <link rel="stylesheet" href="public/css/plugin/toastr/toastr.css" />
  <link rel="stylesheet" href="public/css/authentication.css" />
  <?php echo '<script'; ?>
 src="https://accounts.google.com/gsi/client" async><?php echo '</script'; ?>
>

</head>
<body>


  <div class="login-container shadow-lg p-3 mb-2 bg-body rounded">
    <div class="header-logo">
      <img src="<?php echo $_smarty_tpl->tpl_vars['config_data']->value['base_url'];?>
public/uploads/company_logo/<?php echo $_smarty_tpl->tpl_vars['config_data']->value['company_logo'];?>
" id="logo" alt="" />
    </div>
    <hr>
    
    <div class="m-2">
    <h4 class="title">Welcome to <?php echo $_smarty_tpl->tpl_vars['config_data']->value['company_name'];?>
!</h4>
    <p>Please log in to your account to continue.<p>
      <form id="user_login_form" action="" method="POST">

        <label for="email" class="mb-1">Email </label>
        <div class="input-group ">
          <span class="input-group-text" id="basic-addon1"><i class="ti ti-mail text-bold"></i></span>

          <input type="email" class="form-control" id="email"name="email" placeholder="Email" aria-describedby="basic-addon1" />
        </div>
        <p class="error" id="email_error"></p>

        <label for="password" class="mb-1">Password</label>
        <div class="input-group">
          <span class="input-group-text" id="basic-addon1"><i class="ti ti-lock text-bold"></i></span>

          <input type="password" class="form-control" id="password" name="password" placeholder="At least 8 characters" aria-describedby="basic-addon1" />

          <i class="ti ti-eye password-login-icon" id="passwordIconHide"></i>
          <i class="ti ti-eye-off password-login-icon" id="passwordIconShow"></i>

        </div>

        <p class="error" id="password_error"></p>
        <div class="text-center">
          <button type="submit" name="user_login" class="btn btn-primary d-grid w-100 custom_btn">Login</button>
        </div>
      </form>

      </div>


    </div>


    <!-- Bootstrap JS and Popper.js scripts -->
    <?php echo '<script'; ?>
 src="public/js/plugin/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/plugin/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/plugin/toastr/toastr.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="public/js/login.js"><?php echo '</script'; ?>
>
  </body>
  </html>
<?php }
}
