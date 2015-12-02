<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];
$thisPage = "picks";
$picksArticle = "week11nfl";

include(ROOT_PATH . 'inc/header.php');
?>
	<h2>Game Picks & Odds</h2>
</header>
<?php include(ROOT_PATH . 'inc/picks_articles.php'); ?>
<a name="nfl11"></a>
<div class="picks-weekly">
	<h2 class="picks-recap">NFL Week 11 (2-2)</h2>
	<img src="../img/thomas-rawls-nfl-san-francisco-49ers-seattle-seahawks-850x560.jpg" class="picks-pic">
	<p class="picks-talk">
	</P>
	<h3 class="my-picks">Jacksonville -3</h3>
	<p class="picks-talk">The Jaguars(3-6) come in winners 2 of their last 3 and are moving in the right direction. Bortles is 
		gaining confidence as the season progresses and he is surrounded by a deep group of young playmakers. Bortles has thrown for 2 or more TDs in 7 of 9 games and has played consistant for most the season. The Titans(2-7) have seen good production
		out of Mariota when he's been healthy, but the team as a whole has struggled with consistancey for most the season. This 
		will be the Jaguars first home game in over a month and I just really like the direction they are going. So I'll take the home team on the shorst week.
	</p>
	<h3 class="loser">Jets -3</h3>
	<p class="picks-talk">The Jets(5-4) travel to Houston to take on the Texans(4-5). Houston has already lost Arian Foster for 
		the year due to injury and now Brian Hoyer will not suit up this week due to the concussion he suffered Monday Night. TJ Yates is filling in and even though he looked servicable Monday Night he is without a doubt a downgrade from Hoyer. Although
		Houston is coming in off their biggest win of the season an upset over the undefeated Bengals. I still don't have ANY confidence in them to follow that up here. Even though Houston has won 3 of 4 and the Jets have lost 3 of 4. The Jets have the #1 rushing defense in the NFl, which will put extra pressure on Yates. Houston ranks 25th in rush defense which should allow the Jets to have a balanced offensive attack. Give me the Jets to get back on track here and cover on the road.
	</p>
	<h3 class="loser">Atlanta -4</h3>
	<p class="picks-talk">The Falcons(6-3) come in losers 3 of their last 4, but are also coming off of their bye week. The 
		Colts(4-5) are also coming off their bye and a big win over the Broncos, but they are also without Andrew Luck. Although Hasselback is 2-0 in his starts in replacement of Luck this year. I think this will be his most difficult task this year
		as the Falcons rank 3rd in rushing defense and this should put the burden on Hasselback. This is a good opportunity for the Falcons to get back on track against a banged up Colts team that are also without defensive leader Mike Adams. 
	</p>
	<h3 class="my-picks">Seattle -13</h3>
	<p class="picks-talk">49ers have lost their last 3 games to Seattle by an average of 23.66 points... those were good 49ers 
		teams. Blaine Gabbert admittedly looked better in his first start than Kaepernick has over the last year, but playing at Seattle is a little more difficult than playing at home. No Carlos Hyde again today, so I really see a long and difficult day for Gabbert and the offense. 
	</p>
	<h3class="my-picks"></h3>
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