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

                    <?php if(isset($_SESSION['status']) && $_SESSION['status']=='login') { ?>

                        <li class="nav-item me-3">
                            <span class="nav-link">
                                Welcome,
                                <b><?php echo $_SESSION['username']; ?></b> 🐾
                            </span>
                        </li>

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

    <section id="kategori-tiket">
        <div class="container">
            <div id="judul-tiket" class="mt-5">
                <h3>HARGA TIKET DAN PAKET   </h3>
            </div>

            <div class="row pt-5 text-center mb-5">
                <div class="col">
                    <div class="card" style="width: 15rem;">
                    <img src="assets/img/1tiket.png" alt="">
                        <div class="card-body">
                            <p class="card-text">SENIN-JUMAT</p>
                            <p class="card-price">Rp 70.000</p>
                        </div>        
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 15rem">
                    <img src="assets/img/1tiket.png" alt="">
                        <div class="card-body">
                            <p class="card-text">SABTU-MINGGU</p>
                            <p class="card-price">Rp 85.000</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 15rem">
                    <img src="assets/img/2tiket.png" alt="">
                        <div class="card-body">
                            <p class="card-text">PAKET COUPLE</p>
                            <p class="card-price">Rp 150.000</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 16rem">
                    <img src="assets/img/tiketrame.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text">PAKET RAME-RAME(5 orang)</p>
                            <p class="card-price">Rp 300.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if(isset($_SESSION['status'])) { ?>
        <div class="btn-wrapper">
            <a href="form.php" class="btn btn-tiket mt-3 px-4">Pesan Tiketmu Sekarang</a>
        </div>
        <?php } else { ?>
        <div class="btn-wrapper">
            <a href="login.php" class="btn btn-tiket mt-3 px-4">Pesan Tiketmu Sekarang</a>
        </div>
        <?php } ?>

    </section>

   <section class="rating py-5 bg-light">
    <div class="container">

        <h2 class="text-center mb-4">
            Rating Pengunjung
        </h2>

        <div class="card shadow-sm p-3">
            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-success">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Rating</th>
                            <th>Komentar</th>
                            <th>Tanggal</th>

                            <?php if(isset($_SESSION['status'])) { ?>
                                <th>Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        include 'koneksi.php';
                        $query = mysqli_query($konek, "SELECT * FROM rating");

                        while($data = mysqli_fetch_array($query)) { 
                        ?>
                            <tr>
                                <td><?php echo $data['id_rating']; ?></td>

                                <td><?php echo $data['nama_user']; ?></td>

                                <td>
                                    ⭐ <?php echo $data['rating']; ?>/5
                                </td>

                                <td style="max-width: 300px;">
                                    <?php echo $data['komentar']; ?>
                                </td>

                                <td>
                                    <?php echo $data['tanggal']; ?>
                                </td>

                                <?php if(isset($_SESSION['status'])) { ?>
                                <td>

                                    <a href="edit_data.php?id_rating=<?php echo $data['id_rating']; ?>" 
                                    class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <a href="hapus_data.php?id=<?php echo $data['id_rating']; ?>"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')" 
                                    class="btn btn-danger btn-sm">
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
            <div class="text-end mt-3">
                <a href="tambah_data.php" class="btn btn-success">
                    + Tambah Data
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