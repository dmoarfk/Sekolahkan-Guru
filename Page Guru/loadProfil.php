<?php
	include("Database Connection.php");
	session_start();
	
	$query = "SELECT * FROM profil_guru WHERE Email = '". $_SESSION['user'] ."'";
				
	$hasilQuery = $Koneksi -> query($query);
	
	if($hasilQuery -> num_rows > 0){
		while($row = $hasilQuery -> fetch_assoc()){
			echo '<div class="row" style="margin-bottom:1vw">
					 <div class="col-xs-4">NIK</div>
					 <div class="col-xs-4" id="nik">' . $row['NIK'] . '</div>
				  </div>
				  <div class="row" style="margin-bottom:1vw">
				 	 <div class="col-xs-4">Tanggal Lahir</div>
				 	 <div class="col-xs-4" id="tanggallahir">' . $row['Tanggal_Lahir'] . '</div>
				  </div>
				  <div class="row" style="margin-bottom:1vw">
				 	 <div class="col-xs-4">Jenis Kelamin</div>
				 	 <div class="col-xs-4" id="gender">' . $row['Jenis_Kelamin'] . '</div>
				  </div>
				  <div class="row" style="margin-bottom:1vw">
				 	 <div class="col-xs-4">Alamat</div>
					 <div class="col-xs-4" id="alamat" style="overflow-x:hidden;overflow-y:scroll;height:10vw;">' . $row['Alamat'] . '</div>
				  </div>
				  <div class="row" style="margin-bottom:1vw">
				 	 <div class="col-xs-4">Nomor Telepon</div>
				 	 <div class="col-xs-4" id="notelp">' . $row['Nomor_Telepon'] . '</div>
				  </div>
				  <div class="row" style="margin-bottom:1vw">
				 	 <div class="col-xs-4">E-mail</div>
				 	 <div class="col-xs-4" id="email">' . $row['Email'] . '</div>
				  </div>
				  <div class="row" style="margin-bottom:1vw">
				 	 <div class="col-xs-4">Pendidikan Terakhir</div>
					 <div class="col-xs-4" id="pendidikan">' . $row['Pendidikan_Terakhir'] . '</div>
				  </div>';
		}
	}else{
		echo "Anda belum melengkapi profil anda";
	}
?>