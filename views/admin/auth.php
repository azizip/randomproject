<?php 
	include '../../config/conn.php';

	//Check login status
	if (isset($_SESSION['status'])) {
		if ($_SESSION['role'] != 'Admin') {
			header("location: ../".$_SESSION['role']."/home.php?page=home");
			isset($_SESSION['status']);
		}
	}else{
		header("location: ../login.php?message=not_logged_in");
	}

?>