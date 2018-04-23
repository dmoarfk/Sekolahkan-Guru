<?php
	include("Database Connection.php");
	session_start();
	
	$query = "SELECT * FROM beasiswa WHERE Email = '". $_SESSION['user'] ."'";
				
	$hasilQuery = $Koneksi -> query($query);
	
	if($hasilQuery -> num_rows > 0){
		while($row = $hasilQuery -> fetch_assoc()){
			echo $row['Article'];
		}
	}else{
		echo "Belum Diunggah";
	}
?>