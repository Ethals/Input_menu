<?php
    
    include("koneksi.php");
    
    $nama_warung = $_GET['nama_warung'];
    //$tanggal = $_GET['driver_tanggal'];
    $sql = "SELECT * FROM foto_menu WHERE nama_warung = '$nama_warung'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
    $no = 1;


    // $load_driver = mysqli_fetch_assoc($query);
    //$data_tahun = $load_artikel_jurnal['tahun_terbit'];
    //$data_lokasi = $load_artikel_jurnal['lokasi'];

?>

<a href="?page=input_menu&aksi=tambah-menu&nama_warung=" class="btn btn-success" style="margin-bottom: 10px;"> <i class ="fa fa-plus"></i> 
Tambah Menu</a>

<a href="?page=input_menu&aksi=selesai&nama_warung=" class="btn btn-warning" style="margin-bottom: 10px;"> <i class ="fa fa-check"></i> 
Selesai</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Petunjuk : 
            <br> -Tambahkan lagi Menu anda pada "Tombol Hijau" di atas.
            <br> -Setelah semua menu telah dimasukkan, Tekan tombol "Selesai" di atas</h6>
        <?php 
        if(isset($_GET['alert'])){
            if($_GET['alert']=='gagal_ekstensi'){
                ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                    Ekstensi Tidak Diperbolehkan
                </div>                              
                <?php
            }elseif($_GET['alert']=="gagal_ukuran"){
                ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Peringatan !</h4>
                    Ukuran File terlalu Besar
                </div>                              
                <?php
            }elseif($_GET['alert']=="berhasil"){
                ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success</h4>
                    Mantap Bosss
                </div>                              
                <?php
            }
        }
        ?>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Menu</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Foto Menu</th>
                                    <th>Hapus Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;

                                    $query = mysqli_query($koneksi, $sql);

                                    while ($data = mysqli_fetch_array($query)){
                                    ?>
                                
                                    <tr>
                                        <td> <?php echo $no++; ?> </td>
                                        <td><?php echo $data['nama_makanan']; ?></td>
                                        <td><?php echo $data['harga_makanan']; ?></td>
                                        <td><?php echo $data['desk_makanan']; ?></td>
                                        <td><img src="../admin/gambar_promo/<?php echo $data['foto_makanan'] ?>" width="120" height="80">
                                        </td>
                                        <td>
                                            <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ??')" 
                                            href= "?page=input_menu&aksi=delete-menu&nama_makanan=<?php echo $data['nama_makanan']; ?>" class="btn btn-danger"> <i class ="fa fa-trash"></i>
                                            Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </tbody>
                            
                        </table>
                    </div>
                </div>
</div>

        
