<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register');

Route::middleware(['auth'])->group(
    function () {
        Route::resources([
            'dashboard' => 'DashboardsController',
            'detail_penanganan' => 'DetailHandlingsController',
            'input_kejadian' => 'InputIncidentsController',
            'req_bantuan' => 'RequestAssistsController',
            'edit_laporan' => 'EditReportsController',
            'edit_kejadian' => 'EditIncidentsController',
            'konfirmasi_penugasan' => 'AssignmentConfirmationsController',
            'rekap_shift' => 'RecapShiftsController',
            'monitoring_alarm' => 'MonitoringAlarmsController',
            'penanganan_kejadian' => 'IncidentHandlingsController',
            'monitoring_resources' => 'MonitoringResourcesController',
            'laporan_kejadian' => 'ReportIncidentsController',
            'rekap_kejadian' => 'RecapIncidentsController',
            'rekap_bantuan' => 'RecapAssistsController',
            'rekap_penolakan_pembatalan' => 'RecapRejectionCancellationsController',
            'rekap_perawat' => 'RecapNursesController',
            'rekap_ambulan_offline' => 'RecapAmbulancesController',
            'personil' => 'PersonsController',
            'management_user' => 'UsersController',
            'devicelist' => 'DevicesController',
            'emergency_button_user' => 'EmergencyButtonUsersController',
            'faskes' => 'HealthFacilitiesController',
            'ambulan' => 'ResourcesController',
            'spesialisasi_dokter' => 'SpecialistsController',
            'kategori' => 'CategoriesController',
            'sub_kategori' => 'SubCategoriesController',
            'obat' => 'MedicinesController',
            'shift' => 'RshiftsController',
            'pasien' => 'PatientDatasController',
            'task' => 'TasksController',
            'peta' => 'ShowMapsController'
        ]);
        Route::get('get-incidents', 'RequestAssistsController@getIncidents')->name('get-incidents');
        Route::get('get-incident-by-kode/{kode}', 'InputIncidentsController@getDataKejadian');
        Route::get('get-incident-by-id/{id}', 'RequestAssistsController@getIncident');
    }
);
