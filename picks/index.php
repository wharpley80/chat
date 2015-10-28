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
				<h4 class="record-cfb">52-36-2</h4>
				<h4 class="record-nfl">27-19-1</h4>
		  </div> 
		  <img src="../img/vegas.jpg" class="picks-pic">
		  <div class="picks-weekly">
		  	<h3 class="my-picks">New Orleans +4.5</h3> 
		  	<p class="picks-talk">These are 2 teams that have elite QBs and neither can play pass defense. New Orleans has been playing respectable 
		  		as of late. Colts are missing Mike Adams in the secondary, so I think this frees up enough holes in the secondary for Brees to keep 
		  		it close.
		  	</p>
		   <h3 class="my-picks">Houston +4.5</h3>
		    <p class="picks-talk">The coaching change brought some life to Miami, but the QB switch to Brian Hoyer has elevated the Texans as well.
		    	JJ Watt will cause havok in the backfield and Miami will have a hard time containing Hopkins. So give me the points and the Texans.
		   	</p>
		   <h3 class="my-picks">Jets +8</h3>
		     <p class="picks-talk">Jets have the #2 pass defense and #2 Rush defense. NE has the #14 rush defesne, so I think this will allow Chis Ivory
		     	to help move the chains and keep Brady on the sideline. NE should get the W here, but I like the Jets to keep it close.
		     </p>
		    <h3 class="my-picks">Giants -3.5</h3>
		     <p class="picks-talk">It's a good Eli year... and I know the Giants looked horrible on MNF. I just think the Giants get back on track
		     	and take advantage of a below average Cowboys pass defense. The Giants also defend the run good, which will put the pressure on Matt Cassel.
		     	Home division game for the Giants, so I like them to cover considering.
		     </p>
		    <h3 class="my-picks">Carolina -3</h3>
		     	<p class="picks-talk">
		     </p>
		  </div>
		  <h2 class="picks-title">Recap of Sataurday in CFB</h2>
		   <p class="picks-talk">1-2 in my Featured Picks, and 5-3 Overall
		   </p>
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