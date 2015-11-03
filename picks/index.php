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
				<h4 class="record-cfb">61-43-2</h4>
				<h4 class="record-nfl">26-14</h4>
		  </div> 
		  <img src="../img/vegas.jpg" class="picks-pic">
		</div>

		  <div class="picks-weekly">
		  	<h3 class="my-picks">Rams -9</h3> 
		  	<p class="picks-talk">I'm a Niners fan, and we are horrible. Only thing we have going for us is Carlos Hyde... and he's out. STL has
		  		one of the best front 7s in football. This means the niners would have a hard time running the ball with Hyde, so without Hyde they
		  		will be 1 dimensional. That 1 dimension is Kaepernick, and with no running threat he is a horrible pocket passer. Boldin is QUEST 
		  		with a hamstring, so that won't help him out. SF is 20th in rush defense, so Gurley should have a big day and the Niners really have
		  		been playing uncompetative ball away from home. So Rams should ROLL!!
		  	</p>
		    <h3 class="my-picks">Bengals pick</h3>
        	<p class="picks-talk">If this was Ben's second game back then I would probably like the Steelers here. They have won the last 4/6 meetings
        		between the 2, but because I don't know how effective Ben will be and since Cincy is playing so well then I'm taking the Bengals in a
        		pick em.
		      </p>
		   <h3 class="my-picks">Bucs +7.5</h3>
		    <p class="picks-talk">I hate Jameis Winston, so let me just get that out there. I think he is a right handed Byron Leftwich. Meaning he can
		    	make all the throws when he has time. When you get pressure on him then he is a hot mess because he is about as agile as a baby giraffe in
		    	the pocket. So why do I like the Bucs??? ATL is last in the league in sacks, and 25th overall in pass defense. Under these cicumstances I
		    	think Winston can make plays in the passing game. Doug Martin is running the ball effectively and even though ATL has a top run defense I
		    	just see the Bucs scoring some points here. Bucs also play pretty good pass defense, so I think they can keep Matt Ryan in check. Give me
		    	the Bucs to lose by 7 and cover by .5.
		   	</p>
		   <h3 class="my-picks">Broncos +3.5</h3>
		    <p class="picks-talk">I thought I was mistaken when I saw that the undefeated Broncos were home dogs here. #1 pass defense, #4 run defense, 
		    	at home with Peyton Manning. I think this will be a great game and GB could very well win this, but all considered I'll take Manning at
		    	home with the points and that defense. 
		    </p>
		  <h2 class="picks-title">Recap of yesterday in CFB</h2>
		   <p class="picks-talk">7-5 yesterday. Was off to a 5-2 start going into the nightcap. Then went 1-3, but grabbed Wazzu +11 late to salvage the day.
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