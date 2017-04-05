<?php

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}


	$mysqli->set_charset("utf8");

	$photos = $_GET["gallery_id"];
	$photosquery = "SELECT * FROM tbl_gallery WHERE gallery_id = $photos";
	$result = mysqli_query($mysqli, $photosquery);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);



?>
