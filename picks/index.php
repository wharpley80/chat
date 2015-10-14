<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];

include(ROOT_PATH . 'inc/header.php');
?>
<body class="picks">
	<header>
		<nav class="page-links">
			<ul>
				<li>
					<a href="<?php echo BASE_URL; ?>home/">Home</a>
				</li>
				<li>
					<a href="<?php echo BASE_URL; ?>fantasy/">Fantasy</a>
				</li>
				<li class="selected">
					<a href="<?php echo BASE_URL; ?>picks/">Picks & Odds</a>
				</li>
				<li>
					<a href="<?php echo BASE_URL; ?>ballpark/">BallPark Trips</a>
				</li>
		  </ul>
		</nav>
		<?php if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) { ?>
		<nav class="signin">
			<a href="../signin" id="loginbut">SignIn</a>
			<a href="../signup" id="signupbut">SignUp</a>
		</nav>
		<?php }	else { ?>
		<nav class="logout">
			<a href="../" id="logoutbut">Logout</a>
		</nav>	
		<?php } ?>		
		<h1>Billy's Sports Chat</h1>
		<h2>Game Picks & Odds Chat</h2>
	</header>
		<div class="picks-intro">
			<div class="picksrecord">
				<h3>2015 CFB</h3>
					<p class="record">26-21-2</p>
				<h3>2015 NFL</h3>
					<p class="record">15-4</p>
		  </div> 
		  <!--


		  hello whatever whatever
		  
		  <div class="picksweekly">
		  	<h3>Weeekly Picks</h3>
		  	<p>Who I like this week.</p>
		  </div>
		
		  <img id="lines" src="../img/california-nevada-sports-betting.jpg" alt="lines">
		  <img id="ball" src="../img/images.jpg" alt="Ball">
		  
		  <img id="vegas" src="../img/vegas.jpg" alt="Vegas">
			<img id="march" src="../img/March-Madness-Math.jpg" alt="Madness">
			-->
		</div>
		<div class="vegas">
			<div id="container">
				<?php if ($_SESSION['login'] != '') { ?>
				<form id="chatpost">
					<label for="chatmessage">Chat Message:</label><br/>
					<textarea name="chatmessage" id="chatmessage-picks"></textarea><br/>
					<input type="submit" name="submit" id="send-picks" value="Send">
				</form>	
			  <?php } ?>
	    </div>
		  <div id="chatwindow">
		  	<div id="messages-picks"></div>
			</div>
	  </div>
<?php include(ROOT_PATH . 'inc/footer.php') ?>