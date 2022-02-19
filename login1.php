<?php 
include 'konek.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = mysqli_query("select * from tabel_pelanggan where username='$username' and password='$password'");
$cek = mysqli_num_rows($kon,$sql);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:produk.php");
}else{
	header("location:produk.php");	
}
?>