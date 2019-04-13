<?php

session_start();

// databse settings

$host = 'localhost';
$user = 'root';
$pass = '123';
$db   = 'aplikasi_alumni_mts_btl';

// end databse settings


function base_url($url = null)
{
    $base_url = "http://localhost/aplikasi_alumni_madrasah_aliyah_darul_azhar_batulicin/";
    if ($url != null) {
        return $base_url."/".$url;
    }else{
        return $base_url;
    }
}