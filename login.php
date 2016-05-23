<?php 
	include 'conn.php';
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "select * from reg where email='$email' and password='$password'";
	if ($data = $db->query($sql)){
		if (mysqli_num_rows($data)>0){
			$row = $data->fetch_array();
			session_start();
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
			header("Location:mpage.php");
		}else echo 'error';
	}else echo 'error2';
 ?>