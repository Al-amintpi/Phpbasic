<?php 
	$phone_number = '01926361946';
	$phone_number_count = strlen($phone_number);
	if((is_numeric($phone_number)) and ($phone_number_count == 11)){
		echo "good";
	}else{
		echo "false";
	}
?>