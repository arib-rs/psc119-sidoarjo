@extends('layout/main')

@section('title', 'Detail Penanganan')

@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" href="{{ asset('template') }}/css/magnific-popup.css">
@endsection

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
            Detail Penanganan
            <small>CCN :CCN1452-1613210439</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-sliders"></i> Kejadian & Bantuan</a></li>
            <li class="active">Request Bantuan</li>
            <li class="active"> Detail Penanganan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box" style="border-top: 1px solid #fff;">
            <div class="box-body">
                <div class="col-md-6">
                    <h3 style="margin-top: 10px;">Call Info</h3>
                    <table>
                        <tr>
                            <td style="width: 12em; height: 32px;"><b>CCN</b></td>
                            <td>CCN : CCN1452-1613210439</td>
                        </tr>
                        <tr>
                            <td style="width: 12em; height: 32px;"><b>Call Taker</b></td>
                            <td>dummy - Dummy, A.Md.Kep,.</td>
                        </tr>
                        <tr>
                            <td style="width: 12em; height: 32px;"><b>Pelapor</b></td>
                            <td>Ny. SULIANAH</td>
                        </tr>
                        <tr>
                            <td style="width: 12em; height: 32px;"><b>Waktu</b></td>
                            <td>01-02-2021 16:30:25</td>
                        </tr>
                        <tr>
                            <td style="width: 12em; height: 32px;"><b>No. Telepon</b></td>
                            <td>08123456789</td>
                        </tr>
                        <tr>
                            <td style="width: 12em; height: 32px;"><b>Keterangan</b></td>
                            <td>Pasien lemas, sesak nafas</td>
                        </tr>
                    </table>
                    <br><br>
                    <h3 style="margin-top: 10px;">Lokasi Kejadian</h3>
                    <div style="margin-bottom: 1em;">
                        <table>
                            <tr>
                                <td style="width: 12em; height: 32px;">
                                    <b>Alamat</b>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 60em;">
                                    Jalan Diponegroro No. 139, Lemah Putro, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61231
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 12em; height: 32px;">
                                    <b>Detail Lokasi</b>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 60em;">
                                    Toko Roti Larrita Bakery, Sebelah Kantor DISKOMINFO
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 12em; height: 32px;">
                                    <b>Koordinat</b>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 60em;">
                                    -7.432243074443844, 112.59669414550783
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 style="margin-top: 10px;">Bantuan</h3>
                    <table>
                        <tr>
                            <td style="width: 20em; height: 32px; font-size:large;"><b>AMB_HMM - W 1576 QB OFFLINE</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="width: 20em; height: 32px;"><b>Alasan</b></td>
                            <td>Driver sampai di lokasi duluan</td>
                        </tr>
                        <tr>
                            <td style="width: 20em; height: 32px;"><b>Dispatcher</b></td>
                            <td>dummy</td>
                        </tr>
                        <tr>
                            <td style="width: 20em; height: 32px;"><b>Ambulan Milik</b></td>
                            <td>RSUD Kab. Sidoarjo</td>
                        </tr>
                        <tr>
                            <td style="width: 20em; height: 32px;"><b>Faskes Tujuan</b></td>
                            <td>RSUD Kab. Sidoarjo</td>
                        </tr>
                        <tr>
                            <td style="width: 20em; height: 32px;"><b>Jarak Tempuh Penalangan</b></td>
                            <td>6.08 KM</td>
                        </tr>
                        <tr>
                            <td style="width: 20em; height: 32px;"><b>Jarak Tempuh Pulang Pergi</b></td>
                            <td>11.47 KM</td>
                        </tr>
                    </table>
                    <h3 style="margin-top: 20px;">Bantuan Lainnya</h3>
                    <table>
                        <tr>
                            <td style="width: 25.7em;"><b></b></td>
                            <td></td>
                        </tr>
                    </table>
                    <h3 style="margin-top: 20px;">EMD</h3>
                    <table>
                        <tr>
                            <td style="width: 25.7em;">
                                <button class="btn btn-danger" style="background-color: #FF6666; color: #fff;">Tampilkan EMD</button>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="box box-danger box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Laporan Kejadian</h3>

                <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div> -->
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div style="padding: 0.5em 1.5em 1.5em;">
                    <div style="margin-bottom: 1em;">
                        <table>
                            <tr>
                                <td style="width: 4.4em;">
                                    <h4>Pasien</h4>
                                </td>
                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#ModalDataPasien">Entry Baru</button></td>
                            </tr>
                        </table>
                    </div>
                    <div style="margin-bottom: 1em;">
                        <table id="datapasien" class="table dataTable no-footer table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">NAMA</th>
                                    <th class="text-center">JENIS KELAMIN</th>
                                    <th class="text-center">USIA</th>
                                    <th class="text-center">AMBULAN</th>
                                    <th class="text-center">TINDAKAN</th>
                                    <th class="text-center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">ny endah</td>
                                    <td class="text-center">wanita</td>
                                    <td class="text-center">65</td>
                                    <td class="text-center">W 1576 QB</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-placement="left" data-target="#ModalVitalSign" title="Vital Sign" style="width: 24px; margin: auto 2px;"><i class="fa fa-stethoscope"></i></a>
                                        <a href="#" class="btn btn-xs btn-danger" data-toggle="modal" data-placement="left" title="Triase" data-target="#ModalStatusTriase" style="width: 24px; margin: auto 2px;"><i class="fa fa-warning"></i></a>
                                        <a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-placement="left" title="Upload Foto" data-target="#ModalUploadFoto" style="width: 24px; margin: auto 2px;"><i class="fa fa-image"></i></a>
                                        <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-placement="left" title="Tindakan" data-target="#ModalTindakan" style="width: 24px; margin: auto 2px;"><i class="fa fa-briefcase"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-placement="left" title="Detail Pasien" data-target="#ModalDetailPasien" style="width: 24px; margin: auto 2px;"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-placement="left" title="Edit Pasien" data-target="#ModalDataPasien" style="width: 24px; margin: auto 2px;"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-xs btn-danger" data-placement="left" title="Delete Pasien" style="width: 24px; margin: auto 2px;"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="margin-bottom: 1em;">
                        <table>
                            <tr>
                                <td style="width: 10em;">
                                    <h4>Jenis Kejadian</h4>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="width: 12em; height: 30px;">
                                    <b>Jenis Kejadian</b>
                                </td>
                                <td>Lemas, Sesak Nafas</td>
                            </tr>
                            <tr>
                                <td style="width: 12em; height: 30px;">
                                    <b>Jumlah Korban</b>
                                </td>
                                <td>1</td>
                            </tr>
                        </table>
                    </div>
                    <div style="margin-bottom: 1em;">
                        <h4>Rute Kejadian</h4>
                    </div>
                    <div style="margin-bottom: 1em;">
                        <h4>Foto</h4>
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <div style="height:160px; margin-bottom:10px;">
                                    <div style="border:1px solid #ccc; padding:5px">
                                        <center><img class="show_image_incident" src="https://cdn.iconscout.com/icon/free/png-512/laptop-user-1-1179329.png" class="foto-penanganan img-responsive" style="max-height:150px; cursor:pointer"></center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div style="height:160px; margin-bottom:10px;">
                                    <div style="border:1px solid #ccc; padding:5px">
                                        <center><img class="show_image_incident" src="https://cdn2.iconfinder.com/data/icons/avatars-99/62/avatar-370-456322-512.png" class="foto-penanganan img-responsive" style="max-height:150px; cursor:pointer"></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 1em; padding: 0px;">
                        <h4>Laporan Penanganan</h4>
                        <table id="example1" class="table dataTable no-footer table-hover">
                            <thead>
                                <tr>
                                    <th>WAKTU</th>
                                    <th>TINDAKAN / PENANGANAN</th>
                                    <th class="text-center">DURASI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>15/04/2021 11:07:35</td>
                                    <td>Mulai Pelaporan</td>
                                    <td class="text-center">-</td>
                                </tr>
                                <tr>
                                    <td>15/04/2021 11:08:37</td>
                                    <td>Call Taker menentukan lokasi kejadian</td>
                                    <td class="text-center">00:01:02</td>
                                </tr>
                                <tr>
                                    <td>15/04/2021 11:08:54</td>
                                    <td>Menerima laporan dari SULIANAH</td>
                                    <td class="text-center">00:00:17</td>
                                </tr>
                                <tr>
                                    <td>5/04/2021 11:10:40</td>
                                    <td>Dispatcher mengirim request ke resource (OFFLINE) Ambulan <b>[184303-04]</b></td>
                                    <td class="text-center">00:01:46</td>
                                </tr>
                                <tr>
                                    <td>15/04/2021 11:10:40</td>
                                    <td><b>[184303-04] [ALEY]</b> Resource menerima penugasan (Manual) - 15/04/2021 11:11:31</td>
                                    <td class="text-center">00:00:00</td>
                                </tr>
                                <tr>
                                    <td>15/04/2021 11:10:40</td>
                                    <td><b>[184303-04] [ALEY]</b> Menuju lokasi kejadian</td>
                                    <td class="text-center">00:00:00</td>
                                </tr>
                                <tr>
                                    <td>15/04/2021 11:10:40</td>
                                    <td><b>[184303-04] [Arief91]</b>Resource menerima penugasan</td>
                                    <td class="text-center">00:00:00</td>
                                </tr>
                                <tr>
                                    <td>15/04/2021 11:11:00</td>
                                    <td><b>[184303-04] [mario]</b>Telah sampai di lokasi kejadian (Manual) - 15/04/2021 12:19:22</td>
                                    <td class="text-center">00:00:20</td>
                                </tr>
                                <tr>
                                    <td>15/04/2021 11:14:18</td>
                                    <td><b>[184303-04] [mario]</b> Vital Sign <b>[SULIANAH]</b></td>
                                    <td class="text-center">00:03:18</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="margin-bottom: 0.5em;">
                        <p><span style="color: royalblue;">Respon Time - </span>00:03:25</p>
                    </div>
                    <div style="margin-bottom: 0.5em;">
                        <p><span style="color: royalblue;">Total Time - </span>00:06:43</p>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section('modal')
