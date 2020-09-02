<?php 

require 'header.php';

$dsls = query("SELECT * FROM solusi ORDER BY id_solusi ASC");

 ?>

	<section id="main-content">
		<section class="wrapper">
			<div class="table-agile-info">
				<div class="panel panel-default">
				    <div class="panel-heading">
				     Data Solusi
				    </div>
				    <div>
						<a href="tSolusi.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Solusi</a>
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
					            <th>ID Solusi</th>
								<th>Nama Solusi</th>
								<th>ID Penyakit</th>
								<th style="width: 200px;">Aksi</th>
					          </tr>
					        </thead>
					        <?php 
								$no = 1;
								foreach ($dsls as $row) :
							?>
					        <tbody>
					        	<tr>
									<td><?= $no; ?></td>
									<td><?= $row["id_solusi"]; ?></td>
									<td><?= $row["solusi"]; ?></td>
									<td><?= $row["id_penyakit"]; ?></td>
									<td>
										<a class="btn btn-primary" href="eSolusi.php?id_solusi=<?= $row["id_solusi"]; ?>"><i class="fa fa-pencil"></i> Edit</a>
										<a class="btn btn-danger" href="hSolusi.php?id_solusi=<?= $row["id_solusi"]; ?>"><i class="fa fa-trash"></i> Hapus</a>
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