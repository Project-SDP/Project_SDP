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
    <a href="index.php" class="brand-link">

      <span class="brand-text font-weight-light judul">Bibik's Catering</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar"  style="background:#c41a7d;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php
          if($_SESSION['pos']=="amel"){
            echo"<img src='../AdminLTE-master/dist/img/user2-160x160.jpg' class='img-circle elevation-2'>";
          }
          else if($_SESSION['pos']=="add"){
            echo"<img src='../../dist/img/user2-160x160.jpg' class='img-circle elevation-2'>";
          }else{
            echo"<img src='dist/img/user2-160x160.jpg' class='img-circle elevation-2'>";
          }
        ?>
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color:black;">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="color:black;">
        <?php
            if($_SESSION['pos']=="beranda"){
              echo"<li class='nav-item aktif'>";
            }else{
              echo"<li class='nav-item'>";
            }

            if($_SESSION['pos']=="amel"){
              echo "<a href='../AdminLTE-master/index.php' class='nav-link'>";
            }
            else if($_SESSION['pos']=="add"){
              echo "<a href='../../index.php' class='nav-link'>";
            }else{
              echo "<a href='index.php' class='nav-link'>";
            }
        ?>
              <i class="nav-icon fas fa-file fa-2x fa-2x"></i>
              <p>
                Laporan
                <span class="badge badge-info right "></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p> 
                Tambah
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <?php
                if($_SESSION['pos']=="amel"){
                  echo "<a href='../AdminLTE-master/pages/forms/addMerchant.php' class='nav-link'>";
                }
                else if($_SESSION['pos']=="add"){
                  echo "<a href='addMerchant.php' class='nav-link'>";
                }else{
                  echo "<a href='pages/forms/addMerchant.php' class='nav-link'>";
                }
              ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p> Merchant</p>
                </a>
              </li>
              <li class="nav-item">
              <?php
                if($_SESSION['pos']=="amel"){
                  echo "<a href='../AdminLTE-master/pages/forms/addMenu.php' class='nav-link'>";
                }
                else if($_SESSION['pos']=="add"){
                  echo "<a href='addMenu.php' class='nav-link'>";
                }else{
                  echo "<a href='pages/forms/addMenu.php' class='nav-link'>";
                }
              ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p> Menu</p>
                </a>
              </li>
              <li class="nav-item">
              <?php
                if($_SESSION['pos']=="amel"){
                  echo "<a href='TampilanInsertPromo.php' class='nav-link'>";
                }
                else if($_SESSION['pos']=="add"){
                  echo "<a href='../../../amel/TampilanInsertPromo.php' class='nav-link'>";
                }else{
                  echo "<a href='../amel/TampilanInsertPromo.php' class='nav-link'>";
                }
              ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p> Promo</p>
                </a>
              </li>
              <li class="nav-item">
              <?php
                if($_SESSION['pos']=="amel"){
                  echo "<a href='TampilanInsertKategori.php' class='nav-link'>";
                }
                else if($_SESSION['pos']=="add"){
                  echo "<a href='../../../amel/TampilanInsertKategori.php' class='nav-link'>";
                }else{
                  echo "<a href='../amel/TampilanInsertKategori.php' class='nav-link'>";
                }
              ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p> Kategori</p>
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
              <?php
                if($_SESSION['pos']=="amel"){
                  echo "<a href='../AdminLTE-master/editMerchant.php' class='nav-link'>";
                }
                else if($_SESSION['pos']=="add"){
                  echo "<a href='../../editMerchant.php' class='nav-link'>";
                }else{
                  echo "<a href='editMerchant.php' class='nav-link'>";
                }
              ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Merchant</p>
                </a>
              </li>
              <li class="nav-item">
              <?php
                if($_SESSION['pos']=="amel"){
                  echo "<a href='../AdminLTE-master/editMenu.php' class='nav-link'>";
                }
                else if($_SESSION['pos']=="add"){
                  echo "<a href='../../editMenu.php' class='nav-link'>";
                }else{
                  echo "<a href='editMenu.php' class='nav-link'>";
                }
              ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Menu</p>
                </a>
              </li>
              <li class="nav-item">
              <?php
                if($_SESSION['pos']=="amel"){
                  echo "<a href='TampilanDeletePromo.php' class='nav-link'>";
                }
                else if($_SESSION['pos']=="add"){
                  echo "<a href='../../../amel/TampilanDeletePromo.php' class='nav-link'>";
                }else{
                  echo "<a href='../amel/TampilanDeletePromo.php' class='nav-link'>";
                }
              ?>                  
              <i class="far fa-circle nav-icon"></i>
                  <p>Data Promo</p>
                </a>
              </li>
              <li class="nav-item">
              <?php
                if($_SESSION['pos']=="amel"){
                  echo "<a href='TampilanDeleteKategori.php' class='nav-link'>";
                }
                else if($_SESSION['pos']=="add"){
                  echo "<a href='../../../amel/TampilanDeleteKategori.php' class='nav-link'>";
                }else{
                  echo "<a href='../amel/TampilanDeleteKategori.php' class='nav-link'>";
                }
              ?>                  
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
    <!-- /.sidebar -->
  </aside>