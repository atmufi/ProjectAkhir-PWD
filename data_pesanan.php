<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['status']) || $_SESSION['status'] != 'login'){
    header("location:login.php");
    exit;
}

$query = mysqli_query($konek, 
"SELECT * FROM pesanan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan Tiket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color: #f5f7f8;
        }

        .judul{
            text-align: center;
            margin-top: 40px;
            margin-bottom: 30px;
        }

        .card-table{
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .table th{
            background-color: #198754;
            color: white;
        }

        .badge-tiket{
            background-color: #198754;
            padding: 8px 12px;
            border-radius: 8px;
            color: white;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <div class="judul">
        <h1><b>Data Pemesanan Tiket</b></h1>
        <p>Daftar pemesanan pengunjung Gembira Loka Zoo 🐾</p>
    </div>

    <div class="card card-table p-4">

        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle text-center">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Jenis Tiket</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                        <th>Pembayaran</th>
                        <th>Catatan</th>
                    </tr>
                </thead>

                <tbody>

                <?php while($data = mysqli_fetch_array($query)) { ?>

                    <tr>
                        <td>
                            <?php echo $data['id_pesanan']; ?>
                        </td>

                        <td>
                            <?php echo $data['nama_pemesan']; ?>
                        </td>

                        <td>
                            <?php echo $data['email']; ?>
                        </td>

                        <td>
                            <?php echo $data['no_hp']; ?>
                        </td>

                        <td>
                            <span class="badge-tiket">
                                <?php echo $data['jenis_tiket']; ?>
                            </span>
                        </td>

                        <td>
                            <?php echo $data['jumlah_tiket']; ?>
                        </td>

                        <td>
                            <?php echo $data['tanggal_kunjungan']; ?>
                        </td>

                        <td>
                            <?php echo $data['metode_pembayaran']; ?>
                        </td>

                        <td>
                            <?php echo $data['catatan']; ?>
                        </td>
                    </tr>

                <?php } ?>

                </tbody>
            </table>
        </div>

        <div class="mt-3 text-end">
            <a href="form.php" class="btn btn-success">
                + Tambah Pemesanan
            </a>

            <a href="index.php" class="btn btn-secondary">
                Home
            </a>
        </div>

    </div>
</div>

</body>
</html>