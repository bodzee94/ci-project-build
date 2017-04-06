<?php
	include 'connect.php';

	$link->set_charset("utf8");

	$gall_id= $_GET['gallery_id'];
	$gall_thumb = $_GET['gallery_thumb'];
	$gall_title = $_GET['gallery_title'];
	$gall_full = $_GET['gallery_full'];
	$gall_photo = $_GET['gallery_photographer'];

	$query = "SELECT * FROM tbl_gallery WHERE gallery_id ='$gall_id'";

	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_assoc($result);

	echo json_encode($row);
?>
