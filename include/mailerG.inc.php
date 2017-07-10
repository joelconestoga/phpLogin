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
		
		$mail->msgHTML(file_get_contents('mail_content.html'), true);
		$mail->AddEmbeddedImage('../img/accept.png', 'btn_ok');								
		$mail->AddEmbeddedImage('../img/reject.png', 'btn_no');								

		$mail->Body = "New registration requested for ".$email.
					  "<br><hr>".
					  "<a href='http://localhost/phpLogin/include/rejection.inc.php?id=".$id."' target='_blank'><img src='cid:btn_no'></a>".
					  "<a href='http://localhost/phpLogin/include/confirmation.inc.php?id=".$id."' target='_blank'><img src='cid:btn_ok'></a>".
					  "<hr>"; 
		
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		}
	}

	function sendEmailToUser($email, $ok) {

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

		$mail->setFrom('phplab.webmaster@gmail.com', 'Administrator');
		
		if ($ok) {
			$mail->addAddress($email, 'New User');
			$mail->Subject = 'Registration Approved';
		} else {
			$mail->addAddress($email, 'New User');
			$mail->Subject = 'Registration Rejected';		
		}
		
		$mail->msgHTML(file_get_contents('mail_content.html'), true);

		if ($ok) {
			$mail->Body = "Your registration has been approved. ".
						  "<a href='http://localhost/phpLogin/index.php' target='_blank'>Click here</a>".
						  " to Log In."; 
		} else {
			$mail->Body = "Your registration has been rejected."; 			
		}
		
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		}
	}

?>