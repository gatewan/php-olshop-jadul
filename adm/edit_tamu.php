<link rel="stylesheet" href="css/style.css" type="text/css">
<div class="isi">
<h2>Daftar Komentar</h2>
<hr size=1>

<?php
include('koneksi.php');
$id=$_REQUEST['id'];?>
<form name='tamu' method='post' action='index_admin.php?page=proses_edit'>
<?php

$sql=mysql_query("SELECT * FROM bukutamu WHERE id_tamu=$id");
while($data=mysql_fetch_array($sql))
{
$id=$data['id_tamu'];
$nama=$data['nama'];
$email=$data['email'];
$pesan=$data['pesan'];
echo "No	: $id<br>";
echo "Nama	: $nama<br>";
echo "E-Mail  : $email<br>";
echo "Pesan	: $pesan<br>"; ?>
<input type='hidden' name='id' value='<?php echo $id; ?>'>
Nama        :<input type='text' name='nama' value='<?php echo $nama; ?>'><br>
Email       :<input type='text' name='email' value='<?php echo $email; ?>'><br>
Komentar    :<br><textarea name='pesan' ><?php echo $pesan; ?></textarea><br>
<input type='submit' name='submit' value='Send'>
<input type='reset' name='reset' value='Reset'>
<?php } ?>
</form>
</div></div>
<div id="footer">
&copy Copyright 2014
</div>