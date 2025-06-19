
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{if !empty($part.part_id)}Update Parts{else}Add Parts{/if}</li>
      </ol>
    </nav>

<!-- Basic Layout -->
<div class="row">

  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">{if !empty($part.part_id)}Update Parts{else}Add Parts{/if}</h5>
      </div>
      <div class="card-body">
        <form class="row g-3" id="add_part_form" method="post" action="javascript:void(0)" enctype="multipart/form-data">
          <div class="col-md-6">
            <label for="part_name" class="form-label">part Name <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="part_name" placeholder="Enter part Name" name="part_name" value="{if !empty($part.part_id)}{$part.part_name}{/if}" />
          </div>
          <div class="col-md-6">
            <label for="customer_name" class="form-label">Customer Name <span class="requied">*</span>  </label>

            <select class="form-control" id="customer_name" style="width: 100%;" name="customer_name">
                 <option value=""></option>
                 {foreach from=$customer_details item=customer}

                  <option value="{$customer['customer_id']}" {if $part.customer_id eq $customer['customer_id']}selected{/if}>{$customer['customer_name']}</option>
                 {/foreach}
            </select>
          </div>
          <div class="col-md-6">
            <label for="customer_part_name" class="form-label">Customer Part Name <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="customer_part_name" placeholder="Enter Customer Part Name" name="customer_part_name" value="{if !empty($part.part_id)}{$part.customer_part_name}{/if}" />
          </div>
          <div class="col-md-6">
            <label for="customer_part_number" class="form-label">Customer Part Number <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="customer_part_number" placeholder="Enter Customer Part Number" name="customer_part_number" value="{if !empty($part.part_id)}{$part.customer_part_number}{/if}" />
          </div>
          <div class="col-md-6">
            <label for="box_packing_qty" class="form-label">Box Packing Qty <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="box_packing_qty" placeholder="Enter Box Packing Qty" name="box_packing_qty" value="{if !empty($part.part_id)}{$part.box_packing_qty}{/if}" />
          </div>
          <div class="col-md-6">
            <label for="vendor_initial" class="form-label">Vendor Initial <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="vendor_initial" placeholder="Enter Vendor Initial" name="vendor_initial" value="{if !empty($part.part_id)}{$part.vendor_initial}{/if}" />
          </div>
          <div class="col-md-6">
            <label for="gcs_rev_date" class="form-label">GCS Rev. Date <span class="requied">*</span> </label>
            <input type="date" class="form-control" id="gcs_rev_date" placeholder="Enter GCS Rev. Date" name="gcs_rev_date" value="{if !empty($part.part_id)}{$part.gcs_rev_date}{/if}" />
          </div>
          <div class="col-md-6">
            <label for="stroke_travel" class="form-label">Stroke Travel <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="stroke_travel" placeholder="Enter Stroke Travel" name="stroke_travel" value="{if !empty($part.part_id)}{$part.stroke_travel}{/if}" />
          </div>
          <div class="col-md-6">
            <label for="eel_extended" class="form-label">Eyelet to Eyelet Length Fully Extended <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="eel_extended" placeholder="Enter Eyelet to Eyelet Length Fully Extended " name="eel_extended" value="{if !empty($part.part_id)}{$part.eel_extended}{/if}" />
          </div>
          <div class="col-md-6">
            <label for="eel_retracted" class="form-label">Eyelet to Eyelet Length Fully Retracted <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="eel_retracted" placeholder="Enter Eyelet to Eyelet Length Fully Retracted" name="eel_retracted" value="{if !empty($part.part_id)}{$part.eel_retracted}{/if}" />
          </div>
          <div class="col-md-6">
            <label for="llc_extension" class="form-label">Lateral Load Capacity at Full Extension <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="llc_extension" placeholder="Enter Lateral Load Capacity at Full Extension" name="llc_extension" value="{if !empty($part.part_id)}{$part.llc_extension}{/if}" />
          </div>
          <div class="col-md-6">
            <label for="maximum_rated_load" class="form-label">Maximum Rated Load <span class="requied">*</span> </label>
            <input type="text" class="form-control" id="maximum_rated_load" placeholder="Enter Maximum Rated Load" name="maximum_rated_load" value="{if !empty($part.part_id)}{$part.maximum_rated_load}{/if}" />
          </div>
          <!-- <div class="col-md-6">
            <label for="customer_logo" class="form-label">Customer Logo <span class="requied">*</span> </label>
            {{if $mode == 'Add'}}
              <input type="file" class="form-control" id="customer_logo" name="customer_logo" />
            {{else }}
              <input type="file" class="form-control" id="customer_logo" name="customer_logo" />
              <input type="hidden" class="form-control" id="customer_logo_old" name="customer_logo_old" value="{$part.customer_logo}" />
            {{/if}}
            <img src="public/uploads/parts/{$part.customer_logo}" id="company_logo_img" {if $mode == 'Add'}style='display:none'{/if} width="100" height="80" class="mt-3">
          </div> -->
          <div class="text-center">
            <!-- <button type="submit" class="btn btn btn-primary mt-3  mx-auto" name="Submit" >Submit</button> -->
            {if !empty($part.part_id)}
               <input type="text" name="mode" value="update" id="mode" style="display: none;">
                <input type="text" name="part_id" value="{$part.part_id}" style="display: none;">
           {else}
              <input type="text" name="mode" value="add" id="mode" style="display: none;">
           {/if}
            <!-- <button type="submit" class="btn btn btn-primary mt-3  mx-auto" name="{if empty($part.part_id)}addBtn{else}updateBtn{/if}" mode="{if empty($part.part_id)}add{else}update{/if}">{if empty($part.part_id)}Submit{else}Updated{/if}</button> -->
            <button type="submit" class="btn btn btn-primary mt-3  mx-auto"  mode="{if empty($part.part_id)}add{else}update{/if}">{if empty($part.part_id)}Submit{else}Updated{/if}</button>
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
<script src="public/js/add_part.js"></script>

