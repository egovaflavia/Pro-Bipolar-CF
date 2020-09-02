<?php 

require '../assets/module/functions.php';
require '../assets/module/koneksi.php';

$id = $_GET["id"];
$id_user = $_GET["id_user"];

	if(hKonsul($id) > 0){
		echo 
			"
			<script>
				alert('Data telah dihapus');
				document.location.href = 'detUser.php?id=$id_user';
			</script>
			";
	}else{
		echo 
			"
			<script>
				alert('Data gagal dihapus');
				document.location.href = 'detUser.php?id=$id_user';
			</script>
			";
	}

 ?>