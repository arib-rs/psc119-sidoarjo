@extends('layout/main')

@section('title', 'Edit Laporan Kejadian')

@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Laporan Kejadian
            <small>Laporan Kejadian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-sliders"></i> Kejadian & Bantuan</a></li>
            <li class="active"> Edit Laporan Kejadian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">CCN</th>
                                            <th class="text-center">PELAPOR</th>
                                            <th class="text-center">WAKTU</th>
                                            <th class="text-center" style="width: 490px;">LOKASI</th>
                                            <th class="text-center" style="width: 370px;">KETERANGAN</th>
                                            <th class="text-center" style="width: 110px;">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">CCN1455-1615267395</td>
                                            <td class="text-center">ellena</td>
                                            <td class="text-center">2021-03-09 12:23:17</td>
                                            <td class="text-center">deltasari waru sidaorjo</td>
                                            <td class="text-center">Menanyakan informasi tentang vaksin covid19 untuk lansia</td>
                                            <td class="text-center">
                                                <a href="{{url('/edit_kejadian')}}" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Edit Kejadian" style="margin: auto 2px;"><i class="fa fa-pencil-square-o"></i></a>
                                                <a id="btn-pembatalan-tugas" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Hapus Kejadian" style="margin: auto 2px;"><i class="fa  fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">CCN1459-1615270053</td>
                                            <td class="text-center">lutfi</td>
                                            <td class="text-center">2021-03-09 12:23:17</td>
                                            <td class="text-center">krembung sidoarjo</td>
                                            <td class="text-center">menyakan untuk mengetahui hasil pcr</td>
                                            <td class="text-center">
                                                <a href="{{url('/edit_kejadian')}}" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Edit Kejadian" style="margin: auto 2px;"><i class="fa fa-pencil-square-o"></i></a>
                                                <a id="btn-pembatalan-tugas" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Hapus Kejadian" style="margin: auto 2px;"><i class="fa  fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">CCN1448-1615074283</td>
                                            <td class="text-center">it kemenkes</td>
                                            <td class="text-center">2021-03-07 06:44:45</td>
                                            <td class="text-center">jakarta</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">
                                                <a href="{{url('/edit_kejadian')}}" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Edit Kejadian" style="margin: auto 2px;"><i class="fa fa-pencil-square-o"></i></a>
                                                <a id="btn-pembatalan-tugas" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Hapus Kejadian" style="margin: auto 2px;"><i class="fa  fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
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
</script>
@endsection
