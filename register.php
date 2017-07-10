<?php
	include 'header.php';
?>
<body>
    <!-- Row for FORM starts -->
	<div class="row">
    	<div class="col-md-12">
            <div class="row">
                <h1 class="col-lg-2 col-lg-offset-1 text-left">Register</h1>
            </div>
            <hr />
            <form action="include/register.inc.php" method="POST">
                <div class="row">
                    <div class="form-group">
                        <label for="first_name" class="col-lg-1 control-label text-right">First Name</label>
                        <div class="col-lg-2">
                            <input class="form-control" name="first_name" placeholder="First Name" type="text" autofocus/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="last_name" class="col-lg-1 control-label text-right">Last Name</label>
                        <div class="col-lg-2">
                            <input class="form-control" name="last_name" placeholder="Last Name" type="text"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="email" class="col-lg-1 control-label text-right">Email</label>
                        <div class="col-lg-2">
                            <input class="form-control" name="email" placeholder="email" type="email"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="username" class="col-lg-1 control-label text-right">Username</label>
                        <div class="col-lg-2">
                            <input class="form-control" name="username" placeholder="Username" type="text"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="password" class="col-lg-1 control-label text-right">Password</label>
                        <div class="col-lg-2">
                            <input class="form-control" name="password" placeholder="Password" type="password"/>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-2 col-lg-offset-1 text-right">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
	        </form>
        </div>
    </div><!-- /.row for FORM ends -->

    <hr />

    <div class="col-md-3 text-right">
		Already have an account? <a href="index.php">Click here</a> to Log In.
	</div>

</body>
</html>