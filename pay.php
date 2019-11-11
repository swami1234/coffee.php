<?php include('header.php'); ?>

<html>
<body>
<?php include('navbar.php'); ?>
<?php include('header.php'); ?>

<?php $purchaseid=$_POST['purchaseid']; ?>
<div class="container">
	<h1 class="page-header text-center">Pay with Credit Card Here......</h1>
	<form method="POST" action="final.php">
		<table class="table table-striped table-bordered">
			<thead>

				<th>Name on Card</th>
				<th>Card Number</th>
				<th>Expiry Date</th>
				<th>Billing Zipcode</th>
        <th>Cvs</th>
				<th></th>

			</thead>
			<tbody>
				<tr>
						<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
            <td><input type='hidden' name='purchaseid' value='<?php echo $purchaseid ?>'</td>
				</tr>
			</tbody>
		</table>
		<?php callq() ?>
  <button type="submit<?php echo $purchaseid ?>"  class="btn btn-success" data-dismiss="pay">Pay</button>
</body>
</html>
