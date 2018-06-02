<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= URL ?>/views/auth/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/views/auth/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/views/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/views/auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/views/auth/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/views/auth/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/views/auth/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/views/auth/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/views/auth/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/views/auth/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/views/auth/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Account Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<script src="<?= URL ?>/views/auth/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= URL ?>/views/auth/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?= URL ?>/views/auth/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= URL ?>/views/auth/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= URL ?>/views/auth/vendor/select2/select2.min.js"></script>
	<script src="<?= URL ?>/views/auth/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= URL ?>/views/auth/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?= URL ?>/views/auth/vendor/countdowntime/countdowntime.js"></script>
	<script src="<?= URL ?>/views/auth/js/main.js"></script>

</body>
</html>