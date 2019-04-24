<?php
$data = $objAdmin->showBerita();
$no = 1;
while ($a = $data->fetch_object()) {
?>
<div class="card mt-3" style="width: 18rem; float:left; margin:20px 20px">
  <?php if ($a->gambar) { ?>
    <img class="card-img-top" src="./assets/images/<?=$a->gambar ?>" width="400" height="200" alt="Card image cap">
  <?php }else{ ?>
    No Image
  <?php } ?>
  <div class="card-body">
    <h5 class="card-title"><?= $a->judul; ?></h5>
    <p class="card-text"></p>
    <a href="?view=berita&nip=<?=$a->id_berita; ?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php
}

?>
