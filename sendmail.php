<?php
	$msg="";
	use PHPMailer\PHPMailer\PHPMailer;
	include_once "PHPMailer/PHPMailer.php";
	include_once "PHPMailer/Exception.php";
	include_once "PHPMailer/SMTP.php";
	
	if (isset($_POST['submit'])) {
		$name= $_POST['name'];
		$subject= $_POST['subject'];
		$message= $_POST['message'];
		$email= $_POST['email'];

		$mail = new PHPMailer();

		$mail->Host = "smtp.gmail.com";
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Username = "xsmasilela@gmail.com";
		$mail->Password = "Steve102";
		$mail->SMTPSecure = "ssl";
		$mail->Port = 465;

		$mail->addAddress(address: 'xsmasilela@gmail.com', $name);
		$mail->SetFrom($email);
		$mail->Subject=$subject;
		$mail->isHTML(isHtml: true);
		$mail->Body=$message;

		If ($mail->send())
			$msg="Message Successfully Sent. Thank You!";
			else
			$msg="Message not sent, Please try again!";
	}
?>