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
<<<<<<< HEAD:resources/views/master/detail_faskes/darah.blade.php
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Resource Dokter
            <small>daftar resource Dokter</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-flag"></i> Master</a></li>
            <li class="active"> Fasilitas Kesehatan</li>
            <li class="active"> Dokter</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#resource" data-toggle="tab">Data Dokter Command Center</a></li>
                <div class="pull-right" style="padding-top: 4px; padding-right: 6px;">
                    <a href="{{ url('/faskes') }}" class="btn btn-danger">X</a>
                </div>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="resource">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="btn-group">
                                <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput"
                                    class="btn btn-success">
                                    <i class="fa fa-plus-circle"></i> Insert Data</button>
=======
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
                        {{-- <div class="row">
                            <div class="col-md-4">
                                <div class="btn-group">
                                    <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput"
                                        class="btn btn-success">
                                        <i class="fa fa-plus-circle"></i> Insert Data</button>
                                </div>
>>>>>>> 3214af051b70de3ae0d4b79d50fac8a2dcceca14:resources/views/master/faskes.blade.php
                            </div>
                        </div><br> --}}
                        {{-- <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 40px;">No</th>
                                <th class="text-center">Nama Dokter</th>
                                <th class="text-center">Spesialis</th>
                                <th class="text-center">Hari Praktek</th>
                                <th class="text-center">Jam Praktek</th>
                                <th class="text-center">Jenis Pelayanan</th>
                                <th class="text-center" style="width: 80px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">dr. Nunu</td>
                                <td class="text-center">Dokter Umum</td>
                                <td class="text-center">Senin - Kamis</td>
                                <td class="text-center">09.00 - 13.00</td>
                                <td class="text-center">Pelayanan Dokter Umum</td>
                                <td class="text-center">
                                    <div class="row" style="margin-bottom: 5px;">
                                        <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> --}}
                        <table class="table table-bordered table-hover datatable">
                            <thead>
                                <tr>
                                    <th style="width: 40px;">No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Foto</th>
                                    <th>Kategori</th>
                                    <th>Buka 24 Jam</th>
                                    <th>Ada EKG</th>
                                    <th>Bed</th>
                                    <th>Dokter</th>
                                    <th>Darah</th>
                                    <th style="width: 50px;">Aktif</th>
                                    <th style="width: 100px;">
                                        <a data-toggle="modal" data-target="#ModalInput" class="btn btn-xs btn-success">
                                            <i class="fa fa-plus-circle"></i> Input Data</a>
                                    </th>
                                </tr>
                            </thead>
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
<<<<<<< HEAD:resources/views/master/detail_faskes/darah.blade.php
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
                                <label class="control-label col-md-4">Nama<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="nama" name="nama" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Keahlian<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select id="keahlian" name="keahlian" class="form-control">
                                        <option value="">Pilih Keahlian</option>
                                        <option value="">Dokter Umum</option>
                                        {{-- <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option> --}}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Hari Praktek<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="hari_praktek" name="hari_praktek" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Jam Praktek<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="jam_praktek" name="jam_praktek" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Jenis Layanan<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select id="jenis_layanan" name="jenis_layanan" class="form-control">
                                        <option value="">Pilih Pelayanan</option>
                                        {{-- <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option> --}}
                                    </select>
=======
    <div id="ModalInput" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Form Input Data Faskes</b>
                    </h4>
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
                                    <label class="control-label col-md-4 font-green-haze">Nama<span class="required"
                                            style="color: red;">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type='text' id='nama' name='nama' class='form-control'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 font-green-haze">Kategori<span class="required"
                                            style="color: red;">
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
                                    <label class="control-label col-md-4 font-green-haze">Foto<span class="required"
                                            style="color: red;">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type='text' id='foto' name='foto' class='form-control'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 font-green-haze">Keterangan<span class="required"
                                            style="color: red;">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <textarea id='keterangan' name='keterangan' class="form-control"
                                            rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 font-green-haze">No. Telepon<span class="required"
                                            style="color: red;">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type='text' id='no_telepon' name='no_telepon' class='form-control'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 font-green-haze">Contact Person<span
                                            class="required" style="color: red;">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type='text' id='contact_person' name='contact_person' class='form-control'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 font-green-haze">Email<span class="required"
                                            style="color: red;">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type='text' id='email' name='email' class='form-control'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 font-green-haze">Status Ponek/Poned<span
                                            class="required" style="color: red;">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <select id='ponek_poned' name='ponek_poned' class='form-control'>
                                            <option value="">Pilih Status</option>
                                            <option value="">PONEK</option>
                                            <option value="">PONED</option>
                                        </select>
                                    </div>
>>>>>>> 3214af051b70de3ae0d4b79d50fac8a2dcceca14:resources/views/master/faskes.blade.php
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
<<<<<<< HEAD:resources/views/master/detail_faskes/darah.blade.php
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
                                <label class="control-label col-md-4 font-green-haze">Layanan<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="layanan" name="layanan" class="form-control">
=======
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
                                    <label class="control-label col-md-4 font-green-haze">Layanan<span class="required"
                                            style="color: red;">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="layanan" name="layanan" class="form-control">
                                    </div>
>>>>>>> 3214af051b70de3ae0d4b79d50fac8a2dcceca14:resources/views/master/faskes.blade.php
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
            // $('#example1').DataTable()
            // $('#example2').DataTable({
            //     'paging': true,
            //     'lengthChange': true,
            //     'searching': true,
            //     'ordering': true,
            //     'info': true,
            //     'autoWidth': false
            // })
            var dataTable = $('.datatable').DataTable({
                processing: true,
                serverSide: true,
                lengthChange: false,
                autoWidth: false,
                searching: true,
                ordering: false,
                info: true,
                pageLength: 10,
                // scrollX: true,
                "order": [
                    [0, "desc"]
                ],
                ajax: 'get-faskes',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'pict_url',
                        name: 'pict_url',
                        sClass: 'text-center'
                    },
                    {
                        data: 'kategori',
                        name: 'kategori'
                    },
                    {
                        data: 'is_fullday',
                        name: 'is_fullday',
                        sClass: 'text-center'
                    },
                    {
                        data: 'is_has_ekg',
                        name: 'is_has_ekg',
                        sClass: 'text-center'
                    },
                    {
                        data: 'Bed',
                        name: 'Bed',
                        sClass: 'text-center'
                    },
                    {
                        data: 'Dokter',
                        name: 'Dokter',
                        sClass: 'text-center'
                    },
                    {
                        data: 'Darah',
                        name: 'Darah',
                        sClass: 'text-center'
                    },
                    {
                        data: 'is_active',
                        name: 'is_active',
                        sClass: 'text-center'
                    },

                    {
                        data: 'Aksi',
                        name: 'Aksi',
                        orderable: false,
                        serachable: false,
                        sClass: 'text-center'
                    }
                ]

            });

        })

        $('#datepicker').datepicker({
            autoclose: true
        })

    </script>
@endsection
