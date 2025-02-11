<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "agendakerja";

$conn = mysqli_connect($host,$user,$pass,$db);
if ($conn) {
    echo("");
} else {
    echo("koneksi gagal".mysqli_connect_error());
}

?>