<?php
//get data from form  
$name = $_POST['InputName'];
$email= $_POST['InputEmail'];
$subject= $_POST['InputSubject'];
$message= $_POST['InputMessage'];
$phone = $_POST['InputPhone'];
$to = "contact@manavs.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject = " . $subject . "\r\n  Phone = " . $phone .  "\r\n Message =" . $message;

$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:index.html");
?>