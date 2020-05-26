 <!-- Main Sidebar Container -->
<style>
  p,i{
    color:black;
  }
  @font-face {
  font-family: myFirstFont;
  src: url('Redemption.ttf');
  }

  .judul{
    font-family: myFirstFont;
    font-size:50px;
    color:black;
  }
</style>
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background:#99ccff;">

      <span class="brand-text font-weight-light judul">Bibik's Catering</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background:#99ccff;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color:black;">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="color:black;">
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
    <!-- /.sidebar -->
  </aside>