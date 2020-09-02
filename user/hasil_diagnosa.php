<?php 

require 'header.php';

$hasil = query("SELECT * FROM konsultasi ORDER BY id DESC")[0];

$p1 = query("SELECT * FROM penyakit WHERE id_penyakit = 'P01'")[0];
$p2 = query("SELECT * FROM penyakit WHERE id_penyakit = 'P02'")[0];
$p3 = query("SELECT * FROM penyakit WHERE id_penyakit = 'P03'")[0];
$p4 = query("SELECT * FROM penyakit WHERE id_penyakit = 'P04'")[0];


$sp1 = query("SELECT * FROM solusi WHERE id_penyakit LIKE '%P01%'");
$sp2 = query("SELECT * FROM solusi WHERE id_penyakit LIKE '%P02%'");
$sp3 = query("SELECT * FROM solusi WHERE id_penyakit LIKE '%P03%'");
$sp4 = query("SELECT * FROM solusi WHERE id_penyakit LIKE '%P04%'");



 ?>
 	<section id="main-content">
		<section class="wrapper">
			<form action="" method="post">
			<div class="form-w3layouts">
				<div class="row">
	                <div class="col-lg-12">
	                    <section class="panel">
	                        <header class="panel-heading">
	                            DATA USER
	                        </header>
	                        <div class="panel-body" style="padding: 50px;padding-top: 10px;">
	                            <div class=" form">
	                                <div class="cmxform form-horizontal ">
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">Nama</label>
	                                        <div class="col-lg-6">
	                                            : <?= $hasil['nama']; ?>
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">Umur</label>
	                                        <div class="col-lg-6">
	                                            : <?= $hasil['umur']; ?>
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">Jenis Kelamin</label>
	                                        <div class="col-lg-6">
	                                            : <?= $hasil['jk']; ?>
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">Alamat</label>
	                                        <div class="col-lg-6">
	                                            : <?= $hasil['alamat'] ?>
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">Tanggal Konsultasi</label>
	                                        <div class="col-lg-6">
	                                            : <?= $hasil['tgl'] ?> 
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">Tingkat Kepastian</label>
	                                        <div class="col-lg-6">
	                                            : <?= $hasil['hasil_max']; ?> %
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                    	<?php 

												if ($hasil['id_penyakit'] === 'P01') {
													echo "<b>Terdiagnosa Penyakit : ";
													echo $p1['nm_penyakit']."</b>";
													echo "<br>Yaitu : ";
													echo $p1['ket']."</b>";
													echo "<hr style='border: 1px solid black;'><h1>Penanganan yang akan dilakukan : </h1><br>";
													$no = 1;
													foreach ($sp1 as $row) :  

													 echo $no;
													 echo ". ";
													 echo $row['solusi'];
													 echo "<br>";

													 $no++;
													endforeach;
												}elseif ($hasil['id_penyakit'] === 'P02') {
													echo "<b>Terdiagnosa Penyakit : ";
													echo $p2['nm_penyakit']."</b>";
													echo "<br>Yaitu : ";
													echo $p2['ket']."</b>";
													echo "<hr style='border: 1px solid black;'><h1>Penanganan yang akan dilakukan : </h1><br>";
													$no = 1;
													foreach ($sp2 as $row) :  

													 echo $no;
													 echo ". ";
													 echo $row['solusi'];
													 echo "<br>";

													 $no++;
													endforeach;
												}elseif ($hasil['id_penyakit'] === 'P03') {
													echo "<b>Terdiagnosa Penyakit : ";
													echo $p3['nm_penyakit']."</b>";
													echo "<br>Yaitu : ";
													echo $p3['ket']."</b>";
													echo "<hr style='border: 1px solid black;'><h1>Penanganan yang akan dilakukan : </h1><br>";
													$no = 1;
													foreach ($sp3 as $row) :  

													 echo $no;
													 echo ". ";
													 echo $row['solusi'];
													 echo "<br>";

													 $no++;
													endforeach;
												}elseif ($hasil['id_penyakit'] === 'P04') {
													echo "<b>Terdiagnosa Penyakit : ";
													echo $p4['nm_penyakit']."</b>";
													echo "<br>Yaitu : ";
													echo $p4['ket']."</b>";
													echo "<hr style='border: 1px solid black;'><h1>Penanganan yang akan dilakukan : </h1><br>";
													$no = 1;
													foreach ($sp4 as $row) :  

													 echo $no;
													 echo ". ";
													 echo $row['solusi'];
													 echo "<br>";

													 $no++;
													endforeach;
												}

											?>

											<!-- <h1>Penanganan yang akan dilakukan :</h1>
												<?php 
												$no = 1;
												foreach ($sp7 as $row) :  

												 echo $no;
												 echo ". ";
												 echo $row['solusi'];
												 echo "<br>";

												 $no++;
												endforeach 
												?> -->
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </section>
	                </div>
	            </div>
	        </div>

	<!-- <label>Nama : <?= $hasil['nama']; ?></label><br>
	<label>Umur : <?= $hasil['umur']; ?></label><br>
	<label>Jenis Kelamin : <?= $hasil['jk']; ?></label><br>
	<label>Alamat : <?= $hasil['alamat'] ?></label><br>
	<label>Tanggal Konsultasi : <?= $hasil['tgl'] ?></label><br>
	<label>Tingkat Kepastian : <?= $hasil['hasil_max']; ?> %</label><br> -->

	
</body>
</html>