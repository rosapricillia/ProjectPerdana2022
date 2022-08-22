<?php
	include 'koneksi.php';
	$nama = $_POST['name'];
	$jenis_kelamin = $_POST['jenisk'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$agama = $_POST['agama'];
	$alamat = $_POST['address'];
	$asal_kampus = $_POST['asalkampus'];
	$fakultas = $_POST['fakultas'];
	$prodi = $_POST['prodi'];
	$ipk = $_POST['ipk'];
	$tahun_lulus = $_POST['tahun'];

	$sql = mysqli_query($connect, "INSERT INTO lamaran (nama, jenis_kelamin, email, phone, agama, alamat, asal_kampus, fakultas, prodi, ipk, tahun_lulus) values ('$nama', '$jenis_kelamin', '$email', '$phone', '$agama', '$alamat', '$asal_kampus', '$fakultas', '$prodi', '$ipk', '$tahun_lulus')");
	//echo "INSERT INTO lamaran (nama, jenis_kelamin, email, phone, agama, alamat, asal_kampus, fakultas, prodi, ipk, tahun_lulus) values ('$nama', '$jenis_kelamin', '$email', '$phone', '$agama', '$alamat', '$asal_kampus', '$fakultas', '$prodi', '$ipk', '$tahun_lulus')";

	if($sql){
		echo "<script>alert('Berhasil')</script> ";
		echo "<meta meta http-equiv='refresh' content='1 url=career.php'>";
	}else{
		echo "<script>alert('Gagal')</script>";
		echo "<meta http-equiv='refresh' content='1 url=career.php'>";
	}

?>
