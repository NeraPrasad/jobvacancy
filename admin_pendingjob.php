<?php
    include_once 'include/dbh.inc.php';
?>


<html>
  <head>
    <title>Admin Pending Job - Find Job Sri Lanka</title>

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
    <?php require_once "include/admin_pendingjob.inc.php"; ?>

    <h1>Pending Job</h1>



<form action="include/admin_pendingjob.inc.php">

  <?php
    $mysqli = new mysqli('localhost', 'root', '', 'jobdb') or die(mysqli_error($mysqli));
    $result = $mysqli-> query("SELECT * FROM tbjobpost") or die($mysqli->error);
  ?>

  <div class="mtable">
      <table >
        <thead>
        <tr>
          <th>Job Title</th>
          <th>Description</th>
          <th>Category</th>
          <th>Location</th>
          <th>Company</th>
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
          <td><?php echo $row['company']; ?></td>
          <td><?php echo $row['opendate']; ?></td>
          <td><?php echo $row['closedate']; ?></td>

          <td>
            <a href="include/admin_pendingjob.inc.php?delete=<?php echo $row['ID']; ?>" name="delete" id="btn" onclick="return validate();">Delete</a>
          </td>

        </tr>
        <?php  endwhile; ?>



      </thead>
      </table>

</div>

</form>

  </body>
</html>
