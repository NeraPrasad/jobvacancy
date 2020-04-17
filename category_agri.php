<html>
  <head>
    <title>Technology - Find Job Sri Lanka</title>

    <link href="style/css/navbar.css" rel="stylesheet" />
    <link href="style/css/header.css" rel="stylesheet" />
    <link href="style/css/serachbar.css" rel="stylesheet" />
    <link href="style/css/jobbox.css" rel="stylesheet" />
    <style>

    .boxlistjob {
      box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.2);
      max-width: 70%;
      margin: auto;
      text-align: center;
      font-family: arial;
      margin-top: 2%;
    }

    .details {
      color: grey;
      font-size: 18px;
    }

    .boxlistjob button {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    .boxlistjob button:hover {
      opacity: 0.7;
    }


    </style>
  </head>

  <body>

    <?php
  include_once 'component/navbar.com.php';
    ?>




      <h1 style="text-align:center;">Category - Agri</h1>
      <hr />



    <?php
      $mysqli = new mysqli('localhost', 'root', '', 'jobdb') or die(mysqli_error($mysqli));
      $result = $mysqli-> query("SELECT * FROM tbadminjobpost WHERE category ='Agri' ") or die($mysqli->error);
    ?>

    <?php
      while($row = $result->fetch_assoc()): ?>

    <div class="boxlistjob" >
      <h2><?php echo $row['title']; ?></h2>
      <p class="details">Open Date - <?php echo $row['opendate']; ?></p>
      <p class="details">Close Date - <?php echo $row['closedate']; ?></p>
      <p class="details">Lacation -<?php echo $row['location']; ?></p>
      <p><?php echo $row['description']; ?></p>
      <p><button>Category - <?php echo $row['category']; ?></button></p>
    </div>

<?php  endwhile; ?>


  </body>
</html>
