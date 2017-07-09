<?php

	function sendEmailToAdmin($email) {

		/*
		$to = $email;
		$subject = "Registration request";

		$message = "
			<html>
				<head>
					<title>Title</title>
				</head>
				<body>
					<button>Approve</button>
					<button>Reject</button>
				</body>
			</html>
		";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: <matsu.joel@gmail.com>' . "\r\n";
		*/
		
		$msg = "First line of text\nSecond line of text";
		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);
		// send email
		$result = mail("matsu.joel@gmail.com","My subject",$msg);
		
		//$result = mail($to,$subject,$message,$headers)

		$alert = var_export($result, true);
		echo "<script type='text/javascript'>alert('$alert');</script>";
	}

?>