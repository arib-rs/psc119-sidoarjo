@extends('layout/main')

@section('title', 'Laporan Kejadian')

@section('css')
<style>
    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #dd4b39;
    }
</style>
@endsection

@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Laporan Kejadian
            <small>Data Laporan Yang Masuk Melalui Command Center</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-files-o"></i> Laporan - Laporan</a></li>
            <li class="active"> Laporan Kejadian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#laporan_kej_all" data-toggle="tab">Laporan Kejadian All</a></li>
                <li><a href="#laporan_kej_open" data-toggle="tab">Laporan Kejadian Open</a></li>
                <li><a href="#laporan_kej_closed" data-toggle="tab">Laporan Kejadian Closed</a></li>
            </ul>
            <div class="tab-content">
                <!-- Font Awesome Icons -->
                <div class="tab-pane active" id="laporan_kej_all">
                    <div class="row">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-default" id="daterange-btn" style="width: 100%;">
                                <span>
                                    <i class="fa fa-calendar"></i> Date range picker
                                </span>
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                        <div class="col-md-1">
                            <button role="button" class="btn btn-primary"><i class="fa fa-search"></i> Tampilkan</button>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4 text-right">
                            <!-- <div class="btn-group">
                                <button role="button" class="btn btn-success">
                                    <i class="fa fa-map-marker"></i> Show in Map</button>
                            </div> -->
                            <div class="row" style="margin: 0px;">
                                <button type="button" class="btn btn-success" id=""><i class="fa fa-map-marker"></i>&nbsp; Show in Map</button></span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-print"></i>&nbsp; Print <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li onclick=""><a href="#"><i class="fa fa-print"></i>&nbsp; PDF</a></li>
                                        <li onclick=""><a href="#"><i class="fa fa-print"></i>&nbsp; EXCEL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">CCN</th>
                                <th class="text-center">Informasi</th>
                                <th class="text-center">Pelapor</th>
                                <th class="text-center">Waktu</th>
                                <th class="text-center">Jenis Kejadian</th>
                                <th class="text-center">Lokasi</th>
                                <th class="text-center">Request</th>
                                <th class="text-center">Bantuan</th>
                                <th class="text-center">Faskes Yang Ditugasi</th>
                                <th class="text-center">Faskes Yang Menerima Penugasan</th>
                                <th class="text-center">Status Penanganan</th>
                                <th class="text-center">KM</th>
                                <th class="text-center">Checked</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">CCN1166-1614432787</td>
                                <td class="text-center">HP</td>
                                <td class="text-center">TN ZAINURI</td>
                                <td class="text-center">2021-02-27 18:44:56</td>
                                <td class="text-center">Lemas, Sesak Nafas</td>
                                <td>PERUM TAMAN CANDI LOKA BLOK. H2 NO. 28 CANDI SIDOARJO 07:00 - 21:00 PATOKAN DEKAT PINTU PORTAL, TAMAN CANDILOKA, NGAMPELSARI, KEC. CANDI, KABUPATEN SIDOARJO, JAWA TIMUR 61271, INDONESIA</td>
                                <td class="text-center">1</td>
                                <td class="text-center">1</td>
                                <td class="text-center">RS DUMMY</td>
                                <td class="text-center">RS DUMMY</td>
                                <td class="text-center">BANTUAN SUDAH DIKIRIM</td>
                                <td class="text-center">11 KM</td>
                                <td class="text-center"><input checked="" type="checkbox" name="" value=""></td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">CCN1466-1613537688</td>
                                <td class="text-center">TELEPON 119</td>
                                <td class="text-center">T. HERU</td>
                                <td class="text-center">2021-02-19 07:10:41</td>
                                <td class="text-center">Penjemputan px covid</td>
                                <td>JL. JENGGOLO, KABUPATEN SIDOARJO, JAWA TIMUR, INDONESIA</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                                <td class="text-center">RS DUMMY</td>
                                <td class="text-center"></td>
                                <td class="text-center">BUTUH BANTUAN</td>
                                <td class="text-center"></td>
                                <td class="text-center"><input checked="" type="checkbox" name="" value=""></td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">CCN1452-1614423265</td>
                                <td class="text-center">HP</td>
                                <td class="text-center">NY RAHMA</td>
                                <td class="text-center">2021-02-27 17:54:29</td>
                                <td class="text-center">Lemas, Sesak nafas</td>
                                <td>PERUMAHAN CANDILOKA SIDOARJO</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">SOLVE BY PHONE</td>
                                <td class="text-center"></td>
                                <td class="text-center"><input checked="" type="checkbox" name="" value=""></td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="text-center">CCN1447-1612311324</td>
                                <td class="text-center">EMERGENCY BUTTON</td>
                                <td class="text-center">NANDA</td>
                                <td class="text-center">2021-02-03 07:15:26</td>
                                <td class="text-center">Kecelakaan</td>
                                <td>JL. RAYA TEMU PRAMBON NO.3, TEMU 3, TEMU, KEC. PRAMBON, KABUPATEN SIDOARJO, JAWA TIMUR 61264, INDONESIA</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">ENTRY BELUM LENGKAP</td>
                                <td class="text-center"></td>
                                <td class="text-center"><input checked="" type="checkbox" name="" value=""></td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td class="text-center">CCN1166-1614432787</td>
                                <td class="text-center">HP</td>
                                <td class="text-center">NY DINA</td>
                                <td class="text-center">2021-02-27 20:33:11</td>
                                <td class="text-center">Pingsan</td>
                                <td>KREMBUNG SIDOARJO</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">ENTRY BELUM LENGKAP</td>
                                <td class="text-center"></td>
                                <td class="text-center"><input checked="" type="checkbox" name="" value=""></td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td class="text-center">CCN1455-1613874201</td>
                                <td class="text-center">TELEPON 119</td>
                                <td class="text-center">DIDIN</td>
                                <td class="text-center">2021-02-21 09:23:28</td>
                                <td class="text-center">Sesak, Kejang</td>
                                <td>PENDOPO ALUN-ALUN SIDOARJO</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">LAPORAN BATAL</td>
                                <td class="text-center"></td>
                                <td class="text-center"><input checked="" type="checkbox" name="" value=""></td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tab-pane" id="laporan_kej_open">
                    <div class="row">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-default" id="daterange-btn" style="width: 100%;">
                                <span>
                                    <i class="fa fa-calendar"></i> Date range picker
                                </span>
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                        <div class="col-md-1">
                            <button role="button" class="btn btn-primary"><i class="fa fa-search"></i> Tampilkan</button>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4 text-right">
                            <!-- <div class="btn-group">
                                <button role="button" class="btn btn-success">
                                    <i class="fa fa-map-marker"></i> Show in Map</button>
                            </div> -->
                            <div class="row" style="margin: 0px;">
                                <button type="button" class="btn btn-success" id=""><i class="fa fa-map-marker"></i>&nbsp; Show in Map</button></span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-print"></i>&nbsp; Print <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li onclick=""><a href="#"><i class="fa fa-print"></i>&nbsp; PDF</a></li>
                                        <li onclick=""><a href="#"><i class="fa fa-print"></i>&nbsp; EXCEL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <table id="example2" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">CCN</th>
                                <th class="text-center">Informasi</th>
                                <th class="text-center">Pelapor</th>
                                <th class="text-center">Waktu</th>
                                <th class="text-center">Lokasi</th>
                                <th class="text-center">Request</th>
                                <th class="text-center">Bantuan</th>
                                <th class="text-center">Status Penanganan</th>
                                <th class="text-center">Checked</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">CCN1166-1614432787</td>
                                <td class="text-center">HP</td>
                                <td class="text-center">NY DINA</td>
                                <td class="text-center">2021-02-27 20:33:11</td>
                                <td>KREMBUNG SIDOARJO</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">ENTRY BELUM LENGKAP</td>
                                <td class="text-center"><input checked="" type="checkbox" name="" value=""></td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">CCN1466-1613537688</td>
                                <td class="text-center">TELEPON 119</td>
                                <td class="text-center">T. HERU</td>
                                <td class="text-center">2021-02-19 07:10:41</td>
                                <td>JL. JENGGOLO, KABUPATEN SIDOARJO, JAWA TIMUR, INDONESIA</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                                <td class="text-center">BUTUH BANTUAN</td>
                                <td class="text-center"><input checked="" type="checkbox" name="" value=""></td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">CCN1447-1612311324</td>
                                <td class="text-center">EMERGENCY BUTTON</td>
                                <td class="text-center">NANDA</td>
                                <td class="text-center">2021-02-03 07:15:26</td>
                                <td>JL. RAYA TEMU PRAMBON NO.3, TEMU 3, TEMU, KEC. PRAMBON, KABUPATEN SIDOARJO, JAWA TIMUR 61264, INDONESIA</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">ENTRY BELUM LENGKAP</td>
                                <td class="text-center"><input checked="" type="checkbox" name="" value=""></td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tab-pane" id="laporan_kej_closed">
                    <div class="row">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-default" id="daterange-btn" style="width: 100%;">
                                <span>
                                    <i class="fa fa-calendar"></i> Date range picker
                                </span>
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                        <div class="col-md-1">
                            <button role="button" class="btn btn-primary"><i class="fa fa-search"></i> Tampilkan</button>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4 text-right">
                            <!-- <div class="btn-group">
                                <button role="button" class="btn btn-success">
                                    <i class="fa fa-map-marker"></i> Show in Map</button>
                            </div> -->
                            <div class="row" style="margin: 0px;">
                                <button type="button" class="btn btn-success" id=""><i class="fa fa-map-marker"></i>&nbsp; Show in Map</button></span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-print"></i>&nbsp; Print <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li onclick=""><a href="#"><i class="fa fa-print"></i>&nbsp; PDF</a></li>
                                        <li onclick=""><a href="#"><i class="fa fa-print"></i>&nbsp; EXCEL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <table id="example3" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">CCN</th>
                                <th class="text-center">Informasi</th>
                                <th class="text-center">Pelapor</th>
                                <th class="text-center">Waktu</th>
                                <th class="text-center">Lokasi</th>
                                <th class="text-center">Request</th>
                                <th class="text-center">Bantuan</th>
                                <th class="text-center">Status Penanganan</th>
                                <th class="text-center">Checked</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">CCN1166-1614432787</td>
                                <td class="text-center">HP</td>
                                <td class="text-center">TN ZAINURI</td>
                                <td class="text-center">2021-02-27 18:44:56</td>
                                <td>PERUM TAMAN CANDI LOKA BLOK. H2 NO. 28 CANDI SIDOARJO 07:00 - 21:00 PATOKAN DEKAT PINTU PORTAL, TAMAN CANDILOKA, NGAMPELSARI, KEC. CANDI, KABUPATEN SIDOARJO, JAWA TIMUR 61271, INDONESIA</td>
                                <td class="text-center">1</td>
                                <td class="text-center">1</td>
                                <td class="text-center">BANTUAN SUDAH DIKIRIM</td>
                                <td class="text-center"><input checked="" type="checkbox" name="" value=""></td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">CCN1452-1614423265</td>
                                <td class="text-center">HP</td>
                                <td class="text-center">NY RAHMA</td>
                                <td class="text-center">2021-02-27 17:54:29</td>
                                <td>PERUMAHAN CANDILOKA SIDOARJO</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">SOLVE BY PHONE</td>
                                <td class="text-center"><input checked="" type="checkbox" name="" value=""></td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">CCN1455-1613874201</td>
                                <td class="text-center">TELEPON 119</td>
                                <td class="text-center">DIDIN</td>
                                <td class="text-center">2021-02-21 09:23:28</td>
                                <td>PENDOPO ALUN-ALUN SIDOARJO</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">LAPORAN BATAL</td>
                                <td class="text-center"><input checked="" type="checkbox" name="" value=""></td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section('scripts')
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable()
        $('#example3').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })

    $('#datepicker').datepicker({
        autoclose: true
    })
</script>
@endsection
