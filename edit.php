<?php
	include('conn.php');

	$id=$_GET['purchase'];
  
	$cname=$_POST['cname'];

	$sql="update category set catname='$cname' where categoryid='$id'";
	$conn->query($sql);

	header('location:category.php');
?>
