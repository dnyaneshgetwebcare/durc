<?php
/* Smarty version 4.3.2, created on 2024-07-12 19:20:13
  from '/var/www/html/extra_work/qr_products/application/views/templates/shift_listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66913495849e65_94717491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '405d13fa70bc482f4e21c0189f6e635b48db59e5' => 
    array (
      0 => '/var/www/html/extra_work/qr_products/application/views/templates/shift_listing.tpl',
      1 => 1720792189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66913495849e65_94717491 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y p-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shift Listing</li>
      </ol>
    </nav>
    <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4> -->

    <div class="dt-top-btn d-grid gap-2 d-md-flex justify-content-md-end mb-3 listing-top-btn">
      <a class="btn btn-seconday" type="button" href="javascript:void(0)" title="Add Shift" id="add_shift"><span>Add Shift</span></a>
    </div>
    <!-- Responsive Table -->
    <div class="card p-2">
      <div class="table-responsive text-nowrap">
        <table class="table table-hover" id="listing" style="width: 100%;">
          <thead>
            <tr class="text-nowrap">

              <th>Shift Name</th>
              <th>Start Name</th>
              <th>End date</th>
              <th class="text-center">Action</th>

            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shift_details']->value, 'shift');
$_smarty_tpl->tpl_vars['shift']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shift']->value) {
$_smarty_tpl->tpl_vars['shift']->do_else = false;
?>
            <tr>

              <td><?php echo $_smarty_tpl->tpl_vars['shift']->value['shift_name'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['shift']->value['shift_start_time_formated'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['shift']->value['shift_end_time_formated'];?>
</td>

              <td class="text-center">

                <button type="button" class="btn btn-model  edit_shift text-secondary" data-val="<?php echo base64_encode(json_encode($_smarty_tpl->tpl_vars['shift']->value));?>
">
                  <i class="ti ti-edit" title="Change Password"></i>
                </button>

              </td>
            </td>
          </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          <!-- Modal start -->

          <!-- Modal end -->

        </tbody>

      </table>
    </div>
    <div class="modal fade change-password-model" id="addShift" tabindex="-1" aria-labelledby="changePassModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="changePassModalLabel">Add Shift</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="row g-3" id="add_part_form" method="post" action="javascript:void(0)" enctype="multipart/form-data">
                  	<input type="hidden" name="shift_id" id="shift_id">
                  	<input type="hidden" name="mode" id="mode">
          			<div class="col-6">
	                   		<label for="shift_name" class="text-start">Shift Name <span class="required">*</span> </label>
		                    <input type="text" class="form-control" id="shift_name" name="shift_name" placeholder="Enter Shift Name"/>
	                </div>
	                <div class="col-6">
	                   		<label for="shift_start_time" class="text-start">Shift Start Time<span class="required">*</span> </label>
		                      <input type="time" class="form-control" id="shift_start_time" name="shift_start_time" placeholder="Enter Shift Start Time"/>
	                </div>
	                <div class="col-6">
	                   		<label for="shift_end_time" class="text-start">Shift End Time<span class="required">*</span> </label>
		                      <input type="time" class="form-control" id="shift_end_time" name="shift_end_time" placeholder="Enter Shift End Time"/>
	                </div>
	                <div class="col-12">
		            	<button type="submit" class="btn btn btn-primary mt-3  mx-auto" >Submit</button>
		            </div>
		          </div>

		        </form>
            </div>
          </div>
          </div>
      </div>
    
  </div>
  <!--/ Responsive Table -->
</div>
<!-- / Content -->



<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
<link rel="stylesheet" type="text/css" href="public/css/data_table/datatable.css">
<?php echo '<script'; ?>
 src="public/js/shift_listing.js"><?php echo '</script'; ?>
>

<?php }
}
