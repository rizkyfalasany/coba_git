<?php 
include("config.php");

//cek apakah tombol daftar sudah di klik atau belum
if (isset($_POST['daftar'])) {
	
	//ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];

	//buat query
	$sql = "INSERT INTO calon_siswa(nama, alamat, jenis_kelamin, agama) VALUE ('$nama', '$alamat', '$jk', '$agama')";
	$query = mysqli_query($db, $sql);

	//apakah sudah berhasil
	if ($query) {
		//kalau berhasil dialihkan ke halaman index.php dengan status = sukses
		header('Location: index.php?status=sukses');
	} else {
		//kalau gagal dialihkan ke halaman index.php dengan status= gagal
		header('Location: index.php?status=gagal');
	}
	
} else {
	die("Akses dilarang");
}
 ?>