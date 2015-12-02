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
	<h2 class="fantasy-title">NBA DFS Value Picks</h2>
	<h3>Updated Wed, Dec. 2</h3>
	<img src="../img/pi-nba-lakers-dangelo-russell-102215.vresize.1200.675.high.32.jpg" class="fantasy-pic">
		<p class="fantasy-body">These are the players that rank top in DPP(Dollars Per Point) by position each day. The DPP is 
			based off of their performance for the last 14 days. Keep in mind that a players status or playing time can fluctuate
			daily based on a multitude of factors. Use this only as a general basis of a players value that day. Enjoy!
		</P>
	<div class="dfs-bb">
		<h3>Top 5 PG</h3>
		<ol class="bb-list">
			<li>K.Hinrich CHI $168 DPP</li>
			<li>T.Parker SAS $176 DPP</li>
			<li>B.Knight PHO $187 DPP</li>
			<li>J.Calderon NYK $189 DPP</li>
			<li>D.Russell LAL $198 DPP</li>
		</ol>
		<h3>Top 5 SG</h3>
		<ol class="bb-list">
			<li>J.Harden HOU $169 DPP</li>
			<li>G.Neal WAS $179 DPP</li>
			<li>J.Butler CHI $189 DPP</li>
			<li>H.Thompson PHI $195 DPP</li>
			<li>J.Clarkson LAL $195 DPP</li>
		</ol>
		<h3>Top 5 SF</h3>
		<ol class="bb-list">
			<li>M.Teletovic PHO $169 DPP</li>
			<li>Cj.Miles IND $187 DPP</li>
			<li>T.Sefolosha ATL $187 DPP</li>
			<li>K.Leonard SAS $192 DPP</li>
			<li>J.Grant PHI $193 DPP</li>
		</ol>
		<h3>Top 5 PF</h3>
		<ol class="bb-list">
			<li>P.Millsap ATL $174 DPP</li>
			<li>J.Hill IND $183 DPP</li>
			<li>N.Mirotic CHI $190 DPP</li>
			<li>R.Anderson NOR $191 DPP</li>
			<li>D.Green GSW $192 DPP</li>
		</ol>
		<h3>Top 5 C</h3>
		<ol class="bb-list">
			<li>M.Gortat WAS $177 DPP</li>
			<li>I.Mahinmi IND $183 DPP</li>
			<li>N.Jokic DEN $184 DPP</li>
			<li>P.Gasol CHI $186 DPP</li>
			<li>T.Duncan SAS $190 DPP</li>
		</ol>
  </div>
	<h3></h3>
	<h4></h4>
		<p class="fantasy-body">
		</P>
	<h3></h3>
	<h4></h4>
		<p class="fantasy-body">
		</P>
	<h3></h3>
	<h4></h4>
		<p class="fantasy-body">
		</P>
	<h3></h3>
	<h4></h4>
		<p class="fantasy-body">
		</P>
	<h3></h3>
	<h4></h4>
		<p class="fantasy-body">
		</P>
	<h3></h3>
	<h4></h4>
		<p class="fantasy-body">
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