<!-- Material form contact -->
<div class="card" style="margin:20px 20px">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Tambah Data Alumni</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post" action="" class="text-center" style="color: #757575;" enctype="multipart/form-data">

            <div class="md-form mt-3">
                <label for="materialContactFormName">Foto Alumni</label>
                <input type="file" id="materialContactFormName" class="form-control" name="foto">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">NIS</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nis">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Nama Lengkap</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nama">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Tempat Lahir</label>
                <input type="text" id="materialContactFormName" class="form-control" name="tempat_lahir">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Tanggal Lahir</label>
                <input type="date" id="materialContactFormName" class="form-control" name="tgl_lahir">
            </div>

            <span>Jenis Kelamin</span>
            <select class="form-control" name="jekel">
                <option value="" disabled>Choose option</option>
                <option value="Laki-Laki" selected>Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Agama</label>
                <input type="text" id="materialContactFormName" class="form-control" name="agama">
            </div>

            <span>Jurusan</span>
            <select class="form-control" name="jurusan">
                <option value="" disabled>Choose option</option>
                <option value="IPA" selected>IPA</option>
                <option value="IPS">IPS</option>
            </select>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Alamat Rumah</label>
                <input type="text" id="materialContactFormName" class="form-control" name="alamat_rumah">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Alamat Sekarang</label>
                <input type="text" id="materialContactFormName" class="form-control" name="alamat_sekarang">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">No HP Alumni</label>
                <input type="text" id="materialContactFormName" class="form-control" name="hp">
            </div>

            <!-- E-mail -->
            <div class="md-form">
              <label for="materialContactFormEmail">E-mail</label>
                <input type="email" id="materialContactFormEmail" class="form-control" name="email">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Angkatan Alumni</label>
                <input type="text" id="materialContactFormName" class="form-control" name="angakatan">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Lulusan Alumni</label>
                <input type="text" id="materialContactFormName" class="form-control" name="lulusan">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Nama Ayah</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nama_ayah">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Nama Ibu</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nama_ibu">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Alamat Orang Tua</label>
                <input type="text" id="materialContactFormName" class="form-control" name="alamat_ortu">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">No Hp Orang Tua</label>
                <input type="text" id="materialContactFormName" class="form-control" name="hp_ortu">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Password</label>
                <input type="password" id="materialContactFormName" class="form-control" name="password">
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="saveAlumni">Send</button>

        </form>
        <!-- Form -->

    </div>

</div>

<?php
if (isset($_POST['saveAlumni']))
{
  $nis = $obj->conn->real_escape_string($_POST['nis']);
  $nama = $obj->conn->real_escape_string($_POST['nama']);
  $tempat_lahir = $obj->conn->real_escape_string($_POST['tempat_lahir']);
  $tgl_lahir = $obj->conn->real_escape_string($_POST['tgl_lahir']);
  $jekel = $obj->conn->real_escape_string($_POST['jekel']);
  $agama = $obj->conn->real_escape_string($_POST['agama']);
  $jurusan = $obj->conn->real_escape_string($_POST['jurusan']);
  $alamat_rumah = $obj->conn->real_escape_string($_POST['alamat_rumah']);
  $alamat_sekarang = $obj->conn->real_escape_string($_POST['alamat_sekarang']);
  $hp = $obj->conn->real_escape_string($_POST['hp']);
  $email = $obj->conn->real_escape_string($_POST['email']);
  $angakatan = $obj->conn->real_escape_string($_POST['angakatan']);
  $lulusan = $obj->conn->real_escape_string($_POST['lulusan']);
  $nama_ayah = $obj->conn->real_escape_string($_POST['nama_ayah']);
  $nama_ibu = $obj->conn->real_escape_string($_POST['nama_ibu']);
  $alamat_ortu = $obj->conn->real_escape_string($_POST['alamat_ortu']);
  $hp_ortu = $obj->conn->real_escape_string($_POST['hp_ortu']);

  $name_array = $_FILES['foto']['name'];
  $tmp_name   = $_FILES['foto']['tmp_name'];
  $format     = "Img-".round(microtime(true)) . "";
  $ext        = pathinfo($name_array, PATHINFO_EXTENSION);
  move_uploaded_file($tmp_name, "./assets/images/".$foto = $format. rand(10, 100).".".$ext);


  $saveAlumni = $objAdmin->saveAlumni($nis, $nama, $tempat_lahir, $tgl_lahir, $jekel, $agama,$jurusan,$alamat_rumah,$alamat_sekarang,$hp,$email,$angakatan,$lulusan,$nama_ayah,$nama_ibu,$alamat_ortu,$hp_ortu,$foto );
  $password = $obj->conn->real_escape_string($_POST['password']);
  $password_hash = password_hash($password, PASSWORD_DEFAULT);
  $hak_akses = 1;

  // login
  $register = $objAdmin->register($nis, $password_hash, $hak_akses,$nis);

  if ($saveAlumni) {
      echo "<script>
      swal(
        'Save Alumni Success!',
        'You clicked the button!',
        'success'
      )
      </script>";
  }else{
    echo "<script>
    swal({
          title: 'Error Save Alumni!',
          text: 'Do you want to continue',
          type: 'error'
        })
    </script>";
  }

}
