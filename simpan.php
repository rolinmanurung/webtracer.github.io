<?php
	//koneksi ke database  
	
include "koneksi.php";


	//menerima data dari kiriman form pendaftaran
		$nama=$_POST["nama"];
		$prodi=$_POST["prodi"];
		$email=$_POST["email"];
		$nim=$_POST["nim"];

//Query input menginput data kedalam tabel anggota
  $sql="insert into alumni (nama,email,nim,prodi) values
		('$nama','$email','$nim','$prodi')";

		$hasil=mysqli_query($conn,$sql);

if ($hasil) {
	echo "Berhasil simpan data anggota";
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
} 
?>