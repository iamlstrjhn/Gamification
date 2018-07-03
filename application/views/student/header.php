<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Quiztoria</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('materialize/css/materialize.min.css') ?>"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('materialize/css/custom.css') ?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url('images/gamification.jpg') ?>">
</head>
<body>

	<header>
		 <nav class="nav-custom">
		    <div class="nav-wrapper">
		      <a href="#!" class="brand-logo"><img class="img-logo" src="<?php echo base_url('images/logo.jpg') ?>"></a>
		      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">sort</i></a>
		      <a href="<?php echo base_url('profile') ?>" class="right hide-on-large-only"><i class="material-icons profile-icons">person</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
		        <li><a href="<?php echo base_url('leaderboard') ?>">Leaderboards</a></li>
		        <li><a href="<?php echo base_url('activities') ?>">Quiz Levels</a></li><!-- 
		        <li><a href="<?php echo base_url('scoreboard') ?>">Scoreboards</a></li> -->
		        <li><a href="<?php echo base_url('settings') ?>"><i class="material-icons">settings</i></a></li>
		        <li><a href="<?php echo base_url('profile') ?>"><i class="material-icons">person</i></a></li>
		        <li><a href="<?php echo base_url('Login/login_destroy_student') ?>">SIGNOUT</a></li>
		      </ul>
		    </div>
		  </nav>

		  <ul class="sidenav" id="mobile-demo">
		    <li><a href="<?php echo base_url('dashboard') ?>"><i class="material-icons sidebar-icons">home</i>Home</a></li>
		    <li><a href="<?php echo base_url('category') ?>"><i class="material-icons sidebar-icons">assessment</i>Categories</a></li>
		    <li><a href="<?php echo base_url('leaderboard') ?>"><i class="material-icons sidebar-icons">format_list_numbered</i>Leaderboards</a></li>
		    <!-- <li><a href="<?php echo base_url('scoreboard') ?>"><i class="material-icons sidebar-icons">format_list_numbered</i>Scoreboards</a></li> -->
		    <li><a href="<?php echo base_url('settings') ?>"><i class="material-icons sidebar-icons">settings</i>Settings</a></li>
		    <li class="divider"></li>
		    <li><a href="<?php echo base_url('Login/login_destroy_student') ?>"><i class="material-icons sidebar-icons">arrow_back</i>Signout</a></li>
		  </ul>
	</header>
	
	
    
    