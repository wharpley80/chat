<!DOCTYPE html>
<html>
<head>
	<title>Billy's Sports Chat</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/tooltipster.css" />
	<link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Delius' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<header>
		<nav class="page-links">
			<ul>
				<li <?php if ($thisPage=="home") 
					echo " class=\"selected\""; ?> >
					<a href="<?php echo BASE_URL; ?>home/">Home</a>
				</li>
				<li <?php if ($thisPage=="fantasy") 
					echo " class=\"selected\""; ?> >
						<a href="<?php echo BASE_URL; ?>fantasy/">Fantasy</a>
				</li>
				<li <?php if ($thisPage=="picks") 
					echo " class=\"selected\""; ?> >
					<a href="<?php echo BASE_URL; ?>picks/">Picks &amp; Odds</a>
				</li>
		  </ul>
		</nav>
		<div class="sign-box">
		<?php if (!(isset($_SESSION['login']) && !empty($_SESSION['login']))) { ?>
			<nav class="login">
				<a href="../signin" id="loginbut">LOGIN</a>
				<a href="../signup" id="signupbut">CHAT NOW</a>
			</nav>
		<?php }	else { ?>
			<nav class="logout">
				<a href="../" id="logoutbut">LOGOUT</a>
			</nav>	
		<?php } ?>
	  </div>
		<h1>Billy's Sports Chat</h1>
