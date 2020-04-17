<?php
session_start();
  if(isset($_POST['submit'])){

    include 'dbh.inc.php';

    $uname = mysqli_real_escape_string ($conn , $_POST['username']);
    $password = mysqli_real_escape_string ($conn , $_POST['password']);

    $sql = "SELECT * FROM jobdb.tblclient WHERE username = '$uname' ";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck < 1 ){
      echo '<script type="text/javascript">alert("INFO: s");</script>';
            header("Location: ../client_login.php");

        }
        else{
            if($row = mysqli_fetch_assoc($result)){
                    $_SESSION['c_id'] = $row['ID'];
                    $_SESSION['c_uname'] = $row['username'];
                    $_SESSION['c_company'] = $row['company'];
                    $_SESSION['c_category'] = $row['category'];
                    $_SESSION['c_location'] = $row['location'];
                    $_SESSION['c_mobile'] = $row['mobile'];
                    $_SESSION['c_email'] = $row['email'];
                    $_SESSION['c_password'] = $row['password'];

                    header("Location: ../client_postjob.php?login=success");
                    exit();

                }
            }
  }


 ?>
