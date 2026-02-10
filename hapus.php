<?php
include 'koneksi.php';
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM produk WHERE id_roti='$id'");

if($query){
    header("location:index.php");
} else {
    echo "Gagal menghapus data.";
}
?>
