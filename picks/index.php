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
			<h2 class="picks-title">Season Record To Date</h2>
			<div class="picks-record">
				<h3 class="season-cfb">2015 CFB</h3>
				<h3 class="season-nfl">2015 NFL</h3>
			</div>
			<div class="record-intro">
				<h4 class="record-cfb">26-21-2</h4>
				<h4 class="record-nfl">15-4-1</h4>
		  </div> 
		  <img src="../img/vegas.jpg" class="picks-pic">
		  <div class="picks-weekly">
		  	<h3 class="my-picks">Michingan State +8</h3>
		  	<p class="picks-talk">No doubt that Michigan has impressed so far, but I believe that public opinion is ridding the Harbaugh train too hard here.
		  		Michigan may pull out the win here, but in a rivalry game where Sparty has dominated of late. I'm taking the underdog and the points.</p>
		   <h3 class="my-picks">Florida +9.5</h3>
		   <p class="picks-talk">I know Grier is not playing for the Gators anymore this season, but this pick is based on Florida's defense. LSU has not gone 
		   	up against a front 7 like this all season. Fournette will get his, but it won't come as easy. This will put more pressure on the quarterback position
		   	of LSU. I like LSU to get the win here, but I see this as being a low scoring close game.</p>
		   <h3 class="my-picks">Clemson -15.5</h3>
		   <p class="picks-talk">BC has a strong defense, but they just got shutout @ home by Wake Forest!!! That is all the info I need. Clemson plays tough D 
		   	too and a night game @ Death Valley is a difficult situation for anyone. Too much talent on Clemson's side with BC's inability to score puts me on the 
		   	side of the home favorite here.</p>
		  </div>
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