<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];
$thisPage = "fantasy";
$fantasyArticle = "week9";

include(ROOT_PATH . 'inc/header.php');
?>
	<h2>Fantasy Chat</h2>
</header>
<?php include(ROOT_PATH . 'inc/fantasy_articles.php'); ?>
<a name="week9-fantasy"></a>
<div class="fantasy-intro">
	<h2 class="fantasy-title">Daily Fantasy Value Picks</h2>
	<h3>Week 9 Avg DPP $243 (5-2) </h3>
	<img src="../img/pittsburgh-steelers-wide-receiver-antonio-brown.jpg" class="fantasy-pic">
	<h3>Antonio Brown</h3>
	<h4>$8,100 Draft Kings (49.6 Pts, $163 DPP)</h4>
		<p class="fantasy-body">Just because his price is high doesn't mean he's not a good value. Ben's second game back, home 
			game, OAK is 21st in fantasy points for WR and 31st in total pass defense. Then you take into effect that Bell is out for 
			the season and they will rely more on the passing game and Brown. Expect a big game from Brown and also good value.
		</p>
	<h3>Stevie Johnson</h3>
	<h4>$3,200 Draft Kings (13.8 Pts, $231 DPP)</h4>
		<p class="fantasy-body">Chargers can't run block to save their lives. They actually tried to commit to the run last week 
			for the first time in several weeks, but expect a high volume of passes from Rivers. With K.Allen on IR,  Rivers will 
			need someone to throw the ball to. Gates isn't 100% and S.Johnson is expected to fill the K.Allen role in the offense. 
			Home game for the Chargers, Bears are 18th in fantasy points allowed to WR and are 4th in total pass defense. Not the 
			best matchup, but good value for the price.
		</P>
	<h3 class="loser">Jonathan Stewart</h3>
	<h4>$4,300 Draft Kings (7.8 Pts, $551 DPP)</h4>
		<p class="fantasy-body">Stewart has had 20 plus carries in 3 games in a row now. Carolina runs the ball more than any other 
			team in the NFL, and I expect that trend to continue as they will want to keep A.Rodgers on the sideline for as long as 
			possible. GB's defense is not as good as advertised. Denver proved that Sunday night, but they 18th in fantasy points 
			allowed to RB and 25th in total rush defense. Stewart isn't explosive, but is reliable and should post good numbers here.
		</P>
	<h3>Chris Ivory</h3>
	<h4>$5,900 Draft Kings (19.8 Pts, $297 DPP)</h4>
		<p class="fantasy-body">Ivory is coming off back to back poor fantasy performances. Look for him to get back on track this 
			week against at home against a poor Jaguars run defense. The QB situation is not steady in New York right now, so look 
			for them to rely heavy on the running game. Jaguars are 28th in fantasy points allowed to RBs and 14th in total rush 
			defense. This should be one of Ivory's best opportunities of the season and a good value.
		</P>
	<h3 class="loser">Peyton Manning</h3>
	<h4>$6,300 Draft Kings (17.24 Pts, $365 DPP)</h4>
		<p class="fantasy-body">Say what you want about Peyton, but he is not as washed up as we were led to believe. First he's 
			coming off his best game of the season. And the offense as a whole was very impressive. Then you take into effect that he
		  is going back to Indy, which is more motivation than he will ever tell you. Colts are 22nd in fantasy points allowed to 
		  QBs and 27th in total pass defense. So as only the 11th highest salary for the week I see great value here.
		</P>
	<h3>Jameis Winston</h3>
	<h4>$5,200 Draft Kings (18.36 Pts, $283 DPP)</h4>
		<p class="fantasy-body">Winston will doubtably light the scoreboard up, but you can't deny that there is solid value here. 
			As I've stated before Winston is a right handed Byron Leftwich. Give him a clean pocket and he can be very effective, but 
			if you put pressure on him then he's a big sloppy mess. In comes the New York Football Giants with a league low 9 total 
			sacks. They are 29th in fantasy points allowed for QBs and dead last in total pass defense. You won't see 7 TDs out of 
			Winston, but he will give you good production and save you some cash for other positions.
		</P>
	<h3>Jeremy Langford</h3>
	<h4>$4,000 Draft Kings (25.2 Pts, $158 DPP)</h4>
		<p class="fantasy-body">Langford is a very talented back out of Michigan State who will probably take over for Forte as 
			the lead back in Chicago eventually. He does many things well including catching the ball out of the backfield. This is a good matchup for him as the Chargers come in with the 27th rush defense and allow the 32nd most fantasy points to opposing RB. I think Langford can get over 100 total yards and hopefully get in the endzone. So there is good value here as he is pretty cheap.
		</P>
	<h2 class="fantasy-title">What is DPP??</h2>
		<p class="fantasy-body">Dollar Per Point, is a metric of measuring how much value you get out of a certain player. How many
			Dollars you spent on that player's salary Per Point he actually scored for you. Obviously you can't fill your team with a 
			bunch of Julio Jones for $9,000 a piece, and at the same time if Julio Jones has a bad matchup that week then he isn't 
			going to get you value on your investment. So I try to pick out players regardless of salary cost that will give you a good
			return on your investment. 
		</p>
		<p class="fantasy-body">So what is a good DPP?? Depends on what you play. If you play tournaments then you are basically shooting
			in the dark and I can't really help you. The best way to keep your money alive in DFS is to play double-ups. No you're not going
			to win a million dollars, but if you play it right then you can actually make money or at least not make a new deposit every few
			weeks. Now on a $50,000 roster it will fluctuate what puts you in the money if you're playing a double-up. Usually if you score 
			150 fantasy points it will put you in the money. So if your team averages a DPP of $333.33 that will put you at 150 points. Your 
			defense on the other hand doesn't score with much value, so we will need to average a little better than $333 with the rest of our
			team. So to be safe lets try to average $300 or lower because a lower DPP is obviously better. Every week I will try to bring you 
			a set of guys that give you a DPP of $300 or under. Good Luck!
		</p>
</div>
<?php include(ROOT_PATH . 'inc/fantasy_chatbox.php'); ?>
<?php include(ROOT_PATH . 'inc/footer.php') ?>