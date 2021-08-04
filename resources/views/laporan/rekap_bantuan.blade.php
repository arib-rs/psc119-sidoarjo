@extends('layout/main')

@section('title', 'Rekap Bantuan ')

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
            Rekap Bantuan
            <small>Daftar Semua Pengiriman Bantuan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-files-o"></i> Laporan - Laporan</a></li>
            <li class="active"> Rekap Bantuan </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#rekap_bantuan" data-toggle="tab">Rekap Bantuan</a></li>
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
                                <th class="text-center">CallCard Number</th>
                                <th class="text-center">Waktu Kejadian</th>
                                <th class="text-center">Informasi</th>
                                <th class="text-center">Pelapor</th>
                                <th class="text-center">Waktu Request</th>
                                <th class="text-center">Pasien</th>
                                <th class="text-center">Kategori Kejadian</th>
                                <th class="text-center">Lokasi Kejadian</th>
                                <th class="text-center">Asal Bantuan</th>
                                <th class="text-center">Tujuan</th>
                                <th class="text-center">Ambulan</th>
                                <th class="text-center">JT Penanganan</th>
                                <th class="text-center">Jarak Tempuh PP</th>
                                <th class="text-center">Status Bantuan</th>
                                <th class="text-center" style="width: 75px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">CCN1459-1615467473</td>
                                <td class="text-center">2021-03-11 19:57:57</td>
                                <td class="text-center">SOSIAL MEDIA</td>
                                <td class="text-center">BU TUTUS</td>
                                <td class="text-center">2021-03-11 20:01:53</td>
                                <td class="text-center">BPK. DJOKO - 38 - PRIA</td>
                                <td class="text-center">POST KEJANG</td>
                                <td class="text-center">JL.ROYAL PARK JUANDA TAMBAK KWANGSAN SEDATI</td>
                                <td class="text-center">PKM SEDATI</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center">W 8511 PP</td>
                                <td class="text-center">7.5717 KM</td>
                                <td class="text-center">19.90 KM</td>
                                <td class="text-center"><button class="btn btn-success" style="width: 34px; height: 30px;"></button></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button>
                                    <button class="btn btn-sm btn-warning" type="button" title="Edit Performance" data-toggle="modal" data-target="#modal"><i class="fa fa-pencil"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">CCN1459-1615457321</td>
                                <td class="text-center">2021-03-11 17:08:45</td>
                                <td class="text-center">TELEPON 119</td>
                                <td class="text-center">LUTFI</td>
                                <td class="text-center">2021-03-09 13:11:18</td>
                                <td class="text-center">MR X - 0 - PRIA</td>
                                <td class="text-center">TIDAK SADAR/PINGSAN/HAMPIR PINGSAN/TIDAK BERNYAWA</td>
                                <td class="text-center">JL. IKAN SEPAT VI, DUSUN BLURU KIDUL, BLURU KIDUL, KEC. SIDOARJO, KABUPATEN SIDOARJO, JAWA TIMUR 61233, INDONESIA</td>
                                <td class="text-center">RSI SITI HAJAR</td>
                                <td class="text-center">RSI SITI HAJAR</td>
                                <td class="text-center">B 1974 WQ</td>
                                <td class="text-center">5.32266 KM</td>
                                <td class="text-center">5.32 KM</td>
                                <td class="text-center"><button class="btn btn-success" style="width: 34px; height: 30px;"></button></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button>
                                    <button class="btn btn-sm btn-warning" type="button" title="Edit Performance" data-toggle="modal" data-target="#modal"><i class="fa fa-pencil"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">CCN1459-1615164809</td>
                                <td class="text-center">2021-03-08 07:53:31</td>
                                <td class="text-center">HP</td>
                                <td class="text-center">NY KIKI</td>
                                <td class="text-center">2021-03-07 14:05:31</td>
                                <td class="text-center">TN MUH CHUZAINI - 64 - PRIA</td>
                                <td class="text-center">KECELAKAAN LALU LINTAS (KLL)</td>
                                <td class="text-center">PEGADAIAN LARANGAN SIDOARJO</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center">W 1310 NP</td>
                                <td class="text-center">2.94 KM</td>
                                <td class="text-center">2.77 KM</td>
                                <td class="text-center"><button class="btn btn-success" style="width: 34px; height: 30px;"></button></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button>
                                    <button class="btn btn-sm btn-warning" type="button" title="Edit Performance" data-toggle="modal" data-target="#modal"><i class="fa fa-pencil"></i></button>
                                </td>
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

@section('modal')
<div id="modal" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:40%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Update Performance Laporan : CCN1459-1615467473, Ambulan : W 8511 PP</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method='post' id="form_req" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Mulai</label>
                                <div class="col-md-8">
                                    <input type="text" id="mulai" name="mulai" class="form-control" value="2021-03-11 20:01:54" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Menuju Lokasi</label>
                                <div class="col-md-8">
                                    <input type="text" id="menuju_lokasi" name="mulai" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Tiba di Lokasi</label>
                                <div class="col-md-8">
                                    <input type="text" id="tiba_di_lokasi" name="tiba_di_lokasi" class="form-control" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Menuju Faskes</label>
                                <div class="col-md-8">
                                    <input type="text" id="menuju_rs" name="menuju_rs" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Tiba di Faskes</label>
                                <div class="col-md-8">
                                    <input type="text" id="tiba_di_rs" name="tiba_di_rs" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
            <div class="modal-footer">
                <button type="submit" onclick='' class="btn btn-primary">Update Response</button>
            </div>
        </div>
    </div>
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
