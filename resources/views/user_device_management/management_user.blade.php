@extends('layout/main')

@section('title', 'User Management')

@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User Management
                <small>Daftar User PSC-119</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-users"></i> User & Device Management</a></li>
                <li class="active"> User Management</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-body">
                    {{-- <div class="row">
                    <div class="col-md-4">
                        <div class="btn-group">
                            <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput" class="btn btn-success">
                                <i class="fa fa-plus-circle"></i> Insert Data</button>
                        </div>
                    </div>
                </div><br> --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <table class="table table-bordered table-hover datatable">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Username</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Profesi</th>
                                                {{-- <th class="text-center">Level</th> --}}
                                                {{-- <th class="text-center">Resource</th> --}}
                                                <th class="text-center">Faskes Asal</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Telepon</th>
                                                <th class="text-center">Tipe User</th>
                                                <th class="text-center">Aktif</th>
                                                <th class="text-center" style="width: 120px;"><a id="btn-add"
                                                        data-toggle="tooltip" class="btn btn-xs btn-success"><i
                                                            class="fa fa-plus-circle"></i> Input Data</a>
                                                </th>
                                            </tr>
                                        </thead>

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
    <div id="ModalInput" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-lg">
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
                                <label class="control-label col-md-3">Personil<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-9">
                                    <select autocomplete="off" class="form-control select2personil" name="person_id"
                                        id="person_id" style="width: 100%;">
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label class="control-label col-md-3">Level<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-9">
                                    <select autocomplete="off" class="form-control select2profesi" name="role_id"
                                        id="role_id" style="width: 100%;">
                                        {!! $optRole !!}
                                    </select>
                                </div>
                            </div> --}}
                            {{-- <div class="form-group" id="resource-field" style="display: none;">
                                <label class="control-label col-md-3">Resource<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-9">
                                    <select autocomplete="off" class="form-control select2resource" name="resource_id"
                                        id="resource_id" style="width: 100%;">

                                    </select>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label class="control-label col-md-3">Username<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Password<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Confirm Password<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" required></span>
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
            $('.select2personil').select2();
            $('.select2profesi').select2();
            $('.select2resource').select2();

            $('.datatable').DataTable({
                processing: true,
                serverSide: true,
                lengthChange: false,
                autoWidth: false,
                searching: true,
                ordering: false,
                info: true,
                pageLength: 10,
                ajax: 'get-users',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'username',
                        name: 'username'
                    },
                    {
                        data: 'person.fullname',
                        name: 'person.fullname'
                    },
                    {
                        data: 'person.profession.profesi',
                        name: 'person.profession.profesi',
                        sClass: 'text-center'
                    },
                    // {
                    //     data: 'role.role',
                    //     name: 'role.role',
                    //     sClass: 'text-center'
                    // },
                    // {
                    //     data: 'resource.nomor_polisi',
                    //     name: 'resource.nomor_polisi',
                    //     defaultContent: "-",
                    //     sClass: 'text-center'
                    // },
                    {
                        data: 'person.health_facility.nama',
                        name: 'person.health_facility.nama',
                        sClass: 'text-center'
                    },
                    {
                        data: 'email',
                        name: 'email',
                        defaultContent: "-",
                        sClass: 'text-center'
                    },
                    {
                        data: 'person.phone_num',
                        name: 'person.phone_num',
                        defaultContent: "-",
                        sClass: 'text-center'
                    },
                    {
                        data: 'person.profession.tipe_user',
                        name: 'person.profession.tipe_user',
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

            $('#form-data').submit(function(e) {
                e.preventDefault();
            });
            $('#person_id').change(function() {
                $('#role_id').trigger('change');
            });
            $('#role_id').change(function() {
                if ($(this).val() == 6) {
                    var idhf = $('#person_id').find(':selected').data('hf');
                    console.log(idhf);
                    $('#resource-field').css('display', 'block');
                    $.ajax({
                        url: "get-resources-by-hf/" + idhf,
                        method: 'GET',
                        success: function(result) {
                            $('#resource_id').html(result)
                        }
                    });
                } else {
                    $('#resource-field').css('display', 'none');
                }
                $('#resource_id').val('').trigger('change');
            });
            $('#btn-add').click(function() {
                //reset
                $('#form-data').find('.form-control').val('');
                $('#form-data').find('#role_id option').removeAttr('selected').trigger('change');
                $('#form-data').find('input:password').removeAttr('disabled');
                //show modal
                $.ajax({
                    url: "get-personil",
                    method: 'GET',
                    success: function(result) {
                        $('#person_id').html(result)
                    }
                })
                $('.modal-title').html('<b>Input Data</b>');
                $('#btn-save').html('Simpan');
                $('#ModalInput').modal('show');
            });
            $('#btn-save').click(function() {
                var b = $(this),
                    i = b.find('i'),
                    cls = i.attr('class'),
                    id = $('#id').val(),
                    url = '',
                    method = '';

                var form = $('#form-data'),
                    // data = new FormData(form[0]);
                    data = form.serializeArray();

                if (id == '') {
                    url = "{{ route('management_user.store') }}";
                    method = 'POST';
                } else {
                    url = "management_user/" + id;
                    method = 'PUT';
                    // data.append('_method', 'PUT');
                }
                // console.log(url + ' ' + method);
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
                url: "get-personil",
                method: 'GET',
                success: function(result) {
                    $('#person_id').html(result);
                    $.ajax({
                        url: "management_user/" + id + "/edit",
                        method: 'GET',
                        beforeSend: function() {
                            b.attr('disabled', 'disabled');
                            i.removeClass().addClass('fa fa-spin fa-circle-o-notch');
                        },
                        success: function(result) {
                            $('.modal-title').html('<b>Edit Data</b>');
                            form.find('#btn-save').html('Edit');
                            form.find('#id').val(result.id);
                            form.find('#username').val(result.username);
                            form.find('#email').val(result.email);
                            form.find('input:password').attr('disabled', 'disabled');
                            form.find('#role_id option').removeAttr('selected');
                            form.find('#role_id').val(result.role_id).trigger('change');
                            form.find('#person_id').append("<option data-hf='" + result
                                .person.health_facility_id + "' value='" + result.person
                                .id +
                                "'>" + result.person.fullname + " - " + result
                                .person.profession.profesi + " - " + result.person
                                .health_facility.nama +
                                " </option>").trigger('change');

                            setTimeout(function() {
                                form.find('#person_id').val(result.person_id)
                                    .trigger('change');

                            }, 400);
                            setTimeout(function() {
                                form.find('#resource_id').append("<option value='" +
                                    result
                                    .resource_id +
                                    "'>" + result.resource.nomor_polisi +
                                    " - " + result
                                    .resource.kode +
                                    " </option>").trigger('change');
                            }, 800);
                            setTimeout(function() {
                                form.find('#resource_id').val(result.resource_id)
                                    .trigger('change');
                            }, 900);
                            b.removeAttr('disabled');
                            i.removeClass().addClass(cls);
                            $('#ModalInput').modal('show');
                        },
                        error: function() {
                            b.removeAttr('disabled');
                            i.removeClass().addClass(cls);
                        }
                    })
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
                    url: "management_user/" + id,
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
        })

    </script>
@endsection
