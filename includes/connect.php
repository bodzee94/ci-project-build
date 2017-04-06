<?php
/*set up links and permissions*/

/*set up for PC. Seperates everything*/
$url = "localhost";
$db = "db_chantry";
$user = "root";
$password = "";

/*stores all link info in an array*/
/*$config = array(
	"mysql_server" => "localhost",
	"mysql_user" => "root",
<<<<<<< HEAD
	"mysql_password" => "root",
"mysql_db" => "db_chantry";
);
=======
	"mysql_password" => "",
	"mysql_db" => "db_chantry"
);*/

$mysqli = mysqli_connect($url, $db, $user, $password); //PC
//$mysqli = mysqli_connect($url, $db, $user, $password, '8888'); //Mac

/*Checks if connection is sound and gives error if it doesn't work */
if(mysqli_connect_errno()) {
	printf("Connect failed: %n", mysqli_connect_error());
	exit();
}
>>>>>>> f45ec2c3ce5287ca0a7e4777cbbeeb23e48594cd
?>
