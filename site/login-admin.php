<?php require_once '../includes/auth.php';
logout();
setcookie("username-admin", "", time() - 3600);
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
							<h4 class="card-title">Login-admin</h4>
			<?php 
				// require_once '../includes/util.php';
				require_once '../includes/auth.php';
				$error = '';

				if(isset($_POST["login"])) {
					$username = $_POST['username'];
					$password = $_POST['password'];
					if(login_admin($username, $password))
					{
						header('location:admin-site.php');
					}
					else{
						$error = 'Sai thong tin dang nhap';
					}
				}

			 ?>
							<form method="POST">
							 <p><?php echo $error ?></p>
								<div class="form-group">
									<label for="email">Username</label>

									<input id="email" type="text" name="username" class="form-control" name="email" value="" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgot.html" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" name="login" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="margin-top20 text-center">
									Don't have an account? <a href="register.html">Create One</a>
								</div>
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

	<script src="../content/jquery.min.js"></script>
	<script src="../content/bootstrap.min.js"></script>
	<script src="../content/my-login.js"></script>
</body>
</html>