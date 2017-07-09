<?php

	include 'header.inc.php';
	include 'mailerG.inc.php';

	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$sql = "INSERT INTO my_user (firstName, lastName, login, pass, email) 
	VALUES ('$firstName', '$lastName', '$username', '$password', '$email')";

	$result = mysqli_query($conn, $sql);
	$id = mysqli_insert_id($conn);

	sendEmailToAdmin($email, $id);

	header("Location: ../registration_wait.php");

