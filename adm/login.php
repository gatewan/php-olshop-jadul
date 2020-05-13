<?php
include "koneksi.php";

$user=$_POST["user"];
$pass=$_POST["pass"];

$query = "SELECT * FROM admin";
$result = mysql_query($query);
$data = mysql_fetch_array($result);
$USERNAME = $data["username"];
$PASSWORD = $data["password"];

if($USERNAME==$user and $PASSWORD == $pass)
{
	session_start();
	session_register("SES_USERNAME");
	$_SESSION["SES_USERNAME"] = $USERNAME;
	echo "Selamat Datang di <a href='index_admin.php'><h1>Halaman Admin</h1></a>";
}
else
	echo "Gagal Login";
?>