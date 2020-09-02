<?php 

require 'header.php';

$id = $_GET["id"];

$usr = query("SELECT * FROM user WHERE id = '$id'")[0];
$nm = $usr["nama"];

$konsul = query("SELECT * FROM konsultasi WHERE nama = '$nm' ORDER BY id DESC");

 ?>

 	<section id="main-content">
		<section class="wrapper">
			<div class="table-agile-info">
				<div class="panel panel-default">
				    <div class="panel-heading">
				     Data User
				    </div>
				    <div>
						<a href="user.php" class="btn btn-primary">Kembali</a>
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
								<th>Tanggal</th>
								<th>Penyakit</th>
								<th>Hasil</th>
								<th style="width: 200px;">Aksi</th>
					          </tr>
					        </thead>
					        <?php 
								$no = 1;
								foreach ($konsul as $row) :
									$penyakit = query("SELECT * FROM penyakit WHERE id_penyakit = '$row[id_penyakit]'")[0];
									$nmp = $penyakit["nm_penyakit"];
							?>
					        <tbody>
					        	<tr>
									<td><?= $no; ?></td>
									<td><?= $row["tgl"]; ?></td>
									<td><?= $nmp; ?></td>
									<td><?= $row["hasil_max"]; ?> %</td>
									<td>
										<a href="hKonsul.php?id=<?= $row['id']; ?>&id_user=<?= $id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
									</td>
								</tr>
							<?php $no++; ?>
							<?php endforeach ?>
					        </tbody>
						</table>
				    </div>
				</div>
			</div>
		</section>
	</section>
</section>

<?php require "footer.php"; ?>