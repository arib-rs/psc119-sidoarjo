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
                {{-- <div class="row">
                    <div class="col-md-4">
                        <div class="btn-group">
                            <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput" class="btn btn-success">
                                <i class="fa fa-plus-circle"></i> Insert Data</button>
                        </div>
                    </div>
                </div><br> --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <table class="table table-bordered table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Profesi</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Faskes Asal</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Telepon</th>
                                            <th class="text-center">Tipe User</th>
                                            <th class="text-center">Aktif</th>
                                            <th class="text-center" style="width: 120px;"><a id="btn-add"
                                                    data-toggle="tooltip" class="btn btn-xs btn-success"><i
                                                        class="fa fa-plus-circle"></i> Input Data</a>
                                            </th>
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
                                            <td class="text-center"><button class="btn btn-success btn-sm"
                                                    style="border-radius: 20px;"><i
                                                    class="glyphicon glyphicon-phone"></i> User Mobile</button></td>
                                            <td class="text-center">
                                                <a id="btn-aktif" class="btn btn-sm btn-success" data-id=""
                                                    title="Non Aktifkan">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </td>
                                            <td class=" text-center">
                                                <div style="margin-bottom:3px;">
                                                    <a id="btn-send" class="btn btn-sm btn-success" data-id=""
                                                        title="Kirim Data">
                                                        <i class="fa fa-send"></i></a>
                                                    <a id="btn-edit" class="btn btn-sm btn-primary" data-id=""
                                                        title="Edit Data">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a id="btn-delete" class="btn btn-sm btn-danger" data-id=""
                                                        title="Hapus Data">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
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
                                            <td class="text-center"><button class="btn btn-primary btn-sm"
                                                    style="border-radius: 20px;"><i
                                                    class="fa fa-laptop"></i> User Web</button></td>
                                            <td class="text-center">
                                                <a id="btn-aktif" class="btn btn-sm btn-success" data-id=""
                                                    title="Non Aktifkan">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </td>
                                            <td class=" text-center">
                                                <div style="margin-bottom:3px;">
                                                    <a id="btn-send" class="btn btn-sm btn-success" data-id=""
                                                        title="Kirim Data">
                                                        <i class="fa fa-send"></i></a>
                                                    <a id="btn-edit" class="btn btn-sm btn-primary" data-id=""
                                                        title="Edit Data">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a id="btn-delete" class="btn btn-sm btn-danger" data-id=""
                                                        title="Hapus Data">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
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
                                            <td class="text-center"><button class="btn btn-primary btn-sm"
                                                    style="border-radius: 20px;"><i
                                                    class="fa fa-laptop"></i> User Web</button></td>
                                            <td class="text-center">
                                                <a id="btn-aktif" class="btn btn-sm btn-success" data-id=""
                                                    title="Non Aktifkan">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </td>
                                            <td class=" text-center">
                                                <div style="margin-bottom:3px;">
                                                    <a id="btn-send" class="btn btn-sm btn-success" data-id=""
                                                        title="Kirim Data">
                                                        <i class="fa fa-send"></i></a>
                                                    <a id="btn-edit" class="btn btn-sm btn-primary" data-id=""
                                                        title="Edit Data">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a id="btn-delete" class="btn btn-sm btn-danger" data-id=""
                                                        title="Hapus Data">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
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
<div id="ModalInput" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Form</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-data" class="form-horizontal">
                <div class="modal-body">
                    <div class="form-body">
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                        <div class="form-group">
                            <label class="control-label col-md-4">Personil<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control select2personil" name="person_id" id="person_id" style="width: 100%;">
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
                            <label class="control-label col-md-4">Level<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control select2profesi" name="profession_id" id="profession_id"
                                    style="width: 100%;">
                                    <option value="">Pilih Profesi</option>
                                    <option value="0">Staff</option>
                                    <option value="1">Driver</option>
                                    <option value="2">Perawat</option>
                                    <option value="3">Kepala Faskes</option>
                                    <option value="4">Kepala PSC</option>
                                    <option value="5">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Email<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Telepon<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="phone_num" name="phone_num">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Tipe User<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <select autocomplete="off" class="form-control" name="type_user" id="type_user">
                                    <option value="">Pilih Tipe User</option>
                                    <option value="userweb">User Web</option>
                                    <option value="usermobile">User Mobile</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Password<span class="required" style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Confirm Password<span class="required"
                                    style="color: red;">
                                    * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="confirm_password"
                                    name="confirm_password" required></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-reset" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button id="btn-save" type="button" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(function() {
        $('.select2personil').select2();
        $('.select2profesi').select2();

        $('.datatable').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': false,
            'info': true,
            'autoWidth': false
        });

        $('#form-data').submit(function(e) {
            e.preventDefault();
        });

        $('#btn-add').click(function() {
            //reset
            $('#form-data').find('.form-control').val('');
            //show modal
            $('.modal-title').html('<b>Input Data</b>');
            $('#ModalInput').modal('show');
        });
    })
</script>
@endsection
