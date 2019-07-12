<?php

session_start();

// databse settings

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'aplikasi_alumni_madrasah_darul_azhar_batulicin';

// end databse settings


function base_url($url = null)
{

  $base_url = "http://localhost/aplikasi_alumni_madrasah_aliyah_darul_azhar_batulicin/";
    // $base_url = "http://localhost/aplikasi_alumni_madrasah_aliyah_darul_azhar_batulicin/";
    if ($url != null) {
        return $base_url."/".$url;
    }else{
        return $base_url;
    }
}
