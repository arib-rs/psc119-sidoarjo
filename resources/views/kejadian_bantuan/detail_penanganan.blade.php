@extends('layout/main')

@section('title', 'Detail Penanganan')

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
        <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-television"></i> Monitoring</a></li>
            <li class="active"> Detail Penanganan</li>
        </ol> -->
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
                                <td><button class="btn btn-primary">Entry Baru</button></td>
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
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">ny endah</td>
                                    <td class="text-center">wanita</td>
                                    <td class="text-center">65</td>
                                    <td class="text-center">W 1576 QB</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-placement="left" data-target="" title="Vital Sign" style="width: 24px; margin: auto 2px;"><i class="fa fa-stethoscope"></i></a>
                                        <a href="#" class="btn btn-xs btn-danger" data-placement="left" title="Triase" style="width: 24px; margin: auto 2px;"><i class="fa fa-warning"></i></a>
                                        <a href="#" class="btn btn-xs btn-primary" data-placement="left" title="Upload Foto" style="width: 24px; margin: auto 2px;"><i class="fa fa-image"></i></a>
                                        <a href="#" class="btn btn-xs btn-success" data-placement="left" title="Tindakan" style="width: 24px; margin: auto 2px;"><i class="fa fa-briefcase"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-xs btn-primary" data-placement="left" title="Detail Pasien" style="width: 24px; margin: auto 2px;"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-xs btn-warning" data-placement="left" title="Edit Pasien" style="width: 24px; margin: auto 2px;"><i class="fa fa-pencil"></i></a>
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
                        <p><span style="color: royalblue;">Total Time - </span>09:28:42</p>
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

@endsection

@section('scripts')
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
            })
    })
</script>
@endsection
