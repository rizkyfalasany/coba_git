<?php 
include("config.php");

//kalau tidak ada id di query string
if ( !isset($_GET['id'])) {
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

//jika data yang diedit tidak ditemukan
if (mysqli_num_rows($query) <1) {
	die("data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulir Edit Siswa</title>
</head>
<body>
	<header>
		<h3>Formulir Edit Data Siswa</h3>
	</header>

	<form action="proses-edit.php" method="POST">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="Nama Lengkap" value=" <?php echo $siswa['nama'] ?> ">
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat">
				<?php echo $siswa['alamat'] ?>
			</textarea>
		</p>
		<p>
			<label for="jenik_kelamin">Jenis Kelamin: </label>
			<?php $jk = $siswa['jenis_kelamin']; ?>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>>Laki-Laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>>Perempuan</label>
		</p>
		<p>
			<label for="agama">Agama: </label>
			<?php $agama = $siswa['agama']; ?>
			<select name="agama">
				<option <?php echo ($agama == 'Islam') ? "selected": ""?>>Islam</option>
			</select>
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan">
		</p>		
		</fieldset>
	</form>
</body>
</html>