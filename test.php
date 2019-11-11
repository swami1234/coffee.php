<?php // opening tag purchaseid = $purchaseid";
include('conn.php');

//$id=$_POST['purchaseid'];
//session_start();
//$pId = $_SESSION['pId'];
	$id=$_GET['purchase.purchaseid'];
//$sql="update purchase set payment='paid' where purchaseid=$id";
//$conn->query($sql);
//header("Location: list.php");
echo $id;
?>
