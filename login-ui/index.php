<!DOCTYPE html>
<html lang="en">
<head>
	<title>AcademiQ | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="login-ui/css/style.css">
</head>
<body>
	
		<nav class="nav-signup">
			<img src="login-ui/assets/img/logo.svg" alt="">
			<div class="right-nav">
				<a href="signupcover.php"><button class="close-button">X</button></a>
				<h1 class="current-page-title">Log in</h1>
			</div>
		</nav>

		<main class="login">
			<div class="left-login">
				<img src="login-ui/assets/img/noto_woman-student-medium-light-skin-tone.svg" alt="">
			</div>

			<div class="right-login">
				<p>Enter your Credentials.</p>
				<br>
				<form id="examineeLoginFrm" method="post" class="login100-form validate-form">
					<div class="input-group input-group-full">
						<input id="email" type="text" placeholder="Email" name="username">
						<input id="password" type="password" placeholder="Password" name="pass">
					</div>
					<br>
					<button name="submit" type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</main>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>