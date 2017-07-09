<?php
	include 'header.php';

	if (!isset($_SESSION['id']))
		header("Location: login.php");
?>

<body>
    <!-- Row for FORM starts -->
	<div class="row">
    	<div class="col-md-12">

        <h1>You're Logged in...</h1>

        </div>
    </div><!-- /.row for FORM ends -->

</body>
</html>