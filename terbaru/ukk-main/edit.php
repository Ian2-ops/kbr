<?php
include "db/koneksi.php";

// $cid = $_SESSION['cid'];

//mengambil data
// $data = mysqli_query($mysqli, "SELECT * FROM catatan WHERE cid='$_SESSION[cid]'");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal = $_POST["tanggal"];
    $jam = $_POST["jam"];
    $lokasi = $_POST["lokasi"];
    $suhu = $_POST["suhu"];
    $cid = $_POST["cid"];


    $query = "UPDATE catatan SET
            tanggal = '$tanggal',
            jam = '$jam',
            lokasi = '$lokasi',
            suhu = '$suhu'
            WHERE cid = '$cid'
        ";

    var_dump($query);
    die();

    $mysqli->query($query) or die($mysqli->error);

    header("Location: index.php?page=catatan_perjalanan");
}

// include "views/v_edit.php";
