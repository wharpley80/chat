<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];

include(ROOT_PATH . 'inc/header.php');
?>
<body>
	<header>
		<nav class="page-links">
			<ul>
				<li class="selected">
						<a href="<?php echo BASE_URL; ?>home/">Home</a>
				</li>
				<li>
						<a href="<?php echo BASE_URL; ?>fantasy/">Fantasy</a>
				</li>
				<li>
					<a href="<?php echo BASE_URL; ?>picks/">Picks &amp; Odds</a>
				</li>
				<li>
					<a href="<?php echo BASE_URL; ?>ballpark/">BallPark Trips</a>
				</li>
		  </ul>
		</nav>
		<?php if (!(isset($_SESSION['login']) && !empty($_SESSION['login']))) { ?>
			<nav class="signin">
				<a href="../signin" id="loginbut">Sign In</a>
				<a href="../signup" id="signupbut">Sign Up</a>
			</nav>
		<?php }	else { ?>
			<nav class="logout">
				<a href="../" id="logoutbut">Logout</a>
			</nav>	
		<?php } ?>
		<h1>Billy's Sports Chat</h1>
		<h2>General Chat</h2>
	</header>
	<div class="home-intro">
	</div>
  <div class="shoe">	
		<?php if (!empty($_SESSION['login'])) { ?>
			<div id="container">
				<form id="chatpost">
					<label for="chatmessage">Chat Message:</label><br/>
					<textarea name="chatmessage" id="chatmessage"></textarea><br/>
					<input type="submit" name="submit" id="sendmssg" value="Send">
				</form>	
	  	</div>
		<?php	} ?>
		<div id="chatwindow">
		  <div id="messages"></div>
		</div>
	</div>
<?php include(ROOT_PATH . 'inc/footer.php') ?>