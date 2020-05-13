
<link rel="stylesheet" href="css/admin_style.css" type="text/css">
<div id="content">
<div class="input_barang">
<h2 align="center">INPUT BARANG</h2>
<form name='barang' method='post' action='index_admin.php?page=proses_input'>
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
</table>
</div>
</div>
