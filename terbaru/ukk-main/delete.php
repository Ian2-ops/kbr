<?php
include "db/koneksi.php";

$cid = $_GET["cid"];

if (empty($cid)) header("Location: catatan.php");

$query = "DELETE FROM catatan WHERE cid = '$cid'";
// var_dump($query);
// die();
$result = $mysqli->query($query);

$mysqli->query($query) or die($mysqli->error);

header("Location: index.php?page=catatan_perjalanan");
