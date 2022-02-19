<!DOCTYPE html>
<html>
<head>
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
			<li><a href="loginadmin.php?page=login">LOGIN ADMIN</a></li>
			<li><a href="login.php?page=login">LOGIN PELANGGAN</a></li>
		</ul>
	</div>
 
	<div class="badan">

	<br/>
		<form action="login1.php" method="post" onSubmit="return validasi()">
			<fieldset>
			<div>
				<h1>LOGIN DULU!</h1>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<br>
			<br>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>	
			<br>
			<br>		
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
			</fieldset>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>