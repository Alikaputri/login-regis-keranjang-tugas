<!DOCTYPE html>
<html>
<head>
	<title>PETSQ SHOP</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">SELAMAT DATANG DI PETSQ SHOP</h1>
	</header>
 
	<div class="menu center">
		<ul>
			<li><a href="dashboard.php?page=home">HOME</a></li>
			<li><a href="regis.php?page=daftar">DAFTAR</a></li>
			<li><a href="login.php?page=login">LOGIN</a></li>
			<li><a href="produk.php?page=produk">PRODUK</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'daftar':
				include "regis.php";
				break;
			case 'login':
				include "login.php";
				break;	
			case 'produk':
				include "produk.php";
				break;				
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>