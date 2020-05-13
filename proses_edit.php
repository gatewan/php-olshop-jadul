<legend>Edit Komentar</legend>
<div id="products">
<hr size=1>
<?php
$id=$_POST['id'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];

include('koneksi.php');
$tamu="UPDATE bukutamu SET nama='$nama',email='$email',pesan='$pesan'
WHERE id_tamu='$id'";
$hasil=mysql_query($tamu);
echo "<font color=red size=5>Bukutamu berhasil diubah.</font>";
echo "<a href='index.php?page=lihat_bukutamu'>Lihat Bukutamu</a>";
?>
<br>
</div>