<?php 

require 'header.php';

$usr = query("SELECT * FROM user WHERE level = 'user' ORDER BY id ASC");

 ?>

 	<section id="main-content" >
		<section class="wrapper">
			<div class="table-agile-info" style="height: 500px;">
				<div class="panel panel-default">
				    <div class="panel-heading">
				     Cetak Laporan Konsultasi
				    </div>
				    <div style="padding: 50px;"><br><br><br>
						<form action="cetLaporan.php" method="get">
							<table class="table table-borderless">
								<tr>
									<td>Pilih Bulan :</td>
									<td>
					        			<input type="text" name="tgl" class="tanggal form-control" autocomplete="off" required>
									</td>
									<td>
										<button name="btn_cetak" class="btn btn-success btn-block">Cetak</button>
									</td>
								</tr>
							</table>
					    </form><br><br><br>
				    </div>
				</div>
			</div>
		</section>
	</section>
</section>

<?php require "footer.php"; ?>