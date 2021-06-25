<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Menu</h6>
            </div>
                <div class="card-body">

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="promo_act/user_act.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Warung/Kedai : 
                            <br> * Nama warung/kedai harus sama dari yang sebelumnya</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Warung seperti yang anda daftarkan sebelumnya" name="namawarung" required="required">
                    </div>
                    <div class="form-group">
                        <label>Nama Makanan :</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Makanan/Minuman/Cemilan" name="nama" required="required">
                    </div>
                    <div class="form-group">
                        <label>Harga Makanan :</label>
                        <input type="number" class="form-control" placeholder="Contoh : Rp. 10.000" name="harga" required="required">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi :</label>
                        <textarea class="form-control" placeholder="Deskripsi berisi penjelasan tentang menu anda" name="deskripsi" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Menu untuk diposting di aplikasi:</label>
                        <input type="file" name="foto" required="required">
                        <p style="color: green">Ekstensi yang diperbolehkan .png | .jpg | .jpeg |</p>
                    </div>          
                    <input type="submit" name="" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
</div>









