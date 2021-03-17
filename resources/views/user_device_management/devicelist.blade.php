@extends('layout/main')

@section('title', 'Device Management')

@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Device Management
            <small>List Device Yang Sudah Terdaftar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> User & Device Management</a></li>
            <li class="active"> Device Management</li>
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
                                            <th class="text-center">DEVICE ID</th>
                                            <th class="text-center">PEMILIK</th>
                                            <th class="text-center">ASAL</th>
                                            <th class="text-center">PENGGUNA</th>
                                            <th class="text-center">TIPE DEVICE</th>
                                            <th class="text-center">RESOURCE</th>
                                            <th class="text-center">TERAKHIR LOGIN</th>
                                            <th class="text-center">STATUS</th>
                                            <th class="text-center">AKTIF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">07d8ed28457a4b7d</td>
                                            <td class="text-center">18099007151 - ACHMAD ZAINUDDIN ZULFI, A.Md.Kep</td>
                                            <td class="text-center">RSUD SIDOARJO</td>
                                            <td class="text-center">Tidak Ada Pengguna</td>
                                            <td class="text-center">
                                                <select name="tipe_device" class="form-control input-sm" onchange="">
                                                    <option value="personil">Personil</option>
                                                    <option value="ambulan">Ambulan</option>
                                                </select>
                                            </td>
                                            <td class="text-center">Tidak Ada</td>
                                            <td class="text-center">2019-11-30 07:16:22</td>
                                            <td class=" text-center"><label class="label label-danger"><i class="fa fa-times-circle"></i> Offline</label></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-xs btn-default" style="width: 24px; margin: auto 2px;"><i class="fa fa-square-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">bea4518306ba0289</td>
                                            <td class="text-center">26118810131 - Abdul Hakim Umar, Amd.Kep</td>
                                            <td class="text-center">RSUD SIDOARJO</td>
                                            <td class="text-center">Tidak Ada Pengguna</td>
                                            <td class="text-center">
                                                <select name="tipe_device" class="form-control input-sm" onchange="">
                                                    <option value="personil">Personil</option>
                                                    <option value="ambulan">Ambulan</option>
                                                </select>
                                            </td>
                                            <td class="text-center">Tidak Ada</td>
                                            <td class="text-center">2020-01-04 09:23:24</td>
                                            <td class=" text-center"><label class="label label-danger"><i class="fa fa-times-circle"></i> Offline</label></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-xs btn-default" style="width: 24px; margin: auto 2px;"><i class="fa fa-square-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">cf184f3e00405a00</td>
                                            <td class="text-center">198802222010012015 - Nur Hidayati S, A.Md. Kep</td>
                                            <td class="text-center">RSUD SIDOARJO</td>
                                            <td class="text-center">Tidak Ada Pengguna</td>
                                            <td class="text-center">
                                                <select name="tipe_device" class="form-control input-sm" onchange="">
                                                    <option value="personil">Personil</option>
                                                    <option value="ambulan">Ambulan</option>
                                                </select>
                                            </td>
                                            <td class="text-center">Tidak Ada</td>
                                            <td class="text-center">2021-03-15 11:16:22</td>
                                            <td class=" text-center"><label class="label label-success"><i class="fa fa-check-circle"></i> Online</label></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-xs btn-default" style="width: 24px; margin: auto 2px;"><i class="fa fa-square-o"></i></a>
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
