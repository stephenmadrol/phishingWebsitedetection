<?php

$con= mysql_connect("localhost", "root","");

if($con!=TRUE){
    echo "Error1: ".mysql_error()."<br>"; 
}
mysql_select_db("phishingtool");

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['pass'];


$en_pwd=  sha1($password);


$query="insert into users values ('".$username."','".$en_pwd."','".$email."')";
$result=mysql_query($query);

if($result!=true){
    echo "Error2: ".mysql_error()."<br>"; 
     echo "<script>alert(\"please sign Up to Continue\")</script><br>";
}
else{
    require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'phishbank@gmail.com';          // SMTP username
$mail->Password = 'phishphish'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('phishbank@gmail.com', 'Phish Bank');
$mail->addReplyTo('phishbank@gmail.com', 'Phish Bank');
$mail->addAddress($email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Thanks for signing up! '.$username.'</h1> <br>Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.<br><br>
 
------------------------<BR>
Username: '.$username.'<br>
Password: '.$password.'<br>
------------------------<br><br>
 
Please click this link to activate your account:<br>
http://localhost/phishingTool_dummy/welcome_page.php?email='.$email.'<br>

<h4>Regards <br> Team Phishbank.com</h4>';
$bodyContent .= '';

$mail->Subject = 'Account Verfication';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<script>alert(\"Registration Successful.. Login to Continue\")</script><br>";
     header( "refresh:0;url=welcome_page.php");
	// visit our site www.studyofcs.com for more learning
}
}
    




?>