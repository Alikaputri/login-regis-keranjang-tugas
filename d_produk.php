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
			<li><a>HOME</a></li>
			<li><a href="admin.php?page=data_produk">DATA PELANGGAN</a></li>
			<li><a href="d_produk.php?page=data_produk">DATA PRODUK</a></li>
			<li><a href="dashboard.php?page=produk">Logout</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/pemilik.php";
				break;
			case 'data_produk':
				include "halaman/produkadmin.php";
				break;
			case 'data_produk':
				include "halaman/produkadmin.php";
				break;
			case 'login':
				include "logout.php";			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/produk_admin.php";
	}
	
 
	 ?>
 
	</div>
</div>
</body>
</html>