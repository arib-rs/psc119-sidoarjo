@extends('layout/main')

@section('title', 'Emergency Button User')

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
            Emergency Button User
            <small>Data Emergency Button User</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> User & Device Management</a></li>
            <li class="active"> Emergency Button User</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th class="text-center">NAMA</th>
                                            <th class="text-center">NO. KTP</th>
                                            <th class="text-center">EMAIL</th>
                                            <th class="text-center">NO. TELEPON</th>
                                            <th class="text-center">USERNAME</th>
                                            <th class="text-center">DEVICE ID</th>
                                            <th class="text-center">AKTIF</th>
                                            <th class="text-center">STATUS</th>
                                            <th class="text-center">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Prastowo Agung Judana</td>
                                            <td class="text-center">3216011007700019</td>
                                            <td class="text-center">prast@hotmail.com</td>
                                            <td class="text-center">087877737531</td>
                                            <td class="text-center">prast</td>
                                            <td class="text-center">2619a1b6efce6504</td>
                                            <td class="text-center"><button class="btn btn-success btn-sm" id="aktif" value=""><i class="fa fa-check-square-o"> Aktif</i></button></td>
                                            <td class="text-center"><button class="btn btn-success btn-sm" id="verified" value=""><i class="fa fa-check-square-o"> Verified</i></button></td>
                                            <td class="text-center"><button title="Lihat Data" href="#" role="button" data-toggle="modal" class="btn btn-show btn-sm btn-primary" data-target="#modal" onclick=""><i class="fa fa-eye"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">Lega Utha S. W</td>
                                            <td class="text-center">3507136011870003</td>
                                            <td class="text-center">legautha@gmail.com</td>
                                            <td class="text-center">082233629995</td>
                                            <td class="text-center">Lega Utha</td>
                                            <td class="text-center">dfe3d2a9c98bb98b</td>
                                            <td class="text-center"><button class="btn btn-danger btn-sm" id="aktif" value=""><i class="fa fa-times-circle"> Aktif</i></button></td>
                                            <td class="text-center"><button class="btn btn-danger btn-sm" id="verified" value=""><i class="fa fa-times-circle"> Verified</i></button></td>
                                            <td class="text-center"><button title="Lihat Data" href="#" role="button" data-toggle="modal" class="btn btn-show btn-sm btn-primary" data-target="#modal" onclick=""><i class="fa fa-eye"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">Fitri Handayani</td>
                                            <td class="text-center">3515075403940002</td>
                                            <td class="text-center">fitrirachman1429@gmail.com</td>
                                            <td class="text-center">0895329888525</td>
                                            <td class="text-center">Fitrihandayani</td>
                                            <td class="text-center">13dbc4c6af277ab7</td>
                                            <td class="text-center"><button class="btn btn-danger btn-sm" id="aktif" value=""><i class="fa fa-times-circle"> Aktif</i></button></td>
                                            <td class="text-center"><button class="btn btn-danger btn-sm" id="verified" value=""><i class="fa fa-times-circle"> Verified</i></button></td>
                                            <td class="text-center"><button title="Lihat Data" href="#" role="button" data-toggle="modal" class="btn btn-show btn-sm btn-primary" data-target="#modal" onclick=""><i class="fa fa-eye"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">Gaguk bebas basuki</td>
                                            <td class="text-center">3515101511730002</td>
                                            <td class="text-center">gagukbasuki@gmail.com</td>
                                            <td class="text-center">085605067407</td>
                                            <td class="text-center">ghosbuster</td>
                                            <td class="text-center">69d51512fad0e8b0</td>
                                            <td class="text-center"><button class="btn btn-success btn-sm" id="aktif" value=""><i class="fa fa-check-square-o"> Aktif</i></button></td>
                                            <td class="text-center"><button class="btn btn-success btn-sm" id="verified" value=""><i class="fa fa-check-square-o"> Verified</i></button></td>
                                            <td class="text-center"><button title="Lihat Data" href="#" role="button" data-toggle="modal" class="btn btn-show btn-sm btn-primary" data-target="#modal" onclick=""><i class="fa fa-eye"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">M Herles</td>
                                            <td class="text-center">3515110301940007</td>
                                            <td class="text-center">herlezkurniawan94@gmail.com</td>
                                            <td class="text-center">081232451552</td>
                                            <td class="text-center">herlez</td>
                                            <td class="text-center">8e74facd95a9b05d</td>
                                            <td class="text-center"><button class="btn btn-success btn-sm" id="aktif" value=""><i class="fa fa-check-square-o"> Aktif</i></button></td>
                                            <td class="text-center"><button class="btn btn-success btn-sm" id="verified" value=""><i class="fa fa-check-square-o"> Verified</i></button></td>
                                            <td class="text-center"><button title="Lihat Data" href="#" role="button" data-toggle="modal" class="btn btn-show btn-sm btn-primary" data-target="#modal" onclick=""><i class="fa fa-eye"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
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
                                <label class="control-label col-md-4">NAMA ZONA<span class="required" style="color: red;">
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
                                <label class="control-label col-md-4">USERNAME<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' class='form-control' name='username' readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">DEVICE ID<span class="required" style="color: red;">
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
                                    <button class="btn btn-success btn-sm" id="aktif" value=""><i class="fa fa-check-square-o"> Aktif</i></button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">STATUS<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <button class="btn btn-success btn-sm" id="verified" value=""><i class="fa fa-check-square-o"> Verified</i></button>
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
                                        <td class="text-center"><button class="btn btn-success btn-sm" id="ya" value=""><i class="fa fa-check-square-o"> Ya</i></button></td>
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
                                        <td class="text-center"><button class="btn btn-success btn-sm" id="ya" value=""><i class="fa fa-check-square-o"> Ya</i></button></td>
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
</script>
@endsection
