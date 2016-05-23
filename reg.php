<?php
	session_start();
	
	include "conn.php";


	$email = $_POST['email'];
	$pass = $_POST['password'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];

	$sql = "INSERT INTO reg VALUES(null,'$email','$pass','$name','$surname')";
	if ($db->query($sql)){header("Location:logn.php");}
	
?>