<div id="ModalDataPasien" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Data Pasien</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="form_entry_pasien" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="nama" name="nama" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Jenis Kelamin
                                </label>
                                <div class="col-md-8">
                                    <select class="form-control select">
                                        <option value=""></option>
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Tanggal Lahir
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Usia
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="usia" name="usia" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Alamat
                                </label>
                                <div class="col-md-8">
                                    <textarea class="form-control" rows="2" id="alamat" name="alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Ditangani Oleh
                                </label>
                                <div class="col-md-8">
                                    <select class="form-control select">
                                        <option value="">W 1576 QB (15/04/2021 11:11:31 s/d 15/04/2021 12:19:22)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Waktu Entry
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datetimepicker">

                                    </div>
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

<div id="ModalVitalSign" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width: 30%;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Vital Sign</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form" style="padding-bottom: 0;">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="form_entry_pasien" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4">Tekanan Darah
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="tekanan_darah" name="tekanan_darah" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Suhu Tubuh
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="suhu_tubuh" name="suhu_tubuh" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Frekuensi Nadi
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="frekuensi_nadi" name="frekuensi_nadi" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Frekuensi Pernafasan
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="frekuensi_pernafasan" name="frekuensi_pernafasan" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">GCS
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="gcs" name="gcs" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Waktu Entry
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datetimepicker1">
                                    </div>
                                    <span style="color: red;">*Range waktu : 15-04-2021 11:11:31 s/d 15-04-2021 12:19:22</span>
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

