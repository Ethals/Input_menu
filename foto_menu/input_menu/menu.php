<a href="?page=input_menu&aksi=tambah-menu&nama_warung=" class="btn btn-success" style="margin-bottom: 10px;"> <i class ="fa fa-plus"></i> 
Tambahkan Menu anda</a>

<a href="?page=input_menu&aksi=selesai&nama_warung=" class="btn btn-warning" style="margin-bottom: 10px;"> <i class ="fa fa-check"></i> 
Selesai</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Petunjuk : 
            <br> -Masukkan Menu anda pada "Tombol Hijau" di atas. 
            <br> -Setelah memasukkankan menu, lihat daftar menu anda dengan cara klik tombol "Lihat" Pada tabel Warung/Kedai anda. 
            <br> -Setelah semua menu telah dimasukkan, Tekan tombol "Selesai" di atas </b></h6>
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
                    <h4><i class="icon fa fa-check"></i> Suksess</h4>
                    Menu Berhasil Ditambahkan
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
                                    <th>Nama Warung/Kedai</th>
                                    <th>Lihat Menu</th>
                                    
                                </tr>
                            </thead>
                            <TBODY>
                                <?php
                                    include 'koneksi.php'; 
                                    $no = 1;
                                    $sql = "SELECT DISTINCT nama_warung FROM foto_menu";
                                    $query = mysqli_query($koneksi, $sql);

                                    while ($data = mysqli_fetch_array($query)){

                                    ?>

                                <tr>
                                    <td> <?php echo $no++; ?> </td>
                                    <td> <?php echo $data['nama_warung'];?></td>
                                    
                                    <td><a href= "?page=input_menu&aksi=rincian-menu&nama_warung=<?php echo $data['nama_warung']; ?>" class="btn btn-info"> <i class ="fa fa-eye"></i> Lihat</a>
                                    </td>

                                </tr>

                                <?php } ?>

                            </TBODY>

                        </table>
                    </div>
                </div>
</div>

        
