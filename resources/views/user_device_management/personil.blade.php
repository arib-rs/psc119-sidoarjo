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
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Profesi</th>
                                            <th class="text-center">Keahlian Khusus</th>
                                            <th class="text-center">Lokasi</th>
                                            <th class="text-center">Aktif</th>
                                            <th class="text-center" style="width: 100px;"><a id="btn-add"
                                                    data-toggle="tooltip" class="btn btn-xs btn-success"><i
                                                        class="fa fa-plus-circle"></i> Input Data</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">01</td>
                                            <td class="text-center">001</td>
                                            <td class="text-center">dr. Ivan Setiawan, Sp.EM</td>
                                            <td class="text-center">pria</td>
                                            <td class="text-center">Kepala PSC</td>
                                            <td class="text-center">Spesialis Emergency Medicine</td>
                                            <td class="text-center">Command Center</td>
                                            <td class="text-center">
                                                <a id="btn-aktif" class="btn btn-sm btn-success" data-id=""
                                                    title="Non Aktifkan">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <div style="margin-bottom:3px;">
                                                    <a id="btn-edit" class="btn btn-sm btn-primary" data-id=""
                                                        title="Edit Data">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a id="btn-delete" class="btn btn-sm btn-danger" data-id=""
                                                        title="Hapus Data">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">02</td>
                                            <td class="text-center">adhon</td>
                                            <td class="text-center">ROMADHON IMAM S</td>
                                            <td class="text-center">pria</td>
                                            <td class="text-center">Admin</td>
                                            <td class="text-center">Administrator PSC Kab. Sidoarjo</td>
                                            <td class="text-center">Command Center</td>
                                            <td class="text-center">
                                                <a id="btn-aktif" class="btn btn-sm btn-success" data-id=""
                                                    title="Non Aktifkan">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <div style="margin-bottom:3px;">
                                                    <a id="btn-edit" class="btn btn-sm btn-primary" data-id=""
                                                        title="Edit Data">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a id="btn-delete" class="btn btn-sm btn-danger" data-id=""
                                                        title="Hapus Data">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">03</td>
                                            <td class="text-center">yankesjuksda</td>
                                            <td class="text-center">Andi Dwi Purwanto, S.Kep. Ns</td>
                                            <td class="text-center">pria</td>
                                            <td class="text-center">Admin</td>
                                            <td class="text-center">Koordinator PSC</td>
                                            <td class="text-center">Command Center</td>
                                            <td class="text-center">
                                                <a id="btn-aktif" class="btn btn-sm btn-success" data-id=""
                                                    title="Non Aktifkan">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <div style="margin-bottom:3px;">
                                                    <a id="btn-edit" class="btn btn-sm btn-primary" data-id=""
                                                        title="Edit Data">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a id="btn-delete" class="btn btn-sm btn-danger" data-id=""
                                                        title="Hapus Data">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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

@section("modal")
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
                            <label class="control-label col-md-4">Username<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" id="username" name="username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Nama<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nama" name="nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Jenis Kelamin<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control select-gender" id="gender" name="gender">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="pria">Laki-laki</option>
                                    <option value="wanita">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Keahlian Khusus<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" id="keahlian_khusus" name="keahlian_khusus">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Lokasi<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control select2lokasi" name="health_facility_id"
                                    id="health_facility_id" style="width: 100%;">
                                    <option value="">Pilih Lokasi</option>
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
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Profesi<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select class="form-control select2profesi" name="profession_id" id="profession_id"
                                    style="width: 100%;">
                                    <option value="">Pilih Profesi</option>
                                    <option value="0">Staff</option>
                                    <option value="1">Driver</option>
                                    <option value="2">Perawat</option>
                                    <option value="3">Kepala Faskes</option>
                                    <option value="4">Kepala PSC</option>
                                    <option value="5">Admin</option>
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
        $('.select2lokasi').select2();
        $('.select2profesi').select2();

        $('.datatable').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': false,
            'info': true,
            'autoWidth': false
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
        });
    })
</script>
@endsection
