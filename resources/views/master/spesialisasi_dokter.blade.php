@extends('layout/main')

@section('title', 'Spesialis Dokter')

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
            Spesialis Dokter
            <small>Daftar Spesialis Dokter</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-flag"></i> Master</a></li>
            <li class="active"> Spesialis Dokter</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#spesialis_dokter" data-toggle="tab">Data Spesialis Dokter</a></li>
                <li><a href="#layanan_dokter" data-toggle="tab">Data Jenis Layanan Dokter</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="spesialis_dokter">
                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="btn-group">
                                <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInputSpesialisasi" class="btn btn-success">
                                    <i class="fa fa-plus-circle"></i> Insert Data</button>
                            </div>
                        </div>
                    </div><br> --}}
                    <table class="table table-bordered table-hover datatable-spesialis">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">No</th>
                                <th class="text-center">Spesialis</th>
                                <th class="text-center" style="width: 100px;"><a id="btn-add-spesialis"
                                        data-toggle="tooltip" class="btn btn-xs btn-success"><i
                                            class="fa fa-plus-circle"></i> Input Data</a>
                                </th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center"></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInputObat"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody> --}}
                    </table>
                </div>
                <div class="tab-pane" id="layanan_dokter">
                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="btn-group">
                                <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInputLayanan" class="btn btn-success">
                                    <i class="fa fa-plus-circle"></i> Insert Data</button>
                            </div>
                        </div>
                    </div><br> --}}
                    <table class="table table-bordered table-hover datatable-layanan">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">No</th>
                                <th class="text-center">Layanan</th>
                                <th class="text-center" style="width: 100px;"><a id="btn-add-layanan"
                                        data-toggle="tooltip" class="btn btn-xs btn-success"><i
                                            class="fa fa-plus-circle"></i> Input Data</a>
                                </th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center"></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInputObat"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="glyphicon glyphicon-off"></i></button>
                                </td>
                            </tr>
                        </tbody> --}}
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
<div id="ModalInputSpesialis" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title modal-spesialis" id="ModalInputTitle"><b>Form</b>
                </h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-data-spesialis" class="form-horizontal">
                <div class="modal-body">
                    <div class="form-body">
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                        <div class="form-group">
                            <label class="control-label col-md-4">Spesialis<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" id="spesialis" name="spesialis" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-reset" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button id="btn-save-spesialis" type="button" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="ModalInputLayanan" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title modal-spesialis" id="ModalInputTitle"><b>Form</b>
                </h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-data-layanan" class="form-horizontal">
                <div class="modal-body">
                    <div class="form-body">
                        <input type="hidden" class="form-control" id="id-layanan" name="id" value="">
                        <div class="form-group">
                            <label class="control-label col-md-4">Layanan<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" id="layanan" name="layanan" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-reset" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button id="btn-save-layanan" type="button" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(function() {
        var dataTable = $('.datatable-spesialis').DataTable({
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
            ajax: 'get-spesialis',
            columns:
            [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'spesialis',
                    name: 'spesialis'
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

        $('#form-data-spesialis').submit(function(e) {
            e.preventDefault();
        });

        $('#btn-add-spesialis').click(function() {
            //reset
            $('#form-data-spesialis').find('.form-control').val('');
            //show modal
            $('.modal-title').html('<b>Input Data</b>');
            $('#ModalInputSpesialis').modal('show');
        });

        $('#btn-save-spesialis').click(function() {
            var b = $(this),
                i = b.find('i'),
                cls = i.attr('class'),
                id = $('#id').val(),
                url = '',
                method = '';

            var form = $('#form-data-spesialis'),
                data = form.serializeArray();

            if (id == '') {
                url = "{{ route('spesialisasi_dokter.store') }}";
                method = 'POST';
            } else {
                url = "spesialisasi_dokter/" + id;
                method = 'PUT';
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                method: method,
                data: data,
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                    i.removeClass().addClass('fa fa-spin fa-circle-o-notch');
                },
                success: function(result) {
                    if (result.success) {
                        toastr['success'](result.success);
                        $('.datatable-spesialis').DataTable().ajax.reload();
                        $('#ModalInputSpesialis').modal('hide');
                        $('#form-data-spesialis').find('input.form-control').val('');
                    } else {
                        $.each(result.errors, function(key, value) {
                            toastr['error'](value);
                        });
                    }
                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);

                },
                error: function() {
                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);
                }
            });
        });

    }).on('click', '#btn-edit-spesialis', function() {
            var b = $(this),
                i = b.find('i'),
                cls = i.attr('class'),
                id = $(this).data('id');

            var form = $('#form-data-spesialis');

            $.ajax({
                url: "spesialisasi_dokter/" + id + "/edit",
                method: 'GET',
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                    i.removeClass().addClass('fa fa-spin fa-circle-o-notch');

                },
                success: function(result) {
                    // console.log(result);
                    $('.modal-title').html('<b>Edit Data</b>');
                    form.find('#btn-save-spesialis').html('Edit');
                    form.find('#id').val(result.id);
                    form.find('#spesialis').val(result.spesialis);

                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);
                    $('#ModalInputSpesialis').modal('show');
                },
                error: function() {
                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);
                }
            });

        }).on('click', '#btn-delete-spesialis', function() {
            var b = $(this),
                i = b.find('i'),
                cls = i.attr('class'),
                id = $(this).data('id');
            var del = confirm("Apakah anda yakin menghapus data ini?");
            if (del) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "spesialisasi_dokter/" + id,
                    method: 'DELETE',
                    beforeSend: function() {
                        b.attr('disabled', 'disabled');
                        i.removeClass().addClass('fa fa-spin fa-circle-o-notch');
                    },
                    success: function(result) {
                        $('.datatable-spesialis').DataTable().ajax.reload();
                        toastr['success'](result.success);
                    },
                    error: function() {
                        b.removeAttr('disabled');
                        i.removeClass().addClass(cls);
                    }
                });
            }
        });
