<?php
  if(isset($_POST['logout'])){
    session_destroy();
    // if($_SESSION['pos']=="amel"){
    //   echo"<img src='../AdminLTE-master/dist/img/user2-160x160.jpg' class='img-circle elevation-2'>";
    // }
    // else if($_SESSION['pos']=="add"){
    //   echo"<img src='../../dist/img/user2-160x160.jpg' class='img-circle elevation-2'>";
    // }else if($_SESSION['pos']=="merch"){
    //   echo"<img src='../dist/img/user2-160x160.jpg' class='img-circle elevation-2'>";
    // }else{
    //   echo"<img src='dist/img/user2-160x160.jpg' class='img-circle elevation-2'>";
    // }
    header("location:http://localhost/project_sdp/Admin/amel/loginadmin.php#");
  }
?>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Merchant</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars fa-2x" style="color: #b31e3c;"></i></a>
      </li>
      
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->

    <!-- <li class="nav-item d-none d-sm-inline-block">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"  style="width:300px;height:35px; margin-top:8px;">
        <div class="input-group-append" style="position:absolute; left:300px; height:35px; margin-top:8px;">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </li> -->
    <li class="nav-item d-none d-sm-inline-block" style="margin-left:800px;">
        
    <form action="#" method="post" >
      <input type="submit" value="Keluar" name="logout" class="btn btn-block btn-primary btn-lg" style="background-color: #c41a7d; border:none; width: 100px; margin-left: 300px;">
    </form>
    <!-- <form action="#" method="post" name="logout">
      <input type="submit" value="Keluar" class="btn btn-block btn-primary btn-lg" style="background-color: #c41a7d; border:none;">
    </form> -->
      <!-- <a href="../../Admin/amel/TampilanLogin.php" class="nav-link btn-lg" style="margin-top:-40px;"></a> -->
    </li>
    
    </ul>
  </nav>