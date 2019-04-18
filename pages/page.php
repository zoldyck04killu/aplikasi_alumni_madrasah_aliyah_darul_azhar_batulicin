<?php

if (@$_GET['view'] == '' || @$_GET['view'] == 'home')
{
    include 'views/home.php';
}


// AUTH REGISTER
elseif (@$_GET['view'] == 'login')
{
    include 'views/login/login.php';
}
elseif (@$_GET['view'] == 'logout')
{
    $objAdmin->logout();
    echo '<script>
    window.location="?view=login";
     </script>';
}
elseif (@$_GET['view'] == 'register')
{
    include 'views/login/register.php';
}
// end AUTH REGISTER

// ALUMNI
elseif (@$_GET['view'] == 'alumni')
{
    include 'views/alumni/data-alumni.php';
}
elseif (@$_GET['view'] == 'tambah-data-alumni')
{
    include 'views/alumni/tambah-data-alumni.php';
}
elseif (@$_GET['view'] == 'edit-alumni')
{
    include 'views/alumni/edit-data-alumni.php';
}
elseif (@$_GET['view'] == 'hapus-alumni')
{
    $nis = $_GET['nis'];
    $objAdmin->hapusAlumni($nis);
}
// end ALUMNI


// PEKERJAAN
elseif (@$_GET['view'] == 'pekerjaan')
{
    include 'views/pekerjaan/data-pekerjaan.php';
}
elseif (@$_GET['view'] == 'tambah-data-pekerjaan')
{
    include 'views/pekerjaan/tambah-data-pekerjaan.php';
}
elseif (@$_GET['view'] == 'edit-pekerjaan')
{
    include 'views/pekerjaan/edit-data-pekerjaan.php';
}
elseif (@$_GET['view'] == 'hapus-pekerjaan')
{
    $id_pekerjaan = $_GET['id_pekerjaan'];
    $objAdmin->hapusPekerjaan($id_pekerjaan);
}
//end PEKERJAAN

// PERUSAHAAN
elseif (@$_GET['view'] == 'perusahaan')
{
    include 'views/perusahaan/data-perusahaan.php';
}
elseif (@$_GET['view'] == 'tambah-data-perusahaan')
{
    include 'views/perusahaan/tambah-data-perusahaan.php';
}
elseif (@$_GET['view'] == 'edit-perusahaan')
{
    include 'views/perusahaan/edit-data-perusahaan.php';
}
elseif ($_GET['view'] == 'hapus-perusahaan')
{
    $id_perushaan = $_GET['id_perushaan'];
    $objAdmin->hapusPerusahaan($id_perushaan);
}
// end PERUSAHAAN

// BERITA
elseif (@$_GET['view'] == 'berita')
{
    include 'views/berita/data-berita.php';
}
elseif (@$_GET['view'] == 'tambah-data-berita')
{
    include 'views/berita/tambah-data-berita.php';
}
// end BERITA
