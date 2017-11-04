<?php 
	session_start();
	include_once("../config.php");

	session_unset();
	session_destroy();
?>