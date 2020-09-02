<?php 

require 'header.php';

$dpnykt = query("SELECT * FROM penyakit ORDER BY id_penyakit ASC");

 ?>

	<section id="main-content">
		<section class="wrapper">
			<div class="table-agile-info">
				<div class="panel panel-default">
				    <div class="panel-heading">
				     Data Penyakit
				    </div>
				    <div>
						<a href="tPenyakit.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Penyakit</a>
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
					            <th>ID Penyakit</th>
								<th>Nama Penyakit</th>
                                <th>Keterangan Penyakit</th>
								<th style="width: 200px;">Aksi</th>
					          </tr>
					        </thead>
					        <?php 
								$no = 1;
								foreach ($dpnykt as $row) :
							?>
					        <tbody>
					        	<tr>
									<td><?= $no; ?></td>
									<td><?= $row["id_penyakit"]; ?></td>
									<td><?= $row["nm_penyakit"]; ?></td>
                                    <td><?= $row["ket"]; ?></td>
									<td>
										<a class="btn btn-primary" href="ePenyakit.php?id_penyakit=<?= $row["id_penyakit"]; ?>"><i class="fa fa-pencil"></i> Edit</a>
										<a class="btn btn-danger" href="hPenyakit.php?id_penyakit=<?= $row["id_penyakit"]; ?>"><i class="fa fa-trash"></i> Hapus</a>
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