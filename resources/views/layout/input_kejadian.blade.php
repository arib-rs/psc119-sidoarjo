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
    <!-- <link rel="stylesheet" href="{{asset('template')}}/plugins/style.css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        .nav-tabs-custom>.nav-tabs>li.active {
            border-top-color: #dd4b39;
        }

        .forminputlaporan {
            margin-top: 2%;
            margin-bottom: 2%;
        }

        .hoverdispatch:hover {
            background-color: #f3565d !important;
            color: white !important;
        }

        .hoversolvedbyphone:hover {
            background-color: #66CC00 !important;
            color: white !important;
        }

        .hoverprankcall:hover {
            background-color: #b1b1b1 !important;
            color: white !important;
        }
    </style>
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
                    Input Kejadian Baru
                    <small>form laporan kejadian</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-sliders"></i> Kejadian & Bantuan</a></li>
                    <li class="active">Input Kejadian Baru</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="background:#66CC00; margin-bottom: 2rem; text-align: center; padding: 1rem;">
                        <p style="font-size: 4rem; vertical-align: middle; margin: 0;">Timer: 00 : 00 : 03</p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#laporankejadian" data-toggle="tab">Form Laporan Kejadian</a></li>
                                <div style="text-align: right; margin: 0.5% 0.5% 0.5% auto">
                                    <button type="submit" class="btn" style="background-color: #3399FF; color:#fff; margin: auto 0.3%;">Simpan Laporan</button>
                                    <button type="submit" class="btn" style="background-color: #FF9933; color:#fff; margin: auto 0.3%;">Batalkan Laporan</button>
                                </div>
                            </ul><br>
                            <div class="tab-content">
                                <div class="active tab-pane" id="laporankejadian">
                                    <!-- Post -->
                                    <form role="form">
                                        <div class="post">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p>Call Number</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" placeholder="CCN1466-1615142" disabled>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2">
                                                    <p>Lanjutan Laporan Dari</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option>Pilih CCN</option>
                                                        <option>CCN1466-1615142 - Dummy</option>
                                                        <option>CCN1889-18426897 - Ani</option>
                                                        <option>CCN149-1299538 - Indah</option>
                                                        <option>CCN14679-16996212 - Arif</option>
                                                    </select>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p>Waktu</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group date">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="text" class="form-control pull-right" id="datepicker">
                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2">
                                                    <p>Tindakan Cepat</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn hoverdispatch" style="background-color: #fff; color:#b1b1b1; border-radius: 20px; transition-duration: 0.4s;">Dispatch</button>
                                                    <button type="submit" class="btn hoversolvedbyphone" style="background-color: #fff; color:#b1b1b1; border-radius: 20px; transition-duration: 0.4s;">Solved By Phone</button>
                                                    <button type="submit" class="btn hoverprankcall" style="background-color: #fff; color:#b1b1b1; border-radius: 20px; transition-duration: 0.4s;">Prank Call</button>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p>Nama Pelapor</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="input-group date">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Masukan nama tempat atau alamat contoh Jl. Diponegoro no. 139 Sidoarjo">
                                                    </div>
                                                </div>
                                                <div class="col-md-1" style="padding-left: 0;">
                                                    <button type="submit" class="btn btn-primary" style="width: 100%;">Search</button>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p>Latitude</p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control" placeholder="Readonly" readonly>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p>Longitude</p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control" placeholder="Readonly" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2">
                                                    <p>Detail Lokasi</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <textarea class="form-control" rows="4" placeholder="This textarea has a limit of 255 chars"></textarea>
                                                </div>
                                            </div><br>
                                            <h4 style="margin-bottom: 0;"><b>Data Pelapor</b></h4>
                                        </div>
                                        <!-- /.post -->

                                        <div class="post">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p>Nama Pelapor</p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control" placeholder="Nama Pelapor">
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p>Nama Pelapor</p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control" placeholder="0812xxxxxxxx">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2">
                                                    <p>Alamat Pelapor</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <textarea class="form-control" rows="4" placeholder="This textarea has a limit of 255 chars"></textarea>
                                                </div>
                                            </div><br>
                                            <h4 style="margin-bottom: 0;"><b>Jenis Kejadian</b></h4>
                                        </div>
                                        <!-- /.post -->

                                        <div class="post">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p>Jenis Kejadian</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-control">
                                                        <option>Pilih Kategori</option>
                                                        <option>SIMULASI</option>
                                                        <option>Lain - lain</option>
                                                        <option>Keracunan/Over Dosis</option>
                                                        <option>Sakit Perut</option>
                                                        <option>Tidak Sadar/Pingsan/Hampir Pingsan/Tidak bernyawa</option>
                                                        <option>Hamil/Bersalin/Keguguran</option>
                                                        <option>Stroke</option>
                                                        <option>Alergi</option>
                                                        <option>Sakit Dada</option>
                                                        <option>Masalah Jantung / A.I.C.D</option>
                                                        <option>Trauma Cedera</option>
                                                        <option>Kecelakaan Lalu Lintas (KLL)</option>
                                                        <option>Masalah Tidak Diketahui</option>
                                                        <option>Sakit Kepala</option>
                                                        <option>Terbakar</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2">
                                                    <p>Jumlah Pasien</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>

                                            <br>
                                            <h4 style="margin-bottom: 0;"><b>Keterangan Kejadian</b></h4>
                                        </div>
                                        <!-- /.post -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Keterangan Kejadian</p>
                                            </div>
                                            <div class="col-md-12">
                                                <textarea class="form-control" rows="4" placeholder="Keterangan Kejadian"></textarea>
                                            </div>
                                        </div><br>

                                        <div class="post">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4><b>MENU EMD</b></h4>
                                                    <hr style="border-color: #d2d6de; margin: 5px 0 15px 0;">
                                                    <button type="submit" class="btn" style="width: 80px; background-color: #f3565d; color:#fff;">EMD</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <h4><b>DITERUSKAN KE</b></h4>
                                                    <hr style="border-color: #d2d6de; margin: 5px 0 15px 0;">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Polresta Sidoarjo
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Dinas Pemadakam Kebaran Sidoarjo
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                BPBD Sidoarjo
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Komando Daerah Militer Sidoarjo
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                SiManeis
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h4><b>Sumber Informasi</b></h4>
                                                    <hr style="border-color: #d2d6de; margin: 5px 0 15px 0;">
                                                    <select class="form-control">
                                                        <option>Pilih Informasi</option>
                                                        <option>Telepon 119</option>
                                                        <option>Rumah Sakit - PSTN</option>
                                                        <option>Si Manies</option>
                                                        <option>Radio SPGDT</option>
                                                        <option>Sosial Media</option>
                                                        <option>HP</option>
                                                        <option>SIMULASI</option>
                                                        <option>Emergency Button</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.post -->

                                        <div class="post">
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4" style=" text-align: right;">
                                                    <button type="submit" class="btn" style="background-color: #3399FF; color:#fff;">Simpan Laporan</button>
                                                    <button type="submit" class="btn" style="background-color: #f3565d; color:#fff;">Dispatch</button>
                                                    <button type="submit" class="btn" style="background-color: #66CC00; color:#fff;">Solved By Phone</button>
                                                </div>
                                            </div><br>
                                        </div>
                                        <!-- /.post -->

                                    </form>
                                </div>
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
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

    $('#datepicker').datepicker({
        autoclose: true
    })
</script>

</html>