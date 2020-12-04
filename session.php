<!DOCTYPE html>
<html>
<head>
	<title>Example of php GET method</title>
</head>
<body>

	<?php 

	//session_start();

	session_destroy();

	//storing session data
	$_SESSION["firstname"] = "Peter";
	$_SESSION["lastname"] = "Parker";

	if(isset($_SESSION["lastname"])){
		//unset($_SESSION["lastname"]);
	}


	echo 'Hi ' . $_SESSION["lastname"];

	?>

	

</body>
</html>


