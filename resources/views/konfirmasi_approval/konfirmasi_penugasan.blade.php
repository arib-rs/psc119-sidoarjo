@extends('layout/main')

@section('title', 'Konfirmasi Penugasan')

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
            Konfirmasi Penugasan
            <small>Daftar Penugasan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-send"></i> Konfirmasi & Approval</a></li>
            <li class="active"> Konfirmasi Penugasan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#konfirmasi" data-toggle="tab">Konfirmasi</a></li>
                <li><a href="#sudah_konfirmasi" data-toggle="tab">Sudah Konfirmasi</a></li>
            </ul>
            <div class="tab-content">
                <!-- Font Awesome Icons -->
                <div class="tab-pane active" id="konfirmasi">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="btn-group">
                                <button role="button" class="btn btn-success">
                                    <i class="fa fa-check"></i> Konfirmasi</button>
                            </div>
                        </div>
                    </div><br>
                    <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">No</th>
                                <th class="text-center">No. Laporan</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Waktu</th>
                                <th class="text-center">Ambulan</th>
                                <th class="text-center">Rumah Sakit Asal</th>
                                <th class="text-center">Menuju Lokasi</th>
                                <th class="text-center">Tiba Di Lokasi</th>
                                <th class="text-center">Menuju RS</th>
                                <th class="text-center">Tiba di RS</th>
                                <th class="text-center">Rumah Sakit Tujuan</th>
                                <th class="text-center">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><input type="checkbox" name="" value=""></td>
                                <td class="text-center">1</td>
                                <td class="text-center">PSC-20210801-112338</td>
                                <td class="text-center">10/04/2019</td>
                                <td class="text-center">18:20:45</td>
                                <td class="text-center">W 8382 PP</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center">2019-04-10 18:23:28</td>
                                <td class="text-center">2019-04-10 18:29:30</td>
                                <td class="text-center">2019-04-10 18:33:34</td>
                                <td class="text-center">2019-04-10 18:40:36</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button"
                                        title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center"><input type="checkbox" name="" value=""></td>
                                <td class="text-center">2</td>
                                <td class="text-center">PSC-20210802-223752</td>
                                <td class="text-center">10/09/2019</td>
                                <td class="text-center">09:00:11</td>
                                <td class="text-center">W 7403 NB</td>
                                <td class="text-center">RS. ANWAR MEDIKA</td>
                                <td class="text-center">2019-09-10 11:12:04</td>
                                <td class="text-center">2019-09-10 11:17:22</td>
                                <td class="text-center"></td>
                                <td class="text-center">2019-09-10 11:25:37</td>
                                <td class="text-center">RS. ANWAR MEDIKA</td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button"
                                        title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center"><input type="checkbox" name="" value=""></td>
                                <td class="text-center">3</td>
                                <td class="text-center">PSC-20210808-115244</td>
                                <td class="text-center">10/04/2019</td>
                                <td class="text-center">18:20:45</td>
                                <td class="text-center">L 1664 VS</td>
                                <td class="text-center">RSU BUNDA WARU</td>
                                <td class="text-center">2019-04-10 18:23:28</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">2019-04-10 18:40:36</td>
                                <td class="text-center">RSU BUNDA WARU</td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button"
                                        title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center"><input type="checkbox" name="" value=""></td>
                                <td class="text-center">4</td>
                                <td class="text-center">PSC-20210809-131726</td>
                                <td class="text-center">10/04/2019</td>
                                <td class="text-center">18:20:45</td>
                                <td class="text-center">W 8382 PP</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center">2019-04-10 18:23:28</td>
                                <td class="text-center">2019-04-10 18:29:30</td>
                                <td class="text-center">2019-04-10 18:33:34</td>
                                <td class="text-center">2019-04-10 18:40:36</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button"
                                        title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- sudah konfirmasi -->
                <div class="tab-pane" id="sudah_konfirmasi">
                    <div class="row">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-default" id="daterange-btn" style="width: 100%;">
                                <span>
                                    <i class="fa fa-calendar"></i> Date range picker
                                </span>
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                        <div class="col-md-9">
                            <button role="button" class="btn btn-primary"><i class="fa fa-search"></i>
                                Tampilkan</button>
                        </div>
                    </div><br>
                    <table id="example2" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">No. Laporan</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Waktu</th>
                                <th class="text-center">Ambulan</th>
                                <th class="text-center">Rumah Sakit Asal</th>
                                <th class="text-center">Rumah Sakit Tujuan</th>
                                <th class="text-center">Verifikator</th>
                                <th class="text-center">Jam & Tanggal Konfirmasi</th>
                                <th class="text-center">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">PSC-20210801-112338</td>
                                <td class="text-center">04/02/2021</td>
                                <td class="text-center">20:56:17</td>
                                <td class="text-center">B 1974 WQ</td>
                                <td class="text-center">RSI SITI HAJAR</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center">DUWI - ARDI DUWI PUTRI, S. KEP. NS,.</td>
                                <td class="text-center">21:24:34 04/02/2021</td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button"
                                        title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /#telepon -->

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
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:35%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Detail User</b></h4>
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
                                <label class="control-label col-md-4">NAMA ZONA<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' class='form-control' name='nama_zona' readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">NO. KTP<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' class='form-control' name='no_ktp' readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">EMAIL<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' class='form-control' name='email' readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">USERNAME<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' class='form-control' name='username' readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">DEVICE ID<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' class='form-control' name='device_id' readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">AKTIF<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <button class="btn btn-success btn-sm" id="aktif" value=""><i
                                            class="fa fa-check-square-o"> Aktif</i></button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">STATUS<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <button class="btn btn-success btn-sm" id="verified" value=""><i
                                            class="fa fa-check-square-o"> Verified</i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#alamat" data-toggle="tab">Alamat</a></li>
                        <li><a href="#telepon" data-toggle="tab">Telepon</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Font Awesome Icons -->
                        <div class="tab-pane active" id="alamat">
                            <table id="example2" class="table table-bordered dataTable no-footer table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Jenis Alamat</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Keterangan</th>
                                        <th class="text-center">Utama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Tempat Tinggal</td>
                                        <td class="text-center">Rumah</td>
                                        <td class="text-center">Kediri</td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><button class="btn btn-success btn-sm" id="ya"
                                                value=""><i class="fa fa-check-square-o"> Ya</i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- telepon -->
                        <div class="tab-pane" id="telepon">
                            <table id="example3" class="table table-bordered dataTable no-footer table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Jenis Perangkat</th>
                                        <th class="text-center">Jenis Telepon</th>
                                        <th class="text-center">Nomor</th>
                                        <th class="text-center">Ref.</th>
                                        <th class="text-center">Utama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">HP Pribadi</td>
                                        <td class="text-center">Hp</td>
                                        <td class="text-center">Pribadi</td>
                                        <td class="text-center">087754595005</td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><button class="btn btn-success btn-sm" id="ya"
                                                value=""><i class="fa fa-check-square-o"> Ya</i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /#telepon -->

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
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
@endsection
