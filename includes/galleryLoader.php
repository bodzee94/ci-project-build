<?php
	include 'connect.php';

	$mysqli->set_charset("utf8");

	$gallImg= $_GET['gallery_id'];
	$gallThumb = $_GET['gallery_thumb'];
	$gallTitle = $_GET['gallery_title'];
	$gallFull = $_GET['gallery_full'];
	$gallPhoto = $_GET['gallery_photographer'];

	$query = "SELECT * FROM tbl_gallery WHERE gallery_id ='$gallImg'";

	$result = mysqli_query($mysqli, $query);
	$row = mysqli_fetch_assoc($result);

	echo json_encode($row);
?>
