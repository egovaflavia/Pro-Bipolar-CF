<?php 

session_start();

if (!isset($_SESSION["logAdmin"])) {
	header("Location: ../");
	exit;
}

require '../assets/module/koneksi.php';
require '../assets/module/functions.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css" >
	<link href="../assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href="../assets/css/style-responsive.css" rel="stylesheet"/>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../assets/css/font.css" type="text/css"/>
	<link href="../assets/css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="../assets/css/morris.css" type="text/css"/>
	<link rel="stylesheet" href="../assets/css/monthly.css">
	<script src="../assets/js/jquery2.0.3.min.js"></script>
	<script src="../assets/js/raphael-min.js"></script>
	<script src="../assets/js/morris.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/datepicker/css/bootstrap-datepicker3.css">
</head>
<body>
	<section id="container">
		<!--header start-->
        
		<!--header end-->

		<!--sidebar start-->
		
		    <div id="sidebar" class="nav-collapse">
		        <!-- sidebar menu start-->
		        <div class="leftside-navigation">
		            <ul class="sidebar-menu" id="nav-accordion">
		                <li>
		                    <a href="index.php">
		                        <i class="fa fa-th"></i>
		                        <span>Home</span>
		                    </a>
		                </li>
                        <li>
		                    <a href="penyakit.php">
		                        <i class="fa fa-book"></i>
		                        <span>Penyakit</span>
		                    </a>
		                </li>
                        <li>
		                    <a href="gejala.php">
		                        <i class="fa fa-book"></i>
		                        <span>Gejala</span>
		                    </a>
		                </li>
		                <li>
		                    <a href="solusi.php">
		                        <i class="fa fa-book"></i>
		                        <span>Penanganan</span>
		                    </a>
		                </li>
		                <li>
		                    <a href="user.php">
		                        <i class="fa fa-user"></i>
		                        <span>User</span>
		                    </a>
		                </li>
		                <li>
		                    <a href="laporan.php">
		                        <i class=" fa fa-bar-chart-o"></i>
		                        <span>Laporan</span>
		                    </a>
		                </li>
                                                <li>
		                    <a href="help.php">
		                        <i class="fa fa-book"></i>
		                        <span>About Sistem</span>
                                
		                    </a>
		                </li>

                        <li>
			            <a  href="logout.php">
                        <i class="fa fa-key">
                        </i><span>Log Out</span></a>
			        </li>
		            </ul>            
		        </div>
		        <!-- sidebar menu end-->
		    </div>
		</aside>
		<!--sidebar end-->

		
