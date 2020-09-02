<?php 
    session_start();

    if (isset($_SESSION["logAdmin"])) {
        header("Location: admin/");
        exit;
    }
    if (isset($_SESSION["logUser"])) {
        header("Location: user/");
        exit;
    }

require 'assets/module/koneksi.php';

if (isset($_POST["btn_login"])) {

	$username = $_POST["username"];
    $password = $_POST["password"];
    $level = $_POST["level"];

    // echo "<script>
    //                     alert('$username!');
    //                   </script>";

    if ($level === "admin") {
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND level= '$level'");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if(password_verify($password, $row["password"])){

                $_SESSION["logAdmin"] = $row["id"];
                echo "<script> document.location.href = 'admin/'; </script>";
                exit;
            }else{
                echo "<script>
                    alert('Password Anda Salah!');
                     </script>";
                }
        }else{
                echo "<script>
                        alert('Username Anda Salah!');
                      </script>";
        }
    }
    if ($level === "user") {
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND level= '$level'");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if(password_verify($password, $row["password"])){

                $_SESSION["logUser"] = $row["id"];
                echo "<script> document.location.href = 'user/'; </script>";
                exit;
            }else{
                echo "<script>
                    alert('Password Anda Salah!');
                     </script>";
                }
        }else{
                echo "<script>
                        alert('Username Anda Salah!');
                      </script>";
        }
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
            <h2>SILAKAN LOGIN</h2>

            <form action="" method="post">
                <input type="text" class="ggg" name="username" placeholder="USERNAME" required>
                <input type="password" class="ggg" name="password" placeholder="PASSWORD" required>
                <input id="user" type="radio" name="level" value="user" checked> <label for="user" style="color: white;">User</label> &nbsp;&nbsp;&nbsp;
                <input id="admin" type="radio" name="level" value="admin"> <label for="admin" style="color: white;">Admin</label>

                <div class="clearfix"></div>
                <input type="submit" value="Sign In" name="btn_login">
          </form>
            <p>Belum Punya Akun ?<a href="register.php">Klik Disini</a></p>
            <p> <a href="panduan.pdf"> Petunjuk Sistem </a></p>
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