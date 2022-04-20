<?php
include "db/koneksi.php";

$nik = $_SESSION['nik'];

//mengambil data
$data = mysqli_query($mysqli, "SELECT * FROM catatan WHERE nik='$_SESSION[nik]'");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal = $_POST["tanggal"];
    $jam = $_POST["jam"];
    $lokasi = $_POST["lokasi"];
    $suhu = $_POST["suhu"];

    $query = "UPDATE catatan SET
            tanggal = '$tanggal',
            jam = '$jam',
            lokasi = '$lokasi',
            suhu = '$suhu',
        ";

    $mysqli->query($query) or die($mysqli->error);

    header("Location: index.php?page=catatan_perjalanan");
}
