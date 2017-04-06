<?php
	$user = "root";
	$pass = "root";
	$url = "localhost";
	$db = "db_chantry";

	/*stores all link info in an array*/
	/*$config = array(
		"mysql_server" => "localhost",
		"mysql_user" => "root",
		"mysql_password" => "root",
	"mysql_db" => "db_chantry";
	);*/

	$link = mysqli_connect($url, $user, $pass, $db, "8889"); //Mac
	//$link = mysqli_connect($url, $user, $pass, $db); //PC

	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
