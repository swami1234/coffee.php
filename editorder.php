<?php
	include('conn.php');

	$id=$_GET['pdid'];

	$pname=$_GET['productname'];

	$price=$_GET['price'];
  $qty=$_GET['quantity'];

	$sql="select * from product where productid='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();


	$sql="update product set productname='$pname', price='$price', quantity='$qty' where productid='$id'";
	$conn->query($sql);

	header('location:product.php');
?>
