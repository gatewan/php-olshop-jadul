<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Moleskine Notebook with jQuery Booklet</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Moleskine Notebook with jQuery Booklet" />
        <meta name="keywords" content="jquery, book, flip, pages, moleskine, booklet, plugin, css3 "/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
		<script src="booklet/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="booklet/jquery.booklet.1.1.0.min.js" type="text/javascript"></script>
		<script src="booklet/jquery.jcarousel.pack.js" type="text/javascript"></script>
		<script src="booklet/jquery.slide.js" type="text/javascript"></script>
		<script src="booklet/jquery-func.js" type="text/javascript"></script>

		<link href="booklet/jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />
		<link rel="stylesheet" href="css/admin_style.css" type="text/css" media="screen"/>

		<script src="cufon/cufon-yui.js" type="text/javascript"></script>
		<script src="cufon/ChunkFive_400.font.js" type="text/javascript"></script>
		<script src="cufon/Note_this_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1,p,.b-counter');
			Cufon.replace('.book_wrapper a', {hover:true});
			Cufon.replace('.title', {textShadow: '1px 1px #C59471', fontFamily:'ChunkFive'});
			Cufon.replace('.reference a', {textShadow: '1px 1px #C59471', fontFamily:'ChunkFive'});
			Cufon.replace('.loading', {textShadow: '1px 1px #000', fontFamily:'ChunkFive'});
		</script>
    </head>
    <body>
	<h1 class="title">HALAMAN ADMIN</h1>
	<div class="container">
		<div class="aside_menu">
			<ul>
			   <li><a href="index_admin.php?page=beranda">Beranda</a></li>
			   <li><a href="index_admin.php?page=header">Header Promo</a></li>
			   <li><a href="index_admin.php?page=produk">Produk</a></li>
			   <li><a href="index_admin.php?page=pesanan">Pesanan</a></li>
			   <li><a href="index_admin.php?page=lihat_bukutamu">Bukutamu</a></li>
			   <li><a href="logout.php?page=logout">Logout</a></li>
			</ul>
		</div>
    </body>
</html>