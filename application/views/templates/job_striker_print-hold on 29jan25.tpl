<!DOCTYPE html>
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
					<img src="{{$part_data['customer_logo']}}"  width="410" height="40" style="">
					<span style="font-size: 6px;">
						<b style="font-size: 6px;">{{$part_data['job_stricker_label']}}</b>&nbsp;<sup  style="font-size: 6px;margin-bottom: 2px;" ><b style="font-size: 6px;">{{$part_data['job_stricker_suffix']}}</b></sup>&nbsp; &nbsp;  <b style="font-size: 6px;">{{$part_data['customer_part_name']}}</b><br>
						<b style="font-size: 6px;">{{$part_data['customer_part_number']}}</b>
					</span>
				</th>
			</tr>
			<tr cellpadding="0" >
		      <th width="20%" style="font-size: 6px;">&nbsp;<strong>Part Serial</strong></th>
		      <th width="31%" style="font-size: 6px;">{{$part_data['production_serial_number']}}-<b>{{$part_data['serial_number']}}</b></th>
		      <th rowspan="5" style="text-align: left" width="54%">
		      	<img src="{{$part_data['qr_code']}}" alt="Image Description" width="450" height="380" >
		      </th>
		    </tr>
		    <tr cellpadding="0">
		      <th width="30%" style="font-size: 6px;">&nbsp;<strong>Vendor initial</strong> </th>
		      <th width="22%" style="font-size:6px;">{{$part_data['vendor_initial']}}</th>
		      
		    </tr >
		    <tr cellpadding="0">
		      <th width="30%" style="font-size: 6px;">&nbsp;<strong>GCS Rev Date</strong> </th>
		      <th width="22%" style="font-size: 6px;">{{$part_data['gcs_rev_date']}}</th>
		    </tr>
		    <tr>
		      <th width="30%" style="font-size: 6px;">&nbsp;<strong>Production Date</strong></th>
		      <th width="22%" style="font-size: 6px;">{{$part_data['production_date']}}</th>
		    </tr>
		    <tr>
		      <th width="30%" style="font-size: 6px;">&nbsp;<strong>Stroke Travel</strong></th>
		      <th width="22%" style="font-size: 6px;">{{$part_data['stroke_travel']}}</th>
		    </tr>
		    <tr>
				<th  width="80%" style="font-size: 6px;">
					&nbsp;&nbsp;<strong>Eyelet to Eyelet Length Fully Extended</strong>  
				</th>
				<th  width="40%" style="font-size: 6px;">
					{{$part_data['eel_extended']}}
				</th>
			</tr>
			<tr>
				<th  width="80%" style="font-size: 6px;">
					&nbsp;&nbsp;<strong>Eyelet to Eyelet Length Fully Retracted</strong>  
				</th>
				<th  width="40%" style="font-size: 6px;">
					{{$part_data['eel_retracted']}}
				</th>
				
			</tr>
			<tr>
				<th  width="80%" style="font-size: 6px;">
					&nbsp;&nbsp;<strong>Lateral Load Capacity at Full Extension</strong>  
				</th>
				<th  width="40%" style="font-size: 6px;">
					{{$part_data['llc_extension']}}
				</th>
			</tr>
			<tr>
				<th  width="80%" style="font-size: 6px;">
					&nbsp;&nbsp;<strong>Maximum Rated Load</strong>  
				</th>
				<th  width="40%" style="font-size: 6px;">
					{{$part_data['maximum_rated_load']}}
				</th>
				
			</tr>
			<tr>
				<th  width="80%" style="font-size: 6px;">
					&nbsp;&nbsp; 
				</th>
			</tr>
		</table>

		
</body>
</html>