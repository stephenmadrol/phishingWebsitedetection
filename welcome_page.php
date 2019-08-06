<!DOCTYPE HTML>

<html>
	<head>
		<title>Welcome to Phish Bank</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
                <link rel="stylesheet" href="welcome_page.css" />
                
                
                
		
<!-- css for modal-->
<style>
    
body {font-family: Arial, Helvetica, sans-serif;}
#main{
background-image: url("background.jpg");}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;

}

/* Set a style for all buttons */
button {
    background-color: #f44336;
    color: white;
    padding: 1px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}



.container {
    padding: 16px;

}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #f44336;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>


	</head>
	<body class="landing">
            <div id="main">
<!-- login form-->
<div id="id01" class="modal" >
  
    <form class="modal-content animate" method="POST" action="login_backend.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

      <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required style="color:black;">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required style="color:black;">
        
      <button type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f44336">
      
        <span class="psw">Forgot <a href="forgot_pass.php">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!-- signup form-->

<div id="id02" class="modal">
  
    <form class="modal-content animate" method="post" action="signup_backend.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required style="color:black;">
       <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required style="color:black;">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required style="color:black;">
        
      <button type="submit">Sign Up</button>
     
    </div>

  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
	<header id="header" class="alt">
        <h1><a href="welcome_page.php">Phish Bank</a></h1>
	<nav id="nav">
	<ul>
	<li class="special">
	<a href="#menu" class="menuToggle"><span>Menu</span></a>
	<div id="menu">
	<ul>
	<li><a href="index.html">Home</a></li>
        <li><a href="#one">Who we are</a></li>
	<li><a href="#three">Benefits</a></li>
	<li><a href="#four">Contact Us</a></li>
	<li><a href="#">Log In</a></li>
	</ul>
	</div>
	</li>
	</ul>
	</nav>
	</header>

	<!-- Banner -->
	<section id="banner">
	<div class="inner">
	<h2>Phish Bank</h2>
	<p>Identify Phishing Websites with<br />
	Our Open Source Tool<br />
	</p>
	<ul class="actions">
	<li><button onclick="document.getElementById('id01').style.display='block'" class="button special">Login</button></li>
	<li><button onclick="document.getElementById('id02').style.display='block'" class="button special">Sign Up</button></li>
	</ul>
	</div>
            <a href="#one" class="more scrolly">Learn More</a>
	</section>
        </div>

<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>
      </div>
            
   <!-- One -->
       <section id="one" class="wrapper style1 special" style="background-color:#f6f6f6;">
	<div class="inner">
	<header class="major">
         <h2 style="color:black;">Who we are<br/>
	</h2>
        <p style="color:#666;"> Phishbank is all about identifying phishing websites.<br> Phishbank is the world's first digital platform to identify the phsihing webistes with just one click. <br> Our platform can be used for search phishing websites.</p>
	</header>
	<ul class="icons major">
	<li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
	<li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
	<li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
	</ul>
	</div>
	</section>
            
   <!-- two-->
       <section id="three" class="wrapper style3 special" style="background-color:white;">
    <div class="inner">
	<header class="major">
       <h2 style="color:black;">Benefits</h2>
	</header>
	<ul class="features">
          <li class="icon fa-headphones">
	<h3 style="color:black;">Identify URL Instantly</h3>
	<p style="color:#666;">Our automated url verification tool provides an instant Prediction based on Data Analytics. </p>
	</li>
	<li class="icon fa-paper-plane-o">
         <h3 style="color:black;">Search Phishing</h3>
	<p style="color:#666;">Search phishing websites in our largest database at anytime with just one click.</p>
	</li>
	<li class="icon fa-laptop">
	<h3 style="color:black;">Report Phishing</h3>
	<p style="color:#666;">Contribute to our community and improve our services.</p>
	</li>
	<li class="icon fa-code">
	<h3 style="color:black;">Verification</h3>
	<p style="color:#666">we always keep our phishing list up to date. you can verify the phishing websites and help others through our platform.</p>
	</li>
	</ul>
	</div>
	</section>
    <!-- three-->
        <section id="four" class="wrapper style1 special" style="background-color:#f6f6f6;">
	<div class="inner">
	<header class="major">
         <h2 style="color:black;">Contact Us<br/>
	</h2>
         <p style="color:#666;"> write us on: phishbank@gmail.com<br> Contact Us: +91 999000777 <br><i class="fa fa-map-marker"></i>We are located in Karunya University</p>
	</header>
	</div>
	</section>
        <footer id="footer">
	<ul class="icons">
	<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
	<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
	<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
	<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
	<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
	</ul>
	<ul class="copyright">
	<li>&copy; All rights reserved</li><li>Made with love for safe internet</li>
	</ul>
	</footer>
	</body>
</html>