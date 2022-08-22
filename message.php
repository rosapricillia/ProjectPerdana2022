<?php
	include 'koneksi.php';
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	/*if(!empty=$nama){
		$sql = mysqli_query($connect, "INSERT INTO user (nama, email, message) values ('$nama', '$email', 'message')");
		//echo "INSERT INTO user values nama='$nama', email='$email', message='$message'";
		//$result = mysqli_num_rows ($sql);
	} else {
		echo "Silahkan diisi";
	}*/
	$sql = mysqli_query($connect, "INSERT INTO user (nama, email, message) values ('$nama', '$email', '$message')");

	if($sql){
		echo "<script>alert('Berhasil')</script> ";
		echo "<meta meta http-equiv='refresh' content='1 url=contact.php'>";
	}else{
		echo "<script>alert('Gagal')</script>";
		echo "<meta http-equiv='refresh' content='1 url=contact.php'>";
	}

?>
