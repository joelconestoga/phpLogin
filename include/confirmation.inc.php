<?php

	include 'header.inc.php';

	$id = $_GET['id'];

	$sql = "UPDATE my_user SET approved = 1 WHERE id = ".$id;
	$result = mysqli_query($conn, $sql);

	header("Location: ../confirmation.php");

?>