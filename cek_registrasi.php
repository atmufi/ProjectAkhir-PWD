<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$cek = mysqli_query($konek, "select * from users where username='$username'");

if(mysqli_num_rows($cek)>0){
    echo "Username Sudah Digunakan, Silahkan Pilih Username Lain";
    header("location:register.php");
}else{
    mysqli_query($konek, "insert into users (username,password)
    values ('$username','$password')");
    header("location:login.php");

}
?>