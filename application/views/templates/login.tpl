  <!DOCTYPE html>
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
  <script src="https://accounts.google.com/gsi/client" async></script>

</head>
<body>


  <div class="login-container shadow-lg p-3 mb-2 bg-body rounded">
    <div class="header-logo">
      <img src="{$config_data['base_url']}public/uploads/company_logo/{$config_data['company_logo']}" id="logo" alt="" />
    </div>
    <hr>
    
    <div class="m-2">
    <h4 class="title">Welcome to {$config_data['company_name']}!</h4>
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
    <script src="public/js/plugin/jquery-3.6.0.min.js"></script>
    <script src="public/js/plugin/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="public/js/plugin/toastr/toastr.js"></script>


    <script src="public/js/login.js"></script>
  </body>
  </html>
