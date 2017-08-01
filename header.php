<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-superhero.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-superhero.min.css">
	<title>Home</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">PHP Moderation</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
	    	<?php 
		      	if (isset($_SESSION['id'])) {
		      		echo '
				    	<ul class="nav navbar-nav navbar-right">
				    		<form action="include/logout.inc.php" class="navbar-form navbar-left" role="search">
				        		<li><button class="btn btn-default" type="submit">Log Off</button></li>
				        	</form>
				     	</ul>
		      		';
		      	}
	    	?>
	    </div>
	  </div>
	</nav>
