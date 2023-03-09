<?php
	session_start();

	//koneksi ke database
	$conn = mysqli_connect("localhost", "username", "password", "database");

	//ambil data dari form login
	$username = $_POST['username'];
	$password = $_POST['password'];

	//query untuk mencari data user yang sesuai
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) == 1) {
		//jika data ditemukan, simpan data user di session
		$_SESSION['username'] = $username;
		//redirect ke halaman absensi
		header('Location: absen.php');
	}
	else {
		//jika data tidak ditemukan, kembali ke halaman login
		header('Location: absen.php');
	}
?>
