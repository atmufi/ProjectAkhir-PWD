<?php 
include 'koneksi.php';
session_start();

$id_rating = $_GET['id_rating'];

$query = mysqli_query($konek, 
"SELECT * FROM rating WHERE id_rating='$id_rating'");

$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rating</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f5f5f5;">

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <div class="card shadow-lg p-4 border-0 rounded-4" style="width: 450px;">
        
        <div class="text-center mb-4">
            <h2 class="fw-bold text-success">
                ✏️ Edit Rating
            </h2>
            <p class="text-muted">
                Silakan ubah data rating pengunjung
            </p>
        </div>

        <form action="proses_edit.php" method="POST">

            <input type="hidden" 
            name="id_rating" 
            value="<?php echo $data['id_rating']; ?>">

            <!-- Nama User -->
            <div class="mb-3">
                <label class="form-label">
                    Nama User
                </label>

                <input type="text" 
                name="nama_user" 
                class="form-control"
                value="<?php echo $data['nama_user']; ?>"
                required>
            </div>

            <!-- Rating -->
            <div class="mb-3">
                <label class="form-label">
                    Rating
                </label>

                <select name="rating" class="form-select" required>
                    <option value="1" <?php if($data['rating']==1) echo "selected"; ?>>⭐ 1</option>
                    <option value="2" <?php if($data['rating']==2) echo "selected"; ?>>⭐⭐ 2</option>
                    <option value="3" <?php if($data['rating']==3) echo "selected"; ?>>⭐⭐⭐ 3</option>
                    <option value="4" <?php if($data['rating']==4) echo "selected"; ?>>⭐⭐⭐⭐ 4</option>
                    <option value="5" <?php if($data['rating']==5) echo "selected"; ?>>⭐⭐⭐⭐⭐ 5</option>
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
                required><?php echo $data['komentar']; ?></textarea>
            </div>

            <!-- Tanggal -->
            <div class="mb-4">
                <label class="form-label">
                    Tanggal
                </label>

                <input type="date" 
                name="tanggal" 
                class="form-control"
                value="<?php echo $data['tanggal']; ?>"
                required>
            </div>

            <!-- Button -->
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">
                    Simpan Perubahan
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