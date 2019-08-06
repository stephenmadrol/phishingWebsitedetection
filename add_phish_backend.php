<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 
 
 // Create connection
 $conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('phishingtool');
         
 if (!$conn) {
     die("Connection failed: " . mysql_error());
}

$URL    = $_POST['url'];
$username   = $_POST['username'];
$Category    = $_POST['cat'];
$Website_name = $_POST['website'];
$message = $_POST['message'];


$query   = "INSERT into add_phish (URL, Username, Category, Website_name, message) VALUES('" . $URL . "','" . $username . "','" . $Category . "','" . $Website_name . "','" . $message . "')";
$query1 = "INSERT into voting_data(URL, Category) VALUES ('".$URL."','".Category."')";
$success = mysql_query($query);
$success1= mysql_query($query1);
 
if ($success != TRUE) {
    die("Couldn't enter data: " . mysql_error());
} 
else {
    
    
    echo "<script type='text/javascript'> alert('thank you adding! your request is under review.')</script>";
    header("refresh:0;url=homepage.php");
     
}


 
$conn->close();
 
