<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

	function redirect_to($location) {
		if($location != NULL) {
			header("Location:{$location}");
			exit;
		}
	}

	function addEvent($event_month,$event_day,$event_title,$event_details) {

		include('connect.php');
		$event_month = mysqli_real_escape_string($link,$event_month);
		$event_day = mysqli_real_escape_string($link,$event_day);
		$event_title = mysqli_real_escape_string($link,$event_title);
		$event_details = mysqli_real_escape_string($link,$event_details);

			$qstring = "INSERT INTO tbl_events VALUES(NULL, '{$event_month}', '{$event_day}', '{$event_title}', '{$event_details}')";
			$result = mysqli_query($link, $qstring);

			if($result==1){

			$qstring2 = "SELECT * FROM tbl_events ORDER BY event_id ASC LIMIT 1";
			$result2 = mysqli_query($link, $qstring2);

			$row = mysqli_fetch_array($result2);
			$lastID = $row['event_id'];

			}

			redirect_to("../admin_index.php");

		}

		function addPhoto($gallery_title,$gallery_thumb,$gallery_full,$gallery_photographer) {

			include('connect.php');

			$gallery_title = mysqli_real_escape_string($link, $gallery_title);
				$gallery_thumb = mysqli_real_escape_string($link, $gallery_thumb);
			$gallery_full = mysqli_real_escape_string($link, $gallery_full);
			$gallery_photographer = mysqli_real_escape_string($link, $gallery_photographer);


			if($_FILES['gallery_full']['type'] === "image/jpg" || $_FILES['gallery_full']['type'] === "image/jpeg" || $_FILES['gallery_thumb']['type'] === "image/jpg" || $_FILES['gallery_thumb']['type'] === "image/jpeg"){

			$targetpath = "../images/{$gallery_full}";
			$targetpath2 = "../images/{$gallery_thumb}";

			if(move_uploaded_file($_FILES['gallery_full']['tmp_name'],$targetpath || $_FILES['gallery_thumb']['tmp_name'],$targetpath2 )){ //tmp_name assigns a temporary name and directory for the file

				$orig = "../images/".$gallery_full;
				$thumb = "../images/".$gallery_thumb;


				if(!copy($orig,$thumb)) {

				echo "Failed to copy...";

				}


				$qstring3 = "INSERT INTO tbl_gallery VALUES(NULL, '{$gallery_title}', '{$gallery_thumb}', '{$gallery_full}', '{$gallery_photographer}')";
				$result3 = mysqli_query($link, $qstring3);

				if($result3==1){

				$qstring4 = "SELECT * FROM tbl_gallery ORDER BY gallery_id DESC LIMIT 1";
				$result4 = mysqli_query($link, $qstring4);

				$row2 = mysqli_fetch_array($result4);
				$lastID2 = $row2['gallery_id'];

				}

				redirect_to("../admin_index.php");

			}
}
}




			function addNews($news_headline,$news_image,$news_description,$news_date) {

				include('connect.php');

				$news_headline = mysqli_real_escape_string($link, $news_headline);
				$news_image = mysqli_real_escape_string($link, $news_image);
				$news_description = mysqli_real_escape_string($link, $news_description);
				$news_date = mysqli_real_escape_string($link, $news_date);

				if($_FILES['news_image']['type'] === "image/jpg" || $_FILES['news_image']['type'] === "image/jpeg"){ //.jpgs have two separate extension names, and you need to use them both

				$targetpath = "../images/{$news_image}"; //target path depends on which file the upload was called from. ex. admin_addMovie has to go up a folder.

				if(move_uploaded_file($_FILES['news_image']['tmp_name'],$targetpath)){ //tmp_name assigns a temporary name and directory for the file

					$orig = "../images/".$news_image;


					if(!copy($orig,$news_image)) {

					echo "Failed to copy...";

					}

					$qstring5 = "INSERT INTO tbl_news VALUES(NULL, '{$news_headline}', '{$news_image}', '{$news_description}', '{$news_date}')";
					$result5 = mysqli_query($link, $qstring5);

					if($result5==1){

					$qstring6 = "SELECT * FROM tbl_news ORDER BY news_id DESC LIMIT 1";
					$result6 = mysqli_query($link, $qstring6);

					$row3 = mysqli_fetch_array($result6);
					$lastID3 = $row3['news_id'];

					}


					redirect_to("../admin_index.php");

				}

}
}


function addTourInfo($tour_rate,$tour_info,$tour_notes) {

	include('connect.php');
	$tour_rate = mysqli_real_escape_string($link,$tour_rate);
	$tour_info = mysqli_real_escape_string($link,$tour_info);
	$tour_notes = mysqli_real_escape_string($link,$tour_notes);


		$qstring7 = "INSERT INTO tbl_tours VALUES(NULL, NULL, '{$tour_year}', '{$tour_month}', '{$tour_days}', '{$tour_time}', '{$tour_rate}', '{$tour_info}', '{$tour_notes}')";
		$result7 = mysqli_query($link, $qstring7);

		if($result7==1){

		$qstring8 = "SELECT * FROM tbl_tours ORDER BY tour_id DESC LIMIT 1";
		$result8 = mysqli_query($link, $qstring8);

		$row4 = mysqli_fetch_array($result8);
		$lastID4 = $row4['tour_id'];

		}

		redirect_to("../admin_index.php");

	}


	function addVol($volunteer_name,$volunteer_title,$volunteer_date_started) {

		include('connect.php');
		$volunteer_name = mysqli_real_escape_string($link,$volunteer_name);
		$volunteer_title = mysqli_real_escape_string($link,$volunteer_title);
		$volunteer_date_started = mysqli_real_escape_string($link,$volunteer_date_started);


			$qstring9 = "INSERT INTO tbl_volunteers VALUES(NULL,'{$volunteer_name}', '{$volunteer_title}', '{$volunteer_date_started}')";
			$result9 = mysqli_query($link, $qstring9);

			if($result9==1){

			$qstring10 = "SELECT * FROM tbl_volunteers ORDER BY volunteer_id DESC LIMIT 1";
			$result10 = mysqli_query($link, $qstring10);

			$row5 = mysqli_fetch_array($result10);
			$lastID5 = $row5['volunteer_id'];

			}

			redirect_to("../admin_index.php");

		}


	function mailUser($fname, $lname, $username, $email, $password) {

	include('connect.php');

	$url = "www.msmedia.ca/ci-project-build-master/admin_login.php";

	$admin = "m_susi@fanshaweonline.ca";

	$subject = "Welcome to the site, '{$fname}' '{$lname}'!";

	$message = "Your admin account is now active.\n\n Your username is '{$username}', and your temporary password is '{$password}'; you can log in at '{$url}'.\n\n If you do not remember signing up, please contact us at '{$admin}'.\n\n Have a nice day.";

	mail($email, $subject, $message);


	mysqli_close($link);
}

?>
