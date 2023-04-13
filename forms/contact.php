<?php

$name=$_POST['name'];
$email=$_POST['email'];
$moblie=$_POST['moblie'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$to = "sales@adyansolutions.com";
$subject = "Enquiry For Adyan Solutions";
$txt ="Client Name = ". $name . "\r\n  Client Email = " . $email . "\r\n Client Moblie =" . $moblie . "\r\n  Client Message =" . $message;
$headers = "From: noreply@adyansolutions.com" . "\r\n" .
"CC: bhanu.singh@adyansolutions.com";
"BCC: bablu.singh@adyansolutions.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
echo"OK";
//header("Location:thanks.php");

?>
