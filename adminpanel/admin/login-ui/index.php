<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="login-ui/images/icons/favicon.ico"/>

	<!-- CSS dependencies -->
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<!-- Modern Custom Theme -->
	<style>
		/* Background gradient */
		body {
			margin: 0;
			padding: 0;
			font-family: "Segoe UI", Arial, sans-serif;
			background: linear-gradient(135deg, #6a11cb, #2575fc);
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		/* Glass-style card */
		.wrap-login100 {
			background: rgba(255, 255, 255, 0.15);
			backdrop-filter: blur(12px);
			-webkit-backdrop-filter: blur(12px);
			border-radius: 16px;
			box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
			padding: 30px;
			width: 100%;
			max-width: 400px;
			color: #fff;
		}

		/* Title */
		.login100-form-title {
			text-align: center;
			margin-bottom: 25px;
		}

		.login100-form-title img {
			width: 60px;
			margin-bottom: 10px;
		}

		.login100-form-title-1 {
			font-size: 24px;
			font-weight: bold;
			letter-spacing: 1px;
			color: #fff;
		}

		/* Labels */
		.label-input100 {
			color: #eee;
			font-weight: 600;
			font-size: 14px;
		}

		/* Inputs */
		.input100 {
			width: 100%;
			padding: 12px;
			border-radius: 8px;
			border: none;
			margin-top: 6px;
			margin-bottom: 18px;
			font-size: 14px;
		}

		.input100:focus {
			outline: none;
			box-shadow: 0 0 8px rgba(255, 255, 255, 0.5);
		}

		/* Button */
		.login100-form-btn {
			width: 100%;
			padding: 12px;
			border-radius: 8px;
			border: none;
			font-size: 16px;
			font-weight: bold;
			color: #fff;
			background: linear-gradient(135deg, #00c6ff, #0072ff);
			transition: 0.3s;
			cursor: pointer;
		}

		.login100-form-btn:hover {
			background: linear-gradient(135deg, #0072ff, #00c6ff);
		}

		/* Footer */
		.footer-text {
			text-align: center;
			margin-top: 15px;
			font-size: 13px;
			color: #ddd;
		}

		.footer-text a {
			color: #fff;
			font-weight: 600;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="wrap-login100">
		<div class="login100-form-title">
			<img src="login-ui/images/school-logo.png" alt="">
			<div class="login100-form-title-1">Admin Sign In</div>
		</div>

		<form method="post" id="adminLoginFrm" class="login100-form validate-form">
			<label class="label-input100">Username</label>
			<input class="input100" type="text" name="username" placeholder="Enter username">

			<label class="label-input100">Password</label>
			<input class="input100" type="password" name="pass" placeholder="Enter password">

			<button type="submit" class="login100-form-btn">Login</button>
		</form>

		<p class="footer-text">
			Need help? Contact <a href="mailto:boscokisaa575@gmail.com">System Admin</a>
		</p>
	</div>
</body>
</html>
