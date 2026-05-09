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
    <title>Wahana dan Peta</title>
</head>
<body>
     <section class="atas bg-atas">
        <nav class="navbar navbar-expand bg-light py-3">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="assets/img/logonobg.png" alt="logo">    
                    Gembira Loka Zoo
                </a>

                <div id="navmenu">
                    <ul class="navbar-nav">
                        <li class="nav-item me-3">
                            <a href="index.php" class="nav-link"><b>home</b></a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="peta.php" class="nav-link"><b>Peta & Wahana</b></a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="" class="nav-link"><b>Pemesanan tiket</b></a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="" class="nav-link"><b>About Us</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="judul" class="container">
            <p><strong id="besar">WAHANA</strong> GEMBIRA LOKA ZOO</p>
        </div>
    </section>

    <section id="wahana">
        <div class="container">
            <div class="row pt-5 text-center">
                <div class="col">
                    <div class="card" style="width: 15rem;">
                        <img src="assets/img/interaksigajah1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Interaksi Gajah Sumatra</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 15rem;">
                        <img src="assets/img/pettingzoo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Petting Zoo</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 15rem;">
                        <img src="assets/img/terapiikan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Terapi Ikan</p>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card" style="width: 15rem;">
                        <img src="assets/img/atv.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">ATV</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="peta">
        <div id="judul" class="container">
            <h3><strong>PETA</strong> Gembira Loka Zoo</h3>
        </div>
        <div class="map-box">
            <img src="assets/img/peta.jpg " alt="">
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