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
			    	<li><a href="/ruangbaca/p/catalog">Catalog</a></li>
			    	<li class="active"><a href="/ruangbaca/p/quotes">Quotes</a></li>
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
	<div class="mainpage row" style="padding: 0px 50px">
		<div class="col-md-12" style="margin-bottom: 60px; height: -webkit-fill-available">
			<div class="sectionTitle">
				<label>Quotes</label>
			</div>
			<div class="quoteSearch">
				<div class="input-group">
				    <input type="text" class="form-control" placeholder="Search Quote">
				    <div class="input-group-btn">
				    	<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				    </div>
				</div>
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
			<div class="tambahQuote" style="float: right; padding-top: 10px; padding-right: 10px;">
				<button class="btn"><i class="glyphicon glyphicon-plus"></i> Submit Quote</button>
			</div>
		</div>
	</div>
</div>
<div class="footer">
</div>
</body>
</html>