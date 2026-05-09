<?php 
include 'koneksi.php';

$id_rating = $_POST['id_rating'];
$nama_user = $_POST['nama_user'];
$rating = $_POST['rating'];
$komentar = $_POST['komentar'];
$tanggal = $_POST['tanggal'];

$query = mysqli_query($konek, "update rating set
nama_user='$nama_user',
rating='$rating',
komentar='$komentar',
tanggal='$tanggal'
where 
id_rating='$id_rating'");

if($query){
    header("location:index.php");
}else{
    echo "Gagal Update Data" . mysqli_error($konek);
}
?>