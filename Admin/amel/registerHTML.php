                    
                    
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
        require_once("connect.php");
        $listMerch= mysqli_query($conn,"SELECT * FROM provinsi");
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
    <button onclick='toLogin()' class='btn btn-block bg-gradient-secondary btn-lg'>Masuk</button>
    <h4 class="" style="text-align: center;"> Sudah Punya Akun ?? </h4>
    <!-- <input type="submit" name="reg" value="Daftar" font-size:100px> -->
    <!-- <button name="reg" value="Daftar">Daftar</button> -->

    <img src="../../template log reg/colorlib-regform-26/images/image-2.png" alt="" class="image-2">