 <?php session_start();
          if(isset($_POST['remember'])){
              setcookie("username",$username);
          }
          
          ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Verify Phishing Websites</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/main.css" />
  <style type="text/css">
  	body {
  		top: 0px;
	    background-image: linear-gradient(to top, rgba(19, 21, 25, 0.5), rgba(19, 21, 25, 0.5)), url("../../images/overlay.png");
	    background-size: auto, 256px 256px;
	    background-image: url("images/image3.jpg");
	    background-size: cover;
            background-repeat: no-repeat;
      background-attachment: fixed;
        }
        table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
</style>




</head> 

<body>
<div>

  <nav class="navbar navbar-inverse fixed-top">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="#"><a href="homepage.php">Home</a></li>
      <li class="#"><a href="add_phish.php">Report a Phish</a></li>
      <li class="#"><a href="phish_verify.php">Verify a Phish</a></li>
      <li class="active"><a href="phish_search.php">Phish Search</a></li>
      <li class="#"><a href="#" data-toggle="tooltip" data-placement="bottom" >About Us</a></li>
      
        <span class="caret"></span></a>
          
     </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
        
      <span class="caret"></span></a>
      		<ul class="dropdown-menu">
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="my_activity.php">My Activity</a></li>     
         
       </ul>
      </li>
      <li><a href="welcome_page.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
</div>
    <div class="table-responsive">
      <br>
      <div style="padding-left:140px;"><H3>My Submissions  </H3></div><br>
      <center>
     <table class="table table-bordered" id="form-color" style="width: 60%;" style="overflow-x:auto;">
<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
     die("Connection failed: " . mysql_error());
}
?>
            <thead>
            <tr>
                <th><center><?php echo 'ID'; ?></center></th>
                <th><center><?php echo 'Phish URL'; ?></center></th>
                <th><center><?php echo 'Category'; ?></center></th>
                
                
                
           </tr>
         </thead>
<?php



$sql = "SELECT ID,URL,Category FROM add_phish WHERE Username= '".$_SESSION['username']."'";
 mysql_select_db('phishingtool');
 $retval = mysql_query( $sql );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
}

elseif (mysql_num_rows($retval) > 0) {
     // output data of each row
     while($row = mysql_fetch_assoc($retval)) {
         //echo "Title--- " . $row["username"]. " --- Amount: " . $row["age"]. "--- Persons" . $row["gender"]. $row["problem"]. "--- Persons" .$row["symptom1"]. "--- Persons" .$row["duration"]. "--- Persons" .$row["doctor_report"]. "--- Persons" ."<br>";
   ?>
    <tbody id="myTable">
        <tr>
            <td><center><?php echo $row["ID"]; ?></a></center></td>
              <td><center><?php echo $row["URL"]; ?></center></td>
              
              <td><center><?php echo $row["Category"]; ?></center></td>
              
     
              
            </tr>
            
    </tbody>

    
    
  <?php

     }
} else {
     echo "No Phishing URL submitted!";
}



mysql_close($conn);



?>  
  </table></center>
</div>


</body>
</html>
