<?php
    require_once("connect.php");
    $query="SELECT * from user";
    $arr=mysqli_query($conn,$query);
    
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
		<link rel="stylesheet" href="../../template log reg/colorlib-regform-26/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../../template log reg/colorlib-regform-26/css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="inner">
				<img src="../../template log reg/colorlib-regform-26/images/image-4.png" alt="" style="left:-400px;" class="image-1">
                <div class="kotak card" style="Padding: 10% ; border-radius:5% ; margin-top:5%">
					<h3> Bibik's Catering</h3>
					<h3 style="font-size:15px;">Register User</h3>
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
                        <input type="text" id="nohp_akun" maxlength='13' onkeypress="NumberOnly(event)" class="form-control" placeholder="Nomor Telepon" name="inpNoHp">
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
                    <select class="form-control select2" style="width: 100%;" id="provinsi"  onchange="ajaxKota()">
                    
                    <?php 
                        $listMerch=mysqli_query($conn,"SELECT * FROM provinsi");
                        $select = -1; 
                        foreach($listMerch as $merch) 
                        {
                            if($select == -1){
                                echo "<option selected='selected' value=".$merch["id_provinsi"].">".$merch["nama_provinsi"]."</option>";
                                $select = 0;
                            }else{
                                echo "<option value=".$merch["id_provinsi"].">".$merch["nama_provinsi"]."</option>";
                            }
                        }
                    ?>
                    </div>
                  </select>
                    <label> Pilih kota </label>
                    <select class="form-control select2" id='kota' style="width: 100%;">
                   
                    </select>
                  <div class="form-holder" style="margin-top:20px;">
						<span class="lnr lnr-home"></span>
						<input type="text" class="form-control" placeholder="Alamat" name="inpAlamat" id="alamat_akun">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="text" class="form-control" onmousedown="showpassword('pass_akun')" onmouseup="hidepassword('pass_akun')" placeholder="Password" name="inpPass" id="pass_akun">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="text" class="form-control" onmousedown="showpassword('conpass_akun')" onmouseup="hidepassword('conpass_akun')" id="conpass_akun"  placeholder="Confirm Password" name="inpConPass"> <span class="cekpass"></span>
					</div>



                    <button onclick='cekRegister()' class='btn btn-block bg-gradient-secondary btn-lg'>Daftar</button>
                    <!-- <input type="submit" name="reg" value="Daftar" font-size:100px> -->
                    <!-- <button name="reg" value="Daftar">Daftar</button> -->

				<img src="../../template log reg/colorlib-regform-26/images/image-2.png" alt="" class="image-2">
			    </div>
		</div>
		
		<script src="jquery-min.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<script>
function NumberOnly(evt){
    var input= String.fromCharCode(evt.which);
    if(!(/[0-9]/.test(input))){
        evt.preventDefault();
    }
}
function ValidateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function showpassword(id){
    document.getElementById(id).type='text';
}
function hidepassword(id){
    document.getElementById(id).type='password';
}
ajaxKota();
function ajaxKota(){
    console.log($("#provinsi").val());
    
    $.ajax({
        method: "post",
        url: "Wilayah/ajaxKota.php",
        data: {
            daerah:$("#provinsi").val()
        },
        success: function (response) {
            $("#kota").html(response);
        }
    });
}
function cekRegister(){
    let  username=$('#nama_akun').val();
    let  nohp=$('#nohp_akun').val();
    let  pass=$('#pass_akun').val();
    let  conpass=$('#conpass_akun').val();
    let  email=$('#email_akun').val();
    let  namadepan=$('#namadepan_akun').val();
    let  namabelakang=$('#namabelakang_akun').val();
    let  kota=$('#kota').val();
    let  alamat=$('#alamat_akun').val();

    let validasiEmail = ValidateEmail(email);

            $.ajax({
            method: "post",
            url: "User/Register/check_Regis.php",
            data: {
                username:username,
                nohp:nohp,
                pass:pass,
                conpass:conpass,
                email:email,
                namadepan:namadepan,
                namabelakang:namabelakang,
                alamat:alamat,
                valEmail:validasiEmail,
                kota:kota
            },
            success: function (response) {
                alert(response);
            }
        });
  
}
// function ceknohp(no_hp){
//     $.ajax({
//         method: "post",
//         url: "ceknohp.php",
//         data: {
//             nohp_akun:$("#nohp_akun").val()
//         },
//         success: function (data) {
//             $(".cekhp").html(data); //nama span
//         }
//     });
// }
// function cekpass(){
//     $.ajax({
//         method: "post",
//         url: "cekpass.php",
//         data: {
//             pass_akun:$("#pass_akun").val(),
//             conpass_akun:$("#conpass_akun").val()
//         },
//         success: function (data) {
//             $(".cekpass").html(data); //nama span
//         }
//     });
// }
function toLogin(){
    $.ajax({
        method: "post",
        url: "User/Login/loginuser.php",
        success: function (data) {
            $(".kotak1").html(data);
        }
    }); 
}
</script>