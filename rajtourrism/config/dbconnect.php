<?php
	$conn = mysqli_connect('localhost', 'root', '') or die("error in connecting database");
	$sdb  = mysqli_select_db($conn,'paribhraman')or die("error in connecting database");
?>
