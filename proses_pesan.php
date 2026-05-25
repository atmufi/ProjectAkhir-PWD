<?php
session_start();
include 'koneksi.php';

$id_user = $_SESSION['id_user'];

$nama = $_POST['nama_pemesan'];
$email = $_POST['email'];
$hp = $_POST['no_hp'];
$jenis = $_POST['jenis_tiket'];
$jumlah = $_POST['jumlah_tiket'];
$tanggal = $_POST['tanggal_kunjungan'];
$pembayaran = $_POST['metode_pembayaran'];
$catatan = $_POST['catatan'];

$query = mysqli_query($konek,
"INSERT INTO pesanan(
id_user,
nama_pemesan,
email,
no_hp,
jenis_tiket,
jumlah_tiket,
tanggal_kunjungan,
metode_pembayaran,
catatan,
status_pesanan
)

VALUES(
'$id_user',
'$nama',
'$email',
'$hp',
'$jenis',
'$jumlah',
'$tanggal',
'$pembayaran',
'$catatan',
'menunggu konfirmasi'
)");

header("location:pesanan_saya.php");
?>