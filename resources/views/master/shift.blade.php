@extends('layout/main')

@section('title', 'Shift')

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
            Shift
            <small>Daftar Shift</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-flag"></i> Master</a></li>
            <li class="active"> Shift</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#shift" data-toggle="tab">Shift</a></li>
            </ul>
            <div class="tab-content">
                <!-- Font Awesome Icons -->
                <div class="tab-pane active" id="shift">
                    <div class="row">
                        <div class="col-md-3">
                            <select id="pilih_lokasi" name="lokasi" class="form-control select2lokasi-filter">
                                <option value="">PILIH LOKASI</option>
                                <option value="-1">Harmoni Integra</option>
                                <option value="0">Command Center</option>
                                <option value="1">RSUD SIDOARJO</option>
                                <option value="2">RUMKITBAN SIDOARJO</option>
                                <option value="3">RSU AL-Islam HM Mawardi</option>
                                <option value="4">RS Citra Medika</option>
                                <option value="5">RSI Siti Hajar</option>
                                <option value="6">RSU BUNDA WARU</option>
                                <option value="7">RS Mitra Sehat Mandiri</option>
                                <option value="8">RS Dummy 1</option>
                                <option value="9">RS SITI KHODIJAH</option>
                                <option value="10">RS Bhayangkara Pusdik Porong</option>
                                <option value="11">RS. ANWAR MEDIKA</option>
                                <option value="12">RS MATA FATMA SIDOARJO</option>
                                <option value="13">PKM GANTING</option>
                                <option value="14">PKM SIDOARJO</option>
                                <option value="15">PKM SEKARDANGAN</option>
                                <option value="16">PKM URANGAGUNG</option>
                                <option value="17">PKM BUDURAN</option>
                                <option value="18">PKM CANDI</option>
                                <option value="19">PKM PORONG</option>
                                <option value="20">PKM KEDUNGSOLO</option>
                                <option value="21">PKM JABON</option>
                                <option value="22">PKM KREMBUNG</option>
                                <option value="23">PKM TANGGULANGIN</option>
                                <option value="24">PKM TULANGAN</option>
                                <option value="25">PKM KEPADANGAN</option>
                                <option value="26">PKM TAMAN</option>
                                <option value="27">PKM TROSOBO</option>
                                <option value="28">PKM WARU</option>
                                <option value="29">PKM MEDAENG</option>
                                <option value="30">PKM SEDATI</option>
                                <option value="31">PKM GEDANGAN</option>
                                <option value="32">PKM SUKODONO</option>
                                <option value="33">PKM KRIAN</option>
                                <option value="34">PKM BARENGKRAJAN</option>
                                <option value="35">RS Aisyiyah Siti Fatimah Tulangan</option>
                                <option value="36">PKM BALONGBENDO</option>
                                <option value="37">PKM WONOAYU</option>
                                <option value="38">PKM TARIK</option>
                                <option value="39">PKM PRAMBON</option>
                                <option value="40">RS Delta Surya</option>
                                <option value="41">RS Jasem</option>
                                <option value="42">RS Mitra Keluarga Waru</option>
                                <option value="43">RS Assakinah Medika</option>
                                <option value="44">RSIA Soerya</option>
                                <option value="45">RSIA Prima Husada</option>
                                <option value="46">RSIA Pondok Tjandra</option>
                                <option value="47">RSIA Arafah Anwar Medika Sukodono</option>
                                <option value="48">RS Aminah</option>
                                <option value="49">RS Usada Sidoarjo</option>
                                <option value="50">RSIA Kirana</option>
                                <option value="51">RSIA Buah Delima</option>
                                <option value="52">RS Rahman Rahim</option>
                                <option value="53">RSIA Mitra Husada</option>
                                <option value="54">Puskesmas Wiguna</option>
                                <option value="55">Dinas Kesehatan</option>
                                <option value="56">faskes wiguna</option>
                                <option value="57">PMI Sidoarjo</option>
                                <option value="75">Faskes Simulasi Medokan Asri</option>
                                <option value="84">RS DKT Sidoarjo</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <button role="button" class="btn btn-primary"><i class="fa fa-search"></i>
                                Tampilkan</button>
                        </div>
                        <div class="col-md-9"></div>
                    </div><br>
                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="btn-group">
                                <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput" class="btn btn-success">
                                    <i class="fa fa-plus-circle"></i> Insert Data</button>
                            </div>
                        </div>
                    </div><br> --}}
                    <table class="table table-bordered table-hover datatable">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 40px;">No</th>
                                <th class="text-center">Nama Shift</th>
                                <th class="text-center">Ambulan</th>
                                <th class="text-center">Lokasi</th>
                                <th class="text-center">Driver</th>
                                <th class="text-center">Paramedis</th>
                                <th class="text-center" style="width: 150px;"><a id="btn-add" data-toggle="tooltip"
                                        class="btn btn-xs btn-success"><i class="fa fa-plus-circle"></i> Input Data</a>
                                </th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AMB_1664</td>
                                <td class="text-center">L 1664 VS</td>
                                <td class="text-center">eko</td>
                                <td class="text-center">farida</td>
                                <td class="text-center">RSU BUNDA WARU</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Non Aktif Shift"><i class="glyphicon glyphicon-off"></i></button>
                                    <button class="btn btn-sm btn-warning" type="button" title="Detail Checklist"><i class="glyphicon glyphicon-pushpin"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">AMB_WR</td>
                                <td class="text-center">W 8356 PP</td>
                                <td class="text-center">Sumarno</td>
                                <td class="text-center">TIDAK ADA</td>
                                <td class="text-center">PKM WARU</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Non Aktif Shift"><i class="glyphicon glyphicon-off"></i></button>
                                    <button class="btn btn-sm btn-warning" type="button" title="Detail Checklist"><i class="glyphicon glyphicon-pushpin"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">AMB_RSUD_02</td>
                                <td class="text-center">W 1046 NP</td>
                                <td class="text-center">ANDHIKA MIRANDA PUTRA</td>
                                <td class="text-center">MUHAMMAD MUZAKKI, A.Md.Kep</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Non Aktif Shift"><i class="glyphicon glyphicon-off"></i></button>
                                    <button class="btn btn-sm btn-warning" type="button" title="Detail Checklist"><i class="glyphicon glyphicon-pushpin"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="text-center">AMB_PKM KRN1</td>
                                <td class="text-center">W 8506 PP</td>
                                <td class="text-center">wahyu</td>
                                <td class="text-center">Perawat UGD Krian 2</td>
                                <td class="text-center">PKM KRIAN</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" title="Non Aktif Shift"><i class="glyphicon glyphicon-off"></i></button>
                                    <button class="btn btn-sm btn-warning" type="button" title="Detail Checklist"><i class="glyphicon glyphicon-pushpin"></i></button>
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
<div id="ModalInput" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Shift</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-data" class="form-horizontal">
                <div class="modal-body">
                    <div class="form-body">
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                        <div class="form-group">
                            <label class="control-label col-md-4 font-green-haze">Shift<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nama" name="nama" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Lokasi<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control select2lokasi" name="health_facility_id"
                                    id="health_facility_id" style="width: 100%;">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 font-green-haze">Ambulan<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control select2ambulan" id="resource_id"
                                    name="resource_id" style="width: 100%;">
                                    <option value="">Pilih Ambulan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 font-green-haze">Sopir<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control select2sopir" name="driver_id"
                                    id="driver_id" style="width: 100%;">
                                    <option value="">Pilih Sopir</option>
                                    <option value="1">Joko Suryo</option>
                                    <option value="2">Yanto</option>
                                    <option value="3">Ali Hamzah</option>
                                    <option value="4">M. Luthi Ansori</option>
                                    <option value="5">Andika Putra</option>
                                    <option value="6">Tole</option>
                                    <option value="7">Syamsul</option>
                                    <option value="8">Widodo Budi Darmo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 font-green-haze">Paramedis<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                {{-- <input type="text" id="paramedis" name="paramedis" class="form-control"> --}}
                                <select autocomplete="off" class="form-control select2paramedis" id="paramedic_id"
                                    name="paramedic_id[]" style="width: 100%;" multiple="multiple">
                                    <option value="0" disabled>Pilih Paramedis</option>
                                    <option value="1">Muetia Handayani, A.Md.Kep</option>
                                    <option value="2">Indra Adjie, A.Md.Kep</option>
                                    <option value="3">Sulistiono, A.Md.Kep</option>
                                    <option value="4">Anissa Rahim, A.Md.Kep</option>
                                    <option value="5">Dias Yuanella, A.Md.Kep</option>
                                    <option value="6">Ihcsan Ahmad, A.Md.Kep</option>
                                    <option value="7">Velicya Maya, A.Md.Kep</option>
                                    <option value="8">Amelia Candra Dhevi, A.Md.Kep</option>
                                    <option value="9">Boom Setak, A.Md.Kep</option>
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
        $('.select2lokasi-filter').select2();
        // $('.select2lokasi').select2()
        $('.select2ambulan').select2()
        $('.select2sopir').select2();
        $('.select2paramedis').select2();

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
            ajax: 'get-rshift',
            columns:
            [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    sClass: 'text-center'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'resource.nomor_polisi',
                    name: 'nomor_polisi',
                    defaultContent: ""
                },
                {
                    data: 'healthfacility.nama',
                    name: 'nama',
                    defaultContent: ""
                },
                {
                    data: 'driver_id',
                    name: 'driver_id',
                    defaultContent: ""
                },
                {
                    data: 'paramedic_id',
                    name: 'paramedic_id',
                    defaultContent: ""
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
                    url: "{{ route('get-form-data-healthfacility') }}",
                    method: 'GET',
                    beforeSend: function() {
                        b.attr('disabled', 'disabled');
                        i.removeClass().addClass('fa fa-spin fa-circle-o-notch');
                    },
                    success: function(result) {
                        // console.log(result);
                        $('.select2lokasi').select2().html(result.health_facilities);
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
                url = '',
                method = '';

            var form = $('#form-data'),
                data = form.serializeArray();

            if (id == '') {
                url = "{{ route('shift.store') }}";
                method = 'POST';
            } else {
                url = "shift/" + id;
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

    }).on('change', '#health_facility_id', function() {
        let id = $(this).val()
        $.ajax({
            url : "get-form-data-resource/" + id,
            type : 'GET',
            success: function(result) {
                // console.log(result)
                $('.select2ambulan').select2().html(result.resources);
            },
            error: function(xhr) {
                console.error(xhr);
            }
        })
    }).on('click', '#btn-edit', function() {
            var b = $(this),
                i = b.find('i'),
                cls = i.attr('class'),
                id = $(this).data('id');

            var form = $('#form-data');

            $.ajax({
                url: "shift/" + id + "/edit",
                method: 'GET',
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                    i.removeClass().addClass('fa fa-spin fa-circle-o-notch');

                },
                success: function(result) {
                    // console.log(result);
                    $('.modal-title').html('<b>Edit Data</b>');
                    form.find('#btn-save').html('Edit');
                    form.find('#id').val(result.rshift.id);
                    form.find('#nama').val(result.rshift.nama);
                    if (result.rshift.health_facility_id == null) {
                        $('.select2lokasi').select2().html("<option value=''>Pilih Lokasi</option>");
                        $('.select2lokasi').select2().append(result.health_facilities);
                    } else {
                        $('.select2lokasi').select2().html(result.health_facilities);
                        form.find('#health_facility_id option[value="' + result.rshift.health_facility_id + '"]').attr(
                            'selected',
                            'selected');
                    }
                    $('.select2ambulan').select2().html(result.resources);
                    form.find('#resource_id option[value="' + result.rshift.resource_id + '"]').attr(
                            'selected',
                            'selected');

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
                    url: "shift/" + id,
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
