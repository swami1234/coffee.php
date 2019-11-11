<?php

include('auth.php');
session_start();
?>
<style>
b {

  color: #6a5acd;
}

</style>
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand text-center" id=bbb href="index.php"><b>Welcome to Martha's Brew Coffee Stand-Online Order</b></a>

    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


        <!DOCTYPE html>
        <html>
        <head>
        <style>
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
        }

        li {
          float: left;
        }

        li a {
          display: block;
          color: white;
          text-align: center;
          padding: 18px 16px;
          text-decoration: none;
        }

        li a:hover:not(.active) {
          background-color: #111;
        }

        .active {
          background-color: #6a5acd;
        }
        </style>
        </head>
        <body>

        <ul>
          <li><a class="active" href="index.php">Menu</a></li>
          <?php if (isLoggedIn()): ?>
          <li><p><a href="logout.php">Log out</a></p></li>
  				<li><p><a href="list.php">List of Orders</a></p></li>
          <li><p><a href="orderstatus.php">Order Started</a></p></li>
          <li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Area <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="product.php">Products</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="category.php">Category</a></li>
                </ul>
              </li>
          <?php else: ?>
          <li><a href="login.php">Log in</a></li>
          <?php endif; ?>

          <li><a href="contact.php">Contact</a></li>
          <li><a href="about.php">About</a></li>
        </ul>

        </body>
        </html>




    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
    </ul>
</nav>
