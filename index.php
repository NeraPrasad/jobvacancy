<html>
  <head>
    <title>Home - Find Job Sri Lanka</title>

    <link href="style/css/navbar.css" rel="stylesheet" />
    <link href="style/css/header.css" rel="stylesheet" />
    <link href="style/css/serachbar.css" rel="stylesheet" />
    <link href="style/css/jobbox.css" rel="stylesheet" />
    <style>

    .boxlistjob {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 70%;
      margin: auto;
      text-align: center;
      font-family: arial;
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



  <div class="hed">
    <header>

      <div class="box1">
        <a href="category_technology.php"><img src="Images/o3.png"  />
        <p>Technology</p></a>
      </div>

      <div class="box2">
        <a href="category_banking.php"><img src="Images/o1.png"  />
        <p>Banking</p></a>
      </div>

      <div class="box3">
        <a href="category_security.php"><img src="Images/o4.png"  />
        <p>Security</p></a>
      </div>

      <div class="box4">
        <a href="category_teaching.php"><img src="Images/o5.png"  />
        <p>Teaching</p></a>
      </div>

      <div class="box5">
        <a href="category_goverment.php"><img src="Images/o2.png"  />
        <p>Goverment</p></a>
      </div>

      <div class="box6">
        <a href="category_agri.php"><img src="Images/o1.png"  />
        <p>Agri</p></a>
      </div>

    </header>
  </div>



    <?php
      $mysqli = new mysqli('localhost', 'root', '', 'jobdb') or die(mysqli_error($mysqli));
      $result = $mysqli-> query("SELECT * FROM tbadminjobpost") or die($mysqli->error);
    ?>

    <?php
      while($row = $result->fetch_assoc()): ?>

    <div class="boxlistjob" >
      <h2><?php echo $row['title']; ?></h2>
      <p class="details">Job Ref No. - <?php echo $row['ID']; ?></p>
      <p class="details">Open Date - <?php echo $row['opendate']; ?></p>
      <p class="details">Close Date - <?php echo $row['closedate']; ?></p>
      <p class="details">Lacation -<?php echo $row['location']; ?></p>
      <p><?php echo $row['description']; ?></p>
      <p><button>Category - <?php echo $row['category']; ?></button></p>
    </div>

<?php  endwhile; ?>


  </body>
</html>
