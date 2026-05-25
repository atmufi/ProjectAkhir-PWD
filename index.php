<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Tugas Akhir PWD</title>
</head>
<body>
    <section class="hero hero-atas">
    <nav class="navbar navbar-expand bg-light py-3">
        <div class="container">

            <a href="#" class="navbar-brand">
                <img src="assets/img/logonobg.png" alt="logo">    
                Gembira Loka Zoo
            </a>

            <div id="navmenu">
                <ul class="navbar-nav align-items-center">

                    <li class="nav-item me-3">
                        <a href="index.php" class="nav-link">
                            <b>Home</b>
                        </a>
                    </li>

                    <li class="nav-item me-3">
                        <a href="<?php 
                        echo (isset($_SESSION['status']) && $_SESSION['status']=='login') 
                        ? 'peta.php' 
                        : 'login.php'; 
                        ?>" class="nav-link">
                            <b>Peta & Wahana</b>
                        </a>
                    </li>

                    <li class="nav-item me-3">
                        <a href="<?php 
                        echo (isset($_SESSION['status']) && $_SESSION['status']=='login') 
                        ? 'form.php' 
                        : 'login.php'; 
                        ?>" class="nav-link">
                            <b>Pemesanan Tiket</b>
                        </a>
                    </li>

                    <?php if(isset($_SESSION['status']) 
                        && $_SESSION['status']=='login') { ?>

                        <li class="nav-item me-3">
                            <a href="pesanan_saya.php"
                            class="nav-link">
                                <b>Pesanan Saya</b>
                            </a>
                        </li>


                    <?php if(isset($_SESSION['status']) && $_SESSION['status']=='login') { ?>

                        <li class="nav-item me-3">
                            <span class="nav-link">
                                Welcome,
                                <b><?php echo $_SESSION['username']; ?></b> 🐾
                            </span>
                        </li>

                        <?php } ?>

                        <?php 
                            if(isset($_SESSION['role']) 
                            && $_SESSION['role']=='admin'){ 
                            ?>

                            <li class="nav-item me-3">
                                <a href="admin.php" class="btn btn-success btn-sm">
                                    Admin Panel
                                </a>
                            </li>
                        <?php } ?>

                        <li class="nav-item">
                            <a href="logout.php" class="btn btn-danger btn-sm">
                                Logout
                            </a>
                        </li>

                    <?php } else { ?>

                        <li class="nav-item me-3">
                            <a href="login.php" class="nav-link">
                                <b>Login</b>
                            </a>
                        </li>

                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>

    <div class="judul">
        <h3>Selamat Datang di</h3>
        <h1><b>GEMBIRA LOKA <br>ZOO</b></h1>
    </div>
</section>

    <section id="kategori-tiket" class="py-5">

    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">
                🎫 Harga Tiket & Paket
            </h2>

            <p class="text-muted">
                Pilih tiket terbaik untuk
                pengalaman seru di
                Gembira Loka Zoo
            </p>
        </div>

        <div class="row g-4">

            <!-- TIKET 1 -->
            <div class="col-md-6 col-lg-3">

                <div class="card shadow border-0 rounded-4 h-100 text-center p-3">

                    <img src="assets/img/1tiket.png"
                    class="img-fluid rounded-4">

                    <div class="card-body">

                        <h5 class="fw-bold">
                            SENIN - JUMAT
                        </h5>

                        <h3 class="text-success fw-bold">
                            Rp 70.000
                        </h3>

                    </div>

                </div>
            </div>

            <!-- TIKET 2 -->
            <div class="col-md-6 col-lg-3">

                <div class="card shadow border-0 rounded-4 h-100 text-center p-3">

                    <img src="assets/img/1tiket.png"
                    class="img-fluid rounded-4">

                    <div class="card-body">

                        <h5 class="fw-bold">
                            SABTU - MINGGU
                        </h5>

                        <h3 class="text-success fw-bold">
                            Rp 85.000
                        </h3>

                    </div>

                </div>
            </div>

            <!-- COUPLE -->
            <div class="col-md-6 col-lg-3">

                <div class="card shadow border-0 rounded-4 h-100 text-center p-3">

                    <img src="assets/img/2tiket.png"
                    class="img-fluid rounded-4">

                    <div class="card-body">

                        <h5 class="fw-bold">
                            PAKET COUPLE
                        </h5>

                        <h3 class="text-success fw-bold">
                            Rp 150.000
                        </h3>

                    </div>

                </div>
            </div>

            <!-- RAMAI -->
            <div class="col-md-6 col-lg-3">

                <div class="card shadow border-0 rounded-4 h-100 text-center p-3">

                    <img src="assets/img/tiketrame.jpg"
                    class="img-fluid rounded-4">

                    <div class="card-body">

                        <h5 class="fw-bold">
                            PAKET RAME-RAME
                        </h5>

                        <small class="text-muted">
                            (5 Orang)
                        </small>

                        <h3 class="text-success fw-bold mt-2">
                            Rp 300.000
                        </h3>

                    </div>

                </div>
            </div>

        </div>

        <!-- BUTTON -->
        <div class="text-center mt-5">

            <?php if(isset($_SESSION['status'])) { ?>

                <a href="form.php"
                class="btn btn-success btn-lg rounded-pill px-5 shadow">
                    🎟 Pesan Tiket Sekarang
                </a>

            <?php } else { ?>

                <a href="login.php"
                class="btn btn-success btn-lg rounded-pill px-5 shadow">
                    Login untuk Pesan Tiket
                </a>

            <?php } ?>

        </div>

    </div>
    </section> 

<section class="rating py-5 bg-light">
    <div class="container">

        <div class="text-center mb-4">
            <h2 class="fw-bold">⭐ Rating Pengunjung</h2>
            <p class="text-muted">
                Apa kata pengunjung tentang Gembira Loka Zoo?
            </p>
        </div>

        <div class="card shadow-lg border-0 rounded-4 p-4">

            <div class="table-responsive">

                <table class="table table-hover align-middle text-center">

                    <thead class="table-success">
                        <tr>
                            <th>Nama Pengunjung</th>
                            <th>Rating</th>
                            <th>Komentar</th>
                            <th>Tanggal</th>

                            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
                                <th>Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>

                    <tbody>

                    <?php
                    include 'koneksi.php';
                    $query = mysqli_query($konek, "SELECT * FROM rating ORDER BY id_rating DESC");

                    while($data = mysqli_fetch_array($query)) {
                    ?>

                        <tr>

                            <td>
                                <div class="d-flex align-items-center">

                                    <div class="avatar-circle me-3">
                                        <?php echo strtoupper(substr($data['nama_user'],0,1)); ?>
                                    </div>

                                    <div class="text-start">
                                        <strong>
                                            <?php echo $data['nama_user']; ?>
                                        </strong>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <?php
                                for($i=1; $i<=5; $i++){
                                    if($i <= $data['rating']){
                                        echo "⭐";
                                    } else {
                                        echo "☆";
                                    }
                                }
                                ?>
                            </td>

                            <td style="max-width: 300px;">
                                <span class="text-muted">
                                    "<?php echo $data['komentar']; ?>"
                                </span>
                            </td>

                            <td>
                                <?php echo $data['tanggal']; ?>
                            </td>

                            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
                            <td>

                                <a href="edit_data.php?id_rating=<?php echo $data['id_rating']; ?>"
                                class="btn btn-warning btn-sm rounded-pill">
                                    Edit
                                </a>

                                <a href="hapus_data.php?id=<?php echo $data['id_rating']; ?>"
                                onclick="return confirm('Yakin ingin menghapus data ini?')"
                                class="btn btn-danger btn-sm rounded-pill">
                                    Hapus
                                </a>

                            </td>
                            <?php } ?>

                        </tr>

                    <?php } ?>

                    </tbody>
                </table>
            </div>

            <?php if(isset($_SESSION['status'])) { ?>
            <div class="text-center mt-4">
                <a href="tambah_data.php"
                class="btn btn-success rounded-pill px-4 py-2 shadow-sm">
                    + Tambah Rating
                </a>
            </div>
            <?php } ?>

        </div>
    </div>
</section>
    
</body>

<footer class="footer">
  <div class="container">
    
    <h3>Gembira Loka Zoo</h3>
    <p>Wisata edukasi dan rekreasi keluarga di Yogyakarta 🐾</p>

    <div class="footer-menu">
      <a href="#">Home</a>
      <a href="#">Kategori</a>
      <a href="#">About Us</a>
    </div>

    <p class="copy">© 2026 Gembira Loka Zoo. All rights reserved.</p>

  </div>
</footer>
</html>