<?php

	include 'header.inc.php';
	include 'mailerG.inc.php';

	/*
	if (!isset($_POST['submit'])) {
		header("Location: ../login.php");
		exit();
	}*/

	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	/*
	if (empty($firstName) || empty($lastName) || empty($email) || empty($username) || empty($password)) {
		header("Location: ../register.php?register=empty");
		exit();
	}*/

	$sql = "INSERT INTO my_user (firstName, lastName, login, pass, email) 
	VALUES ('$firstName', '$lastName', '$username', '$password', '$email')";

	$result = mysqli_query($conn, $sql);
	$id = mysqli_insert_id($conn);

	sendEmailToAdmin($email, $id);

	header("Location: ../wait_confirmation.php");

