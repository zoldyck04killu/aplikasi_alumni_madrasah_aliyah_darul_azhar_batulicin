<?php

// require system
require_once 'config/config.php';
require_once 'config/connection.php';
// end require system

//  new instance object
$obj = new Connection($host, $user, $pass, $db);

// require models
include('models/admin.php');
$objAdmin = new Admin($obj);


// end require models

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

  <!-- Bootstrap core JavaScript -->
  <script src="<?=base_url()?>assets/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/datatables.min.css"/>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/datatables.min.js"></script>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <a href="?view=home"> <div class="sidebar-heading">Menu</div> </a>
      <div class="list-group list-group-flush">
        <?php if (@$_SESSION['hak_akses']): ?>
          <a href="?view=logout" class="list-group-item list-group-item-action bg-light">Logout</a>
          <a href="?view=register" class="list-group-item list-group-item-action bg-light">Daftar Akun Alumni</a>
          <a href="?view=alumni" class="list-group-item list-group-item-action bg-light">Alumni</a>
          <a href="?view=pekerjaan" class="list-group-item list-group-item-action bg-light">Pekerjaan</a>
          <a href="?view=perusahaan" class="list-group-item list-group-item-action bg-light">Perusahaan</a>
          <a href="?view=berita" class="list-group-item list-group-item-action bg-light">Data Berita</a>
          <?php else: ?>
            <a href="?view=login" class="list-group-item list-group-item-action bg-light">Login</a>
            <a href="?view=berita" class="list-group-item list-group-item-action bg-light">Berita</a>
        <?php endif; ?>
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

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

      $(document).ready( function () {
        $('#table').DataTable();
      } );
  </script>

</body>

</html>
