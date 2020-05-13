<link rel="stylesheet" href="css/admin_style.css" type="text/css">
<div id="content">
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
<div class="isi">

<?php

$id=$_POST['pesan'];
$kode=$_POST['id_product'];
$nama=$_POST['nama_pemesan'];
$alamat=$_POST['alamat'];
$telp=$_POST['no_telp'];
$email=$_POST['email'];
$jmlpesan=$_POST['jml_pesanan'];
include('koneksi.php');

$pesan="INSERT INTO pesan VALUES('','$kode','$nama','$alamat','$telp','$email','$jmlpesan')";
$sql=mysql_query($pesan);
echo "<font color=red size=5>Pemesanan Berhasil. </font>";
?>
</div>
</div>
</div>
</div>