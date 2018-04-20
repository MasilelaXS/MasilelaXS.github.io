<?php 

use PHPMailer\PHPMailer\PHPMailer;
include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";
include_once "PHPMailer/SMTP.php";

$name= $_POST['name'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$email= $_POST['email'];

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "xsmasilela@gmail.com";
$mail->Password = "Steve102";
$mail->SetFrom($email);
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AddAddress("djbeeftronix@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }


?>