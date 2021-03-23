@extends('layout/main')

@section('title', 'Sub Kategori')

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
            Sub Kategori
            <small>Daftar Sub Kategori</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-flag"></i> Master</a></li>
            <li class="active">Sub Kategori</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#sub_kategori" data-toggle="tab">Data Sub Kategori</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="sub_kategori">
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
                                <th class="text-center" style="width: 50px;">No</th>
                                <th class="text-center">Medis</th>
                                <th class="text-center">Emergency</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center" style="width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="medis" value="" style="background-color: #3B9C96;"><i class="fa fa-check-square-o"> Medis</i></button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="emergency" value="" style="background-color: #3B9C96;"><i class="fa fa-check-square-o"> Emergency</i></button>
                                </td>
                                <td class="text-center">Trauma KLL</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="medis" value="" style="background-color: #3B9C96;"><i class="fa fa-check-square-o"> Medis</i></button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="emergency" value="" style="background-color: #3B9C96;"><i class="fa fa-check-square-o"> Emergency</i></button>
                                </td>
                                <td class="text-center">Trauma Non KLL</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="medis" value="" style="background-color: #3B9C96;"><i class="fa fa-check-square-o"> Medis</i></button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="emergency" value="" style="background-color: #3B9C96;"><i class="fa fa-check-square-o"> Emergency</i></button>
                                </td>
                                <td class="text-center">Non Trauma - Emergency</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="text-center">
                                    <button class="btn btn-danger btn-sm" id="medis" value=""><i class="fa fa-check-square-o"> Non Medis</i></button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="emergency" value="" style="background-color: #3B9C96;"><i class="fa fa-check-square-o"> Emergency</i></button>
                                </td>
                                <td class="text-center">Kebakaran</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td class="text-center">
                                    <button class="btn btn-danger btn-sm" id="medis" value=""><i class="fa fa-check-square-o"> Non Medis</i></button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="emergency" value="" style="background-color: #3B9C96;"><i class="fa fa-check-square-o"> Emergency</i></button>
                                </td>
                                <td class="text-center">Bencana Alam</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="medis" value="" style="background-color: #3B9C96;"><i class="fa fa-check-square-o"> Medis</i></button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-danger btn-sm" id="emergency" value=""><i class="fa fa-check-square-o"> Non Emergency</i></button>
                                </td>
                                <td class="text-center">Tidak Diketahui</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td class="text-center">
                                    <button class="btn btn-danger btn-sm" id="medis" value=""><i class="fa fa-check-square-o"> Non Medis</i></button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="emergency" value="" style="background-color: #3B9C96;"><i class="fa fa-check-square-o"> Emergency</i>
                                <td class="text-center">Keamanan dan Ketertiban</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">8</td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="medis" value="" style="background-color: #3B9C96;"><i class="fa fa-check-square-o"> Medis</i></button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-danger btn-sm" id="emergency" value=""><i class="fa fa-check-square-o"> Non Emergency</i></button>
                                </td>
                                <td class="text-center">Non Trauma - Non Emergency</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

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
                    <form method='post' id="form_req" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Medis<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select id='kemasan' name='kemasan' class='form-control'>
                                        <option value="">Pilih Medis</option>
                                        <option value="">Non Medis</option>
                                        <option value="">Medis</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Emergency<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select name='kategori' id='kategori' class="form-control select">
                                        <option value=''>Pilih Emergency</option>
                                        <option value=''>Non Emergency</option>
                                        <option value=''>Emergency</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Keterangan<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <textarea id='paramedis' name='paramedis' class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
            <div class="modal-footer">
                <button type="submit" onclick='' class="btn btn-primary">Simpan</button>
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

    $('#datepicker').datepicker({
        autoclose: true
    })
</script>
@endsection
