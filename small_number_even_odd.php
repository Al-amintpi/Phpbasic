<form action="" method="POST">
	<input type="number" name="value1"><br>
	<input type="number" name="value2"><br>
	<input type="text" name="value3"><br>
	<input type="submit" name="submit" value="Submit">
</form>

<?php
$a=array();
function small_Even_Odd_Array(){
	if(isset($_POST['submit'])){
		$number1 = $_POST['value1'];
		$number2 = $_POST['value2'];
		$even_or_odd = $_POST['value3'];
		
		echo $number1;
		echo $number2;
		echo $even_or_odd;
		 
		global $a;
		if(((gettype($number1=='integer')) and (gettype($number2=='integer'))) and
		 	((gettype($even_or_odd=='string')) and (($even_or_odd=='even') or ($even_or_odd=='odd')))){
			$smallnumber = min($number1, $number2);
			$bignumber = max($number1, $number2);
			for($value1 = $smallnumber; $value1<=$bignumber; $value1++){
				if(($even_or_odd == "even" and $value1%2==0) or ($even_or_odd == 'odd' and $value1%2==1)){ 
					array_push($a, $value1);
				}
			}
			print_r($a);
			echo "<br>";
			foreach($a as $value){
				echo $value ." ";

			}

		}else{
			echo "do not match";
		}
	}

}
small_Even_Odd_Array();
?>