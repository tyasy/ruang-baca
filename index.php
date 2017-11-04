<?php
	session_start();
	include("config.php");

	$queryBukuTerbaru = mysqli_query($db,"SELECT b.idbuku, b.judul, b.penulis, b.hargasewa, b.filegambar, b.deskripsi, p.username, p.kota FROM buku as b, pengguna as p WHERE b.username = p.username");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
   	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
   	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   	<link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
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
			    	<li class="active"><a href="<?php echo ROOT_URL;?>">Home</a></li>
			    	<li><a href="<?php echo ROOT_URL . '/p/catalog';?>">Catalog</a></li>
			    	<li><a href="<?php echo ROOT_URL . '/p/quotes';?>">Quotes</a></li>
			    	<li><a href="#">Reading Journal</a></li>
			    	<li><a href="#">RuBa Community</a></li>
			    	<li><a href="<?php echo ROOT_URL . '/p/faq';?>">FAQ</a></li>
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
	<div class="mainpage row" style="padding: 0px 50px">
		<div class="col-md-3" style="margin-bottom: 60px;">
			<div class="sideBar" style="padding: 0px 20px;">
				<div class="userReviews">
					<div class="sectionTitle">
						<label>READING JOURNAL</label>
					</div>
					<div class="home-reviews-wrapper">
						<div class="home-reviews">
							<div class="tanggal">
								<?php echo date('d m Y'); ?>
							</div>
							<div class="judul click">
								The Diary of a Young Girl
							</div>
							<div class="user">
								<div class="profpic">
								</div>
								<div class="nama click">
									Nikmatun Sabil
								</div>
							</div>
							<div class="review">
								"Bukunya bagus uwuuuuuuuuuuuuuuuuuuuuuuuuuu"
							</div>
							<div class="bottomsection">
								<a href="" style="float: right;">Read More</a>
							</div>
						</div>
						<div class="home-reviews">
							<div class="tanggal">
								<?php echo date('d m Y'); ?>
							</div>
							<div class="judul click">
								The Adventures of Captain Underpants
							</div>
							<div class="user">
								<div class="profpic">
								</div>
								<div class="nama click">
									Nikmatun Sabil
								</div>
							</div>
							<div class="review">
								"aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
							</div>
							<div class="bottomsection">
								<a href="" style="float: right;">Read More</a>
							</div>
						</div>
						<div class="home-reviews">
							<div class="tanggal">
								<?php echo date('d m Y'); ?>
							</div>
							<div class="judul click">
								The Tiger's Daughter
							</div>
							<div class="user">
								<div class="profpic">
								</div>
								<div class="nama click">
									Nikmatun Sabil
								</div>
							</div>
							<div class="review">
								"fsugoi"
							</div>
							<div class="bottomsection">
								<a href="" style="float: right;">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9 page">
			<div class="sectionTitle2">
				<label>Populer</label>
			</div>
			<div id="carousel1" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel1" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel1" data-slide-to="1"></li>
				    <li data-target="#carousel1" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<div class="displayBuku">
							<img src="images/buku-1.JPG" align="center">
							<div class="book-detail">
								<div class="book-name">Wives of War</div>
								<div class="book-author">by Soraya M.Lane</div>
								<div class="book-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus vehicula diam, et venenatis nisi aliquet ut. Ut vestibulum sapien vitae blandit ullamcorper. Curabitur eu condimentum turpis. Donec ultrices sit amet dolor eu posuere. In pulvinar, dui in vestibulum tincidunt, arcu nisi suscipit purus, nec luctus nisl mauris et orci. Nulla porttitor justo id lorem vulputate, at molestie turpis vestibulum. Fusce ex ipsum, aliquet in ex id, facilisis placerat purus. Aenean mattis nisl tincidunt enim sollicitudin aliquam nec non urna. Aenean lorem ex, pretium vel venenatis vel, iaculis volutpat tellus. Vestibulum maximus lorem libero, eget egestas ligula elementum a.</div>
								<div class="book-owner">Pemilik buku: <span>Tyas Yuni</span> | Kota: <span>Jakarta</span></div>
								<div class="book-price"><span class="harga">Rp 20.000 / minggu</span><button type="button" class="btn add-to-cart">Lihat</button></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="displayBuku">
							<img src="images/buku-2.JPG" align="center">
							<div class="book-detail">
								<div class="book-name">FAHRENHEIT 451</div>
								<div class="book-author">by Ray Bradbury</div>
								<div class="book-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus vehicula diam, et venenatis nisi aliquet ut. Ut vestibulum sapien vitae blandit ullamcorper. Curabitur eu condimentum turpis. Donec ultrices sit amet dolor eu posuere. In pulvinar, dui in vestibulum tincidunt, arcu nisi suscipit purus, nec luctus nisl mauris et orci. Nulla porttitor justo id lorem vulputate, at molestie turpis vestibulum. Fusce ex ipsum, aliquet in ex id, facilisis placerat purus. Aenean mattis nisl tincidunt enim sollicitudin aliquam nec non urna. Aenean lorem ex, pretium vel venenatis vel, iaculis volutpat tellus. Vestibulum maximus lorem libero, eget egestas ligula elementum a.</div>
								<div class="book-owner">Pemilik buku: <span>Tyas Yuni</span> | Kota: <span>Jakarta</span></div>
								<div class="book-price"><span class="harga">Rp 20.000 / minggu</span><button type="button" class="btn add-to-cart">Lihat</button></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="displayBuku">
							<img src="images/buku-3.JPG" align="center">
							<div class="book-detail">
								<div class="book-name">A Man Called Ove</div>
								<div class="book-author">by Fredrik Backman</div>
								<div class="book-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus vehicula diam, et venenatis nisi aliquet ut. Ut vestibulum sapien vitae blandit ullamcorper. Curabitur eu condimentum turpis. Donec ultrices sit amet dolor eu posuere. In pulvinar, dui in vestibulum tincidunt, arcu nisi suscipit purus, nec luctus nisl mauris et orci. Nulla porttitor justo id lorem vulputate, at molestie turpis vestibulum. Fusce ex ipsum, aliquet in ex id, facilisis placerat purus. Aenean mattis nisl tincidunt enim sollicitudin aliquam nec non urna. Aenean lorem ex, pretium vel venenatis vel, iaculis volutpat tellus. Vestibulum maximus lorem libero, eget egestas ligula elementum a.</div>
								<div class="book-owner">Pemilik buku: <span>Vareza Noorliko</span> | Kota: <span>Meikarta</span></div>
								<div class="book-price"><span class="harga">Rp 20.000 / minggu</span><button type="button" class="btn add-to-cart">Lihat</button></div>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel1" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
	    			<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel1" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
	    			<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="sectionTitle2">
						<label>Giveaway</label>
					</div>
					<div id="carousel2" class="carousel slide carousel-small" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel2" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel2" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<div class="displayBuku small">
									<div class="top">
										<img src="images/buku-6.JPG" align="center">
										<div class="book-detail">
											<div class="book-name">Grant</div>
											<div class="book-author">by Ron Chernow</div>
											<div class="book-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus vehicula diam, et venenatis nisi aliquet ut. Ut vestibulum sapien vitae blandit ullamcorper. Curabitur eu condimentum turpis. Donec ultrices sit amet dolor eu posuere. In pulvinar, dui in vestibulum tincidunt, arcu nisi suscipit purus, nec luctus nisl mauris et orci.</div>
										</div>
									</div>
									<div class="bot">
										<div class="book-owner">Pemilik buku: <span>Tyas Yuni</span> | Kota: <span>Jakarta</span></div>
										<div class="book-price giveaway"><span class="harga">---</span><button type="button" class="btn add-to-cart">Ambil</button></div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="displayBuku small">
									<div class="top">
										<img src="images/buku-7.JPG" align="center">
										<div class="book-detail">
											<div class="book-name">Minecraft: The Island</div>
											<div class="book-author">by Max Brooks</div>
											<div class="book-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus vehicula diam, et venenatis nisi aliquet ut. Ut vestibulum sapien vitae blandit ullamcorper. Curabitur eu condimentum turpis.</div>
										</div>
									</div>
									<div class="bot">
										<div class="book-owner">Pemilik buku: <span>Vareza Noorliko</span> | Kota: <span>Meikarta</span></div>
										<div class="book-price giveaway"><span class="harga">---</span><button type="button" class="btn add-to-cart">Ambil</button></div>
									</div>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#carousel2" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
			    			<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel2" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
			    			<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-6" style="display: flex; flex-flow: column">
					<div class="sectionTitle2">
						<label>Trade Request</label>
					</div>
					<div id="carousel3" class="carousel slide carousel-small" data-ride="carousel">
						<ol class="carousel-indicators" style="bottom: -23px">
							<li data-target="#carousel3" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel3" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<div class="trade-display">
									<div class="judul">Tukar buku A saya dengan buku B</div>
									<div class="requester">dari: <span>Vareza Noorliko</span> | Kota: <span>Meikarta</span></div>
									<div class="request">Request: <span>buku A Lorem ipsum dolor sit amet</span></div>
									<div class="offer">Offer: <span>buku B Lorem ipsum dolor sit amet</span></div>
								</div>
							</div>
							<div class="item">
								<div class="trade-display">
									<div class="judul">WTB buku langka</div>
									<div class="requester">dari: <span>Tyas Yuni</span> | Kota: <span>Jakarta</span></div>
									<div class="request">Request: <span>buku langka</span></div>
									<div class="offer">Offer: <span>duit 10rb haaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</span></div>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#carousel3" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" style="top: 42%"></span>
			    			<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel3" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" style="top: 42%"></span>
			    			<span class="sr-only">Next</span>
						</a>
					</div>
					<div class="sectionTitle2">
						<label>Quotes</label>
					</div>
					<div id="carousel4" class="carousel slide carousel-small" data-ride="carousel">
						<ol class="carousel-indicators" style="bottom: -23px">
							<li data-target="#carousel4" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel4" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<div class="quote-display">
									<div class="quote"><i class="fa fa-quote-left" aria-hidden="true"></i> <span>Don't cry because it's over, smile because it happened.</span></div>
									<div class="source"><i class="glyphicon glyphicon-minus"></i> <span>Dr. Seuss</span></div>
									<div class="poster">Tyas</div>
								</div>
							</div>
							<div class="item">
								<div class="quote-display">
									<div class="quote"><i class="fa fa-quote-left" aria-hidden="true"></i> <span>So many books, so little time.</span></div>
									<div class="source"><i class="glyphicon glyphicon-minus"></i> <span>Frank Zappa</span></div>
									<div class="poster">Tyas</div>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#carousel4" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" style="top: 42%"></span>
			    			<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel4" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" style="top: 42%"></span>
			    			<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="sectionTitle2">
						<label>Terbaru</label>
					</div>
					<div class="home-newbook">
						<div class="top grid-item">
							<ul>
								<?php
									while($data = mysqli_fetch_array($queryBukuTerbaru)){
										$urlGambar = ROOT_DIR . "/images/" . $data['filegambar'];
										if(file_exists($urlGambar)){
											$gambarBuku = $data['filegambar'];
										} else {
											$gambarBuku = "default_cover.JPG";
										} ?>
								<li>
									<div class="displayBuku small2">
										<img src="images/<?php echo $gambarBuku;?>" align="center">
										<div class="book-detail">
											<div class="book-name"><?php echo $data['judul'];?></div>
											<div class="book-author">by <?php echo $data['penulis'];?></div>
											<div class="book-owner">Pemilik buku: <span><?php echo $data['username'];?></span> - <span><?php echo $data['kota'];?></span></div>
											<div class="book-price"><span class="harga">Rp <?php echo $data['hargasewa'];?> / minggu</span></div>
										</div>
									</div>
								</li>
								<?php } ?>
							</ul>
						</div>
						<div class="bot">
							<button class="btn">Lihat Semua >></button>
						</div>
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