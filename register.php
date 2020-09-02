<?php 

require 'assets/module/koneksi.php';
require 'assets/module/functions.php';

if (isset($_POST["btn_register"])) {
	if (tUser($_POST) > 0 ) {
    echo "
          <script>
          alert('Anda Berhasil Registrasi');
          document.location.href = 'index.php';
          </script>";
	}else{
	    echo"<script>
	        alert('Anda Gagal Registrasi');
	        document.location.href = 'index.php';
	      </script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>halaman Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href="assets/css/style-responsive.css" rel="stylesheet"/>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/font.css" type="text/css"/>
	<link href="assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
	<div class="reg-w3">
		<div class="w3layouts-main">
			<h2>FORM DAFTAR</h2>
			<form action="" method="post">
				<input class="ggg" type="text" name="username" required placeholder="USERNAME">
				<input class="ggg" type="password" name="password" required placeholder="PASSWORD">
				<input class="ggg" type="password" name="password2" required placeholder="KONFIRMASI PASSWORD">
				<input class="ggg" type="text" name="nama" required placeholder="NAMA">
				<input class="ggg" type="text" name="umur" required placeholder="UMUR">
				<input id="laki" type="radio" name="jk" value="Laki-laki" required> <label for="laki">Laki-laki</label> &nbsp;&nbsp;&nbsp;
				<input id="perem" type="radio" name="jk" value="Perempuan" required> <label for="perem">Perempuan</label>
				<input class="ggg" type="text" name="email" required placeholder="EMAIL">
				<input class="ggg" type="text" name="alamat" required placeholder="ALAMAT">
				<input type="text" name="level" value="user" hidden>
				<input type="text" name="tgl" value="<?= date('d-m-Y'); ?>" hidden>

				<div class="clearfix"></div><div class="clearfix"></div>
				<input type="submit" value="DAFTAR" name="btn_register">
                
			</form>
		</div>
	</div>
            	
	<script src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/jquery.slimscroll.js"></script>
	<script src="assets/js/jquery.nicescroll.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
	<script src="assets/js/jquery.scrollTo.js"></script>
</body>
</html>