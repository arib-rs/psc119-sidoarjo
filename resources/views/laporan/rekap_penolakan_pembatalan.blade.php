@extends('layout/main')

@section('title', 'Rekap Laporan Penolakan & Pembatalan Penugasan')

@section('css')
<style>
    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #3867d6;
    }
</style>
@endsection

@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Rekap Laporan Penolakan & Pembatalan Penugasan
            <small>Daftar Semua Penolakan dan Pembatalan Penugasan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-files-o"></i> Laporan - Laporan</a></li>
            <li class="active"> Rekap Laporan Penolakan & Pembatalan Penugasan </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#rekap_bantuan" data-toggle="tab">Rekap Laporan Penolakan & Pembatalan Penugasan</a></li>
            </ul>
            <div class="tab-content">
                <!-- Font Awesome Icons -->
                <div class="tab-pane active" id="rekap_bantuan">
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
                        <div class="col-md-7"></div>
                        <div class="col-md-1 text-right">
                            <div class="btn-group pull-right">
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
                                <th class="text-center">No. Laporan</th>
                                <th class="text-center">Waktu Kejadian</th>
                                <th class="text-center">Informasi</th>
                                <th class="text-center">Pelapor</th>
                                <th class="text-center">Waktu Request</th>
                                <th class="text-center">Lokasi Kejadian</th>
                                <th class="text-center">Rumah Sakit Asal</th>
                                <th class="text-center">Rumah Sakit Tujuan</th>
                                <th class="text-center">Dispatcher</th>
                                <th class="text-center">Driver</th>
                                <th class="text-center">Ambulan</th>
                                <th class="text-center">Status Request</th>
                                <th class="text-center">Alasan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">PSC-20210702-761461</td>
                                <td class="text-center">2019-12-08 06:31:04</td>
                                <td class="text-center">TELEPON 119</td>
                                <td class="text-center">TN WAMO</td>
                                <td class="text-center">2019-12-08 06:39:14</td>
                                <td class="text-center">SURABAYA CARNIVAL PARK, JL. AHMAD YANI NO.333, DUKUH MENANGGAL, KEC. GAYUNGAN, KOTA SBY, JAWA TIMUR</td>
                                <td class="text-center">PKM WARU</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center">DISPATCHER 01</td>
                                <td class="text-center">SUMARNO</td>
                                <td class="text-center">W 8356 PP</td>
                                <td class="text-center">DIBATALKAN</td>
                                <td class="text-center">SUDAH DITUGASKAN KE PKM WARU</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">PSC-20210702-958190</td>
                                <td class="text-center">2019-12-10 13:09:53</td>
                                <td class="text-center">SIMULASI</td>
                                <td class="text-center">DR.NYOMAN</td>
                                <td class="text-center">2019-12-10 13:24:05</td>
                                <td class="text-center">RUMAH SAKIT DELTASURYA SIDOARJO</td>
                                <td class="text-center">RS DELTA SURYA</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center">DINKES PSC</td>
                                <td class="text-center">ADITYO</td>
                                <td class="text-center">W 7467 N</td>
                                <td class="text-center">DITOLAK</td>
                                <td class="text-center">AMBULANCE MSH DI BUAT NGRUJUK</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">PSC-20210708-065548</td>
                                <td class="text-center">2019-12-11 18:59:38</td>
                                <td class="text-center">TELEPON 119</td>
                                <td class="text-center">PANDU</td>
                                <td class="text-center">2019-12-11 19:11:35</td>
                                <td class="text-center">SAFIR RESIDEN RESIDEN BUDURAN SIDOARJO</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center">DISPATCHER 02</td>
                                <td class="text-center">ULUL ALBAB</td>
                                <td class="text-center">W 1046 NP</td>
                                <td class="text-center">DIBATALKAN</td>
                                <td class="text-center">KORBAN SUDAH DIBAWA MOBIL PRIBADI</td>
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
        $('#example1').DataTable({
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
