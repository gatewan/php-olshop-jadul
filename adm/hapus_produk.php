<link rel="stylesheet" href="css/style.css" type="text/css">
<div class="isi">
<legend>Hapus Komentar</legend>
<div id="products">
<hr size=1>
<?php

$id=$_REQUEST['id'];
include('koneksi.php');
$produk="DELETE FROM produk WHERE id_product='$id'";
$hasil=mysql_query($produk);
echo "<font color=red size=5>Data berhasil dihapus.</font>";
echo "<a href='index_admin.php?page=produk'>Lihat produk</a>";
?>
<br>
</div>
<div id="footer">
&copy Copyright 2014
</div>