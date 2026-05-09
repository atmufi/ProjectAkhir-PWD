<?php
session_start();

if(!isset($_SESSION['status']) || $_SESSION['status'] != 'login'){
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(rgba(0,0,0,0.3),
            rgba(0,0,0,0.3)),
            url('assets/img/bgZoo.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        .form-card{
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            padding: 35px;
        }

        .judul{
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }

        .btn-pesan{
            background: #198754;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: bold;
        }

        .btn-pesan:hover{
            background: #157347;
        }

        label{
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <div class="judul">
        <h1><b>Pemesanan Tiket</b></h1>
        <p>Pesan tiket Gembira Loka Zoo dengan mudah 🐾</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="form-card">

                <form action="proses_pesan.php" method="POST">

                    <div class="mb-3">
                        <label>Nama Pemesan</label>
                        <input type="text"
                        name="nama_pemesan"
                        class="form-control"
                        placeholder="Masukkan nama lengkap"
                        required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email"
                        name="email"
                        class="form-control"
                        placeholder="Masukkan email"
                        required>
                    </div>

                    <div class="mb-3">
                        <label>No Handphone</label>
                        <input type="tel"
                        name="no_hp"
                        class="form-control"
                        placeholder="08xxxxxxxxxx"
                        required>
                    </div>

                    <div class="mb-3">
                        <label>Jenis Tiket</label>
                        <select name="jenis_tiket"
                        class="form-select"
                        required>

                            <option value="">
                                -- Pilih Tiket --
                            </option>

                            <option value="senin-jumat">
                                Senin - Jumat (Rp70.000)
                            </option>

                            <option value="sabtu-minggu">
                                Sabtu - Minggu (Rp85.000)
                            </option>

                            <option value="couple">
                                Paket Couple (Rp150.000)
                            </option>

                            <option value="rame-rame">
                                Paket Rame-Rame (Rp300.000)
                            </option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Jumlah Tiket</label>
                        <input type="number"
                        name="jumlah_tiket"
                        class="form-control"
                        min="1"
                        required>
                    </div>

                    <div class="mb-3">
                        <label>Tanggal Kunjungan</label>
                        <input type="date"
                        name="tanggal_kunjungan"
                        class="form-control"
                        required>
                    </div>

                    <div class="mb-3">
                        <label>Metode Pembayaran</label>

                        <select name="metode_pembayaran"
                        class="form-select"
                        required>

                            <option value="">
                                -- Pilih Pembayaran --
                            </option>

                            <option value="DANA">DANA</option>
                            <option value="OVO">OVO</option>
                            <option value="GoPay">GoPay</option>
                            <option value="Transfer Bank">
                                Transfer Bank
                            </option>

                        </select>
                    </div>

                    <div class="mb-4">
                        <label>Catatan</label>
                        <textarea
                        name="catatan"
                        class="form-control"
                        rows="3"
                        placeholder="Opsional"></textarea>
                    </div>

                    <button type="submit"
                    class="btn btn-pesan w-100 text-white">
                        Pesan Sekarang
                    </button>

                </form>

                <div class="text-center mt-3">
                    <a href="index.php"
                    class="text-decoration-none text-secondary">
                        ← Kembali ke Home
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>