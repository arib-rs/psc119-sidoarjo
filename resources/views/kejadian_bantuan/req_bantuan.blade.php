@extends('layout/main')

@section('title', 'Request Bantuan')

@section('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
@endsection

@section('css')
    <style>
        .nav-tabs-custom>.nav-tabs>li.active {
            border-top-color: #3867d6;
        }

        .leaflet-top,
        .leaflet-bottom {
            z-index: 500;
        }

    </style>
@endsection

@section('container')
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
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="req_bantuan">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">NO</th>
                                                    <th class="text-center">NO. LAPORAN</th>
                                                    <th class="text-center">PELAPOR</th>
                                                    <th class="text-center">WAKTU</th>
                                                    <th class="text-center">LOKASI</th>
                                                    <th class="text-center">KATEGORI KEJADIAN</th>
                                                    <th class="text-center" style="width: 120px;">JUMLAH KORBAN</th>
                                                    <th class="text-center">KETERANGAN</th>
                                                    <th class="text-center" style="width: 110px;">AKSI</th>
                                                </tr>
                                            </thead>
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
                                                    <th class="text-center">NO. LAPORAN</th>
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
                                                    <td class="text-center">Jl. Raya Pabean No.36, Dabean, Pabean, Kec.
                                                        Sedati, Kabupaten Sidoarjo, Jawa Timur 61253, Indonesia</td>
                                                    <td class="text-center">W 8511 PP</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-sm btn-primary" data-toggle="tooltip"
                                                            data-placement="left" title="Kirim Ulang Notifikasi"
                                                            style="width: 34px; margin: auto 2px;"><i
                                                                class="fa fa-info"></i></a>
                                                        <a id="btn-pembatalan-tugas" class="btn btn-sm btn-danger"
                                                            data-toggle="tooltip" data-placement="left"
                                                            title="Pembatalan Tugas" style=margin: auto 2px;"><i
                                                                class="fa fa-reply"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">CCN1001-1573738456</td>
                                                    <td class="text-center">Pak Ali</td>
                                                    <td class="text-center">2019-11-14 20:34:18</td>
                                                    <td class="text-center">2019-11-14 20:36:47</td>
                                                    <td class="text-center">Jl. Raya Durung Bedug, Lebo, Kec. Sidoarjo,
                                                        Kabupaten Sidoarjo, Jawa Timur 61223, Indonesia</td>
                                                    <td class="text-center">W 1046 NP</td>
                                                    <td class="text-center">
                                                        <a id="btn-kirim-ulang" class="btn btn-sm btn-primary"
                                                            data-toggle="tooltip" data-placement="left"
                                                            title="Kirim Ulang Notifikasi"
                                                            style="width: 34px; margin: auto 2px;"><i
                                                                class="fa fa-info"></i></a>
                                                        <a id="btn-pembatalan-tugas" class="btn btn-sm btn-danger"
                                                            data-toggle="tooltip" data-placement="left"
                                                            title="Pembatalan Tugas" style="margin: auto 2px;"><i
                                                                class="fa fa-reply"></i></a>
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
@endsection

@section('modal')
    <div id="ModalInput" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-lg" style="width:50%">
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
                                            <td id="ccn"></td>
                                        </tr>
                                        <tr>
                                            <th align="right">Pelapor</th>
                                            <td id="pelapor"></td>
                                        </tr>
                                        <tr>
                                            <th align="right">Alamat</th>
                                            <td id="lokasi"><br></td>
                                        </tr>
                                        <tr>
                                            <th align="right">Keterangan</th>
                                            <td id="keterangan"></td>
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
                {{-- <form id="form-data">
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
                                    <td class="text-center">AMB_1974 - B 1974 WQ<br><i class="fa fa-car"
                                            style="color: #89c4f4;"> Mobil</i></td>
                                    <td class="text-center">RSI Siti Hajar</td>
                                    <td class="text-center">2021-03-09 12:27:08</td>
                                    <td class="text-center">DITERIMA</td>
                                    <td class="text-center">(SELESAI)</td>
                                </tr>
                            </tbody>
                        </table>
                </form> --}}
            </div>
        </div>
    </div>


    <div id="ModalRequest" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="padding: 10px auto;">
                    {{-- <div class="col-md-2" style="padding-top: 1rem; width: 170px;"> --}}
                    <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Request Bantuan</b>
                    </h4>
                    {{-- </div> --}}
                    {{-- <div id="timer-bg" class="col-md-3"
                        style="background:#66CC00; margin: 0; text-align: center; padding: 0.5rem;">
                        <p style="font-size: 2.5rem; vertical-align: middle; margin: 0; color: #F4F4F4;">Timer: <span
                                id="timer">00:00:00</span></p>
                    </div> --}}
                    <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding-bottom: 0;">
                    <div class="form">
                        <div class="form-body">
                            <div id="content-detail">
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#dispatch-form" data-toggle="tab">Dispatch</a></li>
                                        {{-- <li><a href="#info_resource" data-toggle="tab">Info-Resource<span
                                                    class="badge bg-red" style="margin-left: 5px;">3</span></a></li> --}}
                                    </ul><br>
                                    <div class="tab-content" style="padding-top: 0px;">
                                        <div class="active tab-pane" id="dispatch-form">
                                            <form id="form-req" autocomplete="off">
                                                <input type="hidden" name="id" id="id">
                                                <input type="hidden" name="lng" id="lng">
                                                <input type="hidden" name="lat" id="lat">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        {{-- <h5 style="margin-top: 0;"><b>LAPORAN KEJADIAN</b></h5> --}}
                                                        <div class="col-md-3" style="padding-left: 0px;">
                                                            <h5><b>Radius</b></h5>
                                                        </div>
                                                        <div class="col-md-9" style="padding-right: 0px;">
                                                            <select id="map-radius" class="form-control select">
                                                                {{-- <option value="">Pilih Radius</option> --}}
                                                                <option value="5000">5 km</option>
                                                                <option value="10000" selected>10 km</option>
                                                                <option value="15000">15 km</option>
                                                                <option value="20000">20 km</option>
                                                                <option value="25000">25 km</option>
                                                                <option value="30000">30 km</option>
                                                            </select>
                                                        </div>
                                                        {{-- <div class="col-md-6" style="padding-right: 0px;">
                                                        <button class="btn btn-danger pull-right"
                                                            style="background-color: #FF6666; color: #fff;">Tampilkan
                                                            EMD</button>
                                                    </div> --}}
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div id="mapid" class="box-body" style="height: 500px;"></div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="col-md-3" style="padding-left: 0px;">
                                                            <h5><b>Resource </b><span style="color: red;">*</span></h5>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <select id="resource_id" name="resource_id"
                                                                class="form-control select">
                                                                <option value=""> </option>
                                                                <option value="1">Ambulan A</option>
                                                                <option value="2">Ambulan B</option>
                                                                <option value="3">Ambulan C</option>
                                                                <option value="4">Ambulan D</option>
                                                            </select>
                                                        </div>
                                                        {{-- <div class="col-md-2" style="padding-left: 0px;">
                                                            <h5><b>Diluar Radius </b><span style="color: red;">*</span></h5>
                                                        </div>
                                                        <div class="col-md-3" style="padding-left: 0px;">
                                                            <select id="ambulan" class="form-control select">
                                                                <option value=""> </option>
                                                                <option value="1">Ambulan A</option>
                                                                <option value="2">Ambulan B</option>
                                                                <option value="3">Ambulan C</option>
                                                                <option value="4">Ambulan D</option>
                                                            </select>
                                                        </div> --}}
                                                        <div class="col-md-1" style="padding-right: 0px;">
                                                            <button class="btn btn-default pull-right"
                                                                id="btn-refresh-resource">Refresh</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="col-md-3" style="padding-left: 0px;">
                                                            <h5><b>Faskes </b><span style="color: red;">*</span></h5>
                                                        </div>
                                                        <div class="col-md-9" style="padding-right: 0px;">
                                                            <select id="health_facility_id" name="health_facility_id"
                                                                class="form-control select">
                                                                <option value=""> </option>
                                                                <option value="0">Command Center</option>
                                                                <option value="1">RSUD SIDOARJO</option>
                                                                <option value="2">RUMKITBAN SIDOARJO</option>
                                                                <option value="3">RSU AL-Islam HM Mawardi</option>
                                                                <option value="4">RS Citra Medika</option>
                                                                <option value="5">RSI Siti Hajar</option>
                                                                <option value="6">RSU BUNDA WARU</option>
                                                                <option value="7">RS Mitra Sehat Mandiri</option>
                                                                <option value="8">RS Dummy 1</option>
                                                                <option value="9">RS SITI KHODIJAH</option>
                                                                <option value="10">RS Bhayangkara Pusdik Porong</option>
                                                                <option value="11">RS. ANWAR MEDIKA</option>
                                                                <option value="12">RS MATA FATMA SIDOARJO</option>
                                                                <option value="13">PKM GANTING</option>
                                                                <option value="14">PKM SIDOARJO</option>
                                                                <option value="15">PKM SEKARDANGAN</option>
                                                                <option value="16">PKM URANGAGUNG</option>
                                                                <option value="17">PKM BUDURAN</option>
                                                                <option value="18">PKM CANDI</option>
                                                                <option value="19">PKM PORONG</option>
                                                                <option value="20">PKM KEDUNGSOLO</option>
                                                                <option value="21">PKM JABON</option>
                                                                <option value="22">PKM KREMBUNG</option>
                                                                <option value="23">PKM TANGGULANGIN</option>
                                                                <option value="24">PKM TULANGAN</option>
                                                                <option value="25">PKM KEPADANGAN</option>
                                                                <option value="26">PKM TAMAN</option>
                                                                <option value="27">PKM TROSOBO</option>
                                                                <option value="28">PKM WARU</option>
                                                                <option value="29">PKM MEDAENG</option>
                                                                <option value="30">PKM SEDATI</option>
                                                                <option value="31">PKM GEDANGAN</option>
                                                                <option value="32">PKM SUKODONO</option>
                                                                <option value="33">PKM KRIAN</option>
                                                                <option value="34">PKM BARENGKRAJAN</option>
                                                                <option value="35">RS Aisyiyah Siti Fatimah Tulangan
                                                                </option>
                                                                <option value="36">PKM BALONGBENDO</option>
                                                                <option value="37">PKM WONOAYU</option>
                                                                <option value="38">PKM TARIK</option>
                                                                <option value="39">PKM PRAMBON</option>
                                                                <option value="40">RS Delta Surya</option>
                                                                <option value="41">RS Jasem</option>
                                                                <option value="42">RS Mitra Keluarga Waru</option>
                                                                <option value="43">RS Assakinah Medika</option>
                                                                <option value="44">RSIA Soerya</option>
                                                                <option value="45">RSIA Prima Husada</option>
                                                                <option value="46">RSIA Pondok Tjandra</option>
                                                                <option value="47">RSIA Arafah Anwar Medika Sukodono
                                                                </option>
                                                                <option value="48">RS Aminah</option>
                                                                <option value="49">RS Usada Sidoarjo</option>
                                                                <option value="50">RSIA Kirana</option>
                                                                <option value="51">RSIA Buah Delima</option>
                                                                <option value="52">RS Rahman Rahim</option>
                                                                <option value="53">RSIA Mitra Husada</option>
                                                                <option value="54">Puskesmas Wiguna</option>
                                                                <option value="55">Dinas Kesehatan</option>
                                                                <option value="56">faskes wiguna</option>
                                                                <option value="57">PMI Sidoarjo</option>
                                                                <option value="75">Faskes Simulasi Medokan Asri</option>
                                                                <option value="84">RS DKT Sidoarjo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="col-md-3" style="padding-left: 0px;">
                                                            <h5><b>Instruksi </b><span style="color: red;">*</span></h5>
                                                        </div>
                                                        <div class="col-md-9" style="padding-right: 0px;">
                                                            <textarea class="form-control" rows="2" id="instruksi"
                                                                name="instruksi"></textarea>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-xs-12" style="margin-bottom: 10px;">
                                                        <button class="btn btn-primary pull-right"
                                                            style="color: #fff;">Request</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        {{-- <div class="tab-pane" id="info_resource">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <table id="example3"
                                                        class="table table-bordered dataTable no-footer table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td class="text-center">W 8504 PP</td>
                                                                <td class="text-center">Mobil</td>
                                                                <td class="text-center">A</td>
                                                                <td class="text-center">PKM SIDOARJO</td>
                                                                <td class="text-center">
                                                                    <a class="btn btn-danger" data-toggle="modal"
                                                                        data-placement="left" data-target=""
                                                                        title="Goto Location" style="margin: 4px 3px;">Goto
                                                                        Location</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">2</td>
                                                                <td class="text-center">W 8483 NP</td>
                                                                <td class="text-center">Mobil</td>
                                                                <td class="text-center">A</td>
                                                                <td class="text-center">PKM SUKODONO</td>
                                                                <td class="text-center">
                                                                    <a class="btn btn-danger" data-toggle="modal"
                                                                        data-placement="left" data-target=""
                                                                        title="Goto Location" style="margin: 4px 3px;">Goto
                                                                        Location</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td class="text-center">W 8379 PP</td>
                                                                <td class="text-center">Mobil</td>
                                                                <td class="text-center">A</td>
                                                                <td class="text-center">PKM TAMAN</td>
                                                                <td class="text-center">
                                                                    <a class="btn btn-danger" data-toggle="modal"
                                                                        data-placement="left" data-target=""
                                                                        title="Goto Location" style="margin: 4px 3px;">Goto
                                                                        Location</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>

                                </div>
                                <!-- /.nav-tabs-custom -->
                            </div>
                        </div>
                        <!-- END FORM-->
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
                {{-- <form id="form-data">
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
                                    <td class="text-center">AMB_1974 - B 1974 WQ<br><i class="fa fa-car"
                                            style="color: #89c4f4;"> Mobil</i></td>
                                    <td class="text-center">RSI Siti Hajar</td>
                                    <td class="text-center">2021-03-09 12:27:08</td>
                                    <td class="text-center">DITERIMA</td>
                                    <td class="text-center">(SELESAI)</td>
                                </tr>
                            </tbody>
                        </table>
                </form> --}}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var mymap = L.map('mapid').setView([-7.445999016651402, 112.71844103230215], 12);
        var ambulance = L.icon({
            iconUrl: "{{ url('marker/ambulance-marker.png') }}",
            iconSize: [40, 45],
            iconAnchor: [19.7, 45],
            popupAnchor: [1, -35],
            className: 'ready-reso'
        });
        var clinic = L.icon({
            iconUrl: "{{ url('marker/clinic.png') }}",
            iconSize: [30, 35],
            iconAnchor: [14.6, 34.2],
            popupAnchor: [1, -20]
        });
        var clinic24 = L.icon({
            iconUrl: "{{ url('marker/clinic-24.png') }}",
            iconSize: [30, 35],
            iconAnchor: [14.6, 34.2],
            popupAnchor: [1, -20]
        });
        var hospital = L.icon({
            iconUrl: "{{ url('marker/hospital.png') }}",
            iconSize: [40, 45],
            iconAnchor: [19.7, 43],
            popupAnchor: [1, -30]
        });
        var hospital24 = L.icon({
            iconUrl: "{{ url('marker/hospital-24.png') }}",
            iconSize: [40, 45],
            iconAnchor: [19.7, 43],
            popupAnchor: [1, -30]
        });
        var faskes = reso = [];
        var grupfaskes = grupreso = filtercontrol = '';

        L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(mymap);
        var drawcircle = L.circle([-7.447006, 112.718655], {
            radius: $('#map-radius').val()
        }).addTo(mymap);
        var marker = L.marker([-7.447006, 112.718655]).addTo(mymap);

    </script>
    <script>
        $(function() {
            $('.select2').select2()
            $('#example1').DataTable({
                processing: true,
                serverSide: true,
                lengthChange: false,
                autoWidth: false,
                searching: true,
                ordering: false,
                info: true,
                pageLength: 20,
                // scrollX: true,
                "order": [
                    [0, "desc"]
                ],
                ajax: '{{ route('get-incidents') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'kode_kasus',
                        name: 'kode_kasus'
                    },
                    {
                        data: 'nama_pelapor',
                        name: 'nama_pelapor'
                    },
                    {
                        data: 'waktu',
                        name: 'waktu'
                    },
                    {
                        data: 'lokasi',
                        name: 'lokasi'
                    },
                    {
                        data: 'category.kategori',
                        name: 'category.kategori'
                    },
                    {
                        data: 'jumlah_pasien',
                        name: 'jumlah_pasien'
                    },
                    {
                        data: 'keterangan',
                        name: 'keterangan'
                    },
                    {
                        data: 'Aksi',
                        name: 'Aksi',
                        orderable: false,
                        serachable: false,
                        sClass: 'text-center'
                    }
                ]
            })
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
            // $('#example3').DataTable({
            //     'paging': true,
            //     'lengthChange': true,
            //     'searching': false,
            //     'ordering': true,
            //     'info': true,
            //     'autoWidth': false
            // })
            $('#form-req').submit(function(e) {
                e.preventDefault();
            });
            $('#btn-refresh-resource').click(function() {
                var form = $('#form-req'),
                    id = form.find('id').val(),
                    b = $(this);
                var rad = $('#map-radius').val();

                $.ajax({
                    url: "req_bantuan/" + id + "/edit",
                    method: 'GET',
                    beforeSend: function() {
                        b.attr('disabled', 'disabled');
                    },
                    success: function(result) {
                        reso = [];
                        if (grupreso != '') {
                            mymap.removeLayer(grupreso);
                        }
                        grupreso = L.layerGroup().addTo(mymap);
                        var optReso = "<option value=''>-- Pilih Resource --</option>";
                        $.each(result.resources, function(index, value) {
                            if (value.sessions[0].lat != '' && value.sessions[0].lat !=
                                null) {
                                reso[index] = L.marker([value.sessions[0].lat, value
                                    .sessions[
                                        0].lng
                                ], {
                                    icon: ambulance
                                }).bindPopup('<b>' + value.kode + ' - ' + value
                                    .nomor_polisi +
                                    '</b><br>Kelas ' + value.kelas + '<br>' + value
                                    .healthfacility
                                    .nama);
                                if (marker.getLatLng().distanceTo(reso[index]
                                        .getLatLng()) <
                                    rad) {
                                    grupreso.addLayer(reso[index]);
                                    optReso += "<option value='" + value.id + "'>" +
                                        value.kode +
                                        " - " + value
                                        .nomor_polisi + " --- " + value
                                        .healthfacility
                                        .nama + "</option>";
                                }
                            }
                        });
                        $('#resource_id').html(optReso);
                        var overlay = {
                            'Faskes': grupfaskes,
                            'Resources': grupreso,
                        };
                        if (filtercontrol != '') {
                            mymap.removeControl(filtercontrol)
                        }
                        filtercontrol = L.control.layers(null, overlay, {}).addTo(mymap);

                        b.removeAttr('disabled');
                    },
                    error: function() {
                        b.removeAttr('disabled');
                    }
                });
            });
            $('#ModalRequest').on('shown.bs.modal', function() {
                setTimeout(function() {
                    mymap.dragging.enable();
                    mymap.invalidateSize();
                }, 1);

            });
            $('#map-radius').change(function() {
                var thisradius = $(this).val();
                drawcircle.setRadius(thisradius);
                grupfaskes.clearLayers();
                $.each(faskes, function(index, value) {
                    if (value) {
                        if (marker.getLatLng().distanceTo(value.getLatLng()) < thisradius) {
                            grupfaskes.addLayer(value);

                        }
                    }
                });
                grupreso.clearLayers();
                $.each(reso, function(index, value) {
                    if (value) {
                        if (marker.getLatLng().distanceTo(value.getLatLng()) < thisradius) {
                            grupreso.addLayer(value);

                        }
                    }
                });
            });

        }).on('click', '#btn-lihat', function() {
            var id = $(this).data('id'),
                b = $(this);
            $.ajax({
                url: "get-incident-by-id/" + id,
                method: 'GET',
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                },
                success: function(result) {
                    $('#ccn').html(result.kode_kasus);
                    $('#pelapor').html(result.nama_pelapor);
                    $('#lokasi').html(result.lokasi + '<br>(' + result.detail_lokasi + ')');
                    $('#keterangan').html(result.keterangan);
                    b.removeAttr('disabled');
                    $('#ModalInput').modal('show');
                },
                error: function() {
                    b.removeAttr('disabled');
                }
            });
        }).on('click', '#btn-detail', function() {
            var id = $(this).data('id'),
                b = $(this);

            window.location.href = "{{ url('req_bantuan') }}" + "/" + id;
        }).on('click', '#btn-edit', function() {
            var id = $(this).data('id'),
                b = $(this);

            window.location.href = "{{ url('req_bantuan') }}" + "/" + id + "/edit";
        }).on('click', '#btn-req', function() {
            var form = $('#form-req'),
                id = $(this).data('id'),
                b = $(this),
                i = b.find('i'),
                cls = i.attr('class');
            var rad = $('#map-radius').val();

            $.ajax({
                url: "req_bantuan/" + id + "/edit",
                method: 'GET',
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                    i.removeClass().addClass('fa fa-spin fa-circle-o-notch');
                },
                success: function(result) {
                    form.find('#id').val(result.id);
                    form.find('#lng').val(result.longitude);
                    form.find('#lat').val(result.latitude);

                    $('#ModalRequest').modal('show');
                    if (marker != '') {
                        mymap.removeLayer(marker);
                    }
                    if (drawcircle != '') {
                        mymap.removeLayer(drawcircle);
                    }
                    mymap.setView([result.latitude, result.longitude], 12);
                    marker = L.marker([result.latitude, result.longitude], {
                        draggable: false,
                    }).bindPopup('<b>Titik Lokasi Kejadian</b>').addTo(mymap);

                    drawcircle = L.circle([result.latitude, result.longitude], {
                        radius: rad
                    }).addTo(mymap);
                    faskes = [];
                    if (grupfaskes != '') {
                        mymap.removeLayer(grupfaskes);
                    }
                    grupfaskes = L.layerGroup().addTo(mymap);
                    var optFaskes = "<option value=''>-- Pilih Faskes --</option>";
                    $.each(result.faskes, function(index, value) {

                        if (value.lat != '' && value.lat != null) {
                            var markericon = '';
                            if (value.kategori == 'rs') {
                                if (value.is_fullday == 1) {
                                    markericon = hospital24;
                                } else {
                                    markericon = hospital;
                                }
                            } else {
                                if (value.is_fullday == 1) {
                                    markericon = clinic24;
                                } else {
                                    markericon = clinic;
                                }
                            }
                            faskes[index] = L.marker([value.lat, value.lng], {
                                icon: markericon
                            }).bindPopup('<b>' + value.nama + '</b><br>' + value
                                .alamat);
                            if (marker.getLatLng().distanceTo(faskes[index].getLatLng()) <
                                rad) {
                                grupfaskes.addLayer(faskes[index]);
                                var statusfaskes = '';
                                if (value.is_fullday == 1) {
                                    statusfaskes += 'Buka 24 Jam';
                                } else {
                                    statusfaskes += 'NON 24 Jam';
                                }
                                if (value.is_has_ekg == 1) {
                                    statusfaskes += ' - EKG';
                                } else {
                                    statusfaskes += ' - NON EKG';
                                }

                                optFaskes += "<option value='" + value.id + "'>" + value.nama +
                                    " --- " + statusfaskes + "</option>";
                            }
                        }
                    });
                    reso = [];
                    if (grupreso != '') {
                        mymap.removeLayer(grupreso);
                    }
                    grupreso = L.layerGroup().addTo(mymap);
                    var optReso = "<option value=''>-- Pilih Resource --</option>";
                    $.each(result.resources, function(index, value) {
                        if (value.sessions[0].lat != '' && value.sessions[0].lat != null) {
                            reso[index] = L.marker([value.sessions[0].lat, value.sessions[
                                0].lng], {
                                icon: ambulance
                            }).bindPopup('<b>' + value.kode + ' - ' + value.nomor_polisi +
                                '</b><br>Kelas ' + value.kelas + '<br>' + value
                                .healthfacility
                                .nama);
                            if (marker.getLatLng().distanceTo(reso[index].getLatLng()) <
                                rad) {
                                grupreso.addLayer(reso[index]);
                                optReso += "<option value='" + value.id + "'>" + value.kode +
                                    " - " + value
                                    .nomor_polisi + " --- " + value
                                    .healthfacility
                                    .nama + "</option>";
                            }
                        }
                    });
                    $('#resource_id').html(optReso);
                    $('#health_facility_id').html(optFaskes);
                    var overlay = {
                        'Faskes': grupfaskes,
                        'Resources': grupreso,
                    };
                    if (filtercontrol != '') {
                        mymap.removeControl(filtercontrol)
                    }
                    filtercontrol = L.control.layers(null, overlay, {}).addTo(mymap);

                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);
                },
                error: function() {
                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);
                }
            });

        })

    </script>
@endsection
