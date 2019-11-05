<?php include('header.php'); ?>
<html>
<body>
<?php include('navbar.php'); ?>
<?php include('header.php'); ?>

<div class="container">
	<h1 class="page-header text-center">Pay with Credit Card Here......</h1>
	<form method="POST" action="purchase.php">
		<table class="table table-striped table-bordered">
			<thead>

				<th>Name on Card</th>
				<th>Card Number</th>
				<th>Expiry Date</th>
				<th>Billing Zipcode</th>
        <th>Cvs</th>
			</thead>
			<tbody>
				<tr>
						<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
				</tr>
			</tbody>
		</table>
  <button type="button" class="btn btn-success" data-dismiss="pay">Pay</button>
</body>
</html>
