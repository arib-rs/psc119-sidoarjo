@extends('layout/main')

@section('title', 'Resource')

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
            Resource
            <small>List Resource terdaftar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-flag"></i> Master</a></li>
            <li class="active"> Resource</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#resource" data-toggle="tab">Data Resource</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="resource">
                    <div class="row">
                        <div class="col-md-4">
                            <select id="select-lokasi" class="form-control select2 select-lokasi">
                                <option value="">PILIH LOKASI</option>
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
                        <div class="col-md-4">
                            <select id="select-jenis" class="form-control select2 select-jenis">
                                <option value="">JENIS RESOURCE</option>
                                <option value="0">Mobil</option>
                                <option value="1">Motor</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary col-md-6" id="bt_search_laporan"><i
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
                    {{-- <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 40px;">No</th>
                                <th class="text-center">Jns Resource</th>
                                <th class="text-center">No Polisi</th>
                                <th class="text-center">Kode Resource</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Produksi</th>
                                <th class="text-center">Lokasi</th>
                                <th class="text-center">Merk Mobil</th>
                                <th class="text-center">Tahun Pakai</th>
                                <th class="text-center">Foto</th>
                                <th class="text-center">Klasifikasi</th>
                                <th class="text-center">Status Resource</th>
                                <th class="text-center" style="width: 80px;">Aksi</th>
                                <th class="text-center">Aktif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Mobil</td>
                                <td class="text-center">W 8507 PP</td>
                                <td class="text-center">AMB_PKM PRNG1</td>
                                <td class="text-center">B</td>
                                <td class="text-center">2018</td>
                                <td class="text-center">PKM PORONG</td>
                                <td class="text-center">(unidentified)</td>
                                <td class="text-center">2018</td>
                                <td class="text-center">Foto</td>
                                <td class="text-center"></td>
                                <td class="text-center">Tidak Siap</td>
                                <td class="text-center">
                                    <div class="row">
                                        <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" style="background-color: #3B9C96;"><i class="fa fa-pencil-square-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">Mobil</td>
                                <td class="text-center">W 8506 PP</td>
                                <td class="text-center">AMB_PKM KRN1</td>
                                <td class="text-center">B</td>
                                <td class="text-center">2018</td>
                                <td class="text-center">PKM KRIAN</td>
                                <td class="text-center">Hyundai</td>
                                <td class="text-center">2018</td>
                                <td class="text-center">Foto</td>
                                <td class="text-center">0</td>
                                <td class="text-center">Tidak Siap</td>
                                <td class="text-center">
                                    <div class="row">
                                        <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" style="background-color: #3B9C96;"><i class="fa fa-pencil-square-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">Mobil</td>
                                <td class="text-center">W 7467 N</td>
                                <td class="text-center">AMB_7467</td>
                                <td class="text-center">C</td>
                                <td class="text-center">2018</td>
                                <td class="text-center">RS Delta Surya</td>
                                <td class="text-center">HIACE</td>
                                <td class="text-center">2018</td>
                                <td class="text-center">Foto</td>
                                <td class="text-center"></td>
                                <td class="text-center">Tidak Siap</td>
                                <td class="text-center">
                                    <div class="row">
                                        <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" style="background-color: #3B9C96;"><i class="fa fa-pencil-square-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="text-center">Mobil</td>
                                <td class="text-center">W 1046 NP</td>
                                <td class="text-center">AMB_RSUD_02</td>
                                <td class="text-center">A</td>
                                <td class="text-center">2013</td>
                                <td class="text-center">RSUD SIDOARJO</td>
                                <td class="text-center">HYUNDAI STAREX</td>
                                <td class="text-center">2014</td>
                                <td class="text-center">Foto</td>
                                <td class="text-center">AMBULANCE RESCUE</td>
                                <td class="text-center">Sibuk</td>
                                <td class="text-center">
                                    <div class="row">
                                        <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" type="button" style="background-color: #3B9C96;"><i class="fa fa-pencil-square-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td class="text-center">Mobil</td>
                                <td class="text-center">W 8511 PP</td>
                                <td class="text-center">AMB_PKM SDT</td>
                                <td class="text-center">B</td>
                                <td class="text-center">2018</td>
                                <td class="text-center">PKM SEDATI</td>
                                <td class="text-center">Hyundai</td>
                                <td class="text-center">2018</td>
                                <td class="text-center">Foto</td>
                                <td class="text-center"></td>
                                <td class="text-center">Tidak Siap</td>
                                <td class="text-center">
                                    <div class="row">
                                        <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
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
                                <th class="text-center" style="width: 40px;">No</th>
                                <th class="text-center">Jns Resource</th>
                                <th class="text-center">No Polisi</th>
                                <th class="text-center">Kode Resource</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Produksi</th>
                                <th class="text-center">Lokasi</th>
                                <th class="text-center">Merk Mobil</th>
                                <th class="text-center">Tahun Pakai</th>
                                <th class="text-center">Foto</th>
                                <th class="text-center">Klasifikasi</th>
                                <th class="text-center">Status Resource</th>
                                <th class="text-center" style="width: 50px;">Aktif</th>
                                <th class="text-center" style="width: 100px;"><a id="btn-add" data-toggle="tooltip"
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
                            <label class="control-label col-md-4">Jenis Resource<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control" id="jenis" name="jenis">
                                    <option value="">Jenis Resource</option>
                                    <option value="Mobil">Mobil</option>
                                    <option value="Motor">Motor</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">No Polisi<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nomor_polisi" name="nomor_polisi" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Kode Ambulan<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="kode" name="kode" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Kelas<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control" id="kelas" name="kelas">
                                    <option value="">Pilih Kelas</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Tahun Pembuatan<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="tahun_produksi" name="tahun_produksi"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Lokasi<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control select2 select-form"
                                    name="health_facility_id" id="health_facility_id" style="width: 100%;">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Tahun Pakai<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="tahun_pakai" name="tahun_pakai"
                                    autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Merk Mobil<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="merk" name="merk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Foto<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="hidden" class="form-control" id="pict_url" name="pict_url">

                                <input style="display:none" type="file" name="pict" id="pict"
                                    accept=".jpeg,.png,.jpg,.bmp,.gif">
                                <label for="pict" class="btn btn-app img-upload" style="margin:0" id="pict_label">
                                    <i class="fa fa-image"></i>
                                    Browse
                                </label>
                                <div id="pict_preview"
                                    style=" display:none; position: relative; margin:10px 0; border:1px solid #666">

                                    <a id="pict_del" class="btn btn-xs btn-danger"
                                        style="position:absolute; right:2px; top:3px">
                                        <i class="fa fa-times"></i>
                                    </a>
                                    <img style="max-width:200px;max-height:200px">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Klasifikasi<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <textarea class="form-control" id="klasifikasi" name="klasifikasi" rows="2"
                                    value=""></textarea>
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
        $('.select-lokasi').select2();
        $('.select-jenis').select2();

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
            ajax: 'get-ambulan',
            columns:
            [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'jenis',
                    name: 'jenis'
                },
                {
                    data: 'nomor_polisi',
                    name: 'nomor_polisi'
                },
                {
                    data: 'kode',
                    name: 'kode'
                },
                {
                    data: 'kelas',
                    name: 'kelas'
                },
                {
                    data: 'tahun_produksi',
                    name: 'tahun_produksi'
                },
                {
                    data: 'healthfacility.nama',
                    name: 'nama',
                    defaultContent: ""
                },
                {
                    data: 'merk',
                    name: 'merk'
                },
                {
                    data: 'tahun_pakai',
                    name: 'tahun_pakai'
                },
                {
                    data: 'pict_url',
                    name: 'pict_url',
                    sClass: 'text-center'
                },
                {
                    data: 'klasifikasi',
                    name: 'klasifikasi'
                },
                {
                    data: 'status',
                    name: 'status'
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

        $('#btn-add').click(function() {
            //reset
            $('#form-data').find('.form-control').val('');
            //show modal
            $('.modal-title').html('<b>Input Data</b>');
            $('#pict_del').trigger('click');
            $('#ModalInput').modal('show');
                var b = $(this),
                i = b.find('i'),
                cls = i.attr('class');
                $.ajax({
                    url: "{{ route('get-health-facilities') }}",
                    method: 'GET',
                    beforeSend: function() {
                        b.attr('disabled', 'disabled');
                        i.removeClass().addClass('fa fa-spin fa-circle-o-notch');
                    },
                    success: function(result) {
                        // console.log(result);
                        $('.select-form').select2().html(result.health_facilities);
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

        $("#pict").change(function() {
            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#pict_label').css('display', 'none');
                    $('#pict_preview img').removeAttr('src');
                    $('#pict_preview img').attr('src', e.target.result);
                    $('#pict_preview').css('display', 'inline-block');
                }

                reader.readAsDataURL(this.files[0]);
            } else {
                $('#pict_label').css('display', 'inline-block');
                $('#pict_preview').css('display', 'none');
            }
        });
        $("#pict").trigger('change');
        $("#pict_url").change(function() {
            if ($("#pict_url").val()) {
                $('#pict_label').css('display', 'none');
                $('#pict_preview img').removeAttr('src');
                $('#pict_preview img').attr('src', "{{ url('upload-photo/ambulan') }}/" + $(
                    "#pict_url").val());
                $('#pict_preview').css('display', 'inline-block');
            } else {
                $('#pict_label').css('display', 'inline-block');
                $('#pict_preview').css('display', 'none');
            }
        });

        $('#pict_del').click(function() {
            $("#pict_url").val("");
            $("#pict").val("");
            $("#pict_url").trigger('change');
            $("#pict").trigger('change');
        });

        $('#btn-save').click(function() {
            var b = $(this),
                i = b.find('i'),
                cls = i.attr('class'),
                id = $('#id').val(),
                url = '',
                method = '';

            var form = $('#form-data'),
                data =   //khusus form yg ada input type file
                // data = form.serializeArray(); //ini most compatible kalo misal ga pake input type file di form

            if (id == '') {
                url = "{{ route('ambulan.store') }}";
                method = 'POST';
            } else {
                url = "ambulan/" + id;
                method = 'POST'; //kalo pake ini di new FormData, ga mempan, return null di field upload image nya
                data.append('_method', 'PUT'); //ini juga bawaan FormData
            }
            console.log(url + ' ' + method);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                method: method,
                data: data,
                processData: false, // bawaan yg harus ada kalo pake new FormData
                    contentType: false, //
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                    i.removeClass().addClass('fa fa-spin fa-circle-o-notch');
                },
                success: function(result) {
                    if (result.success) {
                         console.log(result);
                        toastr['success'](result.success);
                        $('.datatable').DataTable().ajax.reload();
                        $('#ModalInput').modal('hide');
                        $('#form-data').find('input.form-control').val('');
                        $('#pict_del').trigger('click');
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
                url: "ambulan/" + id + "/edit",
                method: 'GET',
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                    i.removeClass().addClass('fa fa-spin fa-circle-o-notch');

                },
                success: function(result) {
                    // console.log(result);
                    $('.modal-title').html('<b>Edit Data</b>');
                    form.find('#btn-save').html('Edit');
                    form.find('#id').val(result.resources.id);
                    form.find('#jenis').val(result.resources.jenis);
                    form.find('#nomor_polisi').val(result.resources.nomor_polisi);
                    form.find('#kode').val(result.resources.kode);
                    form.find('#kelas').val(result.resources.kelas);
                    form.find('#tahun_produksi').val(result.resources.tahun_produksi);
                    form.find('#merk').val(result.resources.merk);
                    form.find('#tahun_pakai').val(result.resources.tahun_pakai);
                    form.find('#pict_url').val(result.resources.pict_url);
                    form.find('#klasifikasi').val(result.resources.klasifikasi);
                    if (result.resources.health_facility_id == null) {
                        $('.select-form').select2().html("<option value=''>Pilih Lokasi</option>");
                        $('.select-form').select2().append(result.health_facilities);
                    } else {
                        $('.select-form').select2().html(result.health_facilities);
                        form.find('#health_facility_id option[value="' + result.resources.health_facility_id + '"]').attr(
                            'selected',
                            'selected');
                    }
                    $("#pict").trigger('change');
                    $("#pict_url").trigger('change');

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
                    url: "ambulan/" + id,
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
