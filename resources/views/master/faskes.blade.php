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
                    {{-- <div class="row">
                            <div class="col-md-4">
                                <div class="btn-group">
                                    <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput"
                                        class="btn btn-success">
                                        <i class="fa fa-plus-circle"></i> Insert Data</button>
                                </div>
                            </div>
                        </div><br> --}}
                    {{-- <table id="example1" class="table table-bordered dataTable no-footer table-hover">
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
                                <th class="text-center" style="width: 100px;"><a id="btn-add-faskes" data-toggle="tooltip"
                                        class="btn btn-xs btn-success"><i class="fa fa-plus-circle"></i> Input Data</a>
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
            <form id="form-data-faskes" class="form-horizontal">
                <div class="modal-body">
                    <div class="form-body">
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                        <div class="form-group">
                            <label class="control-label col-md-4">Nama<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Kategori<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off"  class="form-control" id="kategori" name="kategori">
                                    <option value="">Pilih Kategori</option>
                                    <option value="cc">Command Center</option>
                                    <option value="rs">Rumah Sakit</option>
                                    <option value="pks">Puskesmas</option>
                                    <option value="klnk">Klinik</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Foto<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="pict_url" name="pict_url">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Keterangan<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">No. Telepon<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" id="phone_num" name="phone_num" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Contact Person<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" id="contact_person" name="contact_person" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Email<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Status Ponek/Poned<span
                                    class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select id="status" name="status" class="form-control">
                                    <option value="">Pilih Status</option>
                                    <option value="PONEK">PONEK</option>
                                    <option value="PONED">PONED</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Buka 24 Jam<span
                                    class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select id="is_fullday" name="is_fullday" class="form-control">
                                    <option value="">Pilih Status</option>
                                    <option value="1">YA</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Ada EKG<span
                                    class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select id="is_has_ekg" name="is_has_ekg" class="form-control">
                                    <option value="">Pilih Status</option>
                                    <option value="1">ADA</option>
                                    <option value="0">TIDAK</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-reset-faskes" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button id="btn-save-faskes" type="button" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="ModalEditProfesi" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Detail Profesi Yang
                        Aktif</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="example" class="table table-bordered dataTable no-footer table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Profesi</th>
                            <th class="text-center">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><input type="checkbox" name="" value=""></td>
                            <td class="text-center">Kepala Faskes</td>
                            <td class="text-center">User Mobile</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" name="" value=""></td>
                            <td class="text-center">Direktur RS</td>
                            <td class="text-center">User Mobile</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" name="" value=""></td>
                            <td class="text-center">Wakil Direktur</td>
                            <td class="text-center">User Mobile</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" name="" value=""></td>
                            <td class="text-center">Dokter</td>
                            <td class="text-center">User Mobile</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" name="" value=""></td>
                            <td class="text-center">Driver</td>
                            <td class="text-center">User Mobile</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" name="" value=""></td>
                            <td class="text-center">Admin</td>
                            <td class="text-center">User Web</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" name="" value=""></td>
                            <td class="text-center">Operator</td>
                            <td class="text-center">User Web</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input type="checkbox" name="" value=""></td>
                            <td class="text-center">Dispatcher</td>
                            <td class="text-center">User Web</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="submit" onclick="" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<div id="ModalShift" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Update Shift</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- BEGIN FORM-->
                <form method="post" id="" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Jumlah Shift</label>
                            <div class="col-md-8">
                                <input type="text" id="jumlah_shift" name="jumlah_shift" class="form-control" value="3"
                                    disabled>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Shift 1</label>
                            <div class="col-md-4">
                                <input type="text" id="shift_awal" name="shift_awal" class="form-control"
                                    value="07:00:00" disabled>
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="shift_akhir" name="shift_akhir" class="form-control"
                                    value="14:00:00" disabled>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Shift 2</label>
                            <div class="col-md-4">
                                <input type="text" id="shift_awal" name="shift_awal" class="form-control"
                                    value="14:00:00" disabled>
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="shift_akhir" name="shift_akhir" class="form-control"
                                    value="21:00:00" disabled>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Shift 3</label>
                            <div class="col-md-4">
                                <input type="text" id="shift_awal" name="shift_awal" class="form-control"
                                    value="21:00:00" disabled>
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="shift_akhir" name="shift_akhir" class="form-control"
                                    value="04:00:00" disabled>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
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

        $('#form-data-faskes').submit(function(e) {
            e.preventDefault();
        });

        $('#btn-add-faskes').click(function() {
            //reset
            $('#form-data-faskes').find('.form-control').val('');
            //show modal
            $('.modal-title').html('<b>Input Data</b>');
            $('#ModalInput').modal('show');
        });

        $('#btn-save-faskes').click(function() {
            var b = $(this),
                i = b.find('i'),
                cls = i.attr('class'),
                id = $('#id').val(),
                url = '',
                method = '';

            var form = $('#form-data-faskes'),
                data = form.serializeArray();

            if (id == '') {
                url = "{{ route('faskes.store') }}";
                method = 'POST';
            } else {
                url = "faskes/" + id;
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
                        $('#form-data-faskes').find('input.form-control').val('');
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

    }).on('click', '#btn-edit-faskes', function() {
            var b = $(this),
                i = b.find('i'),
                cls = i.attr('class'),
                id = $(this).data('id');

            var form = $('#form-data-faskes');

            $.ajax({
                url: "faskes/" + id + "/edit",
                method: 'GET',
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                    i.removeClass().addClass('fa fa-spin fa-circle-o-notch');

                },
                success: function(result) {
                    // console.log(result);
                    $('.modal-title').html('<b>Edit Data</b>');
                    form.find('#btn-save').html('Edit');
                    form.find('#id').val(result.id);
                    form.find('#nama').val(result.nama);
                    form.find('#kategori').val(result.kategori);
                    form.find('#pict_url').val(result.pict_url);
                    form.find('#is_fullday').val(result.is_fullday);
                    form.find('#is_has_ekg').val(result.is_has_ekg);
                    form.find('#keterangan').val(result.keterangan);
                    form.find('#phone_num').val(result.phone_num);
                    form.find('#contact_person').val(result.contact_person);
                    form.find('#email').val(result.email);
                    form.find('#status').val(result.status);
                    // form.find('#alamat').val(result.alamat);

                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);
                    $('#ModalInput').modal('show');
                },
                error: function() {
                    b.removeAttr('disabled');
                    i.removeClass().addClass(cls);
                }
            });
        }).on('click', '#btn-delete-faskes', function() {
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
                    url: "faskes/" + id,
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
