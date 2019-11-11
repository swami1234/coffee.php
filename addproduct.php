<?php
	include('conn.php');

	$pname=$_POST['pname'];

	$category=$_POST['category'];
	$price=$_POST['price'];


	$sql="insert into product (productname, categoryid, price) values ('$pname', '$category', '$price')";
	$conn->query($sql);

	header('location:product.php');

?>
