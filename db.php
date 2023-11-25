<?php 
	$hostname = '127.0.0.1';
	$username = 'root';
	$password = '';
	$dbname   = 'riris';
#	$port = 3306 ;

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
?>