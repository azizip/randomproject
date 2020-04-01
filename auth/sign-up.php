<?php 
// activate session php
session_start();

include '../config/conn.php';

// get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];
if (isset($_POST['user_signup'])) {
	$role = 'Customer';
}

// Looking for username in db
$row = $dbconnect->query("SELECT * FROM user WHERE username= '$username'");

//Fetch data
$data = $row->fetch();

if($row->rowCount() > 0){
	header("location:../views/sign-up.php?message=failed");
}else{
	$row = $dbconnect->query("INSERT INTO user (name, phone, address, username, password, role) VALUES ('$name','$phone','$address','$username','$password','$role')");
	if ($row) {
		header("location:../views/login.php?message=success");
	}else{
		header("location:../views/sign-up.php?message=something_wrong");	
	}
	
}
?>