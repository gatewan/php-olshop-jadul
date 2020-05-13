
<link rel="stylesheet" href="css/admin_style.css" type="text/css" media="screen"/>

	<!-- Content -->
	<div id="content">
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
			  <!--a href="index_admin.php?page=input_produk" class="button"-->
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
        <?php echo $data->id_product; ?></br>
		<?php echo $data->nama_produk; ?></br>
		<?php echo $data->bahan; ?></br>
		<?php echo $data->ukuran; ?></br>
		<?php echo $data->deskripsi; ?></br>
		<?php echo $data->harga; ?>
       </div> 
     </td>
      
  <?php
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
	<div id="footer">
	&copy Copyright 2014
	</div>