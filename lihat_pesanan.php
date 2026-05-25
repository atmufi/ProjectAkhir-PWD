<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['status'])){
    header("location:login.php");
    exit();
}

$username = $_SESSION['username'];

$query = mysqli_query($konek,
"SELECT * FROM pesanan
WHERE nama_pemesan='$username'
ORDER BY id_pesanan DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pesanan Saya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f5f5;
        }

        .header{
            background:linear-gradient(
            to right,#198754,#20c997);
            color:white;
            padding:35px;
            border-radius:20px;
            margin-bottom:30px;
        }

        .card-pesanan{
            border:none;
            border-radius:20px;
            overflow:hidden;
            transition:.3s;
        }

        .card-pesanan:hover{
            transform:translateY(-5px);
        }

        .status{
            border-radius:20px;
            padding:8px 14px;
            color:white;
            font-size:14px;
        }

        .pending{
            background:#ffc107;
            color:black;
        }

        .confirm{
            background:#198754;
        }

        .done{
            background:#0d6efd;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <div class="header shadow">
        <h1>🎫 Pesanan Saya</h1>
        <p>Cek status tiket kamu di sini</p>
    </div>

    <a href="index.php"
    class="btn btn-secondary mb-4">
        ← Kembali ke Home
    </a>

    <div class="row">

<?php while($data =
mysqli_fetch_array($query)){ ?>

<div class="col-md-6 col-lg-4 mb-4">

<div class="card shadow card-pesanan">

    <div class="card-body">

        <h4>
            <?php
            echo $data['jenis_tiket'];
            ?>
        </h4>

        <p>
            🎫 Jumlah:
            <b>
            <?php
            echo $data['jumlah_tiket'];
            ?>
            </b>
        </p>

        <p>
            📅 Kunjungan:
            <b>
            <?php
            echo $data['tanggal_kunjungan'];
            ?>
            </b>
        </p>

        <p>
            💳 Pembayaran:
            <b>
            <?php
            echo $data['metode_pembayaran'];
            ?>
            </b>
        </p>

        <p>Status:</p>

        <?php
        if($data['status_pesanan']
        == 'menunggu konfirmasi'){
        ?>

        <span class="status pending">
            ⏳ Menunggu Konfirmasi
        </span>

        <?php } elseif(
        $data['status_pesanan']
        == 'sudah dikonfirmasi'){
        ?>

        <span class="status confirm">
            ✅ Sudah Dikonfirmasi
        </span>

        <?php } else { ?>

        <span class="status done">
            🎉 Selesai
        </span>

        <?php } ?>

        <hr>

        <p class="text-muted small">
            Ada kesalahan data?
            Hubungi admin untuk edit/
            pembatalan pesanan.
        </p>

        <a href="https://wa.me/628xxxxxxxxxx"
        class="btn btn-success w-100">
            💬 Hubungi Admin
        </a>

    </div>
</div>
</div>

<?php } ?>

</div>
</div>

</body>
</html>