<?php

  require_once '../config/config.php';
  require_once '../config/connection.php';
  $obj = new Connection($host, $user, $pass, $db);
  include('../models/admin.php');
  $objAdmin = new Admin($obj);

  if (@$_REQUEST['type'] == 'get_nama_by_nis') {
    
     $nis = @$_POST['nis'];

     $data = $objAdmin->get_nama_by_nis($nis);

     $res = array();

     while ($a = $data->fetch_object()) {
       
       $res[] = $a->nama_lengkap;

     }

     echo json_encode($res);

  }

?>
