


<div class="header-hal">
    <center><h1>DATA PEKERJAAN</h1></center>
    <hr>
</div>
<div class="daftar-table table-responsive">
    <table class="table table-striped text-center" id="table">
      <thead>
      <tr>
        <th>No</th>
        <th>Id Pekerjaan</th>
        <th>Nama Pekerjaan</th>
        <th>NIS</th>
        <th>Jabatan</th>


        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $data = $objAdmin->showPekerjaan();
    $no = 1;
    while ($a = $data->fetch_object()) {
    ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $a->id_pekerjaan; ?></td>
      <td><?= $a->nis; ?></td>
      <td><?= $a->nama_pekerjaan; ?></td>
      <td><?= $a->jabatan; ?></td>
      <td>
        <a href="?view=edit-pekerjaan&id_pekerjaan=<?=$a->id_pekerjaan; ?>" class="btn btn-sm btn-warning">Edit</a>
        <a href="?view=hapus-pekerjaan&id_pekerjaan=<?=$a->id_pekerjaan; ?>" class="btn btn-sm btn-danger">Hapus</a>

      </td>
    </tr>
      <?php
      $no++;
      }
      ?>
    </tbody>
    </table>

</div>

<a href="?view=tambah-data-pekerjaan">
  <button type="button" class="btn btn-primary">Tambah</button>
</a>
