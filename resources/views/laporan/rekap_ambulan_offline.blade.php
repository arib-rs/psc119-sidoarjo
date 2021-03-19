@extends('layout/main')

@section('title', 'Rekap Laporan Ambulan Tidak Aktif')

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
            Rekap Laporan Ambulan Tidak Aktif
            <small>Daftar Semua Laporan Ambulan Tidak Aktif</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-files-o"></i> Laporan - Laporan</a></li>
            <li class="active"> Rekap Laporan Ambulan Tidak Aktif </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#rekap_bantuan" data-toggle="tab">Rekap Ambulan Tidak Aktif</a></li>
            </ul>
            <div class="tab-content">
                <!-- Font Awesome Icons -->
                <div class="tab-pane active" id="rekap_bantuan">
                    <div class="row">
                        <div class="col-md-2">
                            <input type="text" class="form-control pull-right" id="datepicker">
                        </div>
                        <div class="col-md-1">
                            <button role="button" class="btn btn-primary"><i class="fa fa-search"></i> Tampilkan</button>
                        </div>
                        <div class="col-md-9"></div>
                    </div><br>
                    <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nopol</th>
                                <th class="text-center">Shift</th>
                                <th class="text-center">Faskes Asal</th>
                                <th class="text-center">Alasan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                            </tr> -->
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