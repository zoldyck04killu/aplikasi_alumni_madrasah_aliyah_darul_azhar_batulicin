<?php
$data = $objAdmin->showBerita();
$no = 1;
while ($a = $data->fetch_object()) {
?>
<div class="card mt-3" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $a->judul; ?></h5>
    <p class="card-text"></p>
    <a href="?view=berita&nip=<?=$a->id_berita; ?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php
}

?>
