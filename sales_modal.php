<!-- Sales Details -->
<div class="modal fade" id="details<?php echo $row['purchaseid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Purchase Quantity</th>
                            <th>Subtotal</th>
                            <th></th>
                            <th>Pay with Credit Card</th>
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
                                        <td><input type="hidden" name="purchaseid"><?php echo $drow['purchaseid'] ?></input></td>
                                        <td><form method="POST" action="final.php">
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
                                                  <td><input type="text" class="form-control" name="name<?php echo $iterate; ?>"></td>
                                                  <td><input type="text" class="form-control" name="card<?php echo $iterate; ?>"></td>
                                                  <td><input type="text" class="form-control" name="expiry<?php echo $iterate; ?>"></td>
                                                  <td><input type="text" class="form-control" name="zip<?php echo $iterate; ?>"></td>
                                                  <td><input type="text" class="form-control" name="cvs<?php echo $iterate; ?>"></td>
                                                  <td><input type='hidden' name='purchaseid' value='<?php echo $purchaseid ?>'</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        <button type="submit"  class="btn btn-success" data-dismiss="pay">Pay</button>

                                          </td>

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


                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
