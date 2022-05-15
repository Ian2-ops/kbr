<?php

session_start();

function checkLogin()
{
    $nik = @$_SESSION["nik"];
    $nama = @$_SESSION["nama"];

    if (!empty($nik) and !empty($nama)) {
        return true;
    }

    return false;
}
