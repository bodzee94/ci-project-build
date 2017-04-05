<?php

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}


	$mysqli->set_charset("utf8");

	$tourinfo = $_GET["tourinfo_id"];
	$tourinfoquery = "SELECT * FROM tbl_tourinfo WHERE tourinfo_id = $tourinfo";
	$result = mysqli_query($mysqli, $tourinfoquery);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);



?>
