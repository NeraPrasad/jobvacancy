<?php

    $mysqli = new mysqli('localhost', 'root', '', 'jobdb') or die(mysqli_error($mysqli));


    if(isset($_GET['delete'])){
      $ID = $_GET['delete'];
      $mysqli-> query("DELETE FROM .tblclient WHERE ID=$ID") or die($mysqli->error);

      $_SESSION['message'] = "Record has been deleted!";
      $_SESSION['msg_type'] = "danger";

      header("location: ../admin_clientmanage.php");

    }


?>
