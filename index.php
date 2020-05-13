
		<?php
				//KONTENT
				include_once("global.php");
				$page=$_REQUEST["page"];
				if($page=="beranda" or $page==null)
					include "beranda.php";
				else if($page=="cara_pesan")
					include "cara_pesan.php";
				else if($page=="pesan")
					include "pesan.php";
				else if($page=="tentang")
					include "tentang.php";
				else if($page=="kontak")
					include "kontak.php";
				else if($page=="bukutamu")
					include "bukutamu.php";
				else if($page=="proses_input")
					include "proses_input.php";
				else if($page=="lihat_bukutamu")
					include "lihat_bukutamu.php";
				else if($page=="edit_tamu")
					include "edit_tamu.php";
				else if($page=="hapus_tamu")
					include "hapus_tamu.php";
				else if($page=="proses_edit")
					include "proses_edit.php";
				else if($page=="proses_input_pesanan")
					include "proses_input_pesanan.php";
            ?>