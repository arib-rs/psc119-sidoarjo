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
    return view('layout.v_template');
});

Route::get('/input_kejadian', function () {
    return view('layout.input_kejadian');
});

Route::get('/req_bantuan', function () {
    return view('layout.req_bantuan');
});

Route::get('/edit_laporan', function () {
    return view('layout.edit_laporan');
});

Route::get('/edit_kejadian', function () {
    return view('layout.edit_kejadian');
});
