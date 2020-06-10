<?php
    session_start();
    session_destroy();
    require("connect.php");
    $query="SELECT * from user";
    $arr=mysqli_query($conn,$query);
    if(isset($_POST['login'])){
        $nama = $_POST['user'];
        // echo $nama;
        $pass = $_POST['pass'];
        if($nama=="admin"&&$pass=="nimda"){
            header("location:../AdminLTE-master/index.php");
        }else{
            echo"<script>alert('login gagal')</script>";
        }
    }
?>
<!DOCTYPE html>
<style>
    .kotak{
        width: 100%;
        position: relative;
        z-index: 9;
        padding: 77px 61px 66px;
        background: #fff;
    }
</style>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registrasi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="../../template%20log%20reg/colorlib-regform-26/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../../template%20log%20reg/colorlib-regform-26/css/style.css">
        <script src="jquery-min.js"></script>
       

       
	</head>
	<body>
            <input type="hidden" id="tempHalaman" value="<?php  if(isset($_GET['halaman'] ))echo $_GET['halaman'] ?>">

            <button onclick="toHome()" style="width: 250px ; position:absolute;margin-left:20px ; background :violet">
                <i class="lnr lnr-home"></i> 
                 Bibik's Home 
            </button>
         
        <form action="#" method="post" style="background:grey;color:white;">
		<div class="wrapper" style="background:grey;">
			<div class="inner">
				<img src="../../template log reg/colorlib-regform-26/images/image-4.png" alt="" style="left:-400px;" class="image-1">                
                <div class="kotak card" style="Padding: 10% ; border-radius:5% ; margin-top:5%;box-shadow:10px 10px lightgray">
                <h3> Bibik's Catering Admin</h3>
        <br>
        <div class="form-holder" >
            <input type="text" id="inp" class="form-control" placeholder="Email / Username / No.HP" name="user">
        </div>
        <div class="form-holder">
            <span class="lnr lnr-eye" onmousedown="showpassword('idPassLog')" onmouseup="hidepassword('idPassLog')"></span>
            <input type="password" id="inpPass" class="form-control"  placeholder="Password" name="pass">
            <a id="forgetPass" style="text-align: center">Lupa Password ?</a>
        </div>
        <button class="btnLogin btn" type="submit" name="login">Login</button>
        </form>
        </div>
        </div>
        </div>  
	</body>
</html>
<script>
function toHome(){
    window.location="../../template%20web/tampilan_user/index.php";
}
</script>

