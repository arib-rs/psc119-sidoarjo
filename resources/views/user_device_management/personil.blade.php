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
                    <div class="col-md-4">
                        <select id="lokasi" class="form-control select2">
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
                            <button type="button" class="btn btn-primary col-md-6" id="bt_search_laporan"><i class="fa fa-search"></i>&nbsp; tampilkan</button>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="btn-group">
                            <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput" class="btn btn-success">
                                <i class="fa fa-plus-circle"></i> Insert Data</button>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th class="text-center">USERNAME</th>
                                            <th class="text-center">NAMA</th>
                                            <th class="text-center">JENIS KELAMIN</th>
                                            <th class="text-center">PROFESI</th>
                                            <th class="text-center">KEAHLIAN KHUSUS</th>
                                            <th class="text-center">LOKASI</th>
                                            <th class="text-center">AKSI</th>
                                            <th class="text-center">AKTIF</th>
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
                                                <a href="#" class="btn btn-primary" data-toggle="modal" data-placement="left" data-target="#ModalInput" title="Edit Data" style="margin: auto 2px;"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="btn btn-danger" data-placement="left" title="Hapus Data" style="margin: auto 2px;"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger" style="margin: auto 2px; background-color: #3B9C96; border-color: #3B9C96;"><i class="fa fa-check-square-o"></i></a>
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
                                                <a href="#" class="btn btn-primary" data-toggle="modal" data-placement="left" data-target="#ModalInput" title="Edit Data" style="margin: auto 2px;"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="btn btn-danger" data-placement="left" title="Hapus Data" style="margin: auto 2px;"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger" style="margin: auto 2px; background-color: #3B9C96; border-color: #3B9C96;"><i class="fa fa-check-square-o"></i></a>
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
                                                <a href="#" class="btn btn-primary" data-toggle="modal" data-placement="left" data-target="#ModalInput" title="Edit Data" style="margin: auto 2px;"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="btn btn-danger" data-placement="left" title="Hapus Data" style="margin: auto 2px;"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger" style="margin: auto 2px; background-color: #3B9C96; border-color: #3B9C96;"><i class="fa fa-check-square-o"></i></a>
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
                    <form method="post" id="form_req" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Username<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="nrp" name="nrp" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">NAMA<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="nama" name="nama" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">JENIS KELAMIN<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select id="" name="jk" class="form-control">
                                        <option value="">PILIH GENDER</option>
                                        <option value="pria">LAKI-LAKI</option>
                                        <option value="wanita">PEREMPUAN</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">KEAHLIAN KHUSUS<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="keahlian" name="keahlian_khusus" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">LOKASI<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select name="lokasi" id="lokasi" onchange="" class="form-control select">
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
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">PROFESI<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select name="id_profesi" id="profesi" class="form-control select2me">
                                        <option value="">PILIH PROFESI</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
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
        $('.select2').select2()

        $('#example1').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
@endsection
