<?php
$id = @$_GET['nip'];
$data = $objAdmin->editBerita($id)->fetch_object();
 ?>


 <!-- Material form contact -->
<div class="card" style="margin:20px 20px">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Edit Data Berita</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post" action="" class="text-center" enctype="multipart/form-data" style="color: #2db1be;">

          <div class="md-form mt-3">
              <label for="materialContactFormName">Id Berita</label>
              <input type="text" id="materialContactFormName" class="form-control" name="id_berita" value="<?=$data->id_berita ?>" readonly>
          </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Tanggal Berita</label>
                <input type="date" id="materialContactFormName" class="form-control" name="tgl_berita" value="<?=$data->tgl_berita ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Id Kategori</label>
                <input type="text" id="materialContactFormName" class="form-control" name="id_kategori" value="<?=$data->id_kategori ?>" readonly>
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Nama Kategori</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nama_kategori" value="<?=$data->nama_kategori ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Keterangan</label>
                <input type="text" id="materialContactFormName" class="form-control" name="keterangan" value="<?=$data->keterangan ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Judul</label>
                <input type="text" id="materialContactFormName" class="form-control" name="judul" value="<?=$data->judul ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Isi Berita</label>
                <textarea name="isi_berita" rows="8" cols="80"  id="materialContactFormName" class="form-control"><?=$data->isi_berita ?></textarea>
            </div>

            <div class="md-form mt-3 text-left">
                <label for="materialContactFormName">Gambar</label>
                <input type="file" id="materialContactFormName" class="" name="gambar">
                <img src="./assets/images/<?=$data->gambar ?>" width="100px">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Hari</label>
                <input type="text" id="materialContactFormName" class="form-control" name="hari" value="<?=$data->hari ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Tempat Pelaksanaan</label>
                <input type="text" id="materialContactFormName" class="form-control" name="tempat_pelaksanaan" value="<?=$data->tempat_pelaksanaan ?>">
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="updateBerita">Update</button>

        </form>
        <!-- Form -->

    </div>

</div>
<?php
if (isset($_POST['updateBerita']))
{
  $id_berita = $obj->conn->real_escape_string($_POST['id_berita']);
  $tgl_berita = $obj->conn->real_escape_string($_POST['tgl_berita']);
  $id_kategori = $obj->conn->real_escape_string($_POST['id_kategori']);
  $nama_kategori = $obj->conn->real_escape_string($_POST['nama_kategori']);
  $keterangan = $obj->conn->real_escape_string($_POST['keterangan']);
  $judul = $obj->conn->real_escape_string($_POST['judul']);
  $isi_berita = $obj->conn->real_escape_string($_POST['isi_berita']);
  $hari = $obj->conn->real_escape_string($_POST['hari']);
  $tempat_pelaksanaan = $obj->conn->real_escape_string($_POST['tempat_pelaksanaan']);

if ($_FILES['gambar']['name'] != '') {

  $name_array = $_FILES['gambar']['name'];
  $tmp_name   = $_FILES['gambar']['tmp_name'];
  $format     = "Img-".round(microtime(true)) . "";
  $ext        = pathinfo($name_array, PATHINFO_EXTENSION);
	  if (file_exists('./assets/images/'.$data->gambar)) {
	        unlink("./assets/images/".$data->gambar);
	        move_uploaded_file($tmp_name, "./assets/images/".$gambar = $format. rand(10, 100).".".$ext);
	         $updateBerita = $objAdmin->updateBerita($id_berita,$tgl_berita,$id_kategori,$nama_kategori,$keterangan,$judul,$isi_berita,$hari,$gambar,$tempat_pelaksanaan );

	  }else{
	  	 move_uploaded_file($tmp_name, "./assets/images/".$gambar = $format. rand(10, 100).".".$ext);
	         $updateBerita = $objAdmin->updateBerita($id_berita,$tgl_berita,$id_kategori,$nama_kategori,$keterangan,$judul,$isi_berita,$hari,$gambar,$tempat_pelaksanaan );

	  }

}

  $updateBerita = $objAdmin->updateBeritaNoIMG($id_berita,$tgl_berita,$id_kategori,$nama_kategori,$keterangan,$judul,$isi_berita,$hari,$tempat_pelaksanaan );

	  if ($updateBerita) {
	      echo "<script>
	      swal(
	        'Edit Berita Success!',
	        'You clicked the button!',
	        'success'
	      )
	      </script>";
	  }else{
	    echo "<script>
	    swal({
	          title: 'Error Edit Berita!',
	          text: 'Do you want to continue',
	          type: 'error'
	        })
	    </script>";
	  }

}
