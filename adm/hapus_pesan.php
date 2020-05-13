<div id="content">
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
<div id="isi">
<h2 align="center">HAPUS PESANAN</h2>
<hr size=1>
<?php
$id=$_REQUEST['id'];
include('koneksi.php');
$pesan="DELETE FROM pesan WHERE id_pesan=$id";
$sql=mysql_query($pesan);
echo "<font color=red size=5 align=center>Data berhasil dihapus.</font>";
echo "<a href='index_admin.php?page=pesanan'>Lihat Pesanan</a>";

?>
<br>
</div>
</div>
</div>
</div>