<?php
    // session_start();
    // require("../../conn.php");
   
    // var_dump($user);
    
   

    if(isset($_REQUEST['submit'])){
      $target_dir = "File/"; //<- ini folder tujuannya
      $target_file = $target_dir. basename($_FILES["gambar"]["name"]); //murni mendapatkan namanya saja tanpa path nya 
      $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if($file_type !="jpg" && $file_type !="png"){
            echo "tipe file hanya jpg dan png saja";
        } else if($_FILES["gambar"]["size"] > 500000){
            echo "file size terlalu besar";
        } else if(file_exists($target_file)){
            echo "file sudah ada";
        }
        else{
            if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)){
                echo "file ".basename($_FILES["gambar"]["name"])." terupload";
            }
        } 
        echo "<pre>", print_r($_FILES["gambar"]),"</pre>";
      
    }
    
    if(isset($_POST['toLog'])){
        header("location:login.php");
    }
    // if(isset($_POST['toHome'])){
    //     header("location:home.php");
    // }
    if(isset($_POST['reg']))
    {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['telp'];
        $provinsi = $_POST['prov'];
        $kota = $_POST['kota'];
        // $pass = $_POST['pass'];  
        // $cpass = $_POST['cpass'];  
        $mail = $_POST['email'];  
        $halal = $_POST['my-checkbox'];
        $kategori = $_POST['kategori'];
        // alert($halal);
        $cek = 0;
        $ctr = 0;
        $ctr2 = 0;
        $jumlah = 0;
        require_once('conn.php');
        $listUser=mysqli_query($link,"SELECT * FROM merchant");
        foreach ($listUser as $user) {
          $jumlah++;
            if($user['notelp']==$nohp&&$ctr==1){
                echo "<script>alert('No HP telah terdaftar')</script>";
                break;
                $ctr++;
            }
            else if($user['email']==$mail&&$ctr2==1){
                echo "<script>alert('Email telah terdaftar')</script>";
                break;
                $ctr2++;
            }
            else
            {
                $cek++;
            }
        }


        if($nama==""||$alamat==""||$nohp==""||$email=""){
            echo "field tidak boleh kosong!";
        // }else if($pass!=$cpass){
        //     echo "konfirmasi password tidak sesuai";            
        }else if($cek==$jumlah){
            $profileImage = time() . "_" . $_FILES["gambar"]["name"];
            $target = 'images' . $profileImage;
            if(move_uploaded_file($_FILES['gambar']['tmp_name'], $target)){
                // $jumlah= sprintf("%03d", $jumlah+1);
                // $kat = substr($kategori,1,3);
                // $id = "MC".strtoupper($kat.$jumlah);
                $query="UPDATE merchant set nama='$nama', kategori='$kategori', alamat='$alamat', notelp='$nohp', email='$mail', provinsi='$provinsi', kota='$kota', halal='$halal', profilepic='$profileImage' where id='$id'";
                $insert = mysqli_query($link,$query);
            }
        }else{
            echo "username/no hp telah terdaftar";
        }
    
	}



?>
<!DOCTYPE html>
<html>
<style>
  p,i{
    color:black;
  }
  @font-face {
  font-family: myFirstFont;
  src: url('../../Redemption.ttf');
  }
  .form-group{
    margin-left:130px;
    width:80%;
  }
  .form-group2{
    margin-left:530px;
    width:80%;
  }

  .judul{
    font-family: myFirstFont;
    font-size:50px;
    color:black;
  }
  #image{
    border-radius : 50%;
    width:160px;;
    height:160px;
    margin: 10px auto;
  }
</style>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profil</title>
  <!-- Tell the browser to be responsive to screen width -->
