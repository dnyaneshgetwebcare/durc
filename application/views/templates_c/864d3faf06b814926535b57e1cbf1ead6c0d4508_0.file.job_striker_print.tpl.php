<?php
/* Smarty version 4.3.2, created on 2024-07-18 23:50:17
  from '/var/www/html/extra_work/duroshox/application/views/templates/job_striker_print.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66995ce17c42a0_93024772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '864d3faf06b814926535b57e1cbf1ead6c0d4508' => 
    array (
      0 => '/var/www/html/extra_work/duroshox/application/views/templates/job_striker_print.tpl',
      1 => 1721326814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66995ce17c42a0_93024772 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<style>
            table {
                width: 100%;
                border-collapse: collapse;
                border: 1px solid black;
                padding-bottom: 0px !important;
                padding-top: 4px !important;
            }
            th, td {
                /*border: 1px solid red;*/
               
                text-align: left;
                background: #7C5CFC;
            }
            img{
            	margin-top: 0px !important;
            }
            
            
        </style>
</head>
<body>

        <table >
        	<tr>
				<th colspan="1" align="center">
					<img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['customer_logo'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"  width="410" height="40" style="">
					<span style="font-size: 6px;">
						<b style="font-size: 6px;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['job_stricker_label'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</b>&nbsp;<sup  style="font-size: 6px;margin-bottom: 2px;" ><b style="font-size: 6px;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['job_stricker_suffix'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</b></sup>&nbsp; &nbsp;  <b style="font-size: 6px;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['customer_part_name'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</b><br>
						<b style="font-size: 6px;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['customer_part_number'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</b>
					</span>
				</th>
			</tr>
			<tr cellpadding="0" >
		      <th width="31%" style="font-size: 5px;">&nbsp;&nbsp;<strong>Part Serial</strong></th>
		      <th width="31%" style="font-size: 5px;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['production_serial_number'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
-<b><?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['serial_number'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</b></th>
		      <th rowspan="5" style="text-align: center" width="38%">
		      	<img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['qr_code'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
" alt="Image Description" width="120" height="115" >
		      </th>
		    </tr>
		    <tr cellpadding="0">
		      <th width="31%" style="font-size: 5px;">&nbsp;&nbsp;<strong>Vendor initial</strong> </th>
		      <th width="31%" style="font-size:5px;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['vendor_initial'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</th>
		      
		    </tr >
		    <tr cellpadding="0">
		      <th width="31%" style="font-size: 5px;">&nbsp;&nbsp;<strong>GCS Rev Date</strong> </th>
		      <th width="31%" style="font-size: 5px;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['gcs_rev_date'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</th>
		    </tr>
		    <tr>
		      <th width="31%" style="font-size: 5px;">&nbsp;&nbsp;<strong>Production Date</strong></th>
		      <th width="31%" style="font-size: 5px;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['production_date'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</th>
		    </tr>
		    <tr>
		      <th width="31%" style="font-size: 5px;">&nbsp;&nbsp;<strong>Stroke Travel</strong></th>
		      <th width="31%" style="font-size: 5px;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['stroke_travel'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</th>
		    </tr>
		    <tr>
				<th  width="80%" style="font-size: 5px;">
					&nbsp;&nbsp;<strong>Eyelet to Eyelet Length Fully Extended</strong>  
				</th>
				<th  width="40%" style="font-size: 5px;">
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['eel_extended'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>

				</th>
			</tr>
			<tr>
				<th  width="80%" style="font-size: 5px;">
					&nbsp;&nbsp;<strong>Eyelet to Eyelet Length Fully Retracted</strong>  
				</th>
				<th  width="40%" style="font-size: 5px;">
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['eel_retracted'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>

				</th>
				
			</tr>
			<tr>
				<th  width="80%" style="font-size: 5px;">
					&nbsp;&nbsp;<strong>Lateral Load Capacity at Full Extension</strong>  
				</th>
				<th  width="40%" style="font-size: 5px;">
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['llc_extension'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>

				</th>
			</tr>
			<tr>
				<th  width="80%" style="font-size: 5px;">
					&nbsp;&nbsp;<strong>Maximum Rated Load</strong>  
				</th>
				<th  width="40%" style="font-size: 5px;">
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['part_data']->value['maximum_rated_load'];
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>

				</th>
				
			</tr>
			<tr>
				<th  width="80%" style="font-size: 5px;">
					&nbsp;&nbsp; 
				</th>
			</tr>
		</table>

		
</body>
</html><?php }
}
