<HTML>
    <HEAD>
        <title>Pencarian Data</title>
    </HEAD>
    <BODY>
        <h1>Pencarian Data Mahasiswa</h1>
        <?php
            $cari=$_GET['nama'];
            $conn=mysqli_connect("localhost","root","");
            mysqli_select_db($conn,"universitas");
            $sqlstr="select * from mahasiswa1 where nama like '%$cari%'";
            $hasil=mysqli_query($conn,$sqlstr);
            $jumlah=mysqli_num_rows($hasil);
            echo "<h3>Data ditemukan : $jumlah</h3>";
            while($record=mysqli_fetch_row($hasil)){
                echo "<br>NRP : $record[0] <br>";
                echo "Nama : $record[1] <br>";
                echo "Foto : $record[2] <br>";
                $sqlstr="select nama from jurusan where id_jur='$record[3]'";
                $hasil2=mysqli_fetch_row(mysqli_query($conn,$sqlstr));
                echo "Jurusan : $hasil2[0] <br>";
            }
        ?>
        <a href="halamanawal.html">Return to Home</a>
    </BODY>
</HTML>