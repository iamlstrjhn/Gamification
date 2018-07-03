<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Login | Student</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('materialize/css/materialize.min.css') ?>"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('materialize/css/login.css') ?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url('images/gamification.jpg') ?>">

</head>
<body>

	<header>
		<center>
			<section class="logo-center">
				 <img class="responsive-img logo-img" src="<?php echo base_url('images/logo.jpg') ?>">
			</section>

			<div class="container">
				<div class="card-custom">
						<form action="<?php echo base_url('Login/login_account_student') ?>" method="post">
							<p class="h6-caption">ENTER ACCOUNT FOR STUDENT</p>
								<div class="input-field">
			                           <input id="username" type="text"  name="username" placeholder="Enter your username" required="">
			                    </div>
			                    <div class="input-field">
			                           <input id="password" type="password"  name="password" placeholder="Enter your password" required="">
			                    </div>
			                    <button type="submit" class="center btn-large deep-purple lighten-1 btn-custom-login">LOGIN</button>
			                    <p class="h6-login-need-account">Need an account? <a href="<?php echo base_url ('register'); ?>" style="font-weight: 600; color: #9c7185 ;">CLICK HERE</a></p> 
						</form>
					
				</div>
			</div>
			<footer class="fixed">
				<div class="container"><p style="color:grey;font-weight: 300;">Capstone Project 2018</p></div>
			</footer>
		</center>
	</header>

	<script type="text/javascript" src="<?php echo base_url('materialize/js/materialize.min.js') ?>"></script>
	 <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
</body>
</html>