<!-- Sales Details -->
<div class="modal fade" id="details1<?php echo $row['purchaseid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Sales Full Details</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h5>Customer: <b><?php echo $row['customer']; ?></b>
                        <span class="pull-right">
                            <?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?>
                        </span>
                    </h5>
                    <h5>Customer Phone Number: <b><?php echo $row['phone_number']; ?></b>

                    </h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Purchase Quantity</th>
                            <th>Subtotal</th>
                            <th>Paid?</th>
                        </thead>
                        <tbody>
                            <?php
                                $sql="select * from purchase_detail left join product on product.productid=purchase_detail.productid where purchaseid='".$row['purchaseid']."'";
                                $dquery=$conn->query($sql);
                                while($drow=$dquery->fetch_array()){
                                    ?>
                                    <tr>
                                        <td><?php echo $drow['productname']; ?></td>
                                        <td class="text-right">&#x24; <?php echo number_format($drow['price'], 2); ?></td>
                                        <td><?php echo $drow['quantity']; ?></td>
                                        <td class="text-right">&#x24;
                                            <?php
                                                $subt = $drow['price']*$drow['quantity'];
                                                echo number_format($subt, 2);
                                            ?>
                                        </td>
                                        <td>Yes</td>
                                    </tr>
                                    <?php

                                }
                            ?>
                            <tr>
                                <td colspan="3" class="text-right"><b>TOTAL</b></td>
                                <td class="text-right">&#x24; <?php echo number_format($row['total'], 2); ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
			</div>
            <div class="modal-footer">
              <a href="#editproduct<?php echo $row['productid']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
              <a href="#deleteproduct<?php echo $row['productid']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
              <?php include('product_modal.php'); ?>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
