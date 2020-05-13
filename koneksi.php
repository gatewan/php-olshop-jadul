<?php
$host='localhost';
$user='root';
$pass='';
$database='shop_online';
$conn=mysql_connect($host,$user,$pass);
if(!$conn) die ('Gagal Melakukan Koneksi');
mysql_select_db($database,$conn) or die ('Database Tidak DItemukan di Server')

?>