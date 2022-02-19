<?php
include "konek.php";

$username=$_POST["username"];
$password=md5($_POST["password"]);
$role=$_POST["role"];
$nama_pelanggan=$_POST["nama_pelanggan"];
$alamat=$_POST["alamat"];
$no_hp=$_POST["no_hp"];

  $sql="insert into tabel_pelanggan (username,password,role,nama_pelanggan,alamat,no_hp) values
		('$username','$password','$role','$nama_pelanggan','$alamat','$no_hp')";

  $hasil=mysqli_query($kon,$sql);

  if ($hasil) {
	echo "Berhasil simpan data";
	exit;
  }
else {
	echo "Gagal simpan data";
	exit;
}  
?>