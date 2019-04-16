<!-- Material form contact -->
<div class="card" style="margin:20px 20px">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Tambah Data Berita</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post" action="" class="text-center" style="color: #2db1be;">

          <div class="md-form mt-3">
              <label for="materialContactFormName">Id Berita</label>
              <input type="text" id="materialContactFormName" class="form-control" name="id_berita">
          </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Tanggal Berita</label>
                <input type="date" id="materialContactFormName" class="form-control" name="tgl_berita">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Id Kategori</label>
                <input type="text" id="materialContactFormName" class="form-control" name="id_kategori">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Nama Kategori</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nama_kategori">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Keterangan</label>
                <input type="text" id="materialContactFormName" class="form-control" name="keterangan">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Judul</label>
                <input type="text" id="materialContactFormName" class="form-control" name="judul">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Isi Berita</label>
                <textarea name="isi_berita" rows="8" cols="80"  id="materialContactFormName" class="form-control" ></textarea>
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Gambar</label>
                <input type="text" id="materialContactFormName" class="form-control" name="gambar" >
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Hari</label>
                <input type="text" id="materialContactFormName" class="form-control" name="hari">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Tempat Pelaksanaan</label>
                <input type="text" id="materialContactFormName" class="form-control" name="tempat_pelaksanaan">
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="saveBerita">Send</button>

        </form>
        <!-- Form -->

    </div>

</div>
<?php
if (isset($_POST['saveBerita']))
{
  $id_berita = $obj->conn->real_escape_string($_POST['id_berita']);
  $tgl_berita = $obj->conn->real_escape_string($_POST['tgl_berita']);
  $id_kategori = $obj->conn->real_escape_string($_POST['id_kategori']);
  $nama_kategori = $obj->conn->real_escape_string($_POST['nama_kategori']);
  $keterangan = $obj->conn->real_escape_string($_POST['keterangan']);
  $judul = $obj->conn->real_escape_string($_POST['judul']);
  $isi_berita = $obj->conn->real_escape_string($_POST['isi_berita']);
  $gambar = $obj->conn->real_escape_string($_POST['gambar']);
  $hari = $obj->conn->real_escape_string($_POST['hari']);
  $tempat_pelaksanaan = $obj->conn->real_escape_string($_POST['tempat_pelaksanaan']);


  $saveBerita = $objAdmin->saveBerita($id_berita,$tgl_berita,$id_kategori,$nama_kategori,$keterangan,$judul,$isi_berita,$hari,$gambar,$tempat_pelaksanaan );
  if ($saveBerita) {
      echo "<script>
      swal(
        'Save Berita Success!',
        'You clicked the button!',
        'success'
      )
      </script>";
  }else{
    echo "<script>
    swal({
          title: 'Error Save Berita!',
          text: 'Do you want to continue',
          type: 'error'
        })
    </script>";
  }

}
