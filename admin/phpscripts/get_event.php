<?php

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}


	$mysqli->set_charset("utf8");

	$event = $_GET["event_id"];
	$eventquery = "SELECT * FROM tbl_events WHERE event_id = $event";
	$result = mysqli_query($mysqli, $eventquery);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);



?>
