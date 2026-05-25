<?php
session_start();
include 'koneksi.php';

$id_user = $_SESSION['id_user'];

$query = mysqli_query($konek,
"SELECT * FROM pesanan
WHERE id_user='$id_user'
ORDER BY id_pesanan DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pesanan Saya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #f5f5f5;
        }

        .pesanan-card{
            border-radius: 20px;
        }

        .status-menunggu{
            background: orange;
        }

        .status-konfirmasi{
            background: green;
        }

        .badge-status{
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <h2 class="text-center mb-2">
        🎟 Pesanan Saya
    </h2>

    <p class="text-center text-muted mb-5">
        Berikut daftar tiket yang telah Anda pesan
    </p>

    <?php while($data = mysqli_fetch_array($query)){ ?>

    <div class="card shadow-sm mb-4 pesanan-card border-0">
        <div class="card-body p-4">

            <div class="d-flex justify-content-between">

                <div>
                    <h4>
                        <?php echo $data['jenis_tiket']; ?>
                    </h4>

                    <p>
                        <b>Jumlah Tiket:</b>
                        <?php echo $data['jumlah_tiket']; ?>
                    </p>

                    <p>
                        <b>Tanggal Kunjungan:</b>
                        <?php echo $data['tanggal_kunjungan']; ?>
                    </p>

                    <p>
                        <b>Pembayaran:</b>
                        <?php echo $data['metode_pembayaran']; ?>
                    </p>
                </div>

                <div>
                    <?php
                    if($data['status_pesanan']=="Menunggu Konfirmasi"){
                        echo "<span class='badge-status status-menunggu'>
                        Menunggu Konfirmasi
                        </span>";
                    }
                    else{
                        echo "<span class='badge-status status-konfirmasi'>
                        Sudah Dikonfirmasi
                        </span>";
                    }
                    ?>
                </div>

            </div>

            <hr>

            <p class="text-danger">
                Salah input data?
                Hubungi admin untuk edit/hapus pesanan.
            </p>

            <a href="https://wa.me/62822XXXXXXXX?text=Halo admin, saya ingin mengubah pesanan tiket saya"
            class="btn btn-success">
                Hubungi via WhatsApp
            </a>

        </div>
    </div>

    <?php } ?>

    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-secondary">
            Kembali ke Home
        </a>
    </div>

</div>

</body>
</html>