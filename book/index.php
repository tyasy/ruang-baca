<?php
session_start();
include("../../config.php");

$queryBukuTerbaru = mysqli_query($db,"SELECT b.idbuku, p.namapengguna, b.bahasa, b.judul, b.penulis, b.hargasewa, b.filegambar, b.deskripsi, p.username, p.kota FROM buku as b, pengguna as p WHERE b.username = p.username AND b.idbuku = '".$_GET['id']."'");

?>

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
    <?php
    while($data = mysqli_fetch_array($queryBukuTerbaru)) {
        $urlGambar = ROOT_DIR . "/images/" . $data['filegambar'];
        if (file_exists($urlGambar)) {
            $gambarBuku = $data['filegambar'];
        } else {
            $gambarBuku = "default_cover.JPG";
        } ?>
        <div class="mainpage"
             style="max-width: 1000px; margin: auto; margin-bottom: 60px; height: -webkit-fill-available">
            <div class="row pageBukuHeader">
                <div class="col-md-12">
                    <span class="judul"><?php echo $data['judul'] ?></span>
                </div>
            </div>
            <div class="row pageBuku" style="">
                <div class="col-md-6 left" style="">
                    <div class="row">
                        <div class="col-md-5 fotoBuku">
                            <img src="../../images/<?php echo $data['filegambar'] ?>" align="center">
                        </div>
                        <div class="col-md-7 detailBuku">
                            <span>Detail Buku</span>
                            <table>
                                <tr>
                                    <td style="font-weight: bold;">Penulis</td>
                                    <td> <?php echo $data['penulis'] ?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Bahasa</td>
                                    <td> <?php echo $data['bahasa'] ?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Pemilik</td>
                                    <td> <?php echo $data['namapengguna'] ?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Harga</td>
                                    <td> <?php echo $data['hargasewa'] ?> / Minggu</td>
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
                            <span class="body"><p align="justify"> <?php echo $data['deskripsi'] ?>.</p></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 starReview">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<br><br><br>

<div class="footer">
</div>
</body>
</html>