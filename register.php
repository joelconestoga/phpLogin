<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

    <!-- Row for FORM starts -->
	<div class="row">
    	<div class="col-md-12">
            <form action="include/register.inc.php" method="POST">
	            <fieldset>
	                <legend class="font-custom">Register</legend>
	                <div class="row">
	                    <div class="form-group">
	                        <div class="col-lg-2">
	                            <input class="form-control" name="first_name" placeholder="First Name" type="text" autofocus/>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="form-group">
	                        <div class="col-lg-2">
	                            <input class="form-control" name="last_name" placeholder="Last Name" type="text"/>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="form-group">
	                        <div class="col-lg-2">
	                            <input class="form-control" name="username" placeholder="Username" type="text"/>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="form-group">
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
	            </fieldset>
	        </form>
        </div>
    </div><!-- /.row for FORM ends -->

	Already have an account? <a href="index.php">Click here</a> to Log In.

</body>
</html>