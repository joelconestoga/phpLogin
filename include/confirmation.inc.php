<?php

	include 'header.inc.php';
	include 'mailerG.inc.php';

	$id = $_GET['id'];

	$sql = "UPDATE my_user SET approved = 1 WHERE id = ".$id;
	$result = mysqli_query($conn, $sql);

	$sql = "SELECT * FROM my_user WHERE id = ".$id;
	$result = mysqli_query($conn, $sql);

	if ($row = $result->fetch_assoc()) {
		$email = $row['email'];
		sendEmailToUser($email, true);		
	}


	header("Location: ../registration_ok.php");

?>