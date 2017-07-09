<?php
	include 'header.php';

	if (!isset($_SESSION['id']))
		header("Location: login.php");
?>

<body>
	
	<div class="row">
		<div class="col-sm-1">
		</div>

		<div class="col-sm-3">
			<div class="panel panel-danger">
			  <div class="panel-heading">
				<h2>Login system in PHP tutorial</h2>
				<div class="embed-responsive embed-responsive-4by3">
				    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/xb8aad4MRx8"></iframe>
				</div>

			  </div>
			</div>
	    </div>

		<div class="col-sm-3">
			<div class="panel panel-info">
			  <div class="panel-heading">
				<h2>Interstellar</h2>
				<div class="embed-responsive embed-responsive-4by3">
				    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
				</div>

			  </div>
			</div>
	    </div>

		<div class="col-sm-3">
			<div class="panel panel-success">
			  <div class="panel-heading">
				<h2>The Three Laws of TDD</h2>
				<div class="embed-responsive embed-responsive-4by3">
				    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/qkblc5WRn-U"></iframe>
				</div>

			  </div>
			</div>
	    </div>
	</div>

	<div class="row">
		<div class="col-sm-1">
		</div>

		<div class="col-sm-3">
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h2>Zero to hero with Python</h2>
				<div class="embed-responsive embed-responsive-4by3">
				    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zh9NgGf3cxU"></iframe>
				</div>

			  </div>
			</div>
	    </div>

		<div class="col-sm-3">
			<div class="panel panel-warning">
			  <div class="panel-heading">
				<h2>GOTO2017•The Scribe's Oath</h2>
				<div class="embed-responsive embed-responsive-4by3">
				    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/Tng6Fox8EfI"></iframe>
				</div>

			  </div>
			</div>
	    </div>

		<div class="col-sm-3">
			<div class="panel panel-primary">
			  <div class="panel-heading">
				<h2>Learn Clean Code</h2>
				<div class="embed-responsive embed-responsive-4by3">
				    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/SXkgYZw0evs"></iframe>
				</div>

			  </div>
			</div>
	    </div>
	</div>

</body>
</html>