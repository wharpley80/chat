<?php

require_once('inc/config.php');
require_once('inc/database.php');

if (isset($_POST['new-chatname'])) {
  $pre_newchatname = trim($_POST['new-chatname']);

	try {
		$check_name = $db->prepare('SELECT chatname FROM user_pass WHERE chatname = ?');
		$check_name->bindParam(1,$pre_newchatname);
		$check_name->execute();
	} catch (Exception $e) {
		echo 'Data could not be retrieved from the database 24.';
		exit;
	}

	$user_check = $check_name->rowCount();

  if ($user_check == 0) {
		$valid = "true";
	} else {
		$valid = "false";
	}

	echo $valid;

}