<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nomor'])) {
    $nomor = $_GET['nomor'];

    $query = "DELETE FROM agenda WHERE nomor = $nomor";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header ("location: index.php");
    }else{
        echo "Gagal Menghapus Data";
    }
}
?>