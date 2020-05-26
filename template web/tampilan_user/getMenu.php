<?php
    require_once("connect.php");
    $kategori=$_POST["kategori"];
    $search=$_POST["search"];
    $_SESSION["ctr"]=0;
    if($kategori=="semua"){

        if($search=="semua"){
            $query=mysqli_query($conn,"SELECT m.id_menu,m.nama_menu,m.harga_menu,m.gambar_menu,m.id_merchant from menu m join merchant me on m.id_merchant=me.id ");
        }else{
            $query=mysqli_query($conn,"SELECT m.id_menu,m.nama_menu,m.harga_menu,m.gambar_menu,m.id_merchant from menu m join merchant me on m.id_merchant=me.id where m.nama_menu like '%$search%'");
        }
    }else{
        if($search=="semua"){
            $query=mysqli_query($conn,"SELECT m.id_menu,m.nama_menu,m.harga_menu,m.gambar_menu,m.id_merchant from menu m join merchant me on m.id_merchant=me.id where me.kategori='$kategori'");
        }else{
            $query=mysqli_query($conn,"SELECT m.id_menu,m.nama_menu,m.harga_menu,m.gambar_menu,m.id_merchant from menu m join merchant me on m.id_merchant=me.id where me.kategori='$kategori' and m.nama_menu like '%$search%'");
        }
        
    }
    $ctr=0;
    foreach ($query as $key => $value) {
        $ctr++;
        $harga="Rp " . number_format($value["harga_menu"],2,',','.');
        $query_merchant=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from merchant where id='$value[id_merchant]'"));
        $halal="";
        if($query_merchant["Halal"]==1){
            $halal="../../gambar/image/haram.png";
        }
        echo"<div class='col-md-6 col-lg-3 ftco-animate'>
        ";echo"	<div class='product'>
        ";echo"		<a href='product-single.php?id=$value[id_menu]' class='img-prod'><img style='background-size: cover;width:255px;height:180px'class='img-fluid' src='../../gambar/image/$value[gambar_menu]' alt='Colorlib Template'>
        ";echo"			
        ";echo"			<div class='overlay'></div>
        ";echo"		</a>
        ";echo"		<div class='text py-3 pb-4 px-3 text-center'>  
        ";echo"			<h3><a href='#'>$value[nama_menu]</a><img style='background-size:cover;width:20px;height:20px' src='$halal' onerror='this.onerror=null; this.src='Default.jpg'' alt=''></h3>
        ";echo"			<div class='d-flex'>
        ";echo"				<div class='pricing'>
        ";echo"					<p class='price'><span class='price-sale'>$harga</span></p>
        ";echo"				</div>
        ";echo"			</div>
        ";echo"			<div class='bottom-area d-flex px-3'>
        ";echo"				<div class='m-auto d-flex'>
        ";echo"					<a href='product-single.php?id=$value[id_menu]' class='add-to-cart d-flex justify-content-center align-items-center text-center'>
        ";echo"						<span><i class='ion-ios-menu'></i></span>
        ";echo"					</a>
        ";echo"					<a onclick='toCart(\"$value[id_menu]\")'class='buy-now d-flex justify-content-center align-items-center mx-1'>
        ";echo"						<span><i class='ion-ios-cart'></i></span>
        ";echo"					</a>
        ";echo"				</div>
        ";echo"			</div>
        ";echo"		</div>
        ";echo"	</div>
        ";echo"</div>";
    }
?>
<script>

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
</script>
