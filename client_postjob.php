<?php
    include_once 'include/dbh.inc.php';
?>


<html>
  <head>
    <title>Post Job - Find Job Sri Lanka</title>

    <link href="style/css/client/navbar.css" rel="stylesheet" />
    <link href="style/css/client/clientPost.css" rel="stylesheet" />
    <link href="style/css/joinus/joinusform.css" rel="stylesheet" />

    <style>

    </style>

    <script language="javaScript" type="text/JavaScript">

      function validate(){

        var jobtitle = document.getElementById("jobtitle");
        var description = document.getElementById("description");
        var opendate = document.getElementById("opendate");
        var closedate = document.getElementById("closedate");
        var category = document.getElementById("category");
        var location = document.getElementById("location");

        if(jobtitle.value.trim() == "")
        {
            alert("Blank Job Title");
            return false;
        }
        else if(description.value.trim() == "") {
          alert("Black Description")
          return false;
        }
        else if(opendate.value.trim() == "") {
          alert("Black Open Date")
          return false;
        }
        else if(closedate.value.trim() == "") {
          alert("Black Close Date")
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



    </script>

  </head>

  <body>
    <?php
      if(isset($_SESSION['c_uname'])){
        echo '<form action="include/cilent_logout.inc.php" method="POST">

        <button type="submit" name="submit">Log Out</button>
        </form>';
      }
     ?>
    <?php
  include_once 'component/client_navbar.com.php';
    ?>


  <div>

  <form action="include/jobrequrest.inc.php" method="POST" >

    <label for="fname">Enter Job Title</label>
    <input type="text" name="jobtitle" id="jobtitle" placeholder="Job Title.." autocomplete="off">

    <label for="lname">Enter Description</label>
    <input type="text" name="description" id="description" placeholder="Description.." autocomplete="off">

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

    <label for="fname">Enter Open Date (2020-03-24)</label>
    <input type="text" name="opendate" id="opendate" placeholder="Open Date.." autocomplete="off">

    <label for="lname">Enter Close Date (2020-03-24)</label>
    <input type="text"  name="closedate" id="closedate" placeholder="Close Date.." autocomplete="off">


    <button class="btnSubmit" type="submit" value="submit" name="submit" onclick="return validate();" style="margin-left:20%;" >Submint</button>

  </form>
</div>


  </body>
</html>
