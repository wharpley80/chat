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
		<a href="<?php echo BASE_URL; ?>picks/index.php#home-picks" class="past-weeks" id="selected-week">HOME</a>
  </div>
	<div class="old-picks">
		<a href="<?php echo BASE_URL; ?>picks/week10_cfb.php#cfb10" class="past-weeks">WEEK 10 CFB</a>
  </div>
  <div class="old-picks">
		<a href="<?php echo BASE_URL; ?>picks/week9_nfl.php#nfl9" class="past-weeks">WEEK 9 NFL</a>
  </div>
</div>
<a name="home-picks"></a>
<div class="picks-weekly">
	<h2 class="picks-recap">CFB WEEK 11</h2>
	<img src="../img/vegas.jpg" class="picks-pic">
  <p class="picks-talk">
  </p>
  <h3 class="my-picks">BGSU @ W.Michigan over 75</h3> 
	<p class="picks-talk">This is what you call a confidence pick right here. As bad as I was last weekend... and I was bad. This 
		game right here I will make it all up. These are 2 high powered offenses with below average defenses. At 75 I would bet the 
		house, but not betting the house just getting my loses back. So a MACtion shootout!! Sit back and enjoy the points on my pick 
		of the week.
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