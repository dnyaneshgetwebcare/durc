
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{if !empty($part.customer_id)}Update Customer{else}Add Customer{/if}</li>
      </ol>
    </nav>

<!-- Basic Layout -->
<div class="row">

  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">{if !empty($part.customer_id)}Update Customer{else}Add Customer{/if}</h5>
      </div>
      <div class="card-body">
        <form class="row g-3" id="add_part_form" method="post" action="javascript:void(0)" enctype="multipart/form-data">
          <div class="col-md-6">
            <label for="customer_name" class="form-label">Customer Name <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="customer_name" placeholder="Enter Part Name" name="customer_name" value="{if !empty($part.customer_id)}{$part.customer_name}{/if}" />
          </div>
          <div class="col-md-6">
            <label for="job_stricker_label" class="form-label">Job Stricker Label <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="job_stricker_label" placeholder="Enter Job Stricker Label" name="job_stricker_label" value="{$part.job_stricker_label}" />
          </div>
          <div class="col-md-6">
            <label for="job_stricker_suffix" class="form-label">Job Stricker Suffix <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="job_stricker_suffix" placeholder="Enter Job Stricker Suffix" name="job_stricker_suffix" value="{$part.job_stricker_suffix}" />
          </div>
          
          <div class="col-md-6">
            <label for="customer_logo" class="form-label">Customer Logo <span class="requied">*</span> </label>
            {{if $mode == 'Add'}}
              <input type="file" class="form-control" id="customer_logo" name="customer_logo" />
            {{else }}
              <input type="file" class="form-control" id="customer_logo" name="customer_logo" />
              <input type="hidden" class="form-control" id="customer_logo_old" name="customer_logo_old" value="{$part.customer_logo}" />
            {{/if}}
            <img src="public/uploads/parts/{$part.customer_logo}" id="company_logo_img" {if $mode == 'Add'}style='display:none'{/if} width="100" height="80" class="mt-3">
          </div>
          <div class="text-center">
            <!-- <button type="submit" class="btn btn btn-primary mt-3  mx-auto" name="Submit" >Submit</button> -->
            {if !empty($part.customer_id)}
               <input type="text" name="mode" value="update" id="mode" style="display: none;">
                <input type="text" name="customer_id" value="{$part.customer_id}" style="display: none;">
           {else}
              <input type="text" name="mode" value="add" id="mode" style="display: none;">
           {/if}
            <!-- <button type="submit" class="btn btn btn-primary mt-3  mx-auto" name="{if empty($part.part_id)}addBtn{else}updateBtn{/if}" mode="{if empty($part.part_id)}add{else}update{/if}">{if empty($part.part_id)}Submit{else}Updated{/if}</button> -->
            <button type="submit" class="btn btn btn-primary mt-3  mx-auto"  mode="{if empty($part.customer_id)}add{else}update{/if}">{if empty($part.customer_id)}Submit{else}Updated{/if}</button>
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
<script src="public/js/add_cutomer.js"></script>

