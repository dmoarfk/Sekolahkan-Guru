<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8"> 

	<!-- Compatible with IE8 or IE9 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Site Title -->
	<title>Sekolahkan Guru - Profil</title>
	<!-- Icon -->
	<link rel="icon" href="../assets/images/icon.ico">

	<!-- Bootstraps -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Site Style Sheet -->
	<link rel="stylesheet" href="../css/profil.css">

	<!-- Mobile Compatible -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body style="overflow-x:hidden" onload="loadData()">
	
	<!-- Main Cover -->
	<div id="cover" style="background:url('../assets/images/cover.jpg') no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;"></div>
	<div class="container-fluid" id="layer"></div>

	<!-- Navigation Bar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid" id="navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
				</div>
			</div>
			
			<div class="container-fluid collapse navbar-collapse" id = "navbar">
				<p style="letter-spacing: 1.4vw; padding-top:3vw"><font size="6vw" color="#fff">Sekolahkan<image src="../assets/images/icon.png" height="50px" width="50px"></image> Guru</font></p>
				<ul class="nav navbar-nav center">
					<li><a href="index.html">Beranda</a></li>
					<li><a href="universitas.html">Universitas</a></li>
					<li><a href="daftarbeasiswa.html">Daftar Beasiswa</a></li>
					<li><a href="tentangkami.html">Tentang Kami</a></li>
					<li><a href="bantuan.html">Bantuan</a></li>
					<li><a href="profil.html"><font color="#fff"><u>Profil</u></font></a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!-- Profile Picture -->
	<div class="picture-container box-shadow--8dp" id="foto"></div>
	<!-- Beasiswa Status -->
	<div class="status-container box-shadow--8dp">
		<div class="row">Status Beasiswa:</div>
		<div class="row" id="statusbeasiswa">Selesai</div>
		<br>
		<div id="unggahartikel">
		<div class="row" style="padding-left:1vw;padding-right:1vw">
				<div class="row">Unggah Artikel Pengalaman Beasiswa:</div>
				<div class="row" id="statusartikel">Belum Diunggah</div>
				<form method="post" action="profil.php" enctype="multipart/form-data">
					<input type="file" name="artikel" id="artikel" style="visibility: hidden; display:none">
					<button onclick="document.getElementById('artikel').click()">Pilih File</button>
					<input type="submit" value="Unggah Artikel" name="uArtikel">
				</form>
			</div>
		</div>
	</div>
	<!-- Profile Name -->
	<div class="name-container" id="name">Bu N</div>
	<!-- Edit Profile Button -->
	<button type="button" class="btn btn-warning box-shadow--8dp" style="position:absolute;top:31vw;left:51%;padding-top:0.1vw;padding-botton:0.1vw" id="editbtn" onclick="show()">Edit Profil</button>
	<!-- Save Button -->
	<button type="button" class="btn btn-warning box-shadow--8dp" style="position:absolute;top:31vw;left:51%;padding-top:0.1vw;padding-botton:0.1vw;visibility:hidden" id="savebtn">Simpan Profil</button>
	<!-- Profile Information -->
	<div class="container" style="position:absolute;top:40vw;left:38%;font-size:2vw" id="data">
		<div class="row" style="margin-bottom:1vw;">
		 	<div class="col-xs-4">Ijazah Pendidikan Terakhir</div>
		 	<div class="col-xs-4" id="pendidikan" style="border:1px solid #ccc;border-radius:1vw;padding:1vw 1vw 1vw 1vw;">
		 		<div id="fotoijazah"></div>
				<form method="post" action="profil.php" enctype="multipart/form-data">
					<input type="file" name="ijazah" id="ijazah" style="visibility: hidden; display:none">
					<button onclick="document.getElementById('ijazah').click()">Pilih File</button>
					<input type="submit" value="Unggah Foto Ijazah" name="unggah">
				</form>
		 	</div>
		</div>
	</div>
	<!-- Edit Inputs -->
	<div class="container" style="position:absolute;top:40vw;left:38%;visibility:hidden" id="divedit">
		<div class="row" style="margin-bottom:1vw">
			<div class="col-xs-4"></div>
			<div class="col-xs-4">
				<input class="form-control" id="nikinput" type="text" placeholder="NIK" style="height:3vw"/>
			</div>
		</div>
		<div class="row" style="margin-bottom:1vw">
			<div class="col-xs-4"></div>
			<div class="col-xs-4">
				<input class="form-control" id="tanggallahirinput" type="date" placeholder="Tanggal Lahir" style="height:3vw"/>
			</div>
		</div>
		<div class="row" style="margin-bottom:1vw">
			<div class="col-xs-4"></div>
			<div class="col-xs-4">
				<input class="form-control" id="genderinput" type="text" placeholder="Jenis Kelamin" style="height:3vw"/>
			</div>
		</div>
		<div class="row" style="margin-bottom:1vw">
			<div class="col-xs-4"></div>
			<div class="col-xs-4" style="height:10vw">
				<textarea class="form-control" rows="5" id="alamatinput" type="text" placeholder="Alamat" style="height:100%;width:100%;resize:none"></textarea>
			</div>
		</div>
		<div class="row" style="margin-bottom:0.5vw">
			<div class="col-xs-4"></div>
			<div class="col-xs-4">
				<input class="form-control" id="notelpinput" type="text" placeholder="No. Telp" style="height:3vw"/>
			</div>
		</div>
		<div class="row" style="margin-bottom:1vw">
			<div class="col-xs-4"></div>
			<div class="col-xs-4">
				<input class="form-control" id="emailinput" type="text" placeholder="E-mail" style="height:3vw"/>
			</div>
		</div>
		<div class="row" style="margin-bottom:1vw">
			<div class="col-xs-4"></div>
			<div class="col-xs-4">
				<input class="form-control" id="pendidikaninput" type="text" placeholder="NIK">
			</div>
		</div>
	</div>
	
	
	<!-- Footer -->
	<div class="footer" style="position:absolute;top:102vw">
		<div class="container">
			<div class="row">
				<div class="col-xs-2"></div>
				<div class="col-xs-4" style="text-align:left">
					<p><i class="fa fa-envelope" aria-hidden="true" style="font-size:2vw;padding-right:0.6vw"></i><font size="5vw"> sekolahkan_guru@email.com</font></p>  
				</div>
				<div class="col-xs-4" style="text-align:right">
					<p><i class="fa fa-phone-square" aria-hidden="true" style="font-size:2.3vw;padding-right:0.6vw"></i><font size="5vw"> 021-3456789</font></p>
				</div>
				<div class="col-xs-2"></div>
			</div>
		</div>
		<div class = "row">
			<div class="col-xs-12">
				<p style="top:5vw"><font size="4vw">Jababeka Education Park, Jalan Ki Hajar Dewantara RT. 2 / RW. 4, Mekarmukti,</font></p>
				<p style="position:absolute;top:2vw;text-align:center;width:100%"><font size="4vw">Cikarang Utara, Mekarmukti, Cikarang Utara, Bekasi, Jawa Barat 17550</font></p>
				<hr style="height:0.5vw; visibility:hidden;"/>
			</div>
		</div>
	</div>			
	
	<script>	
		function loadData() {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					if(this.responseText != "Anda belum melengkapi profil anda"){
						document.getElementById("data").innerHTML = this.responseText + document.getElementById("data").innerHTML;
					}else{
						document.getElementById("data").style.color = "#ff0000";	
						document.getElementById("data").innerHTML = "Anda belum melengkapi profil anda";
					}
				}
			}
			xmlhttp.open("GET", "loadProfil.php", true);
			xmlhttp.send();
			
			var xmlhttp2 = new XMLHttpRequest();
			xmlhttp2.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("foto").style.backgroundRepeat = "no-repeat, no-repeat";
					document.getElementById("foto").style.backgroundSize = "100%, auto";
					document.getElementById("foto").style.backgroundImage = "url('Foto/" + this.responseText + "')";
				}
			}
			xmlhttp2.open("GET", "loadFoto.php", true);
			xmlhttp2.send();
			
			var xmlhttp3 = new XMLHttpRequest();
			xmlhttp3.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					if(this	.responseText != "Belum Mendaftar"){
						document.getElementById("statusbeasiswa").style.color = "#00ff00";
					}else{
						document.getElementById("statusbeasiswa").style.color = "#ff0000";
					}
					document.getElementById("statusbeasiswa").innerHTML = this.responseText;
				}
			}
			xmlhttp3.open("GET", "loadStatus.php", true);
			xmlhttp3.send();
			
			var xmlhttp4 = new XMLHttpRequest();
			xmlhttp4.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					if(this.responseText != "Belum Diunggah"){
						document.getElementById("statusartikel").style.color = "#00ff00";
					}else{
						document.getElementById("statusartikel").style.color = "#ff0000";
						document.getElementById("unggahartikel").innerHTML += '<input type="file" name="file" id="file" class="inputfile btn-basic" accept=".docx"/><label for="file">Unggah Artikel</label>';
					}
					document.getElementById("statusartikel").innerHTML = this.responseText;
				}
			}
			xmlhttp4.open("GET", "loadArticle.php", true);
			xmlhttp4.send();
			
			loadIjazah();
		}
		
		function loadIjazah(){
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {

					document.getElementById("fotoijazah").style.backgroundRepeat = "no-repeat, no-repeat";
					document.getElementById("fotoijazah").style.backgroundSize = "100%, auto";
					document.getElementById("fotoijazah").style.backgroundImage = "url('Ijazah/" + this.responseText + "')";
				}
			}
			xmlhttp.open("GET", "loadIjazah.php", true);
			xmlhttp.send();
		}
		
		function show(){
			document.getElementById("divedit").style.visibility = "visible";
		}
	</script>
