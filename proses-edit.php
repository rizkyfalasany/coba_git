<?php 
include("config.php");

	//cek apakah tombo simpan sudah di klik atau belum
	if (isset($_POST['simpan'])) {
		//ambil data dari formulir
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jk = $_POST['jk'];
		$agama = $_POST['agama'];

		//buat query update
		$sql "UPDATE calon_siswa SET nama='$nama', alamat='$alamat, jenis_kelamin='$jk', agama='$agama' WHERE id=$id";
		$query = mysqli_query($db, $sql);

		//apakah update berhasil
		if ($query) {
			//kalau berhasil alihkan kehalaman list-siswa.php
			header('Location: list-siswa.php');
		} else {
			//kalau gagal tampilkan pesan
			die("gagal menyimpan perubahan");
		}
	} else {
		die("akses dilarang");
	}
?>