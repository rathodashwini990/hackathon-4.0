<?php
	//require_once '../config/logincheck.php';
	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location:login.php');
	}
	session_destroy();
	header('Location:login.php');
?>