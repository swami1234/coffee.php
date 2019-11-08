<?php
	include('conn.php');

	$id = $_GET['purchase'];

	$sql="delete from purchase where productid='$id'";
	$conn->query($sql);

	header('location:list.php');
?>
