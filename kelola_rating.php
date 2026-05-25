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
"SELECT * FROM rating
ORDER BY id_rating DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Kelola Rating</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f5f5;
        }

        .header{
            background:
            linear-gradient(to right,
            #ffc107,#ffca2c);

            color:black;
            padding:35px;
            border-radius:20px;
            margin-bottom:30px;
        }

        .rating-card{
            border:none;
            border-radius:20px;
            transition:0.3s;
        }

        .rating-card:hover{
            transform:translateY(-5px);
        }

        .star{
            font-size:20px;
            color:orange;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- HEADER -->
    <div class="header shadow">
        <h1 class="fw-bold">
            ⭐ Kelola Rating
        </h1>

        <p class="mb-0">
            Data rating pengunjung
            Gembira Loka Zoo
        </p>
    </div>

    <!-- BUTTON -->
    <div class="mb-4 d-flex justify-content-between">

        <a href="admin.php"
        class="btn btn-outline-dark">
            ← Kembali ke Admin
        </a>

        <a href="tambah_data.php"
        class="btn btn-success">
            + Tambah Rating
        </a>

    </div>

    <div class="row">

    <?php
    while($data =
    mysqli_fetch_array($query)){
    ?>

        <div class="col-md-6 col-lg-4 mb-4">

            <div class="card shadow rating-card h-100">

                <div class="card-body">

                    <h5 class="fw-bold">
                        👤
                        <?php
                        echo $data['nama_user'];
                        ?>
                    </h5>

                    <p class="star">
                        ⭐
                        <?php
                        echo $data['rating'];
                        ?>/5
                    </p>

                    <p>
                        <?php
                        echo $data['komentar'];
                        ?>
                    </p>

                    <small class="text-muted">
                        📅
                        <?php
                        echo $data['tanggal'];
                        ?>
                    </small>

                    <hr>

                    <div class="d-flex justify-content-between">

                        <a href="edit_data.php?id_rating=<?php echo $data['id_rating']; ?>"
                        class="btn btn-warning btn-sm">
                            ✏️ Edit
                        </a>

                        <a href="hapus_data.php?id=<?php echo $data['id_rating']; ?>"
                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                        class="btn btn-danger btn-sm">
                            🗑 Hapus
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