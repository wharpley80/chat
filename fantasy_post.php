<?php
session_start();
require_once('inc/config.php');
require_once(ROOT_PATH . 'inc/database.php');

$chat_id = $_SESSION['chat-id'];
$fant_message = $_POST['messageFant'];

function chat_name_fant($chat_id) {
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

$fant_name = chat_name_fant($chat_id);

$chat_msg = $db->prepare('INSERT INTO fantasy_chat (chat_id,chat_name,chatmessage)	VALUES (?,?,?)');
$chat_msg->bindParam(1,$chat_id);
$chat_msg->bindParam(2,$fant_name);
$chat_msg->bindParam(3,$fant_message);
$chat_msg->execute();
