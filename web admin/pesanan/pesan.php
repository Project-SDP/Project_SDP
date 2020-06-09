<!DOCTYPE html>
<html>
<head>
<?php
  session_start();
  include("../navbar.php");
  // echo "......................................................................".$_SESSION['status'];
  $_SESSION['pos'] = "pesan";
  include("../sidebar.php");
  require("../conn.php");
  $listUser=mysqli_query($link,"SELECT * FROM merchant");
  $jumlah = 0; $merchant="";
  foreach($listUser as $user){
    $jumlah++;
    if($_SESSION['status']==$user['email']){
      $merchant = $user['id'];
      // echo $merchant;
      break;
    }
  }
?>

<style>
  p,i{
    color:white;
  }
  @font-face {
  font-family: myFirstFont;
  src: url('../Redemption.ttf');
  }
  .judul{
    font-family: myFirstFont;
    font-size:40px;
    color:white;
    margin-left:25px;
  }
  #image{
    width:1200px;;
    height:510px;
    margin: 10px auto;
  }
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pesanan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pesanan Masuk</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <!-- <h3 class="card-title">DataTable with minimal features & hover style</h3> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Transaksi</th>
                  <th>Nama Customer</th>
                  <th>Tgl Waktu Transaksi</th>
                  <th>Subtotal</th>
                  <th>Status</th>
                  <th>Ongkir</th>
                  <th>Pesan</th>
                  <th>Tgl Waktu Kirim</th>
                </tr>
                </thead>
                <tbody id ='menu'>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <form>
          <input type="hidden" id="idMerch" value="<?=$merchant?>">
          </form>
          

        </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3-pre
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script  src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script  src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script  src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script  src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script  src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script  src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script  src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script  src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  var idMerch = "<?=$merchant?>";
//   alert(idMerch);
  pangillPesan(idMerch);
function pangillPesan(idMerch){
  $.ajax({
   method: "post",
   url: "ambilPesan.php",
   data: {
      idMerch:idMerch
    },
   success: function (response) {
    //  alert("YES")
     $("#menu").html(response);
   }
 });
 }

</script>
</body>
</html>
