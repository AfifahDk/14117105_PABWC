<?php 

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'minggu9';
	
	$koneksi = new mysqli("$host", "$username", "$password", "$database");
	
	if($koneksi->connect_errno){
		echo "Gagal koneksi database!".$koneksi->connect_error;
}
?>
  