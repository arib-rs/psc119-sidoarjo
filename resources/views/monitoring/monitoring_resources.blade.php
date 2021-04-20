@extends('layout/main')

@section('title', 'Resource Management')

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
            Monitoring Resources
            <small>status ambulan dilapangan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-television"></i> Monitoring</a></li>
            <li class="active"> Monitoring Resources</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row" style="margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
                <div class="box box-danger box-solid">
                    <div class="box-header with-border">
                        <div class="col-md-3" style="width: 350px; padding: 0px;">
                            <h3 class="box-title" style="padding-top: 0.35em;"> Total Resources SEMES PSC-119 Sidoarjo : 63 </h3>
                        </div>
                        <div class="col-md-8" style="padding-left: 0px;">
                            <button type="submit" class="btn btn-default btn-sm" style="background-color: #E7E7E7; color:#333333;">Lihat di Peta</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row" style="margin-left: 2px;">
                            <div class="col-md-3">
                                <div class="box box-default box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Jenis Resource</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        The body of the box
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box box-default box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Status Resource</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        The body of the box
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box box-default box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Kelas Resource</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        The body of the box
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div style="position:relative; height: 345px; overflow:scroll;padding-top: 10px;">
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 226px;">
                                <span style="font-size: 16px;">W 1100 OK</span> <br> <span style="font-size: 11px;">RS DUMMY</span>
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
                <div class="box box-danger box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Faskes, Total Online : 16 </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-success" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
                            </div>
                            <div class="col-md-2 btn btn-default" style="padding: 10px; display: block; margin: 0.5em 1em; width: 229px;">
                                <span style="font-size: 16px;">RS DUMMY</span> <br> <span style="font-size: 11px;">IGDDUMMY</span>
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

@endsection

@section('scripts')

@endsection
