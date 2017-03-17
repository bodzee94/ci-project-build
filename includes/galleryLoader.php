<?php
	include 'connect.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	$mysqli->set_charset("utf8");

	$query = "SELECT * FROM tbl_gallery WHERE gallery_title ='$gall'";

	$gall= $_GET['gall'];

	$result = mysqli_query($mysqli, $query);

	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}

	echo json_encode(mysqli_fetch_assoc($result));
?>
