<?php
	include('conn.php');

	$id=$_GET['product'];

	$pname=$_POST['pname'];
	$category=$_POST['category'];

	$porder=$POST_['porderstatus'];

	$sql="select * from product where productid='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();



	$sql="update product set productname='$pname', categoryid='$category', porderstatus='$porder' where productid='$id'";
	$conn->query($sql);

	header('location:product.php');
?>
