<link rel="stylesheet" href="css/admin_style.css" type="text/css">
<div id="content">
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
<div class="isi">
<h2>DAFTAR PESANAN</h2>
<hr size=1>

<?php
include('koneksi.php');
$sql=mysql_query("SELECT * FROM pesan");
while($_POST=mysql_fetch_array($sql))
{
$id=$_POST['id_pesan'];
$kode=$_POST['id_product'];
$nama=$_POST['nama_pemesan'];
$alamat=$_POST['alamat'];
$telp=$_POST['no_telp'];
$email=$_POST['email'];
$jmlpesan=$_POST['jml_pesanan'];
echo "ID pemesan : $id<br>";
echo "Kode Barang	: $kode<br>";
echo "Nama	: $nama<br>";
echo "Alamat  : $alamat<br>";
echo "No. Telp	: $telp<br>";
echo "Email	: $email<br>";
echo "Jumlah Pesanan	: $jmlpesan<br>";
echo "<a href='index_admin.php?page=hapus_pesan&id=$id'> Hapus </a>";
echo "<hr size=1>";
}
?>
</div>
</div>
</div>
</div>