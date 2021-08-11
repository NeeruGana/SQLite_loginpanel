<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		
	
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Admin Panel</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-6">
			<form action="" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
		
				<center><button name="login" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button></center>
				
			</form>
			<br />
			<?php include 'login.php'?>
		</div>
		<div class="col-md-3">
			<h5 class="text-primary">CTF by</h5>
			<h3 class="text-primary">NULL CHAPTER VIT-AP</h3>
			<hr style="border-top:1px dotted #ccc;"/>
			
		</div>
		
	</div>

</body>	
</html>
