@extends('layout/main')

@section('title', 'Monitoring Alarm Kejadian')

@section('head')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
@endsection

@section('css')
<style>
    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #dd4b39;
    }

    .leaflet-top,
    .leaflet-bottom {
        z-index: 500;
    }
</style>
@endsection

@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Monitoring Alarm Kejadian - PSC-119 Kabupaten Sidoarjo
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-television"></i> Monitoring</a></li>
            <li class="active"> Monitoring Alarm Kejadian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="padding-bottom: 0;">
        <div class="box" style="border-top: 1px solid #fff;">
            <div class="box-body" style="padding: 15px 0 0 0;">
                <div class="col-md-8">
                    <div class="box box-danger box-solid">
                        <div class="box-header with-border">
                            <i class="fa fa-map-marker"></i>
                            <h3 class="box-title"> Lokasi Alarm Kejadian</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget=""><i class="fa fa-expand"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div id="mapid" class="box-body" style="height: 720px;"></div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center" style="margin-top: 10px;">Incident</h3>
                    <hr style="margin: 15px auto; border-top: 1px solid #cccccc;">
                    <div id="incident_view" style="position:relative; height:700px; overflow:scroll;padding-top: 10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading" onclick="">#EBSDA-314<small class="pull-right"><i class="fa fa-clock-o"></i> 17 Febuari 2021 10:42</small></div>
                            <div class="panel-body"><b>KATEGORI KEJADIAN : LAIN-LAIN</b><br>
                                <p>No. Telp : 08123455789<br>Pelapor : Diskominfo<br></p>
                                <p>Alamat Kejadian : <br>Jl. Diponegoro No.118-90, Lemah Putro, Lemahputro, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61213, Indonesia</p>
                                <hr style="border-top: 1px solid #cccccc;">
                                <p>simulasi</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" onclick="">#EBSDA-314<small class="pull-right"><i class="fa fa-clock-o"></i> 17 Febuari 2021 10:42</small></div>
                            <div class="panel-body"><b>KATEGORI KEJADIAN : LAIN-LAIN</b><br>
                                <p>No. Telp : 08123455789<br>Pelapor : Diskominfo<br></p>
                                <p>Alamat Kejadian : <br>Jl. Diponegoro No.118-90, Lemah Putro, Lemahputro, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61213, Indonesia</p>
                                <hr style="border-top: 1px solid #cccccc;">
                                <p>simulasi</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" onclick="">#EBSDA-314<small class="pull-right"><i class="fa fa-clock-o"></i> 17 Febuari 2021 10:42</small></div>
                            <div class="panel-body"><b>KATEGORI KEJADIAN : LAIN-LAIN</b><br>
                                <p>No. Telp : 08123455789<br>Pelapor : Diskominfo<br></p>
                                <p>Alamat Kejadian : <br>Jl. Diponegoro No.118-90, Lemah Putro, Lemahputro, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61213, Indonesia</p>
                                <hr style="border-top: 1px solid #cccccc;">
                                <p>simulasi</p>
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary text-center" style="width: 100%; margin-bottom: 10px;">Load More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection

@section('modal')

@endsection

@section('scripts')
<script>
    var mymap = L.map('mapid').setView([-7.447006, 112.718655], 16);

    // var mapaccess = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    //     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    //     maxZoom: 18,
    //     id: 'mapbox/streets-v11',
    //     tileSize: 512,
    //     zoomOffset: -1,
    //     accessToken: 'pk.eyJ1IjoiZGV2a29taW5mb3NkYSIsImEiOiJja21wbWN1c28wZGd6Mm5uc2VlaDdjZ2FvIn0._o72K-GnOmv1ZVbJJzRI_g'
    // }).addTo(mymap);

    var mapaccess = L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mymap);

    var marker = L.marker([-7.447006, 112.718655]).addTo(mymap);
</script>

@endsection
