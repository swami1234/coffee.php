


<div class="modal fade" id="details<?php echo $row['purchaseid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">You paid for your order</h4></center>
            </div>
            <div class="modal-body">

              <?php
              $sql="update purchase set payment='paid' where purchaseid='".$row['purchaseid']."'";
                $conn->query($sql);
                  while($row=$query->fetch_array()){
                ?>

              <?php
            }
    ?>
    </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
