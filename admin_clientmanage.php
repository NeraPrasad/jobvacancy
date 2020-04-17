<?php
    include_once 'include/dbh.inc.php';
?>


<html>
  <head>
    <title>Client Manage - Find Job Sri Lanka</title>

    <link href="style/css/admin/navbar.css" rel="stylesheet" />
    <link href="style/css/client/clientPost.css" rel="stylesheet" />
    <link href="style/css/joinus/joinusform.css" rel="stylesheet" />

    <link href="style/css/admin/adminmanage.css" rel="stylesheet" />

    <style>



    </style>
  </head>

  <body>


    <?php
      include_once 'component/admin_navbar.com.php';
    ?>
    <?php require_once "include/admin_clientmanage.inc.php"; ?>

    <h1>Client Manage</h1>



<form action="include/admin_clientmanage.inc.php">

  <?php
    $mysqli = new mysqli('localhost', 'root', '', 'jobdb') or die(mysqli_error($mysqli));
    $result = $mysqli-> query("SELECT * FROM tblclient") or die($mysqli->error);
  ?>

  <div class="mtable">
      <table >
        <thead>
        <tr>
          <th>User Name</th>
          <th>Company</th>
          <th>Category</th>
          <th>Location</th>
          <th>Mobile</th>
          <th>Email</th>
          <th>Password</th>
          <th>Action</th>
        </tr>

        <?php
          while($row = $result->fetch_assoc()): ?>

        <tr>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['company']; ?></td>
          <td><?php echo $row['category']; ?></td>
          <td><?php echo $row['location']; ?></td>
          <td><?php echo $row['mobile']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td>
            <a href="include/admin_clientmanage.inc.php?delete=<?php echo $row['ID']; ?>" name="delete" id="btn" onclick="return validate();">Delete</a>
          </td>

        </tr>
        <?php  endwhile; ?>



      </thead>
      </table>

</div>

</form>

  </body>
</html>
