<?php
    require_once("../../customer/connect.php");
    $query="SELECT * from user";
    $arr=mysqli_query($conn,$query);
    
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="inner">
				<img src="images/image-4.png" alt="" style="left:-400px;" class="image-1">
				<form action="" method="post">
					<h3> Bibik's Catering</h3>
					<h3 style="font-size:5px;">Register User</h3>
                    <div class="form-holder">
						<span class="lnr lnr-user"></span>
                        <input type="text" id="namadepan_akun" class="form-control" placeholder="Nama Depan" name="inpNamaDepan">
					</div>
                    <div class="form-holder">
						<span class="lnr lnr-user"></span>
                        <input type="text" id="namabelakang_akun" class="form-control" placeholder="Nama Belakang" name="inpNamaBelakang">
					</div>
                    <div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
                        <input type="text" id="nohp_akun" onkeyup="ceknohp()" class="form-control" placeholder="Nomor Telepon" name="inpNoHp">
                        <span class="cekhp"></span>
						
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
                        <input type="text" id="nama_akun" class="form-control" placeholder="Username" name="inpNama">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" name="inpEmail" id="email_akun" placeholder="Email" class="form-control">
                    </div>
                    <label> Pilih provinsi </label>
                    <select class="form-control select2" style="width: 100%;" name="provinsi">
                    
                    <?php 
                    $listMerch=mysqli_query($conn,"SELECT * FROM provinsi");
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
                    <!-- </form> -->
                  </select>
                  
                    <label> Pilih kota </label>
                    <select class="form-control select2" style="width: 100%;">
                    <?php 
                    $listKota=mysqli_query($conn,"SELECT * FROM kota");
                    $select2 = -1;
                    foreach($listKota as $kota) 
                    {
                        if($kota['id_provinsi'] ==  'PR001'){
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
                  <div class="form-holder" style="margin-top:20px;">
						<span class="lnr lnr-home"></span>
						<input type="text" class="form-control" placeholder="Alamat" name="inpAlamat" id="alamat_akun">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="text" class="form-control" placeholder="Password" name="inpPass" id="pass_akun">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="text" class="form-control" id="conpass_akun" onkeyup="cekpass()" placeholder="Confirm Password" name="inpConPass"> <span class="cekpass"></span>
					</div>
                    <button type='button' onclick='blok(\"$value[id_akun]\")' class='btn btn-block bg-gradient-secondary btn-lg'>Daftar</button>
                    <!-- <input type="submit" name="reg" value="Daftar" font-size:100px> -->
                    <!-- <button name="reg" value="Daftar">Daftar</button> -->

				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<script>
function cekRegister(){
    var username=$('#nama_akun').val();
    var nohp=$('#nohp_akun').val();
    var pass=$('#pass_akun').val();
    var conpass=$('#conpass_akun').val();
    var email=$('#email_akun').val();
    var namadepan=$('#namadepan_akun').val();
    var namabelakang=$('#namabelakang_akun').val();
    var alamat=$('#alamat_akun').val();
    $.ajax({
        method: "post",
        url: "check_regis.php",
        data: {
            username:username,
            nohp:nohp,
            pass:pass,
            conpass:conpass,
            email:email,
            namadepan:namadepan,
            namabelakang:namabelakang,
            alamat:alamat
        },
        success: function (response) {
            alert(response);
        }
    });
}
function ceknohp(no_hp){
    $.ajax({
        method: "post",
        url: "ceknohp.php",
        data: {
            nohp_akun:$("#nohp_akun").val()
        },
        success: function (data) {
            $(".cekhp").html(data); //nama span
        }
    });
}
function cekpass(){
    $.ajax({
        method: "post",
        url: "cekpass.php",
        data: {
            pass_akun:$("#pass_akun").val(),
            conpass_akun:$("#conpass_akun").val()
        },
        success: function (data) {
            $(".cekpass").html(data); //nama span
        }
    });
}
function toLogin(){
    $.ajax({
        method: "post",
        url: "login.php",
        success: function (data) {
            $(".kotak1").html(data);
        }
    }); 
}
</script>