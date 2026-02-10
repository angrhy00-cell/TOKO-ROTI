<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Toko Roti</title>
</head>
<body>
    <h2>Daftar Roti</h2>
    <a href="tambah.php">+ Tambah Roti Baru</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Roti</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM produk");
        while($data = mysqli_fetch_array($query)){
            echo "<tr>
                <td>".$no++."</td>
                <td>".$data['nama_roti']."</td>
                <td>Rp ".number_format($data['harga'], 0, ',', '.')."</td>
                <td>".$data['stok']."</td>
                <td>
                    <a href='edit.php?id=".$data['id_roti']."'>Edit</a> | 
                    <a href='hapus.php?id=".$data['id_roti']."' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
