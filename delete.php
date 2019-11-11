<?php
	include('conn.php');

	$id = $_GET['purchase'];

	$sql="delete from purchase where purchasetid='$id'";
	$conn->query($sql);

	header('location:list.php');
?>
