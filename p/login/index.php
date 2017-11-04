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
<div class="body">
	<div class="container" style="height: fit-content;">
		<div style="text-align: center;" >
			<img src="../../images/logo2.PNG" width="300">
		</div>
		<div class="loginregisterContainer">
			<p>Login</p>
			<form class="loginregister-form" id="login-form">
				<fieldset id="login">
					<ul>
						<label>E-mail</label>
						<li>
							<input type="email" name="email">
						</li>
						<label>Password</label>
						<li>
							<input type="password" name="password">
						</li>
						<button class="btn loginregister-btn">Masuk</button>
					</ul>
				</fieldset>
			</form>
			<a href="<?php echo ROOT_URL;?>" style="width: fit-content; display: inline-block;"><span class="glyphicon glyphicon-chevron-left"></span>Kembali</a>
			<a href="<?php echo ROOT_URL . '/p/register';?>" style="width: fit-content; display: inline-block; float: right;">Belum punya account</a>
		</div>
	</div>
</div>
</body>
</html>