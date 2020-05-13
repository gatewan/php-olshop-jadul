
<link rel="stylesheet" href="css/style.css" type="text/css">
<div class="isi">
<h2>Form Pemesanan</h2>
<form name='pesan' method='post' action='index.php?page=proses_input_pesanan'>
	<table>
		<tr>
			<td>Kode Barang</td>
			<td>:</td>
			<td><input type='text' name='kodebarang' size='10' value=''></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type='text' name='nama' size='50' value=''></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea col='10' name='alamat'></textarea></td>
		</tr>
		<tr>
			<td>No. Telp</td>
			<td>:</td>
			<td><input type='text' name='telp' maxlength='120' size='20' value='' onkeyup='angka(e)'></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type='text' name='email' size='20' value=''></td>
		</tr>
		<tr>
			<td>Jumlah Pesanan</td>
			<td>:</td>
			<td><input type='text' name='jmlpesan' size='5' value='' onkeyup='angka(e)'></td>
		</tr>
		<tr>
			<td><input type='submit' name='submit' value='PESAN'></td>
			<td></td>
			<td><input type='reset' name='reset' value='BATAL'></td>

		</tr>

</form>
</table>
</div>
<div id="footer">
&copy Copyright 2014
</div>