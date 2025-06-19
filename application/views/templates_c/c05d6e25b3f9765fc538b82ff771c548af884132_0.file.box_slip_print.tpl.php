<?php
/* Smarty version 4.3.2, created on 2024-07-12 00:38:35
  from '/var/www/html/extra_work/qr_products/application/views/templates/box_slip_print.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66902db3970266_31868910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c05d6e25b3f9765fc538b82ff771c548af884132' => 
    array (
      0 => '/var/www/html/extra_work/qr_products/application/views/templates/box_slip_print.tpl',
      1 => 1720724913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66902db3970266_31868910 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1" align="center" cellspacing="0" cellpadding="2" >
 <tr nobr="true">
  <th width="20%"  rowspan="3" cellpadding="2">
    <img src="<?php echo $_smarty_tpl->tpl_vars['company_logo']->value;?>
"  width="80" height="40">
  </th>
  <th width="38%" rowspan="3" style="font-size: 16px;" align="center">
  	<table cellpadding="8">
  		<tr>
  			<th>
          PACKING SLIP	
  			</th>
  		</tr>
  	</table>
  	
  </th>
  <th width="42%" align="left"  style="font-size: 7px;">
  	Doc. No. - <?php echo $_smarty_tpl->tpl_vars['document_number']->value;?>

  </th>
 </tr>
 <tr nobr="true" style="font-size: 7px;">
  <td align="left">&nbsp; Refrence - <?php echo $_smarty_tpl->tpl_vars['refrence']->value;?>
</td>
 </tr>
 <tr nobr="true" align="left" style="font-size: 7px;">
  <td>&nbsp; Page No - 1 of 1</td>
 </tr>
 <tr nobr="true" >
  <td width="35%" style="font-size: 10px;" align="center">
  	<table cellpadding="2">
  		<tr>
  			<th>
  				<font color="#222222" face="Arial, Helvetica, sans-serif">
  				<span width="50%" style="font-size: 10px; padding: 0px;font-weight: normal;   font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
</span>	
  				</font>
  			</th>
  		</tr>
  	</table>
  </td>
  <td colspan="2" width="65%" cellspacing="10" style="margin: 20px;"> 
  	<table cellpadding="10">
  		<tr>
  			<th  style="font-size: 10px;">
  				<font color="#222222" face="Arial, Helvetica, sans-serif">
  				<span  style="font-size: 10px	; padding: 0px;font-weight: normal;   font-weight: bold;">FINISHED GOOD </span>	
  				</font>
  			</th>
  		</tr>
  	</table>
  </td>
 </tr>
 <tr nobr="true" >
  <td width="35%" align="left">
  	<br>
  	<br>
  	<br>
  		<span  style="font-size: 10px; padding: 0px;font-weight: normal;">Part Name/Description</span>	
  	<br>
  </td>
  <td colspan="2" width="65%">
  	<table cellpadding="10">
  		<tr>
  			<th  style="font-size: 10px;">
  				<font color="#222222" face="Arial, Helvetica, sans-serif">
  				<span  style="font-size: 14px; padding: 0px;font-weight: normal;font-weight: bold;">
  				<?php echo $_smarty_tpl->tpl_vars['part_name']->value;?>

  				</span>	
  				</font>
  			</th>
  		</tr>
  	</table>
  </td>
 </tr>
 <tr nobr="true" >
  <td width="35%" align="left">
  	<br>
  	<br>
  		<span  style="font-size: 10px; padding: 0px;font-weight: normal;">No. Of Part </span>	
  	<br>
  </td>
  <td colspan="2" width="65%">
  	<table cellpadding="7">
  		<tr>
  			<th  style="font-size: 10px;">
  				<font color="#222222" face="Arial, Helvetica, sans-serif">
  				<span  style="font-size: 14px; padding: 0px;font-weight: normal;font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['start_serial_number']->value;?>
 To <?php echo $_smarty_tpl->tpl_vars['end_serial_number']->value;?>
</span>	
  				</font>
  			</th>
  		</tr>
  	</table>
  </td>
 </tr>
 <tr nobr="true" >
 <td width="35%" align="left">
  	<br>
  	<br>
  		<span  style="font-size: 10px; padding: 0px;font-weight: normal;">No. Of Qty </span>	
  	<br>
  </td>
  <td colspan="2" width="65%">
  	<table cellpadding="7">
  		<tr>
  			<th  style="font-size: 10px;">
  				<font color="#222222" face="Arial, Helvetica, sans-serif">
  				<span  style="font-size: 14px; padding: 0px;font-weight: normal;font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['box_packing_qty']->value;?>
 NOS</span>	
  				</font>
  			</th>
  		</tr>
  	</table>
  </td>
 </tr>
 <tr nobr="true" >
  <td width="35%" align="left">
  	<br>
  	<br>
  		<span  style="font-size: 10px; padding: 0px;font-weight: normal;">Box No. </span>	
  	<br>
  </td>
  <td colspan="2" width="65%">
  	<table cellpadding="7">
  		<tr>
  			<th  style="font-size: 12px;">
  				<font color="#222222" face="Arial, Helvetica, sans-serif">
  				<span  style="font-size: 14px; padding: 0px;font-weight: normal;font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['box_number']->value;?>
</span>	
  				</font>
  			</th>
  		</tr>
  	</table>
  </td>
 </tr>
 <tr nobr="true" >
  <td width="35%" align="left">
  	<br>
  	<br>
  		<span  style="font-size: 10px; padding: 0px;font-weight: normal;">Shift </span>	
  	<br>
  </td>
  <td colspan="2" width="65%">
  	<table cellpadding="7">
  		<tr>
  			<th  style="font-size: 10px;">
  				<font color="#222222" face="Arial, Helvetica, sans-serif">
  				<span  style="font-size: 14px; padding: 0px;font-weight: normal;font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['shift']->value;?>
</span>	
  				</font>
  			</th>
  		</tr>
  	</table>
  </td>
 </tr>
 <tr nobr="true" >
  <td width="35%" align="left">
  	<br>
  	<br>
  		<span  style="font-size: 10px; padding: 0px;font-weight: normal;">Date of Packing </span>	
  	<br>

  </td>
  <td colspan="2" width="65%">
  	<table cellpadding="7">
  		<tr>
  			<th  style="font-size: 10px;">
  				<font color="#222222" face="Arial, Helvetica, sans-serif">
  				<span  style="font-size: 14px; padding: 0px;font-weight: normal;font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['paking_date']->value;?>
</span>	
  				</font>
  			</th>
  		</tr>
  	</table>
  </td>
 </tr>
 <tr  >
  <td width="35%" align="left" >
  	<br>
  	<br>
  		<span  style="font-size: 10px; padding: 0px;font-weight: normal;vertical-align: center;">Operator Sign :-</span>	
  	<br>	
  </td>
  <td width="32.5%" align="left">
  	<br>
  	<br>
  		<span  style="font-size: 10px; padding: 0px;font-weight: normal;vertical-align: center;">Mfg Sign :-</span>	
  	<br>
  </td>
  <td  width="32.5%" align="left">
  	<br>
  	<br>
  		<span  style="font-size: 10px; padding: 0px;font-weight: normal;vertical-align: center;">QA Sign :-</span>	
  	<br>
  </td>
 </tr>
 <tr nobr="true" >
  <td width="67.5%" colspan="2" align="left">
  	<br>
  	<br>
  		<span  style="font-size: 14px; padding: 0px;font-weight: normal;font-weight: bold;">CUSTOMER PART NO :</span><br>
  		<span  style="font-size: 14px; padding: 0px;font-weight: normal;font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['customer_part_number']->value;?>
</span>	
  	<br>
  	
  </td>
  <td width="32.5%">
  	<table cellpadding="5" >
  		<tr>
  			<th  style="font-size: 10px;">
  				
  			</th>
  		</tr>
  	</table>
  </td>
 </tr>
 <tr nobr="true" >
  <td width="35%"  align="left">
    <table cellpadding="5" >
      <tr>
        <th  style="font-size: 10px;">
          Note to Customer
        </th>
      </tr>
    </table>
  </td>
  <td width="65%" colspan="2" >
    <span  style="font-size: 10px; padding: 0px;font-weight: normal;">*AT SITE DO NOT STORE IN WET CONDITION ,LOW LYING AREAS OR STANDING WATER.
      </span>
  		
  </td>
 </tr>

</table>
<?php }
}
