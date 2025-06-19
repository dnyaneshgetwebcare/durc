
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
              {foreach from=$config_setting item='config'}
              <div class="mb-3 row card config-card">
                <label for="document_number" class="col-sm-7 col-form-label fs-28">{$config['title']
                }<br>
                  <span class="config-subtitle">{$config['description']}</span>
                </label>
                {if $config['type'] == 'input' }
                  <div class="col-sm-4">
                    <input type="text" class="form-control mt-4 config-val" name="{$config['name']
                  }" value="{$config.value}">
                  </div>
                {else if $config['type'] == 'file' }
                  <div class="col-sm-4">
                    <input type="file" id="company_logo" class="form-control mt-4"  name="{$config['name']
                  }" value="{$config.value}">
                  <input type="hidden" class="form-control mt-4"  name="{$config['name']
                  }_old" value="{$config.value}" >
                  <div class="m-2">
                    <img src="{$company_logo_url}/{$config.value}" width="80" height="80" id="company_logo_old">
                  </div>
                  </div>
                {/if}
                <hr>
                
              </div>
              {/foreach}
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
  <script src="public/js/config_setting.js"></script>
  
