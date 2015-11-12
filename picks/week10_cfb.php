<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];
$thisPage = "picks";

include(ROOT_PATH . 'inc/header.php');
?>
	<h2>Game Picks & Odds Chat</h2>
</header>
<div class="picks-intro">
	<h2 class="picks-title">Season Record To Date</h2>
	<div class="picks-record">
		<h3 class="season-cfb">2015 CFB</h3>
		<h3 class="season-nfl">2015 NFL</h3>
	</div>
	<div class="record-intro">
		<h4 class="record-cfb">67-56-2</h4>
		<h4 class="record-nfl">30-19</h4>
  </div> 
</div>
<div class="vault-picks">
	<div class="old-picks">
		<a href="<?php echo BASE_URL; ?>picks/index.php#home-picks" class="past-weeks">HOME</a>
  </div>
	<div class="old-picks">
		<a href="<?php echo BASE_URL; ?>picks/week10_cfb.php#cfb10" class="past-weeks" id="selected-week">WEEK 10 CFB</a>
  </div>
  <div class="old-picks">
		<a href="<?php echo BASE_URL; ?>picks/week9_nfl.php#nfl9" class="past-weeks">WEEK 9 NFL</a>
  </div>
</div>
<a name="cfb10"></a>
<div class="picks-weekly">
 <h2 class="picks-recap">Upset Sataurday (3-10)</h2>
 <img src="../img/vegas.jpg" class="picks-pic">
 <p class="picks-talk">Well this will go down as a day to FORGET!! This day started off bad and just go worse from there. I was heavy loaded with favorites
 	on this day and it turned out to be Upset Sataurday. Can't remember having a day this bad in a LONG time, but these days happen so nothing you can do. Just 
 	eat your piece of humble pie and move on to the next day. 
 </p>
 <h3 class="my-picks">Penn State +1</h3> 
	<p class="picks-talk">Northwestern is a team that I play fairly often, so I feel that I am very familiar with the Wildcats. Now these 2 teams are very
		similar. Pass defense NW(6th) and PSU(4th), Rush defense NW(42nd) and PSU(55th). So you can give a slight edge to the Wildcats, but they are both pretty 
		sound defensively. They both have very solid rushing attacks, so there is no clear cut advantage for either team. Now the QB position is a different 
		story. Northwestern is lead by a talented freshman Clayton Thorson who has a bright future, but really struggles to move the ball through the air. On the 
		other side the Nittany Lions are lead by 3 year starter Christian Hackenberg who is a huge talent that has struggled with turnovers in his career. He's
		probably playing the best ball of his life as he comes in sporting a 13/2 TD/INT ratio. This game should be close and low scoring, but with these teams so 
		closely matched, then I have to go with the team with the far better QB.
	</p>
	<h3 class="my-picks">Florida -21</h3> 
	<p class="picks-talk">This is going to be a rough road trip for the Commodores. The swamp is one of the most difficult places to play in the SEC. Vandy's QB
		situation is a mess where they've combined for a 6/14 TD/INT ratio. Their only hope of moving the ball is on the ground where UF has one of the most imposing 
		defensive fronts in CFB and rank 14th against the rush. Gator QB Harris is finding a grove since taking over for suspended Grier, so I see UF rolling here at 
		home and covering.
	</p>
	<h3 class="my-picks">Texas Tech vs West Virginia over 81</h3> 
	<p class="picks-talk">Let's just be real here for a minute... they don't play defense in the BIG 12. I mean they line up 11 guys on that side of the ball, but
		it's kind of like an illusion, and these are 2 of the worst defenses in the conference. UWV allows 28.9 PPG while Tech allows 43.4 PPG. I mean Oklahoma St scored 
		70 on the Red Raiders last week all by themselves, and OSU is average offensively. Both these offenses are competent enough to score some points, so expect an old 
		fashion BIG 12 shootout and go OVER.
	</p>
 <h3 class="my-picks">NC State -4</h3> 
	<p class="picks-talk">No doubt BC has a stout D, but they simply can't score... no seriously they are 118th in the nation in scoring offense. They depend
		on their defense generating turnovers and their rushing attack. NC State may not have the #1 ranked rush defense like BC, but it is ranked 26th respectively and they
		do a good job of protecting the ball. There just aren't going to be many points scored in this game, and the best offensive player in this game is Jacoby Brissett. I 
		think he is the difference in the end and NC State can win by a TD.
	</p>
	<h3 class="my-picks">Florida State +10.5</h3> 
	<p class="picks-talk">Clemson has probably been the most impressive team so far this CFB season. They are really playing very confident and well balanced football,
		but in comes FSU who has owned Clemson of late winning 4/5. I really think Clemson is the better team here and comes away with the W, but I also don't see them 
		getting blown out either. Delvin Cook rested his hamstring last week and I don't care who the QB is because this team is just too talented and has too much confidence
		against Clemson for me to beleive that they won't make this a 1 score game if not win it outright. Give me the points and the Noles.
	</p>
	<h3 class="my-picks">Wisconsin -10.5</h3> 
	<p class="picks-talk">Wisconsin started off the season against Alabama. A game in which their best RB Corey Clement got injured. So they deffinately had a rough
		start to the season, but Clement is healthy and Wisconsin is starting to look like Wisconsin. Maryland on the other hand is a complete mess and hasn't really 
		figured out their QB situation. What we do know is that Wisconsin can run the ball and play top notch defense, so I see Wisconsin rolling in this one and winning
		by 2+ TDs.
	</p>
	<h3 class="my-picks">Iowa vs Indiana under 60</h3> 
	<p class="picks-talk">Only 1 Iowa game has gone over 60 points all season and that was their 62-16 victory over North Texas earlier this season. Iowa plays ball control
	 offense. They will run the ball and run the ball effectively aganist Indiana's defense, but they aren't exactly a quick strike team. Their scoring drives will eat up clock.
	 Indiana is the exact opposite they like to hurry up and score quick, but it's going to be hard coming against this Hawkeye defense. I see this game going 1 of 2 ways either
	 a close scoring contest in the 20's (27-24) or a game dominated by Iowa (31-14). Which ever it is I really like the under here and I rarely like unders.
	</p>
 <h3 class="my-picks">Washington State -3</h3> 
	<p class="picks-talk">The Cougars have been a huge suprise this year. They almost upset Stanford last week and the most suprising part part was that they 
		played more physical than the Cardinals for most the game. Now this game just seams like a good matchup for WAZZU. Home game for the Cougars, they have the 
		3rd ranked passing attack, ASU has 100th ranked pass defense, ASU lives and dies on the blitz, and WAZZU's playbook is filled with short quick passes. So give 
		me the home team to cover. 
	</p>
	<h3 class="my-picks">Michigan State -6.5</h3> 
	<p class="picks-talk">Connor Cook is probably the most pro level QB in the nation and he is playing at a very high level right now. Nebraska has the 125th ranked 
		pass defense, they are coming off a 10 point loss against Purdon't, and they are dealing with a laundry list of injuries coming into the weekend. I just don't see them 
		being able to keep it under a TD agianst Connor Cook and MSU.
	</p>
	<h3 class="my-picks">Texas A&M -7</h3> 
	<p class="picks-talk">Auburn comes into this game pretty banged up, while the Aggies are amazingly are at full strength for the most part. The Aggies have been a much better team all
		year, while the Tigers have just not been able to find their grove. College Station is a tough place to play a night game especially for a banged up team that is realing. Also 
		Kyler Murray is lightning in a bottle. Give me the home team to win by 2 scores. 
	</p>
	<h3 class="my-picks">Washington -2</h3> 
	<p class="picks-talk">Utah has NEVER beat Washington, so I'm taking Washington. That and this is the "Somebody knows something" game of the week. So basically I'm just hoping 
		on and taking the ride... not even researching. Sometimes that's how I roll.
	</p>
	<h3 class="my-picks">Michigan State -6.5</h3> 
	<p class="picks-talk">Connor Cook is probably the most pro level QB in the nation and he is playing at a very high level right now. Nebraska has the 125th ranked 
		pass defense, they are coming off a 10 point loss against Purdon't, and they are dealing with a laundry list of injuries coming into the weekend. I just don't see them 
		being able to keep it under a TD agianst Connor Cook and MSU.
	</p>
  <h3 class="my-picks">LSU +7</h3> 
	<p class="picks-talk">These 2 teams are very evenly matched. You can can pretty much flip a coin for every position matchup. Probably the largest edge would be Bama's 
		recievers vs LSU defensive backs. LSU actually ranks 66th in pass defense so they are somewhat vulnerable there. This leans me towards picking Bama to win this game, 
		but I feel that Fournette will get 100 plus yards and Brandon Harris will extend enough plays to keep drives alive for LSU and bring this game down to the wire. So give me 
		the Tigers and the points in this SEC showdown.
	</p>
	<h3 class="my-picks">Ohio State -22</h3> 
	<p class="picks-talk">I've stayed clear off all Buckeye games this year except for the Rutgers game, so I'm 1-0 riding them this year. And I know that this will probably be 
		a set back offensively for Ohio State but here is why I like them. Aside from the Michigan game last week the Golphers have had a tuff season and then they lost their 
		coach due to health reasons. Then the way that they lost to Michigan last week just gives me the feeling that it could have drained them emotionally. Now they have to come
		into the Horseshoe after a bye for Urban Meyer. The Buckeyes are finally hitting stride and even though JT is serving his suspension this week remember that Jones didn't
		lose the job JT just won it. I think Jones will play his best game of the year which will reignite the QB controversy going into next week. Ohio State may not score 49, but
		at the same time Minnesota may not score double digits. I have a feeling that Urban will use this #3 ranking to jump start this team. So give me the Buckeyes 31-6
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
