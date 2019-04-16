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

  function savePekerjaan($id_pekerjaan,$nis,$nama_pekerjaan,$jabatan )
  {
    $db = $this->mysqli->conn;
    $savePekerjaan = $db->query("INSERT INTO data_pekerjaan
                              (id_pekerjaan,nis,nama_pekerjaan,jabatan )
                              VALUES
                              ('$id_pekerjaan','$nis','$nama_pekerjaan','$jabatan')
                              ") or die ($db->error);
    if ($savePekerjaan)
    {
      return true;
    }else{
      return false;
    }
  }

  public function showPekerjaan(){
    $db = $this->mysqli->conn;
    $sql = "SELECT * FROM data_pekerjaan";
    $query = $db->query($sql);
    return $query;
  }

  function savePerusahaan($id_perusahaan,$nis,$nama_perusahaan,$alamat_perusahaan  )
  {
    $db = $this->mysqli->conn;
    $savePekerjaan = $db->query("INSERT INTO data_perusahaan
                              (id_perusahaan,nis,nama_perusahaan,alamat_perusahaan )
                              VALUES
                              ('$id_perusahaan','$nis','$nama_perusahaan','$alamat_perusahaan' )
                              ") or die ($db->error);
    if ($savePekerjaan)
    {
      return true;
    }else{
      return false;
    }
  }

  public function showPerusahaan(){
    $db = $this->mysqli->conn;
    $sql = "SELECT * FROM data_perusahaan";
    $query = $db->query($sql);
    return $query;
  }

  function saveBerita($id_berita,$tgl_berita,$id_kategori,$nama_kategori,$keterangan,$judul,$isi_berita,$hari,$gambar,$tempat_pelaksanaan )
  {
    $db = $this->mysqli->conn;
    $saveBerita = $db->query("INSERT INTO data_berita
                              (id_berita,tgl_berita,id_kategori,nama_kategori,keterangan,judul,isi_berita,hari,gambar,tempat_pelaksanaan )
                              VALUES
                              ('$id_berita','$tgl_berita','$id_kategori','$nama_kategori','$keterangan','$judul','$isi_berita','$hari','$gambar','$tempat_pelaksanaan' )
                              ") or die ($db->error);
    if ($saveBerita)
    {
      return true;
    }else{
      return false;
    }
  }

  public function showBerita(){
    $db = $this->mysqli->conn;
    $sql = "SELECT * FROM data_berita";
    $query = $db->query($sql);
    return $query;
  }

} // end class

?>
