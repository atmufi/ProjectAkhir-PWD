<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($konek,
"UPDATE pesanan
SET status_pesanan='sudah dikonfirmasi'
WHERE id_pesanan='$id'");

header("location:data_pesanan.php");
exit();
?>