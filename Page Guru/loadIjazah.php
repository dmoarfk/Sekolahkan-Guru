<?php
	include("Database Connection.php");
	session_start();
	
	$query = "SELECT * FROM profil_guru WHERE Email = '". $_SESSION['user'] ."'";
				
	$hasilQuery = $Koneksi -> query($query);
	
	if($hasilQuery -> num_rows > 0){
		while($row = $hasilQuery -> fetch_assoc()){
			echo $row['Ijazah'];
		}
	}else{
		echo "Belum Diunggah";
	}
?>