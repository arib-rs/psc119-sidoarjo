@extends('layout/main')

@section('title', 'Fasilitas Kesehatan')

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
            Fasilitas Kesehatan
            <small>Data Fasilitas Kesehatan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-flag"></i> Master</a></li>
            <li class="active"> Fasilitas Kesehatan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#resource" data-toggle="tab">Data Fasilitas Kesehatan</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="resource">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="btn-group">
                                <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput" class="btn btn-success">
                                    <i class="fa fa-plus-circle"></i> Insert Data</button>
                            </div>
                        </div>
                    </div><br>
                    <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 40px;">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Foto</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Buka 24 Jam</th>
                                <th class="text-center">Ada EKG</th>
                                <th class="text-center">Bed</th>
                                <th class="text-center">Dokter</th>
                                <th class="text-center">Darah</th>
                                <th class="text-center" style="width: 100px;">Aksi</th>
                                <th class="text-center" style="width: 50px;">Aktif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Command Center</td>
                                <td class="text-center">Jl. Mojopahit No.667, Sidowayah, Celep, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61215, Indonesia</td>
                                <td class="text-center">Foto</td>
                                <td class="text-center">Command Center</td>
                                <td class="text-center"><button class="btn btn-success btn-sm" id="ya" value="" style="background-color: #3B9C96;"><i class="fa fa-check-square-o"> Ya</i></button></td>
                                <td class="text-center"><button class="btn btn-danger btn-sm" id="tidak" value=""><i class="fa fa-check-square-o"> Tidak</i></button></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="List Bed"><i class="glyphicon glyphicon-list"></i></button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="List Dokter"><i class="glyphicon glyphicon-list"></i></button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="List Bag Darah"><i class="glyphicon glyphicon-list"></i></button>
                                </td>
                                <td class="text-center">
                                    <div style="margin-bottom: 5px;">
                                        <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-success" type="button" title="Edit Profesi"><i class="glyphicon glyphicon-user"></i></button>
                                        <button class="btn btn-sm btn-success" type="button" title="Edit Shift"><i class="glyphicon glyphicon-pencil"></i></button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" style="background-color: #3B9C96;"><i class="fa fa-pencil-square-o"></i></button>
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
<div id="ModalInput" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Form</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Nama<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='nama' name='nama' class='form-control'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Kategori<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select id='kategori' name='kategori' class='form-control'>
                                        <option value="">Pilih Kategori</option>
                                        <option value="">Command Center</option>
                                        <option value="">Rumah Sakit</option>
                                        <option value="">Puskesmas</option>
                                        <option value="">Klinik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Foto<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='foto' name='foto' class='form-control'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Keterangan<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <textarea id='keterangan' name='keterangan' class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">No. Telepon<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='no_telepon' name='no_telepon' class='form-control'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Contact Person<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='contact_person' name='contact_person' class='form-control'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Email<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='email' name='email' class='form-control'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Status Ponek/Poned<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select id='ponek_poned' name='ponek_poned' class='form-control'>
                                        <option value="">Pilih Status</option>
                                        <option value="">PONEK</option>
                                        <option value="">PONED</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
            <div class="modal-footer">
                <button type="submit" onclick="" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<div id="ModalInputLayanan" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Form</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Layanan<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="layanan" name="layanan" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
            <div class="modal-footer">
                <button type="submit" onclick="" class="btn btn-primary">Simpan</button>
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

    $('#datepicker').datepicker({
        autoclose: true
    })
</script>
@endsection