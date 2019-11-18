<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulir Pendaftaran Siswa Baru</title>
</head>
<body>
	<header>
		<h3>Formulir Pendaftaran Siswa Baru</h3>
	</header>

	<form action="proses-pendaftaran.php" method="POST">
		<fieldset>
			<p>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" placeholder="Nama Lengkap">
			</p>			

			<p>
				<label for="alamat">Alamat: </label>
				<textarea name="alamat" cols="30" rows="10"></textarea>
			</p>

			<p>
				<label for="jenis_kelamin">Jenis Kelamin:</label>
				<label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki</label>
				<label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
			</p>

			<p>
				<label for="agama">Agama: </label>
				<select name="agama">
					<option>Islam</option>
				</select>
			</p>

			<p>
				<input type="submit" value="Daftar" name="daftar">
			</p>
		</fieldset>
	</form>
</body>
</html>