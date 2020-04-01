<?php 
// activate session php
session_start();

include '../config/conn.php';

// get form data
$username = $_POST['username'];
$password = $_POST['password'];

// select data that match with input
$row = $dbconnect->query("SELECT * FROM user WHERE username= '$username' and password= '$password'");

// get data
$data = $row->fetch();

if($row->rowCount() > 0){
	$_SESSION['name'] = $data['name'];
	$_SESSION['role'] = $data['role'];
	$_SESSION['username'] = $username;
	$_SESSION['id_user'] = $data['id_user'];
	$_SESSION['status'] = "login";
	header("location:../views/".$_SESSION['role']."/home.php?page=home");
}else{
	header("location:../views/login.php?message=failed");
}
?>