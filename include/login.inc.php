<?php

	include 'header.inc.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM my_user WHERE login='$username' AND pass='$password'";

	$result = mysqli_query($conn, $sql);

	if ($row = $result->fetch_assoc()) {
		$_SESSION['id'] = $row['id'];
		header("Location: ../index.php");
	} else {
		echo "Invalid username/password!";
	}



