<?php
	session_start();
	include("config.php");

	$queryBukuTerbaru = mysqli_query($db,"SELECT b.idbuku, b.judul, b.penulis, b.hargasewa, b.filegambar, b.deskripsi, p.namapengguna, p.kota FROM buku as b, pengguna as p WHERE b.username = p.username");
	$queryQuotes = mysqli_query($db,"SELECT q.idquotes, q.isiquotes, q.sumber, p.namapengguna FROM quotes as q, pengguna as p WHERE q.username = p.username");
	$queryTrade = mysqli_query($db,"SELECT t.idtrade, t.judultrade, t.request, t.offer, p.namapengguna, p.kota FROM trade as t, pengguna as p WHERE t.username = p.username");
	$queryGiveaway = mysqli_query($db,"SELECT g.idgiveaway, g.judulbuku, g.penulisbuku, g.filegambar, g.isigiveaway, p.namapengguna, p.kota FROM giveaway as g, pengguna as p WHERE g.username = p.username");
	$queryPopuler = mysqli_query($db,"SELECT b.idbuku, b.judul, b.penulis, b.hargasewa, b.filegambar, b.deskripsi, p.namapengguna, p.kota FROM buku as b, pengguna as p WHERE b.username = p.username");
	$queryJournal = mysqli_query($db,"SELECT r.idjurnal, r.juduljurnal, r.tanggal, r.tulisan, r.filegambar, p.namapengguna, p.kota FROM readingjournal as r, pengguna as p WHERE r.username = p.username");
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
	<div class="header">
		<div class="topcolor" style="height: 10px; background-color: #7cb71b"></div>
		<div class="headerTop">
			<div class="logo">
				<img src="images/logo3.PNG" width="200">
			</div>
			<div class="cart container">
				<div class="dropdown">
					<button class="cartBtn dropdown-toggle" type="button" data-toggle="dropdown">
						<span class="cart-icon"><i class="glyphicon glyphicon-shopping-cart"></i> Cart</span>
						<div class="cart-info"><span>2</span> Item(s) | Rp <span>40.000</span></div>
					</button>
					<ul class="dropdown-menu cart-dropdown">
						<li class="cartItem">
							<img src="images/buku-4.JPG">
							<div class="cartItem-info">
								<div class="cartItem-name">Elite: Reclamation</div>
								<div class="cartItem-author">by Drew Wagar</div>
								<div class="cartItem-price">Rp <span>20.000</span><button><span class="glyphicon glyphicon-remove"></span> Hapus</button></div>
							</div>
						</li>
						<li class="cartItem">
							<img src="images/buku-5.JPG">
							<div class="cartItem-info">
								<div class="cartItem-name">Red Hope (A Novel)</div>
								<div class="cartItem-author">by John Dreese</div>
								<div class="cartItem-price">Rp <span>20.000</span><button><span class="glyphicon glyphicon-remove"></span> Hapus</button></div>
							</div>
						</li>
						<li class="divider"></li>
						<li>
							<button class="btn clear-cart"><span class="glyphicon glyphicon-remove"></span> Kosongkan</button>
							<button class="btn checkout" style="float: right;"><span class="glyphicon glyphicon-share"></span> Check Out</button>
						</li>
					</ul>
				</div>
			</div>
			<!-- <button class="btn register">Register</button>
			<button class="btn login">Login</button> -->
			<button class="btn userProfile">
				<table>
					<tr>
						<td class="profpic"></td>
						<td class="nama" style="padding-left: 10px">NamaUser</td>
					</tr>
				</table>
			</button>
		</div>
	</div>
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
						<?php
							while($dataJurnal = mysqli_fetch_array($queryJournal)){
								?>
						<div class="home-reviews">
							<div class="tanggal">
								<?php echo $dataJurnal['tanggal']; ?>
							</div>
							<div class="judul click">
								<?php echo $dataJurnal['juduljurnal']; ?>
							</div>
							<div class="user">
								<div class="profpic">
								</div>
								<div class="nama click">
									<?php echo $dataJurnal['namapengguna']; ?>
								</div>
							</div>
							<div class="review">
								"<?php echo $dataJurnal['tulisan']; ?>"
							</div>
							<div class="bottomsection">
								<a href="" style="float: right;">Read More</a>
							</div>
						</div>
						<!--
						<div class="home-reviews">
							<div class="tanggal">
								<?php// echo date('d m Y'); ?>
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
								<?php //echo date('d m Y'); ?>
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
						-->
						<?php } ?>
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
					<?php
						$counter = 1;
						while($dataPopuler= mysqli_fetch_array($queryPopuler)){
							$urlGambar = ROOT_DIR . "/images/" . $dataPopuler['filegambar'];
									if(file_exists($urlGambar)){
										$gambarBuku = $dataPopuler['filegambar'];
									} else {
										$gambarBuku = "default_cover.JPG";
									} ?>
					<div class="item<?php if($counter <= 1){echo " active"; } ?>">
						<div class="displayBuku">
							<img src="images/<?php echo $gambarBuku ?>" align="center">
							<div class="book-detail">
								<div class="book-name"><?php echo $dataPopuler['judul'];?></div>
								<div class="book-author">by <?php echo $dataPopuler['penulis'];?></div>
								<div class="book-desc"><?php echo $dataPopuler['deskripsi'];?></div>
								<div class="book-owner">Pemilik buku: <span><?php echo $dataPopuler['namapengguna'];?></span> | Kota: <span><?php echo $dataBuku['kota'];?></span></div>
								<div class="book-price"><span class="harga">Rp <?php echo $dataPopuler['hargasewa'];?> / minggu</span><button type="button" class="btn add-to-cart">Lihat</button></div>
							</div>
						</div>
					</div>
					<!--
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
					-->
					<?php 
						$counter++;
					}?>
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
						    <li data-target="#carousel2" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<?php
							$counter = 1;
							while($dataGiveaway= mysqli_fetch_array($queryGiveaway)){
								$urlGambarG = ROOT_DIR . "/images/" . $dataGiveaway['filegambar'];
										if(file_exists($urlGambarG)){
											$gambarBukuG = $dataGiveaway['filegambar'];
										} else {
											$gambarBukuG = "default_cover.JPG";
										} ?>
							<div class="item<?php if($counter <= 1){echo " active"; } ?>">
								<div class="displayBuku small">
									<div class="top">
										<img src="images/<?php echo $gambarBukuG;?>" align="center">
										<div class="book-detail">
											<div class="book-name"><?php echo $dataGiveaway['judulbuku'];?></div>
											<div class="book-author">by <?php echo $dataGiveaway['penulisbuku'];?></div>
											<div class="book-desc"><?php echo $dataGiveaway['isigiveaway'];?></div>
										</div>
									</div>
									<div class="bot">
										<div class="book-owner">Pemilik buku: <span><?php echo $dataGiveaway['namapengguna'];?></span> | Kota: <span><?php echo $dataGiveaway['kota'];?></span></div>
										<div class="book-price giveaway"><span class="harga">TOTALLY FREE!</span><button type="button" class="btn add-to-cart">Ambil</button></div>
									</div>
								</div>
							</div>
							<!---
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
							--->
							<?php $counter++;
							} ?>
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
							<?php
							$counter = 1;
							while($dataTrade= mysqli_fetch_array($queryTrade)){?>
							<div class="item<?php if($counter <= 1){echo " active"; } ?>">
								<div class="trade-display">
									<div class="judul"><?php echo $dataTrade['judultrade'];?></div>
									<div class="requester">dari: <span><?php echo $dataTrade['namapengguna'];?></span> | Kota: <span><?php echo $dataTrade['kota'];?></span></div>
									<div class="request">Request: <span><?php echo $dataTrade['request'];?></span></div>
									<div class="offer">Offer: <span><?php echo $dataTrade['offer'];?></span></div>
								</div>
							</div>
							<!--
							<div class="item">
								<div class="trade-display">
									<div class="judul">WTB buku langka</div>
									<div class="requester">dari: <span>Tyas Yuni</span> | Kota: <span>Jakarta</span></div>
									<div class="request">Request: <span>buku langka</span></div>
									<div class="offer">Offer: <span>duit 10rb haaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</span></div>
								</div>
							</div>
							-->
							<?php $counter++;
							} ?>
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
						    <li data-target="#carousel4" data-slide-to="2"></li> 
						</ol>
						<div class="carousel-inner">
							<?php
							$counter = 1;
							while($dataQuotes = mysqli_fetch_array($queryQuotes)){?>		
							<div class="item<?php if($counter <= 1){echo " active"; } ?>">
								<div class="quote-display">
									<div class="quote"><i class="fa fa-quote-left" aria-hidden="true"></i> <span><?php echo $dataQuotes['isiquotes'];?></span></div>
									<div class="source"><i class="glyphicon glyphicon-minus"></i> <span><?php echo $dataQuotes['sumber'];?></span></div>
									<div class="poster"><?php echo $dataQuotes['namapengguna'];?></div>
									
								</div>
								<!---
							<div class="item">
								<div class="quote-display">
									<div class="quote"><i class="fa fa-quote-left" aria-hidden="true"></i> <span>So many books, so little time.</span></div>
									<div class="source"><i class="glyphicon glyphicon-minus"></i> <span>Frank Zappa</span></div>
									<div class="poster">Tyas</div>
								</div>
							</div>
							-->
							</div>
							<?php $counter++;
							} ?>
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
									while($dataBuku = mysqli_fetch_array($queryBukuTerbaru)){
										$urlGambar = ROOT_DIR . "/images/" . $dataBuku['filegambar'];
										if(file_exists($urlGambar)){
											$gambarBuku = $dataBuku['filegambar'];
										} else {
											$gambarBuku = "default_cover.JPG";
										} ?>
								<li>
									<div class="displayBuku small2">
										<img src="images/<?php echo $gambarBuku;?>" align="center">
										<div class="book-detail">
											<div class="book-name"><?php echo $dataBuku['judul'];?></div>
											<div class="book-author">by <?php echo $dataBuku['penulis'];?></div>
											<div class="book-owner">Pemilik buku: <span><?php echo $dataBuku['namapengguna'];?></span> - <span><?php echo $data['kota'];?></span></div>
											<div class="book-price"><span class="harga">Rp <?php echo $dataBuku['hargasewa'];?> / minggu</span></div>
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
