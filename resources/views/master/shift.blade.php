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
                        <div class="col-md-2">
                            <select id="pilih_lokasi" name="lokasi" class="form-control select">
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
                            <button role="button" class="btn btn-primary"><i class="fa fa-search"></i> Tampilkan</button>
                        </div>
                        <div class="col-md-9"></div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="btn-group">
                                <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput" class="btn btn-success">
                                    <i class="fa fa-plus-circle"></i> Insert Data</button>
                            </div>
                        </div>
                    </div><br>
                    <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Shift</th>
                                <th class="text-center">Ambulan</th>
                                <th class="text-center">Driver</th>
                                <th class="text-center">Paramedis</th>
                                <th class="text-center">Lokasi</th>
                                <th class="text-center" style="width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
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
<div id="ModalInput" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Shift</b></h4>
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
                                <label class="control-label col-md-4 font-green-haze">Shift<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='shift' name='shift' class='form-control'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Lokasi<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select name='lokasi' id="lokasi" onchange="" class="form-control select">
                                        <option value=''>Pilih Lokasi</option>
                                        <option value='0'>Command Center</option>
                                        <option value='1'>RSUD SIDOARJO</option>
                                        <option value='2'>RUMKITBAN SIDOARJO</option>
                                        <option value='3'>RSU AL-Islam HM Mawardi</option>
                                        <option value='4'>RS Citra Medika</option>
                                        <option value='5'>RSI Siti Hajar</option>
                                        <option value='6'>RSU BUNDA WARU</option>
                                        <option value='7'>RS Mitra Sehat Mandiri</option>
                                        <option value='8'>RS Dummy 1</option>
                                        <option value='9'>RS SITI KHODIJAH</option>
                                        <option value='10'>RS Bhayangkara Pusdik Porong</option>
                                        <option value='11'>RS. ANWAR MEDIKA</option>
                                        <option value='12'>RS MATA FATMA SIDOARJO</option>
                                        <option value='13'>PKM GANTING</option>
                                        <option value='14'>PKM SIDOARJO</option>
                                        <option value='15'>PKM SEKARDANGAN</option>
                                        <option value='16'>PKM URANGAGUNG</option>
                                        <option value='17'>PKM BUDURAN</option>
                                        <option value='18'>PKM CANDI</option>
                                        <option value='19'>PKM PORONG</option>
                                        <option value='20'>PKM KEDUNGSOLO</option>
                                        <option value='21'>PKM JABON</option>
                                        <option value='22'>PKM KREMBUNG</option>
                                        <option value='23'>PKM TANGGULANGIN</option>
                                        <option value='24'>PKM TULANGAN</option>
                                        <option value='25'>PKM KEPADANGAN</option>
                                        <option value='26'>PKM TAMAN</option>
                                        <option value='27'>PKM TROSOBO</option>
                                        <option value='28'>PKM WARU</option>
                                        <option value='29'>PKM MEDAENG</option>
                                        <option value='30'>PKM SEDATI</option>
                                        <option value='31'>PKM GEDANGAN</option>
                                        <option value='32'>PKM SUKODONO</option>
                                        <option value='33'>PKM KRIAN</option>
                                        <option value='34'>PKM BARENGKRAJAN</option>
                                        <option value='35'>RS Aisyiyah Siti Fatimah Tulangan</option>
                                        <option value='36'>PKM BALONGBENDO</option>
                                        <option value='37'>PKM WONOAYU</option>
                                        <option value='38'>PKM TARIK</option>
                                        <option value='39'>PKM PRAMBON</option>
                                        <option value='40'>RS Delta Surya</option>
                                        <option value='41'>RS Jasem</option>
                                        <option value='42'>RS Mitra Keluarga Waru</option>
                                        <option value='43'>RS Assakinah Medika</option>
                                        <option value='44'>RSIA Soerya</option>
                                        <option value='45'>RSIA Prima Husada</option>
                                        <option value='46'>RSIA Pondok Tjandra</option>
                                        <option value='47'>RSIA Arafah Anwar Medika Sukodono</option>
                                        <option value='48'>RS Aminah</option>
                                        <option value='49'>RS Usada Sidoarjo</option>
                                        <option value='50'>RSIA Kirana</option>
                                        <option value='51'>RSIA Buah Delima</option>
                                        <option value='52'>RS Rahman Rahim</option>
                                        <option value='53'>RSIA Mitra Husada</option>
                                        <option value='54'>Puskesmas Wiguna</option>
                                        <option value='55'>Dinas Kesehatan</option>
                                        <option value='56'>faskes wiguna</option>
                                        <option value='57'>PMI Sidoarjo</option>
                                        <option value='75'>Faskes Simulasi Medokan Asri</option>
                                        <option value='84'>RS DKT Sidoarjo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Ambulan<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select id='ambulan' name='ambulan' class='form-control'>
                                        <option value="">Pilih Ambulan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Sopir<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select name='sopir' id='sopir' class="form-control select">
                                        <option value=''>Pilih Sopir</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Paramedis<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='paramedis' name='paramedis' class='form-control'>
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
