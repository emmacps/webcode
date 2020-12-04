

	<?php 

	//define your function
	function whatistoday(){

		echo "Today is " . date('l', time());
	}

	//whatistoday();

	//function to add two numbers
	function getsum($num1, $num2){
		$sum = $num1 + $num2;

		echo "Sum of the two numbers " . $num1 . "and " . $num2 . " is: " . $sum;
	}

	// global variables
	$x = 75;
	$y = 25;

	function addition(){
		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	}

	addition();
	//echo $z;

	 ?>

	 <?php 

	 echo $_SERVER['PHP_SELF'];
	 echo "<br>";
	 echo $_SERVER['SERVER_NAME'];
	 echo "<br>";
	 echo $_SERVER['HTTP_HOST'];
	 echo "<br>";
	 echo $_SERVER['HTTP_USER_AGENT'];
	 echo "<br>";
	 echo $_SERVER['SCRIPT_NAME'];
	 echo "<br>";
	 echo $_SERVER['REQUEST_TIME'];



	  ?>

