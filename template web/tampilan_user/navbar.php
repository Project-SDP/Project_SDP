<?php
	session_start();
	// session_destroy();
	$nama = "";
    if(isset($_SESSION['loggedUser'])){
        $nama = $_SESSION['loggedUser'];
    }else{
        header("location:../../Admin/amel/TampilanLogin.php"); 
    }
    // echo $_SESSION['loggedUser'];
    if(isset($_POST['logout'])){
        $_SESSION['loggedUser'] = -1;  
        header("location:../../template%20log%20reg/colorlib-regform-26/login.php");
    }
	if(!isset($_SESSION["allfood"])){
		$_SESSION["allfood"]="";
		$_SESSION["tpromo"]="Rp 0,00";
		$_SESSION["promo"]=0;
		$_SESSION["ftotal"]="Rp 0,00";
		$_SESSION["fgrandtotal"]="Rp 0,00";
		$_SESSION["total"]=0;
		$_SESSION["grandtotal"]=0;
		$_SESSION["menu"]= array();
		$_SESSION["ongkir"]=0;
		$_SESSION["loggedUser"]="";
		
	}
?>
<style>
	.button_right_02 {
		float: right;
		font-size: 12px;
		font-family: "Poppins";
		color: black;
		border: 1px black solid;
		text-align: center;
		width: 113px;
		height: 39px;
		padding: 10px;
		margin-right:10px;
		line-height: 1;
	}
	.active{
		color:#c41a7d;
		font-weight:bold;
	}
  </style>
<div class="py-1" style="background:#c41a7d;">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
						<img style='background-size: cover;width:20px;height:20px' src='../../gambar/image/iconwa.png' >
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
						    <a class="text" href='https://wa.me/6281249158809?text=Bibiks%20Catring%20Disini'>+081249158809</a>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">bibikscatering@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
	    <div class="container">
	      <a class="navbar-brand" href="index.html" style="color:black;font-size:30px;">Bibik's Catering</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link"><div class="active">Home</div></a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="kategori.php?kategori=NasiKotak">Nasi Kotak</a>
              	<a class="dropdown-item" href="kategori.php?kategori=SnacksBox">Snacks Box</a>
                <a class="dropdown-item" href="kategori.php?kategori=Tumpeng">Tumpeng</a>
                <a class="dropdown-item" href="kategori.php?kategori=Prasmanan">Prasmanan</a>
                <a class="dropdown-item" href="cart.php">Cart</a>
                <a class="dropdown-item" href="../Midtrans/trans/index.php" target="_blank">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.php" id="restaurant" class="nav-link">Restaurant</a></li>
	          <li class="nav-item"><a href="kupon.php" id="kupon" class="nav-link">Kupon</a></li>
			  <li class="nav-item"><a href="review.php" id="review" class="nav-link">Review</a></li>
			  <li class="nav-item cta cta-colored"><a href="cart.php" id="cart" class="nav-link"><span class="icon-shopping_cart"></span>[<?php 
			  	$allMenu=explode('||',$_SESSION['allfood']);
    			$allMenu=count($allMenu)-1; echo $allMenu?>]</a></li>

	        </ul>
	      </div>
		</div>
		<?php
			if($nama==-1){
				echo"<div class='btn' style='margin-right:100px;'>";
				echo"<a href='../../Admin/amel/TampilanRegister.php'><div class='button_right_02 new2019-05-16'>Daftar</div></a>";
				echo"<a href='../../Admin/amel/TampilanLogin.php'><div class='button_right_02 new2019-05-16'>Masuk</div></a>";
				echo"</div>";
			}else{
			?>
				<div class="panel-group" style="left:1360px; position:absolute;">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse1" class="icon-menu" style="color:#c41a7d;"></a>
							<a data-toggle="collapse" href="#collapse1" style="font-size:20px; color:#c41a7d;">Hai ,<?php echo $nama; ?></a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse">
						<a href="../../Admin/amel/TampilanLogin.php"><div style="color:#c41a7d;">Keluar</div></a>
					</div>
				</div>
				</div>
		<?php } ?>
	  </nav>