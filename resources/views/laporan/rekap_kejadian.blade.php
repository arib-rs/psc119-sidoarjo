@extends('layout/main')

@section('title', 'Rekap Laporan Kejadian ')

@section('css')
<style>
    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #3867d6;
    }
</style>
@endsection

@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Rekap Laporan Kejadian
            <small>Daftar Semua Laporan Kejadian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-files-o"></i> Laporan - Laporan</a></li>
            <li class="active"> Rekap Laporan Kejadian </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#rekap_kejadian" data-toggle="tab">Rekap Kejadian</a></li>
            </ul>
            <div class="tab-content">
                <!-- Font Awesome Icons -->
                <div class="tab-pane active" id="rekap_kejadian">
                    <div class="row">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-default" id="daterange-btn" style="width: 100%;">
                                <span>
                                    <i class="fa fa-calendar"></i> Date range picker
                                </span>
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <select name="filter" id="filter" class="form-control select">
                                <option value="">-- Filter By --</option>
                                <option value="Butuh Bantuan">Butuh Bantuan</option>
                                <option value="Laporan Batal">Laporan Batal</option>
                                <option value="Bantuan Sudah Dikirim">Bantuan Sudah Dikirim</option>
                                <option value="Sedang Dimintakan Bantuan">Sedang Dimintakan Bantuan</option>
                                <option value="Laporan Belum Lengkap">Laporan Belum Lengkap</option>
                                <option value="Prank Call">Prank Call</option>
                                <option value="Solved By Phone">Solved By Phone</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <button role="button" class="btn btn-primary"><i class="fa fa-search"></i> Tampilkan</button>
                        </div>
                        <div class="col-md-5"></div>
                        <div class="col-md-1 text-right">
                            <div class="btn-group pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-print"></i>&nbsp; Print <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li onclick=""><a href="#"><i class="fa fa-print"></i>&nbsp; PDF</a></li>
                                        <li onclick=""><a href="#"><i class="fa fa-print"></i>&nbsp; EXCEL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">No. Laporan</th>
                                <th class="text-center">Informasi</th>
                                <th class="text-center">Pelapor</th>
                                <th class="text-center">Waktu</th>
                                <th class="text-center">Lokasi Kejadian</th>
                                <th class="text-center">Jenis Kejadian</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center">Status Penanganan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">PSC-20210702-846425</td>
                                <td class="text-center">SIMULASI</td>
                                <td class="text-center">SEBONE</td>
                                <td class="text-center">2021-02-09 11:53:48</td>
                                <td class="text-center">SIDOARJO REGENCY, EAST JAVA, INDONESIA</td>
                                <td class="text-center">SIMULASI</td>
                                <td class="text-center">EVAKUASI KORBAN KLL</td>
                                <td class="text-center">BANTUAN SUDAH DIKIRIM</td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">PSC-20210702-218755</td>
                                <td class="text-center">TELEPON 119</td>
                                <td class="text-center">NANDA</td>
                                <td class="text-center">2021-02-02 05:32:38</td>
                                <td class="text-center">JL. RAYA TEMU PRAMBON NO.3, TEMU 3, TEMU, KEC. PRAMBON, KABUPATEN SIDOARJO, JAWA TIMUR 61264, INDONESIA</td>
                                <td class="text-center">LAIN - LAIN</td>
                                <td class="text-center">MENANYAKAN JASA AMBULANS UNTUK TRANSFER PASIEN ANTAR KOTA/ PROVINSI</td>
                                <td class="text-center">LAPORAN BELUM LENGKAP</td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">PSC-20210708-405064</td>
                                <td class="text-center">HP</td>
                                <td class="text-center">IGD RS. SITI KHODIJAH SEPANJANG</td>
                                <td class="text-center">2021-02-15 23:04:26</td>
                                <td class="text-center">JL. BEBEKAN MASJID NO.4, BEBEKAN, KEC. TAMAN, KABUPATEN SIDOARJO, JAWA TIMUR 61257, INDONESIA</td>
                                <td class="text-center">LAIN-LAIN</td>
                                <td class="text-center">MAU MERUJUK PASIEN (MEMEBERIKAN LAPORAN RUJUKAN ) TINDAKAN : MEMEBERIKAN NOMOR RUJUKAN RSUD SIDOARJO</td>
                                <td class="text-center">SOLVED BY PHONE</td>
                                <td class="text-center"><button class="btn btn-sm btn-primary" type="button" title="Detail Kejadian"><i class="fa fa-files-o"></i></button></td>
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
