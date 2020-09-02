<?php 

require 'header.php';

$usr = query("SELECT * FROM user WHERE level = 'user' ORDER BY id ASC");

 ?>

 	<section id="main-content">
		<section class="wrapper">
			<div class="table-agile-info">
				<div class="panel panel-default">
				    <div class="panel-heading">
				     Data User
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
								<th>Nama</th>
								<th style="width: 200px;">Lihat Data</th>
					          </tr>
					        </thead>
					        <?php 
								$no = 1;
								foreach ($usr as $row) :
							?>
					        <tbody>
					        	<tr>
									<td><?= $no; ?></td>
									<td><?= $row["nama"]; ?></td>
									<td>
										<a href="detUser.php?id=<?= $row['id']; ?>" class="btn btn-primary"><i class="fa fa-search"></i> Lihat Data</a>
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