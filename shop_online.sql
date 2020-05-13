# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                 127.0.0.1
# Database:             shop_online
# Server version:       5.0.51b-community-nt
# Server OS:            Win32
# Target-Compatibility: Standard ANSI SQL
# HeidiSQL version:     3.1 RC1 Revision: 1064
# --------------------------------------------------------

/*!40100 SET CHARACTER SET latin1;*/
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI';*/
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'shop_online'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ "shop_online" /*!40100 DEFAULT CHARACTER SET latin1 */;

USE "shop_online";


#
# Table structure for table 'admin'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "admin" (
  "id_user" int(10) NOT NULL,
  "username" varchar(20) NOT NULL,
  "password" varchar(20) NOT NULL,
  PRIMARY KEY  ("id_user")
) /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'admin'
#

/*!40000 ALTER TABLE "admin" DISABLE KEYS;*/
LOCK TABLES "admin" WRITE;
REPLACE INTO "admin" ("id_user", "username", "password") VALUES
	(1,'admin','ok');
UNLOCK TABLES;
/*!40000 ALTER TABLE "admin" ENABLE KEYS;*/


#
# Table structure for table 'bukutamu'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "bukutamu" (
  "id_tamu" tinyint(3) NOT NULL auto_increment,
  "nama" varchar(20) default NULL,
  "email" varchar(20) default NULL,
  "pesan" text,
  PRIMARY KEY  ("id_tamu")
) AUTO_INCREMENT=3 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'bukutamu'
#

/*!40000 ALTER TABLE "bukutamu" DISABLE KEYS;*/
LOCK TABLES "bukutamu" WRITE;
REPLACE INTO "bukutamu" ("id_tamu", "nama", "email", "pesan") VALUES
	(1,'yani','zani20','jossssssssssss');
REPLACE INTO "bukutamu" ("id_tamu", "nama", "email", "pesan") VALUES
	(2,'pandu','kpanduwibowo@yahoo.c','Sipp tenan');
UNLOCK TABLES;
/*!40000 ALTER TABLE "bukutamu" ENABLE KEYS;*/


#
# Table structure for table 'pesan'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "pesan" (
  "id_pesan" int(5) NOT NULL auto_increment,
  "id_product" int(10) NOT NULL,
  "nama_pemesan" varchar(30) NOT NULL,
  "alamat" text NOT NULL,
  "no_telp" varchar(15) NOT NULL,
  "email" varchar(30) NOT NULL,
  "jml_pesanan" tinyint(3) NOT NULL,
  PRIMARY KEY  ("id_pesan")
) AUTO_INCREMENT=15 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'pesan'
#

/*!40000 ALTER TABLE "pesan" DISABLE KEYS;*/
LOCK TABLES "pesan" WRITE;
REPLACE INTO "pesan" ("id_pesan", "id_product", "nama_pemesan", "alamat", "no_telp", "email", "jml_pesanan") VALUES
	(7,2014002,'Pandu','Mranggen RT 01 RW 01
Tegalrejo Bayat Klaten','087738484586','kpanduwibowo@yahoo.com',1);
REPLACE INTO "pesan" ("id_pesan", "id_product", "nama_pemesan", "alamat", "no_telp", "email", "jml_pesanan") VALUES
	(8,0,'hjh','hj','56','gh',1);
REPLACE INTO "pesan" ("id_pesan", "id_product", "nama_pemesan", "alamat", "no_telp", "email", "jml_pesanan") VALUES
	(9,0,'hjh','hj','56','gh',1);
REPLACE INTO "pesan" ("id_pesan", "id_product", "nama_pemesan", "alamat", "no_telp", "email", "jml_pesanan") VALUES
	(10,0,'','hjj','','hjh',0);
REPLACE INTO "pesan" ("id_pesan", "id_product", "nama_pemesan", "alamat", "no_telp", "email", "jml_pesanan") VALUES
	(11,0,'','hjh','','hj',0);
REPLACE INTO "pesan" ("id_pesan", "id_product", "nama_pemesan", "alamat", "no_telp", "email", "jml_pesanan") VALUES
	(12,0,'','hjh','','hj',0);
REPLACE INTO "pesan" ("id_pesan", "id_product", "nama_pemesan", "alamat", "no_telp", "email", "jml_pesanan") VALUES
	(13,0,'hjh','hjh','67','hj',2);
REPLACE INTO "pesan" ("id_pesan", "id_product", "nama_pemesan", "alamat", "no_telp", "email", "jml_pesanan") VALUES
	(14,0,'','dsjkfkaw','','SAKLJFOAJO',0);
UNLOCK TABLES;
/*!40000 ALTER TABLE "pesan" ENABLE KEYS;*/


#
# Table structure for table 'produk'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "produk" (
  "id_product" int(10) NOT NULL,
  "nama_produk" varchar(50) NOT NULL,
  "bahan" varchar(20) NOT NULL,
  "ukuran" varchar(10) NOT NULL,
  "deskripsi" text,
  "harga" int(20) NOT NULL,
  "gambar" varchar(1000) NOT NULL,
  PRIMARY KEY  ("id_product")
) /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'produk'
#

/*!40000 ALTER TABLE "produk" DISABLE KEYS;*/
LOCK TABLES "produk" WRITE;
REPLACE INTO "produk" ("id_product", "nama_produk", "bahan", "ukuran", "deskripsi", "harga", "gambar") VALUES
	(2014003,'gaun biru','velvet, brokat','S/M/L','Gaun brokat dengan lapisan velvet',500000,'f7.jpg');
UNLOCK TABLES;
/*!40000 ALTER TABLE "produk" ENABLE KEYS;*/
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
