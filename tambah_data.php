<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Rating</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #f5f5f5;">

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <div class="card shadow-lg p-4 border-0 rounded-4" style="width: 450px;">

        <div class="text-center mb-4">
            <h2 class="fw-bold text-success">
                ⭐ Tambah Rating
            </h2>
            <p class="text-muted">
                Berikan penilaian dan komentar Anda
            </p>
        </div>

        <form action="proses_tambah_data.php" method="POST">

            <!-- Nama -->
            <div class="mb-3">
                <label class="form-label">
                    Nama
                </label>

                <input type="text" 
                name="nama_user" 
                class="form-control"
                placeholder="Masukkan nama"
                required>
            </div>

            <!-- Rating -->
            <div class="mb-3">
                <label class="form-label">
                    Rating
                </label>

                <select name="rating" class="form-select" required>
                    <option value="">-- Pilih Rating --</option>
                    <option value="1">⭐ 1</option>
                    <option value="2">⭐⭐ 2</option>
                    <option value="3">⭐⭐⭐ 3</option>
                    <option value="4">⭐⭐⭐⭐ 4</option>
                    <option value="5">⭐⭐⭐⭐⭐ 5</option>
                </select>
            </div>

            <!-- Komentar -->
            <div class="mb-3">
                <label class="form-label">
                    Komentar
                </label>

                <textarea 
                name="komentar" 
                class="form-control"
                rows="4"
                placeholder="Tulis komentar..."
                required></textarea>
            </div>

            <!-- Tanggal -->
            <div class="mb-4">
                <label class="form-label">
                    Tanggal
                </label>

                <input type="date" 
                name="tanggal" 
                class="form-control"
                required>
            </div>

            <!-- Button -->
            <div class="d-grid gap-2">

                <button type="submit" class="btn btn-success">
                    Tambah Data
                </button>

                <a href="index.php" class="btn btn-outline-secondary">
                    Kembali
                </a>

            </div>

        </form>
    </div>
</div>

</body>
</html>