<?php 
include 'koneksi.php';

$nama_pemesan = $_POST['nama_pemesan'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$jenis_tiket = $_POST['jenis_tiket'];
$jumlah_tiket = $_POST['jumlah_tiket'];
$tanggal_kunjungan = $_POST['tanggal_kunjungan'];
$metode_pembayaran = $_POST['metode_pembayaran'];
$catatan = $_POST['catatan'];

$query = mysqli_query($konek, "insert into pesanan
(nama_pemesan, email, no_hp, jenis_tiket, jumlah_tiket, tanggal_kunjungan,
metode_pembayaran, catatan)
values
('$nama_pemesan', '$email', '$no_hp' , '$jenis_tiket', '$jumlah_tiket', 
'$tanggal_kunjungan', '$metode_pembayaran', '$catatan')");

if($query){
    header("location:data_pesanan.php");
}else{
    echo "Gagal Melakukan Pesanan" . mysqli_error($konek);
}

?>