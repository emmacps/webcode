<!DOCTYPE html>
<html>
<head>
	<title>Web Development</title>
</head>
<body>

	

	<?php 

		//Testing code sample: single line comment
	#include db config

	/* 
		learning php
		for the first time.

	 */
	//echo "web development";

	// Variables
	$txt = "<h1>Hello World to programming</h1>";
	$number = 10;
	$alpha = "<h4 style='color: red'>IIPGH</h4>";

	//echo $txt . " " . $number . $alpha;

	echo $txt;
	echo $alpha;

	// data types
	$a = "123";
	var_dump($a);

	$b = -123;
	var_dump($b);

	echo "<br>";

	$show_error = true;
	var_dump($show_error);

	// Operators
	$x = 25;
	$y = 15;
	$z = "25";

	var_dump($x == $z);
	var_dump($x === $z);

	// logical comparison
	$year = 2020;

	if(($year % 400 == 0) || (($year % 100 !=0) && ($year % 4 == 0))){
		echo $year . "is a leap year";
	}else{
		echo $year . "is not a leap year";
	}


	?>
 



</body>
</html>