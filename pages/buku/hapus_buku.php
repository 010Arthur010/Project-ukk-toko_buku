<?php
include "../../conf/koneksi.php";
$id = $_GET['id'];
$query = ("DELETE FROM buku WHERE id_buku ='$id'");
if (!mysqli_query($koneksi, $query)) {
       die(mysqli_error($koneksi));
} else {
       echo '<script>alert("Data Berhasil Dihapus");window.location.href="../../index.php?page=data_buku"</script>';
}
