<?php
    include_once 'include/dbh.inc.php';
    session_start();
?>

<html>
  <head>
    <title>Login - Find Job Sri Lanka</title>

    <link href="style/css/navbar.css" rel="stylesheet" />
    <link href="style/css/joinus/header.css" rel="stylesheet" />
    <link href="style/css/client/clientPost.css" rel="stylesheet" />

    <style>

    </style>

    <script language="javaScript" type="text/JavaScript">

      function validate(){

        var username = document.getElementById("username");
        var password = document.getElementById("password");


        if(username.value.trim() == "")
        {
            alert("Blank User Name");
            return false;
        }
        else if(password.value.trim() == "") {
          alert("Black Password")
          return false;
        }

        else{
            return true;
        }
      }

    </script>

  </head>

  <body>

    <?php
  include_once 'component/navbar.com.php';
    ?>


  <div>

  <form action="include/login.inc.php" method="POST"  id="myform" name="myform" >

    <label for="fname">Enter User ID</label>
    <input type="text"  name="username" id="username" placeholder="User Name.." autocomplete="off">

    <label for="lname">Enter Password</label>
    <input type="text"  name="password" id="password" placeholder="Password.." autocomplete="off">



    <button class="btnSubmit" type="submit" value="submit" name="submit" onclick="return validate();" >Login</button>

  </form>
</div>

  </body>
</html>
