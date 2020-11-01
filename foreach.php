<?php
	$name = array('roll-1'=>'A', 'roll-2'=>'B', 'roll-3'=>'C', 'roll-4'=>'D');
	//  var_dump($name);
	//  echo "<br>";
	//  echo $name['roll-1']."<br>";
	//  echo $name['roll-2'];

	 // $name = array('apple', 'mango', 'banana');
	 // $i = 1;
	 // foreach($name as $newname){
	 // 	echo $i." ". $newname."<br>";
	 // 	$i++;
	 // }

	foreach($name as $key=>$newname){
		echo $key." ".$newname."<br>";
	}
?>