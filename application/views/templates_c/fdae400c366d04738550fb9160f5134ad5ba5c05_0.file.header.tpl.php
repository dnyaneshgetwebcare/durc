<?php
/* Smarty version 4.3.2, created on 2024-06-30 17:35:35
  from 'C:\xampp\htdocs\qr_products\application\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66817b47600001_93855958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdae400c366d04738550fb9160f5134ad5ba5c05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\qr_products\\application\\views\\templates\\header.tpl',
      1 => 1719761638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66817b47600001_93855958 (Smarty_Internal_Template $_smarty_tpl) {
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

  <title>Duroshox</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="public/img/favicon.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
  href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
  rel="stylesheet"
  />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />


  <!-- Core CSS -->
  <link rel="stylesheet" href="public/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="public/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="public/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="public/assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <!-- Helpers -->

  <!-- tabler icon -->
  <link rel="stylesheet" href="public/css/plugin/tabler_css/tabler_icons.css" />


  <?php echo '<script'; ?>
 src="public/assets/js/config.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"><?php echo '</script'; ?>
>

  <!-- select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"><?php echo '</script'; ?>
>

  <!-- validation -->
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"><?php echo '</script'; ?>
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
        <img src="public/img/logo.png" alt="" width="100">

      </span>
      <!-- <span class="stat-cards-info__num fw-bolder ms-2 pt-1">FreshMart</span> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="part-listing">Part</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user-listing">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="job-striker-list">Job Sticker Listing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="job-striker">Job Sticker print</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
<?php }
}
