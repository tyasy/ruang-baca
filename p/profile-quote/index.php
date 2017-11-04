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