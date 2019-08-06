<?php session_start();
          if(isset($_POST['remember'])){
              setcookie("username",$username);
          }
          ?> 
<?php
$con= mysql_connect("localhost", "root","");
      if($con!=TRUE){
      echo "Error1: ".mysql_error()."<br>"; 
      }
      mysql_select_db("phishingtool");
if(isset($_POST['update']))
{


$email = $_POST['email'];
$password = $_POST['pass'];
$en_cr=sha1($password);

$sql = "UPDATE users SET email = '".$email."' , Password = '".$en_cr."' WHERE Username = '".$_SESSION['username']."'";

$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}

echo "<script>alert(\"Information Updated Successfully\")</script><br>";
header("refresh:0;url=homepage.php");

}


?>