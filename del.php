<?php 
	include "conn.php";
	$id = $_GET['id'];
	$sql = "delete from reg where id = '$id'";
	if ($db->query($sql)){
		header("Location:admin-panel.php");
	}
 ?>