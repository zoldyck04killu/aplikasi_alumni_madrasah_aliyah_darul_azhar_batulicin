<?php 

$nis  = @$_GET['nis'];
$data =$objAdmin->editAlumni($nis)->fetch_object();


 ?>

<!-- Material form contact -->
<div class="card" style="margin:20px 20px">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Edit Data Alumni</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post" action="" class="text-center" style="color: #757575;" enctype="multipart/form-data">

           <div class="md-form mt-3 text-left">
                <label for="materialContactFormName">Foto</label>
                <img src="./assets/images/<?=$data->foto ?>"  width="100px">
                <input type="file" name="foto">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">NIS</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nis" value="<?=$data->Nis ?>" readonly>
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Nama Lengkap</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nama" value="<?=$data->nama_lengkap ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Tempat Lahir</label>
                <input type="text" id="materialContactFormName" class="form-control" name="tempat_lahir" value="<?=$data->tempat_lahir ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Tanggal Lahir</label>
                <input type="date" id="materialContactFormName" class="form-control" name="tgl_lahir" value="<?=$data->tgl_lahir ?>">
            </div>

            <span>Jenis Kelamin</span>
            <select class="form-control" name="jekel">
                <option value="<?=$data->jenis_kelamin ?>"><?=$data->jenis_kelamin ?></option>
            </select>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Agama</label>
                <input type="text" id="materialContactFormName" class="form-control" name="agama" value="<?=$data->agama ?>">
            </div>

            <span>Jurusan</span>
            <select class="form-control" name="jurusan">
                <option value="<?=$data->jurusan ?>"><?=$data->jurusan ?></option>
            </select>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Alamat Rumah</label>
                <input type="text" id="materialContactFormName" class="form-control" name="alamat_rumah" value="<?=$data->alamat_rumah ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Alamat Sekarang</label>
                <input type="text" id="materialContactFormName" class="form-control" name="alamat_sekarang" value="<?=$data->alamat_sekarang ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">No HP Alumni</label>
                <input type="text" id="materialContactFormName" class="form-control" name="hp" value="<?=$data->no_hp_alumni ?>">
            </div>

            <!-- E-mail -->
            <div class="md-form">
              <label for="materialContactFormEmail">E-mail</label>
                <input type="email" id="materialContactFormEmail" class="form-control" name="email" value="<?=$data->email ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Angkatan Alumni</label>
                <input type="text" id="materialContactFormName" class="form-control" name="angakatan" value="<?=$data->angkatan_alumni ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Lulusan Alumni</label>
                <input type="text" id="materialContactFormName" class="form-control" name="lulusan" value="<?=$data->lulusan_alumni ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Nama Ayah</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nama_ayah" value="<?=$data->nama_ayah ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Nama Ibu</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nama_ibu" value="<?=$data->nama_ibu ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Alamat Orang Tua</label>
                <input type="text" id="materialContactFormName" class="form-control" name="alamat_ortu" value="<?=$data->alamat_ortu ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">No Hp Orang Tua</label>
                <input type="text" id="materialContactFormName" class="form-control" name="hp_ortu" value="<?=$data->no_hp_ortu ?>">
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="updateAlumni">Update</button>

        </form>
        <!-- Form -->

    </div>

</div>

<?php
if (isset($_POST['updateAlumni']))
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
  if (move_uploaded_file($tmp_name, "./assets/images/".$foto = $format. rand(10, 100).".".$ext)) {
        unlink("./assets/images/".$data->foto);
  }


  $updateAlumni = $objAdmin->updateAlumni($nis, $nama, $tempat_lahir, $tgl_lahir, $jekel, $agama,$jurusan,$alamat_rumah,$alamat_sekarang,$hp,$email,$angakatan,$lulusan,$nama_ayah,$nama_ibu,$alamat_ortu,$hp_ortu,$foto );
  if ($updateAlumni) {
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
