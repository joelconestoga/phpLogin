<?php

	function sendEmailToAdmin($email, $id) {

		date_default_timezone_set('Etc/UTC');

		require '../phpmailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;
		$mail->isSMTP();

		$mail->SMTPDebug = 0;
		$mail->Debugoutput = 'html';
		$mail->Host = 'smtp.gmail.com';

		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;

		$mail->Username = "phplab.webmaster@gmail.com";
		$mail->Password = "anilmehta";

		$mail->setFrom('phplab.webmaster@gmail.com', 'Website');
		$mail->addAddress('phplab.webmaster@gmail.com', 'Admin');
		$mail->Subject = 'Registration Request for '.$email;
		
		$mail->msgHTML(file_get_contents('../content.html'), true);
		$mail->AddEmbeddedImage('../img/accept.png', 'btn_ok');								
		$mail->AddEmbeddedImage('../img/reject.png', 'btn_no');								

		$mail->Body = "New registration requested for ".$email.
					  "<br><hr>".
					  "<a href='http://localhost/phpLogin/rejection.php' target='_blank'><img src='cid:btn_no'></a>".
					  "&nbsp&nbsp&nbsp&nbsp".
					  "<a href='http://localhost/phpLogin/include/confirmation.inc.php?id=".$id."' target='_blank'><img src='cid:btn_ok'></a>".
					  "<hr>"; 
		
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		}
	}

?>