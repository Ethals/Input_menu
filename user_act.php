<?php 
include 'koneksi.php';
$namawarung = $_POST['namawarung'];
$haribuka = $_POST['haribuka'];
$jambuka = $_POST['jambuka'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$nowa = $_POST['nowa'];
$email= $_POST['email'];
$alamatwarung = $_POST['alamatwarung'];
#$titiklokasi = $_POST['titiklokasi'];
$lat_long       = $_POST['latlong'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 10044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../admin/gambar_pendaftaran_mitra/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO form_mitra VALUES(NULL,'$namawarung','$haribuka','$jambuka','$nama','$nohp','$nowa','$email','$alamatwarung','$xx','$lat_long')");
		// $insert = mysqli_query($connect, " INSERT into form_mitra set lat_long='$lat_long' ");
		header("location:../../foto_menu/admin/index.php?alert=berhasil");

	}else{
		header("location:index.php?alert=gagak_ukuran");
	}
}
?>




