<!DOCTYPE html>
<html>
<head>
	<style>
            table {
                width: 100%;
                border-collapse: collapse;
                border: 1px solid black;
                padding-bottom: 0px !important;
                padding-top: 1.5px !important;
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
					<span style="font-size: 7px;">
						<b style="font-size: 7px;">{{$part_data['job_stricker_label']}}</b>&nbsp;<sup  style="font-size: 7px;margin-bottom: 2px;" ><b style="font-size: 7px;">{{$part_data['job_stricker_suffix']}}</b></sup>&nbsp; &nbsp;  <b style="font-size: 7px;">{{$part_data['customer_part_name']}}</b><br>
						<b style="font-size: 7px;">{{$part_data['customer_part_number']}}</b>
					</span>
				</th>
			</tr>
			<tr cellpadding="0" >
		      <th width="22%" style="font-size: 7px;">&nbsp;Part Serial</th>
		      <th width="33.5%" style="font-size: 7px;">{{$part_data['production_serial_number']}}-<b>{{$part_data['serial_number']}}</b></th>
		      <th rowspan="5" style="text-align: left;padding:0px !important;margin:0px !important;" width="45.7%" >
		      	<img src="{{$part_data['qr_code']}}" alt="Image Description" >
		      </th>
		    </tr>
		    <tr cellpadding="0">
		      <th width="33%" style="font-size: 7px;">&nbsp;Vendor initial </th>
		      <th width="31%" style="font-size:7px;">{{$part_data['vendor_initial']}}</th>
		      
		    </tr >
		    <tr cellpadding="0">
		      <th width="33%" style="font-size: 7px;">&nbsp;GCS Rev Date </th>
		      <th width="31%" style="font-size: 7px;">{{$part_data['gcs_rev_date']}}</th>
		    </tr>
		    <tr>
		      <th width="33%" style="font-size: 7px;">&nbsp;Production Date</th>
		      <th width="31%" style="font-size: 7px;">{{$part_data['production_date']}}</th>
		    </tr>
		    <tr>
		      <th width="33%" style="font-size: 7px;">&nbsp;Stroke Travel</th>
		      <th width="31%" style="font-size: 7px;">{{$part_data['stroke_travel']}}</th>
		    </tr>
		    <tr>
				<th  width="80%" style="font-size: 7px;">
					&nbsp;&nbsp;Eyelet to Eyelet Length Fully Extended  
				</th>
				<th  width="40%" style="font-size: 7px;">
					{{$part_data['eel_extended']}}
				</th>
			</tr>
			<tr>
				<th  width="80%" style="font-size: 7px;">
					&nbsp;&nbsp;Eyelet to Eyelet Length Fully Retracted  
				</th>
				<th  width="40%" style="font-size: 7px;">
					{{$part_data['eel_retracted']}}
				</th>
				
			</tr>
			<tr>
				<th  width="80%" style="font-size: 7px;">
					&nbsp;&nbsp;Lateral Load Capacity at Full Extension  
				</th>
				<th  width="40%" style="font-size: 7px;">
					{{$part_data['llc_extension']}}
				</th>
			</tr>
			<tr>
				<th  width="80%" style="font-size: 7px;">
					&nbsp;&nbsp;Maximum Rated Load  
				</th>
				<th  width="40%" style="font-size: 7px;">
					{{$part_data['maximum_rated_load']}}
				</th>
				
			</tr>
			<tr>
				<th  width="80%" style="font-size: 1px;">
					&nbsp;&nbsp; 
				</th>
			</tr>
		</table>

		
</body>
</html>