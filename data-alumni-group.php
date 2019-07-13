
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

  <title>Data Alumni</title>

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
    <div class="container-fluid">

       <?php $thn = @$_GET['c']; ?>


<div class="header-hal">
    <center><h1>DATA ALUMNI <?=$thn; ?></h1></center>
    <hr>
</div>
<div class="daftar-table table-responsive">
    <table class="table table-striped text-center" id="table">
      <thead>
      <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama <br> Lengkap</th>
        <th>Tempat <br> Lahir</th>
        <th>Tanggal <br> Lahir</th>
        <th>Jenis <br> Kelamin</th>
        <th>Agama</th>
        <th>Jurusan</th>
        <th>Alamat <br> Rumah</th>
        <th>Alamat <br> Sekarang</th>
        <th>No Hp</th>
        <th>Pekerjaan</th>
        <th>Email</th>
        <th>Angkatan</th>
        <th>Lulusan</th>
        <th>Nama <br> Ayah</th>
        <th>Nama <br> Ibu</th>
        <th>Alamat <br> Ortu</th>
        <th>Hp Ortu</th>
        <th>Foto</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $data = $objAdmin->showAlumni_($thn);
    $no = 1;
    while ($a = $data->fetch_object()) {
    ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $a->Nis; ?></td>
      <td><?= $a->nama_lengkap; ?></td>
      <td><?= $a->tempat_lahir; ?></td>
      <td><?= $a->tgl_lahir; ?></td>
      <td><?= $a->jenis_kelamin; ?></td>
      <td><?= $a->agama; ?></td>
      <td><?= $a->jurusan; ?></td>
      <td><?= $a->alamat_rumah; ?></td>
      <td><?= $a->alamat_sekarang; ?></td>
      <td><?= $a->no_hp_alumni; ?></td>
      <td><?= $a->pekerjaan; ?></td>
      <td><?= $a->email; ?></td>
      <td><?= $a->angkatan_alumni; ?></td>
      <td><?= $a->lulusan_alumni; ?></td>
      <td><?= $a->nama_ayah; ?></td>
      <td><?= $a->nama_ibu; ?></td>
      <td><?= $a->alamat_ortu; ?></td>
      <td><?= $a->no_hp_ortu; ?></td>
      <td>
        <img src="<?=base_url()?>assets/images/<?=$a->foto ?>"  width="70px">
      </td>
    </tr>
      <?php
      $no++;
      }
      ?>
    </tbody>
    </table>
  </div>
</div>
</div>  
</body>
  <!-- /#wrapper -->

  <!-- Menu Toggle Script -->
  <script>
      $(document).ready( function () {
        $('#table').DataTable();
      } );
  </script>

</body>

</html>




