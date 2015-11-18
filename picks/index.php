<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];
$thisPage = "picks";
$picksArticle = "home";

include(ROOT_PATH . 'inc/header.php');
?>
	<h2>Game Picks & Odds</h2>
</header>
<?php include(ROOT_PATH . 'inc/picks_articles.php'); ?>
<a name="home-picks"></a>
<div class="picks-weekly">
	<h2 class="picks-recap">NFL Week 10 (1-3)</h2>
	<img src="../img/vegas.jpg" class="picks-pic">
	<p class="picks-talk">
	</P>
	<h3 class="my-picks">Jacksonville +5</h3>
	<p class="picks-talk">The Jaguars are 2-6, but are actually playing very solid football. They are young and the inexperience
		shows itself at times, but they are also very talented and improving as the season wears on. J-ville's most upside is on the 
		offensive side where Blake Bortles is starting to show why he was the #3 overall pick a few years back. He has several young 
		skill players surrounding him to make the Jaguars very capable of scoring. The Ravens aren't as bad as their record, but they just 
		aren't the same Ravens of the past especially on the defensive side of the ball. They rank 29th in pass defense, which should 
		give Bortles and the talented recieving corp opportunities to make plays in the passing game. I like the Jags to keep it close
		and possibly win the game outright, so give me the points here.
	</p>
	<h3 class="my-picks">New Orleans -1</h3>
	<p class="picks-talk">The Saints come in this game with Drew Brees playing at a very high level. Unfortunately the Saints defense
		is near the bottom of the league in most categories. I was on the fence thinking about taking the Redskins at home because of 
		the Saints defensive troubles, but there are a few things that put me on NO's side. First reason is that Washington ranks 29th
		in rushing defense. This will allow the Saints to run the ball at least effectively enough to set up the play action pass which
		is a huge plus for Brees. The second large factor is the Redskins inability to get to the QB. They rank 30th in sacks, so I'm 
		assuming that Brees will be able to set up play action and have a clean pocket to pass from for most the day. I'm sure Washington
		will score pretty easily, but I am rolling with Brees as I think this sets up as a game he can pull off.
	</p>
	<h3 class="my-picks">Philadelphia -6</h3>
	<p class="picks-talk">The Dan Cambell honeymoon is over and the Dolphins have lost their last 2 games by a combined score of
		69-24. This sets up as tough matchup for Miami as Philly has won 3/4 and their running game is hitting stride. Problem is that 
		Miami is ranked 31st in rushing defense, and when Philly can run the ball then it can be a very long day for opposing teams. 
		the running game will set up the play action, which means that Philly should score easily and Miami will have to try and keep 
		up. Philly's defense is ranked 15th in sacks and 4th in INTs, so I got the Eagles winninig at home by double digits.
	</p>
	<h3 class="my-picks">Oakland -3</h3>
	<p class="picks-talk">Derek Carr is for real and so are da Raiders. The Vikings are also a huge suprise as they sit at 6-2, but
		their only 2 loses come out west @ SF and @ Den. They also rely heavily on their rushing attack as Bridgewater has been solid,
		but he alone is not the reason behind their great start. Oakland ranks 7th in rushing defense, which will put extra pressure 
		on Bridgewater and the passing game. I think this and the trip out west will contribute to a difficult day for the Vikings. Should
		be a good game, but I think that the Raiders can with by a TD here.
	</p>
	<h3 class="my-picks"</h3>
	<p class="picks-talk">
	</p>
	<h3 class="my-picks"></h3>
	<p class="picks-talk">
	</p>
	<h3 class="my-picks"></h3>
	<p class="picks-talk">
	</p>
	<h3 class="my-picks"></h3>
	<p class="picks-talk">
	</p>
	<h3 class="my-picks"></h3>
	<p class="picks-talk">
	</p>
  <h3 class="my-picks"></h3> 
	<p class="picks-talk">
	</p>
  <h3 class="my-picks"></h3> 
	<p class="picks-talk">
	</p>
	<h3 class="my-picks"></h3> 
	<p class="picks-talk">
	</p>
</div>
<?php include(ROOT_PATH . 'inc/picks_chatbox.php'); ?>
<?php include(ROOT_PATH . 'inc/footer.php') ?>