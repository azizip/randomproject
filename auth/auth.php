<?php 
	include '../config/conn.php';
	session_start();
	//Check login status
	if (isset($_SESSION['status'])) {
		header("location: http://localhost/enstirling/views/".$_SESSION['role']."/home.php?page=home");
	}
?>