
<link rel="stylesheet" href="css/style.css" type="text/css">
<div class="isi">
<h2>Daftar Testimoni</h2>
<hr size=1>

<?php
include('koneksi.php');
$sql=mysql_query("SELECT * FROM bukutamu");
while($data=mysql_fetch_array($sql))
{
$id=$data['id_tamu'];
$nama=$data['nama'];
$email=$data['email'];
$pesan=$data['pesan'];
echo "No	: $id<br>";
echo "Nama	: $nama<br>";
echo "E-Mail  : $email<br>";
echo "Pesan	: $pesan<br>";
echo "<a href='index_admin.php?page=edit_tamu&id=$id'> Edit </a>";
echo "<a href='index_admin.php?page=hapus_tamu&id=$id'> Hapus </a>";
echo "<hr size=1>";
}
?>
</div>
<div id="footer">
&copy Copyright 2014
</div>