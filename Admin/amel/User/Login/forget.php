<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reset Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../../AdminLTE-master/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../AdminLTE-master/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a><b>Reset Password</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    <?php echo"<h3 style='text-align:center;'>Hai ".$_GET['as']."!</h3>"?>
      <p class="login-box-msg"><b>Lupa password Anda?</b> <br> Untuk ubah kata sandi Anda, isi alamat email Anda di bawah</p>

        <div class="input-group mb-3">
          <input type="email" class="form-control" id='email' placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="button" onclick='RandomPass()' class="btn btn-primary btn-block">Atur ulang password</button>
          </div>
          <!-- /.col -->
        </div>

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../../AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../AdminLTE-master/dist/js/adminlte.min.js"></script>

</body>
</html>
<script>
    function RandomPass(){
        var kepada=$("#email").val();
        var logAs = "<?php echo $_GET['as'];?>";
        $.ajax({
        method: "post",
        url: "randompass.php",
        data:{
            kepada:kepada,
            logAs:logAs
        },
        success: function (response) {
          alert(response)
          kirim();
            // window.location.href = "../../TampilanLogin.php"
        }
    });
    }
    function kirim(){
        var kepada=$("#email").val();
        var logAs = "<?php echo $_GET['as'];?>";
        $.ajax({
        method: "post",
        url: "kirim.php",
        data:{
            kepada:kepada,
            logAs:logAs
        },
        success: function (response) {
           
        }
    });
    }

</script>