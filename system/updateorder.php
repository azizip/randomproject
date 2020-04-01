<?php 
	session_start();
	include "../config/conn.php";

	$id_order = $_POST['id_order'];
	$payment_status = $_POST['payment_status'];
	
	$row = $dbconnect->query("UPDATE order_data SET payment_status='$payment_status' WHERE id_order='$id_order'");
	
	header("location:../views/admin/order.php?page=2A");
?>