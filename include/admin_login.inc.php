<?php
session_start();
  if(isset($_POST['submit'])){

    include 'dbh.inc.php';

    $adminid = mysqli_real_escape_string ($conn , $_POST['adminid']);
    $adminpass = mysqli_real_escape_string ($conn , $_POST['adminpass']);

    $sql = "SELECT * FROM jobdb.tbladmin WHERE adminid = '$adminid' ";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck < 1 ){

          echo '<script type="text/javascript">alert("INFO: s");</script>';
          header("Location: ../admin_login.php");
        }
        else{
            if($row = mysqli_fetch_assoc($result)){
                    $_SESSION['a_id'] = $row['ID'];
                    $_SESSION['a_name'] = $row['adminid'];
                    $_SESSION['a_password'] = $row['adminpass'];

                    header("Location: ../admin_dashboard.php?login=success");
                    exit();

                }
            }
  }


 ?>
ID, , adminpass
