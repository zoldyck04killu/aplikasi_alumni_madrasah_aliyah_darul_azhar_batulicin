<?php

/**
 *
 */
class Admin
{

  private $mysqli;

  function __construct($mysqli)
  {
    $this->mysqli = $mysqli;
  }

  function register($username, $password_hash)
  {
    $db = $this->mysqli->conn;
    $db->query("INSERT INTO admin (admin, passadmin) VALUES ('$username','$password_hash')") or die ($db->error);
  }

  public function login($username, $password){
  $db = $this->mysqli->conn;
  $userdata = $db->query("SELECT * FROM admin WHERE admin = '$username' ") or die ($db->error);
  $cek = $userdata->num_rows;
  $cek_2 = $userdata->fetch_array();
          if (password_verify($password, $cek_2['passadmin'])) {
              $_SESSION['user'] = $cek_2['admin']; //session KTP
              return true;
          } else {
              return false; // password salah
          }
  }

  public function logout(){
    @$_SESSION['user'] == FALSE;
    unset($_SESSION);
    session_destroy();
  }

  function saveAlumni($nis, $nama, $tempat_lahir, $tgl_lahir, $jekel, $agama,$jurusan,$alamat_rumah,$alamat_sekarang,$hp,$email,$angakatan,$lulusan,$nama_ayah,$nama_ibu,$alamat_ortu,$hp_ortu )
  {
    $db = $this->mysqli->conn;
    $saveAlumni = $db->query("INSERT INTO data_alumni
                              (Nis, nama_lengkap,tempat_lahir, tgl_lahir, jenis_kelamin, agama, jurusan, alamat_rumah,alamat_sekarang,no_hp_alumni,email,angkatan_alumni,lulusan_alumni,nama_ayah,nama_ibu,alamat_ortu,no_hp_ortu )
                              VALUES
                              ('$nis', '$nama', '$tempat_lahir', '$tgl_lahir', '$jekel', '$agama','$jurusan','$alamat_rumah','$alamat_sekarang','$hp','$email','$angakatan','$lulusan','$nama_ayah','$nama_ibu','$alamat_ortu','$hp_ortu' )
                              ") or die ($db->error);
    if ($saveAlumni)
    {
      return true;
    }else{
      return false;
    }
  }

  public function showAlumni(){
    $db = $this->mysqli->conn;
    $sql = "SELECT * FROM data_alumni";
    $query = $db->query($sql);
    return $query;
  }

} // end class

?>
