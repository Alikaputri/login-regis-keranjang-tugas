<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
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
            <li><a href="regis.php?page=tentang">DAFTAR</a></li>
            <li><a href="login.php?page=tutorial">LOGIN</a></li>
            <li><a href="dashboard.php?page=tutorial">PRODUK</a></li>
        </ul>
    </div>
 
    <div class="badan">
    <form action="simpan.php" method="POST">
        <fieldset>
        <h1>DAFTAR DISINI!</h1>
        <p>
            <label>Username:</label>
            <input type="text" name="username" placeholder="Username..." />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Passowrd..." />
        </p>
        <p>
            <label>Role:</label>
            <input type="text" name="role" placeholder="Role..." />
        </p>
        <p>
            <label>Nama Pelanggan:</label>
            <input type="text" name="nama_pelanggan" placeholder="Nama_Pelanggan..." />
        </p>
        <p>
            <label>Alamat:</label>
            <input type="text" name="alamat" placeholder="Alamat..." />
        </p>
        <p>
            <label>No. Hp:</label>
            <input type="text" name="no_hp" placeholder="No. Hp..." />
        </p>
        <p>
            <input type="submit" name="submit" value="Daftar" />
        </p>
        </fieldset>
    </form>
</body>
</html>