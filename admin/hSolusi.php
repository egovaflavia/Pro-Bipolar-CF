<?php 

require '../assets/module/functions.php';
require '../assets/module/koneksi.php';

$id_solusi = $_GET["id_solusi"];

	if(hSolusi($id_solusi) > 0){
		echo 
			"
			<script>
				alert('Data telah dihapus');
				document.location.href = 'solusi.php';
			</script>
			";
	}else{
		echo 
			"
			<script>
				alert('Data gagal dihapus');
				document.location.href = 'solusi.php';
			</script>
			";
	}

 ?>