<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($konek, "SELECT * FROM users WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){

    $data = mysqli_fetch_array($query);

    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['status'] = "login";
    $_SESSION['role'] = $data['role'];

    //kalau admin
    if($data['role'] == 'admin'){
        header("location:index.php");
    }

    //kalau user biasa
    else{
        header("location:index.php");
    }

}else{
    header("location:login.php?pesan=gagal");
}

?>