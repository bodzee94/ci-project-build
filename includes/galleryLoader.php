<?php
	include 'connect.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	$mysqli->set_charset("utf8");

	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}

	$query = "SELECT * FROM tbl_gallery WHERE gallery_id ='$galleryImg'";

	$galleryImg= $_GET['gallery_id'];
	$gallTitle = $_GET['gallery_title'];
	$gallThumb = $_GET['gallery_thumb'];
	$gallFull = $_GET['gallery_full'];
	$gallPhoto = $_GET['gallery_photographer'];


	$result = mysqli_query($mysqli, $query);
	$row = mysqli_fetch_assoc($result);

	echo json_encode($row);
?>
