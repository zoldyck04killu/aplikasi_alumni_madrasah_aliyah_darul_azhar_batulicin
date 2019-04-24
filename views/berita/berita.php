<?php
$data = $objAdmin->showBerita_perId($_GET['nip']);
$a = $data->fetch_object();
?>
<div class="header-hal">
    <center><h1>BERITA</h1></center>
    <hr>
</div>
<div class="row no-gutters">

  <div class="col-12 col-md-12">

    <div class="row" >
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
    <div class="row" style="margin-top:20px; margin-bottom:20px;">
      <div class="col">
        Gambar Berita :    <?php if ($a->gambar) { ?>
            <img src="./assets/images/<?=$a->gambar ?>" width="500" height="300">
          <?php }else{ ?>
            No Image
          <?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        Isi Berita :
        <p>
          <?= $a->isi_berita ?>
        </p>
      </div>
    </div>

    <div class="container">
  		<h1>Komentar</h1>
  		<ul class="list-group">
        <?php
        $id_berita = $a->id_berita;
        $data = $objAdmin->showKometar($id_berita);
        $no = 1;
        while ($komentar = $data->fetch_object()) {
        ?>
  			<li class="list-group-item" style="margin-bottom:10px;"> <div class="text-success"> <?= $komentar->nama_alumni ?> : </div> <?= $komentar->komentar ?></li>
        <?php
        }
        ?>
  		</ul>
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

</div>

<?php
if (isset($_POST['saveKomentar']))
{
  $id_berita = $obj->conn->real_escape_string($_POST['id_berita']);
  $nama_alumni = $obj->conn->real_escape_string($_POST['nama_alumni']);
  $komentar = $obj->conn->real_escape_string($_POST['komentar']);


  $saveBerita = $objAdmin->saveKomentar($id_berita,$nama_alumni,$komentar);
}
