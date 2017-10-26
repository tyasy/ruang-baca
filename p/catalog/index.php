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
	<div class="mainpage row" style="padding: 0px 50px">
		<div class="col-md-12" style="margin-bottom: 60px;">
			<div class="sectionTitle">
				<label>Catalog Buku</label>
			</div>
			<div class="sectionHeader" style="padding: 10px;height: 48px;margin: 10px 0px;">
				<div class="pilihGenre">
					<div class="input-group">
						Pilih Genre :
						<select>
							<option>Semua</option>
							<option>A</option>
							<option>B</option>
							<option>C</option>
						</select>
					</div>
				</div>
				<div class="bukuSearch" style="max-width: 400px; float: right:">
					<div class="input-group">
					    <input type="text" class="form-control" placeholder="Search Buku">
					    <div class="input-group-btn">
					    	<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
					    </div>
					</div>
				</div>
			</div>
			<div class="booksWrapper grid-item">
				<ul>
					<li>
						<div class="displayBuku small2">
							<img src="../../images/buku-8.JPG" align="center">
							<div class="book-detail">
								<div class="book-name">Finding Magic</div>
								<div class="book-author">by Sally Quinn</div>
								<div class="book-owner">Pemilik buku: <span>Tyas Yuni</span> - <span>Jakarta</span></div>
								<div class="book-price"><span class="harga">Rp 25.000 / minggu</span><button type="button" class="btn add-to-cart"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-shopping-cart"></i></button></div>
							</div>
						</div>
					</li>
					<li>
						<div class="displayBuku small2">
							<img src="../../images/buku-9.JPG" align="center">
							<div class="book-detail">
								<div class="book-name">The Diary of a Young Girl</div>
								<div class="book-author">by Anne Frank</div>
								<div class="book-owner">Pemilik buku: <span>Tyas Yuni</span> - <span>Jakarta</span></div>
								<div class="book-price"><span class="harga">Rp 15.000 / minggu</span><button type="button" class="btn add-to-cart"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-shopping-cart"></i></button></div>
							</div>
						</div>
					</li>
					<li>
						<div class="displayBuku small2">
							<img src="../../images/buku-10.JPG" align="center">
							<div class="book-detail">
								<div class="book-name">The Designer</div>
								<div class="book-author">by Marius Gabriel</div>
								<div class="book-owner">Pemilik buku: <span>Tyas Yuni</span> - <span>Jakarta</span></div>
								<div class="book-price"><span class="harga">Rp 25.000 / minggu</span><button type="button" class="btn add-to-cart"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-shopping-cart"></i></button></div>
							</div>
						</div>
					</li>
					<li>
						<div class="displayBuku small2">
							<img src="../../images/buku-11.JPG" align="center">
							<div class="book-detail">
								<div class="book-name">The Tiger's Daughter</div>
								<div class="book-author">by K. Arsenault Rivera</div>
								<div class="book-owner">Pemilik buku: <span>Tyas Yuni</span> - <span>Jakarta</span></div>
								<div class="book-price"><span class="harga">Rp 25.000 / minggu</span><button type="button" class="btn add-to-cart"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-shopping-cart"></i></button></div>
							</div>
						</div>
					</li>
					<li>
						<div class="displayBuku small2">
							<img src="../../images/buku-12.JPG" align="center">
							<div class="book-detail">
								<div class="book-name">The Adventures of Captain Underpants</div>
								<div class="book-author">by Dav Pilkey</div>
								<div class="book-owner">Pemilik buku: <span>Tyas Yuni</span> - <span>Jakarta</span></div>
								<div class="book-price"><span class="harga">Rp 25.000 / minggu</span><button type="button" class="btn add-to-cart"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-shopping-cart"></i></button></div>
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
<div class="footer">
</div>
</body>
</html>