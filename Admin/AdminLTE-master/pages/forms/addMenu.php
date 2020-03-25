<?php
  require("conn.php");
  if(isset($_POST['add'])){
    $merchant = $_POST['merch'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $status = $_POST['my-checkbox'];
    if($merchant!="" && $nama!=""&& $harga!=""){
      $listmenu = mysqli_query($link,"select * from menu");
      $ctr = 0;
      foreach($listmenu as $menu){
        $ctr++;
      }
      $ctr2 = 0;
      foreach($listmenu as $menu){
        if($ctr2 < $ctr){
          $ctr2++;
          if($menu['nama_menu']==$nama && $menu['id_merchant']==$merchant){
            echo "menu sudah terdaftar pada merchant ini!";
            break;  
          }
        }else{
          mysqli_query($link,"INSERT INTO menu(id_menu,nama_menu,harga_menu,status_menu,id_kategori,id_merchant) VALUES('','$nama','$harga','$status','$kategori','$merchant')");
        }
      }

    }else{
      alert("semua field harus terisi!");
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <?php
    include("navbar.php");
    include("sidebar.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Menu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-6">

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Menu Baru</h3>
              </div>
              <div class="card-body">
                <!-- Date dd/mm/yyyy -->
                <form role="form" action="#" method="post"> 
                <div class="form-group">
                    <label for="exampleInput">Merchant</label>
                    <!-- <input type="nama" class="form-control" placeholder="Masukkan ID merchant" name="merchant"> -->
                    <select class='form-control select2' style='width: 100%;'  name='merch' id='merch'> ";
                    <?php
                    $listmerch=mysqli_query($link,"SELECT * FROM merchant");

                    foreach($listmerch as $merch){
                        if($merch['id']==$query['id_merchant']){
                            echo "<option selected='selected' value=".$merch[id].">".$merch[id]." - ".$merch[nama]."</option>";
                        }else{
                            echo "<option value=".$merch[id].">".$merch[id]." - ".$merch[nama]."</option>";
                        }
                    }
                    ?>
                </select>
                </div>
                <div class="form-group">
                    <label for="exampleInput">Nama Menu</label>
                    <input type="nama" class="form-control" placeholder="Masukkan nama menu" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga Menu</label><br>
                    <input type="text" class="form-control"  placeholder="Rp." name="harga">
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control select2" style="width: 100%;" name="kategori" > 
                    <?php 
                      $listKat=mysqli_query($link,"SELECT * FROM kategori");
                      $select2 = -1;
                      foreach($listKat as $kat) 
                      {
                        if($select2 == -1){
                            echo "<option selected='selected' value=".$kat[id_kategori].">".$kat[nama_kategori]."</option>";
                            $select2 = 0;
                        }else{
                            echo "<option value=".$kat[id_kategori].">".$kat[nama_kategori]."</option>";
                        } 
                      }    
                      ?>
                    </select>
                  </div>
                  <div class="card-body">
                    <label>Apakah makanan yang anda sajikan saat ini dapat dipesan?</label><br>
                    <input type="checkbox" name="my-checkbox" value='1' checked data-bootstrap-switch>
                    <!-- <input type="checkbox" name="halal" data-bootstrap-switch> -->
                  </div>

                  
                    <div class="card-footer">
                    <input type="submit" class="btn btn-info" name="add" value="Tambah">
                  </form>
                </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3-pre
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</body>
</html>
