@extends('layout/main')

@section('title', 'Kategori')

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
                                <th class="text-center" style="width: 100px;"><a data-toggle="modal"
                                        data-target="#ModalInput" class="btn btn-xs btn-success"><i
                                            class="fa fa-plus-circle"></i> Input Data</a></th>
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
            <div class="modal-body form">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="form_req" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Kategori<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select id="kategori" name="kategori" class="form-control">
                                        <option value="">SIMULASI</option>
                                        <option value="">Lain-lain</option>
                                        <option value="">Keracunan/Over Dosis</option>
                                        <option value="">Sakit Perut</option>
                                        <option value="">Hamil/Bersalin/Keguguran</option>
                                        <option value="">Tidak Sadar/Pingsan/Hampir Pingsan/Tidak Bernyawa</option>
                                        <option value="">Stroke</option>
                                        <option value="">Alergi</option>
                                        <option value="">Sakit Dada</option>
                                        <option value="">Masalah Jantung / A.I.C.D</option>
                                        <option value="">Trauma Cedera</option>
                                        <option value="">Kecelakaan Lalu Lintas (KLL)</option>
                                        <option value="">Masalah Tidak Diketahui</option>
                                        <option value="">Sakit Kepala</option>
                                        <option value="">Terbakar</option>
                                        <option value="">Masalah Pernafasan</option>
                                        <option value="">Kejang / Sawan</option>
                                        <option value="">Kepanasan</option>
                                        <option value="">Kencing Manis / Diabetes</option>
                                        <option value="">Jatuh</option>
                                        <option value="">Serangan/Gigitan Hewan</option>
                                        <option value="">Lemas</option>
                                        <option value="">Orang Sakit(diagnosa spesifik)</option>
                                        <option value="">Alergi / Bisa Binatang (sengatan/gigitan)</option>
                                        <option value="">Sakit bagian belakang (bukan terluka)</option>
                                        <option value="">Pendarahan/Luka</option>
                                        <option value="">Psikiatrik/Percobaan Bunuh Dir</option>
                                        <option value="">Nyeri Punggung / Trauma</option>
                                        <option value="">Karbon Monoksida / Inhasi/ Cai</option>
                                        <option value="">Dipukul/Serangan</option>
                                        <option value="">Bantuan Pernafasan</option>
                                        <option value="">Kesetrum</option>
                                        <option value="">Cedera Mata</option>
                                        <option value="">Tikaman/Tembakan/Luka Tusuk</option>
                                        <option value="">Tercekik</option>
                                        <option value="">Terperangkap (Bukan di Kendaraan)</option>
                                        <option value="">Karbon Monoksida/Terhirup(Inhaled)</option>
                                        <option value="">Patah Tulang Terbuka</option>
                                        <option value="">sakit seluruh tubuh</option>
                                        <option value="">lemas dan kurang respon</option>
                                        <option value="">Home Care</option>
                                        <option value="">keluar darah dari jalan lahir</option>
                                        <option value="">konsultasi dokter</option>
                                        <option value="">pasang kateter</option>
                                        <option value="">mual muntah dan nyeri</option>
                                        <option value="">sesak dan deman</option>
                                        <option value="">penurunan kesadaran</option>
                                        <option value="">Stroke</option>
                                        <option value="">pusing berputar</option>
                                        <option value="">tidak bisa jalan dan nyeri perut</option>
                                        <option value="">Sesak Napas</option>
                                        <option value="">gemetar</option>
                                        <option value="">Visite dokter</option>
                                        <option value="">dingin dan kaki kesemutan</option>
                                        <option value="">perawatan luka</option>
                                        <option value="">Sesak Napas</option>
                                        <option value="">Penggunaan Mobil Sehat</option>
                                        <option value="">pasien poli</option>
                                        <option value="">pasang NGT</option>
                                        <option value="">nyeri seluruh tubuh</option>
                                        <option value="">Lemas dan sesak</option>
                                        <option value="">pasang NGT dan kateter</option>
                                        <option value="">pusing berputar dan sakit perut</option>
                                        <option value="">frakture</option>
                                        <option value="">tidak bisa ngapa-ngapain</option>
                                        <option value="">kejang</option>
                                        <option value="">rawat luka</option>
                                        <option value="">Sesak Napas</option>
                                        <option value="">KDM</option>
                                        <option value="">Layanan Ambulan</option>
                                        <option value="">Bencana Alam</option>
                                        <option value="">mual muntah dan panas </option>
                                        <option value="">sesak dan batuk</option>
                                        <option value="">Demam</option>
                                        <option value="">nyeri perut, pipis sakit</option>
                                        <option value="">kebakaran</option>
                                        <option value="">Lemas dan demam</option>
                                        <option value="">tidak bisa jalan</option>
                                        <option value="">vertigo</option>
                                        <option value="">Dehidrasi</option>
                                        <option value="">perut tegang dan lemas</option>
                                        <option value="">fisioterapi</option>
                                        <option value="">meninggal dunia</option>
                                        <option value="">mual muntah</option>
                                        <option value="">diduga dislokasi</option>
                                        <option value="">Sesak Napas</option>
                                        <option value="">tensi naik rasanya mau pingsan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Sub Kategori<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select name="sub_kategori" id="sub_kategori" class="form-control select">
                                        <option value="1">Trauma KLL</option>
                                        <option value="2">Trauma Non KLL</option>
                                        <option value="3">Non Trauma - Emergency</option>
                                        <option value="4">Kebakaran</option>
                                        <option value="5">Bencana Alam</option>
                                        <option value="6">Tidak Diketahui</option>
                                        <option value="7">Keamanan dan Ketertiban</option>
                                        <option value="8">Non Trauma - Non Emergency</option>
                                        <option value="9">Kesedak</option>
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
        // $('#example1').DataTable()
        // $('#example2').DataTable()
        // $('#example3').DataTable({
        //     'paging': true,
        //     'lengthChange': true,
        //     'searching': true,
        //     'ordering': true,
        //     'info': true,
        //     'autoWidth': false
        // })

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
    })

    $('#datepicker').datepicker({
        autoclose: true
    })
</script>
@endsection
