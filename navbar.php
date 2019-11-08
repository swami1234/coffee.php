<?php

include('auth.php');
session_start();
?>
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
      <a class="navbar-brand" href="index.php"><b>Welcome to Martha's Brew Coffee Stand-Online Order</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Menu</a></li>
           <?php if (isLoggedIn()): ?>
           <li><p><a href="logout.php">Log out</a></p></li>
				 </br>
					 <li><p><a href="list.php">List of Orders</a></p></li>

					<?php else: ?>

					 <li><p><a href="login.php">Log in</a></p></li>
				 </br>
           <li><a href="sales.php">Sales</a></li>
		 			<?php endif; ?>



    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>
