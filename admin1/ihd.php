<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>	PT. Ralia Mandiri - Ralia Trans Kargo | Jasa Ekspedisi Domestik</title>
	<link rel="stylesheet" type="text/css" href="../style/reset.css" />
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
	<link rel="stylesheet" type="text/css" href="../style/media-queries.css" />
	<style>
.wajib {color: #FF0000;}
</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,400italic,700italic' rel='stylesheet' type='text/css'>
	
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body id="home">
	<div id="wrapper">
		
		<header>
			<h1><a href="index.php">RTK WEB</a></h1>
			<h2>Ralia Trans Kargo Web <span>-</span> Tempat Informasi Jasa Ekspedisi Indonesia</h2>
			<nav>
				<a href="#">Beranda</a>
				<a href="#">Profil Perusahaan</a>
				<a href="#">Kontak kami</a>
				<a href="daftar.php">Daftar</a>
				<a href="login.php">Login Member</a>
				
				<div class="clearfix"></div>
			</nav>	
		</header>
				
		<section id="main-content">
			<div id="featured">
				<h3>Input Halaman Depan</h3>
				
			</div> <!-- END Featured -->

			<hr/>
			<div id="latest">
				<section class="left-col">
<form method="post" name="ihd" action="cek_login.php">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><h2>Input Halaman Beranda<h2></center></td>
</tr>
<tr>
<td>Header 3</td>
<td>:</td>
<td>
<textarea name="bh3"></textarea>
</td>
</tr>
<tr>
<td>Header 4</td>
<td>:</td>
<td><textarea name="bh3"></textarea></td>
</tr>
<tr>
<td>Isi Halaman</td>
<td>:</td>
<td><textarea name="bisi"></textarea></td>
</tr>
<tr>
<td colspan=3><center><h2>Input Halaman Profil<h2></center></td>
</tr>
<tr>
<td>Header 3</td>
<td>:</td>
<td>
<textarea name="hph3"></textarea>
</td>
</tr>
<tr>
<td>Header 4</td>
<td>:</td>
<td><textarea name="hph4"></textarea></td>
</tr>
<tr>
<td>Isi Halaman</td>
<td>:</td>
<td><textarea name="hpisi"></textarea></td>
</tr>
<tr>
<td colspan=3><center><h2>Input Halaman Kontak Kami<h2></center></td>
</tr>
<tr>
<td>Header 3</td>
<td>:</td>
<td>
<textarea name="kh3"></textarea>
</td>
</tr>
<tr>
<td>Header 4</td>
<td>:</td>
<td><textarea name="kh4"></textarea></td>
</tr>
<tr>
<td>Isi Halaman</td>
<td>:</td>
<td><textarea name="kisi"></textarea></td>
</tr>
<tr>
<td colspan=2></td>
<td><input type="submit" name="submit" value="SUBMIT"></td>
</tr>

</table>

</form>
<?php
if ($_GET[action]=="simpan") {
//Membuat Koneksi Ke Database
	mysql_connect("localhost","root","password");
	mysql_select_db("login1");

//validasi data yang kosong
	if (empty($_POST['bh3']) || empty($_POST['bh4']) || empty($_POST['bisi'])|| empty($_POST['hph3'])|| empty($_POST['hph4'])|| empty($_POST['hpisi'])|| empty($_POST['kh3'])|| empty($_POST['kh4'])|| empty($_POST['kisi'])) {
		echo "Data harus Diisi Semua";
	}
	else {
	
	$simpan="INSERT INTO ihd SET
										b_h3='$_POST[bh3]',
										b_h4='$_POST[bh4]',
										b_isi='$_POST[bisi]',
										hp_h3='$_POST[hph3]',
										hp_h4='$_POST[hph4]',
										hp_isi='$_POST[hpisi]',
										kk_h3='$_POST[kh3]',
										kk_h4='$_POST[kh4]',
										kk_isi='$_POST[kisi]'";
										
							mysql_query($simpan);
	echo '<script language="javascript">
	alert("Input Halaman Depan Berhasil Di Simpan");
	window.location="inputawb.php";
	</script>';
	exit();
		}
}
?>
					
				</section> <!-- END Left Column -->	

				<aside class="sidebar">
					
					<br/>
					
					<br/>
					<h4><a href="#">Sosial</a></h4>
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">RSS</a></li>
						<li><a href="#">Google+</a></li>
					</ul>	
				</aside>
			</div> <!-- END Latest -->
			<div class="clearfix"></div>
			<hr/>
			<div id="about">
				<h3>Pengiriman Darat</h3>
				<p>Pengiriman material project menggunakan metoda pengiriman via darat/ trucking door to door/ on site.</p>
				<h3>Pengiriman Laut</h3>
				<p>Pengiriman material project menggunakan metoda pengiriman via Container atau Kapal Cepat door to door/ on site.</p>
				<h3>Pengiriman Udara</h3>
				<p>Pengiriman material project menggunakan metoda pengiriman via udara dengan sistem pengiriman : Door to door, Door to port, Port to port dan Port to door.</p>


			</div>	
		</section>	
		<hr/>
		<footer>
			<p>&copy; 2015 - RTK IT Management System</p>
		</footer>		
		
	</div> <!-- END Wrapper -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</body>
</html>