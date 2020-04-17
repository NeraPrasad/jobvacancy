<?php
    include_once 'include/dbh.inc.php';
?>
<html>
  <head>
    <title>Join Us - Find Job Sri Lanka</title>

    <link href="style/css/navbar.css" rel="stylesheet" />
    <link href="style/css/joinus/header.css" rel="stylesheet" />
    <link href="style/css/client/clientPost.css" rel="stylesheet" />


    <style>

    </style>

    <script language="javaScript" type="text/JavaScript">

      function validate(){

        var username = document.getElementById("username");
        var comname = document.getElementById("comname");
        var mobile = document.getElementById("mobile");
        var email = document.getElementById("email");
        var password = document.getElementById("password");
        var category = document.getElementById("category");
        var location = document.getElementById("location");

        if(username.value.trim() == "")
        {
            alert("Blank User Name");
            return false;
        }
        else if(comname.value.trim() == "") {
          alert("Black Company Name")
          return false;
        }
        else if(mobile.value.trim() == "") {
          alert("Black Mobile")
          return false;
        }
        else if(email.value.trim() == "") {
          alert("Black Email")
          return false;
        }
        else if(password.value.trim() == "") {
          alert("Black Password")
          return false;
        }
        else if(password.value.trim().length<8) {     // Password Text length Short
          alert("Password too Short (8-20)")
          return false;
        }
        else if(password.value.trim().length>20) {    // Password Text length Long
          alert("Password too Long (8-20)")
          return false;
        }
        else if( category.value == "-1" )
        {
          alert( "Please select Category!" );
          return false;
        }
        else if( location.value == "-1" )
        {
          alert( "Please select Location!" );
          return false;
        }
        else{
            return true;
        }
      }

      function isInputNumber(inputno) {  //Only Number validate
          var Numeric = /^[0-9]*$/i;
          if (!inputno.value.match(Numeric))
          {
            alert('Please input Numeric Value only');
          }
        }




    </script>

  </head>

  <body>

    <?php
  include_once 'component/navbar.com.php';
    ?>

  <div class="hed" >
    <header>

      <h1>Join With Us To Post Your Company</h1>

      <h1>Job Vacancy</h1>

      <a href="client_login.php" class="btnSubmit" style="margin-left:45%;">Log In</a>

    </header>
  </div>

    <div class="joinus">

      <div>

      <form action="include/sign.inc.php" method="POST" id="myform" name="myform" >

        <label for="fname">Enter User Name</label>
        <input type="text" id="username" name="username"  placeholder="User Name.." autocomplete="off">

        <label for="lname">Enter Company Name</label>
        <input type="text" id="comname" name="comname"placeholder="Company Name.." autocomplete="off">

        <label for="country">Select Job Category</label>
        <select id="category" name="category" >
          <option value="-1">- select category -</option>
          <option value="Technology">Technology</option>
          <option value="Banking">Banking</option>
          <option value="Security">Security</option>
          <option value="Teaching">Teaching</option>
          <option value="Goverment">Goverment</option>
          <option value="Agri">Agri</option>
        </select>

        <label for="country">Select Location</label>
        <select id="location" name="location" >
          <option value="-1">- select location -</option>
          <option value="Anuradhapura">Anuradhapura</option>
          <option value="Gampaha">Gampaha</option>
          <option value="Colombo">Colombo</option>
          <option value="Trinco">Trinco</option>
          <option value="Badulla">Badulla</option>
          <option value="Mathara">Mathara</option>
        </select>

        <label for="fname">Enter Mobile Number</label>
        <input type="text" id="mobile" name="mobile"  onkeyup="isInputNumber(this)" placeholder="Mobile Number.." autocomplete="off">

        <label for="fname">Enter Email</label>
        <input type="text" id="email" name="email"  placeholder="Email.." autocomplete="off">

        <label for="fname">Enter Password</label>
        <input type="text" id="password" name="password"  placeholder="Password.." autocomplete="off">

        <button class="btnSubmit" type="submit" value="submit" name="submit" onclick="return validate();" >Submint</button>

      </form>
    </div>
</div>

  </body>
</html>
