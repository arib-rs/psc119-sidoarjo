@extends('layout/main')

@section('title', 'Resource Management')

@section('css')
    <style>
        .nav-tabs-custom>.nav-tabs>li.active {
            border-top-color: #3867d6;
        }

        .modal-dialog {
            padding-top: 19%;
        }

    </style>
@endsection

@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Monitoring Resources
                <small>status ambulan di lapangan</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-television"></i> Monitoring</a></li>
                <li class="active"> Monitoring Resources</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <span style=" border: 1px solid #d2d6de; padding: 2px 1px 1px 4px; background: #ffffff;">
                                <input type="checkbox" name="cb-jenis-all" id="cb-jenis-all">
                            </span>
                            <h3 class="box-title" style=" padding-left: 8px; font-size:16px">Jenis
                                Resources</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body cb-filter cb-jenis">
                            <div class="col-md-6">
                                <div><input type="checkbox" name="cb-jenis-mobil" id="cb-jenis-mobil" value="mobil">
                                    {{-- <i class="fa fa-ambulance"></i> --}}
                                    Mobil</div>
                            </div>
                            <div class="col-md-6">
                                {{-- <div><span style="border: 1px solid #d2d6de; padding: 3px 5px; margin-right: 3px;"><input
                                            type="checkbox" style="padding: 0px; margin: 0px;"></span><i
                                        class="fa fa-motorcycle"></i><span> Motor</span></div> --}}
                                <div><input type="checkbox" name="cb-jenis-motor" id="cb-jenis-motor" value="motor">
                                    {{-- <i class="fa fa-motorcycle"></i> --}}
                                    Motor</div>
                            </div>
                            <div class="col-md-6">
                                {{-- <div><span style="border: 1px solid #d2d6de; padding: 3px 5px; margin-right: 3px;"><input
                                            type="checkbox" style="padding: 0px; margin: 0px;"></span><i
                                        class="fa fa-tasks"></i><span> Task</span></div> --}}
                                <div><input type="checkbox" name="cb-jenis-task" id="cb-jenis-task" value="task">
                                    {{-- <i class="fa fa-tasks"></i> --}}
                                    Task</div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <span style=" border: 1px solid #d2d6de; padding: 2px 1px 1px 4px; background: #ffffff;">
                                <input type="checkbox" name="cb-status-all" id="cb-status-all">
                            </span>
                            <h3 class="box-title" style="padding-left: 8px; font-size:16px">Status
                                Resources</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body cb-filter cb-status">
                            <div class="col-md-4" style="margin-bottom:5px">
                                <span class="col-md-2" style="padding: 1px 1px 1px 3px; border:1px solid #00A65A;">
                                    <input type="checkbox" name="cb-status-tersedia" id="cb-status-tersedia"
                                        value="tersedia" />
                                </span>
                                <span class="col-md-10 btn btn-xs btn-success"
                                    style="border-radius: 0px 3px 3px 0px; text-align: left;">
                                    <span style="font-size:14px">Tersedia : <span id="tersedia">0</span></span>
                                </span>
                            </div>
                            <div class="col-md-4" style="margin-bottom:5px">
                                <span class="col-md-2" style="padding: 1px 1px 1px 3px; border:1px solid #d73925;">
                                    <input type="checkbox" name="cb-status-sibuk" id="cb-status-sibuk" value="sibuk" />
                                </span>
                                <span class="col-md-10 btn btn-xs btn-danger"
                                    style="border-radius: 0px 3px 3px 0px; text-align: left;">
                                    <span style="font-size:14px">Sibuk : <span id="sibuk">0</span></span>
                                </span>
                            </div>
                            <div class="col-md-4" style="margin-bottom:5px">
                                <span class="col-md-2" style="padding: 1px 1px 1px 3px; border:1px solid #ddd;">
                                    <input type="checkbox" name="cb-status-belumsiap" id="cb-status-belumsiap"
                                        value="belumsiap" />
                                </span>
                                <span class="col-md-10 btn btn-xs btn-default"
                                    style="border-radius: 0px 3px 3px 0px; text-align: left;">
                                    <span style="font-size:14px">Belum Siap : <span id="belumsiap">0</span></span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <span class="col-md-2" style="padding: 1px 1px 1px 3px; border:1px solid #3867d6;">
                                    <input type="checkbox" name="cb-status-menujutkp" id="cb-status-menujutkp"
                                        value="menujutkp" />
                                </span>
                                <span class="col-md-10 btn btn-xs btn-primary"
                                    style="border-radius: 0px 3px 3px 0px; text-align: left;">
                                    <span style="font-size:14px">Menuju TKP : <span id="menujutkp">0</span></span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <span class="col-md-2" style="padding: 1px 1px 1px 3px; border:1px solid #F39C12;">
                                    <input type="checkbox" name="cb-status-ditkp" id="cb-status-ditkp" value="ditkp" />
                                </span>
                                <span class="col-md-10 btn btn-xs btn-warning"
                                    style="border-radius: 0px 3px 3px 0px; text-align: left;">
                                    <span style="font-size:14px">Di TKP : <span id="ditkp">0</span></span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <span class="col-md-2" style="padding: 1px 1px 1px 3px; border:1px solid #00c0ef;">
                                    <input type="checkbox" name="cb-status-menujurs" id="cb-status-menujurs"
                                        value="menujurs" />
                                </span>
                                <span class="col-md-10 btn btn-xs btn-info"
                                    style="border-radius: 0px 3px 3px 0px; text-align: left;">
                                    <span style="font-size:14px">Menuju RS : <span id="menujurs">0</span></span>
                                </span>
                            </div>

                            {{-- <div class="col-md-2">
                                <div class="col-md-2"
                                    style="width: 25px; height: 25px; border: 1px solid #00A65A; padding: 3px 5px 5px;">
                                    <input type="checkbox" style="margin-top: 0px;">
                                </div>
                                <div class="col-md-10 btn btn-success"
                                    style="border-radius: 0px; height: 25px; padding-top: 2px; text-align: left;">
                                    <span style="color: #fff">Sibuk : 1</span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="col-md-2"
                                    style="width: 25px; height: 25px; border: 1px solid #F4F4F4; padding: 3px 5px 5px;">
                                    <input type="checkbox" style="margin-top: 0px;">
                                </div>
                                <div class="col-md-10 btn btn-default"
                                    style="border-radius: 0px; height: 25px; padding-top: 2px; text-align: left;">
                                    <span>Belum Siap : 54</span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="col-md-2"
                                    style="width: 25px; height: 25px; border: 1px solid #3867d6; padding: 3px 5px 5px;">
                                    <input type="checkbox" style="margin-top: 0px;">
                                </div>
                                <div class="col-md-10 btn btn-danger"
                                    style="border-radius: 0px; height: 25px; padding-top: 2px; text-align: left;">
                                    <span style="color: #fff">Menuju TKP : 0</span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="col-md-2"
                                    style="width: 25px; height: 25px; border: 1px solid #F39C12; padding: 3px 5px 5px;">
                                    <input type="checkbox" style="margin-top: 0px;">
                                </div>
                                <div class="col-md-10 btn btn-warning"
                                    style="border-radius: 0px; height: 25px; padding-top: 2px; text-align: left;">
                                    <span style="color: #fff">Di TKP : 0</span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="col-md-2"
                                    style="width: 25px; height: 25px; border: 1px solid #3C8DBC; padding: 3px 5px 5px;">
                                    <input type="checkbox" style="margin-top: 0px;">
                                </div>
                                <div class="col-md-10 btn btn-primary"
                                    style="border-radius: 0px; height: 25px; padding-top: 2px; text-align: left;">
                                    <span style="color: #fff">Menuju RS : 0</span>
                                </div>
                            </div> --}}
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <span style=" border: 1px solid #d2d6de; padding: 2px 1px 1px 4px; background: #ffffff;">
                                <input type="checkbox" name="cb-kelas-all" id="cb-kelas-all">
                            </span>
                            <h3 class="box-title" style="padding-left: 8px; font-size:16px">Kelas
                                Resources</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body cb-filter cb-kelas">
                            <div class="col-md-6">
                                {{-- <div><span style="border: 1px solid #d2d6de; padding: 3px 5px; margin-right: 3px;"><input
                                            type="checkbox" style="padding: 0px; margin: 0px;"></span><span>
                                        Kelas A</span></div> --}}
                                <div><input type="checkbox" name="cb-kelas-a" id="cb-kelas-a" value="kelas-a"> A</div>
                            </div>
                            <div class="col-md-6">
                                {{-- <div><span style="border: 1px solid #d2d6de; padding: 3px 5px; margin-right: 3px;"><input
                                            type="checkbox" style="padding: 0px; margin: 0px;"></span><span>
                                        Kelas B</span></div> --}}
                                <div><input type="checkbox" name="cb-kelas-b" id="cb-kelas-b" value="kelas-b"> B</div>
                            </div>
                            <div class="col-md-6">
                                {{-- <div><span style="border: 1px solid #d2d6de; padding: 3px 5px; margin-right: 3px;"><input
                                            type="checkbox" style="padding: 0px; margin: 0px;"></span><span>
                                        Kelas C</span></div> --}}
                                <div><input type="checkbox" name="cb-kelas-c" id="cb-kelas-c" value="kelas-c"> C</div>
                            </div>
                            <div class="col-md-6">
                                {{-- <div><span style="border: 1px solid #d2d6de; padding: 3px 5px; margin-right: 3px;"><input
                                            type="checkbox" style="padding: 0px; margin: 0px;"></span><span>
                                        Kelas D</span></div> --}}
                                <div><input type="checkbox" name="cb-kelas-d" id="cb-kelas-d" value="kelas-d"> D</div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
            <div class="row" style="margin: 0px;">
                <div class="col-md-12" style="padding: 0px;">
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">

                            <h3 class="box-title" style="font-size:16px">Resources - Total Online :
                                <span id="total-resources">0</span>
                                <button type="submit" class="btn btn-danger btn-xs" style="margin-left:5px">Lihat di
                                    Peta</button>
                            </h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div style="position:relative; height: 500px; overflow:scroll; overflow-x: hidden;">
                                <div class="row">
                                    <div id="resources-section" class="col-md-12">
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfo">
                                            <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfo">
                                            <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfo">
                                            <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfo">
                                            <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfo">
                                            <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfo">
                                            <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfo">
                                            <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfo">
                                            <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                                <div style="width: 90%; float: left;">
                                                    <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                        style="font-size: 11px;">RS
                                                        DUMMY</span>
                                                </div>
                                                <div
                                                    style="width: 10%; text-align: center; vertical-align: middle;  margin-top: 5%">
                                                    <strong style="color:#cccccc; text-align: center; font-size:12px"><span
                                                            class="text-uppercase">L</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfo">
                                            <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                                <div style="width: 90%; float: left;">
                                                    <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                        style="font-size: 11px;">RS
                                                        DUMMY</span>
                                                </div>
                                                <div
                                                    style="width: 10%; text-align: center; vertical-align: middle;  margin-top: 5%">
                                                    <strong style="color:#cccccc; text-align: center; font-size:12px"><span
                                                            class="text-uppercase">D</span></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 0px 7px;" data-toggle="modal"
                                            data-target="#ModalInfoAmbulanOffline">
                                            <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span
                                                    style="font-size: 11px;">RS
                                                    DUMMY</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <div class="row" style="margin: 0px;">
                <div class="col-md-12" style="padding: 0px;">
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title" style="font-size:16px"> Faskes - Total Online :
                                <span id="total-faskes-online">0</span>
                            </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div id="faskes-section" class="col-md-12">
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-success" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 0px 7px;">
                                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;">
                                            <span style="font-size: 16px;">RS DUMMY</span> <br> <span
                                                style="font-size: 11px;">IGD
                                                DUMMY</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('modal')
    <div id="ModalInfo" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="col-md-12" style="background:#e74c3c; height: 7px;"></div>
                <div class="modal-header">
                    <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Apa Yang Ingin Anda Lakukan
                            ?</b></h4>
                    <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button><br><br><br>
                    <div class="pull-right">
                        <button type="submit" onclick="" class="btn btn-success">CATATAN</button>
                        <button type="submit" onclick="" class="btn btn-danger">AMBULAN SIBUK</button>
                        <button type="submit" onclick="" class="btn btn-warning">LIHAT SOURCE DI PETA</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ModalInfoAmbulanOffline" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="col-md-12" style="background:#e74c3c; height: 7px;"></div>
                <div class="modal-header">
                    <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Apa Yang Ingin Anda Lakukan
                            ?</b></h4>
                    <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button><br><br><br>
                    <div class="pull-right">
                        <button type="submit" onclick="" class="btn btn-danger">AKTIFKAN AMBULAN</button>
                        <button type="submit" onclick="" class="btn btn-warning">LIHAT SOURCE DI PETA</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function getResourcesRealTime() {
            $.ajax({
                url: "get-resources-real-time",
                method: "GET",
                success: function(result) {
                    $('#resources-section').html(result.data);
                    $('.cb-filter').find('input:checkbox').trigger('change');
                    $('#total-resources').html(result.total);
                    $('#tersedia').html(result.tersedia);
                    $('#sibuk').html(result.sibuk);
                    $('#menujutkp').html(result.menujutkp);
                    $('#ditkp').html(result.ditkp);
                    $('#menujurs').html(result.menujurs);
                    $('#belumsiap').html(result.belumsiap);

                },
                complete: function() {
                    setTimeout(getResourcesRealTime, 5000);
                }
            });
        }
        getResourcesRealTime();

        function getFaskesRealTime() {
            $.ajax({
                url: "get-faskes-real-time",
                method: "GET",
                success: function(result) {
                    $('#faskes-section').html(result.data);
                    $('#total-faskes-online').html(result.total);
                },
                complete: function() {
                    setTimeout(getFaskesRealTime, 5000);
                }
            });
        }
        getFaskesRealTime();
        $(function() {
            $('#cb-jenis-all').change(function() {
                if ($(this).is(':checked')) {
                    $('.cb-jenis').find('input:checkbox').prop('checked', 'checked').trigger('change');
                } else {
                    $('.cb-jenis').find('input:checkbox').prop('checked', false).trigger('change');
                }
            });
            $('#cb-status-all').change(function() {
                if ($(this).is(':checked')) {
                    $('.cb-status').find('input:checkbox').prop('checked', 'checked').trigger('change');
                } else {
                    $('.cb-status').find('input:checkbox').prop('checked', false).trigger('change');
                }
            });
            $('#cb-kelas-all').change(function() {
                if ($(this).is(':checked')) {
                    $('.cb-kelas').find('input:checkbox').prop('checked', 'checked').trigger('change');
                } else {
                    $('.cb-kelas').find('input:checkbox').prop('checked', false).trigger('change');
                }
            });
            $('.cb-jenis').find('input:checkbox').change(function() {
                var temp = $('.cb-jenis').find('input[type="checkbox"]:checked').length,
                    cblength = $('.cb-jenis').find('input[type="checkbox"]').length;
                if (cblength == temp) {
                    $('#cb-jenis-all').prop('checked', 'checked');
                } else {
                    $('#cb-jenis-all').prop('checked', false);
                }
            })
            $('.cb-status').find('input:checkbox').change(function() {
                var temp = $('.cb-status').find('input[type="checkbox"]:checked').length,
                    cblength = $('.cb-status').find('input[type="checkbox"]').length;
                if (cblength == temp) {
                    $('#cb-status-all').prop('checked', 'checked');
                } else {
                    $('#cb-status-all').prop('checked', false);
                }
            })
            $('.cb-kelas').find('input:checkbox').change(function() {
                var temp = $('.cb-kelas').find('input[type="checkbox"]:checked').length,
                    cblength = $('.cb-kelas').find('input[type="checkbox"]').length;
                if (cblength == temp) {
                    $('#cb-kelas-all').prop('checked', 'checked');
                } else {
                    $('#cb-kelas-all').prop('checked', false);
                }
            })
            $('.cb-filter').find('input:checkbox').change(function() {
                $('.cb-filter').find('input[type="checkbox"]:checked').each(function() {
                    $('.' + $(this).val()).css('display', 'block');
                })
                $('.cb-filter').find('input[type="checkbox"]:not(:checked)').each(function() {
                    $('.' + $(this).val()).css('display', 'none');
                })
            })
            $('#cb-jenis-all').prop('checked', 'checked').trigger('change');
            $('#cb-status-all').prop('checked', 'checked').trigger('change');
            $('#cb-kelas-all').prop('checked', 'checked').trigger('change');

        });

    </script>
@endsection
