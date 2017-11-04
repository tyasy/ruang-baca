<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
   	<link rel="stylesheet" type="text/css" href="../../css/jquery-ui.css">
   	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
   	<link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/jquery-ui.js"></script>
</head>
<body>
<div class="backgroundHeader">
</div>
<div class="body">
	<?php include_once(ROOT_DIR . "/header.php"); ?>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
					<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="mainNavbar">
				<ul class="nav navbar-nav">
			    	<li><a href="/ruangbaca">Home</a></li>
			    	<li class="active"><a href="/ruangbaca/p/catalog">Catalog</a></li>
			    	<li><a href="/ruangbaca/p/quotes">Quotes</a></li>
			    	<li><a href="#">Reading Journal</a></li>
			    	<li><a href="#">RuBa Community</a></li>
			    	<li><a href="/ruangbaca/p/faq">FAQ</a></li>
				</ul>
				<form class="navbar-form navbar-right">
				    <div class="input-group">
				    	<input type="text" class="form-control" placeholder="Search">
				    	<div class="input-group-btn">
				    		<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				    	</div>
				    </div>
		    	</form>
			</div>
		</div>
	</nav>
	<div class="mainpage" style="max-width: 1000px; margin: auto; margin-bottom: 60px; height: -webkit-fill-available">
		<div class="row pageBukuHeader">
			<div class="col-md-12">
				<span class="judul">The Diary of a Young Girl</span>
			</div>
		</div>
		<div class="row pageBuku" style="">
			<div class="col-md-6 left" style="">
				<div class="row">
					<div class="col-md-5 fotoBuku">
						<img src="../../images/buku-9.JPG" align="center">
					</div>
					<div class="col-md-7 detailBuku">
						<span>Detail Buku</span>
						<table>
							<tr>
								<td style="font-weight: bold;">Penulis</td>
								<td>Anne Frank</td>
							</tr>
							<tr>
								<td style="font-weight: bold;">Kategori</td>
								<td>Sejarah</td>
							</tr>
							<tr>
								<td style="font-weight: bold;">Bahasa</td>
								<td>Inggris</td>
							</tr>
							<tr>
								<td style="font-weight: bold;">Pemilik</td>
								<td>Tyas Yuni</td>
							</tr>
							<tr>
								<td style="font-weight: bold;">Harga</td>
								<td>Rp 25000 / minggu</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 pinjam">
						<button class="btn">Tambah Ke Keranjang</button>
					</div>
				</div>
				
			</div>
			<div class="col-md-6 right" style="">
				<div class="row">
					<div class="col-md-12 sinopsis-header">
						<span class="header">Deskripsi</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 sinopsis-body">
						<span class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada urna ut diam vestibulum, ac vehicula sem blandit. Fusce laoreet felis a luctus rutrum. Praesent non purus arcu. Aenean semper, purus vitae lacinia ultricies, dolor sem rutrum elit, sit amet porttitor ante urna eget odio. Sed quis pellentesque metus, sit amet consequat magna. Ut aliquam eu arcu eu mollis. Donec laoreet sem odio. Fusce iaculis enim in sem pretium, nec aliquet nibh posuere. Fusce id lacinia orci. Mauris non dignissim tortor, quis porttitor lorem. Nunc vel turpis nec urna lobortis dictum. Ut lobortis nulla a sapien ullamcorper vulputate. Sed maximus efficitur nibh sit amet euismod. Phasellus dapibus lacus eleifend purus porta ultrices. Fusce orci augue, scelerisque quis turpis et, fermentum fringilla quam. Maecenas blandit rhoncus ipsum ut semper.</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 starReview">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer">
</div>
</body>
</html>