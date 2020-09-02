<?php

function tUser($data)
{
	global $conn;
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$nama =  htmlspecialchars($data["nama"]);
	$umur =  htmlspecialchars($data["umur"]);
	$jk =  htmlspecialchars($data["jk"]);
	$email =  htmlspecialchars($data["email"]);
	$alamat =  htmlspecialchars($data["alamat"]);
	$level =  htmlspecialchars($data["level"]);
	$tgl =  htmlspecialchars($data["tgl"]);

	//apabila ada data yang sama dengan admin
	// $result = mysqli_query($conn, "SELECT username FROM users WHERE
	// 			username = '$username'");
	// if (mysqli_fetch_assoc($result)) {
	// 	echo "<script>
	// 	alert ('Username sudah ada');
	// 			</script>";
	// 	return false;
	// }

	if ($password !== $password2) {
		echo "<script>
		alert('password tidak terkonfirmasi');
	</script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "INSERT INTO user (`username`, `password`, `nama`, `umur`, `jk`, `email`, `alamat`, `level`, `tgl`) VALUES ('$username','$password','$nama','$umur','$jk','$email','$alamat','$level','$tgl')");
	return mysqli_affected_rows($conn);
}

function tGejala($data)
{
	global $conn;

	$id_gejala = htmlspecialchars($data["id_gejala"]);
	$nm_gejala = htmlspecialchars($data["nm_gejala"]);
	$cf = htmlspecialchars($data["cf"]);

	//query insert data
	$query = "INSERT INTO gejala (`id_gejala`, `nm_gejala`, `cf`) VALUES ('$id_gejala', '$nm_gejala', '$cf')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tPenyakit($data)
{
	global $conn;

	$id_penyakit = htmlspecialchars($data["id_penyakit"]);
	$nm_penyakit = htmlspecialchars($data["nm_penyakit"]);
	$ket = htmlspecialchars($data["ket"]);

	//query insert data
	$query = "INSERT INTO penyakit (`id_penyakit`, `nm_penyakit`, `ket`) VALUES ('$id_penyakit', '$nm_penyakit','$ket')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tSolusi($data)
{
	global $conn;

	$id_solusi = htmlspecialchars($data["id_solusi"]);
	$solusi = htmlspecialchars($data["solusi"]);
	$id_penyakit = htmlspecialchars($data["id_penyakit"]);

	//query insert data
	$query = "INSERT INTO solusi (`id_solusi`, `id_penyakit`, `solusi`) VALUES ('$id_solusi', '$id_penyakit', '$solusi')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function eGejala($data)
{
	global $conn;

	$id_gejala = $data["id_gejala"];
	$nm_gejala = htmlspecialchars($data["nm_gejala"]);
	$cf = htmlspecialchars($data["cf"]);

	//query insert data
	$query = "UPDATE gejala SET 
		id_gejala = '$id_gejala',
		nm_gejala = '$nm_gejala',
		cf = '$cf'
		WHERE id_gejala = '$id_gejala'
		";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ePenyakit($data)
{
	global $conn;

	$id_penyakit = $data["id_penyakit"];
	$nm_penyakit = htmlspecialchars($data["nm_penyakit"]);
	$ket = htmlspecialchars($data["ket"]);

	//query insert data
	$query = "UPDATE penyakit SET 
		id_penyakit = '$id_penyakit',
		nm_penyakit = '$nm_penyakit'
        ket = '$ket'
		WHERE id_penyakit = '$id_penyakit'
		";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function eSolusi($data)
{
	global $conn;

	$id_solusi = $data["id_solusi"];
	$solusi = htmlspecialchars($data["solusi"]);
	$id_penyakit = htmlspecialchars($data["id_penyakit"]);

	//query insert data
	$query = "UPDATE solusi SET 
		id_solusi = '$id_solusi',
		solusi = '$solusi',
		id_penyakit = '$id_penyakit'
		WHERE id_solusi = '$id_solusi'
		";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hGejala($id_gejala)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM gejala WHERE id_gejala = '$id_gejala'");
	return mysqli_affected_rows($conn);
}

function hKonsul($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM konsultasi (`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) WHERE id = '$id'");
	return mysqli_affected_rows($conn);
}

function hPenyakit($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM penyakit WHERE id_penyakit = '$id'");
	return mysqli_affected_rows($conn);
}

function hSolusi($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM solusi WHERE id_solusi = '$id'");
	return mysqli_affected_rows($conn);
}

function diagnosa($data)
{
	global $conn;

	$nama =  htmlspecialchars($data["nama"]);
	$umur = htmlspecialchars($data["umur"]);
	$jk = htmlspecialchars($data["jk"]);
	$email = htmlspecialchars($data["email"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$tgl = htmlspecialchars($data["tgl"]);

	$G01 = htmlspecialchars($data["G01"]);
	$G02 = htmlspecialchars($data["G02"]);
	$G03 = htmlspecialchars($data["G03"]);
	$G04 = htmlspecialchars($data["G04"]);
	$G05 = htmlspecialchars($data["G05"]);
	$G06 = htmlspecialchars($data["G06"]);
	$G07 = htmlspecialchars($data["G07"]);
	$G08 = htmlspecialchars($data["G08"]);
	$G09 = htmlspecialchars($data["G09"]);
	$G10 = htmlspecialchars($data["G10"]);
	$G11 = htmlspecialchars($data["G11"]);
	$G12 = htmlspecialchars($data["G12"]);
	$G13 = htmlspecialchars($data["G13"]);
	$G14 = htmlspecialchars($data["G14"]);
	$G15 = htmlspecialchars($data["G15"]);
	$G16 = htmlspecialchars($data["G16"]);
	$G17 = htmlspecialchars($data["G17"]);
	$G18 = htmlspecialchars($data["G18"]);
	$G19 = htmlspecialchars($data["G19"]);
	$G20 = htmlspecialchars($data["G20"]);
	$G21 = htmlspecialchars($data["G21"]);
	$G22 = htmlspecialchars($data["G22"]);
	$G23 = htmlspecialchars($data["G23"]);
	$G24 = htmlspecialchars($data["G24"]);
	$G25 = htmlspecialchars($data["G25"]);
	$G26 = htmlspecialchars($data["G26"]);
	$G27 = htmlspecialchars($data["G27"]);
	$G28 = htmlspecialchars($data["G28"]);
	$G29 = htmlspecialchars($data["G29"]);
	$G30 = htmlspecialchars($data["G30"]);
	$G31 = htmlspecialchars($data["G31"]);
	$G32 = htmlspecialchars($data["G32"]);


	$cfp1 = 0.35;
	$rule1 = (($cfp1 * $G01) + ($cfp1 * $G02) + ($cfp1 * $G03) + ($cfp1 * $G04) + ($cfp1 * $G06) + ($cfp1 * $G07) + ($cfp1 * $G08) + ($cfp1 * $G09) + ($cfp1 * $G10) + ($cfp1 * $G11) + ($cfp1 * $G12) + ($cfp1 * $G13)) * 100;

	$cfp2 = 0.25;
	$rule2 = (($cfp2 * $G02) + ($cfp2 * $G03) + ($cfp2 * $G06) + ($cfp2 * $G07) + ($cfp2 * $G09) + ($cfp2 * $G14) + ($cfp2 * $G15) + ($cfp2 * $G16) + ($cfp2 * $G17) + ($cfp2 * $G18) + ($cfp2 * $G19) + ($cfp2 * $G20)) * 100;

	$cfp3 = 0.26;
	$rule3 = (($cfp3 * $G03) + ($cfp3 * $G04) + ($cfp3 * $G06) + ($cfp3 * $G09) + ($cfp3 * $G11) + ($cfp3 * $G14) + ($cfp3 * $G16) + ($cfp3 * $G21) + ($cfp3 * $G22) + ($cfp3 * $G23) + ($cfp3 * $G24) + ($cfp3 * $G25)) * 100;

	$cfp4 = 0.43;
	$rule4 = (($cfp4 * $G09) + ($cfp4 * $G17) + ($cfp4 * $G19) + ($cfp4 * $G26) + ($cfp4 * $G27) + ($cfp4 * $G28) + ($cfp4 * $G29) + ($cfp4 * $G30) + ($cfp4 * $G31) + ($cfp4 * $G32)) * 100;


	$hasil = max($rule1, $rule2, $rule3, $rule4);
	// $id_penyakit = '';

	if ($hasil === $rule1) {
		$id_penyakit = 'P01';
		$query = "INSERT INTO konsultasi (`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$hasil')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	} elseif ($hasil === $rule2) {
		$id_penyakit = 'P02';
		$query = "INSERT INTO konsultasi (`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$hasil')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	} elseif ($hasil === $rule3) {
		$id_penyakit = 'P03';
		$query = "INSERT INTO konsultasi (`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$hasil')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	} elseif ($hasil === $rule4) {
		$id_penyakit = 'P04';
		$query = "INSERT INTO konsultasi (`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$hasil')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	} elseif ($hasil === $rule5) {
		$id_penyakit = 'P05';
		$query = "INSERT INTO konsultasi (`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$hasil')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	} elseif ($hasil === $rule6) {
		$id_penyakit = 'P06';
		$query = "INSERT INTO konsultasi (`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$hasil')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	} elseif ($hasil === $rule7) {
		$id_penyakit = 'P07';
		$query = "INSERT INTO konsultasi (`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$hasil')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	} elseif ($hasil === $rule8) {
		$id_penyakit = 'P08';
		$query = "INSERT INTO konsultasi (`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$hasil')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	} elseif ($hasil === $rule9) {
		$id_penyakit = 'P09';
		$query = "INSERT INTO konsultasi (`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$hasil')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	} elseif ($hasil === $rule10) {
		$id_penyakit = 'P10';
		$query = "INSERT INTO konsultasi (`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$hasil')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}


	// query insert data
	// $query = "INSERT INTO konsultasi (`nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `hasil_max`) VALUES ('$nama','$umur','$jk','$alamat','$tgl','$id_penyakit','$hasil')";
	// mysqli_query($conn, $query);

	// return mysqli_affected_rows($conn);

}
