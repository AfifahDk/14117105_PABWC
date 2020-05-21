<!DOCTYPE html>
<html>
<head>
	<title>Halaman User</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<h1>Halaman User</h1>
<?php
session_start();

$username = $_SESSION['username'];

echo "Halooo! ". $username;
?>
	<br/>
	
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>
			<a href="ftambah-data.php">Tambah</a> |
			<a href="fubah-data.php?ubah_nim=<?= $row["NIM"];?>">Ubah</a>|
			<a href="delete.php?hapus_nim=<?= $row["NIM"];?>">Hapus</a>	|
</html>