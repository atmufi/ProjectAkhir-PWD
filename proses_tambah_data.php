<?php 
include 'koneksi.php';

$nama_user = $_POST['nama_user'];
$rating = $_POST['rating'];
$komentar = $_POST['komentar'];
$tanggal = $_POST['tanggal'];

$query = mysqli_query($konek, "insert into rating
(nama_user, rating, komentar, tanggal)
values
('$nama_user', '$rating', '$komentar', '$tanggal')");

if($query){
    header("location:index.php");
}else{
    echo "Gagal Menambahkan data" . mysqli_error($konek);
}

?>