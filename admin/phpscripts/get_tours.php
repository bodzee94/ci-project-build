<?php

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}


	$mysqli->set_charset("utf8");

	$tours = $_GET["tour_id"];
	$toursquery = "SELECT * FROM tbl_tours WHERE tour_id = $tours";
	$result = mysqli_query($mysqli, $toursquery);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);



?>
