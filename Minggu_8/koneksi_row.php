<HTML>
	<HEAD>
		<title>Koneksi Database MySQL</title>
	</HEAD>
<BODY>
<h1>Koneksi database dengan mysql_fetch_assoc</h1>
<?php
	$conn=mysqli_connect("localhost","root","","universitas") or die ("koneksi gagal");
	mysqli_select_db($conn,"liga");
	$hasil = mysqli_query($conn,"SELECT * FROM Liga");
	while ($row=mysqli_fetch_row($hasil)) {
		echo "Liga " .$row[1];
		echo " mempunyai " .$row[2];
		echo " wakil di liga champion <br>";
}
?>
</BODY>
</HTML>