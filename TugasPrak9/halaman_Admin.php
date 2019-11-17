<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<h1>Halaman Admin</h1>
 
<?php
session_start();

$username = $_SESSION['username'];
echo "Halo! Selamat Datang".$username;	
?>
	<br/>
	<a href="logout.php">LOGOUT</a>
	<br/>
	<br/>
			<a href="ftambah-data.php">Tambah</a> |
			<a href="fubah-data.php?ubah_nim=<?= $row["NIM"];?>">Ubah</a>|
			<a href="delete.php?hapus_nim=<?= $row["NIM"];?>">Hapus</a>	|
			<a href="detail.php?detail_nim=<?= $row["NIM"];?>">Detail</a>	
</body>
</html>