@extends('layout/main')

@section('title', 'Input Kejadian Baru')

@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Input Kejadian Baru
                <small>form laporan kejadian</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-sliders"></i> Kejadian & Bantuan</a></li>
                <li class="active">Input Kejadian Baru</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row" style="margin: 0px;">
                <!-- <div class="col-md-2"></div> -->
                <div id="timer-bg" class="col-md-12"
                    style="background:#66CC00; margin: 0; margin-bottom: 1em; text-align: center; padding: 1rem;">
                    <p style="font-size: 4rem; vertical-align: middle; margin: 0; color: #F4F4F4;">Timer: <span
                            id="timer">00:00:00</span></p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#laporankejadian" data-toggle="tab">Form Laporan Kejadian</a>
                                </li>
                                <div style="text-align: right; margin: 0.5% 0.5% 0.5% auto">
                                    <button type="submit" class="btn btn-save"
                                        style="background-color: #3399FF; color:#fff; margin: auto 0.3%;">Simpan
                                        Laporan</button>
                                    <button type="submit" class="btn"
                                        style="background-color: #FF9933; color:#fff; margin: auto 0.3%;">Batalkan
                                        Laporan</button>
                                </div>
                            </ul><br>
                            <div class="tab-content">
                                <div class="active tab-pane" id="laporankejadian">
                                    <!-- Post -->
                                    <form role="form" id="form-data">
                                        @csrf
                                        <div class="post">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p>Call Card Number</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" value="" name="kode_kasus"
                                                        id="kode_kasus" readonly>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2">
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
                                                </div>
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
                                                        <input type="text" class="form-control pull-right" id="waktu"
                                                            name="waktu">

                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2">
                                                    <p>Tindakan Cepat</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="btn btn-danger disabled"
                                                        style="border-radius: 20px;">Dispatch</a>
                                                    <a class="btn hoversolvedbyphone"
                                                        style="background-color: #fff; color:#b1b1b1; border-radius: 20px; transition-duration: 0.4s;">Solved
                                                        By Phone</a>
                                                    <a class="btn hoverprankcall"
                                                        style="background-color: #fff; color:#b1b1b1; border-radius: 20px; transition-duration: 0.4s;">Prank
                                                        Call</a>
                                                </div>
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
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p>Detail Lokasi</p>
                                                </div>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="4" id="detail_lokasi"
                                                        name="detail_lokasi"
                                                        placeholder="This textarea has a limit of 255 chars"></textarea>
                                                </div>
                                            </div>
                                            {{-- <div class="row">
                                            <div class="col-md-5">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <p>Latitude</p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control" placeholder="Readonly"
                                                            readonly>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <p>Longitude</p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control" placeholder="Readonly"
                                                            readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-2">
                                                <p>Detail Lokasi</p>
                                            </div>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="4"
                                                    placeholder="This textarea has a limit of 255 chars"></textarea>
                                            </div>
                                        </div> --}}
                                            <br>
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
                                                            <input type="text" class="form-control" name="nama_pelapor"
                                                                id="nama_pelapor" placeholder="Nama Pelapor">
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p>Telp Pelapor</p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control" name="telp_pelapor"
                                                                id="telp_pelapor" placeholder="0812xxxxxxxx">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2">
                                                    <p>Alamat Pelapor</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <textarea class="form-control" rows="4" name="alamat_pelapor"
                                                        id="alamat_pelapor"
                                                        placeholder="This textarea has a limit of 255 chars"></textarea>
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
                                                    <select class="form-control select2" name="category_id"
                                                        autocomplete="off" id="category_id">
                                                        <option value="">-- Pilih Kategori --</option>
                                                        @foreach ($categories as $d)
                                                            <option value={{ $d->id }}>{{ $d->kategori }}</option>
                                                        @endforeach
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
                                                <textarea class="form-control" rows="4" name="keterangan" id="keterangan"
                                                    placeholder="Keterangan Kejadian"></textarea>
                                            </div>
                                        </div><br>

                                        <div class="post">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4><b>MENU EMD</b></h4>
                                                    <hr style="border-color: #d2d6de; margin: 5px 0 15px 0;">
                                                    <button type="submit" class="btn"
                                                        style="width: 80px; background-color: #f3565d; color:#fff;">EMD</button>
                                                </div>
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
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="is_manies" value=true>
                                                                SiManies
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h4><b>Sumber Informasi</b></h4>
                                                    <hr style="border-color: #d2d6de; margin: 5px 0 15px 0;">
                                                    <select class="form-control" name="sumber_informasi">
                                                        <option value="">-- Pilih Informasi --</option>
                                                        <option value="Telepon 119">Telepon 119</option>
                                                        <option value="Rumah Sakit - PSTN">Rumah Sakit - PSTN</option>
                                                        <option value="Si Manies">Si Manies</option>
                                                        <option value="Radio SPGDT">Radio SPGDT</option>
                                                        <option value="Sosial Media">Sosial Media</option>
                                                        <option value="HP">HP</option>
                                                        <option value="Simulasi">SIMULASI</option>
                                                        <option value="Emergency Button">Emergency Button</option>
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
                                                    <button type="submit" class="btn btn-save"
                                                        style="background-color: #3399FF; color:#fff;">Simpan
                                                        Laporan</button>
                                                    <button type="submit" class="btn"
                                                        style="background-color: #f3565d; color:#fff;">Dispatch</button>
                                                    <button type="submit" class="btn"
                                                        style="background-color: #66CC00; color:#fff;">Solved By
                                                        Phone</button>
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
@section('modal')
    <div class="modal fade" id="ModalMulai" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Penanganan</h3>
                </div>
                <div class="modal-body">
                    Tekan Mulai untuk input kejadian baru
                </div>
                <div class="modal-footer">
                    <button id="btn-batal" type="button" class="btn btn-secondary">Batal</button>
                    <button id="btn-mulai" type="button" class="btn btn-success">
                        Mulai</button>
                </div>


            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" /> --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.5/dist/geosearch.css" />
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
@section('scripts')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
    </script>
    {{-- <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script> --}}
    <script src="https://unpkg.com/leaflet-geosearch@3.0.5/dist/geosearch.umd.js"></script>
    <script>
        const timer = document.getElementById('timer');
        // timerbg = document.getElementById('timer-bg');
        var hr = 0;
        var min = 0;
        var sec = 0;

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

            $('#kode_kasus').val('CCN' + year + '-' + month + day + hour + min + sec);
            $('#waktu').val(year + '-' + month + '-' + day);
        }

        function startTimer() {
            sec = parseInt(sec);
            min = parseInt(min);
            hr = parseInt(hr);

            sec = sec + 1;

            if (sec == 60) {
                min = min + 1;
                sec = 0;
            }
            if (min == 60) {
                hr = hr + 1;
                min = 0;
                sec = 0;
            }

            if (sec < 10 || sec == 0) {
                sec = '0' + sec;
            }
            if (min < 10 || min == 0) {
                min = '0' + min;
            }
            if (hr < 10 || hr == 0) {
                hr = '0' + hr;
            }

            timer.innerHTML = hr + ':' + min + ':' + sec;
            if (min >= 2 && min < 5) {
                $('#timer-bg').css('background', '#ffc107');
            } else if (min >= 5) {
                $('#timer-bg').css('background', '#dc3545');
            }
            setTimeout("startTimer()", 1000);

        }
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
            mymap = L.map('mapid').setView([-7.445999016651402, 112.71844103230215], 14);

            L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYXJpYnJzIiwiYSI6ImNrb3V6ODhyYTAyeGwycHB0Z2RqZXZ2dTgifQ.0OhJv5NM-IiX9GE9E00CWw', {
                    attribution: '',
                    maxZoom: 18,
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1,
                    accessToken: 'your.mapbox.access.token'
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

            $('#ModalMulai').modal({
                backdrop: 'static',
                keyboard: false
            })
            $('#ModalMulai').modal('show');

            $('#btn-mulai').click(function() {
                $('#ModalMulai').modal('hide');
                generatePrefilled();
                startTimer();

            })
            $('#btn-batal').click(function() {
                history.go(-1);
            })
            $('#form-data').submit(function(e) {
                e.preventDefault();
            });
            $('.btn-save').click(function() {
                var b = $(this);

                var form = $('#form-data'),
                    data = form.serializeArray();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('input_kejadian.store') }}",
                    method: "POST",
                    data: data,
                    beforeSend: function() {
                        b.attr('disabled', 'disabled');
                    },
                    success: function(result) {
                        if (result.success) {
                            toastr['success'](result.success);
                            location.href = "req_bantuan"
                        } else {
                            $.each(result.errors, function(key, value) {
                                toastr['error'](value);
                            });
                        }
                        b.removeAttr('disabled');

                    },
                    error: function() {
                        b.removeAttr('disabled');
                    }
                });

            })
            $('#lanjutan_kasus').change(function() {
                var kode_kasus = $('#lanjutan_kasus').val();

                $.ajax({
                    url: "get-incident/" + kode_kasus,
                    method: 'GET',
                    success: function(result) {
                        $('#nama_pelapor').val(result.nama_pelapor);
                        $('#telp_pelapor').val(result.telp_pelapor);
                        $('#alamat_pelapor').val(result.alamat_pelapor);
                        $('#jumlah_pasien').val(result.jumlah_pasien);
                        $('#keterangan').val(result.keterangan);
                        if (result.category_id == null) {
                            $('#category_id').find(':selected').removeAttr('selected');
                        } else {
                            $('#category_id option[value="' + result.category_id + '"]').attr(
                                'selected',
                                'selected');
                        }
                        // $('input:checkbox').prop('checked', false);
                    }
                });
            })
        })

    </script>
@endsection
