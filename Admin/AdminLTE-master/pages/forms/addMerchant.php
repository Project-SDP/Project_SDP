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
        $halal = $_POST['my-checkbox'];
        $kategori = $_POST['kategori'];
        // alert($halal);
        $cek = 0;
    
        foreach ($listUser as $user) {
            if($user['notelp']==$nohp){
                echo "<script>alert('No HP telah terdaftar')</script>";
                break;
            }
            else if($user['email']==$mail){
                echo "<script>alert('Email telah terdaftar')</script>";
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
            $jumlah= sprintf("%03d", $jumlah+1);
            $kat = substr($kategori,1,3);
            $id = "MC".strtoupper($kat.$jumlah);
            $insert = mysqli_query($link,"INSERT INTO merchant(id,nama,kategori,rating,alamat,notelp,pass,email,provinsi,kota,halal,status,vkey) VALUES('$id','$nama','$kategori',0,'$alamat','$nohp','$pass','$mail','$provinsi','$kota','$halal',1,'$vkey')");
            // echo "sheyenk";
            // header('location:login.php');
        }
        else{
            echo "username/no hp telah terdaftar";
        }
    
	}



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | General Form Elements</title>
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
                    <!-- <option selected="selected" name="aceh">Aceh</option>
                    <option>Bengkulu</option>
                    <option>Jambi</option>
                    <option>Kepulauan Bangka Belitung</option>
                    <option>Kepulauan Riau</option>
                    <option>Lampung</option>
                    <option>Riau</option>
                    <option>Sumatera Barat</option>
                    <option>Sumatera Selatan</option>
                    <option>Sumatera Utara</option>
                    <option>Banten</option>
                    <option>Gorontalo</option>
                    <option>Jakarta</option>
                    <option>Jawa Barat</option>
                    <option>Jawa Tengah</option>
                    <option>Jawa Timur</option>
                    <option>Kalimantan Barat</option>
                    <option>Kalimantan Selatan</option>
                    <option>Kalimantan Tengah</option>
                    <option>Kalimantan Timur</option>
                    <option>Kalimantan Utara</option>
                    <option>Maluku</option>
                    <option>Maluku Utara</option>
                    <option>Bali</option>
                    <option>Nusa Tenggara Barat</option>
                    <option>Nusa Tenggara Timur</option>
                    <option>Papua</option>
                    <option>Papua Barat</option>
                    <option>Sulawesi Barat</option>
                    <option>Sulawesi Selatan</option>
                    <option>Sulawesi Tengah</option>
                    <option>Sulawesi Tenggara</option>
                    <option>Sulawesi Utara</option>
                    <option>Yogyakarta</option> -->
                    
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
                  <select class="form-control select2" style="width: 100%;" name="kota" id="kota"> 
                    <?php 
                    $listKota=mysqli_query($link,"SELECT * FROM kota");
                    $select2 = -1;
                    foreach($listKota as $kota) 
                    {
                        if($kota['id_provinsi'] == 'PR001'){
                            if($select2 == -1){
                                echo "<option selected='selected' name=".$kota[nama_kota].">".$kota[nama_kota]."</option>";
                                $select2 = 0;
                            }else{
                                echo "<option name=".$kota[nama_kota].">".$kota[nama_kota]."</option>";
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
                    <!-- <input type="checkbox" name="halal" data-bootstrap-switch> -->
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
</script>
</body>
</html>
