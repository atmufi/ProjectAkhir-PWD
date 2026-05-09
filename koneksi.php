<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_bonbin";

$konek = mysqli_connect($hostname,$username,$password,$database);

if(!$konek){
    die("Koneksi Gagal : " . mysqli_connect_error());
}
?>
