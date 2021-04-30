<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layout.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/input_kejadian', function () {
    return view('kejadian_bantuan.input_kejadian');
});

Route::get('/req_bantuan', function () {
    return view('kejadian_bantuan.req_bantuan');
});

Route::get('/detail_penanganan', function () {
    return view('kejadian_bantuan.detail_penanganan');
});

Route::get('/edit_laporan', function () {
    return view('kejadian_bantuan.edit_laporan');
});

Route::get('/edit_kejadian', function () {
    return view('kejadian_bantuan.edit_kejadian');
});

Route::get('/personil', function () {
    return view('user_device_management.personil');
});

Route::get('/management_user', function () {
    return view('user_device_management.management_user');
});

Route::get('/devicelist', function () {
    return view('user_device_management.devicelist');
});

Route::get('/emergency_button_user', function () {
    return view('user_device_management.emergency_button_user');
});

Route::get('/konfirmasi_penugasan', function () {
    return view('konfirmasi_approval.konfirmasi_penugasan');
});

Route::get('/rekap_shift', function () {
    return view('konfirmasi_approval.rekap_shift');
});

Route::get('/monitoring_alarm', function () {
    return view('monitoring.monitoring_alarm');
});

Route::get('/penanganan_kejadian', function () {
    return view('monitoring.penanganan_kejadian');
});

Route::get('/monitoring_resources', function () {
    return view('monitoring.monitoring_resources');
});

Route::get('/laporan_kejadian', function () {
    return view('laporan.laporan_kejadian');
});

Route::get('/rekap_kejadian', function () {
    return view('laporan.rekap_kejadian');
});

Route::get('/rekap_bantuan', function () {
    return view('laporan.rekap_bantuan');
});

Route::get('/rekap_penolakan_pembatalan', function () {
    return view('laporan.rekap_penolakan_pembatalan');
});

Route::get('/rekap_perawat', function () {
    return view('laporan.rekap_perawat');
});

Route::get('/rekap_ambulan_offline', function () {
    return view('laporan.rekap_ambulan_offline');
});

Route::get('/faskes', function () {
    return view('master.faskes');
});

Route::get('/ambulan', function () {
    return view('master.ambulan');
});

Route::get('/spesialisasi_dokter', function () {
    return view('master.spesialisasi_dokter');
});

Route::get('/kategori', function () {
    return view('master.kategori');
});

// Route::get('/mobil_sehat', function () {
//     return view('master.mobil_sehat');
// });

Route::get('/sub_kategori', function () {
    return view('master.sub_kategori');
});

Route::get('/obat', function () {
    return view('master.obat');
});

Route::get('/shift', function () {
    return view('master.shift');
});

Route::get('/pasien', function () {
    return view('master.pasien');
});

Route::get('/task', function () {
    return view('master.task');
});

Route::get('/peta', function () {
    return view('buka_peta.show_map');
});
