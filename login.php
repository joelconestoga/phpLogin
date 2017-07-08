<?php
    include 'header.php';
?>
<body>
    <!-- Row for FORM starts -->
	<div class="row">
    	<div class="col-md-12">
            <div class="row">
                <h1 class="col-lg-2 col-lg-offset-1 text-left">Login</h1>
            </div>
            <hr />
            <form action="include/login.inc.php" method="POST">
                <div class="row">
                    <div class="form-group">
                        <label for="username" class="col-lg-1 control-label text-right">Username</label>
                        <div class="col-lg-2">
                            <input class="form-control" name="username" placeholder="Username" type="text" autofocus/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="password" class="col-lg-1 control-label text-right">Password</label>
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
            </form>
        </div>
    </div><!-- /.row for FORM ends -->

    <hr />

    <div class="col-md-3 text-right">
    	<p>Don't have an account? <a href="register.php">Click here</a> to Register.</p>
    </div>

</body>
</html>