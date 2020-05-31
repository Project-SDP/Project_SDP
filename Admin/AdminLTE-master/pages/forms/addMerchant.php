<?php
    session_start();
    $_SESSION['pos'] = "add";
    require("conn.php");
    $listUser=mysqli_query($link,"SELECT * FROM merchant");
    $jumlah = 0;
    foreach($listUser as $user) 
    {
        $jumlah++;
    }    
    

    if(isset($_POST['toLog'])){
        header("location:login.php");
    }
    if(isset($_POST['reg']))
    {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['telp'];
        $provinsi = $_POST['prov'];
        $kota = $_POST['kota'];
        $kec = $_POST['kec'];
        $pass = $_POST['pass'];  
        $cpass = $_POST['cpass'];  
        $mail = $_POST['email'];  
        $halal = $_POST['my-checkbox'];
        $kategori = $_POST['kategori'];
        // alert($halal);
        $cek = 0;
    
        foreach ($listUser as $user) {
            if($user['notelp']==$nohp){
              echo "<script type='text/javascript'>alert('No HP telah terdaftar');</script>";
              break;
            }
            else if($user['email']==$mail){
              echo "<script type='text/javascript'>alert('Email telah terdaftar');</script>";
              break;
            }
            else
            {
                $cek++;
            }
        }



      if($nama==""||$alamat==""||$nohp==""||$pass==""||$cpass==""||$email=""){
          echo "<script type='text/javascript'>alert('Field tidak boleh kosong!');</script>";
      }else if($pass!=$cpass){
          echo "<scipt type='text/javascript'>alert('Konfirmasi password tidak sesuai')</script>";            
      }else if (strpos($mail,"@") == false){
          echo "<script type='text/javascript'>alert('Email anda tidak valid')</script>";
      }else if(strlen($nohp)<10 || strlen($nohp)>13){
          echo "<script type='text/javascript'>alert('Nomor telepon tidak valid')</script>";
      }else if(strlen($pass)<8){
          echo "<script type='text/javascript'>alert('Password tidak valid')</script>";
      }
      else if($cek==$jumlah)
      {   
          $jumlah= sprintf("%03d", $jumlah+1);
          $kat = substr($kategori,0,3);
          $id = strtoupper("MC".$kat.$jumlah);
          $id = $link->real_escape_string($id);
          $nama = $link->real_escape_string($nama);
          $kategori = $link->real_escape_string($kategori);
          $mail = $link->real_escape_string($mail);
          $alamat = $link->real_escape_string($alamat);
          $nohp = $link->real_escape_string($nohp);
          $pass = $link->real_escape_string($pass);
          $provinsi = $link->real_escape_string($provinsi);
          $kota = $link->real_escape_string($kota);
          $kec = $link->real_escape_string($kec);
          $halal = $link->real_escape_string($halal);
          // $vkey = md5(time().$nama);
          $pass = md5($pass);
          // echo $vkey;
          $insert = mysqli_query($link,"INSERT INTO merchant(id,nama,kategori,rating,alamat,notelp,pass,email,provinsi,kota,kecamatan,halal,status,vkey) VALUES('$id','$nama','$kategori',0,'$alamat','$nohp','$pass','$mail','$provinsi','$kota','$kec','$halal',1,'')");
      }
    
	}



