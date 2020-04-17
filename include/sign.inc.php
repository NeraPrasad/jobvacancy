<?php

  if(isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $uname = mysqli_real_escape_string($conn , $_POST['username']);
    $cname = mysqli_real_escape_string($conn, $_POST['comname']);
    $location = mysqli_real_escape_string($conn , $_POST['location']);
    $category = mysqli_real_escape_string($conn , $_POST['category']);
    $mobile = mysqli_real_escape_string($conn , $_POST['mobile']);
    $email = mysqli_real_escape_string($conn , $_POST['email']);
    $password = mysqli_real_escape_string($conn , $_POST['password']);

    $sql = "INSERT INTO jobdb.tblclient(username, company, category, location, mobile, email, password) VALUES ('$uname','$cname','$location','$category','$mobile','$email','$password'); ";
    mysqli_query($conn, $sql);
    header("Location: ../joinus.php?signup=success");
    exit();
  }


 ?>
