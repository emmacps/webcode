<!DOCTYPE html>
<html>
<head>
	<title>Web Development</title>
</head>
<body>


	<?php 
$today = date("D");
switch($today){
	case "Mon":
		echo "Today is Monday.";
		break;

	case "Tue":
		echo "Today is Tuesday.";
		break;

	// case "Wed":
	// 	echo "Today is Wednesday.";
	// 	break;

	case "Thur":
		echo "Today is Thursday.";
		break;

	case "Fri":
		echo "Today is Friday.";
		break;

	case "Sat":
		echo "Today is Saturday.";
		break;

	case "Sun":
		echo "Today is Sunday.";
		break;

	default:
		echo "No informaton available for that day";
		break;
}


	?>
 



</body>
</html>