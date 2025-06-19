<?php 

function pr($data='',$exit = 0)
{
        echo("<pre>");

        print_r($data);
        echo("<pre>");
        if($exit == 1){
        	exit();
        }
}

function date_formate($date='')
{
	$formated_date  = "--";
	if($date != ''){
		$formated_date = date('Y-m-d', strtotime($date));
	}

	return $formated_date;

}
?>