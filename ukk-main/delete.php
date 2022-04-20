<?php
include "db/koneksi.php";

$nik = $_GET["nik"];

if (empty($nis)) header("Location: catatan.php");

$query = "DELETE FROM user WHERE nik = '$nik'";
$result = $mysqli->query($query);

$mysqli->query($query) or die($mysqli->error);

header("Location: index.php?page=catatan_perjalanan");
