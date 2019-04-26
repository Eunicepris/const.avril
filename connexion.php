<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-12 offset-2 shadow mp-8 mt-5" style="border-radius: 6px 9px;">   
			    <form method="post" action="auth.php" >
				<div class="form-group">
					<label for="login">Login:</label>
					<input type="text" name="email" class="form-control" placeholder="username">

				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="password" class="form-control">
                </div>
                    <button type="submit" class="btn btn-primary my-2 btn-block" name="login">Login</button>
			    </form> 
		    </div>
	    </div>
	</div>


	 			
</body>
</html>
