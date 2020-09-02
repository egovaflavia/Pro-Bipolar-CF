<?php 

require 'header.php';

$dgjl = query("SELECT * FROM gejala ORDER BY id_gejala ASC");

 ?>

 	<section id="main-content">
		<section class="wrapper">
			<div class="table-agile-info">
				<div class="panel panel-default">
				    <div class="panel-heading">
				     Data Gejala
				    </div>
				    <div>
						<a href="tGejala.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Gejala</a>
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
								<th>Nama Gejala</th>
								<th style="width: 200px;">Aksi</th>
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
										<a class="btn btn-primary" href="eGejala.php?id_gejala=<?= $row["id_gejala"]; ?>"><i class="fa fa-pencil"></i> Edit</a>
										<a class="btn btn-danger" href="hGejala.php?id_gejala=<?= $row["id_gejala"]; ?>"><i class="fa fa-trash"></i> Hapus</a>
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