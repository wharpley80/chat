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
	<h2 class="picks-recap">Rivalry Week (2-4)</h2>
	<img src="../img/16462547-mmmain.jpg" class="picks-pic">
	<p class="picks-talk">
	</P>
	<h3 class="my-picks">Iowa -3</h3>
	<p class="picks-talk">I know this looks like a dangerous game for the Hawkeyes. They have already clinched their trip to the
		Big 10 title game next week and Nebraska needs a win here to get bowl eligible. Most people also think Iowa is overated as
		well, so they are just anticipating the let down. I don't agree with most people and believe that Iowa is playing as good of
		football as anyone in the country. They aren't the most talented by any means, but are well coached and are playing solid football in all phases. Nebraska is just not a very good team this year and Iowa will probably meat their match next week, but I expect them to win this game easily here.
	</p>
	<h3 class="my-picks">Ohio State -1</h3>
	<p class="picks-talk">Ohio State has been a mess offensively ALL season. This can be attributed to play-calling, coaching, and
		player execution. Everything fell apart last week in what was really the Perfect Storm. While the loss last week may have cost them a Big 10 title and a shot at the CFB playoffs. I think it may just drag them out of their National Title hangover that they've been in all year. Don't get me wrong there is a part of me that still thinks this could be a complete mess and the Buckeyes get throtled, but I'm betting that Urban will use his "Us against the World" ploy to get this team fired up and pull out the victory. 
	</p>
	<h3 class="loser">Virginia Tech -3.5</h3>
	<p class="picks-talk">Well the Hokies tried hard to send Beamer out with a win in his final home game, but fell short in OT 
		to UNC. VT was really out matched in that game so it was a difficult task to fill. Now they need a win on the road against in-state rival Virginia to secure Beamer one last Bowl game. Lucky for VT they have beaten the Cavaliers 11 straight times. It would be a horrible set of circumstances for VT to fall here and I just don't see anyone letting that happen. Could be a close game, but given the circumstances I'll bet on VT getting the cover here. God Bless anyone who bets against VT here because I sure don't have the balls to do so. 
	</p>
	<h3 class="loser">Vanderbilt +17.5</h3>
	<p class="picks-talk">I really like the matchup on paper here. Tennessee relies heavily on the run while Vandy does a 
		respectable job defending the run ranked 24th in the nation. Vandy does have trouble offensively and they really need to be able to run the ball to have any shot here. The Vols rank 47th in rushing defense, so I think that will allow the Commodores to move the chains and at least keep the game close. Tennessee is obviously the dominant team here, but there are matchups I like enough to keep it within the number above. Although if the line drops below 17 then I'd advise staying away.
	</p>
	<h3 class="loser">Mississippi State +1</h3>
	<p class="picks-talk">This is by far the best SEC game of the weekend considering that the Iron Bowl won't be very competative
		. Another in-state rivalry game that should be full of emotions and bad intentions. This will be Dak Prescott's final home game and it sets up pretty good for him matchup wise. State is pretty one dimensional relying heavy on the passing game, but fortunate for them Ole Miss ranks 101st in pass defense. Considering that matchup I just don't see the Rebels sending Prescott out with a loss.
	</p>
	<h3 class="loser">Oklahoma State +7</h3>
	<p class="picks-talk">The Cowboys are coming off their first loss of the season last week and acoording to many the Sooners 
		are the hottest team in the country. This is a difficult spot for them beacuse they need a convincing win on the road against their in-state rival to leave a good impression on the Playoff Committee. I think these 2 teams are evenly matched and also think the Sooners may get caught pressing a little bit here. Cowboys should keep it close at home and wouldn't be suprised at all if they pulled off the upset. 
	</p>
	<h3 class="my-picks"></h3>
	<p class="picks-talk">
	</p>
  <h3 class="loser"></h3> 
	<p class="picks-talk">
	</p>
	<h3 class="my-picks"></h3> 
	<p class="picks-talk">
	</p>
</div>
<?php include(ROOT_PATH . 'inc/picks_chatbox.php'); ?>
<?php include(ROOT_PATH . 'inc/footer.php') ?>