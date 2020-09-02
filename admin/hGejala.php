<?php 

require '../assets/module/functions.php';
require '../assets/module/koneksi.php';

$id_gejala = $_GET["id_gejala"];

	if(hGejala($id_gejala) > 0){
		echo 
			"
			<script>
				alert('Data telah dihapus');
				document.location.href = 'gejala.php';
			</script>
			";
	}else{
		echo 
			"
			<script>
				alert('Data gagal dihapus');
				document.location.href = 'gejala.php';
			</script>
			";
	}

 ?>