<?php
/* Smarty version 4.3.2, created on 2025-06-19 11:51:55
  from 'C:\xampp_8_1\htdocs\duroshox_live\application\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6853ddbb452a26_23955733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b86059a601f46ed7df5f2d5185812f3b425c1d0' => 
    array (
      0 => 'C:\\xampp_8_1\\htdocs\\duroshox_live\\application\\views\\templates\\header.tpl',
      1 => 1721328814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6853ddbb452a26_23955733 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html
lang="en"
class="light-style layout-menu-fixed layout-menu-collapsed  layout-navbar-fixed "
dir="ltr"
data-theme="theme-default"
data-assets-path="public/assets/"
data-template="vertical-menu-template-free"
>
<head>
  <meta charset="utf-8" />
  <meta
  name="viewport"
  content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
  />

  <title><?php echo $_smarty_tpl->tpl_vars['config_data']->value['company_name'];?>
</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="public/img/favicon.png" />

  <!-- Fonts -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
  href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
  rel="stylesheet"
  /> -->

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="public/css/plugin/toastr/toastr.css" />


  <!-- Core CSS -->
  <link rel="stylesheet" href="public/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="public/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="public/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="public/assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->
  <?php echo '<script'; ?>
 src="public/js/plugin/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" type="text/css" href="public/css/plugin/datatable.css">
  <!-- Helpers -->

  <!-- tabler icon -->
  <link rel="stylesheet" href="public/css/plugin/tabler_css/tabler_icons.css" />



  <link rel="stylesheet" href="public/css/plugin/sweetalert2/sweetalert2.min.css">
    <?php echo '<script'; ?>
 src="public/js/plugin/sweetalert2/sweetalert2.all.min.js"><?php echo '</script'; ?>
>

  <!-- select2 -->
  <link href="public/css/plugin/select2/select2.css" rel="stylesheet" />
  <?php echo '<script'; ?>
 src="public/js/plugin/select2/select2.min.js"><?php echo '</script'; ?>
>

  <!-- validation -->
  <?php echo '<script'; ?>
 src="public/js/plugin/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="public/js/plugin/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/plugin/toastr/toastr.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="public/assets/js/config.js"><?php echo '</script'; ?>
>
  <style media="screen">
  .hide{
    display: none;
  }
</style>

</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

  <!-- Layout container -->
  <div class="layout-page">
  <nav class="navbar navbar-expand-lg bg-navbar-theme">
  <div class="container-fluid">
    <a href="home" class="app-brand-link navbar-brand">
      <span class="app-brand-logo demo">
        <img src="<?php echo $_smarty_tpl->tpl_vars['config_data']->value['base_url'];?>
public/uploads/company_logo/<?php echo $_smarty_tpl->tpl_vars['config_data']->value['company_logo'];?>
" alt="" width="150" height="50">
      </span>
      <!-- <span class="stat-cards-info__num fw-bolder ms-2 pt-1">FreshMart</span> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <?php ob_start();
if (in_array($_smarty_tpl->tpl_vars['user_data']->value['type'],array("Admin"))) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="part-listing">Part</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user-listing">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shift-listing">Shift</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer-listing">Customer</a>
        </li>
        <?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

        <?php ob_start();
if (in_array($_smarty_tpl->tpl_vars['user_data']->value['type'],array("Admin"))) {
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

        <li class="nav-item">
          <a class="nav-link" href="job-striker-list">Job Sticker Listing</a>
        </li>
        <?php ob_start();
}
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

        <?php ob_start();
if (in_array($_smarty_tpl->tpl_vars['user_data']->value['type'],array('Job Striker Print Man',"Admin"))) {
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

        <li class="nav-item">
          <a class="nav-link" href="job-striker">Job Sticker print</a>
        </li>
        <?php ob_start();
}
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

        <?php ob_start();
if (in_array($_smarty_tpl->tpl_vars['user_data']->value['type'],array("Admin"))) {
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>

        <li class="nav-item">
          <a class="nav-link" href="box-slip-listing">Box Slip Listing</a>
        </li>
        <?php ob_start();
}
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>

        <?php ob_start();
if (in_array($_smarty_tpl->tpl_vars['user_data']->value['type'],array('Packing Slip Print Man',"Admin"))) {
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>

        <li class="nav-item">
          <a class="nav-link" href="box-slip-print">Box Slip print</a>
        </li>
        <?php ob_start();
}
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>

        <?php ob_start();
if (in_array($_smarty_tpl->tpl_vars['user_data']->value['type'],array("Admin"))) {
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>

        <li class="nav-item">
          <a class="nav-link" href="config-setting">Config Setting</a>
        </li>
        <?php ob_start();
}
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>

        <!-- <li class="nav-item">

        </li> -->
      </ul>
    </div>
    <div class="float-right mt-2 d-flex">
      <?php ob_start();
$_smarty_tpl->_assignInScope('name_arr', explode(" ",$_smarty_tpl->tpl_vars['user_data']->value['name']));
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>

      <p class="profile-header-text"><?php ob_start();
echo strtoupper($_smarty_tpl->tpl_vars['user_data']->value['name'][0]);
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</p>
      <p class="ps-2 pt-3 me-4"><b><?php ob_start();
echo $_smarty_tpl->tpl_vars['name_arr']->value[0];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
</b></p>
        <a class="text-danger pt-1 me-3 fs-28" href="logout" title="logout"><i class="ti ti-power"></i></a>
    </div>
  </div>
</nav>

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
<?php }
}
