
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{if !empty($user.id)}Update users{else}Add users{/if}</li>
      </ol>
    </nav>

    <!-- Basic Layout -->
    <div class="row">

      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{if !empty($user.id)}Update User{else}Add User{/if}</h5>
          </div>
          <div class="card-body">
            <form class="row g-3" id="add_updated_user" method="post" action="javascript:void(0)">

              <div class="col-md-6">
                <label for="name" class="form-label">Name <span class="requied">*</span> </label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{if !empty($user.id)}{$user.name}{/if}" />
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email <span class="requied">*</span>  </label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{if !empty($user.id)}{$user.email}{/if}" />
              </div>
              {if empty($user.id)}
              <div class="col-md-6">
                <label for="password" class="form-label">password <span class="requied">*</span> </label>
                <input type="password" class="form-control" id="password" placeholder="********" name="password"   />
                <i class="ti ti-eye password-icon" id="passwordIconHide"></i>
                <i class="ti ti-eye-off password-icon" id="passwordIconShow"></i>
              </div>
            {/if}
              <div class="col-md-6">
                <label for="type" class="form-label">User Type <span class="requied">*</span> </label>
                <select class="form-select" aria-label="Default select example" name="type">
                  <option value="">Select User type</option>
                  <option value="Admin" {if $user.type == 'Admin'}selected{/if}>Admin</option>
                  <option value="Job Striker Print Man" {if $user.type == 'Job Striker Print Man'}selected{/if}>Job Striker Print Man</option>
                  <option value="Packing Slip Print Man" {if $user.type == 'Packing Slip Print Man'}selected{/if}>Packing Slip Print Man</option>

                </select></div>

                <div class="text-center">
                  {if !empty($user.id)}
                  <input type="text" name="mode" value="update" style="display: none;">
                  <input type="text" name="id" value="{$user.id}" style="display: none;">
                  {else}
                  <input type="text" name="mode" value="add" style="display: none;">
                  {/if}
                  <button type="submit" class="btn btn btn-primary mt-3  mx-auto"  mode="{if empty($user.id)}add{else}update{/if}">{if empty($user.id)}Submit{else}Updated{/if}</button>
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
  <!-- Content wrapper -->
  <script src="public/js/add_update_user.js"></script>

