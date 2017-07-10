<?php

	include 'header.inc.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM my_user WHERE login='$username' AND pass='$password'";

	$result = mysqli_query($conn, $sql);

	if ($row = $result->fetch_assoc() and $row['approved'] == 1) {		
		$_SESSION['id'] = $row['id'];
		header("Location: ../home.php");
	} else {
		header("Location: ../index.php");
	}



