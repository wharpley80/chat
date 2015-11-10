<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

// Validates Chatname & Password
if (isset($_POST['chatname']) && isset($_POST['password'])) {
	$chatname = trim($_POST['chatname']);
	$password = trim($_POST['password']);
	$password = hash("sha256", $password);

  function chatname($chatname,$password) {
    require(ROOT_PATH . 'inc/database.php');

		try {
	      $user = $db->prepare('SELECT chatname FROM user_pass WHERE chatname = ? AND password = ?');
	      $user->bindParam(1,$chatname);
				$user->bindParam(2,$password);
	      $user->execute();
	      foreach ($user as $usr) {
	        $username = $usr['chatname'];
	        return $username;
	      }
	   } catch (Exception $e) {
	      echo 'Data could not be retrieved from the database 25.';
	      exit;
	   }
	}
	
	// Grabs chatname ID.
  function chat_id($chatname) {
    require(ROOT_PATH . 'inc/database.php');
  
    try {
      $ids = $db->prepare('SELECT id FROM user_pass WHERE chatname = ?');
      $ids->bindValue(1,$chatname);
      $ids->execute();
      foreach ($ids as $id) {
        $chatID = $id['id'];
        return $chatID;
      }
    } catch (Exception $e) {
      echo "Data was not retrieved from the database successfully 26.";
      exit;
    }
  } 

	$chat_id = chat_id($chatname);

	if(chatname($chatname,$password) == $chatname) {
		$_SESSION['login'] = "1";
		$_SESSION['chat-id'] = $chat_id;
		$_SESSION['chatname'] = $chatname;
		header("Location: ../home/index.php");
	  exit();
	} 
}

include(ROOT_PATH . 'inc/header.php');
?>
		<h2>SignIn to Start Chatting</h2>
	</header>
	<div class="shoe">
		<div class="signin-page">
			<p class="head">Sign In</p>						
			<form method="POST" action="" class="signin-form">
				<div class="box">
					<input type="text" name="chatname" class="validate" placeholder="Chatname">
				</div>
				<div class="box">
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="box">
					<input type="submit" name="submit" value="submit">
				</div>
			</form>
  	</div>
  </div>
<?php
include(ROOT_PATH . 'inc/footer.php');
?>