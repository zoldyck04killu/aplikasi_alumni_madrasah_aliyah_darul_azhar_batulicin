<?php

if (@$_GET['view'] == '' || @$_GET['view'] == 'home')
{
    include 'views/home.php';
}

elseif (@$_GET['view'] == 'login')
{
    include 'views/login/login.php';
}
elseif (@$_GET['view'] == 'alumni')
{
    include 'views/alumni/data-alumni.php';
}
elseif (@$_GET['view'] == 'tambah-data-alumni')
{
    include 'views/alumni/tambah-data-alumni.php';
}
elseif (@$_GET['view'] == 'pekerjaan')
{
    include 'views/pekerjaan/data-pekerjaan.php';
}
elseif (@$_GET['view'] == 'tambah-data-pekerjaan')
{
    include 'views/pekerjaan/tambah-data-pekerjaan.php';
}
elseif (@$_GET['view'] == 'perusahaan')
{
    include 'views/perusahaan/data-perusahaan.php';
}
elseif (@$_GET['view'] == 'tambah-data-perusahaan')
{
    include 'views/perusahaan/tambah-data-perusahaan.php';
}
elseif (@$_GET['view'] == 'berita')
{
    include 'views/berita/data-berita.php';
}
elseif (@$_GET['view'] == 'tambah-data-berita')
{
    include 'views/berita/tambah-data-berita.php';
}
