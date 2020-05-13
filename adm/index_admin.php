
		<?php
				//KONTENT
				include_once("global.php");
				$page=$_REQUEST["page"];
				if($page=="beranda" or $page==null)
					include "beranda.php";
				else if($page=="header")
					include "header.php";
				else if($page=="proses_input")
					include "proses_input.php";
				else if($page=="lihat_bukutamu")
					include "lihat_bukutamu.php";
				else if($page=="edit_tamu")
					include "edit_tamu.php";
				else if($page=="hapus_tamu")
					include "hapus_tamu.php";
				else if($page=="hapus_produk")
					include "hapus_produk.php";
				else if($page=="proses_edit")
					include "proses_edit.php";
				else if($page=="produk")
					include "produk.php";
				else if($page=="input_produk")
					include "input_produk.php";
				else if($page=="input_proses")
					include "input_proses.php";
				else if($page=="edit_produk")
					include "edit_produk.php";
				else if($page=="hapus_pesan")
					include "hapus_pesan.php";
				else if($page=="pesanan")
					include "pesanan.php";
					
            ?>