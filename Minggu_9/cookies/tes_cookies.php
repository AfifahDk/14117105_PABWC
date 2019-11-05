<?php setcookie("test_cookie", "test", time() + 3600, '/'); ?>
<html>
<body>
<?php if(count($_COOKIE) > 0) {
	echo "Cookies enabled.";
	} else {
	echo "Cookies disabled.";
	} ?>
	<!-- analisis disini -->
	<!--Hal ini terjadi karena Incognito Mode tidak akan menyimpan cache,cookies dan history 
	dari website yang kita akses. Incognito Mode akan memulai sesi baru ketika menutup window 
	web browser, berbeda dengan window tanpa Incognito Mode yang akan menyimpan informasi di cache 
	yang merupakan memori sementara yang bertujuan untuk menyimpan informasi dari website tersebut 
	sehingga pada saat kita mengakses website tersebut maka kita akan mengakses cache terlebih dulu 
	baru diteruskan diwebsite tersebut sehingga saat kita mengakses website tersebut akan terasa lebih 
	cepat karena sudah tersimpan terlebih dahulu.-->
</body>
</html>