<?php 
include 'koneksi.php';
$namawarung = $_POST['namawarung'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:../index_promo.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar_promo/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO foto_menu VALUES(NULL,'$namawarung','$nama','$harga','$deskripsi','$xx')");
		header("location:../index_fotomenu.php?alert=berhasil");
	}else{
		header("location:../index_promo.php?alert=gagak_ukuran");
	}
}
?>

