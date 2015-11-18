<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];
$thisPage = "fantasy";
$fantasyArticle = "home";

include(ROOT_PATH . 'inc/header.php');
?>
	<h2>Fantasy Chat</h2>
</header>
<?php include(ROOT_PATH . 'inc/fantasy_articles.php'); ?>
<a name="home-fantasy"></a>
<div class="fantasy-intro">
	<h2 class="fantasy-title">Daily Fantasy Value Picks</h2>
	<img src="../img/theleague.jpg" class="league-pic">
	<h3>Aaron Rodgers</h3>
	<h4>$7,500 Draft Kings (25.12 Pts, .33 VPD)</h4>
		<p class="fantasy-body">Yes Rodgers is the most expensive QB behind Brady this week, but this is about the Value Per Dollar
			ratio that I use. I had Antonio Brown on this list last week and it worked out pretty good. Rodgers is coming home after
			the toughest 2 game stretch that he will have all year (@DEN, @CAR). This will be a get right situation for Rodgers facing
			the 18th ranked pass defense and a team that is 29th in fantasy points allowed to QBs. Expect a BIG game from Rodgers as 
			he gets back on track. 
		</p>
	<h3>Jordan Reed</h3>
	<h4>$4,600 Draft Kings (17.9 Pts, .39 VPD)</h4>
		<p class="fantasy-body">Reed when healthy is almost uncoverable by linebackers. Problem is that he is often injured and has 
			had inconsistent QB play to get him the ball. Reed is healthy and this is a favorable mathcup for him in a home game vs the
			Saints. NO ranks 30th in pass defense and they are 31st in defending the TE position. All considered Reed is the only 10th 
			highest cost at TE, which to me looks like great value.
		</p>
	<h3>Doug Martin</h3>
	<h4>$5,600 Draft Kings (14.3 Pts, .26 VPD)</h4>
		<p class="fantasy-body">Martin has been hit or miss this season. He loses snaps to Charles Sims if the team is playing from 
			behind, but even if Dallas wins this game. It's hard to imagine that Tampa will need to abandon the run game. This also sets 
			up to be a good matchup for Martin as Dallas is 17th in total rush defense, but 31st in fantasy points allowed to RBs.
		</P>
	<h3>Blake Bortles</h3>
	<h4>$5,600 Draft Kings (17.2 Pts, .31 VPD)</h4>
		<p class="fantasy-body">Bortles has been a pleasant suprise this year and he's only improving. He's coming off of an impressive
			road performance against the Jets, which was NOT a good matchup. He threw for 381 yds and 2 TDs in that matchup, so not too
			shabby. Now he heads on the raod to face the Ravens who sport the 29th ranked total pass defense and are 31st in fanasty points
			allow to QBs. Bortles has an array of weapons, is building confidence, has a good matchup, and is 13th in QB price this week.
			Looks like good value there to me.
		</P>
	<h3>Legarrette Blount</h3>
	<h4>$4,900 Draft Kings (15.7 Pts, .32 VPD)</h4>
		<p class="fantasy-body">With the injury to Dion Lewis there are going to be extra snaps available in the NE backfield. This 
			is the safe play as it's fairly obvious that Blount will get the bulk of the carries. You could make the play of James White
			or Brandon Bolden as they will take Lewis's spot as the pass cathcer out of the backfield, but that is a much riskier play. 
			The matchup is favorable as the Giants rank 25th in rush defense and 22nd in fantasy points allowed to running backs.
		</P>
	<h3>Demaryius Thomas</h3>
	<h4>$7,400 Draft Kings (14.1 Pts, .19 VPD)</h4>
		<p class="fantasy-body">Thomas has not had an electric season so far, but he has been consistant. This lines up to be a good 
			matchup for Thomas. The Broncos are coming off their first loss of the season, KC ranks 22nd in pass defense, and 32nd in 
			fantasy points allow to WRs. I would expect a solid game from Thomas with a possibility of a huge game since he is due.
		</P>
	<h3>DeAngelo Williams</h3>
	<h4>$6,500 Draft Kings (7.9 Pts, .12 VPD)</h4>
		<p class="fantasy-body">Big Ben looks like he will be a no go here, so what does that mean?? Means the Steelers will rely 
			heavily on their running game against the 32nd ranked rush defense in the NFL. Williams has had solid days in all 3 his starts
			17.2, 31.2, and 41.5. And he is not the cheapest option, but could be in line for a BIG day.
		</P>
	<h3>Allen Robinson</h3>
	<h4>$6,700 Draft Kings (16.1 Pts, .24 VPD)</h4>
		<p class="fantasy-body">This pick could go to Allen Hurns as well, while he's a little cheaper and has scored a TD in 6 straight
			games. I like Robinson a little better because he is a better deep threat and Baltimore is vulnerable over the top. The Ravens
			are 31st in points allowed to WRs and 29th in total pass defense. So take your pick, but I'm riding with Robinson.
		</P>
	<h3>James Starks</h3>
	<h4>$4,900 Draft Kings (15.6 Pts, .32 VPD)</h4>
		<p class="fantasy-body">Starks has been the best running back in the Packers backfield ALL year. Now that he is the starter then 
			there is more comfort in his touch count. Lacy is ruled out this week, and Detroit has the 30th ranked rushing defense. I'm expecting
			 a big day out of the Packers offense and Starks should benefit and at a valued cost.
		</P>
	<h3>James White</h3>
	<h4>$3,000 Draft Kings (2.1 Pts, .07 VPD)</h4>
		<p class="fantasy-body">If you're looking for a big upside for a low price, then White is the guy. I beleive Blount is the safer
			play here, but there isn't much risk with only a $3,000 price. White may not get the carries, but he is expected to replace Dion 
			Lewis on passing downs. Brady loves hitting up RB out of the backfield, so I will chance it for the price.
		</P>
	<h3>Chris Givens</h3>
	<h4>$3,200 Draft Kings (13.7 Pts, .43 VPD)</h4>
		<p class="fantasy-body">Givens will start due to the injury to Steve Smith. He will be the deep threat in the offense, and 
			could fit with Flaco's big are. The Jags are ranked 25th in pass defense and he could have a somewhat productive day at home. Don't 
			expect a huge day, but isn't a bad option for the price.
		</P>
	<h2 class="fantasy-title">What is VPD??</h2>
		<p class="fantasy-body">Value Per Dollar, this is just a ratio to evaluate how much production you get out of a player for
			what you've spent for them. You obviously can't spend $8,000 on every player, so you're team is made up of different salary
			ranges right? So if you spend $8,000 on Julio Jones and he gets you 20 points. 20 points is a decent score for most players,
			but Julio's 20 points was only a .25 VPD ratio. To put it in perspective if you're team averages a VPD of .4, then your team
			scores 200 points which puts you in the money on all double ups and most tournaments. If your team averages a VPD of .35 then
			your team scores 175 points which will put you in the money in most double ups and some tournaments. 
		</p>
		<p class="fantasy-body">So why do I record VPD?? Well because it gives you a reference of how effective the players I pick 
			are and if they are worth the price that you are spending. I could give you a list of players that are probably gonna snap
			every week, but if they all cost $7,500 then it does you no good. VPD is just a way of me trying to help you fill your roster 
			with value, no matter what the cost.
		</p>
</div>
<?php include(ROOT_PATH . 'inc/fantasy_chatbox.php'); ?>
<?php include(ROOT_PATH . 'inc/footer.php') ?>