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
		<h2 class="home-title">Big Week in the B1G</h2>
		<h3>Penn State @ Ohio State</h3>
		<div class="osu">
			<img src="../img/b6005daf-5d1b-46b8-8f45-2f903257cb9e.jpg" class="osu-pic">
			<p class="osu-body">Big weekend ahead in College Football with some key games on schedule in the Big Ten. 
				The late game will feature Penn State traveling to Columbus to take on the #1 ranked Ohio State Buckeyes. 
				Ohio State was lucky to escape Beaver Stadium last year with the W. They finally pulled it out with a 31-24 
				double OT victory thanks to a pair of overtime touchdown runs by J.T. Barrett. These 2 teams are notorious for
			 playing close games, and while Penn State is out manned they are riding a 5 game win streak. Ohio State has been 
			 unimpressive and also hasn't covered all year, so don't be suprised if this one is closer than the experts think.</p>
		</div>
		<h3>Michigan State @ Michigan</h3>
		<div class="ttun">
			<img src="../img/harbaugh.jpg" class="ttun-pic">
			<p class="ttun-body">I really doubt that Jim Harbaugh is missing the 49ers at all right now. The Niners are in the gutter and his Wolverines 
				have posted 3 straight shutouts (14 total points allowed over the last 20 quarters). That being said... this will be Michigan's 
				toughest opponent of the season to date. Sparty has been the BIG brother in this rivalry as of late winning 6 of 7. Mark 
				Dantonio has built MSU into one of the best programs in the nation. Michigan is way ahead of schedule and State has not looked 
				like the team of the past few years. I know the Wolverines are the trendy pick right not, but I'd have to side with the know 
				comodity which is senior quarterback Connor Cook and Dantonio's system.</p>
		</div>
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