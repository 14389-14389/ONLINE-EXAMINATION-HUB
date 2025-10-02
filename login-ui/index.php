<!DOCTYPE html>
<html lang="en">
<head>
	<title>STUDENT LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="login-ui/image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/main.css">

	<style>
		/* Full background image */
		body {
			margin: 0;
			padding: 0;
			background: url("login-ui/images/bg-01.jpg") no-repeat center center fixed;
			background-size: cover;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}

		.container-login100 {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			padding: 20px;
			backdrop-filter: blur(2px); /* soft blur effect */
		}

		.wrap-login100 {
			background: rgba(255, 255, 255, 0.95);
			border-radius: 12px;
			box-shadow: 0 6px 20px rgba(0,0,0,0.25);
			width: 400px;
			overflow: hidden;
		}

		.login100-form-title {
			background: #1e3c72;
			color: #fff;
			text-align: center;
			padding: 20px;
			font-size: 22px;
			font-weight: bold;
		}

		.label-input100 {
			color: #333;
			font-weight: 600;
		}

		.input100 {
			border: 1px solid #ccc;
			border-radius: 6px;
			padding: 10px;
			width: 100%;
			margin-bottom: 15px;
		}

		.login100-form-btn {
			background-color: #28a745;
			color: #fff;
			font-weight: bold;
			border: none;
			padding: 12px 20px;
			border-radius: 6px;
			cursor: pointer;
			transition: 0.3s;
			width: 100%;
		}

		.login100-form-btn:hover {
			background-color: #218838;
		}
	</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title">
					<span class="login100-form-title-1">
						🎓 Student Sign In
					</span>
				</div>

				<form method="post" id="examineeLoginFrm" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="username" placeholder="Enter email">
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="login-ui/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login-ui/vendor/animsition/js/animsition.min.js"></script>
	<script src="login-ui/vendor/bootstrap/js/popper.js"></script>
	<script src="login-ui/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="login-ui/vendor/select2/select2.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="login-ui/vendor/countdowntime/countdowntime.js"></script>
	<script src="login-ui/js/main.js"></script>

</body>
</html>
