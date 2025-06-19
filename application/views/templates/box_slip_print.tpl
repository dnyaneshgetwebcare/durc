<table border="1" align="center" cellspacing="0" cellpadding="5.5">
    <tr nobr="true">
        <th width="20%" rowspan="3" cellpadding="2">
            <img src="{$company_logo}" width="120" height="55" />
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
        <th width="42%" align="left" style="font-size: 7px;">
            Doc. No. - {$document_number}
        </th>
    </tr>
    <tr nobr="true" style="font-size: 7px;">
        <td align="left">&nbsp; Refrence - {$refrence}</td>
    </tr>
    <tr nobr="true" align="left" style="font-size: 7px;">
        <td>&nbsp; Page No - 1 of 1</td>
    </tr>
    <tr nobr="true">
        <td width="35%" style="font-size: 10px;" align="center">
            <table cellpadding="2">
                <tr>
                    <th>
                        <font color="#222222" face="Arial, Helvetica, sans-serif">
                            <span width="50%" style="font-size: 12px; padding: 0px; font-weight: normal; font-weight: bold;">{$company_name}</span>
                        </font>
                    </th>
                </tr>
            </table>
        </td>
        <td colspan="2" width="65%" cellspacing="10" style="margin: 20px;">
            <table cellpadding="10">
                <tr>
                    <th style="font-size: 10px;">
                        <font color="#222222" face="Arial, Helvetica, sans-serif">
                            <span style="font-size: 12px; padding: 0px; font-weight: normal; font-weight: bold;">FINISHED GOOD </span>
                        </font>
                    </th>
                </tr>
            </table>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">Part Name/Description</span>
        </td>
        <td colspan="2" width="65%">
          <font color="#222222" face="Arial, Helvetica, sans-serif">
                            <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">
                                {$part_name}
                            </span>
                        </font>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">No. Of Part </span>
        </td>
        <td colspan="2" width="65%">
            <font color="#222222" face="Arial, Helvetica, sans-serif">
                <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">{$start_serial_number} To {$end_serial_number}</span>
            </font>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">No. Of Qty </span>
        </td>
        <td colspan="2" width="65%">
            <font color="#222222" face="Arial, Helvetica, sans-serif">
                <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">{$box_packing_qty} NOS</span>
            </font>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">Box No. </span>
        </td>
        <td colspan="2" width="65%">
            <font color="#222222" face="Arial, Helvetica, sans-serif">
                <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">{$box_number}</span>
            </font>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">Shift </span>
        </td>
        <td colspan="2" width="65%">
            <font color="#222222" face="Arial, Helvetica, sans-serif">
                <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">{$shift}</span>
            </font>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">Date of Production</span>
        </td>
        <td colspan="2" width="65%">
            <font color="#222222" face="Arial, Helvetica, sans-serif">
                <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">{$paking_date}</span>
            </font>
        </td>
    </tr>
    <tr>
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal; vertical-align: center;">Operator Sign :-</span>
        </td>
        <td width="32.5%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal; vertical-align: center;">Mfg Sign :-</span>
        </td>
        <td width="32.5%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal; vertical-align: center;">QA Sign :-</span>
        </td>
    </tr>
    <tr nobr="true">
        <td width="67.5%" colspan="2" align="left">
            <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">CUSTOMER PART NO :</span><br />
            <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">{$customer_part_number}</span>
        </td>
        <td width="32.5%">
            <table cellpadding="5">
                <tr>
                    <th style="font-size: 10px;"></th>
                </tr>
            </table>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <table cellpadding="5">
                <tr>
                    <th style="font-size: 10px;">
                        Note to Customer
                    </th>
                </tr>
            </table>
        </td>
        <td width="65%" colspan="2">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">*AT SITE DO NOT STORE IN WET CONDITION ,LOW LYING AREAS OR STANDING WATER. </span>
        </td>
    </tr>
