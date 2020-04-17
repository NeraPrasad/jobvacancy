<?php session_start(); ?>

<ul class="navbar">
  <li><a href="#"><img src="Images/logo.png" /></a></li>
  <li><p class="active" style="color:#ffffff; margin-right:10px;"> <?php echo($_SESSION['a_name']); ?></p></li>


  <li class="right"><a href="index.php">Log Out</a></li>
  <li class="right"><a href="admin_clientmanage.php">Client Manage</a></li>
  <li class="right"><a href="admin_pendingjob.php">Pending Job</a></li>
  <li class="right"><a href="admin_approvejob.php">Approve Job</a></li>
  <li class="right"><a href="admin_postjob.php">Post Job</a></li>
  <li class="right"><a class="active" href="admin_dashboard.php">Dashboard</a></li>


</ul>
