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
      <a href="?view=home"> <div class="sidebar-heading">Home</div> </a>
      <div class="list-group list-group-flush">
        <!--  <a href="?view=logout" class="list-group-item list-group-item-action bg-light">Lihat Data Alumni</a> -->
        <?php if (@$_SESSION['hak_akses']): ?>
          <a href="?view=logout" class="list-group-item list-group-item-action bg-light">Logout</a>
          <!-- <a href="?view=register" class="list-group-item list-group-item-action bg-light">Daftar Akun Alumni</a> -->
            <?php if (@$_SESSION['hak_akses'] == 1): ?>
                <a href="?view=data_saya&nis=<?=$_SESSION['nis']; ?>" class="list-group-item list-group-item-action bg-light">Data Saya</a>
                <a href="?view=edit_password" class="list-group-item list-group-item-action bg-light">Edit Password</a>
            <?php endif; ?>
            <a href="?view=alumni" class="list-group-item list-group-item-action bg-light">Alumni</a>
            <a href="?view=pekerjaan" class="list-group-item list-group-item-action bg-light">Pekerjaan</a>
            <a href="?view=perusahaan" class="list-group-item list-group-item-action bg-light">Perusahaan</a>
              <?php if (@$_SESSION['hak_akses'] == 2): ?>
                <a href="?view=data-berita" class="list-group-item list-group-item-action bg-light">Data Berita</a>
            <?php endif; ?>
          <?php else: ?>
            <a href="?view=login" class="list-group-item list-group-item-action bg-light">Login</a>
            <a href="?view=login-admin" class="list-group-item list-group-item-action bg-light">Login Admin</a>
            <a href="?view=data-berita-user" class="list-group-item list-group-item-action bg-light">Berita</a>
          <?php endif; ?>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <!-- <img id="s" src="assets/image/darul azhar.jpg" width="100%" alt="" style="position: relative; top: -10px; height: 30%;">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

        <button class="btn btn-info btn-lg" id="menu-toggle">
          <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav ml-auto mt-2 mt-lg-1">
          <img src="assets/image/darul azhar.jpg" alt="" height="100">
          <h5 class="text-center"> Aplikasi Alumni Madrasah Aliyah Darul Azhar Batulicin </h5>
        </ul>

      </nav> -->

      <div class="container-fluid">

       <?php include('pages/page.php'); ?>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Menu Toggle Script -->
  <script>

    function get_alumni(val)
    {
      var base_url = '<?=base_url(); ?>';
      if (val != 0) {
        window.open(base_url + 'data-alumni-group.php/?c=' +  val + '',
          '_blank',
          'toolbar=no',);
        $('#pilihAlumni').val(0);
      }
    }

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