</body>
</html>

<?php
	include("Database Connection.php");
	
	if(isset($_POST["unggah"])) {
		$target_dir = "Ijazah/";
		$target_file = $target_dir . basename($_FILES["ijazah"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		$check = getimagesize($_FILES["ijazah"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
			
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			echo "Mohon untuk mengunggah file dalam bentuk jpg, png, jpeg, atau gif";
			$uploadOk = 0;
		}
		
		if ($uploadOk == 0) {
			echo "Gagal mengunggah";
		} else {
			if (move_uploaded_file($_FILES["ijazah"]["tmp_name"], $target_file)) {
				$unggahQuery = "UPDATE profil_guru SET ijazah = '" . basename($_FILES["ijazah"]["name"]) . "' where Email = '" . $_SESSION['user'] . "'";
				$hasilUnggah = $Koneksi -> query($unggahQuery);					
				
				echo "<script>loadIjazah(); alert('Ijazah anda berhasil diunggah')</script>";
			} else {
				echo "<script>alert('Gagal Mengunggah')</script>";
			}
		}
	}
	
	if(isset($_POST["uArtikel"])) {
		$target_dir = "Artikel/";
		$target_file = $target_dir . basename($_FILES["artikel"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		$check = getimagesize($_FILES["artikel"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
			
		if($imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "pdf") {
			echo "Mohon untuk mengunggah file dalam bentuk docx, doc, atau pdf";
			$uploadOk = 0;
		}
		
		if ($uploadOk == 0) {
			echo "Gagal mengunggah";
		} else {
			if (move_uploaded_file($_FILES["artikel"]["tmp_name"], $target_file)) {
				$unggahQuery = "UPDATE profil_guru SET ijazah = '" . basename($_FILES["artikel"]["name"]) . "' where Email = '" . $_SESSION['user'] . "'";
				$hasilUnggah = $Koneksi -> query($unggahQuery);					
				
				echo "alert('Artikel anda berhasil diunggah')</script>";
			} else {
				echo "<script>alert('Gagal Mengunggah')</script>";
			}
		}
	}
?>