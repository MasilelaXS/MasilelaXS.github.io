<?php
	$msg="";
	use PHPMailer\PHPMailer\PHPMailer;
	include_once "PHPMailer/PHPMailer.php";
	include_once "PHPMailer/Exception.php";
	
	if (isset($_POST['submit'])) {
		$name= $_POST['name'];
		$subject= $_POST['subject'];
		$message= $_POST['message'];

		$mail = new PHPMailer();
		$mail->addAddress(address:'xsmasilela@gmail.com');
		$mail->SetFrom($mail);
		$mail->Subject=$subject;
		$mail->isHTML(isHtml: true);
		$mail->Body=$message;

		If ($mail->send())
			$msg="Message Successfully Sent. Thank You!";
			else
			$msg="Message not sent, Please try again!";
	}
/**
 * This example shows making an SMTP connection with authentication.
 */
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require '../vendor/autoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Set the hostname of the mail server
$mail->Host = (&mail);
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'djbeeftronix@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'Steve102';
//Set who the message is to be sent from
$mail->setFrom($mail, $name );
//Set an alternative reply-to address
$mail->addReplyTo($mail, $name);
//Set who the message is to be sent to
$mail->addAddress(djbeeftronix@gmail.com, 'Masilela XS');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}