<?php 
session_start();
include 'koneksi.php';

$id_rating = $_GET['id_rating'];

$query = mysqli_query($konek, "delete from rating where id_rating='$id_rating'");

if($query){
    header("location:index.php");
}else{
    echo "Gagal Menghapus Data" . mysqli_error($konek);
}

?>