<?php 
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db){
	die("gagal terhubung ke database:" . msqli_connect_error());
}

 ?>