<?php 

require 'header.php';


	if (isset($_POST["btn_diagnosa"])) {
		if (diagnosa($_POST) > 0 ) {
	    echo "
	          <script>
	          alert('Klik Ok Untuk Melihat Diagnosa');
	          document.location.href = 'hasil_diagnosa.php';
	          </script>";
		}else{
		    echo"<script>
		        alert('Gagal Mendiagnosa');
		        document.location.href = '';
		      </script>";
		}
	}

$dgjl = query("SELECT * FROM gejala ORDER BY id_gejala ASC");
$pasien = query("SELECT * FROM user WHERE id = '$_SESSION[logUser]'")[0];

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
	                        <div class="panel-body">
	                            <div class=" form">
	                                <div class="cmxform form-horizontal ">
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">Nama</label>
	                                        <div class="col-lg-6">
	                                            <input class="form-control" type="hidden" name="nama" value="<?= $pasien['nama']; ?>">
	                                            <input class="form-control" type="text" value="<?= $pasien['nama']; ?>" disabled>
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">Umur</label>
	                                        <div class="col-lg-6">
	                                            <input type="hidden" name="umur" value="<?= $pasien['umur']; ?>" class="form-control">
	                                            <input type="text" value="<?= $pasien['umur']; ?>" class="form-control" disabled>
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">Jenis Kelamin</label>
	                                        <div class="col-lg-6">
	                                            <input type="hidden" name="jk" value="<?= $pasien['jk']; ?>" class="form-control">
	                                            <input type="text" value="<?= $pasien['jk']; ?>" class="form-control" disabled>
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">Email</label>
	                                        <div class="col-lg-6">
	                                            <input type="hidden" name="email" value="<?= $pasien['email']; ?>" class="form-control">
	                                            <input type="text" value="<?= $pasien['email']; ?>" class="form-control" disabled>
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">Alamat</label>
	                                        <div class="col-lg-6">
	                                            <input type="hidden" name="alamat" value="<?= $pasien['alamat']; ?>" class="form-control">
	                                            <input type="text" value="<?= $pasien['alamat']; ?>" class="form-control" disabled>
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">Tanggal</label>
	                                        <div class="col-lg-6">
	                                            <input type="hidden" name="tgl" value="<?= $pasien['tgl']; ?>" class="form-control"> 
	                                            <input type="text" value="<?= $pasien['tgl']; ?>" class="form-control" disabled> 
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </section>
	                </div>
	            </div>
	        </div>

			<div class="table-agile-info">
				<div class="panel panel-default">
				    <div class="panel-heading">
				     Gejala
				    </div>
				    <div>
						<table class="table" ui-jq="footable" ui-options='{
								"paging": {
					          	"enabled": true
					        },
					        	"filtering": {
					          	"enabled": true
					        },
					        	"sorting": {
					          	"enabled": true
					        }}'>
					        <thead>
					          <tr>
					            <th data-breakpoints="xs">No</th>
					            <th>ID Gejala</th>
								<th>Keterangan Gejala</th>
								<th style="width: 200px;">Jawaban</th>
					          </tr>
					        </thead>
					        <?php 
								$no = 1;
								foreach ($dgjl as $row) :
							?>
					        <tbody>
					        	<tr>
									<td><?= $no; ?></td>
									<td><?= $row["id_gejala"]; ?></td>
									<td><?= $row["nm_gejala"]; ?></td>
									<td>
										<input type="radio" name="<?= $row['id_gejala']; ?>" value="<?=$row['cf']; ?>"> Ya
										<input type="radio" name="<?= $row['id_gejala']; ?>" value="0" checked> Tidak
									</td>
								</tr>
							<?php $no++; ?>
							<?php endforeach ?>
								<tr>
								</tr>
					        </tbody>
						</table>
						<button type="submit" class="btn btn-primary btn-block" name="btn_diagnosa">DIAGNOSA</button>
						&nbsp;
				    </div>
				</div>
			</div>
			</form>
		</section>
	</section>
</section>

<?php require 'footer.php'; ?>