<?php 

require 'header.php';

if (isset($_POST["btn_edit"])) {
	if (ePenyakit($_POST) > 0 ) {
    echo "
          <script>
          alert('Data Berhasil Di edit');
          document.location.href = 'penyakit.php';
          </script>";
	}else{
	    echo"<script>
	        alert('Data Gagal Di edit');
	        document.location.href = 'penyakit.php';
	      </script>";
	}
}

$id = $_GET["id_penyakit"];
$pnykt = query("SELECT * FROM penyakit WHERE id_penyakit = '$id'")[0];

 ?>

 	<section id="main-content">
		<section class="wrapper">
			<div class="form-w3layouts">
				<div class="row">
	                <div class="col-lg-12">
	                    <section class="panel">
	                        <header class="panel-heading">
	                            Edit Penyakit
	                            <!-- <span class="tools pull-right">
	                                <a class="fa fa-chevron-down" href="javascript:;"></a>
	                                <a class="fa fa-cog" href="javascript:;"></a>
	                                <a class="fa fa-times" href="javascript:;"></a>
	                             </span> -->
	                        </header>
	                        <div class="panel-body">
	                            <div class=" form">
	                                <form class="cmxform form-horizontal " method="post" action="">
	                                    <div class="form-group ">
	                                        <label for="id" class="control-label col-lg-3">ID Penyakit</label>
	                                        <div class="col-lg-6">
	                                            <input class=" form-control" id="id" type="text" value="<?= $pnykt['id_penyakit']; ?>" disabled>
	                                            <input type="hidden" name="id_penyakit" value="<?= $pnykt['id_penyakit']; ?>">
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="nama" class="control-label col-lg-3">Nama Penyakit</label>
	                                        <div class="col-lg-6">
	                                            <input class=" form-control" id="nama" name="nm_penyakit" type="text" value="<?= $pnykt['nm_penyakit']; ?>">
	                                        </div>
                                         </div>
                                         <div class="form-group ">
	                                        <label for="nama" class="control-label col-lg-3">Keterangan Penyakit</label>
	                                        <div class="col-lg-6">
	                                            <input class=" form-control" id="ket" name="ket" type="text" value="<?= $pnykt['ket']; ?>">
	                                        </div>
	                                    </div>
	                                    <!-- <div class="form-group ">
	                                        <label for="curl" class="control-label col-lg-3">URL (optional)</label>
	                                        <div class="col-lg-6">
	                                            <input class="form-control " id="curl" type="url" name="url">
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="ccomment" class="control-label col-lg-3">Your Comment (required)</label>
	                                        <div class="col-lg-6">
	                                            <textarea class="form-control " id="ccomment" name="comment" required=""></textarea>
	                                        </div>
	                                    </div> -->
	                                    <div class="form-group">
	                                        <div class="col-lg-offset-3 col-lg-6">
	                                            <button class="btn btn-primary" name="btn_edit" type="submit">Simpan</button>
	                                            <a href="penyakit.php" class="btn btn-default">Batal</a>
	                                        </div>
	                                    </div>
	                                </form>
	                            </div>
	                        </div>
	                    </section>
	                </div>
	            </div>
	        </div>
	    </section>
	</section>
</section>

<?php require "footer.php"; ?>