<?php 
	session_start();
	include "../config/conn.php";

	$id_order = null;
	$id_user = $_SESSION['id_user'];
	$id_pracktis = $_POST['id_pracktis'];
	$amount = $_POST['amount'];

	$row = $dbconnect->query("SELECT price FROM pracktis WHERE id_pracktis = '$id_pracktis'");
	$data = $row->fetch();
	$price = $amount*$data['price'];

	$order_date = date('Y-m-d');
	$payment_status = 'Waiting for payment';

	$row = $dbconnect->query("INSERT INTO order_data VALUES ('$id_order', '$id_user', '$id_pracktis', '$amount', '$price', '$order_date', '$payment_status')");
	
	header("location:../views/customer/my-order.php?page=1A");
?>