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
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('template')}}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
            <a href="{{url('/dashboard')}}" class="logo">
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
                            <a href="{{url('/req_bantuan')}}">
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
                            <li><a href="{{url('/req_bantuan')}}">Request Bantuan</a></li>
                            <li><a href="{{url('/edit_laporan')}}">Edit Laporan Kejadian</a></li>
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
                    Request Bantuan
                    <small>Request Bantuan Ambulance dan Paramedis</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-sliders"></i> Kejadian & Bantuan</a></li>
                    <li class="active">Request Bantuan</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#req_bantuan" data-toggle="tab">Request Bantuan</a></li>
                                <li><a href="#req_belum_direspon" data-toggle="tab">Request Yang Belum Di Respon</a></li>
                            </ul><br>
                            <div class="tab-content">
                                <div class="active tab-pane" id="req_bantuan">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">NO</th>
                                                        <th class="text-center">CCN</th>
                                                        <th class="text-center">PELAPOR</th>
                                                        <th class="text-center">WAKTU</th>
                                                        <th class="text-center">LOKASI</th>
                                                        <th class="text-center">KATEGORI KEJADIAN</th>
                                                        <th class="text-center" style="width: 120px;">JUMLAH KORBAN</th>
                                                        <th class="text-center">KETERANGAN</th>
                                                        <th class="text-center" style="width: 60px;">AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">CCN1455-1615267395</td>
                                                        <td class="text-center">ellena</td>
                                                        <td class="text-center">2021-03-09 12:23:17</td>
                                                        <td class="text-center">bpbd sidoarjo</td>
                                                        <td class="text-center">Tidak Sadar/Pingsan/Hampir Pingsan/Tidak Bernyawa</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">pengamen tidak sadar di depan kantor bpbd sidoarjo</td>
                                                        <td class="text-center">
                                                            <a class="btn btn-xs btn-primary" data-toggle="modal" data-placement="left" data-target="#ModalInput" title="Lihat Detail" style="width: 24px; margin: 4px 3px; background-color: #8e44ad; border-color: #8e44ad;"><i class="glyphicon glyphicon-pushpin"></i></a>
                                                            <a id="btn-pembatalan-tugas" class="btn btn-xs btn-danger" data-placement="left" title="Detail Kejadian" style="width: 24px; margin: 4px 3px; background-color: #428bca; border-color: #428bca;"><i class="fa fa-files-o"></i></a><br>
                                                            <a href="{{url('/edit_kejadian')}}" class="btn btn-xs btn-primary" data-placement="left" title="Edit Kejadian" style="width: 24px; margin: 4px 3px; background-color: #45b6e0; border-color: #45b6e0;"><i class="fa fa-pencil-square-o"></i></a>
                                                            <a id="btn-pembatalan-tugas" class="btn btn-xs btn-danger" data-placement="left" title="Monitoring Penanganan" style="width: 24px; margin: 4px 3px; background-color: #89c4f4; border-color: #89c4f4;"><i class="fa fa-desktop"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">CCN1459-1615270053</td>
                                                        <td class="text-center">lutfi</td>
                                                        <td class="text-center">2021-03-09 12:23:17</td>
                                                        <td class="text-center">Jl. Ikan Sepat VI, Dusun Bluru Kidul, Bluru Kidul, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61233, Indonesia</td>
                                                        <td class="text-center">Tidak Sadar/Pingsan/Hampir Pingsan/Tidak Bernyawa</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">pasien tidak sadar</td>
                                                        <td class="text-center">
                                                            <a class="btn btn-xs btn-primary" data-toggle="modal" data-placement="left" data-target="#ModalInput" title="Lihat Detail" style="width: 24px; margin: 4px 3px; background-color: #8e44ad; border-color: #8e44ad;"><i class="glyphicon glyphicon-pushpin"></i></a>
                                                            <a id="btn-pembatalan-tugas" class="btn btn-xs btn-danger" data-placement="left" title="Detail Kejadian" style="width: 24px; margin: 4px 3px; background-color: #428bca; border-color: #428bca;"><i class="fa fa-files-o"></i></a><br>
                                                            <a href="{{url('/edit_kejadian')}}" class="btn btn-xs btn-primary" data-placement="left" title="Edit Kejadian" style="width: 24px; margin: 4px 3px; background-color: #45b6e0; border-color: #45b6e0;"><i class="fa fa-pencil-square-o"></i></a>
                                                            <a id="btn-pembatalan-tugas" class="btn btn-xs btn-danger" data-placement="left" title="Monitoring Penanganan" style="width: 24px; margin: 4px 3px; background-color: #89c4f4; border-color: #89c4f4;"><i class="fa fa-desktop"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="req_belum_direspon">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <table id="example2" class="table table-bordered dataTable no-footer table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">NO</th>
                                                        <th class="text-center">CCN</th>
                                                        <th class="text-center">PELAPOR</th>
                                                        <th class="text-center">WAKTU KEJADIAN</th>
                                                        <th class="text-center">WAKTU REQUEST</th>
                                                        <th class="text-center">LOKASI</th>
                                                        <th class="text-center">NOPOL</th>
                                                        <th class="text-center" style="width: 80px;">AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">CCN1001-1573978744</td>
                                                        <td class="text-center">ainur rohim</td>
                                                        <td class="text-center">2019-11-17 15:19:07</td>
                                                        <td class="text-center">2019-11-17 15:25:00</td>
                                                        <td class="text-center">Jl. Raya Pabean No.36, Dabean, Pabean, Kec. Sedati, Kabupaten Sidoarjo, Jawa Timur 61253, Indonesia</td>
                                                        <td class="text-center">W 8511 PP</td>
                                                        <td class="text-center">
                                                            <a class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="left" title="Kirim Ulang Notifikasi" style="width: 24px; margin: auto 2px;"><i class="fa fa-info"></i></a>
                                                            <a id="btn-pembatalan-tugas" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="left" title="Pembatalan Tugas" style="width: 24px; margin: auto 2px;"><i class="fa fa-reply"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">CCN1001-1573738456</td>
                                                        <td class="text-center">Pak Ali</td>
                                                        <td class="text-center">2019-11-14 20:34:18</td>
                                                        <td class="text-center">2019-11-14 20:36:47</td>
                                                        <td class="text-center">Jl. Raya Durung Bedug, Lebo, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61223, Indonesia</td>
                                                        <td class="text-center">W 1046 NP</td>
                                                        <td class="text-center">
                                                            <a id="btn-kirim-ulang" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="left" title="Kirim Ulang Notifikasi" style="width: 24px; margin: auto 2px;"><i class="fa fa-info"></i></a>
                                                            <a id="btn-pembatalan-tugas" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="left" title="Pembatalan Tugas" style="width: 24px; margin: auto 2px;"><i class="fa fa-reply"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

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

    <!-- Modal. -->
    <div id="ModalInput" class="modal">
        <div class="modal-dialog modal-dialog-centered modal-lg" style="width:60%">
            <div class="modal-content">
                <div class="modal-header" style="padding: 10px auto;">
                    <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Periksa Bantuan</b></h4>
                    <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form">
                        <div class="form-body">
                            <div id="content-detail"><input type="hidden" value="" name="id_kejadian">
                                <input type="hidden" value="" name="">
                                <table class="table-condensed">
                                    <tbody>
                                        <tr>
                                            <th width="200" align="right">CCN</th>
                                            <td>CCN1455-1615267395</td>
                                        </tr>
                                        <tr>
                                            <th align="right">Pelapor</th>
                                            <td>ellena</td>
                                        </tr>
                                        <tr>
                                            <th align="right">Alamat</th>
                                            <td>bpbd sidoarjo<br>depan bpbd sidoarjo</td>
                                        </tr>
                                        <tr>
                                            <th align="right">Keterangan</th>
                                            <td>pengamen tidak sadar di depan kantor bpbd sidoarjo</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h3 class="form-section font-green-meadow">Data Bantuan</h3>
                                <table class="table table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Resource</th>
                                            <th width="200px">Tujuan</th>
                                            <th>Waktu Request</th>
                                            <th width="250px">Status</th>
                                            <th class="text-right" width="200px">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AMB_1974 - B 1974 WQ<br>
                                                <small class="text-info">
                                                    <i class="fa fa-car fa-fw"></i> Mobil
                                                </small>
                                            </td>
                                            <td>
                                                RSI Siti Hajar </td>
                                            <td>2021-03-09 12:27:08</td>
                                            <td>
                                                DITERIMA </td>
                                            <td class="text-right">
                                                (SELESAI) </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END FORM-->
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
                <!-- <form id="form-data">
                    <div class="modal-body">
                        <table id="example-table" class="table table-bordered dataTable no-footer">
                            <thead>
                                <tr>
                                    <th class="text-center">Resource</th>
                                    <th class="text-center">Tujuan</th>
                                    <th class="text-center">Waktu Request</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">AMB_1974 - B 1974 WQ<br><i class="fa fa-car" style="color: #89c4f4;"> Mobil</i></td>
                                    <td class="text-center">RSI Siti Hajar</td>
                                    <td class="text-center">2021-03-09 12:27:08</td>
                                    <td class="text-center">DITERIMA</td>
                                    <td class="text-center">(SELESAI)</td>
                                </tr>
                            </tbody>
                        </table>
                </form> -->
            </div>
        </div>
    </div>
    <!-- /.Modal -->

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
    <!-- DataTables -->
    <script src="{{asset('template')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('template')}}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
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

    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

</html>