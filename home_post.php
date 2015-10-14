<?php
session_start();
require_once('inc/config.php');
require_once('inc/database.php');

$chat_id = $_SESSION['chat-id'];
$messages = $_POST['message'];

function chat_name($chat_id) {
  require(ROOT_PATH . 'inc/database.php');
  
  try {
		$chat_name = $db->prepare('SELECT chatname FROM user_pass WHERE id = ?');
		$chat_name->bindParam(1,$chat_id);
		$chat_name->execute();
			foreach ($chat_name as $ch) {
				$name = $ch['chatname'];
				return $name;
	    }
  } catch (Exception $e) {
    echo "Data was not retrieved from the database successfully.";
    exit;
  }
}

$name = chat_name($chat_id);

$chat_msg = $db->prepare('INSERT INTO home_chat (chat_id,chat_name,chatmessage)	VALUES (?,?,?)');
$chat_msg->bindParam(1,$chat_id);
$chat_msg->bindParam(2,$name);
$chat_msg->bindParam(3,$messages);
$chat_msg->execute();

echo $messages;