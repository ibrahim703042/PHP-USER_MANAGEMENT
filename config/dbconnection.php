
<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','php_user_management');
// Establish database connection.

try{
	$dbconnection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_DATABASE,DB_USER, DB_PASSWORD);
	$dbconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
	
	exit("Error: " . $e->getMessage());
}

$con = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

?>