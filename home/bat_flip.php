<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];
$thisPage = "home";

include(ROOT_PATH . 'inc/header.php');
?>
		<h2>General Chat</h2>
	</header>
	<div class="vault">
		<div class="old-articles">
			<a href="<?php echo BASE_URL; ?>home/index.php#home" class="past-weeks">HOME</a>
	  </div>
		<div class="old-articles">
			<a href="<?php echo BASE_URL; ?>home/um_job.php#goldon" class="past-weeks">Is Miami Still a Top Job??</a>
	  </div>
	  <div class="old-articles">
			<a href="<?php echo BASE_URL; ?>home/bat_flip.php#flip" class="past-weeks" id="selected-week">To Flip or Not To Flip???</a>
	  </div>
	</div>
	<a name="flip"></a>
	 	<div class="home-intro">
			<h2 class="home-title">To Flip or Not To Flip???</h2>
				<img src="../img/96802665_display_image.jpg" class="flip-pic">
		    <p class="home-body">
		    	With bat flips being such a headline in sports the last month I found myself with mixed emotions. I truely love Baseball for all that it stands for. I can think of nothing that makes me feel closer to American Heritage than 
		    	going to a Baseball game. That's why I try every year to take a Summer Ballpark Trip. So at first I found myself opposing bat flips for the basic fact that it is an unwritten rule in Baseball not to flip your bat so that you don't 
		    	show up the opposing pitcher. Basically no matter how clutch a hit or how far you hit a home run. The batter is not aloud to show any emotion, and if he does even for 1 second just slow down and admire what he has done then he's going to get pegged his next time to bat. Now if all is equal then a pitcher should be held to the same standard, but that's not the case. Think of how many times you've seen a pitcher make a strikeout to end the inning and what does he do?? More often than not he will first pump and scream into his glove. 
		    <p class="home-body">So what it comes down to is that pitchers must be treated like children and we can't hurt their 
		    	feelings because they're too sensative. Now while I feel that Jose Bautista's bat flip was a little over the top... I felt that Yoenis Cespedes's flip was pretty bad ass. Now this brings me to the man pictured above. The GOAT and I can't think of anyone who didn't love his bat flipping or home run trot, just Rickey being Rickey. I close with the fact that Baseball has gone from being America's Pasttime to America's after thought and if fans want to see a bat flip... which they do. Then flip the damn thing!!!!
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