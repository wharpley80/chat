<?php

require_once('inc/config.php');
require_once('inc/database.php');

if (isset($_POST['chatname'])) {
  $valid_chatname = trim($_POST['chatname']);

    try {
      $validate_name = $db->prepare('SELECT chatname FROM user_pass WHERE chatname = ?');
      $validate_name->bindValue(1,$valid_chatname);
      $validate_name->execute();
    } catch (Exception $e) {
      echo "Data was not retrieved from the database successfully 26.";
      exit;
    }

    $user_valid = $validate_name->rowCount();

	  if ($user_valid == 0) {
			$valid_name = "false";
		} else {
			$valid_name = "true";
		}

		echo $valid_name;

}
  
