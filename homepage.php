<?php session_start();
          if(isset($_POST['remember'])){
              setcookie("username",$username);
          }
          
         
          ?> 
<html>
<title>Phish Detection</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
   <link rel="stylesheet" type="text/css" href="welcome_page.css">
  <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="w3css.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body onload="typeWriter()">
    
<!-- Navbar -->
<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <ul class="nav navbar-nav" >
        <li class="active"><a href="homepage.php" style="text-decoration: none;">Home</a></li>
      <li class="#"><a href="add_phish.php">Report Phish</a></li>
      <li class="#"><a href="phish_verify.php">Verify Phish</a></li>
      <li class="#"><a href="phish_search.php">Phish Search</a></li>
      <li class="#"><a href="#">About Us</a></li>
      
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
      <a href="add_phish.php" class="w3-bar-item w3-button w3-padding-large">Report Phish</a>
      <a href="phish_verify.php" class="w3-bar-item w3-button w3-padding-large">Verify Phish</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Phish Search</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">About</a>
    <a href="login_page.php" class="w3-bar-item w3-button w3-padding-large">Login/SignUp</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
    
    <script type="text/javascript">
  
var i = 0;
var txt = 'Welcome to Phish Bank, <?php echo $_SESSION['username']; ?>';
var speed = 50;
function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, 90);
  }
}
</script>
    
  <h1 id="demo" class="w3-margin w3-jumbo"></h1>
  <div>
      <center><input type="text" id="myinput" placeholder="https://" size="50" height="60" name="search" required="" style="color: black;"></center>
  <button onclick="search()" class="wbutton black   w3-large w3-margin-top">Find Phish</button><br>
  
  <br><br><div><h1 style="color: white;"><p id="final" style="color: white;"></p></h1></div>

            <div >
                 <p style="color:#f44336;" id="leng"></p>
                <p style="color:#f44336;" id="lengthcheck"></p>
                <p style="color:#f44336;" id="atsym"></p>
                <p style="color:#f44336;" id="atcheck"></p>
                <p style="color:#f44336;" id="dotsym"></p>
                <p  style="color:#f44336;" id="dotcheck"></p>
                <p style="color:#f44336;" id = "four"></p>
                <p style="color:#f44336;" id="doubleslash"></p>
                <p style="color:#f44336;" id="ipadd"></p>
                <p style="color:#f44336;" id="domain"></p>
                <p style="color:#f44336;" id="prefix"></p></div>
                
            </div>
        </div>

        <!-- javascript logic for phishing-->

        <script type="text/javascript">
           function search() {
                var finalcount = 0;
                var string = document.getElementById("myinput").value;
                //length
                var stringlength = string.length;
                document.getElementById("leng").innerHTML = "length = " + stringlength;

                if (stringlength < 54) {
                    document.getElementById("lengthcheck").innerHTML = "less than 53";
                } else if (stringlength > 54 & stringlength < 75) {
                    document.getElementById("lengthcheck").innerHTML = "54 middle 75";
                } else {
                    document.getElementById("lengthcheck").innerHTML = "greater than 75";
                    finalcount++;
                }
                //atsym
                var atsymbol = string.match(/[@]/g);
                document.getElementById("atsym").innerHTML = "At@symbol= " + atsymbol;
                if (atsymbol === null) {
                    document.getElementById("atcheck").innerHTML = "'@'s found= " + atsymbol;
                } else {

                    document.getElementById("atcheck").innerHTML = "'@' symbol's found= " + atsymbol.length;
                    finalcount++;
                }
                //dotsym
                var dot = string.match(/[.]/g);
                document.getElementById("dotsym").innerHTML = "dot symbol= " + dot;

                if (dot === null) {
                    document.getElementById("dotcheck").innerHTML = "dots found= " + dot;
                } else {
                    document.getElementById("dotcheck").innerHTML = "'.'s found= " + dot.length;
                    if (dot.length > 4) {
                        finalcount++;
                    }
                }
                //double slash

                var twoslash = string.match(/(\/\/)/g);

                if (twoslash === null) {
                    document.getElementById("doubleslash").innerHTML = "no double slash" + twoslash;
                } else if (twoslash.length > 1) {
                    document.getElementById("doubleslash").innerHTML = "more than one double slash =" + twoslash.length;
                    finalcount++;
                } else {
                    document.getElementById("doubleslash").innerHTML = "one double slash";
                }
                //ip address
                var numberpattern = string.match(/\d/g);
                var stringlen = string.length - 3;
                if (numberpattern === null) {
                    document.getElementById("ipadd").innerHTML = "no ip add " + numberpattern;
                } else if (numberpattern.length === stringlen) {
                    document.getElementById("ipadd").innerHTML = "ip add";
                    finalcount++;
                } else {
                    document.getElementById("ipadd").innerHTML = "not ip";
                }

                //prefix
                var urlPattern = /^(?:https?:\/\/)?(?:w{3}\.)?([a-z\d\.-]+)\.(?:[a-z\.]{2,10})(?:[/\w\.-]*)*/;
                var domainpattern = string.match(urlPattern);
                var extractdomain = domainpattern[1]; //for domain
                var prefixpat = extractdomain.match(/[-]/g);
                document.getElementById("domain").innerHTML = "domain=" + extractdomain;
                if (prefixpat === null) {
                    document.getElementById("prefix").innerHTML = "prefix not found";
                } else {
                    document.getElementById("prefix").innerHTML = "prefix found";
                    finalcount++;
                }
                if (finalcount >= 1) {
                    document.getElementById("final").innerHTML = "PHISHING WEBSITE ";
                } else {
                    document.getElementById("final").innerHTML = "LEGITIMATE WEBSITE" ;
                }


            }
            ;


        </script>
  
  
</header>

<!-- First Grid -->

<!-- Second Grid -->


<!-- Footer -->

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