<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{asset('template')}}/dist/img/logo.ico" />
    <title>PSC-119 Kabupaten Sidoarjo - Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('template')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('template')}}/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('template')}}/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('template')}}/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('template')}}/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('template')}}/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('template')}}/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('template')}}/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('template')}}/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('template')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-red-light sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <!-- <span class="logo-mini"><b>PSC</b></span> -->
                <span class="logo-mini"><img src="{{asset('template')}}/dist/img/logopsc.png" class="img-circle" alt="User Image"></span>
                <!-- logo for regular state and mobile devices -->
                <!-- <span class="logo-lg"><b>PSC</b>-119</span> -->
                <span class="logo-lg"><img src="{{asset('template')}}/dist/img/logopsc.png" class="img-circle" alt="User Image"></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle " data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-header">
                    <div id="myclock" class="clock navbar-brand" style="font-size: 15px;"></div>
                </div>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span style="color:white">Butuh Bantuan</span>
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">0</span>
                            </a>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span style="color:white">Emergency Alarm</span>
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">0</span>
                            </a>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{asset('template')}}/dist/img/userprofil.png" class="user-image" alt="User Image">
                                <span class="hidden-xs">Admin PSC-119 Sidoarjo</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{asset('template')}}/dist/img/userprofil.png" class="img-circle" alt="User Image">

                                    <p>
                                        Admin PSC-119 Sidoarjo
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="{{url('/')}}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">NAVIGASI UTAMA</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-home"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/dashboard')}}">Home</a></li>
                            <li><a href='#'>Kategori Kejadian</a></li>
                            <li><a href='#'>Respon Kejadian</a></li>
                            <li><a href='#'>Status Triase</a></li>
                            <li><a href='#'>Ambulan Terbaik & <br>Terburuk</a></li>
                            <li><a href='#'>Kejadian Per Kecamatan</a></li>
                            <li><a href='#'>Kategori Kejadian Per <br>Kecamatan</a></li>
                            <li><a href='#'>Kejadian On Map</a></li>
                            <li><a href='#'>Status Ambulan</a></li>
                            <li><a href='#'>Status Laporan Kejadian</a></li>
                            <li><a href='#'>Monitoring Dashboard</a></li>
                            <li><a href='#'>Rekap Panggilan</a></li>
                            <li><a href='#'>Kejadian Berdasarkan <br>Kategori EMD</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-sliders"></i>
                            <span>Kejadian & Bantuan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/input_kejadian')}}">Input Kejadian Baru</a></li>
                            <li><a href='#'>Request Bantuan</a></li>
                            <li><a href='#'>Edit Laporan Kejadian</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-send"></i> <span>Konfirmasi & Approval</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href='#'>Konfirmasi Penugasan</a></li>
                            <li><a href='#'>Shift Approval</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-television"></i> <span>Monitoring</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href='#'>Monitoring Alarm Kejadian</a></li>
                            <li><a href='#'>Penanganan Kejadian</a></li>
                            <li><a href='#'>Resource Management</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-files-o"></i> <span>Laporan - Laporan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href='#'>Laporan Kejadian</a></li>
                            <li><a href='#'>Rekap Laporan Kejadian </a></li>
                            <li><a href='#'>Rekap Bantuan</a></li>
                            <li><a href='#'>Rekap Penolakan & <br>Pembatalan Penugasan</a></li>
                            <li><a href='#'>Rekap Perawat</a></li>
                            <li><a href='#'>Ambulan Tidak Aktif</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i> <span>User & Device Management</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href='#'>Personil</a></li>
                            <li><a href='#'>User Management</a></li>
                            <li><a href='#'>Device Management</a></li>
                            <li><a href='#'>User Emergency Button</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-flag"></i> <span>Master</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href='#'>Faskes</a></li>
                            <li><a href='#'>Ambulan</a></li>
                            <li><a href='#'>Spesialisasi Dokter </a></li>
                            <li><a href='#'>Kategori</a></li>
                            <li><a href='#'>Kategori Mobil Sehat</a></li>
                            <li><a href='#'>Sub Kategori</a></li>
                            <li><a href='#'>Berita & Artikel</a></li>
                            <li><a href='#'>Obat</a></li>
                            <li><a href='#'>Sift</a></li>
                            <li><a href='#'>Data Pasien</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> <span>Buka Peta</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>reports & statics</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <p style="font-size: 28px;">170</p>
                                <!-- <h3>170</h3> -->

                                <p>Total Laporan Kejadian Tahun ini</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                            <a href="#" class="small-box-footer">Detail info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-purple">
                            <div class="inner">
                                <p style="font-size: 28px;">36</p>
                                <!-- <h3>36</h3> -->

                                <p>Total Laporan Kejadian Bulan ini</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                            <a href="#" class="small-box-footer">Detail info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <p style="font-size: 28px;">3</p>
                                <!-- <h3>3</h3> -->

                                <p>Total Laporan Kejadian Hari ini</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                            <a href="#" class="small-box-footer">Detail info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <p style="font-size: 28px;">Bantuan / 2 Kejadian</p>
                                <!-- <h3>Bantuan / 2 Kejadian</h3> -->

                                <p>Kirim Bantuan Hari ini</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                            <a href="#" class="small-box-footer">Detail info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="nav-tabs-custom">
                            <!-- Tabs within a box -->
                            <ul class="nav nav-tabs pull-right">
                                <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                                <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                                <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
                            </ul>
                            <div class="tab-content no-padding">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                            </div>
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </section>
                    <!-- /.Left col -->
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2021 Diskominfo Kab. Sidoarjo</a>.</strong> All rights
            reserved.
        </footer>

        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{asset('template')}}/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('template')}}/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('template')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="{{asset('template')}}/bower_components/raphael/raphael.min.js"></script>
    <script src="{{asset('template')}}/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="{{asset('template')}}/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="{{asset('template')}}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{asset('template')}}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('template')}}/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{asset('template')}}/bower_components/moment/min/moment.min.js"></script>
    <script src="{{asset('template')}}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="{{asset('template')}}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('template')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="{{asset('template')}}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('template')}}/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('template')}}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('template')}}/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('template')}}/dist/js/demo.js"></script>
</body>
<script>
    function showTime() {
        arrbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        var date = new Date();
        var bulan = date.getMonth();
        var tanggal = date.getDate();
        var jam = date.getHours();
        var menit = date.getMinutes();
        var detik = date.getSeconds();

        tanggal = (tanggal < 10) ? "0" + tanggal : tanggal;
        jam = (jam < 10) ? "0" + jam : jam;
        menit = (menit < 10) ? "0" + menit : menit;
        detik = (detik < 10) ? "0" + detik : detik;
        var time = arrbulan[bulan] + " " + tanggal + ", " + jam + ":" + menit + ":" + detik;
        document.getElementById('myclock').innerText = time;
        document.getElementById('myclock').textContent = time;
        setTimeout(showTime, 1000);
    }
    showTime();
</script>

</html>