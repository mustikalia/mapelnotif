<?php
	session_start();

	//koneksi ke database
	$conn = mysqli_connect("localhost", "username", "password", "database");

	//ambil data dari form absensi
	$waktu_masuk = $_POST['waktu_masuk'];
	$waktu_keluar = $_POST['waktu_keluar'];
	$status = $_POST['status'];
	$username = $_SESSION['username'];

	//query untuk menyimpan data absensi ke database
	$query = "INSERT INTO attendance (username, waktu_masuk, waktu_keluar, status) VALUES ('$username', '$waktu_masuk', '$waktu_keluar', '$status')";
	$result = mysqli_query($conn, $query);

	if ($result) {
		//jika data berhasil disimpan, kembali ke halaman absensi
		header('Location: absensi.php');
	} else {
		//jika data tidak berhasil disimpan, tampilkan pesan error
		echo "Error: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>
