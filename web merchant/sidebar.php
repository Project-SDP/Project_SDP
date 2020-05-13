<?php
    require_once("conn.php");
    $nama = ""; 
    $pp="placeholder.jpg";
    
    if(isset($_SESSION['status'])){
        $nama = $_SESSION['status'];
        // echo "....................................................................".$nama;
    }else{
        $_SESSION['status'] = -1;  
    }
    
    $users =mysqli_query($link,"select * from merchant");
    foreach($users as $user){
      if ($nama == $user['email']){
        $nama = $user['nama'];
        $pp = $user['profilepic'];
      }
    }


    // if(isset($_POST['logout'])){
    //     $_SESSION['status'] = -1;  
    //     header("location:../../template%20log%20reg/colorlib-regform-26/login.php");
    // }
    
?>
 <!-- Main Sidebar Container -->
<style>

  p,i{
    color: white;
    font-family: 'Avenir',sans-serif;
    font-size: 18px;
    line-height: 1.6;
  }
  @font-face {
    font-family: myFirstFont;
    src: url('Redemption.ttf');
  }

  .judul{
    font-family: myFirstFont;
    font-size:40px;
    color:white;
    margin-left:25px;
  }
  .aktif{
    background: rgba(300,300,300,.1);
    border-left: 5px solid #fff;
  }
  .nav-link{
    padding-left:10px;
  }
  ul{
    width:200px;
  }
  .os-content{
    padding:0px;
  }
  .my-custom-scrollbar {
    position: relative;
    height: 400px;
    overflow: auto;
  }
  .table-wrapper-scroll-y {
    display: block;
  }

  ::-webkit-scrollbar {
    width: 10px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
  }
  
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #a02069; 
    border-radius: 10px;
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #b31e3c; 
  }
</style>
 <aside class="main-sidebar sidebar-dark-primary elevation-4"  style="background:#c41a7d;">
    <!-- Brand Logo -->

    <a href="index3.html" class="brand-link" style="background:#c41a7d; border-bottom:none; margin-top:20px;">
      <span class="brand-text judul" style="padding-left:5px;">Bibik's Catering</span>
      <div class="image" style="padding-left:70px;">
        <?php
          if($_SESSION['pos']=="beranda"||$_SESSION['pos']=="menuEdit"){
            echo "<img src='pages/forms/logo.png' class='img-circle elevation-2' style='width:80px; height:80px;'>";
          }
          else if($_SESSION['pos']=="web"){
            echo "<img src='forms/logo.png' class='img-circle elevation-2' style='width:80px; height:80px;'>";
          }
          else if($_SESSION['pos']=="promo"||$_SESSION['pos']=="jadwal"){
            echo "<img src='../pages/forms/logo.png' class='img-circle elevation-2' style='width:80px; height:80px;'>";
          }
          else{
            echo "<img src='logo.png' class='img-circle elevation-2' style='width:80px; height:80px;'>";
          }
        ?>
        </div>
    </a>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex cc_cursor" style="padding:0 30px; border-bottom:none; background:silver;">
      <div class="image" style="padding-top:25px;">
          <?php
              if($_SESSION['pos']=="beranda"||$_SESSION['pos']=="menuEdit"){
                echo "<img src='pages/forms/images".$pp."' class='img-circle elevation-2' style='width:50px; height:50px;'>";
              }else if($_SESSION['pos']=="web"){
                echo "<img src='forms/images".$pp."' class='img-circle elevation-2' style='width:50px; height:50px;'>";
              }
              else if($_SESSION['pos']=="promo"||$_SESSION['pos']=="jadwal"){
                echo "<img src='../pages/forms/images".$pp."' class='img-circle elevation-2' style='width:50px; height:50px;'>";
              }
              else{
                echo "<img src='images".$pp."' class='img-circle elevation-2' style='width:50px; height:50px;'>";
              }
            ?>
          </div>
        <div class="info cc_cursor" style="padding-top:25px;">
         Selamat datang,
          <a href="#" class="d-block" style="color:black; font-weight:bold" ><?=$nama?></a>
        </div>
       
      </div>
    <!-- Sidebar -->
    <div class="sidebar" style="background:#c41a7d;">
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
        <?php
            if($_SESSION['pos']=="beranda"){
              echo"<li class='nav-item aktif'>";
            }else{
              echo"<li class='nav-item'>";

            }

        ?>
            <a href="../../index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <?php
            if($_SESSION['pos']=="profil"){
              echo"<li class='nav-item aktif'>";
            }else{
              echo"<li class='nav-item'>";

            }
          ?>       
            <a href="pages/forms/profile.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <?php
            if($_SESSION['pos']=="web"){
              echo"<li class='nav-item aktif'>";
            }else{
              echo"<li class='nav-item'>";
            }
          ?>    
            <a href="../website.php" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Website
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <?php
            if($_SESSION['pos']=="pesanan"){
              echo"<li class='nav-item aktif'>";
            }else{
              echo"<li class='nav-item'>";
            }
          ?>               
           <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Pesanan
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <?php
            if($_SESSION['pos']=="menu"){
              echo"<li class='nav-item has-treeview aktif'>";
            }else{
              echo"<li class='nav-item has-treeview'>";
            }
          ?>    
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="forms/addMenu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../editMenu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat</p>
                </a>
              </li>
            </ul>
          </li>
          <?php
            if($_SESSION['pos']=="promo"){
              echo"<li class='nav-item has-treeview aktif'>";
            }else{
              echo"<li class='nav-item has-treeview'>";
            }
          ?>    
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Promosi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="amel/TampilanInsertPromo.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="TampilanDeletePromo.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat</p>
                </a>
              </li>
            </ul>
          </li>
          <?php
            if($_SESSION['pos']=="jadwal"){
              echo"<li class='nav-item aktif'>";
            }else{
              echo"<li class='nav-item'>";
            }
          ?>   
            <a href="../pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Jadwal
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <?php
            if($_SESSION['pos']=="gallery"){
              echo"<li class='nav-item aktif'>";
            }else{
              echo"<li class='nav-item'>";
            }
          ?>   
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Galeri
              </p>
            </a>
          </li>
                
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    </div>
    <!-- /.sidebar -->
  </aside>