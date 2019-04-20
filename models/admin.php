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

  public function login($username, $password){
  $db = $this->mysqli->conn;
  $userdata = $db->query("SELECT * FROM login_alumni WHERE username = '$username' ") or die ($db->error);
  $cek = $userdata->num_rows;
  $cek_2 = $userdata->fetch_array();
          if (password_verify($password, $cek_2['password'])) {
              $_SESSION['user'] = $cek_2['username']; //session
              $_SESSION['hak_akses'] = $cek_2['hak_akses']; //session
              return true;
          } else {
              return false; // password salah
          }
  }

  public function logout(){
    @$_SESSION['user'] == FALSE;
    @$_SESSION['hak_akses'] == FALSE;
    unset($_SESSION);
    session_destroy();
  }

  function register($username, $password_hash, $hak_akses)
  {
    $db = $this->mysqli->conn;
    $register = $db->query("INSERT INTO login_alumni (username, password,hak_akses) VALUES ('$username', '$password_hash', '$hak_akses')") or die ($db->error);
    if ($register) {
        return true;
    } else {
        return false; // password salah
    }
  }

// ALUMNI
  function saveAlumni($nis, $nama, $tempat_lahir, $tgl_lahir, $jekel, $agama,$jurusan,$alamat_rumah,$alamat_sekarang,$hp,$email,$angakatan,$lulusan,$nama_ayah,$nama_ibu,$alamat_ortu,$hp_ortu,$foto )
  {
    $db = $this->mysqli->conn;
    $saveAlumni = $db->query("INSERT INTO data_alumni
                              (Nis, nama_lengkap,tempat_lahir, tgl_lahir, jenis_kelamin, agama, jurusan, alamat_rumah,alamat_sekarang,no_hp_alumni,email,angkatan_alumni,lulusan_alumni,nama_ayah,nama_ibu,alamat_ortu,no_hp_ortu,foto )
                              VALUES
                              ('$nis', '$nama', '$tempat_lahir', '$tgl_lahir', '$jekel', '$agama','$jurusan','$alamat_rumah','$alamat_sekarang','$hp','$email','$angakatan','$lulusan','$nama_ayah','$nama_ibu','$alamat_ortu','$hp_ortu','$foto' )
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

  public function editAlumni($nis)
  {
    $db = $this->mysqli->conn;
    $sql = "SELECT * FROM data_alumni WHERE nis = '$nis' ";
    $query = $db->query($sql);
    return $query;
  }

  public function updateAlumni($nis, $nama, $tempat_lahir, $tgl_lahir, $jekel, $agama,$jurusan,$alamat_rumah,$alamat_sekarang,$hp,$email,$angakatan,$lulusan,$nama_ayah,$nama_ibu,$alamat_ortu,$hp_ortu,$foto)
  {
    $db = $this->mysqli->conn;
    $sql = "UPDATE data_alumni SET nama_lengkap = '$nama', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jekel', agama = '$agama', jurusan = '$jurusan', alamat_rumah = '$alamat_rumah', alamat_sekarang = '$alamat_sekarang', no_hp_alumni = '$hp', email = '$email', angkatan_alumni = '$angakatan', lulusan_alumni = '$lulusan', nama_ayah = '$nama_ayah', nama_ibu = '$nama_ibu', alamat_ortu = '$alamat_ortu', no_hp_ortu = '$hp_ortu', foto = '$foto'  WHERE Nis = '$nis'   ";
    $query = $db->query($sql);
    return true;
  }

  public function hapusAlumni($nis)
  {
    $db = $this->mysqli->conn;
    $sql = "DELETE FROM data_alumni WHERE Nis = '$nis' ";
    $query = $db->query($sql);
    return true;
  }

// END ALUMNI


// PEKERJAAN

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

   public function edit_pekerjaan($id_pekerjaan)
  {
    $db = $this->mysqli->conn;
    $sql = "SELECT * FROM data_pekerjaan WHERE id_pekerjaan = '$id_pekerjaan' ";
    $query = $db->query($sql);
    return $query;
  }


  public function updatePekerjaan($id_pekerjaan,$nis,$nama_pekerjaan,$jabatan)
  {
    $db = $this->mysqli->conn;
    $sql = "UPDATE data_pekerjaan SET nis = '$nis', nama_pekerjaan = '$nama_pekerjaan', jabatan = '$jabatan' WHERE id_pekerjaan = '$id_pekerjaan' ";
    $query = $db->query($sql);
    return true;
  }

  public function hapusPekerjaan($id_pekerjaan)
  {
    $db = $this->mysqli->conn;
    $sql = "DELETE FROM data_pekerjaan WHERE id_pekerjaan = '$id_pekerjaan' ";
    $query = $db->query($sql);
    return true;
  }

// END PEKERJAAN


// PERUSAHAAN
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

  public function edit_perusahaan($id_perusahaan)
  {
    $db = $this->mysqli->conn;
    $sql = "SELECT * FROM data_perusahaan WHERE id_perusahaan = '$id_perusahaan' ";
    $query = $db->query($sql);
    return $query;
  }

  public function updatePerusahaan($id_perusahaan,$nis,$nama_perusahaan,$alamat_perusahaan)
  {
    $db = $this->mysqli->conn;
    $sql = "UPDATE data_perusahaan SET nis = '$nis', nama_perusahaan = '$nama_perusahaan', alamat_perusahaan = '$alamat_perusahaan' ";
    $query = $db->query($sql);
    return true;
  }

  public function hapusPerusahaan($id_perusahaan)
  {
    $db = $this->mysqli->conn;
    $sql = "DELETE FROM data_perusahaan WHERE id_perusahaan = '$id_perusahaan' ";
    $query = $db->query($sql);
    return true;
  }

// END PERUSHAAN


// BERITA
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

  public function showBerita_perId($id){
    $db = $this->mysqli->conn;
    $sql = "SELECT * FROM data_berita WHERE id_berita = '$id'";
    $query = $db->query($sql);
    return $query;
  }
// END BERITA

function saveKomentar($id_berita,$nama_alumni,$komentar )
{
  $db = $this->mysqli->conn;
  $saveKomentar = $db->query("INSERT INTO komentar
                            (nama_alumni,id_berita,komentar )
                            VALUES
                            ('$nama_alumni','$id_berita','$komentar')
                            ") or die ($db->error);
  if ($saveKomentar)
  {
    return true;
  }else{
    return false;
  }
}


} // end class

?>
