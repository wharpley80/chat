<?php
session_start();

require_once('../inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

// Creates a new Chatname.
if (isset($_POST['new-chatname'])) {
  $new_chatname = trim($_POST['new-chatname']);
  $password = trim($_POST['password']);
  $password_confirmation = trim($_POST['password-confirmation']);

	try {
		$check_name = $db->prepare('SELECT chatname FROM user_pass WHERE chatname = ?');
		$check_name->bindParam(1,$new_chatname);
		$check_name->execute();
		foreach ($check_name as $check) {
      $checked_name = $check['chatname'];
    }
	} catch (Exception $e) {
		echo 'Data could not be retrieved from the database 30.';
		exit;
	}

	if ($checked_name != 0) {
		echo "Chatname already exists";
	} else {

		if (empty($new_chatname) || empty($password) || empty($password_confirmation)) {
			echo "Please correct fields.";
		} elseif ($password !== $password_confirmation) {
			echo "Passwords don't match";
		} else {

		$password = hash("sha256", $password);

		try {
			$sql = $db->prepare('INSERT INTO user_pass (chatname,password) VALUES (?,?)');
			$sql->bindParam(1,$new_chatname);
			$sql->bindParam(2,$password);
			$sql->execute();
		} catch (Exception $e) {
			echo 'Data could not be retrieved from the database 31.';
			exit;
		}

	  // Grabs chatname ID.
    function chat_id($new_chatname) {
	    require(ROOT_PATH . 'inc/database.php');
	  
	    try {
	      $ids = $db->prepare('SELECT id FROM user_pass WHERE chatname = ?');
	      $ids->bindValue(1,$new_chatname);
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

	  $newchat_id = chat_id($new_chatname);
		$_SESSION['login'] = "1";
		$_SESSION['chat-id'] = $newchat_id;
		$_SESSION['chatname'] = $new_chatname;
		header("Location: ../home/index.php");
		
		}
  } 
}

include(ROOT_PATH . 'inc/header.php');

?>
		<h2>Sign Up to Start Chatting</h2>
	</header>
	<div class="shoe">
		<div class="signup-page">
	  	<p class="head">Sign Up</p>
			<form method="POST" action="" class="signup-form">
				<div class="box">
					<input type="text" name="new-chatname" placeholder="Chat name">
			  </div>
				<div class="box">
					<input type="password" id="password" name="password" placeholder="Password">
				</div>
				<div class="box">
					<input type="password" id="password-confirmation" name="password-confirmation" placeholder="Password Confirm">
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