

        <!-- Username : <input type="text" name="nama_akun" id="nama_akun" ><br>
        Nomer Hp : <input type="text" name="nohp_akun" id="nohp_akun" onkeyup="ceklognohp()"> <span class="ceklognohp"></span><br>
        Password : <input type="text" name="pass_akun" id="pass_akun"><br> -->
        <h3> Bibik's Catering</h3>
        <h3 style="font-size:15px;">Login User</h3>
        <div class="form-holder" >
                <input type="text" id="inp" class="form-control" placeholder="Email / Username / No.HP" name="inpUserLog">
        </div>
        <div class="form-holder">
                <span class="lnr lnr-eye" onmousedown="showpassword('idPassLog')" onmouseup="hidepassword('idPassLog')"></span>
                <input type="password" id="inpPass" class="form-control"  placeholder="Password" name="inpNoHp">
        </div>

        <button class="btnLogin" type="submit" onclick="ceklogin()">Login</button>

        <button class="" type="submit" onclick="toRegister()">Register</button>
        <h4 style="text-align: center">Belum punya Akun???</h4>
        <span class="ceklogpass"></span>

        <script>

        function toRegister(){ 
                $.ajax({
                method: "post",
                url: "registerHTML.php",
                success: function (data) {
                        $(".kotak").html(data);
                }
                }); 
        }

        function ceklogin(){  
        $.ajax({
            method: "post",
            url: "User/Login/cekLogin.php",
            data: {
                inp:$("#inp").val(),
                pass:$("#inpPass").val()
            },
            success: function (data) {
                alert(data);
            }
        });
    }
    
   
        </script>