<?php 

// db script for connect to database admin

$connection = mysqli_connect("localhost", "root", "", "business");

if($connection === FALSE){

	die("ERROR: Could not connect. " . mysqli_connnect_error());

}else{

	//echo "Connected to database admin" . mysqli_get_host_info($connection);
}

 ?>