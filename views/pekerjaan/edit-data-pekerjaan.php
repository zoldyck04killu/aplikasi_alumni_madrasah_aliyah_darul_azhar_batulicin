<?php 

$id_pekerjaan = @$_GET['id_pekerjaan'];
$data = $objAdmin->edit_pekerjaan($id_pekerjaan)->fetch_object();

 ?>

<!-- Material form contact -->
<div class="card" style="margin:20px 20px">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Edit Data Pekerjaan</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post" action="" class="text-center" style="color: #757575;">

          <div class="md-form mt-3">
              <label for="materialContactFormName">Id Pekerjaan</label>
              <input type="text" id="materialContactFormName" class="form-control" name="id_pekerjaan" value="<?=$data->id_pekerjaan ?>" readonly>
          </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">NIS</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nis" value="<?=$data->nis ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Nama Pekerjaan</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nama_pekerjaan" value="<?=$data->nama_pekerjaan ?>">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Jabatan</label>
                <input type="text" id="materialContactFormName" class="form-control" name="jabatan" value="<?=$data->jabatan ?>">
            </div>


            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="updatePekerjaan">Update</button>

        </form>
        <!-- Form -->

    </div>

</div>
<?php
if (isset($_POST['updatePekerjaan']))
{
  $id_pekerjaan = $obj->conn->real_escape_string($_POST['id_pekerjaan']);
  $nis = $obj->conn->real_escape_string($_POST['nis']);
  $nama_pekerjaan = $obj->conn->real_escape_string($_POST['nama_pekerjaan']);
  $jabatan = $obj->conn->real_escape_string($_POST['jabatan']);

  $updatePekerjaan = $objAdmin->updatePekerjaan($id_pekerjaan,$nis,$nama_pekerjaan,$jabatan );
  if ($updatePekerjaan) {
      echo "<script>
      swal(
        'Save Pekerjaan Success!',
        'You clicked the button!',
        'success'
      )
      </script>";
  }else{
    echo "<script>
    swal({
          title: 'Error Save Pekerjaan!',
          text: 'Do you want to continue',
          type: 'error'
        })
    </script>";
  }

}
