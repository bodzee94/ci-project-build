<?php
	include ('connect.php');

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);

	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}

	$mysqli->set_charset("utf8");

	$gallery = $_GET["gall"];

	$query = "SELECT * FROM tbl_gallery WHERE gallery_title='$gallery' AND gallery_full='$gallery' AND gallery_photographer ='$gallery'";

	$result = mysqli_query($mysqli, $query);

	echo json_encode(mysqli_fetch_assoc($result));
?>
