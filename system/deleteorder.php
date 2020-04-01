<?php 
	session_start();
	include "../config/conn.php";

	$id_order = $_GET['id'];

	$row = $dbconnect->query("DELETE FROM order_data WHERE id_order='$id_order'");
	
	if ($_SESSION['role'] == 'Customer') {
		header("location:../views/customer/my-order.php");
	}else{
		header("location:../views/admin/order.php");
	}
?>