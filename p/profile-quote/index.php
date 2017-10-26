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
	<div class="header">
		<div class="topcolor" style="height: 10px; background-color: #7cb71b"></div>
		<div class="headerTop">
			<div class="logo">
				<img src="../../images/logo3.PNG" width="200">
			</div>
			<div class="cart container">
				<div class="dropdown">
					<button class="cartBtn dropdown-toggle" type="button" data-toggle="dropdown">
						<span class="cart-icon"><i class="glyphicon glyphicon-shopping-cart"></i> Cart</span>
						<div class="cart-info"><span>2</span> Item(s) | Rp <span>40.000</span></div>
					</button>
					<ul class="dropdown-menu cart-dropdown">
						<li class="cartItem">
							<img src="../../images/buku-4.JPG">
							<div class="cartItem-info">
								<div class="cartItem-name">Elite: Reclamation</div>
								<div class="cartItem-author">by Drew Wagar</div>
								<div class="cartItem-price">Rp <span>20.000</span><button><span class="glyphicon glyphicon-remove"></span> Hapus</button></div>
							</div>
						</li>
						<li class="cartItem">
							<img src="../../images/buku-5.JPG">
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
	<div class="mainpage row" style="padding: 0px 50px">
		<div class="container-fluid" style="width: 1190px!important; margin: 0 auto!important;">
			<div class="row row-fluid">
				<div class="col-md-2 profile-sidebar">
					<div class="sectionTitle3">
						Konten Saya
					</div>
					<ul>
						<li class="active">Quotes</li>
						<li>Buku</li>
						<li>Trade Request</li>
						<li>Posts</li>
					</ul>
					<div class="sectionTitle3">
						Profil Saya
					</div>
					<ul>
						<li>Peminjaman</li>
						<li>Inbox</li>
						<li>Detail Account</li>
						<li>Pengaturan</li>
					</ul>
				</div>
				<div class="col-md-9 profile-mainpage">
					<div class="profile-content profile-quote">
						<div class="header">
							<h2>Quotes Saya</h2>
						</div>
						<button class="btn" data-toggle="collapse" data-target="#tambah-quote">Tambah Quote</button>
						<div class="tambah-quote collapse" id="tambah-quote">
							<form class="form-horizontal">
								<div class="form-group">
									<label class="control-label col-md-3" for="quote">Quote</label>
									<div class="col-md-9">
										<textarea class="form-control" rows="5" id="quote"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3" for="sumber">Sumber</label>
									<div class="col-md-9">
										<input type="text" name="tambahquote-sumber" id="sumber" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button class="btn" style="float: right;">Simpan</button>
									</div>
								</div>
							</form>
						</div>
						<div class="quotesWrapper grid-item">
						<ul>
							<li>
								<div class="displayQuote">
									<div class="quote">
										<i class="fa fa-quote-left" aria-hidden="true"></i> <span class="text">"Hidup tanpa cinta bagai taman tak berbunga"</span>
									</div>
									<div class="sumber">
										<i class="glyphicon glyphicon-minus"></i> <span>Rhoma Irama</span>
									</div>
								</div>
							</li>
							<li>
								<div class="displayQuote">
									<div class="quote">
										<i class="fa fa-quote-left" aria-hidden="true"></i> <span class="text">Be yourself; everyone else is already taken.</span>
									</div>
									<div class="sumber">
										<i class="glyphicon glyphicon-minus"></i> <span>Oscar Wilde</span>
									</div>
								</div>
							</li>
							<li>
								<div class="displayQuote">
									<div class="quote">
										<i class="fa fa-quote-left" aria-hidden="true"></i> <span class="text">Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.</span>
									</div>
									<div class="sumber">
										<i class="glyphicon glyphicon-minus"></i> <span>Albert Einstein</span>
									</div>
								</div>
							</li>
							<li>
								<div class="displayQuote">
									<div class="quote">
										<i class="fa fa-quote-left" aria-hidden="true"></i> <span class="text">Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind.</span>
									</div>
									<div class="sumber">
										<i class="glyphicon glyphicon-minus"></i> <span>Bernard M. Baruch</span>
									</div>
								</div>
							</li>
							<li>
								<div class="displayQuote">
									<div class="quote">
										<i class="fa fa-quote-left" aria-hidden="true"></i> <span class="text">A room without books is like a body without a soul.</span>
									</div>
									<div class="sumber">
										<i class="glyphicon glyphicon-minus"></i> <span>Marcus Tullius Cicero</span>
									</div>
								</div>
							</li>
						</ul>
					</div>
						<div class="pagination-wrapper">
							<ul class="pagination">
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
							</ul>
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