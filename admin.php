<?php
session_start();
include 'koneksi.php';

// Cegah user biasa masuk
if(
    !isset($_SESSION['status']) ||
    $_SESSION['role'] != 'admin'
){
    header("location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Gembira Loka Zoo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #f5f5f5;
        }

        .navbar-brand img{
            width: 50px;
            margin-right: 10px;
        }

        .header-admin{
            background: linear-gradient(to right, #198754, #20c997);
            color: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
        }

        .table-card{
            border-radius: 20px;
            overflow: hidden;
        }

        .btn-home{
            border-radius: 10px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="assets/img/logonobg.png" alt="">
            <b>Gembira Loka Zoo</b>
        </a>

        <div class="d-flex align-items-center">

            <span class="me-3">
                Welcome Admin,
                <b><?php echo $_SESSION['username']; ?></b> 🐾
            </span>

            <!-- Kembali ke Index -->
            <a href="index.php" class="btn btn-outline-success me-2 btn-home">
                🏠 Home
            </a>

            <!-- Logout -->
            <a href="logout.php" class="btn btn-danger btn-home">
                Logout
            </a>
        </div>
    </div>
</nav>

<div class="container py-5">

    <!-- HEADER -->
    <div class="header-admin shadow">
        <h1 class="fw-bold">
            Dashboard Admin
        </h1>

        <p class="mb-0">
            Kelola sistem Gembira Loka Zoo
        </p>
    </div>

    <!-- MENU -->
    <div class="row g-4">

        <!-- KELOLA PEMESANAN -->
        <div class="col-md-6">
            <div class="card shadow border-0 h-100 text-center p-4">

                <div class="card-body">

                    <h1 class="mb-3">
                        🎫
                    </h1>

                    <h3 class="fw-bold">
                        Kelola Data Pemesanan
                    </h3>

                    <p class="text-muted">
                        Melihat seluruh data
                        pemesanan tiket pengunjung
                    </p>

                    <a href="data_pesanan.php"
                    class="btn btn-success px-4">
                        Masuk
                    </a>

                </div>
            </div>
        </div>

        <!-- KELOLA RATING -->
        <div class="col-md-6">
            <div class="card shadow border-0 h-100 text-center p-4">

                <div class="card-body">

                    <h1 class="mb-3">
                        ⭐
                    </h1>

                    <h3 class="fw-bold">
                        Kelola Rating
                    </h3>

                    <p class="text-muted">
                        Edit, hapus, dan kelola
                        rating pengunjung
                    </p>

                    <a href="kelola_rating.php"
                    class="btn btn-warning px-4">
                        Masuk
                    </a>

                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>