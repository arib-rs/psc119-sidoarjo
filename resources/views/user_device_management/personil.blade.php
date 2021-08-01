@extends('layout/main')

@section('title', 'Personil')

@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Personil
                <small>Daftar Personil</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-users"></i> User & Device Management</a></li>
                <li class="active"> Personil</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-3">
                            <select id="lokasi" class="form-control select2lokasi-filter">
                                {!! $optFaskes !!}
                            </select>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary col-md-6" id="btn-tampil"><i
                                        class="fa fa-search"></i>&nbsp; Tampilkan</button>
                            </div>
                        </div>
                    </div><br>
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
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Jenis Kelamin</th>
                                                <th class="text-center">Profesi</th>
                                                <th class="text-center">Keahlian Khusus</th>
                                                <th class="text-center">No. HP</th>
                                                <th class="text-center" style="width: 100px;"><a id="btn-add"
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
                            {{-- <div class="form-group">
                                <label class="control-label col-md-4">Username<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="username" name="username" required>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="fullname" name="fullname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Jenis Kelamin<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select autocomplete="off" class="form-control select-gender" id="gender" name="gender">
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-Laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-4">No. Telp<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="phone_num" name="phone_num">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Keahlian Khusus<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="skill" name="skill">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Lokasi<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select autocomplete="off" class="form-control select2lokasi" name="health_facility_id"
                                        id="health_facility_id" style="width: 100%;">
                                        {!! $optFaskes !!}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Profesi<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select class="form-control select2profesi" name="profession_id" id="profession_id"
                                        style="width: 100%;">
                                        {{-- <option value="">Pilih Profesi</option>
                                        <option value="0">Staff</option>
                                        <option value="1">Driver</option>
                                        <option value="2">Perawat</option>
                                        <option value="3">Kepala Faskes</option>
                                        <option value="4">Kepala PSC</option>
                                        <option value="5">Admin</option> --}}
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
            var idlokasi = $('#lokasi').val();
            if (idlokasi == '') {
                idlokasi = 0;
            }

            $('.select2lokasi-filter').select2();
            $('.select2lokasi').select2();
            $('.select2profesi').select2();

            $('.datatable').DataTable({
                processing: true,
                serverSide: true,
                lengthChange: false,
                autoWidth: false,
                searching: true,
                ordering: false,
                info: true,
                pageLength: 10,
                ajax: 'get-person-by-hf/' + idlokasi,
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'fullname',
                        name: 'fullname'
                    },
                    {
                        data: 'gender',
                        name: 'gender',
                        sClass: 'text-center'
                    },
                    {
                        data: 'profession.profesi',
                        name: 'profesi',
                        sClass: 'text-center'
                    },
                    {
                        data: 'skill',
                        name: 'skill',
                        defaultContent: "-",
                        sClass: 'text-center'
                    },
                    {
                        data: 'phone_num',
                        name: 'phone_num',
                        defaultContent: "-",
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
            $('#btn-tampil').click(function() {
                idlokasi = $('#lokasi').val();
                if (idlokasi == '') {
                    idlokasi = 0;
                }
                console.log(idlokasi);
                $('.datatable').DataTable().ajax.url("get-person-by-hf/" + idlokasi).load();
            })
            $('#btn-add').click(function() {
                //reset
                $('#form-data').find('.form-control').val('');
                $('#form-data').find('#btn-save').html('<i class="fa fa-save"></i> Simpan');
                $("select option").prop("selected", false);
                //show modal
                $('.modal-title').html('<b>Input Data</b>');
                $('#ModalInput').modal('show');
            });
            $('#health_facility_id').change(function() {
                var b = $(this),
                    id = $(this).val(),
                    c = $('#profession_id');
                $.ajax({
                    url: "get-professions-by-hf/" + id,
                    method: 'GET',
                    beforeSend: function() {
                        c.attr('disabled', 'disabled');
                    },
                    success: function(result) {
                        c.html(result);
                        c.removeAttr('disabled');
                    },
                    error: function() {
                        c.removeAttr('disabled');
                    }
                });
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
                    url = "{{ route('personil.store') }}";
                    method = 'POST';
                } else {
                    url = "personil/" + id;
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
                url: "personil/" + id + "/edit",
                method: 'GET',
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                    i.removeClass().addClass('fa fa-spin fa-circle-o-notch');
                },
                success: function(result) {
                    $('.modal-title').html('<b>Edit Data</b>');
                    form.find('#btn-save').html('Edit');
                    form.find('#id').val(result.id);
                    form.find('#fullname').val(result.fullname);
                    form.find('#gender').val(result.gender);
                    form.find('#phone_num').val(result.phone_num);
                    form.find('#skill').val(result.skill);
                    form.find('#health_facility_id').val(result.health_facility_id).trigger('change');

                    setTimeout(function() {
                        form.find('#profession_id').val(result.profession_id).trigger('change');
                    }, 500);

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
                    url: "personil/" + id,
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
