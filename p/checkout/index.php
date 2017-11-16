<?php
	session_start();
	include("../../config.php");
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
	<div class="mainpage row" style="padding: 0px 50px">
		<div class="container-fluid" style="width: 950px!important; margin: 0 auto!important;">
			<div class="row row-fluid">
				<table class="order-detail-table">
					<tr>
						<th colspan="3">Peminjaman buku dari: <span>Vareza Noorliko</span></th>
					</tr>
					<tr class="cart-item">
						<td>
							<span>
								<img src="../../images/buku-4.JPG" width="70" style="margin-right: 10px;">
							</span>
							<span>
								<div><a href="" class="item-name">Elite: Reclamation</a></div>
								<span><small>2 minggu x Rp 20000</small></span>
							</span>
						</td>
						<td>
							<span style="float: unset; display: block;">
								<b>Harga Sewa</b>
							</span>
							<span style="float: unset; display: block;">Rp 40000</span>
						</td>
						<td>
							<button class="btn item-operation"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
							<button class="btn item-operation"><i class="glyphicon glyphicon-edit"></i> Ubah</button>
						</td>
					</tr>
					<tr class="cart-item">
						<td>
							<span>
								<img src="../../images/buku-5.JPG" width="70" style="margin-right: 10px;">
							</span>
							<span>
								<div><a href="" class="item-name">Red Hope (A Novel)</a></div>
								<span><small>2 minggu x Rp 20000</small></span>
							</span>
						</td>
						<td>
							<span style="float: unset; display: block;">
								<b>Harga Sewa</b>
							</span>
							<span style="float: unset; display: block;">Rp 40000</span>
						</td>
						<td>
							<button class="btn item-operation"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
							<button class="btn item-operation"><i class="glyphicon glyphicon-edit"></i> Ubah</button>
						</td>
					</tr>
					<tr class="transaction-detail">
						<td>
							<b>Alamat Tujuan</b>
							<a href="">Edit</a>
							<p class="receiver-address">
								<strong>Fakhrizal Andyko</strong>
								<br> Jalan Raya Kampung Pabuaran, Perum Nirmala Asri Blok A No.2, Kelurahan Jatiranggon
								<br> Jatisampurna Kota Bekasi, 17432
								<br> Jawa Barat
								<br> Telp: 08972572573
							</p>
						</td>
						<td>
							<p>
								<b>Subtotal</b>
								<span class="block">Rp 80000</span>
							</p>
						</td>
						<td>
							<p>
								<b>Ongkos Kirim</b>
								<span class="block">Rp 8000</span>
								<span>JNE</span>
							</p>
						</td>
					</tr>
					<tfoot>
						<tr><td colspan="3">
							<span><a href=""><small><i class="glyphicon glyphicon-remove"></i> Hapus Semua</small></a></span>
							<span style="float: right;">Total <b>Rp 88000</b></span>
						</td></tr>
					</tfoot>
				</table>
				<div class="total-payment-container">
					<div class="container-total">
						<p>
							<small>Total Pembayaran</small>
						</p>
						<h4>
							<b>Rp 88000</b>
						</h4>
					</div>
					<div class="bottom-buttons">
						<button onclick="window.location.href = '<?php echo ROOT_URL;?>'" class="btn kembali-btn"><i class="fa fa-chevron-left"></i> Kembali</button>
						<button class="btn lanjut-btn float-right">Pilih Metode Pembayaran <i class="fa fa-chevron-right"></i></button>
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