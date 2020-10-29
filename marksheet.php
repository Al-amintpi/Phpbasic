<?php 


$mark = 120;
$passmark = 33;

if($mark>=80 and $mark<=100){
	echo "A+ paiche";
}elseif ($mark<80 and $mark>=70) {
	echo "A Grade paiche";
}elseif ($mark<70 and $mark>=60) {
	echo "A- Grade paiche";
}elseif ($mark<60 and $mark>=50) {
	echo "B Grade paiche";
}elseif ($mark>100 or $mark<0) {
	echo "Number is invallid";
}elseif ($mark<$passmark) {
	echo "Fail korche";
}
else{
	echo "pass korche";
}


 ?>
