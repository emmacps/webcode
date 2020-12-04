<!DOCTYPE html>
<html>
<head>
	<title>Example of php GET method</title>
</head>
<body>

	<?php 

	if(isset($_GET["come"])){
		echo "<p>Hi " . $_GET["come"] . "</p>";
	}

	?>

	<form method="get" action="">
		<label>Name</label>
		<input type="text" name="come">
		<input type="Submit" name="submit" value="Submit">
	</form>

</body>
</html>


$come = "Emmanuel";