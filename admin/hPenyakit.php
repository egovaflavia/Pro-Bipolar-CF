<?php 

require '../assets/module/functions.php';
require '../assets/module/koneksi.php';

$id_penyakit = $_GET["id_penyakit"];

	if(hPenyakit($id_penyakit) > 0){
		echo 
			"
			<script>
				alert('Data telah dihapus');
				document.location.href = 'penyakit.php';
			</script>
			";
	}else{
		echo 
			"
			<script>
				alert('Data gagal dihapus');
				document.location.href = 'penyakit.php';
			</script>
			";
	}

 ?>