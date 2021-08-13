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
                <div class="col-md-2">
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <span style=" border: 1px solid #d2d6de; padding: 2px 1px 1px 4px; background: #ffffff;">
                                <input type="checkbox">
                            </span>
                            <h3 class="box-title" style="padding-top: 4px; padding-left: 8px;">Jenis
                                Resources</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="col-md-4">
                                <div><input type="checkbox">
                                    {{-- <i class="fa fa-ambulance"></i> --}}
                                    Mobil</div>
                            </div>
                            <div class="col-md-4">
                                {{-- <div><span style="border: 1px solid #d2d6de; padding: 3px 5px; margin-right: 3px;"><input
                                            type="checkbox" style="padding: 0px; margin: 0px;"></span><i
                                        class="fa fa-motorcycle"></i><span> Motor</span></div> --}}
                                <div><input type="checkbox">
                                    {{-- <i class="fa fa-motorcycle"></i> --}}
                                    Motor</div>
                            </div>
                            <div class="col-md-4">
                                {{-- <div><span style="border: 1px solid #d2d6de; padding: 3px 5px; margin-right: 3px;"><input
                                            type="checkbox" style="padding: 0px; margin: 0px;"></span><i
                                        class="fa fa-tasks"></i><span> Task</span></div> --}}
                                <div><input type="checkbox">
                                    {{-- <i class="fa fa-tasks"></i> --}}
                                    Task</div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <span style=" border: 1px solid #d2d6de; padding: 2px 1px 1px 4px; background: #ffffff;">
                                <input type="checkbox">
                            </span>
                            <h3 class="box-title" style="padding-top: 4px; padding-left: 8px;">Status
                                Resources</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="col-md-2">
                                <span class="col-md-2" style="padding: 1px 1px 1px 4px; border:1px solid #00A65A;">
                                    <input type="checkbox" />
                                </span>
                                <span class="col-md-10 btn btn-xs btn-success"
                                    style="border-radius: 0px 3px 3px 0px; text-align: left;">
                                    <span style="font-size:14px">Tersedia : 8</span>
                                </span>
                            </div>
                            <div class="col-md-2">
                                <span class="col-md-2" style="padding: 1px 1px 1px 4px; border:1px solid #d73925;">
                                    <input type="checkbox" />
                                </span>
                                <span class="col-md-10 btn btn-xs btn-danger"
                                    style="border-radius: 0px 3px 3px 0px; text-align: left;">
                                    <span style="font-size:14px">Sibuk : 1</span>
                                </span>
                            </div>
                            <div class="col-md-2">
                                <span class="col-md-2" style="padding: 1px 1px 1px 4px; border:1px solid #ddd;">
                                    <input type="checkbox" />
                                </span>
                                <span class="col-md-10 btn btn-xs btn-default"
                                    style="border-radius: 0px 3px 3px 0px; text-align: left;">
                                    <span style="font-size:14px">Belum Siap : 54</span>
                                </span>
                            </div>
                            <div class="col-md-2">
                                <span class="col-md-2" style="padding: 1px 1px 1px 4px; border:1px solid #3867d6;">
                                    <input type="checkbox" />
                                </span>
                                <span class="col-md-10 btn btn-xs btn-primary"
                                    style="border-radius: 0px 3px 3px 0px; text-align: left;">
                                    <span style="font-size:14px">Menuju TKP : 0</span>
                                </span>
                            </div>
                            <div class="col-md-2">
                                <span class="col-md-2" style="padding: 1px 1px 1px 4px; border:1px solid #F39C12;">
                                    <input type="checkbox" />
                                </span>
                                <span class="col-md-10 btn btn-xs btn-warning"
                                    style="border-radius: 0px 3px 3px 0px; text-align: left;">
                                    <span style="font-size:14px">Di TKP : 0</span>
                                </span>
                            </div>
                            <div class="col-md-2">
                                <span class="col-md-2" style="padding: 1px 1px 1px 4px; border:1px solid #00c0ef;">
                                    <input type="checkbox" />
                                </span>
                                <span class="col-md-10 btn btn-xs btn-info"
                                    style="border-radius: 0px 3px 3px 0px; text-align: left;">
                                    <span style="font-size:14px">Menuju RS : 0</span>
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
                <div class="col-md-2">
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <span style=" border: 1px solid #d2d6de; padding: 2px 1px 1px 4px; background: #ffffff;">
                                <input type="checkbox">
                            </span>
                            <h3 class="box-title" style="padding-top: 4px; padding-left: 8px;">Kelas
                                Resource</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="col-md-3">
                                {{-- <div><span style="border: 1px solid #d2d6de; padding: 3px 5px; margin-right: 3px;"><input
                                            type="checkbox" style="padding: 0px; margin: 0px;"></span><span>
                                        Kelas A</span></div> --}}
                                <div><input type="checkbox"> A</div>
                            </div>
                            <div class="col-md-3">
                                {{-- <div><span style="border: 1px solid #d2d6de; padding: 3px 5px; margin-right: 3px;"><input
                                            type="checkbox" style="padding: 0px; margin: 0px;"></span><span>
                                        Kelas B</span></div> --}}
                                <div><input type="checkbox"> B</div>
                            </div>
                            <div class="col-md-3">
                                {{-- <div><span style="border: 1px solid #d2d6de; padding: 3px 5px; margin-right: 3px;"><input
                                            type="checkbox" style="padding: 0px; margin: 0px;"></span><span>
                                        Kelas C</span></div> --}}
                                <div><input type="checkbox"> C</div>
                            </div>
                            <div class="col-md-3">
                                {{-- <div><span style="border: 1px solid #d2d6de; padding: 3px 5px; margin-right: 3px;"><input
                                            type="checkbox" style="padding: 0px; margin: 0px;"></span><span>
                                        Kelas D</span></div> --}}
                                <div><input type="checkbox"> D</div>
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
                            <div class="col-md-3" style="width: 300px; padding: 0px;">
                                <h3 class="box-title" style="padding-top: 0.35em;">Resources - Total Online :
                                    <span id="total-resources">0</span>
                                </h3>
                            </div>
                            <div class="col-md-8" style="padding-left: 0px;">
                                <button type="submit" class="btn btn-default btn-sm"
                                    style="background-color: #E7E7E7; color:#333333;">Lihat di Peta</button>
                            </div>
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
                            <h3 class="box-title"> Faskes - Total Online :
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
                    $('#total-resources').html(result.total);
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

    </script>
@endsection
