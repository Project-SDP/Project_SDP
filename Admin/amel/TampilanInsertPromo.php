<!DOCTYPE html>
<html>
<head>
<style>

<style>
  p,i{
    color: white;
    font-family: 'Avenir',sans-serif;
    font-size: 18px;
    line-height: 1.6;
  }
  @font-face {
    font-family: myFirstFont;
    src: url('../AdminLTE-master/Redemption.ttf');
  }

  .judul{
    font-family: myFirstFont;
    font-size:40px;
    color:white;
    margin-left:25px;
  }
  .aktif{
    background: rgba(300,300,300,.1);
    border-left: 5px solid #fff;
  }
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Merchant</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE-master/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php
  session_start();
  $_SESSION['pos'] = "amel";
  include("../AdminLTE-master/navbar.php");
  include("../AdminLTE-master/sidebar.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kode Promo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tambah</a></li>
              <li class="breadcrumb-item active">Promo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kode Promo</h3>
              </div>
              <!-- form start -->
              <form action="promo/insert.php" method='post' enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInput">Nama Promo</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Promo" name="kode_promo">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <input type="text" class="form-control" id="deskrip"  placeholder="Masukkan Deskripsi" name="deskripsi_promo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Awal</label>
                    <input type="date" class="form-control" placeholder="Masukkan Tanggal Awal" name="tanggal_awal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Akhir</label>
                    <input type="date" class="form-control" placeholder="Masukkan Tanggal Akhir" name="tanggal_akhir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Potongan</label>
                    <input type="text" onkeypress="NumberOnly(event)" class="form-control"  placeholder="Masukkan potongan" name="potongan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Minimum Order</label>
                    <input type="text" onkeypress="NumberOnly(event)" class="form-control"  placeholder="Masukkan minimum order" name="minimum_order">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gambar</label>
                    <input type="button" value="Pilih Gambar" onclick="document.getElementById('gambar').click();">
                    <input type="file" name="gambar" id="gambar" style="display:none;">
                  </div>
                  <div class="card-footer">
                  <input type="submit" class="btn btn-info" name="insert" onclick="insert()" value="Insert">
                  <!-- <submit class="btn btn-info" name="reg">Daftar</submit> -->
                  <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
                </div>
              </form>
            </div>
          </div>
         
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../AdminLTE-master/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../AdminLTE-master/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../AdminLTE-master/dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
function NumberOnly(evt){
    var input= String.fromCharCode(evt.which);
    if(!(/[0-9]/.test(input))){
        evt.preventDefault();
    }
}
function insert(){
    $.ajax({
        method: "post",
        url: "Promo/insert.php",
        data: {
            edkode_promo:$("#kode_promo").val(),
            eddeskripsi_promo:$("#deskripsi_promo").val(),
            edtanggal_awal:$("#tanggal_awal").val(),
            edtanggal_akhir:$("#tanggal_akhir").val(),
            edpotongan:$("#potongan").val(),
            edgambar:$("#gambar").val()
        },
        success: function (response) {   
          alert(response);
        }
    });

}
</script>
</body>
</html>
