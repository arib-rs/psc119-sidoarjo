@extends('layout/main')

@section('title', 'User Management')

@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Management
            <small>Daftar User PSC-119</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> User & Device Management</a></li>
            <li class="active"> User Management</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="btn-group">
                            <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput" class="btn btn-success">
                                <i class="fa fa-plus-circle"></i> Insert Data</button>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th class="text-center">USERNAME</th>
                                            <th class="text-center">NAMA</th>
                                            <th class="text-center">PROFESI</th>
                                            <th class="text-center">LEVEL</th>
                                            <th class="text-center">FASKES ASAL</th>
                                            <th class="text-center">EMAIL</th>
                                            <th class="text-center">TELEPON</th>
                                            <th class="text-center">TIPE USER</th>
                                            <th class="text-center">AKSI</th>
                                            <th class="text-center">AKTIF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">01</td>
                                            <td class="text-center">001</td>
                                            <td class="text-center">dr. Ivan Setiawan, Sp.EM</td>
                                            <td class="text-center">Kepala PSC</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">Command Center</td>
                                            <td class="text-center">ivansetiawan2006@gmail.com</td>
                                            <td class="text-center">081233019130</td>
                                            <td class="text-center"><button class="btn btn-success btn-sm" style="border-radius: 20px;">User Mobile</button></td>
                                            <td class=" text-center">
                                                <a href="#" class="btn btn-success" data-placement="left" title="Kirim Data" style="margin: auto 2px;"><i class="fa fa-send"></i></a>
                                                <a href="#" class="btn btn-primary" data-toggle="modal" data-placement="left" data-target="#ModalInput" title="Edit Data" style="margin: auto 2px;"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="btn btn-danger" data-placement="left" title="Hapus Data" style="margin: auto 2px;"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-success" style="margin: auto 2px; background-color: #3B9C96; border-color: #3B9C96;"><i class="fa fa-check-square-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">02</td>
                                            <td class="text-center">adhon</td>
                                            <td class="text-center">ROMADHON IMAM S</td>
                                            <td class="text-center">Admin</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">Command Center</td>
                                            <td class="text-center">igd.rsud.sda@gmail.com</td>
                                            <td class="text-center">081234567899</td>
                                            <td class="text-center"><button class="btn btn-primary btn-sm" style="border-radius: 20px;">User Web</button></td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-success" data-placement="left" title="Kirim Data" style="margin: auto 2px;"><i class="fa fa-send"></i></a>
                                                <a href="#" class="btn btn-primary" data-toggle="modal" data-placement="left" data-target="#ModalInput" title="Edit Data" style="margin: auto 2px;"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="btn btn-danger" data-placement="left" title="Hapus Data" style="margin: auto 2px;"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-success" style="margin: auto 2px; background-color: #3B9C96; border-color: #3B9C96;"><i class="fa fa-check-square-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">03</td>
                                            <td class="text-center">yankesjuksda</td>
                                            <td class="text-center">Andi Dwi Purwanto, S.Kep. Ns</td>
                                            <td class="text-center">Admin</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">Command Center</td>
                                            <td class="text-center">yankesjuk.sidoarjo@gmail.com</td>
                                            <td class="text-center">085739088836</td>
                                            <td class="text-center"><button class="btn btn-primary btn-sm" style="border-radius: 20px;">User Web</button></td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-success" data-placement="left" title="Kirim Data" style="margin: auto 2px;"><i class="fa fa-send"></i></a>
                                                <a href="#" class="btn btn-primary" data-toggle="modal" data-placement="left" data-target="#ModalInput" title="Edit Data" style="margin: auto 2px;"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="btn btn-danger" data-placement="left" title="Hapus Data" style="margin: auto 2px;"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-success" style="margin: auto 2px; background-color: #3B9C96; border-color: #3B9C96;"><i class="fa fa-check-square-o"></i></a>
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

@section('modal')
<div id="ModalInput" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Form</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method='post' id="form_req" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Personil<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select name='nrp' id="personil" class="form-control select" onchange="">
                                        <option value="">Pilih Personil</option>
                                        <option value="driverpuskesmastaman">yanuarsupriyanto46@gmail.com</option>
                                        <option value="yatman">yatman</option>
                                        <option value="IGDMITRAWARU">RS MITRA KELUARGA WARU</option>
                                        <option value="adityo">adityo</option>
                                        <option value="drhermawan">dr hermawan</option>
                                        <option value="280394091801">VICAN PRAYUSI NARWASTU, A.Md.Kep</option>
                                        <option value="agunk">agunk</option>
                                        <option value="risasitihajar">risa</option>
                                        <option value="risarssitihajar">risa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Level<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <!-- <input type="text" readonly id="level" class="form-control"> -->
                                    <!-- <input type="hidden" readonly name="level" id="id_level"> -->
                                    <select name='level' id="level_id" class="form-control select">
                                        <option value="">Pilih Level</option>
                                        <option value="1">Staf</option>
                                        <option value="2">Petugas Lapangan</option>
                                        <option value="3">Supervisor</option>
                                        <option value="4">Kepala Faskes</option>
                                        <option value="5">Kepala PSC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Email<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' class='form-control' name='email'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Telepon<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='text' class='form-control' name='telepon'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Tipe User<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select name='tipe_user' id="tipe_user" class="form-control select">
                                        <option value="">Pilih Tipe User</option>
                                        <option value="userweb">User Web</option>
                                        <option value="usermobile">User Mobile</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Password<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='password' class='form-control' id='password' name='password'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Confirm Password<span class="required" style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type='password' class='form-control' id='confirm_password' name='confirm_password'><span id='message'></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
            <div class="modal-footer">
                <button type="button" onclick='' class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
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
