<html>
	<body>
	<form action="" method="GET">
		Nama:
		<input type="text" name="nama" size="13">
		<br>
		<br>
		Warna:
		<select name="warna">
			<option value="Red">Red</option>
			<option value="PaleGoldenrod">PaleGoldenrod</option>
			<option value="Wheat">Wheat</option>
			<option value="Maroon">Maroon</option>
			</select>
		<br>
		<br>
		<button type="submit" name="hasil" class="btn btn-primary">Hasil</button>
	</form>
	
<?php
	if(isset($_GET['hasil'])){
	$a=$_GET['nama'];
	$b=$_GET['warna'];
	
	function bet($nama){
		if(strlen($nama>20)){
			return ((strlen($nama))*700);
		}elseif(strlen($nama>11)){
			return ((strlen($nama))*500);
		}else{
			return ((strlen($nama))*300);
		}
	}
	echo "<font color='$b'>Nama : $a <br/>";
	echo "<font color='$b'>Harga total atas nama $a : ".bet($a);
	}
?>

	</body>
</html>
		