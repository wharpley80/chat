<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$chatname = $_SESSION['chatname'];

include(ROOT_PATH . 'inc/header.php');
?>
<body class="ballpark">
	<header>
		<nav class="page-links">
			<ul>
				<li><a href="<?php echo BASE_URL; ?>home/">Home</a></li>
				<li><a href="<?php echo BASE_URL; ?>fantasy/">Fantasy</a></li>
				<li><a href="<?php echo BASE_URL; ?>picks/">Picks & Odds</a></li>
				<li class="selected"><a href="<?php echo BASE_URL; ?>ballpark/">BallPark Trips</a></li>
		  </ul>
		</nav>

		<nav class="logout">
			<a href="../" id="logoutbut">Logout</a>
		</nav>
		
		<h1>Billy's Sports Chat</h1>
	</header>
	<div class="construction">
		<h3> Under Construction. Coming Soon...</h3>
	</div>
<?php
include(ROOT_PATH . 'inc/footer.php')
?>