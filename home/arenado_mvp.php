<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];
$thisPage = "home";
$homeArticle = "arenado";

include(ROOT_PATH . 'inc/header.php');
?>
	<h2>General Chat</h2>
</header>
<?php include(ROOT_PATH . 'inc/home_articles.php'); ?>
<a name="arenado"></a>
<div class="home-intro">
	<h2 class="home-title">Arenado for MVP</h2>
	<img src="../img/andrew-susac-nolan-arenado-mlb-colorado-rockies-san-francisco-giants1-850x560.jpg" class="home-pic">
	<p class="home-body">Truth be told that there are many people out there that actually consider themselves baseball fans yet 
		they either don't know who Nolan Arenado is or they know who he is and say "Oh, the guy that plays at Coors Field?". For those that don't know, Arenado has quickly become one of the best, if not the best position players in ALL of baseball. At the very least he has brought his name into the conversation, and no not with the average fan or by people who's opinion 
		is bought (i.e., media, sports writters). Most people haven't and won't watch Arenado play on a nightly basis, but if you 
		did then I would gaurantee that you would come up with the same opinion. 
  </p>
  <p class="home-body">I'm sure that Bryce Harper is going to walk away with the NL MVP award, but I'll tell you why it's a 
  	complete snub that Arenado isn't the NL MVP or at least a finalist. The MVP award is usually tied to winning and that is no secret, but it's also a season long award as well. Now the 3 finalists are Bryce Harper (83-79 GB-7), Joey Votto (64-98 GB-36), and Paul Goldschmidt (79-83 GB-13). So the Nationals were the only team of the 3 that even finished above .500, and they were out of the playoff race for the last month of the season. The Nationals were also one of the biggest disappointments in all of baseball this year. Now I'm not saying that was Harper's fault in anyway because he no doubt had a
  	stellar season. My point is that Harper was not so valuable to his team that they overachieved or at least had a great season as a team. 
	</p>
	<p class="home-body">Now let's look at the offensive numbers where Arenado lead the NL along with Harper with 42 HR. The 
		other finalist finished with Votto(29) and Goldschmidt(33). Next we go to RBIs where Arenado led the Majors with 130, and
		the other finalist finished with Goldshmidt(110), Harper(99), and Voto(80). Then you go to XBH or extra base hits where Arenado again led the majors and also set a NL record for third basemen with 89. In a pitchers/humidor era Arenado set a mark never before reached by a NL third basemen. I will note that Arenado is the only one of the 4 to finish with a BA under .300, but he did finish with a strong .287 average which is very good. Harper did finish with a .330 BA, .460 OBS, and .649 SLG which all led the rest of theses guys. This article is not meant to diminish any player I discuss it is only 
		to compare. Most people see Coors Field and they automatically discount anything that a player does in a Colorado uniform,
		but what these people don't realize is that Arenado led the NL with 22 road HRs. He actually hit more HRs away from Coors Field than he did at Coors Field, so let that sink in for a minute... maybe it's not Coors Field... maybe this guy can really just flat out RAKE!!
	</p>
	<p class="home-body">Since the MVP is not supposed to solely be an offensive award then lets take a look at the defensive 
		side of things. All of these guys are outstanding defensively as Harper is the only 1 not to own a Gold Glove. Goldshmidt
		has won a GG at 1B for 2 of the last 3 years and Votto won a GG at 1B back in 2011. Arenado at 3B plays the position of the
		highest difficulty of these guys and it's not even close. Arenado has won 3 straight GGs which gives him a GG for every full year he has played in the majors. Arenado's defense is so amazing that it is worth the ticket price every night just to
		watch what he does on the diamond defensively. Let me make it a little more clear, Brooks Robinson who is widely regarded as the best defensive 3B of all time while winning 16 Gold Gloves has been quoted as saying that he picks up the paper every morning to see what Arenado does... need I say more???
	</p>
	<p class="home-body">I said before that my point is not to tear down the finalist, but to bring awareness to the greatness of 
		Nolan Arenado. This guy is a complete treat to watch, he plays the game everyday with an intensity that is rivaled by none,
		and he plays the game the right way which is few and far between these days. Harper will probably win the award and he is deserving and had a wonderful year. I just wonder how much of him winning is attributed to that being the story that people want... in a sport lacking stories that people care about. The biggest JOKE is how Votto is a finalist when he plays a lesser position, defends that position averagely, has a much inferior stat line, and plays on a team with a worse record. If nothing else explan that to me...
	</p>
	<p class="home-body">
	</p>
</div>
<?php include(ROOT_PATH . 'inc/home_chatbox.php'); ?>
<?php include(ROOT_PATH . 'inc/footer.php');  ?>