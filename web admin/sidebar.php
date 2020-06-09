<?php
    require_once("conn.php");
    $nama = ""; 
    $pp="placeholder.jpg";
    
   
?>

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

    <a href="index.php" class="brand-link" style="background:#c41a7d; border-bottom:none; margin-top:20px;">
      <span class="brand-text judul" style="padding-left:5px;">Bibik's Catering</span>
      <div class="image" style="padding-left:70px;">
      <?php
       if($_SESSION['pos']=="menu"||$_SESSION['pos']=="profil"){  
        echo"<img src='../../image/logo.png' class='img-circle elevation-2' style='width:80px; height:80px;'>";    
       }else if($_SESSION['pos']=="editMenu"){
          echo"<img src='image/logo.png' class='img-circle elevation-2' style='width:80px; height:80px;'>";
       }else{
          echo"<img src='../image/logo.png' class='img-circle elevation-2' style='width:80px; height:80px;'>";
       }
      ?>
        </div>
    </a>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex cc_cursor" style="padding:0 8px; border-bottom:none; background:silver;">
        <div class="info cc_cursor" style="padding-top:25px;">
          <labek><b>Selamat datang, Admin!</b></label>
          <a href="#" class="d-block" style="color:black; font-weight:bold"><?=$nama?></a>
        </div>
       
      </div>
    <!-- Sidebar -->
    <div class="sidebar" style="background:#c41a7d;">
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p> 
                Edit
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/addMerchant.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Merchant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/addMenu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/addMenu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Promo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/addMenu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Kategori</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Lihat Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/editMerchant.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Merchant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editMenu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Promo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kategori</p>
                </a>
              </li>
            </ul>
          </li>     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    </div>
    <!-- /.sidebar -->
  </aside>