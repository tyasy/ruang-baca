<?php 
	session_start();
	include_once("../config.php");

	$idbuku = $_POST['idbuku'];

	$queryBuku = mysqli_query($db,"SELECT b.idbuku, b.judul, b.penulis, b.hargasewa, b.filegambar, b.deskripsi FROM buku as b WHERE b.idbuku = '$idbuku'");

	while($data = mysqli_fetch_array($queryBuku)){
		$urlGambar = ROOT_DIR . "/images/" . $data['filegambar'];
		$idbuku = $data['idbuku'];
		if(file_exists($urlGambar)){
			$gambarBuku = $data['filegambar'];
		} else {
			$gambarBuku = "default_cover.JPG";
		}
		echo "	<img src=\"".ROOT_URL."/images/".$gambarBuku."\">
				<div class=\"cartItem-info\">
				<div class=\"cartItem-name\">".$data['judul']."</div>
				<div class=\"cartItem-author\">".$data['penulis']."</div>
				<div class=\"cartItem-price\">Rp <span class=\"cartItemPrice\">".$data['hargasewa']."</span><button onclick=\"removeFromCart('".$idbuku."')\"><span class=\"glyphicon glyphicon-remove\"></span> Hapus</button></div>
				</div>";
	}
?>