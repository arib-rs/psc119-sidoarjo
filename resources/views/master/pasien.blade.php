@extends('layout/main')

@section('title', 'Data Pasien')

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
            Data Pasien
            <small>Daftar Pasien Yang Ditangani</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-flag"></i> Master</a></li>
            <li class="active"> Data Pasien </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#pasien" data-toggle="tab">Data Pasien</a></li>
            </ul>
            <div class="tab-content">
                <!-- Font Awesome Icons -->
                <div class="tab-pane active" id="pasien">
                    <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Medical Card</th>
                                <th class="text-center">CCN</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Bantuan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center"></td>
                                <td class="text-center">CCN1002-1564633706</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">PRIA</td>
                                <td class="text-center">BELUM ADA TINDAK LANJUT</td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalEdit"><i class="fa fa-pencil-square-o"></i></button></td>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center"></td>
                                <td class="text-center">CCN1001-1569317210</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">PRIA</td>
                                <td class="text-center">BELUM ADA TINDAK LANJUT</td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Edit Data"><i class="fa fa-pencil-square-o"></i></button></td>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center"></td>
                                <td class="text-center">CCN1001-1569211826</td>
                                <td class="text-center"></td>
                                <td class="text-center">SIDOARJO</td>
                                <td class="text-center">PRIA</td>
                                <td class="text-center">BELUM ADA TINDAK LANJUT</td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Edit Data"><i class="fa fa-pencil-square-o"></i></button></td>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="text-center"></td>
                                <td class="text-center">CCN1166-1583575471</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">PRIA</td>
                                <td class="text-center">BELUM ADA TINDAK LANJUT</td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Edit Data"><i class="fa fa-pencil-square-o"></i></button></td>
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
<div id="ModalEdit" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Form Edit</b></h4>
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
                                <label class="control-label col-md-4 font-green-haze">CallCard Number<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='ccn' name='ccn' class='form-control' value="CCN1002-1564633706" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Medical Card<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='medical_card' name='medical_card' class='form-control'>
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Nama<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='nama' name='nama' class='form-control'>
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Jenis Kelamin<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Tanggal Lahir<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control pull-right" id="datepicker" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Alamat Pasien<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <textarea class="form-control" rows="4" placeholder="This textarea has a limit of 255 chars"></textarea>
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
