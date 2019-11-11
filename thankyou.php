<!DOCTYPE html>
<html>
<head>
	<p> THANK YOU FOR PLACING ORDER </p>

  <P> You can choose to pay now or return to menu by clicking here <li><a href="index.php">Return to Menu -- for instore payment</a></li>
  </br>
</br>
<p><h3> Enter your credit card details below to pay online:</h3> <p/>
</br>

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
  <p> Process the payment by clicking on pay now </P>
  <P><a href="sales.php">Pay Now</a></P>
</head>
