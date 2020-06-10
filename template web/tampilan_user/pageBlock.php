<?php
    include("connect.php");
    $id=$_GET["id"];
    $query="SELECT * from htransaksi where id_htrans='$id'";
    $value=mysqli_fetch_assoc(mysqli_query($conn,$query));
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Forgot Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../Admin/AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../Admin/AdminLTE-master/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../Admin/AdminLTE-master/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../Admin/AdminLTE-master/index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Berikan alasan </p>

        <div class="input-group mb-3">
          <textarea name="" id="text_area" cols="30" rows="10"></textarea>
            
        </div>
        <!-- <P>Rating : </P>
        <select name="" id="rate" style="width:100%">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select> -->
        <div class="row">
          <div class="col-12">
            <button type="button" onclick='block()' class="btn btn-primary btn-block">Block</button>
          </div>
          <!-- /.col -->
        </div>

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../Admin/AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../Admin/AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../Admin/AdminLTE-master/dist/js/adminlte.min.js"></script>

</body>
</html>
<script>
    function block(){
        var id="<?=$_GET["id"]?>";
        var text=$("#text_area").val();
        $.ajax({
            type: "post",
            url: "block.php",
            data: {
                text:text,
                id:id
            },
            success: function (response) {
                window.location.href="index.php";
            }
        });
    }

</script>