<?php

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}


	$mysqli->set_charset("utf8");

	$news = $_GET["news_id"];
	$newsquery = "SELECT * FROM tbl_news WHERE news_id = $news";
	$result = mysqli_query($mysqli, $newsquery);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);



?>
