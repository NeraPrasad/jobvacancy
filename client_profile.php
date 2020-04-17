<?php
    include_once 'include/dbh.inc.php';
?>


<html>
  <head>
    <title>Profile - Find Job Sri Lanka</title>

    <link href="style/css/client/navbar.css" rel="stylesheet" />
    <link href="style/css/client/clientPost.css" rel="stylesheet" />


    <style>


    h1{
      text-align: center;
    }

    /* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #fff;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 500px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
  float: left;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

    </style>
  </head>

  <body style="background-color::#d2d4d6;">


    <?php
  include_once 'component/client_navbar.com.php';
    ?>
<h1>Profile</h1>

  <div>

    <form  style="margin-left:25%; margin-right:25%; margin-top:5%; border: 1px solid #dddddd;">

      <p >User Name     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo($_SESSION['c_uname']); ?> </p>

      <br />
      <p >Company Name  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo($_SESSION['c_company']); ?> </p>

      <br />
      <p >Location      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo($_SESSION['c_location']); ?> </p>

      <br />
      <p >Category      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo($_SESSION['c_category']); ?> </p>

      <br />
      <p >Mobile        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo($_SESSION['c_mobile']); ?> </p>

      <br />
      <p >Email         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo($_SESSION['c_email']); ?> </p>

      <br />
      <p >Password      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo($_SESSION['c_password']); ?> </p>

    </form>

    <button class="open-button" name="edit" onclick="openForm()">Edit Profile</button>

<div class="form-popup" id="myForm">

  <form action="include/cilent_manage.inc.php" method="POST" class="form-container">

    <p id="id" name="id" value=" <?php echo($_SESSION['c_id']); ?> "></p>
    <input type="text" id="username" name="username" value=" <?php echo($_SESSION['c_uname']); ?> " placeholder="User Name..">


    <input type="text" id="comname" value="<?php echo($_SESSION['c_company']); ?>" name="comname" placeholder="Company Name..">


    <select id="category" name="category" >
      <option value="technology">Technology</option>
      <option value="banking">Banking</option>
      <option value="security">Security</option>
      <option value="teaching">Teaching</option>
      <option value="goverment">Goverment</option>
      <option value="agri">Agri</option>
    </select>


    <select id="location" name="location">
      <option value="1">Anuradhapura</option>
      <option value="2">Gampaha</option>
      <option value="3">Colombo</option>
      <option value="4">Trinco</option>
      <option value="5">Badulla</option>
      <option value="6">Mathara</option>
    </select>


    <input type="text" id="mobile" name="mobile" value="<?php echo($_SESSION['c_mobile']); ?>" placeholder="Mobile Number..">


    <input type="text" id="email" name="email" value="<?php echo($_SESSION['c_email']); ?>" placeholder="Email..">


    <input type="text" id="password" name="password" value="<?php echo($_SESSION['c_password']); ?>" placeholder="Password..">


    <button type="submit" name="submit" class="btn">Update</button>

    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>

  </form>
</div>

</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
  </body>
</html>
