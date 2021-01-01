<?php session_start(); ?>

<?php 

$_SESSION['username'] = null;
$_SESSION['useremail'] = null;
$_SESSION['userpassword'] = null;

header("Location: ../index.php");

 ?>