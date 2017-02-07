<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rental-Mobil</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->

    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a buttoneme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
    <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="/css/app.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
$(function(){
  $("#datemask").inputmask("dd/mm/yyyy",{"placeholder":"dd/mm/yyyy"});
  $("[data-mask]").inputmask();
});
</script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>REN</b>CAR</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
           
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->username }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Admin
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
     
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>ADMIN AUNUR</p>
            </div>
          </div>
          <!-- search form -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Transaksi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="/pinjaman"><i class="fa fa-circle-o"></i> Pinjaman</a></li>
                <li><a href="/ambil"><i class="fa fa-circle-o"></i> Ambil Mobil</a></li>
                <li><a href="/pengembalian"><i class="fa fa-circle-o"></i> Pengembalian Mobil</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span> Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/laporan"><i class="fa fa-circle-o"></i> Laporan</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Master</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/merek"><i class="fa fa-circle-o"></i> Merek</a></li>
                <li><a href="/mobil"><i class="fa fa-circle-o"></i> Mobil</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Pinjaman
            <small>advanced tables</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header" style="background:#0072C6">
                  <h3 style="color:white;" class="box-title">Detail Pinjaman Mobil</h3>
                </div><!-- /.box-header -->
                <div class="panel">
  <div class="content"> 
    <table style="width:75%">
      <tr>
        <td>Id Pesan</td>
        <td>
         <form action=" {{ $data->id }}" method="post" onsubmit="submitForm()">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
        <input type="text" name="id_pesan" value="{{ $data->id_pesan }}" readonly></td>
        <td><input type="hidden" name="nama_mobil2"></td>

      </tr>
          </td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>
        <p>
          <div class="input-control text full-size">
            <input style="width:100%;" type="text" name="nama" value="{{ $data->nama }}">
          </div>
        </td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>
        <p>
          <div class="input-control text full-size">
            <textarea style="width:100%;" name="alamat">{{ $data->alamat }}</textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>Tanggal Pinjam</td>
        <td>
        <p>
          <div class="field">
            <input onchange="totalharga()" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask="" id="tanggalPinjam" style="height:30px; width:100%;" type="text" name="tanggal_pinjam" value="{{ $data->tanggal_pinjaman }}">
          </div>
        </td>
      </tr>
      <tr>    
        <td>Tanggal Kembali</td>
        <td>
        <p>
          <div class="field">
          <input onchange="totalharga()" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask="" id="tanggalKembali" style="height:30px; width:100%;" type="text" name="tanggal_kembali" value="{{ $data->tanggal_kembali }}">
          </div>
        </td>
      </tr>
      <tr>
        <td>Merek Mobil</td>
        <td>
        <p>
          <div class="input-contol select">
          <select style="width:100%;" name="merek_mobil">
            <option>Pilih Merek</option>
             @foreach($merek as $merek)
            <option value="{{ $merek->id }}">{{ $merek->nama_merek }}</option>
            @endforeach
          </select>
          </div>
        </td>
      </tr>
      <tr id="trNamaMobil">
        
      </tr>
      <tr>
        <td>Harga Sewa/hari</td>
        <td>
        <p>
          <div class="input-contol text full-size">
            <input onchange="totalharga()" id="hargaMobil" type="text" style="width:100%" name="harga_mobil" value="{{ $data->harga_mobil }}" readonly>
          </div>
        </td>
      </tr>
      <tr>
        <td>Status</td>
        <td>
        <p>
          <div class="input-contol text full-size">
            <input name="status" type="radio" value="lunas">Lunas
            <input checked="{{ $data->status }}" name="status" type="radio" value="Belum Dibayar">Belum Dibayar
          </div>
        </td>
      </tr>
      <tr>
          <input type="hidden" style="width:100%" name="status_pengambilan" value="belum diambil">
      </tr>
      <tr>
        <td>Total</td>
        <td>
        <p>
          <div class="input-contol text full-size">
          <input readonly type="text" style="width:100%" name="total_harga" value="{{ $data->total }}">
          </div>
        </td>
      </tr>
      </table>
      <td>
      <div><td><a href="#"><button style="border:none;background:#82BA00;height:25px;width:100px;color:white" type="submit">SIMPAN</button></a></td></form>
      <td><a href="/"><button onmouseover="submitForm()" style="border:none;background:#82BA00;height:25px;width:100px;color:white" type="submit">KEMBALI</button></a></td>
      </div>
      </td>
      </td>
      </tr>
    
  </div>
</div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div>
                            
          <!-- Main row -->
      <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <script type="text/javascript">
      function  totalharga(){
        var one_day=1000*60*60*24;

        var tglPinjam = new Date($("#tanggalPinjam").val());
        var tglKembali = new Date($("#tanggalKembali").val());
        var harga = $("#hargaMobil").val();

        var jmlHari = (tglKembali - tglPinjam)/one_day;
        
        var total = jmlHari * harga;
        if(total == NaN){
          $("input[name='total_harga']").val("-");
        }
        else{
          $("input[name='total_harga']").val(total);
        }
        console.log(harga);
      }
        function submitForm(){
        $("input[name='nama_mobil2']").val($("#trNamaMobil select").val());
        console.log($("input[name='nama_mobil2']").val());
      }
    </script>

    <script type="text/javascript">
      $(function(){
        $("#trNamaMobil").hide();
        $("select[name='merek_mobil']").change(function(e){
            e.preventDefault();
            $.ajax({
              'type': 'POST',
              'url': '/getdatamobil',
              'data': {
               'idMerek': $("select[name='merek_mobil']").val(), 
               '_token': '{{ csrf_token() }}'
              },
              'fail': function(data){
                $("#trNamaMobil").html(data);
                $("#trNamaMobil").show(1000);
              },
              'success': function(data){
                $("#trNamaMobil").html(data);
                $("#trNamaMobil").show(1000);
              }
          });
        }); 
      });

    </script>
  </body>
</html
