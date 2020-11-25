<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
</head>
<body>

	<?php 

	//define your function
	function whatistoday(){

		echo "Today is " . date('l', mktime());
	}

	whatistoday();

	 ?>


</body>
</html>