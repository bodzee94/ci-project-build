<?php

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}


	$mysqli->set_charset("utf8");

	$about = $_GET["about_id"];
	$aboutquery = "SELECT * FROM tbl_about WHERE about_id = $about";
	$result = mysqli_query($mysqli, $aboutquery);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);



?>
