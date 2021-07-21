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
            'bed' => 'BedsController',
            'dokter' => 'DoctorsController',
            'darah' => 'BloodsController',
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

        Route::get('layanan_dokter/{id}/edit', 'SpecialistsController@editLayanan')->name('layanan_dokter.edit');
        Route::post('layanan_dokter', 'SpecialistsController@storeLayanan')->name('layanan_dokter.store');
        Route::put('layanan_dokter/{id}', 'SpecialistsController@updateLayanan')->name('layanan_dokter.update');
        Route::delete('layanan_dokter/{id}', 'SpecialistsController@destroyLayanan')->name('layanan_dokter.destroy');

        Route::get('kemasan/{id}/edit', 'MedicinesController@editKemasan')->name('kemasan.edit');
        Route::post('kemasan', 'MedicinesController@storeKemasan')->name('kemasan.store');
        Route::put('kemasan/{id}', 'MedicinesController@updateKemasan')->name('kemasan.update');
        Route::delete('kemasan/{id}', 'MedicinesController@destroyKemasan')->name('kemasan.destroy');

        Route::get('kategoriobat/{id}/edit', 'MedicinesController@editKategori')->name('kategoriobat.edit');
        Route::post('kategoriobat', 'MedicinesController@storeKategori')->name('kategoriobat.store');
        Route::put('kategoriobat/{id}', 'MedicinesController@updateKategori')->name('kategoriobat.update');
        Route::delete('kategoriobat/{id}', 'MedicinesController@destroyKategori')->name('kategoriobat.destroy');

        Route::get('get-incidents', 'RequestAssistsController@getIncidents')->name('get-incidents');
        Route::get('get-incident-by-kode/{kode}', 'InputIncidentsController@getDataKejadian');
        Route::get('get-incident-by-id/{id}', 'RequestAssistsController@getIncident');
        Route::get('get-health-facilities', 'ResourcesController@getHealthFacilities')->name('get-health-facilities');

        Route::get('get-faskes', 'HealthFacilitiesController@getFaskes');
        Route::get('get-faskes-by-id/{id}', 'HealthFacilitiesController@getFaskesById');

        Route::get('get-beds/{idhf}', 'HealthFacilitiesController@getBeds');
        Route::get('faskes/{idhf}/beds', 'HealthFacilitiesController@showBeds');

        Route::get('get-doctors/{idhf}', 'HealthFacilitiesController@getDoctors');
        Route::get('get-bloods/{idhf}', 'HealthFacilitiesController@getBloods');
        Route::get('get-ambulan', 'ResourcesController@getAmbulan');
        Route::get('get-sub-kategori', 'SubCategoriesController@getSubKategori');
        Route::get('get-kategori', 'CategoriesController@getKategori');
        Route::get('get-packaging-category', 'MedicinesController@getDataPackagingCategory')->name('get-packaging-category');
        Route::get('get-obat', 'MedicinesController@getObat');
        Route::get('get-kemasan', 'MedicinesController@getKemasan');
        Route::get('get-kategori-obat', 'MedicinesController@getKategori');
        Route::get('get-spesialis', 'SpecialistsController@getSpesialis');
        Route::get('get-layanan', 'SpecialistsController@getLayanan');
        Route::get('get-task', 'TasksController@getTask');
        Route::get('get-form-data-category', 'CategoriesController@getFormDataCategory')->name('get-form-data-category');
        Route::get('get-rshift', 'RshiftsController@getRShift');
        Route::get('get-form-data-healthfacility', 'RshiftsController@getFormDataHealthFacility')->name('get-form-data-healthfacility');
        Route::get('get-form-data-resource/{id}', 'RshiftsController@getFormDataResource')->name('get-form-data-resource');
    }
);
