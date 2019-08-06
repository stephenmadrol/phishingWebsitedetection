<?php
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<!DOCTYPE html>
<html>
<title>PhishDetection</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="add_phish.css">
<link rel="stylesheet" href="w3css.css">
<link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="#"><a href="homepage.php">Home</a></li>
      <li class="active"><a href="add_phish.php">Report Phish</a></li>
      <li class="#"><a href="phish_verify.php">Verify Phish</a></li>
      <li class="#"><a href="phish_search.php">Phish Search</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
        
        <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="edit_profile.php">Edit Profile</a></li>
                <li><a href="my_activity.php">My Activity</a></li>
          
       </ul>
      </li>
      <li><a href="index.html"><span class="glyphicon glyphicon-bell"></span></a></li>
      <li><a href="welcome_page.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
</div>
    

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Report A Phish</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Verify A Phish</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Phish Search</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">About</a>
  </div>
</div>
<body>

<h3>Please Fill the Details</h3>

<div class="container">
    <form action="add_phish_backend.php" method="post">
    <label for="fname">Phish URL:</label><br>
    <input type="text" id="fname" name="url" placeholder="https://"><br>
<label for="fname">Username:</label><br>
<input type="text" id="fname" name="username" placeholder="abc@email.com"><br>
    <label for="country">Category of Website:</label><br>
    <div>
            <select class="selection-2" name="cat">
              <option>Select Category</option>
              <option>Banking</option>
              <option>eCommerce</option>
              <option>Crypto Currency</option>
              <option>Online Services</option>
                                                      
            </select>
          </div><br>

            <div>
                                <span>Organization or Website Name: </span><br>
                                <input type="text" placeholder="Website name" name="website">
                                </div>

    <label for="subject">Your message</label><br>
    <textarea id="subject" name="message" placeholder="Your Message here.." style="height:200px"></textarea>
<br><br>
    <input type="submit" value="Submit">
  </form>
</div>
  </div>


<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
