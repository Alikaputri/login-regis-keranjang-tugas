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
		<div class="halaman">
	<h2>Selamat Berbelanja</h2>
	<fieldset>
		<img src="img/kucing3.jpeg" alt="Image" height="300" width="300">
		<p>Royal Canin Kitten</p>
		<p>Rp. 17.500</p>
		<td>Jumlah Item Barang</td>
                <td>:</td>
                <td>
                    <select name="qty">
                        <option value="">- Jumlah -</option>
                        <?php
                            for($x=1;$x<=50;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
         <input type="submit" name="submit" value="Masukkan Keranjang" />
	</fieldset>
	<fieldset>
		<img src="img/kucing5.jpeg" alt="Image" height="300" width="300">
		<p>Royal Canin Kitten</p>
		<p>Rp. 75.000</p>
		<td>Jumlah Item Barang</td>
                <td>:</td>
                <td>
                    <select name="qty">
                        <option value="">- Jumlah -</option>
                        <?php
                            for($x=1;$x<=50;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
         <input type="submit" name="submit" value="Checkout" />
	</fieldset>

</div>

	</div>
</div>
</body>
</html>