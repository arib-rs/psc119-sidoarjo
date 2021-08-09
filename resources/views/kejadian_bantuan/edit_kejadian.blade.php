@extends('layout/main')

@section('title', 'Edit Laporan')

@section('css')
<style>
    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #3867d6;
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
                            {{-- <button type="submit" class="btn btn-save"
                                style="background-color: #3399FF; color:#fff; margin: auto 0.3%;">Simpan
                                Laporan</button> --}}
                            <button type="submit" class="btn"
                                style="background-color: #FF9933; color:#fff; margin: auto 0.3%;">Batalkan
                                Laporan</button>
                        </div>
                    </ul><br>
                    <div class="tab-content">
                        <div class="active tab-pane" id="laporankejadian">
                            <!-- Post -->
                            <form role="form">
                                <div class="post">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p>No. Laporan</p>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" value="" name="kode_kasus"
                                                id="kode_kasus" readonly>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <p>Waktu</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right" id="waktu"
                                                    name="waktu">

                                            </div>
                                        </div>
                                        {{-- <div class="col-md-2">
                                            <p>Lanjutan Laporan Dari</p>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control select2" id="lanjutan_kasus"
                                                name="lanjutan_kasus">
                                                <option value=""> -- Pilih CCN -- </option>
                                                @foreach ($ccn as $d)
                                                <option value='{{ $d->kode_kasus }}'>
                                        {{ $d->kode_kasus . ' - ' . $d->nama_pelapor }}</option>
                                        @endforeach
                                        </select>
                                        </div> --}}
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p>Lokasi Kejadian</p>
                                        </div>
                                        <div class="col-md-10">
                                            <div id="mapid" style="height:400px"></div>
                                            <input type="hidden" name="longitude" id="longitude">
                                            <input type="hidden" name="latitude" id="latitude">
                                            <input type="hidden" name="lokasi" id="lokasi">
                                        </div>
                                        {{-- <div class="col-md-9">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        placeholder="Masukan nama tempat atau alamat contoh Jl. Diponegoro no. 139 Sidoarjo">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <button type="submit" class="btn btn-primary"
                                                    style="width: 100%;">Search</button>
                                            </div> --}}
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
                                            <select class="form-control select2" name="category_id" autocomplete="off"
                                            id="category_id">
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
                                            <input type="number" name="jumlah_pasien" id="jumlah_pasien"
                                            class="form-control" placeholder="">
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
                                        {{-- <div class="col-md-4">
                                                    <h4><b>MENU EMD</b></h4>
                                                    <hr style="border-color: #d2d6de; margin: 5px 0 15px 0;">
                                                    <button type="submit" class="btn"
                                                        style="width: 80px; background-color: #f3565d; color:#fff;">EMD</button>
                                                </div> --}}
                                        <div class="col-md-4">
                                            <h4><b>DITERUSKAN KE</b></h4>
                                            <hr style="border-color: #d2d6de; margin: 5px 0 15px 0;">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="is_polres">
                                                        Polresta Sidoarjo
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="is_pmk" value=true>
                                                        Dinas Pemadakam Kebaran Sidoarjo
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="is_bpbd" value=true>
                                                        BPBD Sidoarjo
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="is_komando" value=true>
                                                        Komando Daerah Militer Sidoarjo
                                                    </label>
                                                </div>
                                                {{-- <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="is_manies" value=true>
                                                        SiManies
                                                    </label>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h4><b>Sumber Informasi</b></h4>
                                            <hr style="border-color: #d2d6de; margin: 5px 0 15px 0;">
                                            <select class="form-control" name="sumber_informasi">
                                                <option value="">-- Pilih Informasi --</option>
                                                <option value="Telepon HP">Telepon HP</option>
                                                {{-- <option value="Rumah Sakit - PSTN">Rumah Sakit - PSTN</option>
                                                        <option value="Si Manies">Si Manies</option>
                                                        <option value="Radio SPGDT">Radio SPGDT</option> --}}
                                                <option value="Telepon WA">Telepon WA</option>
                                                <option value="Chat WA">Chat WA</option>
                                                <option value="Sosial Media">Sosial Media</option>
                                                <option value="Radio SPGDT">Radio SPGDT</option>
                                                <option value="Simulasi">Simulasi</option>
                                                <option value="Emergency Button">Emergency Button</option>
                                                {{-- <option value="Emergency Button">Emergency Button</option> --}}
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
                                            <button type="submit" class="btn btn-primary btn-save"
                                            style="color:#fff;">Simpan
                                            Laporan</button>
                                            <button type="submit" class="btn btn-danger btn-dispatch"
                                                style="color:#fff;">Dispatch</button>
                                            {{-- <button type="submit" class="btn"
                                                        style="background-color: #66CC00; color:#fff;">Solved By
                                                        Phone</button> --}}
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

@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin="" />
{{-- <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" /> --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.5/dist/geosearch.css" />
@endsection

@section('scripts')
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin="">
</script>
{{-- <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script> --}}
<script src="https://unpkg.com/leaflet-geosearch@3.0.5/dist/geosearch.umd.js"></script>
<script>
    $('#datepicker').datepicker({
        autoclose: true
    })

    function generatePrefilled() {
        var d = new Date(),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = '' + d.getFullYear(),
            hour = '' + d.getHours(),
            min = '' + d.getMinutes(),
            sec = '' + d.getSeconds();

        if (month.length < 2)
            month = '0' + month;
        if (day.length < 2)
            day = '0' + day;
        if (hour.length < 2)
            hour = '0' + hour;
        if (min.length < 2)
            min = '0' + min;
        if (sec.length < 2)
            sec = '0' + sec;

        $('#kode_kasus').val('PSC-' + year + month + day + '-' + hour + min  + sec);
        $('#waktu').val(year + '-' + month + '-' + day + ' ' + hour + ':' + min + ':' + sec);
    }

    generatePrefilled();

    var mymap = '';
    var marker = '';

    function onMapClick(e) {
        if (marker != '') {
            mymap.removeLayer(marker);
        }
        marker = L.marker(e.latlng, {
            draggable: false
        }).addTo(mymap);
        // marker.on('dragend', function(event) {
        //     var marker = event.target;
        //     var position = marker.getLatLng();
        //     console.log(position);
        //     marker.setLatLng(position, {
        //         id: uni,
        //         draggable: 'true'
        //     }).bindPopup(position).update();
        // });
        $('#longitude').val(e.latlng.lng);
        $('#latitude').val(e.latlng.lat);

        $.get('https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=' + e.latlng.lat + '&lon=' + e
            .latlng.lng,
            function(data) {
                marker.bindPopup("<b>" + data.display_name + "</b><br />" + e.latlng.lat + ', ' +
                    e.latlng.lng).openPopup();
                $('#lokasi').val(data.display_name);
            });
    }
    $(function() {
        mymap = L.map('map_id').setView([-7.445999016651402, 112.71844103230215], 14);

        // L.tileLayer(
        //     'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYXJpYnJzIiwiYSI6ImNrb3V6ODhyYTAyeGwycHB0Z2RqZXZ2dTgifQ.0OhJv5NM-IiX9GE9E00CWw', {
        //         attribution: '',
        //         maxZoom: 18,
        //         id: 'mapbox/streets-v11',
        //         tileSize: 512,
        //         zoomOffset: -1,
        //         accessToken: 'your.mapbox.access.token'
        //     }).addTo(mymap);

        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mymap);

        const search = new GeoSearch.GeoSearchControl({
            style: 'bar',
            autoComplete: true,
            autoCompleteDelay: 100,
            searchLabel: 'Cari lokasi..',
            maxSuggestions: 6,
            autoClose: true,

            provider: new GeoSearch.OpenStreetMapProvider(),
        })
        mymap.addControl(search);

        mymap.on('geosearch/showlocation', function() {
            mymap.scrollWheelZoom.enable();
            mymap.dragging.enable();
        });

        mymap.on('click', onMapClick);
    })
</script>
@endsection
