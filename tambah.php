<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomor = $_POST['nomor'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $lokasi = $_POST['lokasi'];
    $kegiatan = $_POST['kegiatan'];

    $query = "INSERT INTO agenda (nomor, tanggal, jam, lokasi, kegiatan) VALUES ('$nomor', '$tanggal', '$jam', '$lokasi', '$kegiatan')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: index.php");
    }else{
        echo "gagal menambah data";
    }
}
?>