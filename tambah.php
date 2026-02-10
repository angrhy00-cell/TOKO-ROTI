<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Tambah Produk</title></head>
<body>
    <h2>Tambah Roti Baru</h2>
    <form method="POST">
        Nama Roti: <input type="text" name="nama_roti" required><br><br>
        Harga: <input type="number" name="harga" required><br><br>
        Stok: <input type="number" name="stok" required><br><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>

    <?php
    if(isset($_POST['simpan'])){
        $nama  = $_POST['nama_roti'];
        $harga = $_POST['harga'];
        $stok  = $_POST['stok'];
        
        $sql = "INSERT INTO produk (nama_roti, harga, stok) VALUES ('$nama', '$harga', '$stok')";
        if(mysqli_query($koneksi, $sql)){
            header("location:index.php");
        }
    }
    ?>
</body>
</html>
