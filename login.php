<?php
session_start();
if(isset($_POST['submit'])){
unset($_SESSION['error']);
$username=$_POST['username'];
$password=$_POST['password'];
if($username == 'vira' && $password == 'vira@789'){
	$_SESSION['login'] = 'success';
	$_SESSION['error'] = 'success';
	// header("location:index.php");
	echo "<script>window.location.replace('index.php');</script>";
}
else{
	$_SESSION['error'] = 'Username or password incorrect';
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="login-style.css">
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body class="login-body">
		<div class="text-center">
			<img src="images/logo-black.png" class="login-logo">
		</div>
		<section class="sign-in">
			<div class="container">
				<div class="signin-content">
					<div class="signin-image">
					<figure><img src="http://cassixcom.in/voila/public/assets/images/signin-image.jpg" alt="sing up image"></figure>
				</div>
				<div class="signin-form">
					<h2 class="form-title">Sign In</h2>
					<form method="POST" class="register-form" id="login-form" action="">
						<?php if(isset($_SESSION['error'])){ ?>
						<div class="alert alert-danger">
						<?= $_SESSION['error'] ?>
						</div>
						<?php } ?>
						<div class="form-group">
							<label><i class="fa fa-user"></i></label>
							<input type="text" name="username" placeholder="User Id">
						</div>
						<div class="form-group">
							<label><i class="fa fa-lock"></i></label>
							<input type="password" name="password" placeholder="Password">
						</div>
						<div class="form-group form-button">
							<!-- <a href="admin/dashboard" class="form-submit">Log in</a> -->
							<input type="submit" name="submit" class="form-submit" value="Log in">
						</div>
						<div class="text-center">
							Site built by <a href="https://cassixcom.com" target="_blank"><img src="https://cassixcom.com/images/cassixcom-blue.png" style="height: 80px;width: auto;"></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>