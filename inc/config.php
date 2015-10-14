<?php

define("LOCALHOST", $_SERVER["SERVER_NAME"] == "localhost");

if (LOCALHOST) {
	define("BASE_URL", "/chat/");
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/chat/");

	define("DB_HOST", "localhost");
	define("DB_NAME", "sports_chat");
	define("DB_PORT", "3306"); 
	define("DB_USER", "root");
	define("DB_PASS", "root");
} else {
	// Production
	define("BASE_URL", "/");
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");
	
	define("DB_HOST", "localhost");
	define("DB_NAME", "sports_chat");
	define("DB_PORT", "3306"); 
	define("DB_USER", "wharpley1980");
	define("DB_PASS", "wotco712");
}
