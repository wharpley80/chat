<?php
session_start();
require_once('inc/config.php');
require_once('inc/database.php');

$message = $db->query('SELECT * FROM fantasy_chat ORDER BY id DESC');

foreach ($message as $msg) { 
	echo '<div class="chatchat2">' . '<span id="name">' . "$msg[chat_name]: " . '</span>' . '<span id="namemsg">' . "$msg[chatmessage]" . '</span>'. ' ' . '<span id="time">' . date('g:i a D', strtotime($msg['last_activity'])) .'</span>' . '</div>';
}
?>