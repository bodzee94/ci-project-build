<?php
	$user = "msmed608_admin";
	$pass = "@MacBookPro2";
	$url = "msmedia.ca";
	$db = "msmed608_db_chantry";


	$link = mysqli_connect($url, $user, $pass, $db);

	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
