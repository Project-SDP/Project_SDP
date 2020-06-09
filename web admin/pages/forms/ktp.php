<?php
  session_start();
  include("../../navbar.php");
  $_SESSION['pos']="profil";
  include("../../sidebar.php");
  $listUser=mysqli_query($link,"SELECT * FROM merchant");
  $jumlah = 0; 
  foreach($users as $user){
    $jumlah++;
    if($_SESSION['status']==$user['email']){
      $id = $user['id'];
      // echo "......................................................................".$id;
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
      $ktp = $user['fotoktp'];
      echo ".........................................................................".$ktp;
      break;
    }
  }
?>
<?php
    if(isset($_REQUEST['submit'])){
        
      $target_dir = "File/"; //<- ini folder tujuannya
      $target_file = $target_dir. basename($_FILES["gambar"]["name"]); //murni mendapatkan namanya saja tanpa path nya 
      $target_file2 = $target_dir. basename($_FILES["gambarktp"]["name"]); //murni mendapatkan namanya saja tanpa path nya 
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
            if(move_uploaded_file($_FILES["gambarktp"]["tmp_name"], $target_file2)){
                echo "file ".basename($_FILES["gambarktp"]["name"])." terupload";
            }
        } 
        // echo "<pre>", print_r($_FILES["gambar"]),"</pre>";
      
    }
    
    if(isset($_POST['reg']))
    {
        $ktp = time() . "_" . $_FILES["gambarktp"]["name"];
        $target2 = 'ktp' . $ktp;
        if(move_uploaded_file($_FILES['gambarktp']['tmp_name'], $target2)){
            $query="UPDATE merchant set fotoktp='$ktp' where id='$id'";
            $insert = mysqli_query($link,$query);
        }
        // header("location:profile.php");
	  }



?>
<!DOCTYPE html>
<html>
<style>
  p,i{
    color:white;
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
    font-size:40px;
    color:white;
    margin-left:25px;
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
        <div class="form-group2">
        <label for="exampleInput" style="margin-top:10px; margin-left:35px;">Upload Foto KTP</label>
        <div class="col-md-3">
        <?php
            if($ktp!=null){
              // echo $ktp;
              echo"<img id='image2' src='ktp$ktp' class='img-thumbnail' style='margin-left:-35px;'>";
            }else{
              echo"<img id='image2' src='../../image/placeholder.jpg' class='img-thumbnail' style='margin-left:-35px;'>";
            }
        ?>
        </div>
        <input type="button" class="btn btn-info" value="Pilih Gambar"  onclick="document.getElementById('gambarktp').click();" style="margin-top:10px; margin-left:35px;">
        <input type="file" class="btn btn-default" name="gambarktp" id="gambarktp" style="display:none;" onchange="displayImage2(this)">
        </div>
        <div class="card-body">
            <input type="submit" class="btn btn-info" name="reg" value="Simpan"  style=" width:113px;margin-top:-10px; margin-left:545px;">
        </div>
    </form>
            </div>
          </div>
         
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>



  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<!-- <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> -->
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- <script type="text/javascript"></script> -->

<script>
function displayImage2(e){
  if(e.files[0]){
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#image2').setAttribute('src',e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>
</body>
</html>
