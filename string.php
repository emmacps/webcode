<!DOCTYPE html>
<html>
<head>
	<title>Web Development</title>
</head>
<body>


	<?php 

	// string functions
	$my_str = 'Welcome to the world of computer programming';
	
	$name = "John";
	$lastName = "Doe";

	echo strlen($my_str);
	echo "<br>";

	echo str_word_count($my_str);
	echo "<br>";

	// conctenation
	echo "Welcome Mr." . " " . $name . " " . $lastName;
	echo "<br>";

	// string trimming
	$str = " Hello World! ";
	$stc = "hello world to coders. how are you all doing today.";
	echo "Without trimmimg:" . $str;
	echo "<br>";
	echo "With trimmimg:" . trim($str);

	// convert upper and lower case
	echo "<br>";
	echo ucfirst($stc);
	echo "<br>";

	echo ucwords($stc);

	echo "<br>";
	echo "<br>";
	// conditional statements

	$d = date("D");
	if($d == "Fri"){
		echo "Have a nice weekend";
	}elseif($d == "Sun"){
		echo "Have a nice Sunday";
	}else{
		echo "Have a nice day";
	}


	?>
 



</body>
</html>