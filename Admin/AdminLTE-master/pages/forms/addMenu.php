<?php
    session_start();
    require("conn.php");
    $listUser=mysqli_query($link,"SELECT * FROM merchant");
    $jumlah = 0;
    foreach($listUser as $user) 
    {
        $jumlah++;
    }    
    // var_dump($user);
    

    if(isset($_POST['toLog'])){
        header("location:login.php");
    }
    // if(isset($_POST['toHome'])){
    //     header("location:home.php");
    // }
    if(isset($_POST['reg']))
    {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['telp'];
        $provinsi = $_POST['prov'];
        $kota = $_POST['kota'];
        $pass = $_POST['pass'];  
        $cpass = $_POST['cpass'];  
        $mail = $_POST['email'];  
        $cek = 0;
    
        foreach ($listUser as $user) {
            if($user['notelp']==$nohp){
                echo "<script>alert('No HP telah terdaftar')</script>";
                break;
            }
            else
            {
                $cek++;
            }
        }


        if($nama==""||$alamat==""||$nohp==""||
        $pass==""||$cpass==""||$email=""){
            echo "field tidak boleh kosong!";
        }else if($pass!=$cpass){
            echo "konfirmasi password tidak sesuai";            
        }else if($cek==$jumlah)
        {   
            // echo "haha";
            mysqli_query($link,"INSERT INTO merchant(id,nama,rating,alamat,notelp,pass,email,provinsi,kota) VALUES('','$nama',0,'$alamat','$nohp','$pass','$mail','$provinsi','$kota')");
            // echo "sheyenk";
            // header('location:login.php');
        }
        // else{
        //     echo "username/no hp telah terdaftar";
        // }
    
	}



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

<?php
  include("sidebar.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Menu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
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
                <h3 class="card-title">Menu baru</h3>
              </div>
              <!-- form start -->
              <form role="form" action="#" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInput">Nama</label>
                    <input type="nama" class="form-control" placeholder="Masukkan nama" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label><br>
                    <input type="text" class="form-control"  placeholder="Rp." name="harga">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label><br>
                    <div class="bootstrap-switch-null bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-focused bootstrap-switch-animate" style="width: 115.969px;">
                    <div class="bootstrap-switch-container" style="width: 171px; margin-left: 0px;">
                    <span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 57px;">ON</span>
                    <span class="bootstrap-switch-label" style="width: 57px;">&nbsp;</span>
                    <span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 57px;">OFF</span>
                    <input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="">
                    </div>
                 </div>
                </div>
                  


                <div class="card-footer">
                  <input type="submit" class="btn btn-info" name="reg" value="Daftar">
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
function refreshKota(){
        prov = $("#prov").val();
        $.ajax({
            method:"post",
            url: "kota.php",
            data: {
                prov:prov
            },
            success: function (data) {
                $("#kota").html(data);
            }
        });
     }
</script>
</body>
</html>
