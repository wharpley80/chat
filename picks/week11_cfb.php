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
		<a href="<?php echo BASE_URL; ?>picks/week11_cfb.php#cfb11" class="past-weeks" id="selected-week">WEEK 11 CFB</a>
  </div>
  <div class="old-picks">
		<a href="<?php echo BASE_URL; ?>picks/week9_nfl.php#nfl9" class="past-weeks">WEEK 9 NFL</a>
  </div>
  <div class="old-picks">
		<a href="<?php echo BASE_URL; ?>picks/week10_cfb.php#cfb10" class="past-weeks">WEEK 10 CFB</a>
  </div>
</div>
<a name="cfb11"></a>
<div class="picks-weekly">
	<h2 class="picks-recap">CFB Week 11 Recap (7-3)</h2>
	<img src="../img/vegas.jpg" class="picks-pic">
	<p class="picks-talk">
	</P>
	<h3 class="my-picks">Kansas +45</h3>
	<p class="picks-talk">I tend to stay away from these games, and haven't played a number this large all year. I'm sure TCU
		will be pissed about the pounding that they took last week, and I'm sure Boynkin will have a HUGE day. But that doesn't take away from the fact that TCU's defense isn't that good. Sure Kansas may be dead last in pass defense... and they really are, but TCU ranks 77th in pass defense and 61st in rushing defense. TCU should score early and often, but I think Kansas should get on the board a few times as well. This is a large number to cover for a struggling defense no matter how bad the opposing team is. Then you look at the scores the last 3 meetings of the 2 teams 34-30, 27-17, and 20-6. I don't expect this game to be that close, but it is an odd trend and I admit that I'm influenced by trends. So I'm taking the points and holding my breathe ALL morning.
	</p>
	<h3 class="my-picks">Ohio State -16.5</h3>
	<p class="picks-talk">This is the 2nd lowest line of the year for the Buckeyes aside from the VT game. OSU has only covered
		2 lines all year, so maybe that's the reason for the adjustment here??? JT Barrett will be back at QB and Urban will look 
		to get the offense back on track before heading into the stretch run. This is a home rivalry game which ususally means take the points, but not here. This is the first time this season that I've actually thought the line was too low for an Ohio State game. Look for the Buckeyes to win this game easily and cover.
	</p>
	<h3 class="my-picks">Utah State -1</h3>
	<p class="picks-talk">The Aggies are 4-2 with Kent Myers starting at QB, and although they have lost 2/3, Myers has produced
		a 10/1 TD/INT ratio. They play at the Air Force Academy who is sporting a 3 game winning streak coming into the weekend, and although they have a 6-3 record overall they haven't beaten a team with a winning record all year. Utah State has 1 statement victory this year, which is 1 more than the Falcons and they also have beaten the Falcons 2 straight games with a combined score of 86-36. Looks like a favorable matchup for the Aggies and I'll take them to cover this small line.
	</p>
	<h3 class="my-picks">Nevada -1</h3>
	<p class="picks-talk">Nevada comes in winners of 2 in a row and playing their best football so far this season. SJSU is 
		coming off of a heartbreaking loss against BYU 16-17, where they scored a late TD and went for the 2-PT conversion and the win, but unfortunately fell short. Nevada is more balanced offensively and comes in with the 17th ranked rushing offense, while SJSU ranks 107th in rushing defense. SJSU has a very talented back, but the matchup looks to favor the Wolfack as I think they will be able to control the game with their rushing attack. Then you consider that this game is being played @ Nevada and they have also won 6 straight in this series, so I'll take the home team to cover this small number.
	</p>
	<h3 class="my-picks">Arkansas +7.5</h3>
	<p class="picks-talk">The Razorbacks come in playing really quality football winners of 4/5, that lone loss came @ Bama 
		where they actually put up a tougher fight than LSU did. Arkansas QB Brandon Allen is coming off a tremendous performance @ Ole Miss where he threw for 442 yds and 6 TD. The Razorbacks rank 27th in rush defense so I think they can keep Fournette to a reasonable night and keep in close if not pull off the upset. 
	</p>
	<h3 class="my-picks">Minnesota @ Iowa under 47</h3>
	<p class="picks-talk">This game looks to be your old school 3 yards and a cloud of dust B1G game. Both teams want to run the
	  ball and keep the clock running. Both teams will actually HUDDLE, play quality defense, and neither team is really the quick score type. I think Iowa is deserving of their ranking, but I just don't see a lot of combined scoring here.
	</p>
	<h3 class="my-picks">Wahington State +11</h3>
	<p class="picks-talk">The Cougars have been a pleasant suprise all year, and this is the best defensive team that I can ever
		remember Mike Leach having. UCLA is the better all around team here, but with the #1 ranked passing offense it's hard to imagine that WSU won't be able to score points on the Bruins 39th ranked passing defense. The cougars haven't had a double digit loss all year and I don't see it coming here. I see this being a 1 score game and wouldn't be suprised if Washington State pulls off the upset. 
	</p>
  <h3 class="my-picks">Virginia Tech +3</h3> 
	<p class="picks-talk">VT has won 4/5 and 7/10 against the Yellow Jackets. What does this mean?? Well the key to playing the 
		triple-option is playing assignment defense. It shows me that Frank Beamer coached teams do a good job of playing assignment defense. Both teams are having disappointing seasons and there is no clear cut favorite here, so the line here is only adjusted for home field advantage. I'll take the points and Beamer's track record of success against GT.
	</p>
  <h3 class="my-picks">BGSU @ W.Michigan over 75</h3> 
	<p class="picks-talk">This is what you call a confidence pick right here. As bad as I was last weekend... and I was bad.
	  This game right here I will make it all up. These are 2 high powered offenses with below average defenses. At 75 I would bet the house, but not betting the house just getting my loses back. So a MACtion shootout!! Sit back and enjoy the points on my pick of the week.
	</p>
	<h3 class="my-picks">Kent St @ Ohio under 44</h3> 
	<p class="picks-talk">I don't like many unders, but neither of these teams can score consistantly. They both play pretty 
		solid defense and the edge offensively goes to Ohio. Don't really have a feel for who will win this game, but I just don't see many points being scored so I'm picking this one to stay under.
	</p>
</div>
<div class="shoe">
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