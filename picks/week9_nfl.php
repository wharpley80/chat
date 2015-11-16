<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];
$thisPage = "picks";

include(ROOT_PATH . 'inc/header.php');
?>
	<h2>Game Picks & Odds</h2>
</header>
<div class="picks-intro">
	<h2 class="picks-title">Season Record To Date</h2>
	<div class="picks-record">
		<h3 class="season-cfb">2015 CFB</h3>
		<h3 class="season-nfl">2015 NFL</h3>
	</div>
	<div class="record-intro">
		<h4 class="record-cfb">73-58-2</h4>
		<h4 class="record-nfl">31-22</h4>
  </div> 
</div>
<div class="vault-picks">
	<div class="old-picks">
		<a href="<?php echo BASE_URL; ?>picks/index.php#home-picks" class="past-weeks">HOME</a>
  </div>
   <div class="old-picks">
		<a href="<?php echo BASE_URL; ?>picks/week11_cfb.php#cfb11" class="past-weeks">WEEK 11 CFB</a>
  </div>
  <div class="old-picks">
		<a href="<?php echo BASE_URL; ?>picks/week9_nfl.php#nfl9" class="past-weeks" id="selected-week">WEEK 9 NFL</a>
  </div>
  <div class="old-picks">
		<a href="<?php echo BASE_URL; ?>picks/week10_cfb.php#cfb10" class="past-weeks">WEEK 10 CFB</a>
  </div>
</div>
<a name="nfl9"></a>
<div class="picks-weekly">
	<h2 class="picks-recap">NFL WEEK 9 (1-4)</h2>
	<img src="../img/vegas.jpg" class="picks-pic">
  <p class="picks-talk">
  </p>
  <h3 class="my-picks">Jacksonville +8</h3> 
	<p class="picks-talk">Blake Bortles has played very well this year and has 2 young talented recievers that are helping him out big time.
		They are coming off of their bye week so they should be ready for the Jets. Brandon Marshall is gonna go, but is pretty banged up and should't 
		be super effective. Jets should win the game behind their rushing attack and defense, but I think the Jags can score enough to make this 
		a close 1 score game and cover.
	</p>
 <h3 class="my-picks">New Orleans -7.5</h3> 
	<p class="picks-talk">The Saints defense is pretty bad, but Drew Brees and the offense are firing on all cylinders. Tennessee has the #3 pass
		defense, but this is an animal unlike any that they've seen all year. Mariota is back and that will help the Titans, but the young rookie is not 
		ready to keep up with Drew Brees in the Superdome. I'm taking the Saints here to win by 2 scores.
	</p>
	<h3 class="my-picks">Pittsburgh -5</h3> 
	<p class="picks-talk">This is the old west coast team traveling east game. Pittsburgh is 6th in the NFL with 22 sacks, so I think they
		can get to the young QB and give him some problems. I really like what the Raiders have been doing this year, but I just feel that this
		is a tough matchup for the young team. I see a big day for Big Ben and Antonio Brown and the home favorites win by a TD.
	</p>
	<h3 class="my-picks">Atlanta -7</h3> 
	<p class="picks-talk">Although Kaepernick needed to be benched this is not really an upgrade with Blaine Gabbert at QB. Niners are really banged 
		up and will be without Carlos Hyde, Reggie Bush, and probably Anquan Boldin. Then you matchup Julio Jones against a secondary that has given up 
		big play after big play all season and you have a long day for the home Niners.
	</p>
	<h3 class="my-picks">Denver -5</h3> 
	<p class="picks-talk">Andrew Luck finally caught fire late Monday Night and looked like the QB that we're used to. At the same time so did Peyton
		Manning last Sunday Night. This Broncos team is just executing in all phases of the game right now, and Peyton going back to Indy is just a little 
		extra motivation for Manning. This isn't an even matchup as Indy can't protect Luck and Denver has the best pass rush in the game. Give me Denver 
		to win by a few scores and cover.
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
