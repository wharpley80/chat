<?php

require_once('inc/config.php');
require_once('inc/database.php');

if (isset($_POST['chatname']) && isset($_POST['password'])) {
	$valid_chatname = trim($_POST['chatname']);
	$valid_password = trim($_POST['password']);
	$valid_password = hash("sha256", $valid_password);

	try {
      $validate_pass = $db->prepare('SELECT chatname FROM user_pass WHERE chatname = ? AND password = ?');
      $validate_pass->bindParam(1,$valid_chatname);
			$validate_pass->bindParam(2,$valid_password);
      $validate_pass->execute();
   } catch (Exception $e) {
      echo 'Data could not be retrieved from the database 25.';
      exit;
   }
	
   $pass_valid = $validate_pass->rowCount();

	 if ($pass_valid == 0) {
		$valid_pass = "false";
	 } else {
		$valid_pass = "true";
	 }

		echo $valid_pass;

}
