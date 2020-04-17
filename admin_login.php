<html>
  <head>
    <title>Admin Login - Find Job Sri Lanka</title>

    <link href="style/css/navbar.css" rel="stylesheet" />
    <link href="style/css/client/clientPost.css" rel="stylesheet" />
    <link href="style/css/joinus/joinusform.css" rel="stylesheet" />

    <style>


    </style>

    <script language="javaScript" type="text/JavaScript">

      function validate(){

        var adminid = document.getElementById("adminid");
        var password = document.getElementById("password");


        if(adminid.value.trim() == "")
        {
            alert("Blank Admin ID");
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

  <form action="include/admin_login.inc.php" method="POST">

    <label for="fname">Enter Admin ID</label>
    <input type="text" id="adminid" name="adminid" placeholder="Admin ID.." autocomplete="off">

    <label for="lname">Enter Password</label>
    <input type="password" id="password" name="password" placeholder="Password.."  autocomplete="off">



  <button class="btnSubmit" type="submit" value="submit" name="submit" onclick="return validate();" style="margin-left:20%;" >Login</button>

  </form>
</div>


  </body>
</html>
