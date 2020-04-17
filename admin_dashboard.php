<?php
    include_once 'include/dbh.inc.php';
?>


<html>
  <head>
    <title>Admin Dashboard - Find Job Sri Lanka</title>

    <link href="style/css/admin/navbar.css" rel="stylesheet" />
    <link href="style/css/client/clientPost.css" rel="stylesheet" />
    <link href="style/css/joinus/joinusform.css" rel="stylesheet" />

    <link href="style/css/admin/adminmanage.css" rel="stylesheet" />

    <style>

    .abox1{
      width: 15%;
      height: 15%;
      border: 1px solid black;
      float: left;
      margin-left: 5%;
    }
    .abox1 h1 h3{

    }

    </style>
  </head>

  <body>

    <?php  include_once 'component/admin_navbar.com.php';  ?>


    <h1 style="text-align:center;">Admin Dashboard</h1>


    <?php
      $mysqli = new mysqli('localhost', 'root', '', 'jobdb') or die(mysqli_error($mysqli));
      $result = $mysqli-> query("SELECT count( 'ID') FROM tbadminjobpost") or die($mysqli->error);
    ?>


<form action="include/cilent_manage.inc.php">

  <div class="abox1">
    <h3 style="text-align: center;">Total Vacancy</h3>
    <h1 style="text-align: center;">225</h1>
  </div>

  <div class="abox1">
    <h3 style="text-align: center;">Total Pending</h3>
    <h1 style="text-align: center;">500</h1>
  </div>

  <div class="abox1">
    <h3 style="text-align: center;">Total Client</h3>
    <h1 style="text-align: center;">500</h1>
  </div>

  <div class="abox1">
    <h3 style="text-align: center;">Total Request</h3>
    <h1 style="text-align: center;">500</h1>
  </div>

</form>

  </body>
</html>
