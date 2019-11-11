
<html>
<body>
<?php include('navbar.php'); ?>
<?php include('header.php'); ?>
<style>
h1 {

  color: #6a5acd;
}

</style>
<style>
#cc {

  color: #6a5acd;
}

</style>
<style>
#a th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#6a5acd;
  color: white;
}
</style>



<div class="container">
	<h1 class="page-header text-center">Welcome to Martha's Brew Coffee Stand-Online Order</h1>
	<div class="row">
		<div class="col-md-12">
			<select id="catList" class="btn btn-default">
			<option value="0">All Category</option>
			<?php
				$sql="select * from category";
				$catquery=$conn->query($sql);
				while($catrow=$catquery->fetch_array()){
					$catid = isset($_GET['category']) ? $_GET['category'] : 0;
					$selected = ($catid == $catrow['categoryid']) ? " selected" : "";
					echo "<option$selected value=".$catrow['categoryid'].">".$catrow['catname']."</option>";
				}
			?>
			</select>

		</div>

	</div>
		</br>
	<form method="POST" action="purchase.php">
		<table id="a" class="table table-striped table-bordered">
			<thead>
				<th class="text-center"><input type="checkbox" id="checkAll"></th>
				<th>Category</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>


			</thead>
			<tbody>
				<?php

					$sql="select *
					      from product
								left join category
								on category.categoryid=product.categoryid
								order by product.categoryid asc, productname asc";
					$query=$conn->query($sql);
					$iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><input type="checkbox" value="<?php echo $row['productid']; ?>||<?php echo $iterate; ?>" name="productid[]" style=""></td>
							<td><?php echo $row['catname']; ?></td>
							<td><?php echo $row['productname']; ?></td>
							<td class="text-right">&#x24; <?php echo number_format($row['price'], 2); ?></td>
							<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>">



						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>

		<div class="row">


			<div class="col-md-2">
					<input type="number" name="phone_number" class="form-control" placeholder="Phone Number" required>
			</div>
			<div class="col-md-2">
				<input type="text" name="customer" class="form-control" placeholder="Customer Name" required>
			</div>


			<div class="col-md-4">
					<input type="text" name="custom" class="form-control" placeholder="Custom Requirement">
			</div>
			<div class="col-md-2">
					<input type="datetime" name="pickup_time" class="form-control" placeholder="Pick up Time">
			</div>

			<div class="col-md-2" style="margin-left:-20px;">
				<button type="submit" id="cc"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</div>
		</div>

</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#catList").on('change', function(){
			if($(this).val() == 0)
			{
				window.location = 'index.php';
			}
			else
			{
				window.location = 'index.php?category='+$(this).val();
			}
		});
	});
</script>
</body>


</html>
