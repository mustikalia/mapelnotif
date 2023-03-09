<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>
</head>
<body>
	<h2>Selamat datang, <?php echo $_SESSION['username']; ?></h2>
	<form action="absen.php" method="post">
		<label for="waktu_masuk">Waktu Masuk:</label>
		<input type="text" id="waktu_masuk" name="waktu_masuk" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly><br><br>
		<label for="waktu_keluar">Waktu Keluar:</label>
		<input type="text" id="waktu_keluar" name="waktu_keluar"><br><br>
		<label for="status">Status:</label>
		<select id="status" name="status">
			<option value="Hadir">Hadir</option>
			<option value="Tidak Hadir">Tidak Hadir</option>
			<option value="Terlambat">Terlambat</option>
		</select><br><br>
		<input type="submit" value="Absen">
	</form>
</body>
</html>
