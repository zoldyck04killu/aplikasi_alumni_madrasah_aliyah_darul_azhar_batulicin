<?php

$id_perusahaan = @$_GET['id_perusahaan'];
$data = $objAdmin->edit_perusahaan($id_perusahaan)->fetch_object();

 ?>

<!-- Material form contact -->
<div class="card" style="margin:20px 20px">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Edit Data Perusahaan</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form action="" method="post" class="text-center" style="color: #757575;">

          <div class="md-form mt-3">
              <label for="materialContactFormName">Id Perusahaan</label>
              <input type="text" id="materialContactFormName" class="form-control" name="id_perusahaan" value="<?=$data->id_perusahaan ?>" readonly>
          </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">NIS</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nis" value="<?=$data->nis ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Nama Perusahaan</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nama_perusahaan" value="<?=$data->nama_perusahaan ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Alamat Perusahaan</label>
                <input type="text" id="materialContactFormName" class="form-control" name="alamat_perusahaan" value="<?=$data->alamat_perusahaan ?>">
            </div>


            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="updatePerusahaan">Update</button>

        </form>
        <!-- Form -->

    </div>

</div>
<?php
if (isset($_POST['updatePerusahaan']))
{
  $id_perusahaan = $obj->conn->real_escape_string($_POST['id_perusahaan']);
  $nis = $obj->conn->real_escape_string($_POST['nis']);
  $nama_perusahaan = $obj->conn->real_escape_string($_POST['nama_perusahaan']);
  $alamat_perusahaan = $obj->conn->real_escape_string($_POST['alamat_perusahaan']);

  $updatePerusahaan = $objAdmin->updatePerusahaan($id_perusahaan,$nis,$nama_perusahaan,$alamat_perusahaan );
  if ($updatePerusahaan) {
      echo "<script>
      swal(
        'Edit Perusahaan Success!',
        'You clicked the button!',
        'success'
      )
      </script>";
  }else{
    echo "<script>
    swal({
          title: 'Error Edit Perusahaan!',
          text: 'Do you want to continue',
          type: 'error'
        })
    </script>";
  }

}
