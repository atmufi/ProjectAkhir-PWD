<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="proses_tambah_data.php" method="POST">
        <label for="nama_user">Nama</label><br>
        <input type="text" name="nama_user" placeholder="Nama"><br>

        <label for="rating">Rating</label><br>
        <input type="text" name="rating"><br>

        <label for="komentar">Komentar</label><br>
        <textarea name="komentar" placeholder="komentar"></textarea><br>

        <label for="Tanggal">Tanggal</label><br>
        <input type="date" name="tanggal"><br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>