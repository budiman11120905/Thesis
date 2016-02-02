<?php
include('login.php'); // Memasuk-kan skrip Login 
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>	PT. Ralia Mandiri - Ralia Trans Kargo | Jasa Ekspedisi Domestik</title>
	<link rel="stylesheet" type="text/css" href="style/reset.css" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="stylesheet" type="text/css" href="style/media-queries.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="head.css">
	<link rel="stylesheet" href="style.css"/>
	  
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body id="home">
	<div id="wrapper">
		
		<header>
			
			<img src="../images/logo.jpg">
			<nav>
				<a href="../index.html">Beranda</a>
				<a href="../profil.html">Profil Perusahaan</a>
				<a href="../kontak.html">Kontak kami</a>
				<a href="/sms/member/index.php">Login Member</a>
				
				<div class="clearfix"></div>
			</nav>	
		</header>

    
      
       

      			
		<section id="main-content">
			<div id="featured">
				<h3>Form Login Member</h3>
				<form action="" method="post">
			
			
			<label>Username :</label>
			<input id="name" name="username" placeholder="username" type="text">
			
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			
			<input type="submit" name="submit" id="submit" value="Login"><input type="submit" name="submit" id="submit" value="Daftar">
		  </form>
				</div>
			<hr/>
			<div class="clearfix"></div>
	
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