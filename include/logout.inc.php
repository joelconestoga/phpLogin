<?php

	include 'header.inc.php';

	session_unset();
	session_destroy();

	header("Location: ../login.php");

