<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Registrasi - Gembira Loka Zoo</title>

    <style>
        body{
            background: linear-gradient(rgba(0,0,0,0.4),
            rgba(0,0,0,0.4)),
            url('assets/img/bgZoo.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-card{
            width: 400px;
            border-radius: 20px;
            padding: 35px;
            background: rgba(255,255,255,0.95);
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        .logo{
            width: 80px;
            margin-bottom: 10px;
        }

        .btn-register{
            background-color: #198754;
            border: none;
            border-radius: 10px;
            padding: 10px;
            font-weight: bold;
        }

        .btn-register:hover{
            background-color: #157347;
        }

        .login-text{
            text-align: center;
            margin-top: 15px;
        }

        .login-text a{
            text-decoration: none;
            font-weight: bold;
            color: #198754;
        }
    </style>
</head>

<body>

    <div class="register-card">

        <div class="text-center">
            <img src="assets/img/logonobg.png" class="logo" alt="">
            <h2><b>Registrasi</b></h2>
            <p class="text-muted">
                Buat akun baru untuk memesan tiket
            </p>
        </div>

        <form action="cek_registrasi.php" method="POST">

            <div class="mb-3">
                <label class="form-label">
                    Username
                </label>

                <input type="text" 
                name="username" 
                class="form-control"
                placeholder="Masukkan username"
                required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Password
                </label>

                <input type="password" 
                name="password" 
                class="form-control"
                placeholder="Masukkan password"
                required>
            </div>

            <button type="submit" 
            name="submit"
            class="btn btn-register w-100 text-white">
                Daftar
            </button>

        </form>

        <div class="login-text">
            Sudah memiliki akun?
            <a href="login.php">
                Login di sini
            </a>
        </div>

        <div class="text-center mt-3">
            <a href="index.php" 
            class="text-decoration-none text-secondary">
                ← Kembali ke Home
            </a>
        </div>

    </div>

</body>
</html>