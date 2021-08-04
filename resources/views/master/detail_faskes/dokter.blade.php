@extends('layout/main')

@section('title', 'Fasilitas Kesehatan')

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
                        {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="btn-group">
                                <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput"
                                    class="btn btn-success">
                                    <i class="fa fa-plus-circle"></i> Insert Data</button>
                            </div>
                        </div>
                    </div><br> --}}
                        <input type="hidden" name="idfaskes" id="idfaskes" value="{{ $idfaskes }}">
                        <table id="data-doctors" class="table table-bordered dataTable no-footer table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 40px;">No</th>
                                    <th class="text-center">Nama Dokter</th>
                                    <th class="text-center">Spesialis</th>
                                    <th class="text-center">Hari Praktek</th>
                                    <th class="text-center">Jam Praktek</th>
                                    <th class="text-center">Jenis Pelayanan</th>
                                    <th class="text-center" style="width: 100px;"><a id="btn-add-bloodbag"
                                            data-toggle="tooltip" class="btn btn-xs btn-success"><i
                                                class="fa fa-plus-circle"></i> Input Data</a>
                                    </th>
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
                                            <button class="btn btn-sm btn-primary" type="button" title="Edit Data"
                                                data-toggle="modal" data-target="#ModalInput"><i
                                                    class="fa fa-pencil-square-o"></i></button>
                                            <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i
                                                    class="fa fa-trash"></i></button>
                                        </div>
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
        <div class="modal-dialog modal-dialog-centered modal-md">
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
                                    <label class="control-label col-md-4">Nama<span class="required" style="color: red;">
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
