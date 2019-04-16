<!-- Material form contact -->
<div class="card" style="margin:20px 20px">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Tambah Data Perusahaan</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form action="" method="post" class="text-center" style="color: #757575;">

          <div class="md-form mt-3">
              <label for="materialContactFormName">Id Perusahaan</label>
              <input type="text" id="materialContactFormName" class="form-control" name="id_perusahaan">
          </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">NIS</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nis">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Nama Perusahaan</label>
                <input type="text" id="materialContactFormName" class="form-control" name="nama_perusahaan">
            </div>

            <div class="md-form mt-3">
                <label for="materialContactFormName">Alamat Perusahaan</label>
                <input type="text" id="materialContactFormName" class="form-control" name="alamat_perusahaan">
            </div>


            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="savePerusahaan">Send</button>

        </form>
        <!-- Form -->

    </div>

</div>
<?php
if (isset($_POST['savePerusahaan']))
{
  $id_perusahaan = $obj->conn->real_escape_string($_POST['id_perusahaan']);
  $nis = $obj->conn->real_escape_string($_POST['nis']);
  $nama_perusahaan = $obj->conn->real_escape_string($_POST['nama_perusahaan']);
  $alamat_perusahaan = $obj->conn->real_escape_string($_POST['alamat_perusahaan']);

  $savePerusahaan = $objAdmin->savePerusahaan($id_perusahaan,$nis,$nama_perusahaan,$alamat_perusahaan );
  if ($savePerusahaan) {
      echo "<script>
      swal(
        'Save Perusahaan Success!',
        'You clicked the button!',
        'success'
      )
      </script>";
  }else{
    echo "<script>
    swal({
          title: 'Error Save Alumni!',
          text: 'Do you want to continue',
          type: 'error'
        })
    </script>";
  }

}
