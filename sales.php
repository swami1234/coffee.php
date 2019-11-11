<?php include('header.php');

 ?>

<body>
<?php include('navbar.php'); ?>
<div class="container">
	<h1 class="page-header text-center">THANK YOU FOR YOUR ONLINE PAYMENT FOR FOLLOWING ORDER </h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Date</th>
			<th>Customer</th>
			<th>Total Sales</th>
			<th>Custom</th>

			<th>Pick up Time</th>

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
	         <td><?php echo $row['pickup_time']; ?></td>
					<td>

					
            <?php include('sales_modal.php'); ?>



					</td>

           </tr>

					 <?php

				 }

			 ?>

		</tbody>
	</table>
</div>
</body>
