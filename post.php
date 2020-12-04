<!DOCTYPE html>
<html>
<head>
	<title>Example of php POST method</title>
</head>
<body>

	<?php 
	// if(isset($_POST["come"])){
    //     echo "<h1>HELLO, " . $_POST["come"] . "</h1>";
    // }

    // if(isset($_REQUEST["come"])){
    //     echo "<h1>HELLO, " . $_REQUEST["come"] . "</h1>";
   
    // }

    $name="Mawuyram";

function myName()
{
global $name;

    echo "My name is ". $name;
      
}
myName();





	?>

	<form method="post" action="">
		<label>Name</label>
		<input type="text" name="come">
		<input type="Submit" name="submit" value="Submit">
	</form>

</body>
</html>


