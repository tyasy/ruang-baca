<?php 
	session_start();
	include_once("../config.php");

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$kota = $_POST['kota'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];

	$query = "SELECT * FROM pengguna WHERE email = '$email' OR username = '$username'";
	if($result = mysqli_query($db,$query)){
		if(mysqli_num_rows($result) <= 0){
			$query = "INSERT INTO pengguna(username,namapengguna,alamat,kota,email,password,statuspengguna) VALUES ('$username','$fullname','$alamat','$kota','$email','$pass','General')";
			if(mysqli_query($db,$query)){
				echo "y";
			} else {
				echo "Register gagal";
			}
		} else {
			echo "Registrasi gagal: E-mail/Username sudah terdaftar";
		}
	}
?>