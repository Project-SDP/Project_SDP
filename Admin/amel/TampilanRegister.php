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
        <script src="jquery-min.js"></script>
       

       <script>
            $(document).ready(function(){
                let temp = $("#tempHalaman").val();

                if(temp=='register'){
                    $.ajax({
                        method: "post",
                        url: "registerHTML.php",
                        success: function (data) {
                            $(".kotak").html(data);
                        }
                    }); 
                }else if (cekRegister=='login'){
                    $.ajax({
                        method: "post",
                        url: "loginHTML.php",
                        success: function (data) {
                            $(".kotak").html(data);
                        }
                    }); 
                }else{
                    $.ajax({
                        method: "post",
                        url: "loginHTML.php",
                        success: function (data) {
                            $(".kotak").html(data);
                        }
                    }); 
                }


            });

            function toHome(){
                window.location="../../template%20web/tampilan_user/mainpage.php";
            }
            function toMerchant(){

                window.location="../../template%20log%20reg/colorlib-regform-26/index.php";
            }
        </script>


	</head>
	<body>
            <button onclick="toHome()" style="width: 250px ; position:absolute;margin-left:20px ; background :violet">
                <i class="lnr lnr-home"></i> 
                 Bibik's Home 
            </button>
            <input type="hidden" id="tempHalaman" value="<?php  if(isset($_GET['halaman'] ))echo $_GET['halaman'] ?>">

        <button class="btn btn-primary" style="position: absolute; background:#ff99b5;right: 10px;
            width :auto ;padding:10px;border-radius: 8%" onclick="toRegMerchant()"> Daftar sebagai Merchant  </button> 
		<div class="wrapper">
			<div class="inner">
				<img src="../../template log reg/colorlib-regform-26/images/image-4.png" alt="" style="left:-400px;" class="image-1">
                
                
                <div class="kotak card" style="Padding: 10% ; border-radius:5% ; margin-top:5%;box-shadow:10px 10px lightgray">
                  
			    </div>


		     </div>
             </div>  
		
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
    if(length(nohp)==13){
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
    }else{
        alert("nomor HP harus 13 digit ");
    }
    
  
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
        url: "loginHTML.php",
        success: function (data) {
            $(".kotak").html(data);
        }
    }); 
}
function toRegMerchant(){
    $.ajax({
        method: "post",
        url: "../../template%20log%20reg/colorlib-regform-26/index.php",
        success: function (data) {
            document.title = 'Register';
            $(".kotak").html(data);
        }
    }); 
}



    

</script>

</script>