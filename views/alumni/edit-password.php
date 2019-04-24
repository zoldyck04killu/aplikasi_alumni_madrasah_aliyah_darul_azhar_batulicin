<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {
        font-size: 15px;
        font-weight: bold;
    }
</style>

<?php

$nis  = @$_GET['nis'];
$data =$objAdmin->editAkun($nis)->fetch_object();


 ?>

<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Edit Akun</h2>
				<input type="hidden" name="id" value="<?= $data->id ?>">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required" name="username" value="<?= $data->username ?>">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password Baru" required="required" name="password">
        </div>
				<div class="form-group">
						<input type="text" class="form-control" placeholder="Nis" required="required" name="nis" value="<?= $data->nis ?>">
				</div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="editAkun">Edit Akun</button>
        </div>
    </form>
</div>
<?php

if (isset($_POST['editAkun'])) {
	$id = $obj->conn->real_escape_string($_POST['id']);
	$nis = $obj->conn->real_escape_string($_POST['nis']);
  $username = $obj->conn->real_escape_string($_POST['username']);
  $password = $obj->conn->real_escape_string($_POST['password']);
  $password_hash = password_hash($password, PASSWORD_DEFAULT);

  // login
  $editAkun = $objAdmin->proses_editAkun($username, $password_hash,$nis,$id);
  if ($editAkun) {
      echo '<script>
      window.location="?view=alumni";
       </script>';
  }else {
    echo '<script> alert("error login"); </script>';
  }
}

?>
