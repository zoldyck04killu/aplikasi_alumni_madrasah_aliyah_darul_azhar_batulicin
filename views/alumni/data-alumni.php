


<div class="header-hal">
    <center><h1>DATA ALUMNI</h1></center>
    <hr>
</div>
<div class="daftar-table table-responsive">
    <table class="table table-striped text-center" id="table">
      <thead>
      <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama <br> Lengkap</th>
        <th>Tempat <br> Lahir</th>
        <th>Tanggal <br> Lahir</th>
        <th>Jenis <br> Kelamin</th>
        <th>Agama</th>
        <th>Jurusan</th>
        <th>Alamat <br> Rumah</th>
        <th>Alamat <br> Sekarang</th>
        <th>No Hp</th>
        <th>Email</th>
        <th>Angkatan</th>
        <th>Lulusan</th>
        <th>Nama <br> Ayah</th>
        <th>Nama <br> Ibu</th>
        <th>Alamat <br> Ortu</th>
        <th>Hp Ortu</th>
        <th>Foto</th>


        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $data = $objAdmin->showAlumni();
    $no = 1;
    while ($a = $data->fetch_object()) {
    ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $a->Nis; ?></td>
      <td><?= $a->nama_lengkap; ?></td>
      <td><?= $a->tempat_lahir; ?></td>
      <td><?= $a->tgl_lahir; ?></td>
      <td><?= $a->jenis_kelamin; ?></td>
      <td><?= $a->agama; ?></td>
      <td><?= $a->jurusan; ?></td>
      <td><?= $a->alamat_rumah; ?></td>
      <td><?= $a->alamat_sekarang; ?></td>
      <td><?= $a->no_hp_alumni; ?></td>
      <td><?= $a->email; ?></td>
      <td><?= $a->angkatan_alumni; ?></td>
      <td><?= $a->lulusan_alumni; ?></td>
      <td><?= $a->nama_ayah; ?></td>
      <td><?= $a->nama_ibu; ?></td>
      <td><?= $a->alamat_ortu; ?></td>
      <td><?= $a->no_hp_ortu; ?></td>
      <td>
        <img src="./assets/images/<?=$a->foto ?>"  width="70px">
      </td>

      <td>
        <div class="btn btn-group" id="" style="">
        <a href="?view=edit-alumni&nis=<?=$a->Nis; ?>" class="btn btn-sm btn-warning">Edit</a>
        <a href="?view=hapus-alumni&nis=<?=$a->Nis; ?>" class="btn btn-sm btn-danger">Hapus</a>
        <a href="views/alumni/laporan-alumni.php?nis=<?=$a->Nis; ?>">
          <button type="button" class="btn btn-primary">Laporan</button>
        </a>
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

<a href="?view=tambah-data-alumni">
  <button type="button" class="btn btn-primary">Tambah</button>
</a>
