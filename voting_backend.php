

<?php
session_start();
if(isset($_POST['remember'])){
    setcookie('username',$username);
}
$con= mysql_connect("localhost", "root","");
   
   if($con!=TRUE){
       echo "Error1: ".mysql_error()."<br>"; 
   }
   mysql_select_db("phishingtool");

$id=$_GET['ID'];


   
        
 $query= ( "UPDATE voting_data SET Vote_count_yes = Vote_count_yes + 1  WHERE ID = '$id'" );
 
  

$result=mysql_query($query);

   
   if($result!=true){
       echo "Error2: ".mysql_error()."<br>"; 
   }
   else{
       echo "<script type='text/javascript'> alert('thank you adding! your request is under review.')</script>" ;
   header("refresh:0;url=phish_verify.php" );
   }
