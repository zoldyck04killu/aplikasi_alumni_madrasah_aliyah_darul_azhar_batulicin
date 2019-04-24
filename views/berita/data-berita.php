


<div class="header-hal">
    <center><h1>DATA BERITA</h1></center>
    <hr>
</div>
<div class="daftar-table table-responsive">
    <table class="table table-striped text-center" id="table">
      <thead>
      <tr>
        <th>No</th>
        <th>Id Berita</th>
        <th>Tanggal Berita</th>
        <th>Nama Kategori</th>
        <th>Keterangan</th>
        <th>Judul</th>
        <th width="150">Isi Berita</th>
        <th>Gambar</th>
        <th>Hari</th>
        <th>Tempat Pelaksanaan</th>

        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $data = $objAdmin->showBerita();
    $no = 1;
    while ($a = $data->fetch_object()) {
    ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $a->id_berita; ?></td>
      <td><?= $a->tgl_berita; ?></td>
      <td><?= $a->nama_kategori; ?></td>
      <td><?= $a->keterangan; ?></td>
      <td><?= $a->judul; ?></td>
      <td ><?= $a->isi_berita; ?></td>
      <td>     
        <?php if ($a->gambar) { ?>
          <img src="./assets/images/<?=$a->gambar ?>" width="70px">
        <?php }else{ ?>
          No Image
        <?php } ?>
      </td>
      <td><?= $a->hari; ?></td>
      <td><?= $a->tempat_pelaksanaan; ?></td>

      <td>
        <div class="btn btn-group" id="" style="">
          <a href="?view=edit-Berita&nip=<?=$a->id_berita; ?>" class="btn btn-sm btn-warning">Edit</a>
          <a href="?view=hapus-Berita&nip=<?=$a->id_berita; ?>" class="btn btn-sm btn-danger">Hapus</a>
          <a href="?view=berita&nip=<?=$a->id_berita; ?>" class="btn btn-sm btn-info">View</a>
        </div>
      </td>
    </tr>
      <?php
      $no++;
      }
      ?>
    </tbody>
    </table>

</div>

<a href="?view=tambah-data-berita">
  <button type="button" class="btn btn-primary">Tambah</button>
</a>
<a href="views/berita/laporan-berita.php">
  <button type="button" class="btn btn-primary">Laporan</button>
</a>
