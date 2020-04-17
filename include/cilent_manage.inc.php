<?php

    $mysqli = new mysqli('localhost', 'root', '', 'jobdb') or die(mysqli_error($mysqli));


    if(isset($_GET['delete'])){
      $ID = $_GET['delete'];
      $mysqli-> query("DELETE FROM .tbjobpost WHERE ID=$ID") or die($mysqli->error);

      $_SESSION['message'] = "Record has been deleted!";
      $_SESSION['msg_type'] = "danger";

      header("location: ../client_manage.php");

    }

    if(isset($_POST['submit'])){

      $id =  $_POST['id'];
      $uname =  $_POST['username'];
      $cname = $_POST['comname'];
      $location =  $_POST['location'];
      $category =  $_POST['category'];
      $mobile =  $_POST['mobile'];
      $email =  $_POST['email'];
      $password =  $_POST['password'];


      $mysqli-> query("UPDATE jobdb.tblclient SET username='$uname', company='$cname', location='$location',category='$category',mobile='$mobile', email='$email', password='$password' WHERE ID = '$id'") or die($mysqli->error());

    $_SESSION['message'] = "Record has been Updated!";
    $_SESSION['msg_type'] = "warning";

    header("location: ../client_profile.php");
}
?>
