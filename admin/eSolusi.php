<?php 

require 'header.php';

if (isset($_POST["btn_edit"])) {
	if (eSolusi($_POST) > 0 ) {
    echo "
          <script>
          alert('Data Berhasil Di edit');
          document.location.href = 'solusi.php';
          </script>";
	}else{
	    echo"<script>
	        alert('Data Gagal Di edit');
	        document.location.href = 'solusi.php';
	      </script>";
	}
}

$id = $_GET["id_solusi"];
$sls = query("SELECT * FROM solusi WHERE id_solusi = '$id'")[0];

 ?>

<section id="main-content">
		<section class="wrapper">
			<div class="form-w3layouts">
				<div class="row">
	                <div class="col-lg-12">
	                    <section class="panel">
	                        <header class="panel-heading">
	                            Edit Solusi
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
	                                        <label for="id" class="control-label col-lg-3">ID Solusi</label>
	                                        <div class="col-lg-6">
	                                            <input class=" form-control" name="id_solusi" type="hidden" value="<?= $sls['id_solusi']; ?>" required>
	                                            <input class=" form-control" type="text" value="<?= $sls['id_solusi']; ?>" disabled>
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="nama" class="control-label col-lg-3">Solusi</label>
	                                        <div class="col-lg-6">
	                                            <input class=" form-control" id="nama" name="solusi" value="<?= $sls['solusi']; ?>" type="text" required>
	                                        </div>
	                                    </div>
	                                    <div class="form-group ">
	                                        <label for="nama" class="control-label col-lg-3">ID Penyakit</label>
	                                        <div class="col-lg-6">
	                                            <input class=" form-control" id="nama" name="id_penyakit" value="<?= $sls['id_penyakit']; ?>" type="text" required>
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
	                                            <a href="solusi.php" class="btn btn-default">Batal</a>
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