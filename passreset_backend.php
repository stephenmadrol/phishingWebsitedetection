 <?php
$con= mysql_connect("localhost", "root","");
      if($con!=TRUE){
      echo "Error1: ".mysql_error()."<br>"; 
      }
      mysql_select_db("phishingtool");


$email = $_POST['email'];
$password = $_POST['pass'];
$en_cr=sha1($password);

$sql = "UPDATE users SET Password = '".$en_cr."' WHERE email = '".$email."'";

$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}

echo "<script>alert(\"Password Reset Successful\")</script><br>";
header("refresh:0;url=welcome_page.php");




?>