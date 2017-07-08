<?php

	include 'header.inc.php';

	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($firstName) || empty($lastName) || empty($username) || empty($password)) {
		header("Location: ../register.php?register=empty");
		exit();
	}

	$sql = "INSERT INTO my_user (firstName, lastName, login, pass) 
	VALUES ('$firstName', '$lastName', '$username', '$password')";

	$result = mysqli_query($conn, $sql);

	header("Location: ../login.php");

