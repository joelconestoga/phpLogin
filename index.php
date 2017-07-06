<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

    <!-- Row for FORM starts -->
	<div class="row">
    	<div class="col-md-12">
            <form action="include/login.inc.php" method="POST">
                <fieldset>
                    <legend class="font-custom">Login</legend>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <input class="form-control" name="username" runat="server" placeholder="Username" type="text" autofocus/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <input class="form-control" name="password" runat="server" placeholder="Password" type="password"/>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2 col-lg-offset-1 text-right">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div><!-- /.row for FORM ends -->

	<p>Don't have an account? <a href="register.php">Click here</a> to Register.</p>

</body>
</html>