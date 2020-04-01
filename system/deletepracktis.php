<?php 
	session_start();
	include "../config/conn.php";

	$id_pracktis = $_GET['id'];

	$row =$dbconnect->query("DELETE FROM pracktis WHERE id_pracktis='$id_pracktis'");
	
	header("location:../views/admin/pracktis.php?page=1A");
?>
