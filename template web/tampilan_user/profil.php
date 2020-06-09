<?php
    session_start();
    $check=0;
		if($_SESSION["loggedUser"]==""){
			$check=-1;
		}
    include("navbar.php");
    require_once("connect.php");
    $listUser=mysqli_query($conn,"SELECT * FROM user");
    $jumlah = 0; 
    foreach($listUser as $user){
      $jumlah++;
      if($_SESSION['loggedUser']==$user['id_akun']){
        $id = $user['id_akun'];
        $namadpn = $user['nama_depan'];
        $namabel = $user['nama_belakang'];
        $email = $user['email'];
        // echo $email;
        $alamat = $user['alamat'];
        $notelp = $user['no_telp'];
        $city = $user['kota'];
        break;
      }
    }

    if(isset($_POST['reg']))
    {
      $id = $_POST['id'];
      $namadpn = $_POST['namadpn'];
      $namabel = $_POST['namabel'];
      $email = $_POST['email'];
      $alamat = $_POST['alamat'];
      $notelp = $_POST['telp'];
      $city = $_POST['kota'];
      $cek = 0;
      $ctr = 0;
      $ctr2 = 0;
      $jumlah = 0;
      require_once('connect.php');
      $listUser=mysqli_query($conn,"SELECT * FROM user");
      foreach ($listUser as $user) {
        $jumlah++;
          if($user['no_telp']==$notelp&&$ctr==1){
            echo "<script>alert('No HP telah terdaftar')</script>";
            break;
            $ctr++;
          }
          else if($user['email']==$email&&$ctr2==1){
            echo "<script>alert('Email telah terdaftar')</script>";
            break;
            $ctr2++;
          }
          else
          {
            $cek++;
          }
      }
      if($nama==""||$alamat==""||$notelp==""||$email=""){
        echo "field tidak boleh kosong!";     
      }else if($cek==$jumlah){
        echo $email;
        // echo "benarrrrrrrrrrrrrrrrrrrr";
        $query="UPDATE user set nama_depan='$namadpn', nama_belakang='$namabel', alamat='$alamat', no_telp='$notelp', email='$email', kota='$city' where id_akun='$id'";
        $insert = mysqli_query($conn,$query);
      }else{
        echo "username/no hp telah terdaftar";
      }
	  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profil - Bibik's Catering</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body class="goto-here">
        <section class="ftco-section img" style="background-image: url(images/bg_3.jpg);">
            <div class="container">
                    <div class="row justify-content-end">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                <h2 class="mb-4">Profil</h2>
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
              <form action="#" method="post">
              <div class="card-body">
                <input type="submit" class="btn btn-info" name="reg" value="Simpan" style="float:right;">
            </div>
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInput">Email</label>
                    <input type="text" class="form-control" id="email" value="<?php echo $email;?>" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput">Nama Depan</label>
                    <input type="text" class="form-control"  id="namadpn" value="<?php echo $namadpn;?>" name="namadpn" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInput">Nama Belakang</label>
                    <input type="text" class="form-control"  id="namabel" value="<?php echo $namabel;?>" name="namabel" >
                  </div>
                  <div class="form-group">
                    <label>Kota</label>
                    <select class="form-control select2" style="width: 100%;" name="kota" id="kota"> 
                      <?php 
                      $listKota=mysqli_query($conn,"SELECT * FROM kota");
                      foreach($listKota as $kota) 
                      {
                        if($kota['nama_kota'] == $city){
                            echo "<option selected='selected' name=".$kota[nama_kota].">".$kota[nama_kota]."</option>";
                        }else{
                            echo "<option name=".$kota[nama_kota].">".$kota[nama_kota]."</option>";
                        }
                          
                      }    
                      ?>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"  placeholder="enter">Alamat</label>
                      <input type="text" class="form-control"   value="<?=$alamat?>" name="alamat">
                      <input type="hidden" class="form-control"  value="<?=$id?>" name="id">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">No telp</label>
                      <input type="tel" class="form-control"  value=<?=$notelp?> name="telp">
                    </div>
              </div>
              </form>
            </div>
          </div>
         
        </div>
      </div>
    </section>
            </div>
            </div>   		
            </div>
        </section>
    <hr><section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading"><h1>History Pemesanan</h1></span>
            <!-- <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p> -->
          </div>
        </div>
        <div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>No</th>
						        <th>Nama Merchant</th>
						        <th>Status</th>
						        <th>Total</th>
						        <th>View Detail</th>
						      </tr>
						    </thead>
						    <tbody id="template">
                <?php
                  $ctr=1;
                  $id_user=$_SESSION["loggedUser"];
                  $query="SELECT * from htransaksi where id_customer='$id_user' order by 1 desc limit 10";
                  $query=mysqli_query($conn,$query);
                  foreach ($query as $key => $value) {
                    $id_merchant="SELECT nama from merchant where id='$value[id_merchant]'";
                    $id_merchant=mysqli_fetch_assoc(mysqli_query($conn,$id_merchant));
                          echo"  <tr class='text-center'>
                          ";echo"  <td><a><span>$ctr</span></a></td>
                          ";
                            $ctr++;
                          echo"  
                          ";echo"  <td class='product-name'>$id_merchant[nama] </td>
                          ";echo"  <td class='price'>$value[status_htrans]</td>
                          ";echo"  <td class='total'>$value[subtotal]</td>
                          ";echo"  <td><button onclick='goto_detail(\"$value[id_htrans]\")'>View</button></td>
                          ";echo"</tr>
                          ";
                          
                      
                  }
              ?>
						    </tbody>
						  </table>
					  </div>
      </div>
    </section>
<?php
	include("footer.php");
?>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
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

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
<script>
  $("#home").css("color","blue");
  $(".profil").addClass("active");
</script>

<script>
function goto_detail(id){
  window.location.href='detail_history.php?id='+id+'';
}
  var check="<?=$check?>";
		if(check==-1){
			window.location.href="../../Admin/amel/TampilanLogin.php";
		}
</script>