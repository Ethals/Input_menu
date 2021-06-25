<?php

    include("koneksi.php");

    $nama_makanan = $_GET['nama_makanan'];
    $sql = "DELETE FROM foto_menu WHERE nama_makanan = '$nama_makanan'";
    $query = mysqli_query($koneksi, $sql);
?>

<script type="text/javascript">
    window.location.href="?page=input_menu";
</script>