<?php
  include("../../navbar.php");
  session_start();
  $_SESSION['pos']="profil";
  include("../../sidebar.php");
  $listUser=mysqli_query($link,"SELECT * FROM merchant");
  $jumlah = 0; 
  // echo "..........................................................................".$_SESSION['status'];
  foreach($users as $user){
    $jumlah++;
    if($_SESSION['status']==$user['email']){
      $id = $user['id'];
      $nama = $user['nama'];
      $kategori = $user['kategori'];
      $rating = $user['rating'];
      $alamat = $user['alamat'];
      $notelp = $user['notelp'];
      $pass = $user['pass'];
      $email = $user['email'];
      $prov = $user['provinsi'];
      $kota = $user['kota'];
      $halal = $user['Halal'];
      $profpic = $user['profilepic'];
    }
  }
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <form action="#" method='post' enctype="multipart/form-data">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background:gray;">
                <h3 class="card-title" style="font-weight:bold;">Biodata</h3>
              </div>
              <div class="card-body">
                <input type="submit" class="btn btn-info" name="reg" value="Simpan" style="float:right;">
            </div>
                <div class="card-body">
                  
                <div class="form-group2">
                    <label for="exampleInput" style="margin-top:10px; margin-left:35px;">Gambar Profil</label>
                    <div class="col-md-3">
                    <?php
                      if($profpic!=null){
                        echo"<img id='image' src='images$profpic' class='img-thumbnail'>";
                      }else{
                        echo"<img id='image' src='placeholder.jpg' class='img-thumbnail'>";
                      }
                    ?>
                    <div class="caption" style="margin-top:10px;">
                    </div>
                    </div>
                <input type="button" class="btn btn-default" value="Pilih Gambar" onclick="document.getElementById('gambar').click();" style="margin-top:10px; margin-left:35px;">
                <input type="file" class="btn btn-default" name="gambar" id="gambar" style="display:none;" onchange="displayImage(this)">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput">Nama</label>
                    <input type="text" class="form-control" id="nama" value="<?php echo $nama;?>" name="nama">
                  </div>
                  <div class="form-group">
                  <label> Pilih kategori </label>
                    <select class="form-control select2" id="kategori" name="kategori" style="width: 100%;">
                    <?php 
                    $listKat=mysqli_query($link,"SELECT * FROM kategori");
                    $select2 = -1;
                    foreach($listKat as $kat) 
                    {
                        if($kat['nama_kategori'] == $kategori){
                            echo "<option selected='selected' name=".$kat[nama_kategori].">".$kat[nama_kategori]."</option>";
                        }else{
                            echo "<option name=".$kat[nama_kategori].">".$kat[nama_kategori]."</option>";
                        }
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
                        if($merch['nama_provinsi'] == $prov){
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
                            if($kota['nama_kota'] == $kota){
                                echo "<option selected='selected' name=".$kota[nama_kota].">".$kota[nama_kota]."</option>";
                                $select2 = 0;
                            }else{
                                echo "<option name=".$kota[nama_kota].">".$kota[nama_kota]."</option>";
                            }
                        
                    }    
                    ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" placeholder="enter">Alamat</label>
                    <input type="text" class="form-control"  value="<?=$alamat?>" name="alamat">
                    <input type="hidden" class="form-control"  value="<?=$id?>" name="id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No telp</label>
                    <input type="tel" class="form-control" value=<?=$notelp?> name="telp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="<?=$email?>" name="email">
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value=<?=$pass?> name="pass">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Retype Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="Masukkan konfirmasi password" name="cpass">
                  </div> -->
                  <div class="form-group">
                    <label>Apakah makanan yang anda sajikan HALAL?</label><br>
                    <?php
                      if($halal==1){
                        echo "<input type='checkbox' name='my-checkbox' value='1' checked data-bootstrap-switch>";
                        echo "<input type='hidden' name='my-checkbox' value='0'>";
                      }else{
                        echo "<input type='checkbox' name='my-checkbox' value='0' checked data-bootstrap-switch>";
                        echo "<input type='hidden' name='my-checkbox' value='1'>";
                      }
                    ?>
                   
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
