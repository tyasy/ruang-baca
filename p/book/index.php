<?php
session_start();
include("../../config.php");

$queryBukuTerbaru = mysqli_query($db,"SELECT b.idbuku, b.judul, b.penulis, b.hargasewa, b.filegambar, b.bahasa,b.deskripsi, p.namapengguna, p.kota FROM buku as b, pengguna as p WHERE b.username = p.username AND b.idbuku = '".$_GET['id']."'");
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