

<?php
$sql="update purchase set payment='paid' where purchaseid='".$row['purchaseid']."'";
  $conn->query($sql);
    while($row=$query->fetch_array()){
  ?>

</div>
<?php

}

?>
