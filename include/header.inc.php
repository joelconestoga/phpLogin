<?php
	session_start();

	include 'dbh.inc.php';

	if (!isset($_POST['submit'])) {
		header("Location: ../login.php");
		exit();
	}
?>