<?php
include "../../conf/koneksi.php";

if ($_POST) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $noisbn = $_POST['noisbn'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $stok = $_POST['stok'];
    $harga_pokok = $_POST['harga_pokok'];
    $harga_jual = $_POST['harga_jual'];
    $gambar = $_POST['gambar'];
    
    $query = "UPDATE buku SET
        judul = '$judul',
        noisbn = '$noisbn',
        penulis = '$penulis',
        penerbit = '$penerbit',
        tahun = '$tahun',
        stok = '$stok',
        harga_pokok = '$harga_pokok',
        harga_jual = '$harga_jual',
        gambar = '$gambar'
        WHERE id_buku = '$id'";
    
    if (!mysqli_query($koneksi, $query)) {
        die(mysqli_error($koneksi));
    } else {
        echo '<script>alert("Data Berhasil Diubah");window.location.href="../../index.php?page=data_buku"</script>';
    }
}
?>
