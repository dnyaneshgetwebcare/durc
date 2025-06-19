<!DOCTYPE html>
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

  <title>{$config_data['company_name']}</title>

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
  <script src="public/js/plugin/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="public/css/plugin/datatable.css">
  <!-- Helpers -->

  <!-- tabler icon -->
  <link rel="stylesheet" href="public/css/plugin/tabler_css/tabler_icons.css" />



  <link rel="stylesheet" href="public/css/plugin/sweetalert2/sweetalert2.min.css">
    <script src="public/js/plugin/sweetalert2/sweetalert2.all.min.js"></script>

  <!-- select2 -->
  <link href="public/css/plugin/select2/select2.css" rel="stylesheet" />
  <script src="public/js/plugin/select2/select2.min.js"></script>

  <!-- validation -->
  <script src="public/js/plugin/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="public/js/plugin/jquery.dataTables.min.js"></script>
  <script src="public/js/plugin/toastr/toastr.js"></script>
   <script src="public/assets/js/config.js"></script>
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
        <img src="{$config_data['base_url']}public/uploads/company_logo/{$config_data['company_logo']}" alt="" width="150" height="50">
      </span>
      <!-- <span class="stat-cards-info__num fw-bolder ms-2 pt-1">FreshMart</span> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        {{if in_array($user_data['type'],["Admin"])}}
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
        {{/if}}
        {{if in_array($user_data['type'],["Admin"])}}
        <li class="nav-item">
          <a class="nav-link" href="job-striker-list">Job Sticker Listing</a>
        </li>
        {{/if}}
        {{if in_array($user_data['type'],['Job Striker Print Man',"Admin"])}}
        <li class="nav-item">
          <a class="nav-link" href="job-striker">Job Sticker print</a>
        </li>
        {{/if}}
        {{if in_array($user_data['type'],["Admin"])}}
        <li class="nav-item">
          <a class="nav-link" href="box-slip-listing">Box Slip Listing</a>
        </li>
        {{/if}}
        {{if in_array($user_data['type'],['Packing Slip Print Man',"Admin"])}}
        <li class="nav-item">
          <a class="nav-link" href="box-slip-print">Box Slip print</a>
        </li>
        {{/if}}
        {{if in_array($user_data['type'],["Admin"])}}
        <li class="nav-item">
          <a class="nav-link" href="config-setting">Config Setting</a>
        </li>
        {{/if}}
        <!-- <li class="nav-item">

        </li> -->
      </ul>
    </div>
    <div class="float-right mt-2 d-flex">
      {{assign var="name_arr" value=explode(" ",$user_data['name'])}}
      <p class="profile-header-text">{{strtoupper($user_data['name'][0])}}</p>
      <p class="ps-2 pt-3 me-4"><b>{{$name_arr[0]}}</b></p>
        <a class="text-danger pt-1 me-3 fs-28" href="logout" title="logout"><i class="ti ti-power"></i></a>
    </div>
  </div>
</nav>

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
