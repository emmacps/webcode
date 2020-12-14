<?php 

// $db_connect = mysqli_connect("localhost", "root", "", "webcode");

// if($db_connect === FALSE){
// 	echo "No Connection";
// }else{
// 	//echo "Connected";
// }


// Attempting connecting to db server
$link = mysqli_connect("localhost", "root", "", "jam");

if($link === FALSE){

	die("ERROR: Could not connect. " . mysqli_connect_error());

}

// Attempting creating database
//$sql = "CREATE DATABASE jam";
$sql = "CREATE TABLE persons(
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		first_name VARCHAR(30) NOT NULL,
		last_name VARCHAR(30) NOT NULL,
		email VARCHAR(30) NOT NULL UNIQUE
	)";
if(mysqli_query($link, $sql)){
	echo "database created";
}else{
	echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}


//close connection
mysqli_close($link);

 ?>