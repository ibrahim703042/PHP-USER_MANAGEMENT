
<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "event";


try{

	$dbconnection = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$dbconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){

	echo $e->getMessage();
}

$bdd=new PDO('mysql:host=localhost;dbname=event;charset=utf8','root','');
$conn = mysqli_connect("localhost","root","","event");

?>