<?php
session_start();

  if(isset($_POST['submit'])){
    
    include_once 'dbh.inc.php';

    $title = mysqli_real_escape_string($conn , $_POST['jobtitle']);
    $jobdesc = mysqli_real_escape_string($conn , $_POST['description']);
    $cate = mysqli_real_escape_string($conn , $_POST['category']);
    $loca = mysqli_real_escape_string($conn , $_POST['location']);
    $open = mysqli_real_escape_string($conn , $_POST['opendate']);
    $close = mysqli_real_escape_string($conn , $_POST['closedate']);

    $company =  $_SESSION['c_company'];

    $sql = "INSERT INTO jobdb.tbjobpost(title, description, category, location, opendate, closedate, company)  VALUES ('$title','$jobdesc','$cate','$loca','$open','$close','$company'); ";
    mysqli_query($conn,$sql);
    header("Location: ../client_postjob.php?postsent=success");
    exit();
  }


 ?>
