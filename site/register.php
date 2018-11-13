<?php
	include '../includes/db.php';
	include '../includes/userdb.php';
	$err = "";
	if(isset($_POST['add'])){
	connect();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	if($password != $repassword){
		$err = "password not the same"; 
	}
	else{
	addUser($username, $password, 0, $username, '');
	header('location: login.php');
	}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
	<link rel="stylesheet" type="text/css" href="../content/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../content/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="../image/login.jpg">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST">
							 
								<div class="form-group">
									<label for="name">Name</label>
									<input id="username" type="text" class="form-control" name="username" required autofocus>
								</div>

								
								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group">
									<label for="password">Retype Password</label>
									<input id="password" type="password" class="form-control" name="repassword" required data-eye>
								</div>

								<div class="form-group no-margin">
									<input type="submit" name="add" value="Register">
								</div>

								<div class="margin-top20 text-center">
									Already have an account? <a href="index.html">Login</a>
								</div>
								<div><?php echo $err; ?></div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2017 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>