<!DOCTYPE html>
<html>
<head>
	<title>Array php</title>
</head>
<body>


<?php 

$colors = array("Red", "Green", "Cyan", "Blue", "Orange");
$ages = array(
		"Peter" => 22,
		"Clark" => 32,
		"John"  => 28
);

//printing array structure
print_r($colors);
echo "<h3>Variable dump</h3>";
var_dump($colors);

echo "<br>";
sort($colors);
print_r($colors);
echo "<br>";
echo "<br>";
rsort($colors);
print_r($colors);

echo "<br>";
echo "<br>";
print_r($ages);
echo "<br>";


// multidimensional arrays
$contacts = array(
	array(
		"name" => "Peter Paker",
		"email" => "pater@gmail.com",
	),

	array(
		"name" => "John Paker",
		"email" => "john@gmail.com",
	),

	array(
		"name" => "Eric Paker",
		"email" => "eric@gmail.com",
	)

);

print_r($contacts);

echo "<br>";

echo "Peter Parker's Email is " . $contacts[2]["name"];

?>
</body>
</html>