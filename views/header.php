<?php include '../config/page.php'; include '../auth/auth.php';  include '../config/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>CV 05</title>

	<!-- Custom fonts for this template-->
	<link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="../assets/css/sb-admin-2-ram.css" rel="stylesheet">

	<!-- DATA TABLE CSS -->
	<link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

    	<!-- Sidebar -->
    	<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    		<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
				<div class="sidebar-brand-icon rotate-n-15">
				</div>
				<div class="sidebar-brand-text mx-3"><img src="../assets/img/logo1.jpg" width="35%"></div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item <?php if (isset($menu0)) echo $menu0 ?>">
				<a class="nav-link" href="home.php?page=home">
				  <i class="fas fa-fw fa-home"></i>
				  <span>Home</span></a>
			</li>

		    <!-- Divider -->
		    <hr class="sidebar-divider">

		    <!-- Sidebar Toggler (Sidebar) -->
		    <div class="text-center d-none d-md-inline">
		        <button class="rounded-circle border-0" id="sidebarToggle"></button>
		    </div>

	    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
	    <div id="content-wrapper" class="d-flex flex-column">

		    <!-- Main Content -->
		    <div id="content">

		        <!-- Topbar -->
		        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

			        
			        <!-- Sidebar Toggle (Topbar) -->
			        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
			        	<i class="fa fa-bars"></i>
			        </button>

			        <!-- Topbar Navbar -->
			        <ul class="navbar-nav ml-auto">
		         

			            <div class="topbar-divider d-none d-sm-block"></div>

			            
			            <li class="nav-item">
			            	<a class="nav-link" href="login.php">
			            		<span class="mr-2 d-none d-lg-inline small"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>Login</span>
			            	</a>
			            </li>

		        	</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">