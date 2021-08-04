@extends('layout/main')

@section('title', 'Kategori')

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
            Kategori
            <small>Daftar Kategori</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-flag"></i> Master</a></li>
            <li class="active">Kategori</li>
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
                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="btn-group">
                                <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput" class="btn btn-success">
                                    <i class="fa fa-plus-circle"></i> Insert Data</button>
                            </div>
                        </div>
                    </div><br> --}}
                    {{-- <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">No</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Medis</th>
                                <th class="text-center">Emergency</th>
                                <th class="text-center">Sub Kategori</th>
                                <th class="text-center" style="width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Lain-lain</td>
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
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">Sakit Perut</td>
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
                                <td class="text-center">3</td>
                                <td class="text-center">Trauma Cedera</td>
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
                                <td class="text-center">4</td>
                                <td class="text-center">Sakit Perut</td>
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
                                <td class="text-center">5</td>
                                <td class="text-center">Kecelakaan Lalu Lintas (KLL)</td>
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
                                <td class="text-center">6</td>
                                <td class="text-center">Masalah Tidak Diketahui</td>
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
                        </tbody>
                    </table> --}}

                    <table class="table table-bordered table-hover datatable">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">No</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Sub Kategori</th>
                                <th class="text-center" style="width: 200px;">Medis</th>
                                <th class="text-center" style="width: 200px;">Emergency</th>
                                <th class="text-center" style="width: 100px;"><a id="btn-add" data-toggle="tooltip"
                                        class="btn btn-xs btn-success"><i class="fa fa-plus-circle"></i> Input Data</a>
                                </th>
                            </tr>
                        </thead>
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
<div id="ModalInput" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Form</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-data" class="form-horizontal">
                <div class="modal-body">
                    <div class="form-body">
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                        <div class="form-group">
                            <label class="control-label col-md-4">Kategori<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control select2 select-kategori" id="kategori" name="kategori" style="width: 100%;">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Sub Kategori<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control  select2 select-sub-category-id" name="sub_category_id" id="sub_category_id" style="width: 100%;">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-reset" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button id="btn-save" type="button" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(function() {
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
            ajax: 'get-kategori',
            columns:
            [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'kategori',
                    name: 'kategori'
                },
                {
                    data: 'subcategory.sub_kategori',
                    name: 'sub_kategori'
                },
                {
                    data: 'is_medis',
                    name: 'is_medis',
                    sClass: 'text-center'
                },
                {
                    data: 'is_emergency',
                    name: 'is_emergency',
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

        $('#form-data').submit(function(e) {
            e.preventDefault();
        });

        $('#btn-add').click(function() {
            //reset
            $('#form-data').find('.form-control').val('');
            //show modal
            $('.modal-title').html('<b>Input Data</b>');
            $('#ModalInput').modal('show');
                var b = $(this),
                i = b.find('i'),
                cls = i.attr('class');
                $.ajax({
                    url: "{{ route('get-form-data-category') }}",
                    method: 'GET',
                    beforeSend: function() {
                        b.attr('disabled', 'disabled');
                        i.removeClass().addClass('fa fa-spin fa-circle-o-notch');
                    },
                    success: function(result) {
                        console.log(result)
                        $('#kategori').html(result.category);
                        $('#sub_category_id').html(result.sub_category);
                        b.removeAttr('disabled');
                        i.removeClass().addClass(cls);
                        $('#btn-save').html('Simpan');
                        $('#ModalInput').modal('show');
                    },
                    error: function() {
                        b.removeAttr('disabled');
                        i.removeClass().addClass(cls);
                    }
                });
        });

        $('#btn-save').click(function() {
            var b = $(this),
                i = b.find('i'),
                cls = i.attr('class'),
                id = $('#id').val(),
                id_kategori = $('#kategori').val(),
                url = '',
                method = '';

            var form = $('#form-data'),
                data = form.serializeArray();

            if (id == '') {
                url = "kategori/" + id_kategori;
                method = 'PUT';
            } else {
                url = "kategori/" + id;
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
                        $('.datatable').DataTable().ajax.reload();
                        $('#ModalInput').modal('hide');
                        $('#form-data').find('input.form-control').val('');
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

    }).on('click', '#btn-edit', function() {
            var b = $(this),
                i = b.find('i'),
                cls = i.attr('class'),
                id = $(this).data('id');

            var form = $('#form-data');

            $.ajax({
                url: "kategori/" + id + "/edit",
                method: 'GET',
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                    i.removeClass().addClass('fa fa-spin fa-circle-o-notch');

                },
                success: function(result) {
                    console.log(result);
                    $('.modal-title').html('<b>Edittt1 Data</b>');
                    form.find('#btn-save').html('Edit');
                    form.find('#id').val(result.kategori.id);
                    if (result.kategori.id == null) {
                        $('.select-kategori').select2().html("<option value=''>Pilih Kategori</option>");
                        $('.select-kategori').select2().append(result.category);
                        $('.select-sub-category-id').select2().html("<option value=''>Pilih Sub Kategori</option>");
                        $('.select-sub-category-id').select2().append(result.sub_category);
                    } else {
                        $('.select-kategori').select2().html(result.category);
                        form.find('#kategori option[value="' + result.kategori.kategori + '"]').attr(
                            'selected',
                            'selected');
                        $('.select-sub-category-id').select2().html(result.sub_category);
                        form.find('#sub_category_id option[value="' + result.kategori.sub_category_id + '"]').attr(
                            'selected',
                            'selected');
                    }

                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);
                    $('#ModalInput').modal('show');
                },
                error: function() {
                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);
                }
            });

        }).on('click', '#btn-delete', function() {
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
                    url: "kategori/" + id,
                    method: 'DELETE',
                    beforeSend: function() {
                        b.attr('disabled', 'disabled');
                        i.removeClass().addClass('fa fa-spin fa-circle-o-notch');
                    },
                    success: function(result) {
                        $('.datatable').DataTable().ajax.reload();
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
