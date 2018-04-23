<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8"> 

	<!-- Compatible with IE8 or IE9 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Site Title -->
	<title>Sekolahkan Guru - Daftar/Masuk</title>
	<!-- Icon -->
	<link rel="icon" href="../assets/images/icon.ico">

	<!-- Bootstraps -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Site Style Sheet -->
	<link rel="stylesheet" href="../css/sign.css">

	<!-- Mobile Compatible -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body style="background-image:url(../assets/images/header.png);background-repeat: no-repeat;background-size: cover;">
	
	<!-- Background -->
	<div class="container-fluid" id="layer"></div>

	<!-- Back -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12" style="padding-top:2vw;">
				<a href="index.html" class="btn btn-warning btn-lg box-shadow--16dp" style="margin-top:-1.5vw">
					<i class="fa fa-caret-left" aria-hidden="true" style="font-size:3vw;color:black"></i>
				</a> 
				<font size="7vw" color="#ff6624" style="text-shadow: 2px 2px 4px #000000;padding-left:1.5vw;padding-top:2vw"> Kembali</font>
			</div>
		</div>
	</div>
	
	<!-- Sign Background -->
	<!-- Daftar -->
	<div class="container-fluid box-shadow--16dp" id="layerdaftar">
		<div class="container-fluid">
			<div class="row" style="text-align:center;padding-top:2vw">
				<font size="20vw">Daftar</font>
				<p><font size="4vw">Apabila anda <u><b>belum</b></u> mempunyai akun, daftar di sini</font></p>
			
				<!-- Form -->
				<form class="form-inline" method="post">
					<div class="form-group">
						<label for="name" style="padding-right:8.6vw;padding-top:3vw">Nama</label>
						<input class="form-control" id="namaDepan" type="text" placeholder="Nama Depan" name="Nama_Depan" onchange="leave('namaDepan')"> <input class="form-control" id="namaBelakang" type="text" placeholder="Nama Belakang" name="Nama_Belakang" onchange="leave('namaBelakang')">
					</div>
					<div class="form-group">
						<label for="email1" style="padding-right:8.9vw;padding-top:2vw">Email</label>
						<input class="form-control" id="email1" type="text" placeholder="Email" name="Email" onchange="validate('email')">
					</div>
					<div class="form-group">
						<label for="password1" style="padding-right:6.7vw;padding-top:2vw">Password</label>
						<input class="form-control" id="password1" type="password" placeholder="Password" name="Password" onchange="leave('password')">
					</div>
					<div class="form-group">
						<label for="nohp" style="padding-right:4vw;padding-top:2vw">Nomor Telepon</label>
						<input class="form-control" id="nohp" type="text" placeholder="Nomor Telepon" name="Nomor_Telepon" onchange="leave('nohp')">
					</div>
					
					<input type="submit" class="btn btn-basic btn-lg box-shadow--16dp" style="margin-top:3vw" value="Daftar" name="daftar">
				</form>
			</div>
		</div>
	</div>
	
	<!-- Masuk -->
	<div class="container-fluid box-shadow--16dp" id="layermasuk">
		<div class="container-fluid">
			<div class="row" style="text-align:center;padding-top:1vw">
				<font size="20vw">Masuk</font>
				<p><font size="4vw">Apabila anda <u><b>sudah</b></u> mempunyai akun, masuk di sini</font></p>
				
				<!-- Form -->
				<form class="form-inline" method="post">
					<div class="form-group">
						<label for="email2" style="padding-right:8.9vw;padding-top:8.1vw">Email</label>
						<input class="form-control" id="email2" type="text" placeholder="Email" name="EmailIn" onchange="validate('email2')">
					</div>
					<div class="form-group">
						<label for="password1" style="padding-right:6.7vw;padding-top:2vw">Password</label>
						<input class="form-control" id="password1" type="password" placeholder="Password" name="PasswordIn" onchange="leave('password')">
					</div>
					<input type="submit" class="btn btn-basic btn-lg box-shadow--16dp" style="margin-top:7vw" value="Masuk" name="masuk">
				</form>			
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		function leave(id){
			if(document.getElementById(id).value != ""){
				document.getElementById(id).style.borderColor = "#00ff00";
			}else{
				document.getElementById(id).style.borderColor = "";
			}
		}
		
		function validate(id) {
			var email = document.getElementById(id).value;

			var emailFilter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;

			if (email.match(emailFilter)) {
				document.getElementById(id).style.borderColor = "#00ff00";
			}else{
				document.getElementById(id).style.borderColor = "#ff6624";
			}
		}
	</script>
</body>

</html>

<?php
	include("Database Connection.php");
	
	if(isset($_POST['daftar'])){
		if(isset($_POST['Nama_Depan'])){		
			if($_POST['Nama_Depan'] != "" && $_POST['Nama_Belakang'] != "" && $_POST['Email'] != "" && $_POST['Password'] != "" && $_POST['Nomor_Telepon'] != ""){		
				if (filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
					$query = "SELECT * FROM akun WHERE email = '". $_POST['Email'] ."'";
				
					$hasilQuery = $Koneksi -> query($query);
					
					if(!$hasilQuery -> num_rows > 0){
						$daftarQuery = "INSERT INTO akun values ('" . $_POST['Nama_Depan'] . "','" . $_POST['Nama_Belakang'] . "','" . $_POST['Email'] . "','" . $_POST['Password'] . "','" . $_POST['Nomor_Telepon'] . "','Donatur')";
						$terdaftar = $Koneksi -> query($daftarQuery);				
						
						if($terdaftar){
							echo "<script>window.location.assign('/Sekolahkan Guru/Page donatur');</script>";
						}
					}else{
						echo "<script>document.getElementById('email').style.borderColor = '#ff6624'; alert('Email sudah terdaftar')</script>";
					}
				} else {
					echo "<script>alert('format email salah');</script>";
				}
			}else{
				echo "<script>alert('Mohon isi kolom data yang kosong')</script>";
			}
		}
	}
	
	if(isset($_POST['masuk'])){
		if(isset($_POST['EmailIn'])){		
			if($_POST['EmailIn'] != "" && $_POST['PasswordIn'] != ""){				
				if (filter_var($_POST['EmailIn'], FILTER_VALIDATE_EMAIL)) {
					$query = "SELECT * FROM akun WHERE Email = '". $_POST['EmailIn'] ."' AND Jenis_Akun = 'Donatur'";
				
					$hasilQuery = $Koneksi -> query($query);
					
					if($hasilQuery -> num_rows > 0){
						while($row = $hasilQuery -> fetch_assoc()){
							if($row['Password'] == $_POST['PasswordIn']){
								echo "<script>window.location.assign('/Sekolahkan Guru/Page donatur');</script>";
							}
						}
					}else{
						echo "<script>document.getElementById('email').style.borderColor = '#ff6624'; alert('Email belum terdaftar')</script>";
					}
				} else {
					echo "<script>alert('format email salah');</script>";
				}
			}else{
				echo "<script>alert('Mohon isi kolom data yang kosong')</script>";
			}
		}
	}
?>