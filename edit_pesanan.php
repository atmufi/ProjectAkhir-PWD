<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($konek,
"SELECT * FROM pesanan
WHERE id_pesanan='$id'");

$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pesanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f5f5f5;">

<div class="container py-5">

    <div class="card shadow p-4 rounded-4">

        <h2 class="mb-4 text-success">
            ✏️ Edit Pesanan
        </h2>

        <form action="proses_edit_pesanan.php"
        method="POST">

            <input type="hidden"
            name="id_pesanan"
            value="<?php echo $data['id_pesanan']; ?>">

            <label>Nama</label>
            <input type="text"
            name="nama_pemesan"
            class="form-control mb-3"
            value="<?php echo $data['nama_pemesan']; ?>">

            <label>Email</label>
            <input type="email"
            name="email"
            class="form-control mb-3"
            value="<?php echo $data['email']; ?>">

            <label>No HP</label>
            <input type="text"
            name="no_hp"
            class="form-control mb-3"
            value="<?php echo $data['no_hp']; ?>">

            <label>Jenis Tiket</label>
            <select name="jenis_tiket"
            class="form-control mb-3">

                <option value="Senin-Jumat">
                    Senin-Jumat
                </option>

                <option value="Sabtu-Minggu">
                    Sabtu-Minggu
                </option>

                <option value="Paket Couple">
                    Paket Couple
                </option>

                <option value="Paket Rame-Rame">
                    Paket Rame-Rame
                </option>
            </select>

            <label>Jumlah Tiket</label>
            <input type="number"
            name="jumlah_tiket"
            class="form-control mb-3"
            value="<?php echo $data['jumlah_tiket']; ?>">

            <label>Tanggal Kunjungan</label>
            <input type="date"
            name="tanggal_kunjungan"
            class="form-control mb-3"
            value="<?php echo $data['tanggal_kunjungan']; ?>">

            <label>Metode Pembayaran</label>
            <input type="text"
            name="metode_pembayaran"
            class="form-control mb-3"
            value="<?php echo $data['metode_pembayaran']; ?>">

            <label>Catatan</label>
            <textarea name="catatan"
            class="form-control mb-3"><?php echo $data['catatan']; ?></textarea>

            <button type="submit"
            class="btn btn-success">
                💾 Simpan Perubahan
            </button>

            <a href="data_pesanan.php"
            class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

</body>
</html>