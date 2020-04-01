<?php 
	session_start();
	include "../config/conn.php";

	$id_pracktis = $_POST['id_pracktis'];
	$engine_name = $_POST['engine_name'];
	$dimension = $_POST['dimension'];
	$output = $_POST['output'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];

	$row = $dbconnect->query("UPDATE pracktis SET engine_name='$engine_name', dimension='$dimension', output='$output', price='$price', stock='$stock' WHERE id_pracktis='$id_pracktis'");
	
	header("location:../views/admin/pracktis.php?page=1A");
?>