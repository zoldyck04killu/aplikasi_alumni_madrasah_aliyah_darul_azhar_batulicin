<?php
$data = $objAdmin->showBerita_perId($_GET['nip']);
$a = $data->fetch_object();
?>
<div class="header-hal">
    <center><h1>BERITA</h1></center>
    <hr>
</div>
<div class="row no-gutters">

  <div class="col-12 col-sm-6 col-md-10">

    <div class="row">
      <div class="col">
        ID BERITA  <br>
        <?= $a->id_berita ?>
      </div>
      <div class="col">
        HARI <br>
        <?= $a->hari ?>
      </div>
      <div class="col">
        Tanggal Berita <br>
        <?= $a->tgl_berita ?>
      </div>
    </div>

    <div class="row  mt-5">
      <div class="col">
        Judul :
        <b>
          <?= $a->judul ?>
        </b>
      </div>
    </div>
    <div class="row">
      <div class="col">
        Tempat :   <?= $a->tempat_pelaksanaan ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        Gambar Berita :   <?= $a->gambar ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        Isi Berita
        <p>
          <?= $a->isi_berita ?>
        </p>
      </div>
    </div>

    <form method="post" action="" style="color: #2db1be;">
    <input type="hidden" id="materialContactFormName" class="form-control" name="id_berita" value="<?= $a->id_berita ?>">
    <div class="row">
      <div class="col">
        <div class="md-form mt-3">
            <label for="materialContactFormName">Nama Alumni</label>
            <input type="text" id="materialContactFormName" class="form-control" name="nama_alumni">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="md-form mt-3">
          <label for="materialContactFormName">Komentar</label>
          <input type="text" id="materialContactFormName" class="form-control" name="komentar">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
          <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="saveKomentar">Send</button>
        </div>
    </div>

</form>

  </div>

  <div class="col-6 col-md-2">
    <div class="row">
      <div class="col">
        Gambar Berita
      </div>
    </div>
    <div class="row">
      <div class="col">
        Gambar Berita
      </div>
    </div>
    <div class="row">
      <div class="col">
        Gambar Berita
      </div>
    </div>
  </div>

</div>

<?php
if (isset($_POST['saveKomentar']))
{
  $id_berita = $obj->conn->real_escape_string($_POST['id_berita']);
  $nama_alumni = $obj->conn->real_escape_string($_POST['nama_alumni']);
  $komentar = $obj->conn->real_escape_string($_POST['komentar']);


  $saveBerita = $objAdmin->saveKomentar($id_berita,$nama_alumni,$komentar);
}
