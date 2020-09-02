<?php  

	$conn = mysqli_connect("localhost","id14596380_root","Y{8wXAAAV4+94cun","id14596380_db_bipolar");

	function query($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows; 
	}
