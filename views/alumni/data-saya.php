


<div class="header-hal">
    <center><h1>DATA SAYA</h1></center>
    <hr>
</div>
<table>
<tbody>
    <?php
    $data = $objAdmin->editAlumni($_SESSION['nis']);
    $no = 1;
    while ($a = $data->fetch_object()) {
    ?>
      <tr>
        <td>NIS</td>
        <td style="padding:10px">:</td>
        <td><?= $a->Nis; ?></td>
        <td rowspan="0" style="padding-left:50px;"><img src="./assets/images/<?=$a->foto ?>"  width="500px"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td style="padding:10px">:</td>
        <td><?= $a->nama_lengkap; ?></td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td style="padding:10px">:</td>
        <td><?= $a->tempat_lahir; ?></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td style="padding:10px">:</td>
        <td><?= $a->tgl_lahir; ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td style="padding:10px">:</td>
        <td><?= $a->jenis_kelamin; ?></td>
      </tr>
      <tr>
        <td>Agama</td>
        <td style="padding:10px">:</td>
        <td><?= $a->agama; ?></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td style="padding:10px">:</td>
        <td><?= $a->jurusan; ?></td>
      </tr>
      <tr>
        <td>Alamat Rumah</td>
        <td style="padding:10px">:</td>
        <td><?= $a->alamat_rumah; ?></td>
      </tr>
      <tr>
        <td>Alamat Sekarang</td>
        <td style="padding:10px">:</td>
        <td><?= $a->alamat_sekarang; ?></td>
      </tr>
      <tr>
        <td>No HP</td>
        <td style="padding:10px">:</td>
        <td><?= $a->no_hp_alumni; ?></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td style="padding:10px">:</td>
        <td><?= $a->pekerjaan; ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td style="padding:10px">:</td>
        <td><?= $a->email; ?></td>
      </tr>
      <tr>
        <td>Angkatan</td>
        <td style="padding:10px">:</td>
        <td><?= $a->angkatan_alumni; ?></td>
      </tr>
      <tr>
        <td>Lulusan</td>
        <td style="padding:10px">:</td>
        <td><?= $a->lulusan_alumni; ?></td>
      </tr>
      <tr>
        <td>Nama Ayah</td>
        <td style="padding:10px">:</td>
        <td><?= $a->nama_ayah; ?></td>
      </tr>
      <tr>
        <td>Nama Ibu</td>
        <td style="padding:10px">:</td>
        <td><?= $a->nama_ibu; ?></td>
      </tr>
      <tr>
        <td>Alamat Orangtua</td>
        <td style="padding:10px">:</td>
        <td><?= $a->alamat_ortu; ?></td>
      </tr>
      <tr>
        <td>HP Orangtua</td>
        <td style="padding:10px">:</td>
        <td><?= $a->no_hp_ortu; ?></td>
      </tr>
      <?php
      $no++;
      }
      ?>
    </tbody>
    </table>

    <a href="?view=edit-alumni&nis=<?=$_SESSION['nis']; ?>" class="btn btn-sm btn-warning">Edit</a>

</div>
<?php if (@$_SESSION['hak_akses'] == 2): ?>
<a href="?view=tambah-data-alumni">
  <button type="button" class="btn btn-primary">Tambah</button>
</a>
<?php endif; ?>



</tbody>
</table>
