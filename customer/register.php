<?php
    require_once("connect.php");
  
?>
<div class="kotak1">
        <h1>Register</h1>
        Username : <input type="text" name="inpNama" id="nama_akun"> <br>
        No HP : <input type="text" name="inpNoHp" onkeyup="ceknohp()" id="nohp_akun"><span class="cekhp"></span> <br>
        Password : <input type="text" name="inpPass" id="pass_akun"> <br>
        Confirm Password : <input type="text" name="inpConPass"  onkeyup="cekpass()" id="conpass_akun"> <span class="cekpass"></span><br>
        Email : <input type="text" name="inpEmail" id="email_akun"> <br>
        Nama Depan : <input type="text" name="inpNamaDepan" id="namadepan_akun"> <br>
        Nama Belakang : <input type="text" name="inpNamaBelakang" id="namabelakang_akun"> <br>
        Alamat : <input type="text" name="inpAlamat" id="alamat_akun"> <br>
        <button class="btnRegister" type="submit" onclick="cekRegister()">Register</button>
        <input type="submit" value="Menuju Halaman Login" onclick="toLogin()" name="btnLogin">
        <div class="keterangan"></div>

</div>
<script src="jquery-min.js"></script>
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