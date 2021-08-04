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
                        <table id="data-bloodbags" class="table table-bordered dataTable no-footer table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 40px;">No</th>
                                    <th class="text-center">Golongan Darah</th>
                                    <th class="text-center">Tipe Darah</th>
                                    <th class="text-center">Tersedia</th>
                                    <th class="text-center" style="width: 100px;"><a id="btn-add-bloodbag"
                                            data-toggle="tooltip" class="btn btn-xs btn-success"><i
                                                class="fa fa-plus-circle"></i> Input Data</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">O-</td>
                                    <td class="text-center">LP - Liquid Plasma</td>
                                    <td class="text-center">Tersedia</td>
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
                                    <label class="control-label col-md-4">Golongan Darah<span class="required"
                                            style="color: red;">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <select id="golongan_darah" name="golongan_darah" class="form-control">
                                            <option value="">Pilih Golongan Darah</option>
                                            <option value="">A+</option>
                                            <option value="">A-</option>
                                            <option value="">B+</option>
                                            <option value="">B-</option>
                                            <option value="">AB+</option>
                                            <option value="">AB-</option>
                                            <option value="">O+</option>
                                            <option value="">O-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Tipe Darah<span class="required"
                                            style="color: red;">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <select id="tipe_darah" name="tipe_darah" class="form-control">
                                            <option value="">Pilih Tipe Darah</option>
                                            <option value="">WB - Wholed Blood</option>
                                            <option value="">PRC - Packed Red Cell</option>
                                            <option value="">TC - Trombosit</option>
                                            <option value="">LP - Liquid Plasma</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Tersedia<span class="required"
                                            style="color: red;">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="tersedia" name="tersedia" class="form-control">
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
