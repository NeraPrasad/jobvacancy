<?php session_start(); ?>

<ul class="navbar">
  <li><a href="#"><img src="Images/logo.png" /></a></li>
  <li><p class="active" style="color:#ffffff; margin-right:10px;"> <?php echo($_SESSION['c_company']); ?></p></li>


  <li class="right"><a href="index.php">Log Out</a></li>
  <li class="right"><a href="client_profile.php">Profile</a></li>
  <li class="right"><a href="client_manage.php">Manage</a></li>
  <li class="right"><a class="active" href="client_postjob.php">Post Job</a></li>


</ul>
