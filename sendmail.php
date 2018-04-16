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
?>