<div id="ModalStatusTriase" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width: 30%;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Status Triase</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form" style="padding-bottom: 0;">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="form_entry_pasien" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4">Status Triase
                                </label>
                                <div class="col-md-8">
                                    <div class="col-md-12" style="background:green; height: 2em; margin-bottom: 1px; padding-top: 3px;"><input type="checkbox"></div>
                                    <div class="col-md-12" style="background:yellow; height: 2em; margin-bottom: 1px; padding-top: 3px;"><input type="checkbox"></div>
                                    <div class="col-md-12" style="background:red; height: 2em; margin-bottom: 1px; padding-top: 3px;"><input type="checkbox"></div>
                                    <div class="col-md-12" style="background:black; height: 2em; padding-top: 3px;"><input type="checkbox"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Keterangan
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="keterangan" name="keterangan" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Waktu Entry
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datetimepicker2">
                                    </div>
                                    <span style="color: red;">*Range waktu : 15-04-2021 11:11:31 s/d 15-04-2021 12:19:22</span>
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

<div id="ModalUploadFoto" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width: 30%;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Upload Foto</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form" style="padding-bottom: 0;">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="form_entry_pasien" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4">Foto
                                </label>
                                <div class="col-md-8">
                                    <input type="file" id="upload_foto">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Keterangan
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="keterangan" name="keterangan" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Waktu Entry
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datetimepicker3">
                                    </div>
                                    <span style="color: red;">*Range waktu : 15-04-2021 11:11:31 s/d 15-04-2021 12:19:22</span>
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

