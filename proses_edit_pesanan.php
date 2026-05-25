<?php
include 'koneksi.php';

$id = $_POST['id_pesanan'];
$nama = $_POST['nama_pemesan'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$jenis = $_POST['jenis_tiket'];
$jumlah = $_POST['jumlah_tiket'];
$tanggal = $_POST['tanggal_kunjungan'];
$pembayaran = $_POST['metode_pembayaran'];
$catatan = $_POST['catatan'];

mysqli_query($konek,
"UPDATE pesanan SET
nama_pemesan='$nama',
email='$email',
no_hp='$no_hp',
jenis_tiket='$jenis',
jumlah_tiket='$jumlah',
tanggal_kunjungan='$tanggal',
metode_pembayaran='$pembayaran',
catatan='$catatan'
WHERE id_pesanan='$id'");

header("location:data_pesanan.php");
?>