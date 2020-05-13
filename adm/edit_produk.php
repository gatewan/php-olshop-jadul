<link rel="stylesheet" href="css/style.css" type="text/css">
<div class="isi">
<h2>Daftar Komentar</h2>
<hr size=1>

<?php
include('koneksi.php');
$id=$_REQUEST['id'];?>
<form name='produk' method='post' action='index_admin.php?page=proses_edit'>
<?php

$sql=mysql_query("SELECT * FROM produk WHERE id_product=$id");
while($data=mysql_fetch_array($sql))
{
$id=$data['id_product'];
$nama=$data['nama_produk'];
$bahan=$data['bahan'];
$ukuran=$data['ukuran'];
$deskripsi=$data['deskripsi'];
$harga=$data['harga'];
$gambar=$data['gambar'];
echo "No	: $id<br>";
echo "Nama	: $nama<br>";
echo "Bahan	: $bahan<br>";
echo "Ukuran: $ukuran<br>"; 
echo "Deskripsi: $deskripsi<br>";
echo "Harga	: $harga<br>";
echo "Gambar: $gambar<br>"; ?>
<?php } ?>
<table>
		<tr>
			<td>Kode Barang</td>
			<td>:</td>
			<td><input type='text' name='kode' size='10' value=''></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type='text' name='nama' size='10' value=''></td>
		</tr>
		<tr>
			<td>Bahan</td>
			<td>:</td>
			<td><input type='text' name='bahan' size='10' value=''></td>
		</tr>
		<tr>
			<td>Ukuran</td>
			<td>:</td>
			<td><input type='text' name='ukuran' size='10' value=''></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td><textarea col='10' name='deskripsi'></textarea></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td><input type='text' name='harga' size='10' value=''></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td>:</td>
			<td><input type='file' name='userfile' size='10' value=''></td>
		</tr>
		<tr>
			<td><input type='submit' name='submit' value='INPUT'></td>
			<td></td>
			<td><input type='reset' name='reset' value='BATAL'></td>

		</tr>
</form>
</div></div>
<div id="footer">
&copy Copyright 2014
</div>