?>
<style>
  p,i{
    color: white;
    font-family: 'Avenir',sans-serif;
    font-size: 18px;
    line-height: 1.6;
  }
  @font-face {
    font-family: myFirstFont;
    src: url('../../Redemption.ttf');
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
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Merchant</title>
  <!-- Tell the browser to be responsive to screen width -->
<?php
  include("../../navbar.php");
  include("../../sidebar.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Merchant</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tambah</a></li>
              <li class="breadcrumb-item active">Merchant</li>
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
                <h3 class="card-title">Merchant</h3>
              </div>
              <!-- form start -->
              <form role="form" action="#" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInput">Nama</label>
                    <input type="nama" class="form-control" placeholder="Masukkan nama" name="nama">
                  </div>
                  <div class="form-group">
                  <label> Pilih kategori </label>
                    <select class="form-control select2" id="kategori" name="kategori" style="width: 100%;">
                    <?php 
                    $listKat=mysqli_query($link,"SELECT * FROM kategori");
                    $select2 = -1;
                    foreach($listKat as $kat) 
                    {
                        // if($kat['id_kategori'] == 'KA001'){
                        //     if($select2 == -1){
                        //         echo "<option selected='selected' name=".$kat[nama_kategori].">".$kat[nama_kategori]."</option>";
                        //         $select2 = 0;
                        //     }else{
                                echo "<option name=".$kat[nama_kategori].">".$kat[nama_kategori]."</option>";
                        //     }
                        // }
                        
                    }    
                    ?>
                  </select>
                  </div>
                  <div class="form-group">
                  <label>Provinsi</label>
                  <select class="form-control select2" style="width: 100%;"  onchange="refreshKota()" name="prov" id="prov"> 
                    
                    <?php 
                    $listMerch=mysqli_query($link,"SELECT * FROM provinsi");
                    $select = -1; 
                    foreach($listMerch as $merch) 
                    {
                        if($select == -1){
                            echo "<option selected='selected' value=".$merch[id_provinsi].">".$merch[nama_provinsi]."</option>";
                            $select = 0;
                        }else{
                            echo "<option value=".$merch[id_provinsi].">".$merch[nama_provinsi]."</option>";
                        }
                    }
                    ?>
                  </select> 
                  </div>
                  <div class="form-group">
                  <label>Kota</label>
                  <select class="form-control select2" style="width: 100%;" name="kota" id="kota" onchange="refreshKec()"> 
                    <?php 
                    $listKota=mysqli_query($link,"SELECT * FROM kota");
                    $select2 = -1;
                    foreach($listKota as $kota) 
                    {
                        if($select2 == -1){
                            echo "<option selected='selected' name=".$kota[id_kota].">".$kota[nama_kota]."</option>";
                            $select2 = 0;
                        }else{
                            echo "<option name=".$kota[id_kota].">".$kota[nama_kota]."</option>";
                        }
                    }    
                    ?>
                  </select>
                  </div>
                  <div class="form-group">
                  <label> Pilih kecamatan </label>
                    <select class="form-control select2" id="kec" name="kec" style="width: 100%;">
                    <?php 
                    $listKota=mysqli_query($link,"SELECT * FROM kecamatan");
                    $select2 = -1;
                    foreach($listKota as $kota) 
                    {
                        if($kota['id_kota'] == 'KO021'){
                            if($select2 == -1){
                                echo "<option selected='selected' name=".$kota[id_kec].">".$kota[nama_kec]."</option>";
                                $select2 = 0;
                            }else{
                                echo "<option name=".$kota[id_kec].">".$kota[nama_kec]."</option>";
                            }
                        }
                        
                    }    
                    ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control"  placeholder="Masukkan alamat" name="alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No telp</label>
                    <input type="tel" class="form-control" placeholder="Masukkan no telepon" name="telp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password" name="pass">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan konfirmasi password" name="cpass">
                  </div>
                  <div class="card-body">
                    <label>Apakah makanan yang anda sajikan HALAL?</label><br>
                    <input type="checkbox" name="my-checkbox" value='1' checked data-bootstrap-switch>
                  </div>

                <div class="card-footer">
                  <input type="submit" class="btn btn-info" name="reg" value="Daftar">
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript"></script>

<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script>
$(document).ready(function () {
  bsCustomFileInput.init();
  $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
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
function refreshKec(){
    kota = $("#kota").val();
    $.ajax({
        method:"post",
        url: "kecamatan.php",
        data: {
            kota:kota
        },
        success: function (data) {
            $("#kec").html(data);
        }
    });
  }
</script>
</body>
</html>
