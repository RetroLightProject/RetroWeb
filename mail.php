<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "sh.ramadhani17@gmail.com";
$subject = "Retro Light";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n\ Phone=" .$phone. "\r\n Message =" . $message;

$headers = "From: harryramadhani17@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>