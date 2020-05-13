<?php
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$bahan=$_POST['bahan'];
$ukuran=$_POST['ukuran'];
$deskripsi=$_POST['deskripsi'];
$harga=$_POST['harga'];
$gambar=$_POST['userfile'];
include('koneksi.php'); //untuk mengkoneksikan ke database
//input data ke tabel bukutamu
$tamu="INSERT INTO produk VALUES('$kode','$nama','$bahan','$ukuran','$deskripsi','$harga','$gambar')";
$hasil=mysql_query($tamu);
echo "<font color=red size=5>Bukutamu berhasil diisi.</font>";
echo "<a href='index_admin.php?page=produk'><b>Lihat Produk</b></a>";
?>