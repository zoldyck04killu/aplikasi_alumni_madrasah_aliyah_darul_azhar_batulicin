<?php

// require system
require_once 'config/config.php';
require_once 'config/connection.php';
// end require system

// require models


// end require models

//  new instance object
$obj = new Connection($host, $user, $pass, $db);
// end  new instance object

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Informasi alumni</title>

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>assets/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Logo Disini</div>
      <div class="list-group list-group-flush">
        <a href="?view=login" class="list-group-item list-group-item-action bg-light">Login</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Alumni</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Pekerjaan</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Perusahaan</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Berita</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Logout</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

        <button class="btn btn-info" id="menu-toggle">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <ul class="navbar-nav ml-auto mt-2 mt-lg-1">
                <h5 class="text-center"> Aplikasi Alumni Madrasah Aliyah Darul Azhar Batulicin </h5> 
        </ul>

      </nav>

      <div class="container-fluid">

       <?php include('pages/page.php'); ?>
       
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?=base_url()?>assets/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
