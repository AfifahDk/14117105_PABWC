<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Multi User Level Dengan PHP dan MySQLi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<h1>Membuat Login Multi User Level Dengan PHP dan MySQLi </h1>
  
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
		<form action="" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" name="LOGIN" class="tombol_login" value="LOGIN">
 
			<br/>
		</form>
		
<?php 
include 'koneksi.php';
session_start();

	if(isset($_POST['LOGIN'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "select * from user where username='$username' and password='$password'";
		$result= $koneksi->query($query);
		
		$row = $result->num_rows;
		
		$sql = $koneksi->query("select * from user where username='$username'");
		$akun =$sql->fetch_array();
		
		if($row > 0){
			if($akun['level'] == "admin"){
				
				$_SESSION['username'] = $username;
				header("location: halaman_Admin.php");
			}
			else if($akun['level'] == "user1"){
				
				$_SESSION['username'] = $username;
				header("location: halaman_user.php");
			}else if ($akun['level'] == "user2"){
				$_SESSION['username'] = $username;
				header("location: halaman_user.php");
			}
			
			
		}else{
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";	
		}
	}
?>
	</div>
</body>
</html>