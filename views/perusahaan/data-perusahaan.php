


<div class="header-hal">
    <center><h1>DATA PEKERJAAN</h1></center>
    <hr>
</div>
<div class="daftar-table table-responsive">
    <table class="table table-striped text-center" id="table">
      <thead>
      <tr>
        <th>No</th>
        <th>Id Perusahaan</th>
        <th>Nama Perusahaan</th>
        <th>Alamat Perusahaan</th>
        <th>NIS</th>


        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $data = $objAdmin->showPerusahaan();
    $no = 1;
    while ($a = $data->fetch_object()) {
    ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $a->id_perusahaan; ?></td>
      <td><?= $a->nis; ?></td>
      <td><?= $a->nama_perusahaan; ?></td>
      <td><?= $a->alamat_perusahaan; ?></td>
      <td>
        <a href="?view=edit-perusahaan&nip=<?=$a->id_perusahaan; ?>" class="btn btn-sm btn-warning">Edit</a>
        <a href="?view=hapus-perusahaan&nip=<?=$a->id_perusahaan; ?>" class="btn btn-sm btn-danger">Hapus</a>

      </td>
    </tr>
      <?php
      $no++;
      }
      ?>
    </tbody>
    </table>

</div>

<a href="?view=tambah-data-perusahaan">
  <button type="button" class="btn btn-primary">Tambah</button>
</a>
