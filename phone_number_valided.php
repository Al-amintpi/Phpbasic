<?php
	
	$phone_number = '01926361946';
	$countnumber = strlen($phone_number);
	if(is_numeric($phone_number)){
		 if($countnumber !=11){
			echo "Phone Number kom hoiche";
		}else{
			echo "oh ho phone Number thik ache";
		}
	}else{
		echo "false";
	}

	

?>