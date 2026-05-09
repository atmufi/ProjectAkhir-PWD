<?php 
include 'koneksi.php';

$id_rating = $_GET['id_rating'];
$query = mysqli_query($konek, "select * from rating where id_rating='$id_rating'");
$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data Rating</h2>

    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_rating" value="<?php echo $data['id_rating']; ?>">

        <label for="nama_user">Nama User</label><br>
        <input type="text" name="nama_user" value="<?php echo $data['nama_user']; ?>"><br>

        <label for="rating">Rating</label><br>
        <input type="text" name="rating" value="<?php echo $data['rating']; ?>"><br>

        <label for="komentar">Komentar</label><br>
        <textarea name="komentar" value="<?php echo $data['komentar']; ?>"></textarea><br>

        <label for="tanggal">Tanggal</label><br>
        <input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>"><br>

        <input type="submit" value="Edit">
    </form>
</body>
</html>