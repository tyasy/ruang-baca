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
						<button class="btn kembali-btn"><i class="fa fa-chevron-left"></i> Kembali</button>
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