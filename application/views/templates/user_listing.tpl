
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
            {foreach from=$user_details item=users}
            <tr>

              <td>{$users['name']}</td>
              <td>{$users['email']}</td>
              <td>{$users['type']}</td>

              <td class="text-center">
                <a  href="add-update-user?id={$users.id}" class="edit_users me-2 text-secondary" data-id='{$users.id}'  >
                  <i class="ti ti-edit" title="Edit" style="position: relative;top: 5px;"></i></a>
                  <!-- <button type="button" class="btn btn-model change-password-btn"  data-bs-target="#changePassModal" data-id='{$users.id}'>
                  <i class="ti ti-lock" title="Change Password"></i>
                </button> -->

                <button type="button" class="btn btn-model change-password-btn" data-id="{$users.id}">
                  <i class="ti ti-lock" title="Change Password"></i>
                </button>

              </td>




            </td>
          </tr>
          {/foreach}

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
<script src="public/js/user_listing.js"></script>

