<?php
    include_once 'include/dbh.inc.php';
?>


<html>
  <head>
    <title>Manage Post - Find Job Sri Lanka</title>

    <link href="style/css/client/navbar.css" rel="stylesheet" />
    <link href="style/css/client/clientPost.css" rel="stylesheet" />
    <link href="style/css/joinus/joinusform.css" rel="stylesheet" />

    <style>

    body{
      background-color::#d2d4d6
    }

    h1{
      text-align: center;
    }
    .mtable table{
      width: 80%;
      border-collapse: collapse;
      margin-left: 10%;
      margin-right: 10%;
    }

    .mtable table, th, td {
      border: 1px solid black;
    }

    .mtable  th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    .mtable #btn{
      background-color: red;
      color: #ffffff;
      text-decoration: none;
      padding: 8px;
      margin: 2px;
    }



    </style>
  </head>

  <body>


    <?php
      include_once 'component/client_navbar.com.php';
    ?>
    <?php require_once "include/cilent_manage.inc.php"; ?>

    <h1>Manage Post</h1>

    <h3 style="margin-left:20px;">Pending Post</h3>
    <hr />



<form action="include/cilent_manage.inc.php">

  <?php
    $company =  $_SESSION['c_company'];

    $mysqli = new mysqli('localhost', 'root', '', 'jobdb') or die(mysqli_error($mysqli));
    $result = $mysqli-> query("SELECT * FROM tbjobpost WHERE company = '$company' ") or die($mysqli->error);
  ?>

  <div class="mtable">
      <table >
        <thead>
        <tr>
          <th>Job Title</th>
          <th>Description</th>
          <th>Category</th>
          <th>Location</th>
          <th>Open Date</th>
          <th>Close Date</th>
          <th>Action</th>
        </tr>

        <?php
          while($row = $result->fetch_assoc()): ?>

        <tr>
          <td><?php echo $row['title']; ?></td>
          <td><?php echo $row['description']; ?></td>
          <td><?php echo $row['category']; ?></td>
          <td><?php echo $row['location']; ?></td>
          <td><?php echo $row['opendate']; ?></td>
          <td><?php echo $row['closedate']; ?></td>

          <td>
            <a href="include/cilent_manage.inc.php?delete=<?php echo $row['ID']; ?>" name="delete" id="btn" onclick="return validate();">Delete</a>
          </td>

        </tr>
        <?php  endwhile; ?>



      </thead>
      </table>

</div>

</form>



<h3 style="margin-left:20px; margin-top:20px;">Approve Post</h3>
<hr />

<form action="include/cilent_manage.inc.php">

  <?php
    $company =  $_SESSION['c_company'];
    $mysqli = new mysqli('localhost', 'root', '', 'jobdb') or die(mysqli_error($mysqli));
    $result = $mysqli-> query("SELECT * FROM tbadminjobpost WHERE company = '$company' ") or die($mysqli->error);
  ?>

  <div class="mtable">
      <table >
        <thead>
        <tr>
          <th>Job Title</th>
          <th>Description</th>
          <th>Category</th>
          <th>Location</th>
          <th>Open Date</th>
          <th>Close Date</th>
          <th>Action</th>
        </tr>

        <?php
          while($row = $result->fetch_assoc()): ?>

        <tr>
          <td><?php echo $row['title']; ?></td>
          <td><?php echo $row['description']; ?></td>
          <td><?php echo $row['category']; ?></td>
          <td><?php echo $row['location']; ?></td>
          <td><?php echo $row['opendate']; ?></td>
          <td><?php echo $row['closedate']; ?></td>

          <td>
            <a href="include/cilent_manage.inc.php?delete=<?php echo $row['ID']; ?>" name="delete" id="btn" onclick="return validate();">Delete</a>
          </td>

        </tr>
        <?php  endwhile; ?>



      </thead>
      </table>

</div>

</form>

  </body>
</html>
