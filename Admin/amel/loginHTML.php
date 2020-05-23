

        <!-- Username : <input type="text" name="nama_akun" id="nama_akun" ><br>
        Nomer Hp : <input type="text" name="nohp_akun" id="nohp_akun" onkeyup="ceklognohp()"> <span class="ceklognohp"></span><br>
        Password : <input type="text" name="pass_akun" id="pass_akun"><br> -->
        <style>
                .grid-item{
                        display:grid;
                        width: auto;
                        height: auto;
                        align-content: center;
                }

               

        </style>
        <script>
                var logAs ='Customer';
                $(document).ready(function(){
                        chooseCust();
                });

                function chooseCust(){
                        $("#cust").attr("checked", "checked");
                        $("#merc").removeAttr("checked");
                        logAs ='Customer';
                }

                function chooseMerc(){
                        
                        $("#merc").attr("checked", "checked");
                        $("#cust").removeAttr("checked");
                        logAs ='Merchant';
                }

        </script>

        </script>
        <h3> Bibik's Catering</h3>
        <h3 style="font-size:15px;">==Login sebagai==</h3>
        <div class="grid-container" style="display: grid ;grid-template-columns: 1fr 1fr ;
                grid-template-rows: auto; grid-column-gap:10px;
                align-content:center;">
                <div class="grid-item"><button onclick="chooseCust()"><input type="checkbox" id="cust" >
                        Customer</button></div>
                <div class="grid-item"><button onclick="chooseMerc()"><input type="checkbox" id='merc'>
                        Merchant</button></div>
        </div>
        <br>

        <div class="form-holder" >
                <input type="text" id="inp" class="form-control" placeholder="Email / Username / No.HP" name="inpUserLog">
        </div>
        <div class="form-holder">
                <span class="lnr lnr-eye" onmousedown="showpassword('idPassLog')" onmouseup="hidepassword('idPassLog')"></span>
                <input type="password" id="inpPass" class="form-control"  placeholder="Password" name="inpNoHp">
                <a href="User/Login/forget.php" tyle="text-align: center">Lupa Password ?</a>
        </div>

        <button class="btnLogin btn" type="submit" onclick="ceklogin()">Login</button>

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
                As:logAs,
                inp:$("#inp").val(),
                pass:$("#inpPass").val()
            },
            success: function (data) {
                if(data=='Login Gagal'){
                        alert(data);
                }else{
                        alert(data);
                        if(data=='2'){
                                alert("hi Merchant");
                        }else{
                                toHome(); //home e User
                        }
                }
                
            }
        });
    }
    
   
        </script>