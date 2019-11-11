<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
	<h1 class="page-header text-center">ORDER LIST --- FOR STAFF</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Date</th>

			<th>Customer</th>
			<th>Total Sales</th>
			<th>Custom Req</th>
      <th>Payment</th>
			<th>Details</th>
		</thead>
		<tbody>

			<?php
				$sql="select * from purchase order by purchaseid desc";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>

						<td><?php echo $row['customer']; ?></td>
						<td class="text-right">&#x24; <?php echo number_format($row['total'], 2); ?></td>
						  <td><?php echo $row['custom']; ?></td>
            <td><?php echo $row['payment']; ?></td>
						<td><a href="#details1<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm">Check Order Details</a>



							<?php include('list_modal.php'); ?>
						</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>
