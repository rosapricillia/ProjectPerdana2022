<?php 
include'koneksi.php';
$id = $_GET['id'];	
$delete = mysqli_query($connect, "DELETE FROM komentar WHERE id ='$id'");
// echo "DELETE FROM komentar WHERE id ='$id'";
// if($delete){
//  echo 'Data berhasil dihapus. Klik <a href="career.php">di sini</a> untuk ke halaman utama.';
// }else{
//  echo 'Data gagal diinput. Klik <a href="career.php">di sini</a> untuk ke halaman utama.';
// }
if($delete){
		echo "<script>alert('Komentar berhasil dihapus')</script> ";
		echo "<meta meta http-equiv='refresh' content='1 url=career.php'>";
	}else{
		echo "<script>alert('Gagal')</script>";
		echo "<meta http-equiv='refresh' content='1 url=career.php'>";
	}
 ?>
