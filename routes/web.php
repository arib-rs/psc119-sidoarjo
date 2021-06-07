<?php


use App\Http\Controllers\LoginsController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'LoginsController@index');

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
    'shift' => 'RShiftsController',
    'pasien' => 'PatientDatasController',
    'task' => 'TasksController',
    'peta' => 'ShowMapsController'
]);
Route::get('get-incidents', 'RequestAssistsController@getIncidents')->name('get-incidents');
Route::get('get-incident/{id}', 'RequestAssistsController@getIncident');
