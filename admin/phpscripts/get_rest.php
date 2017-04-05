<?php

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}


	$mysqli->set_charset("utf8");

	$rest = $_GET["restoration_id"];
	$restquery = "SELECT * FROM tbl_restoration WHERE restoration_id = $rest";
	$result = mysqli_query($mysqli, $restquery);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);



?>
