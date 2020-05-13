<legend>Hapus Komentar</legend>
<div id="products">
<hr size=1>
<?php

$id=$_REQUEST['id'];
include('koneksi.php');
$tamu="DELETE FROM bukutamu WHERE id_tamu='$id'";
$hasil=mysql_query($tamu);
echo "<font color=red size=5>Data berhasil dihapus.</font>";
echo "<a href='index.php?page=lihat_bukutamu'>Lihat Bukutamu</a>";
?>
<br>
</div>
<div id="footer">
&copy Copyright 2014
</div>