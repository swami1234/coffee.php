<?php

require 'url.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['username'] == 'dave' && $_POST['password'] == 'secret') {

        session_regenerate_id(true);

        $_SESSION['is_logged_in'] = true;

        header("Location: list.php");

    } else {

        $error = "login incorrect";

    }
}

?>

<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #6a5acd;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
  <?php require 'header.php'; ?>



  <?php if (! empty($error)) : ?>
      <p><?= $error ?></p>
  <?php endif; ?>







<h2>Login here.....</h2>
<p>Staff can login with username and password</p>

<div class="container">
  <form method="post">
  <div class="row">
    <div class="col-25">
      <label for="username">Username</label>
    </div>
    <div class="col-75">
      <input type="text" id="username" name="username" placeholder="Your username..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="password">Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="password" name="password" placeholder="Your password..">
    </div>
  </div>


  <div class="row">
    <input type="submit" value="Login">
  </div>
  </form>
</div>

</body>
</html>
