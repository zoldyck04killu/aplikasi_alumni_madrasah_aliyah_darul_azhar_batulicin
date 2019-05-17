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

<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Verifikasi Akun</h2>
        <div class="form-group">
            <input type="hidden" name="nis" value="<?=$_SESSION['nis'] ?>">
            <input type="date" class="form-control" placeholder="Username" required="required" name="date">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="login">Masuk</button>
        </div>
    </form>
</div>
<?php

if (isset($_POST['login'])) {
  $date = $obj->conn->real_escape_string($_POST['date']);
  $nis = $obj->conn->real_escape_string($_POST['nis']);

  // login
  $login = $objAdmin->verifikasi($nis, $date);
  if ($login) {
      echo '<script>
      window.location="?view=home";
       </script>';
  }else {
    echo '<script> alert("error verifikasi"); window.location="?view=logout" </script>';
  }
}

?>
