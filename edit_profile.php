<?php session_start();
          if(isset($_POST['remember'])){
              setcookie("username",$username);
          }
          ?> 

<head>
        
       
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="add_phish.css">
<link rel="stylesheet" href="edit_profile.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    </head>
    
        
    <center><h3>Please Fill the Details </h3></center>
    
<div class="container">
    
    <form  method="post" action="edit_profile_backend.php">
    <label for="fname">Username</label><br>
    <input type="text" id="fname" name="username" required="" placeholder='<?php echo $_SESSION['username']; ?>' disabled="disabled"><br>
<label for="fname"> New Email:</label><br>
<input type="text" id="fname" name="email" placeholder="abc@email.com" required=""><br>
<label for="fname">New Password</label><br>
<input type="password" id="fname" name="pass" placeholder="password" required=""><br>

<input name="update" type="submit" value="Update">


    </form>
    <a href="homepage.php"><input type="submit" value="Back"></a>
    
</div>
    <div><center> <p><span id="status"></span></p> </center></div>
        
        
    


    
    
