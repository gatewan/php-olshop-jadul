<?php
$nama=$_POST['nama']; //variable yang dikirim dari form tadi
$email=$_POST['email']; //
$pesan=$_POST['pesan'];

include('koneksi.php'); //untuk mengkoneksikan ke database
//input data ke tabel bukutamu
$tamu="INSERT INTO bukutamu VALUES('','$nama','$email','$pesan')";
$hasil=mysql_query($tamu);
echo "<font color=red size=5>Bukutamu berhasil diisi.</font>";
echo "<a href='index.php?page=lihat_bukutamu'><b>Lihat Bukutamu</b></a>";
?>