</table>
<br>
<br>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="5.5">
    <tr nobr="true">
        <th width="20%" rowspan="3" cellpadding="2">
            <img src="{$company_logo}?123" width="120" height="55" />
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
        <th width="42%" align="left" style="font-size: 7px;">
            Doc. No. - {$document_number}
        </th>
    </tr>
    <tr nobr="true" style="font-size: 7px;">
        <td align="left">&nbsp; Refrence - {$refrence}</td>
    </tr>
    <tr nobr="true" align="left" style="font-size: 7px;">
        <td>&nbsp; Page No - 1 of 1</td>
    </tr>
    <tr nobr="true">
        <td width="35%" style="font-size: 10px;" align="center">
           <table cellpadding="2">
                <tr>
                    <th>
                        <font color="#222222" face="Arial, Helvetica, sans-serif">
                            <span width="50%" style="font-size: 12px; padding: 0px; font-weight: normal; font-weight: bold;">{$company_name}</span>
                        </font>
                    </th>
                </tr>
            </table>
        </td>
        <td colspan="2" width="65%" cellspacing="10" style="margin: 20px;">
            <table cellpadding="10">
                <tr>
                    <th style="font-size: 10px;">
                        <font color="#222222" face="Arial, Helvetica, sans-serif">
                            <span style="font-size: 12px; padding: 0px; font-weight: normal; font-weight: bold;">FINISHED GOOD </span>
                        </font>
                    </th>
                </tr>
            </table>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">Part Name/Description</span>
        </td>
        <td colspan="2" width="65%">
            <table cellpadding="10">
                <tr>
                    <th style="font-size: 10px;">
                        <font color="#222222" face="Arial, Helvetica, sans-serif">
                            <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">
                                {$part_name}
                            </span>
                        </font>
                    </th>
                </tr>
            </table>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">No. Of Part </span>
        </td>
        <td colspan="2" width="65%">
            <font color="#222222" face="Arial, Helvetica, sans-serif">
                <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">{$start_serial_number} To {$end_serial_number}</span>
            </font>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">No. Of Qty </span>
        </td>
        <td colspan="2" width="65%">
            <font color="#222222" face="Arial, Helvetica, sans-serif">
                <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">{$box_packing_qty} NOS</span>
            </font>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">Box No. </span>
        </td>
        <td colspan="2" width="65%">
            <font color="#222222" face="Arial, Helvetica, sans-serif">
                <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">{$box_number}</span>
            </font>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">Shift </span>
        </td>
        <td colspan="2" width="65%">
            <font color="#222222" face="Arial, Helvetica, sans-serif">
                <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">{$shift}</span>
            </font>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">Date of Production</span>
        </td>
        <td colspan="2" width="65%">
            <font color="#222222" face="Arial, Helvetica, sans-serif">
                <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">{$paking_date}</span>
            </font>
        </td>
    </tr>
    <tr>
        <td width="35%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal; vertical-align: center;">Operator Sign :-</span>
        </td>
        <td width="32.5%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal; vertical-align: center;">Mfg Sign :-</span>
        </td>
        <td width="32.5%" align="left">
            <span style="font-size: 10px; padding: 0px; font-weight: normal; vertical-align: center;">QA Sign :-</span>
        </td>
    </tr>
    <tr nobr="true">
        <td width="67.5%" colspan="2" align="left">
            <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">CUSTOMER PART NO :</span><br />
            <span style="font-size: 14px; padding: 0px; font-weight: normal; font-weight: bold;">{$customer_part_number}</span>
        </td>
        <td width="32.5%">
            <table cellpadding="5">
                <tr>
                    <th style="font-size: 10px;"></th>
                </tr>
            </table>
        </td>
    </tr>
    <tr nobr="true">
        <td width="35%" align="left">
            <table cellpadding="5">
                <tr>
                    <th style="font-size: 10px;">
                        Note to Customer
                    </th>
                </tr>
            </table>
        </td>
        <td width="65%" colspan="2">
            <span style="font-size: 10px; padding: 0px; font-weight: normal;">*AT SITE DO NOT STORE IN WET CONDITION ,LOW LYING AREAS OR STANDING WATER. </span>
        </td>
    </tr>
</table>
