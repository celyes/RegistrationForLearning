<?php 
session_start();
// define credentials 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DATABASE', 'test');


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

if(!$mysqli){
	echo "Unable to connect to database" . PHP_EOL;
	echo "Debugging error: " . $mysqli->connect_error() . PHP_EOL;
	exit;
}

