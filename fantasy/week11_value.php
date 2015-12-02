<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];
$thisPage = "fantasy";
$fantasyArticle = "week11";

include(ROOT_PATH . 'inc/header.php');
?>
	<h2>Fantasy Chat</h2>
</header>
<?php include(ROOT_PATH . 'inc/fantasy_articles.php'); ?>
<a name="week11-fantasy"></a>
<div class="fantasy-intro">
  <h2 class="fantasy-title">Week 11 NFL Value Picks</h2>
	<img src="../img/hi-res-855ff8c9b8331a54b110fd279c2b3d1d_crop_north.jpg" class="fantasy-pic">
	<h3>Matthew Stafford</h3>
	<h4>$5,400 Draft Kings (20.38 Pts, $265 DPP)</h4>
		<p class="fantasy-body">Stafford is not balling out by any stretch of the imagination, but I believe that given the right
			matchup that he can still produce. This is without a doubt his best matchup of the year to date. Detroit is coming off of
			their best game of the year winning at Green Bay for the first time since 1991. This should build at least a little
			confidence in a struggling Detroit locker room. Now they travel back home to play against the Raiders who are the 27th
			ranked in fantasy points allowed to opposing QBs and 31st in total pass defense. It sets up for Stafford to have a good day and if he can score a modest 20 pts then that would be a .37 VPD based on his salary. I think Stafford is a safe play IMO as crazy as it sounds. 
		</p>
	<h3>Charcandrick West</h3>
	<h4>$4,500 Draft Kings (8.4 Pts, $535 DPP)</h4>
		<p class="fantasy-body">This is the type of matchup that makes fantasy owners' mouth water, and is a LOCK as far as I'm 
			concerned. In his last 3 games West has posted the following points(VPD) 31.1(.65), 22.2(.47), and 23.9(.57). Now that is the type of value that puts you in the money. This week lines up very well for West as he faces the Chargers who rank 32nd in fantasy points allowed to RBs and 27th in total rushing defense. West will get the touches and you can only expect that he will produce and at this price you have to see great value here.
		</p>
	<h3>Danny Amendola</h3>
	<h4>$4,000 Draft Kings (23.7 Pts, $168 DPP)</h4>
		<p class="fantasy-body">Julian Edelman went down last week and as a result Amendola had his highest recieving total of the 
			year hauling in 10 receptions. Edelman will miss some time out with surgery and it looks like Amendola will be the benefactor here. DK has not made the adjustment in Amendola's salary so take advantage before they do. Matchup wise it sets up to be above average as Buffalo is ranked 22nd in fantasy points allowed to opposing WR, so looks like a good value play to me.
		</P>
	<h3>Darren McFadden</h3>
	<h4>$5,000 Draft Kings (20.9 Pts, $239 DPP)</h4>
		<p class="fantasy-body">Teams have been stacking the box against Dallas for obvious reasons, and with Romo making his 
			return this weekend you'd think that will change. Dez Bryant should be somewhat improved and teams will have to show respect to the passing game which has been non-existant since Romo got injured. With teams focusing on Romo that opens up the running game, and it sets up as a solid matchup for that this week as the opponent is Miami who ranks 31st in fantasy points allowed to opposing RBs and 31st in total rushing defense. All that being said McFadden looks to be a good value play for the week.
		</P>
	<h3>Stevie Johnson</h3>
	<h4>$3,900 Draft Kings (12.4 Pts, $314 DPP)</h4>
		<p class="fantasy-body">With Keenan Allen done for the year and now Malcom Floyd looking like he cold be done for the year 
			as well. There are not many options left for Rivers to throw to. The Chargers may start running the ball a little more, but they will still be a pass first team beacuse they are incapable of run blocking. Johnson is the only WR left with legitimate experience as the team faces off against the Cheifs who rank 32nd in fantasy points allowed to opposing WRs. 
		</P>
	<h2 class="fantasy-title">What is DPP??</h2>
		<p class="fantasy-body">Dollar Per Point, is a metric of measuring how much value you get out of a certain player. How many
			Dollars you spent on that player's salary Per Point he actually scored for you. Obviously you can't fill your team with a bunch of Julio Jones for $9,000 a piece, and at the same time if Julio Jones has a bad matchup that week then he isn't 
			going to get you value on your investment. So I try to pick out players regardless of salary cost that will give you a good return on your investment. 
		</p>
		<p class="fantasy-body">So what is a good DPP?? Depends on what you play. If you play tournaments then you are basically 
			shooting in the dark and I can't really help you. The best way to keep your money alive in DFS is to play double-ups. No you're not going to win a million dollars, but if you play it right then you can actually make money or at least not make a new deposit every few weeks. Now on a $50,000 roster it will fluctuate what puts you in the money if you're playing a double-up. Usually if you score 150 fantasy points it will put you in the money. So if your team averages a DPP of $333.33 that will put you at 150 points. Your defense on the other hand doesn't score with much value, so we will need to average a little better than $333 with the rest of our team. So to be safe lets try to average $300 or lower because a lower DPP is obviously better. Every week I will try to bring you a set of guys that give you a DPP of $300 or under. Good Luck!
		</p>
</div>
<?php include(ROOT_PATH . 'inc/fantasy_chatbox.php'); ?>
<?php include(ROOT_PATH . 'inc/footer.php') ?>