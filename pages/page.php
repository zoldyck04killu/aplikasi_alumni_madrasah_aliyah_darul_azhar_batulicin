<?php

if (@$_GET['view'] == '' || @$_GET['view'] == 'home') 
{
    include 'views/home.php';    
}

elseif (@$_GET['view'] == 'login') 
{
    include 'views/login/login.php';    
}