
<link rel="stylesheet" href="css/admin_style.css" type="text/css" media="screen"/>

	<!-- Content -->
	<div id="content">
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
			  <a href="index_admin.php?page=input_produk" class="button">TAMBAH</a>
              <div id="produk">

<?php
mysql_connect("localhost","root","");
 
mysql_select_db("shop_online");
 
$q=mysql_query("SELECT * FROM produk");
 
?>
 
<table border=0px cellpadding='10'>
  <tr>
 
<?php
 
  $jml_kolom=3;
 
  $cnt = 0;
   
  while($data=mysql_fetch_object($q))
  {
      if ($cnt >= $jml_kolom)
      {
          echo "</tr><tr>";
          $cnt = 0;
    }
 
    $cnt++;
 
  ?>
 
     <td align=left>      
       <div>
			<img width='120px' valign='bottom' src="images/<?php echo $data->gambar; ?>">
       </div>    
       <div>
	        </div> 
     </td>
      
  <?php
  }
	
  ?>
        <?php
include('koneksi.php');
$sql=mysql_query("SELECT * FROM produk");
while($data=mysql_fetch_array($sql))
{
$id=$data['id_product'];
$nama=$data['nama'];
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
echo "Gambar: $gambar<br>";
echo "<a href='index_admin.php?page=edit_produk&id=$id'> Edit </a>";
echo "<a href='index_admin.php?page=hapus_produk&id=$id'> Hapus </a>";
}
?>
  
 
  </tr>
</table>
</div>
	
                
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Content -->
	</div>
	