<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_roti='$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head><title>Edit Produk</title></head>
<body>
    <h2>Edit Data Roti</h2>
    <form method="POST">
        Nama Roti: <input type="text" name="nama_roti" value="<?= $data['nama_roti'] ?>"><br><br>
        Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>"><br><br>
        Stok: <input type="number" name="stok" value="<?= $data['stok'] ?>"><br><br>
        <button type="submit" name="update">Update</button>
    </form>

    <?php
    if(isset($_POST['update'])){
        $nama  = $_POST['nama_roti'];
        $harga = $_POST['harga'];
        $stok  = $_POST['stok'];
        
        mysqli_query($koneksi, "UPDATE produk SET nama_roti='$nama', harga='$harga', stok='$stok' WHERE id_roti='$id'");
        header("location:index.php");
    }
    ?>
</body>
</html>
