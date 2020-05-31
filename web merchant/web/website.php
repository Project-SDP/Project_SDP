<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Web Preview</title>
  <?php
  session_start();
  require("../navbar.php");
  $_SESSION['pos']="web";
  include("../sidebar.php");
  $listUser=mysqli_query($link,"SELECT * FROM merchant");
  $jumlah = 0; 
  foreach($listUser as $user){
    $jumlah++;
    if($_SESSION['status']==$user['email']){
      $id = $user['id'];
      // echo "......................................................................".$id;
      break;
    }
  }
  $profpic='';
  $listUser=mysqli_query($link,"SELECT * FROM website");
  foreach($listUser as $user){
    if($id==$user['id_merchant']){
      $batas_pesan = $user['batas_pesan'];
      $waktu = $user['waktu_antar'];
      $batal = $user['kebijakan'];
      $profpic = $user['cover'];
    }
  }
  // echo "............................................................".$id;
  if(isset($_POST['reg']))
  {
    $batas_pesan = $_POST['batas_pesan'];
    $waktu = $_POST['waktu'];
    $batal = $_POST['batal'];
    $cek = 0;
    $ctr = 0;
    $ctr2 = 0;
    $jumlah = 0;
    // require_once('../conn.php');
    $listUser=mysqli_query($link,"SELECT * FROM website");

    if($batas_pesan==""||$waktu==""||$batal==""){
        echo "field tidak boleh kosong!";        
    }else{
        $cover = time() . "_" . $_FILES["gambar"]["name"];
        $target = 'cover' . $cover;
        if(move_uploaded_file($_FILES['gambar']['tmp_name'], $target)){
            $query="UPDATE website set batas_pesan='$batas_pesan', waktu_antar='$waktu', kebijakan='$batal', cover='$cover' where id_merchant='$id'";
            $insert = mysqli_query($link,$query);
        }
    }
	}
?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<style>
  p,i{
    color:black;
  }
  @font-face {
  font-family: myFirstFont;
  src: url('../Redemption.ttf');
  }

  .judul{
    font-family: myFirstFont;
    font-size:50px;
    color:black;
  }
  #image{
    width:1200px;;
    height:510px;
    margin: 10px auto;
  }
</style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  

    </div>
  <?php
    $_SESSION['pos']="web";
    include('../sidebar.php');
  ?>
    <!-- /.sidebar -->
  </aside>
    <!-- Main content -->
    <section class="content">
        
        <h3 class="mt-4 mb-4" style="margin-left:800px;">Web Preview</h3>

        <!-- /.row -->

    </section>
    <form action="#" method='post' enctype="multipart/form-data" style="margin-left:250px;">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" style="font-weight:bold;">Konfigurasi Web</h3>
              </div>
              <div class="card-body">
                <input type="submit" class="btn btn-info" name="reg" value="Simpan" style="float:right;">
            </div>
                <div class="card-body">
                <div class="form-group2">
                  <label for="exampleInput" style="margin-top:10px; margin-left:0px;">Gambar Cover</label>
                  <div style="font-size:15px; font-style: italic; color:grey;">Gambar disarankan berukuran minim 900 x 210
                    <br> Tipe File yang disarankan .jpg dan .png
                  </div>
                  <div class="col-md-9">
                    <?php
                    echo $profpic;
                    if($profpic!=null){
                      echo"<img id='image' src='cover$profpic' class='img-thumbnail'>";
                    }else{
                      echo"<img id='image' src='../image/placeholder.jpg' class='img-thumbnail'>";
                    }
                  ?>
                  <div class="caption" style="margin-top:10px;">
                  </div>
                  </div>
              <input type="button" class="btn btn-default" value="Pilih Gambar" onclick="document.getElementById('gambar').click();" style="margin-top:10px; margin-left:35px;">
              <input type="file" class="btn btn-default" name="gambar" id="gambar" style="display:none;" onchange="displayImage(this)">
                </div>
                  <br>
                  <div class="form-group">
                    <label for="exampleInput">Pesan Sebelum</label>
                    <input type="text" class="form-control" id="nama" value="<?php echo $batas_pesan;?>" name="batas_pesan">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1" placeholder="enter">Waktu Antar</label>
                    <input type="text" class="form-control"  value="<?=$waktu?>" name="waktu">
                  </div>
            
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kebijakan Pembatalan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?=$batal?>" name="batal">
                  </div>
                  
                  </div> 

              </form>
            </div>
          </div>
         
        </div>
      </div>
    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
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
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
function displayImage(e){
  if(e.files[0]){
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#image').setAttribute('src',e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>
</body>
</html>
