<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Beranda</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php
  session_start();
  $_SESSION['pos'] = "beranda";
  include("navbar.php");
  include("sidebar.php");
  require_once("conn.php");
  $listMerch=mysqli_query($link,"SELECT * FROM merchant where status=0");
  $jumlah = 0; 
  $pesananMasuk = 0;
  $merchantBaru = mysqli_num_rows($listMerch);
  $listReport = mysqli_query($link,"select * from report");
  $jumreport = mysqli_num_rows($listReport);
  $arrayCount= array();
  $arrayMerch= array();
  $query = "select * from htransaksi";
  $query2 = "select * from dtransaksi";
  $listpesanan = mysqli_query($link,$query);
  $listdtrans = mysqli_query($link,$query2);
  foreach ($listpesanan as $pesanan){
      if(substr($pesanan['tglwaktu_trans'],0,10) == date("Y-m-d") && $pesanan['status_htrans']!="DIBATALKAN"){
        $pesananMasuk++;
      }
      array_push($arrayMerch,$pesanan['id_merchant']);
      // print_r($arrayMerch);
      foreach($listdtrans as $dtrans){
        if($dtrans['id_htrans'] == $pesanan['id_htrans']){
          array_push($arrayCount,$dtrans['id_makanan']);
        }
      }
  }
  //top menu
  $values = array_count_values($arrayCount);
  arsort($values);
  $popular = array_slice(array_keys($values), 0, 1, true);
  $popular = implode($popular," ");
  $query = "select nama_menu from menu where id_menu= $popular";
  $query2=mysqli_fetch_assoc(mysqli_query($link,$query));
  $menu=$query2["nama_menu"];
  // echo "..................................................".$menu;

  $popular = array_slice(array_keys($values), 1, 1, true);
  $popular = implode($popular," ");
  $query = "select nama_menu from menu where id_menu= $popular";
  $query2=mysqli_fetch_assoc(mysqli_query($link,$query));
  $menu2=$query2["nama_menu"];
  
  $menu3="";
  $popular = array_slice(array_keys($values), 2, 1, true);
  $popular = implode($popular," ");
  $query = "select nama_menu from menu where id_menu= $popular";
  $query2=mysqli_fetch_assoc(mysqli_query($link,$query));
  if($query2){
    $menu3=$query2["nama_menu"];
  }

  //top merchant
  $values = array_count_values($arrayMerch);
  arsort($values);
  // print_r($values);
  $popular = array_slice(array_keys($values), 0, 1, true);
  $popular = implode($popular," ");
  // print_r($popular);
  $query = "select nama from merchant where id= '$popular'";
  $query2=mysqli_fetch_assoc(mysqli_query($link,$query));
  $merchant=$query2["nama"];

  $merchant2 = "";
  $popular = array_slice(array_keys($values), 1, 1, true);
  $popular = implode($popular," ");
  $query = "select nama from merchant where id= '$popular'";
  $query2=mysqli_fetch_assoc(mysqli_query($link,$query));
  $merchant2=$query2["nama"];
  if($query2){
    $merchant2=$query2["nama"];
  }

  $merchant3="";
  $popular = array_slice(array_keys($values), 2, 1, true);
  $popular = implode($popular," ");
  $query = "select nama from merchant where id= '$popular'";
  $query2=mysqli_fetch_assoc(mysqli_query($link,$query));
  if($query2){
    $merchant3=$query2["nama"];
  }

?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <a href='pesan.php'>
            <div class="small-box bg-info" style="height:150px;">
              <div class="inner">
                <h3><?=$pesananMasuk?></h3>
                <p>Pesanan Baru</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          </a>

          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <a href='merchant/merchant.php'>
            <div class="small-box bg-success" style="height:150px;">
              <div class="inner">
                <h3><?=$merchantBaru?></h3>

                <p>Merchant Baru</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          </a>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning" style="height:150px;">
              <div class="inner">
                <h3 style="color:white;">
                  <?php
                    include("counter.php");
                    echo $kunjungan[0];
                  ?>
                </h3>

                <p>Pengunjung</p>
              </div>
              <div class="icon">
                <i class="ion ion-man"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-orange" style="height:150px;">
              <div class="inner">
                <h3 style="color:white;">
                  Top Merchant
                </h3>
                <ol style="color:white;">
                  <li><?=$merchant?></li>
                  <li><?=$merchant2?></li>
                  <li><?=$merchant3?></li>
                </ol>
              </div>
              <div class="icon">
                <i class="ion ion-star"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-primary" style="height:150px;">
              <div class="inner">
                <h3 style="color:white;">
                  Menu Favorit
                </h3>
                <ol>
                <li><?=$menu?></li>
                <li><?=$menu2?></li>
                <li><?=$menu3?></li>
                </ol>
              </div>
              <div class="icon">
                <i class="ion ion-heart"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <a href="report.php">
            <div class="small-box bg-purple" style="height:150px;">
              <div class="inner">
                <h3 style="color:white;">
                  <?=$jumreport?>
                </h3>
                <p>Laporan Pengguna</p>
              </div>
              <div class="icon">
                <i class="ion ion-man"></i>
              </div>
            </div>
          </div>
          </div>

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
          </section>
          <!-- /.Left col -->
         
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5eaa420810362a7578bda3cb/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<style>
 p,i{
    color: white;
    font-family: 'Avenir',sans-serif;
    font-size: 18px;
    line-height: 1.6;
  }
  @font-face {
    font-family: myFirstFont;
    src: url('Redemption.ttf');
  }

  .judul{
    font-family: myFirstFont;
    font-size:40px;
    color:white;
    margin-left:25px;
  }
</style>
