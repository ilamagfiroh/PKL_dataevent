<?php
include ("koneksi.php");
//cek apakah tombol simpan sudah di klik atau belum
if ($_SERVER['REQUEST_METHOD']=="POST"){
	//ambil data dari form 
	$nama =$_POST['nama'];
	$username =$_POST['username'];
	$password =$_POST['password'];

	//buat query
	$sql ="INSERT INTO admin (id,nama,username,password)VALUE ('','$nama','$username','$password')";
	$query =mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	//apakah query update berhasil
	if ($query){
		//kalau berhasil , alihkan ke halaman index.php dengan status = sukses
		header ('location:login.php?status=sukses');
	}else{
		//kalau gagal , alihkan ke halaman index.php dengan status = gagal
		header ('location:login.php?status=gagal');
	}
}else{
	die ("akses dilarang...");
}
?>