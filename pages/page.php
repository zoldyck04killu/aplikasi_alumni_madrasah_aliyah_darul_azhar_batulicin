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
