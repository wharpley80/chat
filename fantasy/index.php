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
				<li>
					<a href="<?php echo BASE_URL; ?>home/">Home</a>
				</li>
				<li class="selected">
					<a href="<?php echo BASE_URL; ?>fantasy/">Fantasy</a>
				</li>
				<li>
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
		<?php	}	else { ?>	
			<nav class="logout">
				<a href="../" id="logoutbut">Logout</a>
			</nav>	
		<?php } ?>
		<h1>Billy's Sports Chat</h1>
		<h2>Fantasy Chat</h2>
  </header>
	<div class="fantasy-intro">
		<h2 class="fantasy-title">Daily vs League</h2>
		<img src="../img/Matthew-Stafford.jpg" class="lion-pic">
		<p class="home-body">The feeling you get when it's 1pm on Sunday and you sit down to start tracking your fantasy games and then you
			realize.... Literally every player you drafted in daily is on one of the opposing teams you're facing in league play. So congratulations...
			you're officially in for a long day. You spend the entire day torn. One minute you're pumped because Matthew Stafford is lighting up
			the Bears suspect pass defense, and you're the man because you picked him in daily and he was cheap as hell. Then before you get done  
			patting yourself on the back that's when you realize. Yep you guessed it. The jerk you're playing in league has Stafford starting, so you 
			spend the entire day doing this garbage. Hoping WRs don't get targeted and RBs don't get goal line touches only so you can keep youself
			from beating yourself. Can't wait till next Sunday, so I can do it all again.
		</p>
		<h2 class="fantasy-title">NFL Injuries</h2>
		<img src="../img/NES--Tecmo Super Bowl 2013_Oct1 21_53_34.png" class="injury-pic">
	  <p class="home-body">So if this sums up you fantasy season then you're not alone. It's hard to remember a season that has been 
			struck so hard by injuries. Quarterbacks include Roethlisberger, Romo and Luck. Then there are the skilled positions where owners 
			of Dez Bryant, Jamal Charles, and Jordy Nelson will all miss either all or most the season. While there are a long list of others 
			missing several weeks LeSean McCoy, Marshawn Lynch, Sammy Watkins, Steve Smith, Julius Thomas, Davante Adams, Alshon Jeffery, DeSean 
			Jackson, and others. Leaving owners scrambling for handcuffs and crossing their fingers everytime a star player takes the field. 
		</p>
	</div>
  <div class="fantasy">
	<?php	if ($_SESSION['login'] != '') { ?>
		<div id="container">
			<form id="chatpost">
				<label for="chatmessage">Chat Message:</label><br/>
				<textarea name="chatmessage" id="chatmessage-fantasy"></textarea><br/>
				<input type="submit" name="submit" id="send-fantasy" value="Send">
			</form>	
	 	</div>
	<?php } ?>
		<div id="chatwindow">
	  	<div id="messages-fantasy"></div>
		</div>
  </div>
<?php include(ROOT_PATH . 'inc/footer.php') ?>