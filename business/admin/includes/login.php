<?php include "../../includes/db.php"; ?>

<?php session_start(); ?>

<?php 

if(isset($_POST['login'])){

	//$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$userpassword = $_POST['userpassword'];

	//$username = mysqli_real_escape_string($connection, $username);
	$useremail = mysqli_real_escape_string($connection, $useremail);
	$userpassword = mysqli_real_escape_string($connection, $userpassword);

	$query = "SELECT * FROM users WHERE useremail = '{$useremail}' ";
	$select_user = mysqli_query($connection, $query);

	if(!$select_user){
		die("QUERY FAILED" . mysqli_error($connection));
	}

	while($row = mysqli_fetch_assoc($select_user)){
		$db_username = $row['username'];
		$db_firstname = $row['firstname'];
		$db_lastname = $row['lastname'];
		$db_useremail = $row['useremail'];
		$db_userpassword = $row['userpassword'];
		$db_role = $row['role'];
	}

	if($useremail === $db_useremail && $userpassword === $db_userpassword){

		$_SESSION['username'] = $db_username;
		$_SESSION['useremail'] = $db_useremail;
		$_SESSION['userpassword'] = $db_userpassword;
		$_SESSION['role'] = $db_role;

		header("Location: ../dashboard.php");
	}else{

		header("Location: ../index.php");

		//$msg = "Incorrect username or password";
	}
}

 ?>