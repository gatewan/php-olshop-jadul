<legend>Edit Komentar</legend>
<div id="products">
<hr size=1>

<?php
$id=$_POST['id'];
$kode=$_POST['id_product'];
$nama=$_POST['nama'];
$bahan=$_POST['bahan'];
$ukuran=$_POST['ukuran'];
$deskripsi=$_POST['deskripsi'];
$harga=$_POST['harga'];
$gambar=$_POST['gambar'];
include('koneksi.php');
$produk="UPDATE produk SET id='$id',id_product='$kode',nama='$nama',bahan='$bahan',ukuran='$ukuran',deskripsi='$deskripsi',harga='$harga',gambar='$gambar'
WHERE id_product='$id'";
$hasil=mysql_query($produk);
echo "<font color=red size=5>Bukutamu berhasil diubah.</font>";
echo "<a href='index_admin.php?page=lihat_bukutamu'>Lihat Bukutamu</a>";
?>
<br>
</div>