</script>

<script>
    $(function() {
        var dataTable = $('.datatable-layanan').DataTable({
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
            ajax: 'get-layanan',
            columns:
            [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'layanan',
                    name: 'layanan'
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

        $('#form-data-layanan').submit(function(e) {
            e.preventDefault();
        });

        $('#btn-add-layanan').click(function() {
            //reset
            $('#form-data-layanan').find('.form-control').val('');
            //show modal
            $('.modal-title').html('<b>Input Data</b>');
            $('#ModalInputLayanan').modal('show');
        });

        $('#btn-save-layanan').click(function() {
            var b = $(this),
                i = b.find('i'),
                cls = i.attr('class'),
                id = $('#id-layanan').val(),
                url = '',
                method = '';

            var form = $('#form-data-layanan'),
                data = form.serializeArray();

            if (id == '') {
                url = "{{ route('layanan_dokter.store') }}";
                method = 'POST';
            } else {
                url = "layanan_dokter/" + id;
                method = 'PUT';
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                method: method,
                data: data,
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                    i.removeClass().addClass('fa fa-spin fa-circle-o-notch');
                },
                success: function(result) {
                    if (result.success) {
                        toastr['success'](result.success);
                        $('.datatable-layanan').DataTable().ajax.reload();
                        $('#ModalInputLayanan').modal('hide');
                        $('#form-data-layanan').find('input.form-control').val('');
                    } else {
                        $.each(result.errors, function(key, value) {
                            toastr['error'](value);
                        });
                    }
                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);

                },
                error: function() {
                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);
                }
            });
        });

    }).on('click', '#btn-edit-layanan', function() {
            var b = $(this),
                i = b.find('i'),
                cls = i.attr('class'),
                id = $(this).data('id');

            var form = $('#form-data-layanan');

            $.ajax({
                url: "layanan_dokter/" + id + "/edit",
                method: 'GET',
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                    i.removeClass().addClass('fa fa-spin fa-circle-o-notch');

                },
                success: function(result) {
                    // console.log(result);
                    $('.modal-title').html('<b>Edit Data</b>');
                    form.find('#btn-save-layanan').html('Edit');
                    form.find('#id-layanan').val(result.id);
                    form.find('#layanan').val(result.layanan);

                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);
                    $('#ModalInputLayanan').modal('show');
                },
                error: function() {
                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);
                }
            });

        }).on('click', '#btn-delete-layanan', function() {
            var b = $(this),
                i = b.find('i'),
                cls = i.attr('class'),
                id = $(this).data('id');
            var del = confirm("Apakah anda yakin menghapus data ini?");
            if (del) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "layanan_dokter/" + id,
                    method: 'DELETE',
                    beforeSend: function() {
                        b.attr('disabled', 'disabled');
                        i.removeClass().addClass('fa fa-spin fa-circle-o-notch');
                    },
                    success: function(result) {
                        $('.datatable-layanan').DataTable().ajax.reload();
                        toastr['success'](result.success);
                    },
                    error: function() {
                        b.removeAttr('disabled');
                        i.removeClass().addClass(cls);
                    }
                });
            }
        });
</script>
@endsection
