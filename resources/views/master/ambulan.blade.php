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
                            <select id="lokasi" class="form-control select2ambulan">
                                <option value=''>PILIH LOKASI</option>
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
                        <div class="col-md-4">
                            <select id="lokasi" class="form-control select2">
                                <option value="">JENIS RESOURCE</option>
                                <option value="0">Mobil</option>
                                <option value="1">Motor</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary col-md-6" id="bt_search_laporan"><i class="fa fa-search"></i>&nbsp; Tampilkan</button>
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
                    <table id="example1" class="table table-bordered dataTable no-footer table-hover">
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
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Form</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Jenis Resource<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select id='jenis_resource' name='jenis_resource' class='form-control'>
                                        <option value="">Jenis Resource</option>
                                        <option value="">Mobil</option>
                                        <option value="">Motor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">No Polisi<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='no_polisi' name='no_polisi' class='form-control'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Kode Ambulan<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='kode_ambulan' name='kode_ambulan' class='form-control'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Kelas<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select id='kelas' name='kelas' class='form-control'>
                                        <option value="">Pilih Kelas</option>
                                        <option value="">A</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                        <option value="">D</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Tahun Pembuatan<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='tahun_pembuatan' name='tahun_pembuatan' class='form-control'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Lokasi<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select name='lokasi' id='lokasi' class="form-control select">
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
                                <label class="control-label col-md-4 font-green-haze">Tahun Pakai<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='tahun_pakai' name='tahun_pakai' class='form-control'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Merk Mobil<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='merk_mobil' name='merk_mobil' class='form-control'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Foto<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' id='foto' name='foto' class='form-control'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Klasifikasi<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <textarea id='klasifikasi' name='klasifikasi' class="form-control" rows="2"></textarea>
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
<div id="ModalInputLayanan" class="modal">
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
                    <form method="post" id="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Layanan<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="layanan" name="layanan" class="form-control">
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
        $('.select2ambulan').select2()

        $('#example1').DataTable()
        $('#example2').DataTable({
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
