<link rel="stylesheet" href="css/style.css" type="text/css">
<div class="isi">
<?php
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$bahan=$_POST['bahan'];
$ukuran=$_POST['ukuran'];
$deskripsi=$_POST['deskripsi'];
$harga=$_POST['harga'];
$gambar=$_POST['userfile'];

include('koneksi.php');
$barang="INSERT INTO produk VALUES('$kode','$nama','$bahan','$ukuran','$deskripsi','$harga','$gambar')";
$q=mysql_query($barang);
echo "<font color=red size=5>Data Barang berhasil diisi. </font>";
?>