<div id="ModalTindakan" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width: 30%;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Tindakan</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form" style="padding-bottom: 0;">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="form_entry_pasien" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4">Tindakan
                                </label>
                                <div class="col-md-8">
                                    <select class="form-control select">
                                        <option value="">Pilih Tindakan</option>
                                        <option value="">Injeksi</option>
                                        <option value="">Pemberian Obat</option>
                                        <option value="">Pemasangan Alat</option>
                                        <option value="">Tindakan Lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Waktu Entry
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datetimepicker4">
                                    </div>
                                    <span style="color: red;">*Range waktu : 15-04-2021 11:11:31 s/d 15-04-2021 12:19:22</span>
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

<div id="ModalDetailPasien" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Detail Penanganan Pasien</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding-bottom: 1px;">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th colspan="2" style="font-size: 18px; border-top: #fff;">ny endah</th>
                        </tr>
                        <tr>
                            <th style="border-top: #fff;">Tanggal Lahir</th>
                            <td style="border-top: #fff;">23-11-1956</td>
                        </tr>
                        <tr>
                            <th style="border-top: #fff;">Usia</th>
                            <td style="border-top: #fff;">65</td>
                        </tr>
                        <tr>
                            <th style="border-top: #fff;">Jenis Kelamin</th>
                            <td style="border-top: #fff;">wanita</td>
                        </tr>
                        <tr>
                            <th style="border-top: #fff;">Alamat</th>
                            <td style="border-top: #fff;">Jalan Diponegroro No. 139, Lemah Putro, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61231</td>
                        </tr>
                        <tr>
                            <th style="border-top: #fff; width: 200px;">Ditangani Oleh</th>
                            <td style="border-top: #fff;">AMB_HMM - W 1576 QB</td>
                        </tr>
                        <tr>
                            <th style="border-top: #fff; width: 200px;">Faskes Tujuan</th>
                            <td style="border-top: #fff;">RSUD Kab. Sidoarjo</td>
                        </tr>
                        <tr>
                            <th style="border-top: #fff; width: 200px;">Crew</th>
                            <td style="border-top: #fff;"></td>
                        </tr>
                        <tr>
                        </tr>
                    </tbody>
                </table>
                <h3 class="form-section">Vital Sign</h3>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>Tekanan Darah</th>
                            <th>Suhu Tubuh</th>
                            <th>Frekuensi Nadi</th>
                            <th>Frekuensi Pernafasan</th>
                            <th>GCS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-danger">
                            <td>15-04-2021 11:14:18</td>
                            <td>110/70 mmHg</td>
                            <td>36 °C</td>
                            <td>84 kali/menit</td>
                            <td>26 kali</td>
                            <td>456</td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="form-section">Tindakan</h3>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>Tindakan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-danger">
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="form-section">Obat & Injeksi</h3>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>Tindakan</th>
                            <th>Nama Obat</th>
                            <th>Dosis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-danger">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="form-section">Status Triase</h3>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>Status Triase</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-danger">
                            <td>15-04-2021 11:14:18</td>
                            <td><i class="fa fa-square fa-fw" style="color:#f8e653"></i> kuning</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="form-section">Foto</h3>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div style="height:160px; margin-bottom:10px;">
                            <div style="border:1px solid #ccc; padding:5px">
                                <center><img src="https://cdn.iconscout.com/icon/free/png-512/laptop-user-1-1179329.png" class="foto-penanganan img-responsive" style="max-height:150px; cursor:pointer"></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div style="height:160px; margin-bottom:10px;">
                            <div style="border:1px solid #ccc; padding:5px">
                                <center><img src="https://cdn2.iconfinder.com/data/icons/avatars-99/62/avatar-370-456322-512.png" class="foto-penanganan img-responsive" style="max-height:150px; cursor:pointer"></center>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="form-section">Laporan Penanganan</h3>
                <table id="example2" class="table dataTable no-footer table-hover">
                    <thead>
                        <tr>
                            <th>WAKTU</th>
                            <th>TINDAKAN / PENANGANAN</th>
                            <th class="text-center">DURASI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>5/04/2021 11:10:40</td>
                            <td>Dispatcher mengirim request ke resource (OFFLINE) Ambulan <b>[184303-04]</b></td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td>15/04/2021 11:10:40</td>
                            <td><b>[184303-04] [ALEY]</b> Resource menerima penugasan (Manual) - 15/04/2021 11:11:31</td>
                            <td class="text-center">00:00:00</td>
                        </tr>
                        <tr>
                            <td>15/04/2021 11:10:40</td>
                            <td><b>[184303-04] [ALEY]</b> Menuju lokasi kejadian</td>
                            <td class="text-center">00:00:00</td>
                        </tr>
                        <tr>
                            <td>15/04/2021 11:10:40</td>
                            <td><b>[184303-04] [Arief91]</b>Resource menerima penugasan</td>
                            <td class="text-center">00:00:00</td>
                        </tr>
                        <tr>
                            <td>15/04/2021 11:11:00</td>
                            <td><b>[184303-04] [mario]</b>Telah sampai di lokasi kejadian (Manual) - 15/04/2021 12:19:22</td>
                            <td class="text-center">00:00:20</td>
                        </tr>
                        <tr>
                            <td>15/04/2021 11:14:18</td>
                            <td><b>[184303-04] [mario]</b> Vital Sign <b>[SULIANAH]</b></td>
                            <td class="text-center">00:03:18</td>
                        </tr>
                    </tbody>
                </table>
                <div style="margin-bottom: 1.5em; margin-top: 1em;">
                    <p><span style="color: royalblue;">Total Time - </span>00:03:38</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{ asset('template') }}/js/jquery.magnific-popup.js"></script>

