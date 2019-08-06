<link rel="stylesheet" href="welcome_page.css">


<?php


 $con= mysql_connect("localhost", "root","");
      if($con!=TRUE){
      echo "Error1: ".mysql_error()."<br>"; 
      }
      mysql_select_db("phishingtool");
      if(isset($_COOKIE['username'])){
      $username=$_COOKIE['username'];
      $query="select * from users where Username='".$username."'";
      }
      else{
      $username=$_POST['username'];
      $password=$_POST['pass'];
      $en_cr=sha1($password);
      $query="select * from users where Username='".$username."' and Password='".$en_cr."'";    
      }
      $result=mysql_query($query);
      if($result!=true){
      echo "Error2: ".mysql_error()."<br>"; 
      }
      $records=  mysql_num_rows($result);
      if($records!=0){
         // $rec=mysql_fetch_row($result);
         session_start();
          if(isset($_POST['remember'])){
              setcookie("username",$username);
          }
          
         header( "refresh:3;url=homepage.php" );
         $_SESSION['username']=$username;
      } 
      else{
          
          echo "<script>alert(\"Invalid Username or Password\")</script><br>";
          header('refresh:0;url=welcome_page.php');
        }
?>  

<html>
    <body style="background-color:white;">
    <div id="loading">
        <center><br><br><br>
            <h1 style="color: black;">WELCOME <?php echo $username ?></h1>
            <h2 style="color: black;">Please wait while we redirectly to your Account</h2>
            <image src="images/giphy.gif">
        </center>
    </body>
    </div>
    
</html>