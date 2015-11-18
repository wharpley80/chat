<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];
$thisPage = "home";
$homeArticle = "bias";

include(ROOT_PATH . 'inc/header.php');
?>
	<h2>General Chat</h2>
</header>
<?php include(ROOT_PATH . 'inc/home_articles.php'); ?>
<a name="bias"></a>
<div class="home-intro">
	<h2 class="home-title">SEC Bias is Ridiculous</h2>
	<img src="../img/alabama-lsu-630.jpg" class="sec-pic">
	<p class="home-body">This has been going on for years now, but this is just my forum to vent. First I'd like to 
		acknowledge that I actually enjoy watching SEC football. Along with most of the BIG 10 and about half of the 
		ACC it's the only other conference that plays defense consistently anymore. And I will concede that the SEC is 
		the best conference in college football from top to bottom, but that's where it ends. Just because they're a little 
		better than every other conference does not make them dominant, and when the AP has 8 of the 25 teams in the
		preseason poll from the SEC then I'd say that's just a little bias for the conference. 
  </p>
  <p class="home-body">Now if we flip it back to last bowl season then the SEC was 7-5 in bowl games, which shows to the
  	depth of the conference, but they finished 2-4 against ranked opponents and the top 3 teams in the conference ALL lost.
  	This is a good example of the depth of the conference, while also showing that depth is the only thing that sets
  	this conference apart. There is no denying Alabama's talent and depth, but there are a handful of teams that you can
  	argue that are as talented and deep as Bama or deeper. These schools would be FSU, Clemson, USC, and Ohio State. 
	</p>
	<p class="home-body">There is no other conference in the CFB that if an average team in the conference upsets them that
		they will jump up into the top 5. This seems like a constant pattern in the SEC though. Ole Miss gets blasted by TCU 
		last year in their bowl game 42-3. What a dominant performance by a top SEC program right??? The Rebels start the 
		season ranked 17th, and then after 2 blowout victories over great programs like UT Martin and Fresno St they move up to
		15th in the rankings. This leads them into a matchup against 2nd ranked Bama where Ole Miss comes away victorious, but 
		most will agree that it was a matter of Bama beating themelves than the Rebels dominating Bama. This leads to Ole Miss 
		jumping all the way up to 3rd in the rankings, which puts them ahead of or tied with TCU. Wait WHAT!!?? The same TCU 
		team that just embarassed Ole Miss 42-3 on a neutral field last bowl season. Since then Ole Miss has lost 3 games to 
		Florida, Memphis, and Arkansas. These are all solid teams, but my point is that the jump to #3 by the media was just a  
		bit premature.
	</p>
	<p class="home-body">I can give you an example of this season after season. Everytime a highly ranked SEC team falls to
		an average SEC school, then the knee jerk reation by the media is to jump them up to top 5 status. You see this doesn't 
		happen in any other conference. Last year Virginia Tech beat an 8th ranked Ohio State team, and that moved the Hookies 
		to (2-0) and 17th in the rankings while the Buckeyes fell to 22nd in the rankings. Keep in mind that the Bama loss to Ole 
		Miss only dropped Bama to 12th. So it's gotten to the point that a there is no such thing as a bad SEC loss. An upset in
		the SEC is just one SEC powerhouse out dueling another SEC powerhouse and what GREAT FOOTBALL!! While an upset in another 
		conference and very little praise is given to the underdog, and the main focus is on how the favorite chocked and isn't as 
		good as we thought. Can you just wake up and take it for what it's worth??!! The SEC is the best conference, but that's it!!
		They are just another conference that is marginally better than the rest. They aren't the NFL and every school is beatable
		from the Alabamas to the LSUs. I'll give the SEC it's respect, but it's time that other conferences and programs get their
		respect as well.	
	</p>
</div>
<?php include(ROOT_PATH . 'inc/home_chatbox.php'); ?>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>