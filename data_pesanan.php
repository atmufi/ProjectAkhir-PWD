<?php
session_start();
include 'koneksi.php';

// hanya admin
if(
    !isset($_SESSION['status']) ||
    $_SESSION['role'] != 'admin'
){
    header("location:login.php");
    exit();
}

$query = mysqli_query($konek,
"SELECT * FROM pesanan ORDER BY id_pesanan DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Data Pemesanan Tiket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #f5f5f5;
        }

        .header-page{
            background: linear-gradient(to right,
            #198754, #20c997);
            color: white;
            padding: 35px;
            border-radius: 20px;
            margin-bottom: 30px;
        }

        .ticket-card{
            border: none;
            border-radius: 20px;
            overflow: hidden;
            transition: 0.3s;
        }

        .ticket-card:hover{
            transform: translateY(-5px);
        }

        .ticket-header{
            background: #198754;
            color: white;
            padding: 15px;
        }

        .badge-ticket{
            background: #198754;
            color: white;
            border-radius: 20px;
            padding: 8px 15px;
            font-size: 14px;
        }

        .info{
            font-size: 15px;
            margin-bottom: 8px;
        }

        .btn-home{
            border-radius: 12px;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- HEADER -->
    <div class="header-page shadow">
        <h1 class="fw-bold">
            🎫 Data Pemesanan Tiket
        </h1>

        <p class="mb-0">
            Daftar tiket pengunjung
            Gembira Loka Zoo
        </p>
    </div>

    <!-- BUTTON -->
    <div class="mb-4 d-flex justify-content-between">

        <a href="admin.php"
        class="btn btn-outline-success btn-home">
            ← Kembali ke Admin
        </a>

        <a href="index.php"
        class="btn btn-secondary btn-home">
            🏠 Home
        </a>

    </div>

    <div class="row">

    <?php while($data =
    mysqli_fetch_array($query)) { ?>

        <div class="col-md-6 col-lg-4 mb-4">

            <div class="card shadow ticket-card">

                <!-- HEADER CARD -->
                <div class="ticket-header">
                    <h5 class="mb-0">
                        🎟 Pesanan
                        #<?php echo $data['id_pesanan']; ?>
                    </h5>
                </div>

                <!-- BODY -->
                <div class="card-body">

                    <h4 class="fw-bold">
                        <?php echo $data['nama_pemesan']; ?>
                    </h4>

                    <p class="info">
                        📧 <?php echo $data['email']; ?>
                    </p>

                    <p class="info">
                        📱 <?php echo $data['no_hp']; ?>
                    </p>

                    <p>
                        <span class="badge-ticket">
                            <?php echo $data['jenis_tiket']; ?>
                        </span>
                    </p>

                    <p class="info">
                        🎫 Jumlah Tiket:
                        <b><?php echo $data['jumlah_tiket']; ?></b>
                    </p>

                    <p class="info">
                        📅 Tanggal Kunjungan:
                        <b>
                            <?php echo $data['tanggal_kunjungan']; ?>
                        </b>
                    </p>

                    <p class="info">
                        💳 Pembayaran:
                        <b>
                            <?php echo $data['metode_pembayaran']; ?>
                        </b>
                    </p>

                    <!-- STATUS -->
                    <p class="info">
                        📌 Status:
                        
                        <?php
                        if($data['status_pesanan']
                        == 'Menunggu Konfirmasi'){
                        ?>

                            <span class="badge bg-warning text-dark">
                                Menunggu Konfirmasi
                            </span>

                        <?php
                        } elseif(
                        $data['status_pesanan']
                        == 'Dikonfirmasi'){
                        ?>

                            <span class="badge bg-success">
                                Dikonfirmasi
                            </span>

                        <?php } else { ?>

                            <span class="badge bg-danger">
                                Dibatalkan
                            </span>

                        <?php } ?>
                    </p>

                    <?php if(!empty($data['catatan'])) { ?>

                    <div class="alert alert-light mt-3">
                        📝 <?php echo $data['catatan']; ?>
                    </div>

                    <?php } ?>

                    <!-- AKSI ADMIN -->
                    <div class="d-grid gap-2 mt-3">

                        <a href="konfirmasi.php?id=<?php echo $data['id_pesanan']; ?>"
                        class="btn btn-success btn-sm">
                            ✅ Konfirmasi
                        </a>

                        <a href="batalkan.php?id=<?php echo $data['id_pesanan']; ?>"
                        class="btn btn-warning btn-sm">
                            ❌ Batalkan
                        </a>

                        <a href="edit_pesanan.php?id=<?php echo $data['id_pesanan']; ?>"
                        class="btn btn-primary btn-sm">
                            ✏️ Edit Pesanan
                        </a>

                        <a href="hapus_data.php?id=<?php echo $data['id_pesanan']; ?>"
                        onclick="return confirm('Yakin ingin menghapus pesanan ini?')"
                        class="btn btn-danger btn-sm">
                            🗑 Hapus Pesanan
                        </a>

                    </div>

                </div>
            </div>
        </div>

    <?php } ?>

    </div>
</div>

</body>
</html>