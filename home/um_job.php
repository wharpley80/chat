<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];
$thisPage = "home";

include(ROOT_PATH . 'inc/header.php');
?>
	<h2>General Chat</h2>
</header>
<div class="vault">
	<div class="old-picks">
		<a href="<?php echo BASE_URL; ?>home/index.php#home" class="past-weeks">HOME</a>
  </div>
	<div class="old-picks">
		<a href="<?php echo BASE_URL; ?>home/um_job.php#goldon" class="past-weeks" id="selected-week">Is Miami Still a Top Job??</a>
  </div>
  <div class="old-picks">
		<a href="<?php echo BASE_URL; ?>home/bat_flip.php#flip" class="past-weeks">To Flip or Not To Flip???</a>
  </div>
</div>
<a name="goldon"></a>
<div class="home-intro">
	<h2 class="home-title">Is Miami Still a Top Job??</h2>
	<img src="../img/Golden_exasperated_face.0.jpg" class="golden-pic">
	<p class="home-body">I guess this really depends on who you are. If you're one of the 20,000 die hard Miami fans then
		I'm sure you'll say yes. They can make some valid points in their favor. South Florida is talent rich and that's a fact, 
		so I'm not even going to try and argue against that. Miami has been irrelevant since basically 03 or 04, but that hasn't stopped them from continuing to produce NFL talent. Now I think they're going to lose more recruits than they get. This has been happening and it's going to continue to happen. Let's just be realistic here, unless a recruit grew up a Hurricane fan, wants to stay close to home, or REALLY likes Miami's coach... then he will go elsewhere. That being said, I still think there is enough talent that they could compete for and actually win an ACC title. Something that they have yet to do since joining the ACC in 2004. 
  </p>
  <p class="home-body">
		Now to answer the question... NO Miami is nowhere near a top job. The athletic department is broke and they will not spend money on a head coach. College coaches know that it is very very hard to keep 18-22 year old college athletes out of trouble. Now you place those kids in Coral Gables, which is 12.6 miles from South Beach and you have a real problem. These are distractions that good coaches don't want. Then there is the stadium issue... Sun Life stadium is 17 miles from the campus to begin with and there is a whole list of reasons why they can't fill their stadium, but all that matters is that they can't fill their stadium. This means that there is relatively no home field advantage of playing a home game. The one advantage that they do have is the humidity, and don't kid yourself that plays a large roll. This is why at one time when they played at the Orange Bowl the Hurricanes held one of the biggest home field advantages in the nation. Miami doesn't need a huge 100,000 capacity stadium because they don't have the undergraduate enrollment to fill it. They are a private school, but if they had 40-50,000 capacity stadium near campus then this would help immensely with recruiting and actual building an atmosphere that could generate a home field advantage.
	</p>
	<p class="home-body">So since there is no plans that I know of to build Miami a stadium then I'll move onto the next issue. 	  Unrealistic expectations... Miami fans like Nebraska fans are stuck in the glory days. If you come to Miami you're   
		basically expected to win a National Title, and if you don't then you'll be considered a failure. So you take a job where there is no commitment from the University, the city is not ALL IN like it is at every other major program, and then you have all these great former players that slam you in the media because they expect you to win despite all the oblivious disadvantages you are facing. So basically if you are a good coach and you have options, then you aren't taking this job. So who would want this job?? Despite all these disadvantages I've brought up. I'll go back to what I started with, which is talent. The is enough talent even with most of it being cherry picked away to actually win. So if you are an hot assistant looking for his first HC job or a successful coach at a smaller program then this could be an attractive job. Only problem for Miami is that if they land one of these hot up and coming coaches who actually utilizes the talent available. Once he has success then he is probably gone because of what we've already established...  Miami IS NOT A TOP JOB!!! So to wrap this up the best scenario for the Hurricanes is to hire a former player like a Ed Reed or a Ray Lewis. These guys are football geniuses, which would drawl recruits, and would be a popular hire with all the other former players and fanbase. Only problem with this is that neither of these 2 have any coaching experience that I know of. In retrospect could it go any worse than it's been going for the last 10 years????
	</p>
</div>
<div class="shoe">	
	<?php if (!empty($_SESSION['login'])) { ?>
		<div id="container">
			<form id="chatpost">
				<label for="chatmessage">Chat Message:</label><br/>
				<textarea name="chatmessage" id="chatmessage"></textarea><br/>
				<input type="submit" name="submit" id="sendmssg" value="Send">
			</form>	
  	</div>
	<?php	} ?>
	<div id="chatwindow">
	  <div id="messages"></div>
	</div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php') ?>