<div class="kotak1">
    <h1>Login</h1>
    <div class="kotak2">
        Username : <input type="text" name="nama_akun" id="nama_akun" ><br>
        Nomer Hp : <input type="text" name="nohp_akun" id="nohp_akun" onkeyup="ceklognohp()"> <span class="ceklognohp"></span><br>
        Password : <input type="text" name="pass_akun" id="pass_akun"><br>
        <input type="submit" value="Menuju Halaman Register" name="btnRegister"  onclick="toRegister()">
        <button class="btnLogin" type="submit" onclick="ceklogin()">Login</button>
        <span class="ceklogpass"></span>
    </div>
</div>
<script src="jquery-min.js"></script>
<script>
    
    function ceklogin(){
        $.ajax({
            method: "post",
            url: "checkLogin.php",
            data: {
                nama_akun:$("#nama_akun").val(),
                nohp_akun:$("#nohp_akun").val(),
                pass_akun:$("#pass_akun").val()
            },
            success: function (data) {
               
            }
        });
    }
    
    
    function ceklognohp(){
        $.ajax({
            method: "post",
            url: "ceklognohp.php",
            data: {
                nohp_akun:$("#nohp_akun").val()
            },
            success: function (data) {
                $(".ceklognohp").html(data); //nama span
            }
        });
    }
    
    function toRegister(){
        clearTimeout(timerout);
        $.ajax({
            method: "post",
            url: "register.php",
            success: function (data) {
                $(".kotak1").html(data);
            }
        }); 
    }
</script>