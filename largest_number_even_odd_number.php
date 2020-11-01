<!DOCTYPE html>
<html>
<head>
	<title> Largest number even odd number </title>
</head>
<body>

	
<?php


	
function large_even_or_odd($number1, $number2, $str){
	$arr = array(); 
 	if((gettype($number1)=='integer') & (gettype($number2)=='integer')&(gettype($str)=='string') & ($str == 'even') | ($str == 'odd')){
 		

 		$small = min($number1,$number2);
 		$highest = max($number1, $number2);
 		
 		for($i = $small; $i<=$highest; $i++){
 			if(($str =='even' & $i%2 == 0) | ($str =='odd' & $i%2 == 1)){
 				array_push($arr, $i);

 			}
 		}
 		print_r($arr);
 	}
}

large_even_or_odd(1,7, "even");

?>
</body>
</html>