<script>
    $(function() {
        $('#datetimepicker').datetimepicker({
            format: 'DD-MM-YYYY HH:mm:ss'
        });
        $('#datetimepicker1').datetimepicker({
            format: 'DD-MM-YYYY HH:mm:ss'
        });
        $('#datetimepicker2').datetimepicker({
            format: 'DD-MM-YYYY HH:mm:ss'
        });
        $('#datetimepicker3').datetimepicker({
            format: 'DD-MM-YYYY HH:mm:ss'
        });
        $('#datetimepicker4').datetimepicker({
            format: 'DD-MM-YYYY HH:mm:ss'
        });
        $('#datetimepicker5').datetimepicker({
            format: 'DD-MM-YYYY HH:mm:ss'
        });
        $('#datetimepicker6').datetimepicker({
            format: 'DD-MM-YYYY HH:mm:ss'
        });
    })
</script>

<script>
    $(document).ready(function() {
        $('.show_image_incident').magnificPopup({
            items: {
                src: 'https://cdn.iconscout.com/icon/free/png-512/laptop-user-1-1179329.png',
            },
            type: 'image'
        });
    });
</script>

<script>
    $(function() {
        $('#datepicker').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd/mm/yyyy'
        })
    })
</script>

<script>
    $(function() {
        $('#datapasien').DataTable({
                'paging': false,
                'lengthChange': false,
                'searching': false,
                'ordering': false,
                'info': false,
                'autoWidth': false
            }),
            $('#example1').DataTable({
                'paging': false,
                'lengthChange': false,
                'searching': false,
                'ordering': false,
                'info': false,
                'autoWidth': false
            }),
            $('#example2').DataTable({
                'paging': false,
                'lengthChange': false,
                'searching': false,
                'ordering': false,
                'info': false,
                'autoWidth': false
            })
    })
</script>
@endsection
