<?php
/* Smarty version 4.3.2, created on 2024-06-30 17:34:11
  from 'C:\xampp\htdocs\qr_products\application\views\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66817af31e3d73_35324232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77629f30a806bb0f54351a652e46c1a4a3011102' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qr_products\\application\\views\\templates\\login.tpl',
      1 => 1719761645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66817af31e3d73_35324232 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Duroshox Login</title>
    <link rel="shortcut icon" type="image/png" href="public/img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- tabler icon -->
  <link rel="stylesheet" href="public/css/plugin/tabler_css/tabler_icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
  <link rel="stylesheet" href="public/css/authentication.css" />
  <?php echo '<script'; ?>
 src="https://accounts.google.com/gsi/client" async><?php echo '</script'; ?>
>

</head>
<body>


  <div class="login-container shadow-lg p-3 mb-2 bg-body rounded">
    <div class="header-logo">
      <img src="public/img/logo.png" id="logo" alt="" />
    </div>
    <hr>

    <h4 class="title">Welcome to Duroshox!</h4>
    <p>Please log in to your account to continue.<p>
      <form id="user_login_form" action="" method="POST">

        <label for="email">Email </label>
        <div class="input-group ">
          <span class="input-group-text" id="basic-addon1"><i class="ti ti-mail text-bold"></i></span>

          <input type="email" class="form-control" id="email"name="email" placeholder="Email" aria-describedby="basic-addon1" />
        </div>
        <p class="error" id="email_error"></p>

        <label for="password">Password</label>
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


    <!-- Bootstrap JS and Popper.js scripts -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="public/js/login.js"><?php echo '</script'; ?>
>
  </body>
  </html>
<?php }
}
