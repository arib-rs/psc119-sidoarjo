@extends('layout/main')

@section('title', 'Edit Laporan')

@section('css')
<style>
    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #dd4b39;
    }

    .forminputlaporan {
        margin-top: 2%;
        margin-bottom: 2%;
    }

    .hoverdispatch:hover {
        background-color: #f3565d !important;
        color: white !important;
    }

    .hoversolvedbyphone:hover {
        background-color: #66CC00 !important;
        color: white !important;
    }

    .hoverprankcall:hover {
        background-color: #b1b1b1 !important;
        color: white !important;
    }
</style>
@endsection

@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Laporan
            <small>Edit Data Laporan Kejadian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-sliders"></i> Kejadian & Bantuan</a></li>
            <li class="active">Edit Laporan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#laporankejadian" data-toggle="tab">Form Edit Laporan</a></li>
                        <div style="text-align: right; margin: 0.5% 0.5% 0.5% auto">
                            <button type="submit" class="btn" style="background-color: #3399FF; color:#fff; margin: auto 0.3%;">Simpan Laporan</button>
                            <button type="submit" class="btn" style="background-color: #FF9933; color:#fff; margin: auto 0.3%;">Batalkan Laporan</button>
                        </div>
                    </ul><br>
                    <div class="tab-content">
                        <div class="active tab-pane" id="laporankejadian">
                            <!-- Post -->
                            <form role="form">
                                <div class="post">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p>Call Number</p>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="CCN1466-1615142" disabled>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4"></div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p>Waktu</p>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <p>Tindakan Cepat</p>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn hoverdispatch" style="background-color: #fff; color:#b1b1b1; border-radius: 20px; transition-duration: 0.4s;">Dispatch</button>
                                            <button type="submit" class="btn hoversolvedbyphone" style="background-color: #fff; color:#b1b1b1; border-radius: 20px; transition-duration: 0.4s;">Solved By Phone</button>
                                            <button type="submit" class="btn hoverprankcall" style="background-color: #fff; color:#b1b1b1; border-radius: 20px; transition-duration: 0.4s;">Prank Call</button>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p>Nama Pelapor</p>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Masukan nama tempat atau alamat contoh Jl. Diponegoro no. 139 Sidoarjo">
                                            </div>
                                        </div>
                                        <div class="col-md-1" style="padding-left: 0;">
                                            <button type="submit" class="btn btn-primary" style="width: 100%;">Search</button>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <p>Latitude</p>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" placeholder="Readonly" readonly>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <p>Longitude</p>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" placeholder="Readonly" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <p>Detail Lokasi</p>
                                        </div>
                                        <div class="col-md-4">
                                            <textarea class="form-control" rows="4" placeholder="This textarea has a limit of 255 chars"></textarea>
                                        </div>
                                    </div><br>
                                    <h4 style="margin-bottom: 0;"><b>Data Pelapor</b></h4>
                                </div>
                                <!-- /.post -->

                                <div class="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <p>Nama Pelapor</p>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" placeholder="Nama Pelapor">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <p>Nama Pelapor</p>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" placeholder="0812xxxxxxxx">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <p>Alamat Pelapor</p>
                                        </div>
                                        <div class="col-md-4">
                                            <textarea class="form-control" rows="4" placeholder="This textarea has a limit of 255 chars"></textarea>
                                        </div>
                                    </div><br>
                                    <h4 style="margin-bottom: 0;"><b>Jenis Kejadian</b></h4>
                                </div>
                                <!-- /.post -->

                                <div class="post">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p>Jenis Kejadian</p>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control">
                                                <option>Pilih Kategori</option>
                                                <option>SIMULASI</option>
                                                <option>Lain - lain</option>
                                                <option>Keracunan/Over Dosis</option>
                                                <option>Sakit Perut</option>
                                                <option>Tidak Sadar/Pingsan/Hampir Pingsan/Tidak bernyawa</option>
                                                <option>Hamil/Bersalin/Keguguran</option>
                                                <option>Stroke</option>
                                                <option>Alergi</option>
                                                <option>Sakit Dada</option>
                                                <option>Masalah Jantung / A.I.C.D</option>
                                                <option>Trauma Cedera</option>
                                                <option>Kecelakaan Lalu Lintas (KLL)</option>
                                                <option>Masalah Tidak Diketahui</option>
                                                <option>Sakit Kepala</option>
                                                <option>Terbakar</option>
                                            </select>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <p>Jumlah Pasien</p>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <br>
                                    <h4 style="margin-bottom: 0;"><b>Keterangan Kejadian</b></h4>
                                </div>
                                <!-- /.post -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Keterangan Kejadian</p>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="4" placeholder="Keterangan Kejadian"></textarea>
                                    </div>
                                </div><br>

                                <div class="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4><b>MENU EMD</b></h4>
                                            <hr style="border-color: #d2d6de; margin: 5px 0 15px 0;">
                                            <button type="submit" class="btn" style="width: 80px; background-color: #f3565d; color:#fff;">EMD</button>
                                        </div>
                                        <div class="col-md-4">
                                            <h4><b>DITERUSKAN KE</b></h4>
                                            <hr style="border-color: #d2d6de; margin: 5px 0 15px 0;">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">
                                                        Polresta Sidoarjo
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">
                                                        Dinas Pemadakam Kebaran Sidoarjo
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">
                                                        BPBD Sidoarjo
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">
                                                        Komando Daerah Militer Sidoarjo
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">
                                                        SiManeis
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h4><b>Sumber Informasi</b></h4>
                                            <hr style="border-color: #d2d6de; margin: 5px 0 15px 0;">
                                            <select class="form-control">
                                                <option>Pilih Informasi</option>
                                                <option>Telepon 119</option>
                                                <option>Rumah Sakit - PSTN</option>
                                                <option>Si Manies</option>
                                                <option>Radio SPGDT</option>
                                                <option>Sosial Media</option>
                                                <option>HP</option>
                                                <option>SIMULASI</option>
                                                <option>Emergency Button</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.post -->

                                <div class="post">
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4" style=" text-align: right;">
                                            <button type="submit" class="btn" style="background-color: #3399FF; color:#fff;">Simpan Laporan</button>
                                            <button type="submit" class="btn" style="background-color: #f3565d; color:#fff;">Dispatch</button>
                                        </div>
                                    </div><br>
                                </div>
                                <!-- /.post -->

                            </form>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection

@section('scripts')
<script>
    $('#datepicker').datepicker({
        autoclose: true
    })
</script>
@endsection
