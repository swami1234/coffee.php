
<?php // opening tag purchaseid = $purchaseid";
include('conn.php');
$id=$_GET['pdid'];
$paid='paid';
$sql="update purchase set payment='$paid' where purchaseid='$id'";
$conn->query($sql);
$pid=$conn->insert_id;
header("Location: list.php");
?>
