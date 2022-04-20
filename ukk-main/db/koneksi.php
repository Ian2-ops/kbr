<?php 

include "library.php";

$host = "localhost" ; 
$user = "root" ;
$pass = "";
$db = "pako";

$mysqli = mysqli_connect($host,$user,$pass,$db) or die("Tidak dapat tersambung ke database");
