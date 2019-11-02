<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <h1>Tambah Data Mahasiswa</h1>
        <?php
            $NRP = $_POST["NRP"];
            $nama = $_POST["nama"];
            $alamat = $_POST["file_foto"];
            $jurusan = $_POST["id_jur"];
            $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
            mysqli_select_db($conn,"universitas");
            $sqlstr="insert into mahasiswa1 (NRP,nama,alamat,id_jur)
            values ('$NRP','$nama','$alamat','$jurusan')";
            $hasil = mysqli_query($conn,$sqlstr);
            
            if($hasil) echo "<h3>Simpan data mahasiswa berhasil dilakukan</h3><br>";
            else echo "<h3>Gagal</h3><br>";
            mysqli_select_db($conn,"universitas");
            $hasil=mysqli_query($conn,"select nama from jurusan where id_jur='$jurusan'");
            $row=mysqli_fetch_array($hasil);
            $jurusan=$row[0];
            echo "NRP : $NRP <br>";
            echo "Nama : $nama <br>";
            echo "Alamat : $alamat <br>";
            echo "Jurusan : $jurusan <br>";
        ?>
        <a href="halamanawal.html">Return to Home</a>
    </body>
</html>