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
			<h2 class="home-title">The Punt</h2>
				<img src="../img/img25343687.jpg" class="sparty-pic">
				<p class="home-body">As much as I LOVE watching Michigan lose. After 10 years of them being irrelevant, then it just starts  
					getting ridiculous. I'm not an idiot. I know that UM being competative is good for CFB, its good for the B1G, which in turn 
					is good for my Buckeyes. And Harbaugh in year 1 has UM competative and way ahead of schedule. Many games don't live up to the
					hype, but that was not the case here. Now State has been the most physical team in CFB over the past few years, so I was suprised
					to see that Michigan was by far the more physical team in the first half. As the second half progressed then Sparty started winning
					the battle in the trenches. This began to expose Michigan's weakness at the quarterback position and Connor Cook was the X factor. 
					On State's final offensive drive UM came up with a clutch defensive stop forcing a turnover on downs. State forced UM to a 3 and
					out and a punt which would probably be the final play...
				</p>
				<p class="home-body">The snap from the long snapper appeared to be right on the money, but the punter just straight up bobbled
					and dropped it. This was bad enough, but it gets worse. Instead of simply falling on the ball, which would have left State with 
					one last chance to throw a Hail Mary. The punter overwhelmed with the moment tried to pick the ball up and still get the punt off. 
					Unfortunate for him there were several defensive players swarming him, which led to him throwing the ball further backwards. 
					At this point Jalen Watts-Jackson scooped up the ball and followed an envoy of blockers 38 yards to the end zone. The UM 
					fans/players had their hearts ripped out and the State fans/players were so overtaken by emotions that they looked more confused 
					than the losing side. In 30 plus years of watching football this was probably the most jaw dropping ending to a game that I can 
					ever remember. Leaving this as a game that will be talked about FOREVER, and with Sparty winning 7 of 8 in the inner state rivalry.
					They hold the title of Big Brother... until proven otherwise. On a side note the hero of the game Watts-Jackson, was injured during 
					the celebration and fractured his hip thus ending his season. 
				</p>
			<h2 class="home-title">To Flip or Not To Flip???</h2>
				<img src="../img/96802665_display_image.jpg" class="flip-pic">
		    <p class="home-body">
		    	With bat flips being such a headline in sports the last month I found myself with mixed emotions. I truely love Baseball 
		    	for all that it stands for. I can think of nothing that makes me feel closer to American Heritage than going to a Baseball 
		    	game. That's why I try every year to take a Summer Ballpark Trip. So at first I found myself opposing bat flips for the 
		    	basic fact that it is an unwritten rule in Baseball not to flip your bat so that you don't show up the opposing pitcher. Basically 
		    	no matter how clutch a hit or how far you hit a home run. The batter is not aloud to show any emotion, and if he does even 
		    	for 1 second just slow down and admire what he has done then he's going to get pegged his next time to bat. Now if all is equal 
		    	then a pitcher should be held to the same standard, but that's not the case. Think of how many times you've seen a pitcher make a 
		    	strikeout to end the inning and what does he do?? More often than not he will first pump and scream into his glove. 
		    <p class="home-body">So what it comes down to is that pitchers must be treated like children and we can't hurt their feelings because 
		    		they're too sensative. Now while I feel that Jose Bautista's bat flip was a little over the top... I felt that Yoenis Cespedes's 
		    		flip was pretty bad ass. Now this brings me to the man pictured above. The GOAT and I can't think of anyone who didn't love his bat 
		    		flipping or home run trot, just Rickey being Rickey. I close with the fact that Baseball has gone from being America's Pasttime 
		    		to America's after thought and if fans want to see a bat flip... which they do. Then flip the damn thing!!!!
		    </p>
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